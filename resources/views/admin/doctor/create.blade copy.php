
@extends('admin.master')
@section('main_content')    

  <div class="page-content container container-plus">

    <div class="page-header pb-2">
      <h1 class="page-title text-primary-d2 text-150">
        Team Member   
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

                <form action="save_team_member" method="post" enctype="multipart/form-data">
                  @csrf
            
                    <div class="row">
                        <div class="col-md-4">                       
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" id="">
                        </div>
                        <div class="col-md-4">                       
                            <label for="">Designation</label>
                            <input type="text" name="designation" class="form-control" id="">
                        </div>
                        <div class="col-md-4">                       
                          <label for="">Sub Title</label>
                          <input type="text" name="sub_title" class="form-control" id="">
                        </div>
                    </div>

                    <div class="row">
                        
                        
                        {{-- <div class="col-md-6">                       
                            <label for="" style="margin-top: 10px;">Description</label>
                            <input type="text" name="description" class="form-control" id=""  placeholder="Enter trainer's name">
                        </div> --}}

                        <div class="col-md-12">                       
                            <div class="form-group"  style="margin-top: 25px; margin-bottom: 20px">
                                <label for=""> Description</label>
                                <textarea name="description" class="form-control" ></textarea>  
                            </div>
                        </div>
                        
                    </div>
               

                  <div class="form-group">
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
 
@endsection