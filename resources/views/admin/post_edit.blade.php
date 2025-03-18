
@extends('admin.master')
@section('main_content')    


<div class="col-4 col-xl-4 page-title">
  <h4 class="f-w-700">Edit Page Content</h4>
  <nav>
    <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
      <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"> </i></a></li>
      <li class="breadcrumb-item f-w-400">Dashboard</li>
      <li class="breadcrumb-item f-w-400 active">Post</li>
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
      
                    <form action="/update_post" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" id=""  value="{{$data->title}}">
                      </div>                 
                      <div class="form-group">
                        <label for="">Sub Title</label>
                        <input type="text" name="sub_title" class="form-control" id=""  value="{{$data->sub_title}}">
                      </div>                 
      
                   
                      <div class="row">
                        <div class="col-md-4">
                          <label for="">Select Parent Section</label>
                          <select class="form-control" name="parent">
                            @php
                                $parent = DB::table('posts')
                                        ->where('id', $data->parent)
                                        ->first();
                                 $posts = DB::table('posts')
                                        ->where('parent', null)
                                        ->orderBy('id', 'asc')
                                        ->get();
                            @endphp
                            @if ($parent != null)
                              <option value="{{$data->parent}}">{{$parent->title}}</option> 
                            @else 
                            <option value="">Select parent post</option> 
                            @endif
                            @foreach ($posts as $item)
                              <option value="{{$item->id}}">{{$item->title}}</option> 
                            @endforeach      
                          </select>
                        </div>
      
                        <div class="col-md-4">
                          <label for="">Select Page</label>
                          <select class="form-control" name="page" required="">
                              <option value="{{$data->page}}">{{$data->page}}</option>   
                              <option value="Home">Home</option>
                              <option value="About">About</option>
                              <option value="Blog">Blog</option>
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
                              <option value="{{$data->position}}">{{$data->position}}</option>                        
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
                        <textarea id="summernote" name="description" rows="10">{{$data->description}}</textarea>  
                      </div>
      
                      <div class="form-group">
                        <label for="">Short Description</label>
                        <textarea name="short_description"  class="form-control"  rows="3">{{$data->short_description}}</textarea>  
                      </div>
                      <div class="d-none form-group">
                        <label for="">Meta Description</label>                    
                        <textarea name="meta_description"  class="form-control"  rows="3">{{$data->meta_description}}</textarea> 
                      </div>
      
                      <div class="row">
                        <div class="form-group col-6 float-left">
                            <label for="">Link Title</label>
                            <input type="text" name="link_title" class="form-control" id=""  value="{{$data->link_title}}">
                        </div>
      
                        <div class="form-group col-6 float-left">
                            <label for="">Link Action</label>
                            <input type="text" name="link_action" class="form-control" id=""   value="{{$data->link_action}}">
                        </div>
                      </div>
      

                          <div class="row">
                            <div class="form-group col-6">
                              <label for="">Image (Desktop): </label>
                              <br>
                              <input type="hidden" name="hidden_image" value="{{$data->image}}">
                              <input type="hidden" name="id" value="{{$data->id}}">
                              <img src="{{ URL::asset('storage/app/public/'.$data->image.'') }}" id="previousImage" height="100px" alt="">
                              <br>
                              <br>
                              <img id="uploadPreview" style="width: 200px; height: 150px; display:none" />
                              <input id="uploadImage"  type="file" name="image" onchange="PreviewImage();" />
                            </div>

                            <div class="form-group col-6">
                              <label for="">Image (Mobile): </label>
                              <br>
                              <input type="hidden" name="hidden_image_m" value="{{$data->image_m}}">
                              <img src="{{ URL::asset('storage/app/public/'.$data->image_m.'') }}" id="previousImage" height="100px" alt="">
                              <br>
                              <br>
                              <img id="uploadPreview" style="width: 200px; height: 150px; display:none" />
                              <input id="uploadImage"  type="file" name="image_m" onchange="PreviewImage();" />
                            </div>
                          </div>


        
                          <div class="form-group">                    
                            <label class="form-check-label" for="exampleCheck1">
                            Active
                            <input type="checkbox" name="active" @if($data->active == 'on') checked
                            @endif class="form-check-input" id="exampleCheck1"> 
                          </label>
                          </div>
                         
                          <br>
                          <button type="submit" class="btn btn-primary">Update</button>
                          <a href="{{URL::to('posts')}}" class="btn btn-default">Cancel</a>
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