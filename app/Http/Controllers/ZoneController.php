<?php

namespace App\Http\Controllers;


use App\Models\Appointment;
use App\Models\Hospital;
use App\Models\Zone;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;

class ZoneController extends Controller
{



    public function index()
    {
      $settings = DB::table('settings')->where('id', 1)->first();
      if($settings->active!='on'){return view('under_construction');} 

        $data = Zone::orderBy('id', 'asc')->get();
        return view('admin.zone.index', ['data'=>$data]);        
    }

    
    public function create()
      {    
        return view('admin.zone.create');
      }

      /*============================
       Posts
       ============================*/
       
      

      public function store(Request $request)
      {      
        // dd($request);  

        $data = new Zone;
        $data->title = $request->title;
        $data->district = $request->district;

       
        $data->active = $request->active;
        $data->created_by = session('user.id');
        $data->updated_by = '';
        $data->save();

        return redirect()->back()->with(session()->flash('alert-success', 'Data has been inserted successfully.'));    

      }

      public function edit($id){       
        $data = Zone::find($id);      
        return view('admin.zone.edit', ['data'=>$data]);
      }

    public function update(Request $request)
    {       
      //  dd($request);
          $data = Zone::find($request->id);
          $data->title = $request->title;
          $data->district = $request->district;
 
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
