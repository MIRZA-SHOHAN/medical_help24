<?php

namespace App\Http\Controllers;

use App\Models\TeamMember;
use App\Models\Doctor;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;

class DoctorController extends Controller
{



    public function index()
    {
      $settings = DB::table('settings')->where('id', 1)->first();
      if($settings->active!='on'){return view('under_construction');} 

        $data = Doctor::orderBy('id', 'asc')->get();

        // $data = Doctor::orderBy('id', 'asc')
        // ->leftJoin('specialities', 'team_members.speciality_id', '=', 'specialities.id')
        // ->select('team_members.*', 'specialities.title as speciality_title')
        // ->get();


        return view('admin.doctor.index', ['data'=>$data]);        
    }


      public function create()
      {        
        return view('admin.doctor.create');
      }

      public function store(Request $request)
      {      
        dd($request);  

        $data = new Doctor;
        //$data->title = $request->title;       
        //$data->slug = Str::slug($request->title);
        // dd($request->speciality_id); 
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->degree = $request->degree;
        $data->fees = $request->fees;
        $data->dep_id = $request->dep_id;
        $data->hospital_id = $request->hospital_id;
        $data->specialities = $request->specialities;
        $data->gender = $request->gender;
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
      

      public function edit($id){       
        $data = Doctor::find($id);      
        return view('admin.doctor.edit', ['data'=>$data]);
      }

    public function update(Request $request)
    {       
      // dd($request);
          $data = Doctor::find($request->id);
          $data->name = $request->name;
          $data->designation = $request->designation;
          $data->degree = $request->degree;
          $data->fees = $request->fees;
          $data->dep_id = $request->dep_id;
          $data->hospital_id = $request->hospital_id;
          $data->specialities = $request->specialities;
          $data->gender = $request->gender;
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
