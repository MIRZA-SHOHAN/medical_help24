<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;

class TeamMemberController extends Controller
{



    public function index()
    {
      $settings = DB::table('settings')->where('id', 1)->first();
      if($settings->active!='on'){return view('under_construction');} 

        $data = TeamMember::orderBy('id', 'asc')->get();

        $data = TeamMember::orderBy('id', 'asc')
        ->leftJoin('specialities', 'team_members.speciality_id', '=', 'specialities.id')
        ->select('team_members.*', 'specialities.title as speciality_title')
        ->get();


        return view('admin.team_member.index', ['data'=>$data]);        
    }

    public function show1($slug)
    {
        $fetch = DB::table('team_members')
                ->where('slug',$slug)
                ->first();
        $data['hit_count']= $fetch->hit_count+1;
        
        DB::table('team_members')
        		->where('slug',$slug)
        		->update($data);
        //echo $data['hit_count'];exit();

        return view('post_details', ['data' => $fetch]);
        // return \Response::json($post_data);        
    }  

    public function show($id){
      $doctor = TeamMember::find($id);

      $data['hit_count']= $doctor->hit_count+1;        
      DB::table('team_members')
          ->where('id', $id)
          ->update($data);

      return view('doctor_detail', ['page'=>'doctor-detail', 'doctor'=>$doctor]); 
    }

    public function appointment($id=null){
      if($id != null){
        $doctor = TeamMember::find($id);
        $data['hit_count']= $doctor->hit_count+1;        
        DB::table('team_members')
            ->where('id', $id)
            ->update($data);
      }else{
        $doctor = '';
      }

      return view('appointment', ['page'=>'appointment', 'doctor'=>$doctor]); 
    }

    public function appointment_list()
    {
      $settings = DB::table('settings')->where('id', 1)->first();
      if($settings->active!='on'){return view('under_construction');} 

        $data = Appointment::orderBy('id', 'asc')->get();
        return view('admin.team_member.appoinment', ['data'=>$data]);        
    }

      /*============================
       Posts
       ============================*/
       public function TeamMember()
       {     
        
        $data = Post::orderBy('id', 'desc')->get();
        return view('admin.posts', ['data'=>$data]);

      } 

      public function create()
      {        
        return view('admin.team_member.create');
      }

      public function store(Request $request)
      {      
        // dd($request);  

        $data = new TeamMember;
        //$data->title = $request->title;       
        //$data->slug = Str::slug($request->title);
        // dd($request->speciality_id); 
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->degree = $request->degree;
        $data->fees = $request->fees;
        $data->hospital_id = $request->hospital_id;
        $data->speciality_id = $request->speciality_id;
        $data->sort_order = $request->sort_order;
        $data->description = $request->description;
        $data->short_description = $request->short_description;
        if($request->file('image')!= null){
            $data->image = $request->file('image')->store('images');
        } 
        $data->active = $request->active;
        $data->created_by = session('user.id');
        $data->updated_by = '';
        $data->save();

        return redirect()->back()->with(session()->flash('alert-success', 'Data has been inserted successfully.'));    

      }
      public function appointment_store(Request $request)
      {      
        // dd($request);  
        $doctor = TeamMember::find($request->doctor_id);

        $data = new Appointment;
        //$data->title = $request->title;       
        //$data->slug = Str::slug($request->title);
        //dd($request); 
        $data->doctor_id = $request->doctor_id;
        $data->name = $request->name;
        $data->mobile = $request->mobile;
        $data->app_date_time = $request->app_date_time;
        $data->message = $request->message;
        // $data->description = $request->description;
        // $data->short_description = $request->short_description;
        // if($request->file('image')!= null){
        //     $data->image = $request->file('image')->store('images');
        // } 
        $data->active = $request->active;
        $data->created_by = session('user.id');
        $data->updated_by = '';
        $data->save();

        $sms_sent = 0;
        if($request->mobile != null){
          $to = $request->mobile;
          $token = "94751906291683983189561cb8ed0996b4f5bc0b743165945299";

          $message = "প্রিয় ".$data->name.", আপনার সিরিয়াল কাউন্ট করা হয়েছে। সিরিয়াল নম্বর:".$data->id."। ধন্যবাদ - মা জেনারেল হাসপাতাল";
          
          $url = "http://api.greenweb.com.bd/api.php?json";  
          $data= array(
          'to'=>"$to",
          'message'=>"$message",
          'token'=>"$token"
          );  
          $ch = curl_init(); 
          curl_setopt($ch, CURLOPT_URL,$url);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
          curl_setopt($ch, CURLOPT_ENCODING, '');
          curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          $smsresult = curl_exec($ch);
          
          //update sms status in order table
          $message_length = strlen($message);
          $sms_count = ceil($message_length/170); // for english 170 character is 1 sms
          $sms_sent ++;
          //dd($sms);
          // $order_data['sms'] = $sms_count;
          // DB::table('orders')->where('id', $order_id)->update($order_data);
          // end: sms update
        }

        if($request->mobile != null){
          $to = '01716179392';
          $token = "94751906291683983189561cb8ed0996b4f5bc0b743165945299";

          $message = "New appointment from ".$request->name."(".$request->mobile."), Dr: ".$doctor->name.". Thanks - Ma General Hospital";
          
          $url = "http://api.greenweb.com.bd/api.php?json";  
          $data= array(
          'to'=>"$to",
          'message'=>"$message",
          'token'=>"$token"
          );  
          $ch = curl_init(); 
          curl_setopt($ch, CURLOPT_URL,$url);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
          curl_setopt($ch, CURLOPT_ENCODING, '');
          curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          $smsresult = curl_exec($ch);
          
          //update sms status in order table
          $message_length = strlen($message);
          $sms_count = ceil($message_length/170); // for english 170 character is 1 sms
          $sms_sent ++;
          //dd($sms);
          // $order_data['sms'] = $sms_count;
          // DB::table('orders')->where('id', $order_id)->update($order_data);
          // end: sms update
        }


        return redirect()->back()->with(session()->flash('alert-success', 'Your Appointment has been recorded.'));    

      }

      public function edit($id){       
        $data = TeamMember::find($id);      
        return view('admin.team_member.edit', ['data'=>$data]);
      }

    public function update(Request $request)
    {       
      // dd($request);
          $data = TeamMember::find($request->id);
          $data->name = $request->name;
          $data->designation = $request->designation;
          $data->degree = $request->degree;
          $data->fees = $request->fees;
          $data->speciality_id = $request->speciality_id;
          $data->sort_order = $request->sort_order;
          $data->description = $request->description;
          $data->short_description = $request->short_description; 
          if($request->file('image')!= null){
              $data->image = $request->file('image')->store('images');
          }else{
              $data->image = $request->hidden_image;
          }
          $data->active = $request->active;
          $data->updated_by = session('user.id');
          $data->save(); 

          return redirect()->back()->with(session()->flash('alert-success', 'Data has been updated successfully.'));
    }

    public function destroy($id)
    {
      DB::table('posts')
      ->where('id',$id)
      ->delete();

      return redirect()->back()->with(session()->flash('alert-success', 'Post has been deleted successfully.'));
    }

    /*============================
       End News Post
       ============================*/

     

}
