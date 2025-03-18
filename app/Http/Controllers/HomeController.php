<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\ProductCategory;
use App\Models\TeamMember;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Blog;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index() 
    {
      $settings = DB::table('settings')->where('id', 1)->first();
      if($settings->active!='on'){return view('under_construction');}  

      // $banner = Post::orderBy('id', 'desc')
      //       ->where('page', 'Home')
      //       ->where('position', 'banner')
      //       ->where('parent', null)
      //       ->where('active', 'on')
      //       ->first();

     

      // $section7 = Post::orderBy('id', 'desc')
      //       ->where('page', 'Home')
      //       ->where('position', 'Section 7')
      //       ->where('parent', null)
      //       ->where('active', 'on')
      //       ->first();

      $testimonial  = Testimonial::orderBy('id', 'asc')           
          ->where('ratings', null)
          ->where('active', 'on')
          ->get();
      $doctors = Doctor::orderBy('sort_order', 'asc') 
          ->where('active', 'on')
          ->get();
      //     dd($doctors);
       $hospitals = Hospital::orderBy('id', 'asc') 
          ->where('type', 'Hospital')
          ->where('active', 'on')
          ->get();
      //   dd($hospitals);
       $clinic = Hospital::orderBy('id', 'asc') 
          ->where('type', 'Clinic')
          ->where('active', 'on')
          ->get();
      //   dd($hospitals);
       $fitness_center = Hospital::orderBy('id', 'asc') 
          ->where('type', 'Fitness Centers')
          ->where('active', 'on')
          ->get();
      //    dd($fitness_center);
      $blood_bank = Hospital::orderBy('id', 'asc') 
          ->where('type', 'Blood Bank')
          ->where('active', 'on')
          ->get();

      $blogs = Blog::orderBy('id', 'asc') 
          ->where('active', 'on')
          ->get();

      $new_registerd = Hospital::orderBy('id', 'asc') 
            ->where('active', 'on')
            ->get();
            // dd($new_registerd);

      $reviews  = Testimonial::orderBy('id', 'asc')           
            ->where('ratings', '!=', null)
            ->where('active', 'on')
            ->get();
   
    
      return view('home', ['page'=>'home', 'testimonial'=>$testimonial, 'doctors'=>$doctors, 'hospitals'=>$hospitals, 'clinic'=>$clinic,'fitness_center'=>$fitness_center,'blood_bank'=>$blood_bank,'blogs'=>$blogs,'new_registerd'=>$new_registerd,]); 

    }
    public function about(){
      $posts = DB::table('posts')
            ->where('page', 'asphalt')
            ->where('active', 'on')
            ->get(); 

      $banner = Post::orderBy('id', 'desc')
            ->where('page', 'asphalt')
            ->where('position', 'banner')
            ->where('parent', null)
            ->where('active', 'on')
            ->first();

      $section2 = Post::orderBy('id', 'desc')
            ->where('page', 'asphalt')
            ->where('position', 'Section 2')
            ->where('parent', null)
            ->where('active', 'on')
            ->first();
            // dd($section2);

      // $team_member = TeamMember::orderBy('id', 'asc')
      //       ->where('active', 'on')
      //       ->get();


      return view('about',  ['page'=>'asphalt', 'posts'=>$posts, 'banner'=>$banner, 'section2'=>$section2,]);  
    }


    public function service(){
      $posts = DB::table('posts')
            ->where('page', 'Consulting')
            ->where('position', '!=', 'banner')
            ->where('active', 'on')
            ->get(); 

      $banner = Post::orderBy('id', 'desc')
                  ->where('page', 'Consulting')
                  ->where('position', 'banner')
                  ->where('parent', null)
                  ->where('active', 'on')
                  ->first();

      $section3 = Post::orderBy('id', 'desc')
                  ->where('page', 'Consulting')
                  ->where('position', 'Section 3')
                  ->where('parent', null)
                  ->where('active', 'on')
                  ->first();
      $section5 = Post::orderBy('id', 'desc')
                  ->where('page', 'Consulting')
                  ->where('position', 'Section 5')
                  ->where('parent', null)
                  ->where('active', 'on')
                  ->first();
      return view('service', ['page'=>'consulting', 'posts'=>$posts, 'banner'=>$banner, 'section3'=>$section3, 'section5'=>$section5]); 
    }
  

    public function doctor(){
      $doctors = TeamMember::orderBy('sort_order', 'asc') 
          ->where('active', 'on')
          ->get(); 
 
      return view('doctor', ['page'=>'doctor','doctors'=>$doctors]); 
    } 
    public function post_add(){
      
 
      return view('post_add', ['page'=>'doctor']); 
    }
//     public function doctor_details(){
//       return view('doctor_details', ['page'=>'doctor']); 
//     } 

//     public function edit($id){       
//       $data = TeamMember::find($id);      
//       return view('admin.team_member.edit', ['data'=>$data]);
//     }
    
    public function gallery(){
      $data = DB::table('posts')
            ->where('page', 'Terms of Service')
            ->where('active', 'on')
            ->first(); 
      return view('gallery', ['page'=>'gallery', 'data'=>$data]); 
    }
   
    public function contact(){
      $data = DB::table('posts')
            ->where('page', 'Terms of Service')
            ->where('active', 'on')
            ->first(); 
      return view('contact', ['page'=>'contact', 'data'=>$data]); 
    }
    public function tos(){
      $data = DB::table('posts')
            ->where('page', 'Terms of Service')
            ->where('active', 'on')
            ->first(); 
      return view('tos', ['page'=>'tos', 'data'=>$data]); 
    }
   
    public function chat() 
    {
      $settings = DB::table('settings')->where('id', 1)->first();
      if($settings->active!='on'){return view('under_construction');}  

      $banner = Post::orderBy('id', 'desc')
            ->where('page', 'Home')
            ->where('position', 'banner')
            ->where('parent', null)
            ->where('active', 'on')
            ->first();

      $section2 = Post::orderBy('id', 'desc')
            ->where('page', 'Home')
            ->where('position', 'Section 2')
            ->where('parent', null)
            ->where('active', 'on')
            ->first();

      $section3 = Post::orderBy('id', 'desc')
            ->where('page', 'Home')
            ->where('position', 'Section 3')
            ->where('parent', null)
            ->where('active', 'on')
            ->first();

      $section4 = Post::orderBy('id', 'desc')
            ->where('page', 'Home')
            ->where('position', 'Section 4')
            ->where('parent', null)
            ->where('active', 'on')
            ->first();

      $section6 = Post::orderBy('id', 'desc')
            ->where('page', 'Home')
            ->where('position', 'Section 6')
            ->where('parent', null)
            ->where('active', 'on')
            ->first();

      $section7 = Post::orderBy('id', 'desc')
            ->where('page', 'Home')
            ->where('position', 'Section 7')
            ->where('parent', null)
            ->where('active', 'on')
            ->first();

      $testimonial  = Testimonial::orderBy('id', 'asc')           
          ->where('ratings', null)
          ->where('active', 'on')
          ->get();

      $reviews  = Testimonial::orderBy('id', 'asc')           
            ->where('ratings', '!=', null)
            ->where('active', 'on')
            ->get();
   
    
      return view('chat', ['page'=>'home', 'banner'=>$banner, 'section2'=>$section2, 'section3'=>$section3, 'section4'=>$section4, 'section6'=>$section6, 'section7'=>$section7, 'testimonial'=>$testimonial, 'reviews'=>$reviews]); 

    }
   public function privacy(){
      $data = DB::table('posts')
            ->where('page', 'Privacy Policy')
            ->where('active', 'on')
            ->first(); 
      return view('privacy', ['page'=>'privacy', 'data'=>$data]); 
    }
   public function security(){
      $data = DB::table('posts')
            ->where('page', 'Security')
            ->where('active', 'on')
            ->first(); 
      return view('security', ['page'=>'security', 'data'=>$data]); 
    }
    public function accessibility(){
      $data = DB::table('posts')
            ->where('page', 'Accessibility')
            ->where('active', 'on')
            ->first(); 
      return view('accessibility', ['page'=>'accessibility', 'data'=>$data]); 
    }

    public function loadCategories(Request $request){
      $categories = ProductCategory::with('children')->has('children')->where('parent_id',null)->skip($request->count)->take(5)->get();
      $remaining = ProductCategory::with('children')->has('children')->where('parent_id',null)->skip($request->count)->take(5)->count();
      $total = ProductCategory::where('parent_id',null)->count();
      $remaining = $total - ($remaining + $request->count+5);
      $data = [
        "total"=>$total,
        "remaining"=>$remaining,
        "items"=>json_encode($categories)
      ];
      return response()->json($data);
    }

    public function show($id)
    {
        $fetch = Product::find($id);  
        $data = new Product;
        $data->hit_count = $fetch->hit_count;        
        $data->save();
      
        return view('product_details', ['data' => $fetch]);       
    }  

      /*============================
       products
       ============================*/
       public function products()
       {     

        $fetch = DB::table('products')
        ->join('product_categories', 'products.category_id', '=', 'product_categories.id')
        ->select('products.*', 'product_categories.name as catName')
        ->get();        
        
        $data=view('admin.products')
        ->with('data',$fetch);

        return view('admin.master')
        ->with('main_content',$data);
      } 

      public function create()
      {        
        return view('admin.product_add');
      }

      public function store(Request $request)
      {   
            dd($request);  
        $data = new Product;
        $data->title = $request->title;
        $data->slug = Str::slug($request->title);
        $data->price = $request->price;
        $data->msrp = $request->msrp;
        $data->measurement_unit = $request->measurement_unit;
        $data->category_id = $request->category_id;
        $data->description = $request->description;
        $data->short_description = $request->short_description;
        $data->meta_description = $request->meta_description;

        if($request->file('image')!= null){
            $data->image = $request->file('image')->store('images');
        } 
        $data->active = $request->active;
        $data->featured = $request->featured;
        $data->created_by = session('user.id');
        $data->updated_by = '';
        $data->save();

        return redirect()->back()->with(session()->flash('alert-success', 'Data has been inserted successfully.'));    

      }

      public function edit($id)
      {
       
        $data = DB::table('products')
        ->join('product_categories', 'products.category_id', '=', 'product_categories.id')
        ->select('products.*', 'product_categories.name as catName', 'product_categories.id as catID')
        ->where('products.id',$id)
        ->first();
        return view('admin.product_edit', ['data'=>$data]);
      }
   

      public function update(Request $request)
      {       
                dd($request);
          $data = Product::find($request->id);
          $data->title = $request->title;
          $data->slug = Str::slug($request->title);
          $data->price = $request->price;
          $data->msrp = $request->msrp;
          $data->measurement_unit = $request->measurement_unit;
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
          $data->featured = $request->featured;
          $data->updated_by = session('user.id');
          $data->save(); 

          return redirect('/products')->with(session()->flash('alert-success', 'Data has been updated successfully.'));
    }

    public function destroy($id)
    {
      DB::table('products')
      ->where('id',$id)
      ->delete();

      Session::put('message', 'Post deleted successfully!');
      return Redirect::to('/products');
    }

    /*============================
       End News Post
       ============================*/

     

}
