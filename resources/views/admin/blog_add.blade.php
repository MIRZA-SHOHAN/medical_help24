
@extends('admin.master')
@section('main_content')    


<div class="col-4 col-xl-4 page-title">
  <h4 class="f-w-700">Add Blog</h4>
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
      
                    <form action="save_blog" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" id=""  placeholder="Enter title here">
                      </div>                 
                      <div class="form-group">
                        <label for="">Sub Title</label>
                        <input type="text" name="sub_title" class="form-control" id=""  placeholder="Enter sub title here">
                      </div>                 
                  
                     <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="exampleInputPassword1">Category</label>
                              <select class="form-control" name="category_id" required="">
                                  <option value="">Select category</option>
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
                  
                      <div class="form-group">
                        <label for="">Image: </label>
                        <img id="uploadPreview" style="width: 200px; height: 150px; display:none" />
                        <input id="uploadImage"  type="file" name="image" onchange="PreviewImage();" />
                  
                        <p>NB: Best image resolutions -> [banner/slider: 2000px*1300px] </p>
                      </div>
                  
                      <div class="form-group">                    
                        <label class="form-check-label" for="exampleCheck1">
                         Active
                        </label>
                        <input type="checkbox" name="active" checked class="form-check-input" id="exampleCheck1">
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