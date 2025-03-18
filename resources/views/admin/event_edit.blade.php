
@extends('admin.master')
@section('main_content')    

  <div class="page-content container container-plus">
    
    <div class="page-header pb-2">
      <h1 class="page-title text-primary-d2 text-150">
        Update Event     
      </h1> 
      <a href="{{URL::to('add-event')}}"><i class="fa fa-plus mr-1"></i> Add new</a>
      <a href="class"class="btn btn-default px-3 text-95 radius-round border-2 brc-black-tp10 float-left">
         All Events
      </a>
    </div>   


    <div class="row mt-3">
      <div class="col-12">
        <div class="card dcard">
          <div class="card-body px-1 px-md-3">                                   
            <div role="main" class="main-content">         
              <div class="page-content container container-plus">               

                <form action="update_event" method="post" enctype="multipart/form-data">
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
                    <div class="col-md-6">
                      <label for="">Select category</label>
                      <select class="form-control" name="category" required="">
                          <option value="{{$data->category}}">{{$data->category}}</option>                        
                          <option value="Level 1 - Beginner">Level 1 - Beginner</option>
                          <option value="Level 1-2 - Experienced Beginner">Level 1-2 - Experienced Beginner</option>
                          <option value="Level 2 - Intermediate">Level 2 - Intermediate </option>
                          <option value="Level 2-3 Advanced-Intermediate">Level 2-3 Advanced-Intermediate</option> 
                          <option value="Level 3 - Advanced">Level 3 - Advanced  </option>              
                          <option value="All Levels">All Levels</option>              
                      </select>
                    </div>

                    <div class="col-md-6">                       
                      <label for="">Trainer's Name</label>
                      <input type="text" name="trainer" class="form-control" id=""   value="{{$data->trainer}}">
                    </div>
               </div>

               <div class="row mt-3">
                    <div class="col-md-6">
                      <label for="">Date Time Details</label>
                      <input type="text" name="date_time" class="form-control" id=""   value="{{$data->date_time}}">
                    </div>

                    <div class="col-md-6">                       
                      <label for="">Author's Name</label>
                      <input type="text" name="author" class="form-control" id=""  value="{{$data->author}}">
                    </div>
               </div>
               

                  <div class="form-group">
                    <label for="">Description</label>
                    <textarea id="summernote" name="description" rows="25">{{$data->description}}</textarea>  
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
                    <div class="form-group col-md-6 float-left">
                        <label for="">Link Title</label>
                        <input type="text" name="link_title" class="form-control" id=""  value="{{$data->link_title}}">
                    </div>

                    <div class="form-group col-md-6 float-left">
                        <label for="">Link Action</label>
                        <input type="text" name="link_action" class="form-control" id=""   value="{{$data->link_action}}">
                    </div>
                  </div>

                  
                      <div class="form-group">
                        <label for="">Image: </label> 
                        <br>
                        <input type="hidden" name="hidden_image" value="{{$data->image}}">
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <br>
                        <img src="{{ URL::asset('storage/app/public/'.$data->image.'') }}" id="previousImage" height="100px" alt="">
                        <br>
                        <br>
                        <img id="uploadPreview" style="width: 200px; height: 150px; display:none" />
                        <input id="uploadImage"  type="file" name="image" onchange="PreviewImage();" />
                      </div>
    
                      <div class="form-group">                    
                        <label class="form-check-label" for="exampleCheck1">
                         Active
                        </label>
                        <input type="checkbox" name="active" @if($data->active == 'on') checked
                        @endif class="form-check-input" id="exampleCheck1">
                      </div>
                      <br>
                      <button type="submit" class="btn btn-primary">Update</button>
                      <a href="{{URL::to('events')}}" class="btn btn-default">Cancel</a>
                    </form>
                
             </div>
            </div>
          </div>
        </div>           
      </div>
    </div>

  </div>
 
@endsection