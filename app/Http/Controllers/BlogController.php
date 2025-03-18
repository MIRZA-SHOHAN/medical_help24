<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;

class BlogController extends Controller
{
    public function blog(){
      $blogs = Blog::orderBy('id', 'asc')
            ->where('active', 'on')
            ->get();

              
      $last_blogs = Blog::orderBy('id', 'desc')
              ->where('active', 'on')
              ->limit(4)
              ->get();
              // dd($last_blogs);

      
      return view('blog', ['page'=>'blog', 'blogs'=>$blogs, 'last_blogs'=>$last_blogs,]); 
    }

    public function show($slug){
      $data = Blog::where('slug', $slug)->first();


      $last_blogs = Blog::orderBy('id', 'desc')
      ->where('active', 'on')
      ->limit(4)
      ->get();

      $similr_blogs = Blog::orderBy('id', 'desc')
      ->where('category_id', $data->category_id)
      ->where('id', '!=', $data->id)
      ->where('active', 'on')
      ->limit(2)
      ->get();

      //dd($similr_blogs);
      //dd($data);
      return view('blog_details', ['page'=>'blog_detail',  'data'=>$data, 'last_blogs'=>$last_blogs, 'similr_blogs'=>$similr_blogs]); 
    }


    public function index()
    {
      $data = Blog::orderBy('id', 'desc')->get();
      $data = DB::table('blogs')
        // ->leftjoin('blog_categories', 'blogs.category_id', '=', 'blog_categories.id')
        // ->select('blogs.*', 'blog_categories.name as catName')        
        // ->where('blogs.active', 'on')
        // ->orderby('blogs.id', 'desc')
        ->get(); 

      return view('admin.blog.index', ['data'=>$data]);  
    }

    public function create()
    {        
      return view('admin.blog.create');
    }

    public function store(Request $request)
    {      
      // dd($request);  
      $data = new Blog;
      $data->title = $request->title;
      $data->slug = Str::slug($request->title);
      $data->sub_title = $request->sub_title;  
      $data->category_id = $request->category_id;
      $data->description = $request->description;
      $data->short_description = $request->short_description;
      // $data->meta_description = $request->meta_description;
      // $data->link_title = $request->link_title;
      // $data->link_action = $request->link_action;
      
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
      $data = Blog::find($id);      
      return view('admin.blog.edit', ['data'=>$data]);
    }

    public function update(Request $request)
    {       
      // dd($request);
          $data = Blog::find($request->id);
          $data->slug = Str::slug($request->title);
          $data->title = $request->title;
          $data->sub_title = $request->sub_title;
          $data->category_id = $request->category_id;
          $data->description = $request->description;
          $data->short_description = $request->short_description;
          $data->meta_description = $request->meta_description;
          
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
      DB::table('blogs')
      ->where('id',$id)
      ->delete();

      return redirect()->back()->with(session()->flash('alert-success', 'Item has been deleted successfully.'));
    }    

}
