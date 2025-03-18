
@extends('admin.master')
@section('main_content')    


<div class="col-4 col-xl-4 page-title">
  <h4 class="f-w-700">Edit Blog Content</h4>
  <nav>
    <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
      <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"> </i></a></li>
      <li class="breadcrumb-item f-w-400">Dashboard</li>
      <li class="breadcrumb-item f-w-400 active">Blog</li>
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
      
                    <form action="/update_blog" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="title" class="form-control" id=""  value="{{$data->title}}">
                      </div>                 
                      <div class="form-group">
                        <label for="">Sub Title</label>
                        <input type="text" name="sub_title" class="form-control" id=""  value="{{$data->sub_title}}">
                      </div>  
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group">
                            <label for="exampleInputPassword1">Category</label>
                            <select class="form-control" name="category_id" >
                              @php
                                  $category = DB::table('blog_categories')->where('id', $data->category_id)->first();
                              @endphp
                                <option value="{{$category != null ? $category->id : ''}}">{{$category != null ? $category->name : 'Select category'}}</option>
                                <?php 
                                  $categories=DB::table('blog_categories')->get();
                                ?>
                                @foreach($categories as $category) 
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach  
                            </select>
                          </div>
        
                        </div>                         
                    </div>               
      
              
                      <div class="form-group">
                        <label for="">Description</label>
                        <textarea id="summernote" name="description" rows="10">{{$data->description}}</textarea>  
                      </div>
      
                      <div class="form-group">
                        <label for="">Short Description</label>
                        <textarea name="short_description"  class="form-control"  rows="2">{{$data->short_description}}</textarea>  
                      </div>

                      <div class="form-group">
                        <label for="">Meta Description</label>                    
                        <textarea name="meta_description"  class="form-control"  rows="2">{{$data->meta_description}}</textarea> 
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
                          <input type="hidden" name="id" value="{{$data->id}}">
                          <button type="submit" class="btn btn-primary">Update</button>
                          <a href="{{URL::to('blogs')}}" class="btn btn-default">Cancel</a>
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