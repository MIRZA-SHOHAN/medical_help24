<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;

class EventController extends Controller
{
    public function events()
    {
        $data = DB::table('events')     
        ->where('active', 'on')
        ->get(); 
        return view('events', ['data'=>$data]);  
    }
 
    public function index()
    {
        $data = DB::table('events')     
        ->where('active', 'on')
        ->get(); 
        return view('admin.events', ['data'=>$data]);  
    }

    public function show($id)
    {
        $class = Event::find($id);  
        $class->hit_count = $class->hit_count;        
        $class->save();      
        return view('event_details', ['data' => $class]);       
    }  

     
      public function create()
      {        
        return view('admin.event_add');
      }

      public function store(Request $request)
      {        
        $data = new Event;
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
        $data = DB::table('events')
        ->where('events.id',$id)
        ->first();
        return view('admin.event_edit', ['data'=>$data]);
      }

      public function update(Request $request)
      {       
            $data = Event::find($request->id);
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
      DB::table('events')
      ->where('id',$id)
      ->delete();
      
      return redirect()->back()->with(session()->flash('alert-success', 'Class deleted successfully.'));   
    }

    /*============================
       End News Post
       ============================*/

     

}
