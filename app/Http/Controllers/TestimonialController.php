<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;

class TestimonialController extends Controller
{
    public function index()
    {
        $data = Testimonial::orderBy('id', 'asc')->get();
        return view('admin.testimonial.index', ['data'=>$data]);        
    }

    public function show($slug)
    {
        $fetch = DB::table('testimonials')
                ->where('slug',$slug)
                ->first();
        $data['hit_count']= $fetch->hit_count+1;
        
        DB::table('testimonials')
        		->where('slug',$slug)
        		->update($data);
        //echo $data['hit_count'];exit();

        return view('post_details', ['data' => $fetch]);
        // return \Response::json($post_data);        
    }  

      /*============================
       Posts
       ============================*/
       public function Testimonial()
       {     
        $data = Post::orderBy('id', 'desc')->get();
        return view('admin.posts', ['data'=>$data]);
      } 

      public function create()
      {        
        return view('admin.testimonial.create');
      }

      public function store(Request $request)
      {        
        $data = new Testimonial;
        //$data->title = $request->title;       
        //$data->slug = Str::slug($request->title);
        //dd($request); 
        $data->name = $request->name;
        $data->designation = $request->designation;
        $data->institute = $request->institute;
        $data->review_title = $request->review_title;
        $data->review_details = $request->review_details;
        $data->ratings = $request->ratings;
        //$data->description = $request->description;
        
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
        $data = Testimonial::find($id);      
        return view('admin.testimonial.edit', ['data'=>$data]);
      }

    public function update(Request $request)
    {       
          // dd($request);
          $data = Testimonial::find($request->id);
          $data->name = $request->name;
          $data->designation = $request->designation;
          $data->institute = $request->institute;
          $data->review_title = $request->review_title;
          $data->review_details = $request->review_details;
          $data->ratings = $request->ratings;

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
