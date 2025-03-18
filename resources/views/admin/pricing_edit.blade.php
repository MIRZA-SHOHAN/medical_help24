
@extends('admin.master')
@section('main_content')    

  <div class="page-content container container-plus">
    <div class="page-header pb-2">
      <h1 class="page-title text-primary-d2 text-150">
        Update Pricing     
      </h1> 
      <a href="{{URL::to('add-pricing')}}">Add new pricing</a>
      <a href="pricings"class="btn btn-default px-3 text-95 radius-round border-2 brc-black-tp10 float-left">
        <i class="fa fa-plus mr-1"></i>
        <span class="d-sm-none d-md-inline">All</span> Pricings
      </a>
    </div>   


    <div class="row mt-3">
      <div class="col-12">
        <div class="card dcard">
          <div class="card-body px-1 px-md-3">                                   
            <div role="main" class="main-content">         
              <div class="page-content container container-plus">               

                <form action="update_pricing" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="title" class="form-control" id=""  value="{{$data->title}}">
                  </div>                 
                  <div class="form-group">
                    <label for="">Sub Title</label>
                    <input type="text" name="sub_title" class="form-control" id=""  value="{{$data->sub_title}}">
                  </div>                 
                  <div class="form-group">
                    <label for="">Price</label>
                    <input type="text" name="price" class="form-control" id=""  value="{{$data->price}}">
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
                    <div class="form-group col-md-6 float-left">
                        <label for="">Custom ID</label>
                        <input type="text" name="custom_id" class="form-control" id=""  value="{{$data->custom_id}}">
                    </div>

                    <div class="form-group col-md-6 float-left">
                        <label for="">Custom Class</label>
                        <input type="text" name="custom_class" class="form-control" id=""   value="{{$data->custom_class}}">
                    </div>
                  </div>

                  
                      <div class="d-none form-group">
                        <label for="">Image: </label>
                        <br>
                        <input type="hidden" name="hidden_image" value="{{$data->image}}">
                        <input type="hidden" name="id" value="{{$data->id}}">
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
                      <a href="{{URL::to('posts')}}" class="btn btn-default">Cancel</a>
                    </form>
                
             </div>
            </div>
          </div>
        </div>           
      </div>
    </div>

  </div>
 
@endsection