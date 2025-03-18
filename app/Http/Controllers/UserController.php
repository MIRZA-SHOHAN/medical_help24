<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Helper\Helper;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =  DB::table('users')->where('user_type', '!=', 'Admin')->get();   
        return view('admin.users', ['data'=>$data]);
    }
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function signin( Request $req)
    {
         $user = User::where(['email'=>$req->email])->first();          
         
         if($user){

                if($user->is_verified != 1)
                {
                    $req->session()->put('exception', 'Your account is not verified. Please check your email!');
                    return redirect('/signin');
                }   
                if($user->active == 'disable')
                {
                    $req->session()->put('exception', 'Your account is now disabled. Please contact help@ready3dmodels.com');
                    return redirect('/signin');
                }  

                
                if(!Hash::check($req->password, $user->password))
                {
                    $req->session()->put('exception', 'Wrong password! Please retry with the correct information.');                    
                   
                    if($user->wrong_login_attempt == 5)
                    {
                        $user->active = 'disable';
                        $user->save();
                        $req->session()->put('exception', 'You have cross max incorrect password limit! Your account is now disabled! Please contact with system admin.');
                        return redirect('/signin');
                    } else{
                        if($user->wrong_login_attempt == null){
                            $user->wrong_login_attempt = 1;
                            $user->save();
                        }else{
                            $user->wrong_login_attempt = $user->wrong_login_attempt + 1;
                            $user->save();
                        }
                    }     
                    //dd($user->wrong_login_attempt); 
                    return redirect('/signin');
                }   
                else{                   
                    session()->put('user', $user);
                    $req->session()->put('user', $user);
                    if($user->user_type == 'User' && session('source')=='cart'){
                        session()->pull('source');
                        return redirect('/checkout');
                    }    
                    
                    if($user->user_type == 'Admin'){
                        return redirect('/admin');
                    }        
                    return redirect('/');
                }
        }else{
            $req->session()->put('exception', 'User not found!');
            return redirect('/signin');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function store(Request $request)
    {
    //    $validate = $request->validate([
    //         'name'=>'required',
    //         'email'=>'required',
    //         'password'=>'required|min:8|regex:/[A-Z]/|regex:/[0-9]/|regex:/[@$!%*#?&]/'
    //     ]);

    $password = $request->password;    
    
    // password length
    if(strlen($password)<8){
        return response()->json(['success'=>false,'data'=>'The password must be at least 8 characters containing with a number and a sign letter.']);
    }
    // number validation
    for ($i = 0; $i <= strlen($password)-1; $i++) {
        $char = $password[$i];
        $has_number = in_array($char, range(0,9)) ? 'yes' : 'no';
    }
    if($has_number == 'no'){
        return response()->json(['success'=>false,'data'=>'The password must be at least 8 characters containing with a number and a sign letter.']);
    }

    // special character validation
    if (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $password))
    {
        return response()->json(['success'=>false,'data'=>'The password must be at least 8 characters inclusing a sign. e.g. @ ! # *']);
    }
           
    // existance check
    $is_user = User::where(['email'=>$request->email])->first();
    if($is_user){        
        return response()->json(['success'=>false,'data'=>'This email is already registered.']);
    }

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email; 
        $user->password = Hash::make($request->password);
        $user->user_type = 'User';
        $user->verification_code = sha1(time());
        $user->save();
        
        if($user!=null)
        {
            //send email
            MailController::signupEmail($user->name, $user->email, $user->verification_code);
            //show message            
            return response()->json(['success'=>true,'data'=>'Your account has been created. Please check your email for verification link.']);
        }
        
        //error message
        //return redirect()->back()->with(session()->flash('alert-danger', 'Something went wrong'));
        return response()->json(['success'=>false,'data'=>'Something went wrong! Please try again.']);
    }

    public function storeUser(Request $request){
        $data = new User;
        $data->name = $request->name;
        $data->email = $request->email; 
        $data->password = Hash::make($request->password);
        $data->user_type = $request->user_type;
        $data->is_verified = '1';
        $data->verification_code = sha1(time());
        $data->save();
        Helper::saveDefaultFolders($data->id);
        return redirect()->back()->with(session()->flash('alert-success', 'New user created.'));
    }
   


    public function verifyUser(Request $request){
        $verification_code = \Illuminate\Support\Facades\Request::get('code');
        $user = User::where(['verification_code' => $verification_code])->first();
        if($user != null){
            $user->is_verified = 1;
            $user->save();
            session()->put('user', $user);
            
            return redirect('/signin')->with(session()->flash('alert-success', 'Your account is verified. Please login!'));
        }

        return redirect('signin')->with(session()->flash('alert-danger', 'Invalid verification code!'));
    }

    public function resetPassword(Request $request)
    {
        $email = $request->email; 
        $reset_pass_code = sha1(time());

        $user = User::where(['email' => $email])->first();
        if($user != null){
            $user->reset_pass_code =  $reset_pass_code;
            $user->save();

            MailController::resetPasswordEmail($email, $reset_pass_code);
            return redirect()->back()->with(session()->flash('alert-success', 'Please check your email for reset password link.'));
        }
        return redirect()->route('signin')->with(session()->flash('alert-danger', 'Something went wrong. Please try again!'));      
       
    }
    public function resetPass(Request $request){
        $reset_pass_code = \Illuminate\Support\Facades\Request::get('code');
        $user = User::where(['reset_pass_code' => $reset_pass_code])->first();
        if($user != null){
            return redirect()->route('newPassword')->with(session()->flash('alert-success', 'Please reset your password.'));
        }

        return redirect()->route('signin')->with(session()->flash('alert-danger', 'Something went wrong. Please try again!'));
    }

  
    

    public function newPasswordStore(Request $request){
        $reset_pass_code = $request->reset_pass_code;
       
        $user = User::where(['reset_pass_code' => $reset_pass_code])->first();     
        
        if($user != null){
            $user->password = Hash::make($request->new_password);            
            $user->reset_pass_code = '';            
            $user->save();
            return redirect()->route('signin')->with(session()->flash('alert-success', 'Your password has been changed successfully.'));
        }

        return redirect()->route('signin')->with(session()->flash('alert-danger', 'Something went wrong. Please try again!'));
    }

    public function edit()
    {
        $user_id = session('user.id');
        $user = User::find($user_id);
        return view('admin.profile', ['data'=>$user]);
    }

    public function update(Request $request)
    {
        //dd($request);
        $user_id = session('user.id');
        $user = User::find($user_id);  
        $user->fname = $request->fname;  
        $user->lname = $request->lname;  
        $user->email = $request->email;  
        $user->phone = $request->phone;  
        $user->language = $request->language;  

        
        if($request->file('image')!= null){
            $user->image = $request->file('image')->store('images');
        }  
        if($request->password != null && $request->password != '******'){
            // if(!Hash::check($request->current_password, $user->password))
            // {
            //     return redirect()->back()->with(session()->flash('alert-danger', 'Current password is not correct.'));        
            // }   
            // if($request->new_password != $request->confirm_password)
            // {
            //     return redirect()->back()->with(session()->flash('alert-danger', 'Confirm password is not matched with new password.'));        
            // }   

            $user->password = Hash::make($request->password);
        }

        $user->save();
        return redirect()->back()->with(session()->flash('alert-success', 'Information updated successfully.'));        
    }
    public function change_user_status(Request $request)
    {
        $active = $request->active;
        if($active!='disable'){
            $active = 'disable';
        }else{
            $active = 'active';
        }
        $user = User::find($request->user_id); 
        $user->active = $active;        
        $user->save();
        return redirect()->back()->with(session()->flash('alert-success', 'User updated successfully.'));        
    }
    
    public function update_user(Request $request)
    {
        $name = $request->name;    
        $current_password = $request->current_password;    
        $new_password = $request->new_password;    
        $confirm_password = $request->confirm_password;    

        $user = User::where(['email'=>session('user.email')])->first(); 

        if($name == null)
        {
            return response()->json(['success'=>false,'data'=>'Please enter your name.']);
        }
        if($current_password == null)
        {
            return response()->json(['success'=>false,'data'=>'Please enter your current password.']);
        }
        
        if(!Hash::check($request->current_password, $user->password))
        {
            return response()->json(['success'=>false,'data'=>'Current password is not correct!']);
        }
        if($current_password == $new_password)
        {
            return response()->json(['success'=>false,'data'=>'You are using old password. Please make a change in your new password.']);
        }       
        
    
        // password length
        if(strlen($new_password)<8){
            return response()->json(['success'=>false,'data'=>'Please use at least 8 characters in your password!']);
        }
        // number validation
        for ($i = 0; $i <= strlen($new_password)-1; $i++) {
            $char = $new_password[$i];
            $has_number = in_array($char, range(0,9)) ? 'yes' : 'no';
        }
        if($has_number == 'no'){
            return response()->json(['success'=>false,'data'=>'Please use at least one number in your password!']);
        }
        // special character validation
        if (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $new_password))
        {
            return response()->json(['success'=>false,'data'=>'Please use at least one special character in your password!']);
        }

        if($new_password != $confirm_password)
        {
            return response()->json(['success'=>false,'data'=>'Confirm password is not matched. Please try again.']);
        } 
        

        $user->name = $request->name; 
        // if($request->file('profile_image')!= null){
        //     $user->image = $request->file('profile_image')->store('images');
        // } 
        if($request->new_password!= null){
            $user->password = Hash::make($request->new_password);
        }
        $user->save(); 

        //end session
        if(session()->has('user')){
            session()->pull('user');
        }          

        return response()->json(['success'=>true,'data'=>'Your account information has been updated successfully.']);

    }


    public function updateUser(Request $request)
    {
        //dd($request);
        $data = User::find($request->id); 
        $data->name = $request->name; 
        $data->user_type = $request->user_type;       
        $data->save();
        return redirect()->back()->with(session()->flash('alert-success', 'Data updated successfully.'));        
    }

    public function deleteUser($id){
        $data = User::find($id);
        $data->delete();

        return redirect()->back()->with(session()->flash('alert-success', 'User deleted successfully.'));
    }

    public function myAccount()
    {
        return view('my_account')->with('main_content');
    }

    public function logout()
    {
        if(session()->has('user')){
            session()->pull('user');
        }
        return redirect('/');
    }
}
