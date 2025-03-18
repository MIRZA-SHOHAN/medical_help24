@extends('admin.master')
@section('main_content')  

<style>
.form-group label {
    margin-top: 10px;
}
</style>
<div class="col-4 col-xl-4 page-title">
    <h4 class="f-w-700">Application Setup</h4>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"> </i></a></li>
        <li class="breadcrumb-item f-w-400">Dashboard</li>
        <li class="breadcrumb-item f-w-400 active">Settings</li>
      </ol>
    </nav>
  </div>
@include('admin._nav_top')

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="edit-profile">
        <div class="row">
        
          
          <div class="col-xl-12">
            <form class="card" action="update_settings" method="post" enctype="multipart/form-data">
              @csrf
              <div class="card-header">
                <h4 class="card-title mb-0">Settings</h4>
                <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
              </div>
              <div class="card-body">
              
                <div class="form-group">
                  <label for="">Site Title</label>
                  <input type="text" name="title" class="form-control" id=""  value="{{$data->title}}">
                </div>                 
                <div class="form-group">
                  <label for="">Sub Title</label>
                  <input type="text" name="sub_title" class="form-control" id=""  value="{{$data->sub_title}}">
                </div> 
                
                <div class="form-group">
                  <label for="">Short Description</label>
                  <textarea name="short_description"  class="form-control"  rows="3">{{$data->short_description}}</textarea>  
                </div>
                <div class="form-group">
                  <label for="">Meta Description</label>                    
                  <textarea name="meta_description"  class="form-control"  rows="3">{{$data->meta_description}}</textarea> 
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Email Address</label>
                      <input type="email" name="email" class="form-control" id=""  value="{{$data->email}}">
                    </div> 
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Mobile Number</label>
                      <input type="text" name="mobile" class="form-control" id=""  value="{{$data->mobile}}">
                    </div> 
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="">Address</label>
                      <textarea name="address"  class="form-control"  rows="1">{{$data->address}}</textarea> 
                    </div> 
                  </div>
                </div>


                <div class="row mt-3">
                  <div class="form-group col-6 float-left">
                      <label for="">Facebook link</label>
                      <input type="text" name="fb_link" class="form-control" id=""  value="{{$data->fb_link}}">
                  </div>

                  <div class="form-group col-6 float-left">
                      <label for="">Twitter link</label>
                      <input type="text" name="twitter_link" class="form-control" id=""   value="{{$data->twitter_link}}">
                  </div>
                  <div class="form-group col-6 float-left">
                      <label for="">Linkedin link</label>
                      <input type="text" name="linkedin_link" class="form-control" id=""   value="{{$data->linkedin_link}}">
                  </div>
                  <div class="form-group col-6 float-left">
                      <label for="">Instagram link</label>
                      <input type="text" name="instagram_link" class="form-control" id=""   value="{{$data->instagram_link}}">
                  </div>
                  <div class="form-group col-6 float-left">
                      <label for="">Pinterest link</label>
                      <input type="text" name="pinterest_link" class="form-control" id=""   value="{{$data->pinterest_link}}">
                  </div>
                  <div class="form-group col-6 float-left">
                      <label for="">Youtube link</label>
                      <input type="text" name="youtube_link" class="form-control" id=""   value="{{$data->youtube_link}}">
                  </div>
                  </div>

                
                    <div class="form-group mt-3">
                      <label for="">Logo header: </label>
                      <input type="hidden" name="hidden_logo_header" value="{{$data->logo_header}}">
                      <input type="hidden" name="id" value="{{$data->id}}">
                      <img src="{{ URL::asset('storage/app/public/'.$data->logo_header.'') }}" id="previousImage" height="70px" alt="">
                      <br>
                      <img id="uploadPreview" style="width: 100px; height: 70px; display:none" />
                      
                      <input id="uploadImage"  type="file" name="logo_header" onchange="PreviewImage();" />
                    </div>
                    <div class="form-group">
                      <label for="">Logo footer: </label>
                      <input type="hidden" name="hidden_logo_footer" value="{{$data->logo_footer}}">
                      <img src="{{ URL::asset('storage/app/public/'.$data->logo_footer.'') }}" id="previousImage2" height="70px" alt="">
                      <br>
                      <img id="uploadPreview2" style="width: 100px; height: 70px; display:none" />
                      <input id="uploadImage2"  type="file" name="logo_footer" onchange="PreviewImage();" />
                    </div> 

                    <div class="form-group">
                      <label for="">Favicon: </label> 
                      <input type="hidden" name="hidden_favicon" value="{{$data->favicon}}">
                      <img src="{{ URL::asset('storage/app/public/'.$data->favicon.'') }}" id="previousImage3" height="50px" alt="">
                      <br>
                      <img id="uploadPreview3" style="width: 50px; height: 50px; display:none" />
                      <input id="uploadImage3"  type="file" name="favicon" onchange="PreviewImage3();" />
                    </div>
  
                    <div class="form-group">                    
                      <label class="form-check-label" for="exampleCheck1">
                       Active
                      </label>
                      <input type="checkbox" name="active" @if($data->active == 'on') checked
                      @endif class="form-check-input" id="exampleCheck1">
                    </div>

              </div>
              <div class="card-footer text-end">
                <button class="btn btn-primary" type="submit">Update Profile</button>
              </div>
            </form>
          </div>
        
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>
@endsection