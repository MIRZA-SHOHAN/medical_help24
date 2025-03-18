
@extends('admin.master')
@section('main_content')    


<div class="col-4 col-xl-4 page-title">
  <h4 class="f-w-700">Add Page</h4>
  <nav>
    <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
      <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"> </i></a></li>
      <li class="breadcrumb-item f-w-400">Dashboard</li>
      <li class="breadcrumb-item f-w-400 active">Page</li>
    </ol>
  </nav>
</div>
@include('admin._nav_top')  

<div class="page-body">
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="edit-profile">
      <div class="row">

        <div class="row mt-3">
          <div class="col-12">
            <div class="card dcard">
              <div class="card-body px-1 px-md-3">                                   
                <div role="main" class="main-content">         
                  <div class="page-content container container-plus">               
      
                    <form action="save_post" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" id=""  placeholder="Enter title here">
                      </div>                 
                      <div class="form-group">
                        <label for="">Sub Title</label>
                        <input type="text" name="sub_title" class="form-control" id=""  placeholder="Enter sub title here">
                      </div>                 
                  
                     <div class="row mt-2">
                          <div class="col-md-4">
                            <label for="">Select Parent Section</label>
                            <select class="form-control" name="parent">
                              @php
                                  $posts = DB::table('posts')
                                          ->where('parent', null)
                                          ->orderBy('id', 'asc')
                                          ->get();
                              @endphp
                              <option value="">-- select parent section --</option> 
                              @foreach ($posts as $item)
                                <option value="{{$item->id}}">{{$item->title}}</option> 
                              @endforeach      
                            </select>
                          </div>
                          <div class="col-md-4">
                            <label for="">Select Page</label>
                            <select class="form-control" name="page" required="">
                                <option value="">Select page</option>                        
                                <option value="Home">Home</option>
                                <option value="Asphalt">Asphalt</option>
                                <option value="Consulting">Consulting</option>
                                <option value="Lab">Lab</option>
                                <option value="Contact">Contact</option>
                                <option value="Master">Master</option>
                                {{-- <option value="Directions">Directions</option>
                                <option value="Class">Class</option>
                                <option value="Schedule">Schedule</option>
                                <option value="Corporate">Partner</option>                            
                                <option value="Press">Press</option>
                                <option value="Contact">Contact</option>
                                <option value="Master">Master</option> --}}
                                <option value="Terms of Service">Terms of Service</option>                      
                                <option value="Privacy Policy">Privacy Policy</option>                      
                                <option value="Security">Security</option>                      
                                <option value="Accessibility">Accessibility</option>                      
                                <option value="">Not Defined</option>                      
                            </select>
                          </div>
                  
                          <div class="col-md-4">
                            <label for="">Select Position</label>
                            <select class="form-control" name="position" required="">
                                <option value="">Select position</option>                        
                                <option value="Banner">Banner</option>
                                <option value="Top">Top</option>
                                <option value="Middle">Middle</option>
                                <option value="Bottom">Bottom</option>  
                                <option value="Section 1">Section 1</option>                
                                <option value="Section 2">Section 2</option>                
                                <option value="Section 3">Section 3</option>                
                                <option value="Section 4">Section 4</option>                
                                <option value="Section 5">Section 5</option>                
                                <option value="Section 6">Section 6</option>               
                                <option value="Section 7">Section 7</option>                
                                <option value="">Not Defined</option>                       
                            </select>
                          </div>
                     </div>
                  
                      <div class="form-group">
                        <label for="">Description</label>
                        <textarea id="summernote" name="description"></textarea>  
                      </div>
                  
                      <div class="form-group">
                        <label for="">Short Description</label>
                        <textarea name="short_description" class="form-control" rows="3"></textarea>  
                      </div>
                      <div class="d-none form-group">
                        <label for="">Meta Description</label>
                        <textarea name="meta_description" class="form-control" rows="3"></textarea>  
                      </div>
                  
                      <div class="row">
                        <div class="form-group col-6 float-left">
                            <label for="">Link Title</label>
                            <input type="text" name="link_title" class="form-control" id=""  placeholder="Enter link title">
                        </div>
                  
                        <div class="form-group col-6 float-left">
                            <label for="">Link Action</label>
                            <input type="text" name="link_action" class="form-control" id=""  placeholder="Enter link action url here">
                        </div>
                        </div> 
                  
                        <div class="row">
                          <div class="form-group col-6 mt-2">
                            <label for="">Image(Desktop): </label>
                            <img id="uploadPreview" style="width: 200px; height: 150px; display:none" />
                            <input id="uploadImage"  type="file" name="image" onchange="PreviewImage();" />
                            {{-- <p>NB: Best image resolutions -> [banner/slider: 2000px*1300px] </p> --}}
                          </div>
                          <div class="form-group col-6 mt-2">
                            <label for="">Image(Mobile): </label>
                            <img id="uploadPreviewM" style="width: 200px; height: 150px; display:none" />
                            <input id="uploadImageM"  type="file" name="image_m" onchange="PreviewImage();" />
                            {{-- <p>NB: Best image resolutions -> [banner/slider: 2000px*1300px] </p> --}}
                          </div>
                        </div>

                      <div class="form-group mb-3">                    
                        <label class="form-check-label" for="exampleCheck1">
                         Active <input type="checkbox" name="active" checked class="form-check-input" id="exampleCheck1">
                        </label>
                      </div>

                      <br>
                      <button type="submit" class="btn btn-primary">Submit</button>
                      <button type="button" class="btn btn-default">Cancel</button>
                    </form>
                    
                 </div>
                </div>
              </div>
            </div>           
          </div>
        </div>

      </div>
    </div>
    </div>
  </div>
 
@endsection