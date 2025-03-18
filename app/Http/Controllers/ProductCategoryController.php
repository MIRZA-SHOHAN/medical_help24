<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductCategoryController extends Controller
{
   
    
    public function index()
    {
        $data = ProductCategory::orderBy('id', 'desc')->where('parent_id', null)->get();
        return view('admin.product_categories', ['data'=>$data]);
    }     
    
    
    public function store(Request $request)
    {
       
        //if(ProductCategory::where('name', $request->name)->where('parent_id', $request->parent_id)->get())
        if(ProductCategory::where('name', $request->name)->first())
        {
            return redirect()->back()->with(session()->flash('alert-warning', 'A term with the name provided already exists!'));       
        }

        $data = new ProductCategory;
        $data->name = $request->name;
        $data->slug = Str::slug($request->name);
        $data->parent_id = $request->parent_id;
        $data->active = 'on';
        if($request->file('image')!= null){
            $data->image = $request->file('image')->store('images');
        } 
        $data->save();

        return redirect()->back()->with(session()->flash('alert-success', 'Data has been inserted successfully.'));        
    }

    public function update(Request $request)    {        
        
        if(ProductCategory::where('name', $request->name)->first())
        {
            return redirect()->back()->with(session()->flash('alert-warning', 'A term with the name provided already exists!'));       
        }
        
        $data = ProductCategory::find($request->id);
        $data->name = $request->name;
        $data->slug = Str::slug($request->name);
        $data->parent_id = $request->parent_id;

        if($request->file('image')!= null){
            $data->image = $request->file('image')->store('images');
        }else{
            $data->image = $request->hidden_image;
        }
        
        $data->save(); 

        return redirect()->back()->with(session()->flash('alert-success', 'Data has been updated successfully.'));
    }

    public function destroy($id)
    {       
        //checking anchor
        if($id == 1){
            return redirect()->back()->with(session()->flash('alert-danger', 'This is anchor category! You can not delete it! If needed you can edit this.'));
        }
        //checking subcat existance
        $sub_category = ProductCategory::where('parent_id',$id)->first();
        if($sub_category != null){
            return redirect()->back()->with(session()->flash('alert-danger', 'Item has sub category! Please delete sub category first!'));
        }

        $related_products = Product::where('category_id',$id)->get();
        //dd($related_products);
        foreach ($related_products as $item){
            $product = Product::find($item->id);
            $product->category_id = '';
            $product->sub_category_id = '';
            $product->save(); 
        }
        

        //delete
        $data = ProductCategory::find($id);
        $data->delete();
        return redirect()->back()->with(session()->flash('alert-success', 'Data has been deleted successfully.'));
    }

    
    
}
