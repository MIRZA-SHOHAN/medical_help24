<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use DB;

class PricingController extends Controller
{
    public function index()
    {
        $data = Pricing::orderBy('id', 'asc')->get();
        return view('admin.pricings', ['data'=>$data]);        
    }

    public function show($slug)
    {
        $fetch = DB::table('pricings')
                ->where('slug',$slug)
                ->first();
        $data['hit_count']= $fetch->hit_count+1;
        
        DB::table('pricings')
        		->where('slug',$slug)
        		->update($data);
        //echo $data['hit_count'];exit();

        return view('pricing_details', ['data' => $fetch]);
        // return \Response::json($Pricing_data);        
    }  

      /*============================
       Pricings
       ============================*/
       public function pricings()
       {     
        $data = Pricing::orderBy('price', 'desc')->get();
        return view('pricing', ['data'=>$data]);
      } 

      public function create()
      {        
        return view('admin.pricing_add');
      }

      public function store(Request $request)
      {        
        $data = new Pricing;
        $data->title = $request->title;       
        $data->slug = Str::slug($request->title);
        //dd($data->slug);
        $data->sub_title = $request->sub_title;
        $data->price = $request->price;
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

      public function edit($id){       
        $data = Pricing::find($id);      
        return view('admin.pricing_edit', ['data'=>$data]);
      }

    public function update(Request $request)
    {       
          $data = Pricing::find($request->id);
          $data->title = $request->title;
          $data->sub_title = $request->sub_title;

          $data->price = $request->price;
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
      DB::table('pricings')
      ->where('id',$id)
      ->delete();

      return redirect()->back()->with(session()->flash('alert-success', 'Pricing has been deleted successfully.'));
    }

    /*============================
       End News Pricing
       ============================*/

     

}
