
@extends('admin.master')
@section('main_content')    

  <div class="page-content container container-plus">

    <div class="page-header pb-2">
      <h1 class="page-title text-primary-d2 text-150">
        Update Team Member   
      </h1>       
      
      <a href="team-members"class="btn btn-default px-3 text-95 radius-round border-2 brc-black-tp10 float-left">
         All Team Member 
      </a>
    </div>   

   


    <div class="row mt-3">
      <div class="col-12">
        <div class="card dcard">
          <div class="card-body px-1 px-md-3">                                   
            <div role="main" class="main-content">         
              <div class="page-content container container-plus">               

                <form action="update_team_member" method="post" enctype="multipart/form-data">
                  @csrf
                  {{-- <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="title" class="form-control" id=""  placeholder="Enter title here">
                  </div>                 
                  <div class="form-group">
                    <label for="">Sub Title</label>
                    <input type="text" name="sub_title" class="form-control" id=""  placeholder="Enter sub title here">
                  </div>                  --}}

                    <div class="row">

                        <div class="col-md-4">                       
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{$data->name}}" class="form-control" id="">
                        </div>
                        <div class="col-md-4">                       
                            <label for="">Designation</label>
                            <input type="text" name="designation" value="{{$data->designation}}" class="form-control" id="">
                        </div>
                        <div class="col-md-4">                       
                          <label for="">Sub Title</label>
                          <input type="text" name="sub_title"  value="{{$data->sub_title}}" class="form-control" id="">
                      </div>
                    </div>
                    <div class="row">
                        
                        
                        {{-- <div class="col-md-6">                       
                            <label for="" style="margin-top: 10px;">Description</label>
                            <input type="text" name="description" class="form-control" id=""  placeholder="Enter trainer's name">
                        </div> --}}

                        <div class="col-md-6">                       
                            <div class="form-group"  style="margin-top: 25px; margin-bottom:20px">
                                <label for=""> Description</label>
                                <textarea name="description" class="form-control" >{{$data->description}}</textarea>  
                            </div>
                        </div>
                        
                    </div>
                 {{-- <div class="row">
                      <div class="col-md-6">
                        <label for="">Select category</label>
                        <select class="form-control" name="category" required="">
                            <option value="">Select category</option>                        
                            <option value="Level 1 - Beginner">Level 1 - Beginner</option>
                            <option value="Level 1-2 - Experienced Beginner">Level 1-2 - Experienced Beginner</option>
                            <option value="Level 2 - Intermediate ">Level 2 - Intermediate </option>
                            <option value="Level 2-3 Advanced-Intermediate">Level 2-3 Advanced-Intermediate</option> 
                            <option value="Level 3 - Advanced  ">Level 3 - Advanced  </option> 
                        </select>
                      </div>

                      <div class="col-md-6">                       
                        <label for="">Trainer's Name</label>
                        <input type="text" name="trainer" class="form-control" id=""  placeholder="Enter trainer's name">
                      </div>
                 </div> --}}

                 {{-- <div class="row mt-3">
                      <div class="col-md-6">
                        <label for="">Date Time Details</label>
                        <input type="text" name="date_time" class="form-control" id=""  placeholder="Enter date and time">
                      </div>

                      <div class="col-md-6">                       
                        <label for="">Author's Name</label>
                        <input type="text" name="author" class="form-control" id=""  placeholder="Enter author's name">
                      </div>
                 </div>

                  <div class="form-group">
                    <label for="">Description</label>
                    <textarea id="summernote" name="description" rows="2">
                    </textarea>  
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
                    </div>  --}}

                  <div class="form-group">
                    <label for="" >Image: </label>
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