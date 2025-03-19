<?php

namespace App\Http\Controllers;


use App\Models\Appointment;
use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;

class HospitalController extends Controller
{



    public function index()
    {
      $settings = DB::table('settings')->where('id', 1)->first();
      if($settings->active!='on'){return view('under_construction');} 

        $data = Hospital::orderBy('id', 'asc')->get();
        return view('admin.hospital.index', ['data'=>$data]);        
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
      $doctor = Hospital::find($id);

      $data['hit_count']= $doctor->hit_count+1;        
      DB::table('team_members')
          ->where('id', $id)
          ->update($data);

      return view('doctor_detail', ['page'=>'doctor-detail', 'doctor'=>$doctor]); 
    }

    public function appointment($id=null){
      if($id != null){
        $doctor = Hospital::find($id);
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

        
        return view('admin.hospital.create');
      }

      public function store(Request $request)
      {      
        dd($request);  

        $data = new Hospital;
        //$data->title = $request->title;       
        //$data->slug = Str::slug($request->title);
        //dd($request); 
        $data->title = $request->title;
        $data->sub_title = $request->sub_title;
        $data->type = $request->type;
        $data->category = $request->category;
        $data->address = $request->address;
        $data->sub_district = $request->sub_district;
        $data->district = $request->district;
        $data->zone_id = $request->zone_id;
        $data->description = $request->description;
        $data->short_description = $request->short_description;
        $data->email = $request->email;
        $data->m_no = $request->m_no;
        $data->website = $request->website;
        $data->fb_link = $request->fb_link;

        if($request->file('image')!= null){
            $data->image = $request->file('image')->store('images');
        } 
        $data->active = $request->active;
        $data->created_by = session('user.id');
        $data->updated_by = '';
        $data->save();

        return redirect()->back()->with(session()->flash('alert-success', 'Data has been inserted successfully.'));    

      }

      public function edit($id){       
        $data = Hospital::find($id);      
        return view('admin.hospital.edit', ['data'=>$data]);
      }

    public function update(Request $request)
    {       
      //  dd($request);
          $data = Hospital::find($request->id);
          $data->title = $request->title;
          $data->sub_title = $request->sub_title;
          $data->type = $request->type;
          $data->category = $request->category;
          $data->address = $request->address;
          $data->sub_district = $request->sub_district;
          $data->district = $request->district;
          $data->zone_id = $request->zone_id;
          $data->description = $request->description;
          $data->short_description = $request->short_description;  
          $data->email = $request->email;
          $data->m_no = $request->m_no;
          $data->website = $request->website;
          $data->fb_link = $request->fb_link;
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
