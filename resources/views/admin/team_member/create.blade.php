
@extends('admin.master')
@section('main_content')    


<div class="col-4 col-xl-4 page-title">
  <h4 class="f-w-700">Add Doctor</h4>
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
      
                    <form action="save_team_member" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="">Name</label>
                          <input type="text" name="name" class="form-control" id=""  placeholder="Enter Name Here">
                        </div> 

                        <div class="form-group col-md-6">
                          <label for="">Dr. Degree</label>
                          <input type="text" name="degree" class="form-control" id=""  >
                        </div>

                      </div>               
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="">Dr. Designation</label>
                          <input type="text" name="designation" class="form-control" id=""  placeholder="Enter Designation Here">
                        </div>  

                        <div class="form-group col-md-6">
                          <label for="">Consultancy Fees</label>
                          <input type="text" name="fees" class="form-control" id="" >
                        </div>   

                      </div>               
                      <div class="row">
                           
                        <div class="form-group col-md-6">
                          <label for="">Specialities</label>
                          <select class="form-control ss" name="speciality_id" id="">
                            <option value="">Select Specialities</option>
                            @php
                                $specialities = DB::table('specialities')
                                // ->where('client_id', session('client_id'))
                                ->get();
                                // dd($zone);
                            @endphp
                            @foreach($specialities as $item) 
                               <option value="{{$item->id}}">{{$item->title}}</option>
                            @endforeach 
                          </select>
                        </div>   

                        <div class="form-group col-md-6">
                          <label for="">Hospital</label>
                          <select class="form-control ss" name="hospital_id" id="">
                            <option value="">Select Hospital</option>
                            @php
                                $hospitals = DB::table('hospitals')
                                // ->where('client_id', session('client_id'))
                                ->get();
                                // dd($zone);
                            @endphp
                            @foreach($hospitals as $item) 
                               <option value="{{$item->id}}">{{$item->title}}</option>
                            @endforeach 
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