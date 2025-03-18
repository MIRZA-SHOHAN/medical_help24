
@extends('admin.master')
@section('main_content')    

  <div class="page-content container container-plus">

    <div class="page-header pb-2">
      <h1 class="page-title text-primary-d2 text-150">
        Update Testimonial
      </h1>       
      
      <a href="testimonials"class="btn btn-default px-3 text-95 radius-round border-2 brc-black-tp10 float-left">
         All Testimonial
      </a>
    </div>   

   


    <div class="row mt-3">
      <div class="col-12">
        <div class="card dcard">
          <div class="card-body px-1 px-md-3">                                   
            <div role="main" class="main-content">         
              <div class="page-content container container-plus">               

                <form action="update_testimonial" method="post" enctype="multipart/form-data">
                  @csrf
                 
                    <div class="row">
                          <div class="col-md-6">                       
                              <label for="">Name</label>
                              <input type="text" name="name"  class="form-control" id="" value="{{$data->name}}">
                          </div>
                          
                          <div class="col-md-6">                       
                              <label for="">Designation</label>
                              <input type="text" name="designation" class="form-control" id="" value="{{$data->designation}}">
                          </div>
                          

                    </div>
                    <div class="row"> 

                        <div class="col-md-6">                       
                          <label for="" style="margin-top: 10px;">Review Title</label>
                          <input type="text" name="review_title" class="form-control" id="" value="{{$data->review_title}}">
                        </div>
                        
                        <div class="col-md-6">                       
                          <label for="" style="margin-top: 10px">Review Details</label>
                          <input type="text" name="review_details" class="form-control" id="" value="{{$data->review_details}}">
                        </div>
                      

                      

                    </div>
                    <div class="row">
                      
                    

                    <div class="col-md-6">                       
                        <label for="" style="margin-top: 10px;">Ratings</label>
                        <input type="text" name="ratings" class="form-control" id="" value="{{$data->ratings}}">
                    </div>  
                    </div>

                  <div class="form-group" style="margin-top: 20px">
                    <label for="" >Image: </label>
                    <img id="uploadPreview" style="width: 200px; height: 150px; display:none" />
                    <input id="uploadImage"  type="file" name="image" onchange="PreviewImage();" />

                    {{-- <p>NB: Best image resolutions -> [banner/slider: 2000px*1300px] </p> --}}
                  </div>

                  <div class="form-group">                    
                    <label class="form-check-label" for="exampleCheck1">
                     Active
                    </label>
                    <input type="checkbox" name="active" checked class="form-check-input" id="exampleCheck1">
                  </div>
                  <br>
                  <input type="hidden" name="id" value="{{$data->id}}">
                  <button type="submit" class="btn btn-primary">Update</button>
                  <button type="button" class="btn btn-default">Cancel</button>
                </form>
                
             </div>
            </div>
          </div>
        </div>           
      </div>
    </div>

  </div>
 
@endsection