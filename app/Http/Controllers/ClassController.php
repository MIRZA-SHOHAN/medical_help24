<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;

class ClassController extends Controller
{
    public function classes()
    {
        $data = DB::table('classes')     
        ->where('classes.active', 'on')
        ->get(); 
        return view('classes', ['data'=>$data]);  
    }
    public function schedule()
    {
        $data = DB::table('classes')     
        ->where('classes.active', 'on')
        ->get(); 
        return view('schedule', ['data'=>$data]);  
    }
    public function index()
    {
        $data = DB::table('classes')     
        ->where('classes.active', 'on')
        ->get(); 
        return view('admin.classes', ['data'=>$data]);  
    }

    public function show($id)
    {
        $class = ClassModel::find($id);  
        $class->hit_count = $class->hit_count;        
        $class->save();      
        return view('class_details', ['data' => $class]);       
    }  

     
      public function create()
      {        
        return view('admin.class_add');
      }

      public function store(Request $request)
      {        
        $data = new ClassModel;
        $data->title = $request->title;       
        $data->slug = Str::slug($request->title);
        //dd($data->slug);
        $data->sub_title = $request->sub_title;
        $data->category = $request->category;
        $data->author = $request->author;
        $data->trainer = $request->trainer;
        $data->date_time = $request->date_time;
        $data->description = $request->description;
        $data->short_description = $request->short_description;
        $data->meta_description = $request->meta_description;
        $data->link_title = $request->link_title;
        $data->link_action = $request->link_action;
        $data->custom_id = $request->custom_id;
        $data->custom_class = $request->custom_class;
        
        if($request->file('image')!= null){
            $data->image = $request->file('image')->store('images');
        } 
        $data->active = $request->active;
        $data->created_by = session('user.id');
        $data->updated_by = '';
        $data->save();

        return redirect()->back()->with(session()->flash('alert-success', 'Data has been inserted successfully.'));    

      }

      public function edit($id)
      {       
        $data = DB::table('classes')
        ->where('classes.id',$id)
        ->first();
        return view('admin.class_edit', ['data'=>$data]);
      }

      public function update(Request $request)
      {       
            $data = ClassModel::find($request->id);
            $data->title = $request->title;
            $data->sub_title = $request->sub_title;
            $data->category = $request->category;
            $data->author = $request->author;
            $data->trainer = $request->trainer;
            $data->date_time = $request->date_time;
            $data->description = $request->description;
            $data->short_description = $request->short_description;
            $data->meta_description = $request->meta_description;
            $data->link_title = $request->link_title;
            $data->link_action = $request->link_action;
            $data->custom_id = $request->custom_id;
            $data->custom_class = $request->custom_class;
            
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
      DB::table('classes')
      ->where('id',$id)
      ->delete();
      
      return redirect()->back()->with(session()->flash('alert-success', 'Class deleted successfully.'));   
    }

    /*============================
       End News Post
       ============================*/

     

}
