<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Setting::orderBy('id', 'desc')->first();
        return view('admin.settings', ['data'=>$data]); 
    }

    public function update(Request $request)
    {       
          $data = Setting::find(1);
          $data->title = $request->title;
          $data->sub_title = $request->sub_title;
        //   $data->description = $request->description;
          $data->short_description = $request->short_description;
          $data->meta_description = $request->meta_description;
          $data->email = $request->email;
          $data->mobile = $request->mobile;
          $data->address = $request->address;
          $data->fb_link = $request->fb_link;
          $data->twitter_link = $request->twitter_link;
          $data->linkedin_link = $request->linkedin_link;
          $data->instagram_link = $request->instagram_link;
          $data->pinterest_link = $request->pinterest_link;
          $data->youtube_link = $request->youtube_link;
          
          if($request->file('logo_header')!= null){
              $data->logo_header = $request->file('logo_header')->store('images');
          }else{
              $data->logo_header = $request->hidden_logo_header;
          }

          if($request->file('logo_footer')!= null){
                $data->logo_footer = $request->file('logo_footer')->store('images');
          }else{
                $data->logo_footer = $request->hidden_logo_footer;
          }
         
          if($request->file('favicon')!= null){
                $data->favicon = $request->file('favicon')->store('images');
          }else{
                $data->favicon = $request->hidden_favicon;
          }
           
          $data->active = $request->active;
          $data->updated_by = session('user.id');
          $data->save(); 

          return redirect()->back()->with(session()->flash('alert-success', 'Data has been updated successfully.'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
