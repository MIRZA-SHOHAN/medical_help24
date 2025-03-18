<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;

class PostController extends Controller
{
    public function index()
    {
        $data = Post::orderBy('id', 'asc')->get();
        return view('admin.posts', ['data'=>$data]);        
    }

    public function show($slug)
    {
        $fetch = DB::table('posts')
                ->where('slug',$slug)
                ->first();
        $data['hit_count']= $fetch->hit_count+1;
        
        DB::table('posts')
        		->where('slug',$slug)
        		->update($data);
        //echo $data['hit_count'];exit();

        return view('post_details', ['data' => $fetch]);
        // return \Response::json($post_data);        
    }  

      /*============================
       Posts
       ============================*/
       public function posts()
       {     
        $data = Post::orderBy('id', 'desc')->get();
        return view('admin.posts', ['data'=>$data]);
      } 

      public function create()
      {        
        return view('admin.post_add');
      }

      public function store(Request $request)
      {        
        $data = new Post;
        $data->title = $request->title;       
        $data->slug = Str::slug($request->title);
        //dd($data->slug);
        $data->sub_title = $request->sub_title;
        $data->parent = $request->parent;
        $data->page = $request->page;
        $data->position = $request->position;
        $data->description = $request->description;
        $data->short_description = $request->short_description;
        $data->meta_description = $request->meta_description;
        $data->link_title = $request->link_title;
        $data->link_action = $request->link_action;
        
        if($request->file('image')!= null){
            $data->image = $request->file('image')->store('images');
        } 
        if($request->file('image_m') != null){ 
          $data->image_m = $request->file('image_m')->store('images');
      } 
        $data->active = $request->active;
        $data->created_by = session('user.id');
        $data->updated_by = '';
        $data->save();

        return redirect()->back()->with(session()->flash('alert-success', 'Data has been inserted successfully.'));    

      }

      public function edit($id){       
        $data = Post::find($id);      
        return view('admin.post_edit', ['data'=>$data]);
      }

    public function update(Request $request)
    {       
          $data = Post::find($request->id);
          $data->title = $request->title;
          $data->sub_title = $request->sub_title;

          $data->parent = $request->parent;
          $data->page = $request->page;
          $data->position = $request->position;
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

          if($request->file('image_m')!= null){
              $data->image_m = $request->file('image_m')->store('images');
          }else{
              $data->image_m = $request->hidden_image_m;
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
