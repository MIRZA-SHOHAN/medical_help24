
@extends('admin.master')
@section('main_content')    
<style>
 
  .select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px dashed rgba(106, 113, 133, 0.3) !important;
    border-radius: 4px;
}
</style>

<div class="col-4 col-xl-4 page-title">
  <h4 class="f-w-700">Add Hospital</h4>
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
      
                    <form action="save_hospital" method="post" enctype="multipart/form-data">
                      @csrf
                      
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="">Title</label>
                          <input type="text" name="title" class="form-control" id=""  placeholder="Enter Name Here">
                        </div>                 
                        <div class="form-group col-md-6">
                          <label for="">Sub Title</label>
                          <input type="text" name="sub_title" class="form-control" id=""  placeholder="Enter Designation Here">
                        </div>  
                        
                        
                      </div> 
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="">Type</label>
                          <select class="form-control ss" name="type" id="">
                            <option value="">Select Type</option>
                            <option value="Hospital & Diagnostic Center">Hospital & Diagnostic Center</option>
                            <option value="Hospital">Hospital</option>
                            <option value="Diagnostic Center">Diagnostic Center</option>
                            <option value="Clinic">Clinic</option>
                            <option value="Fitness Centers">Fitness Centers</option>
                            <option value="Blood Bank">Blood Bank</option>
                          </select>
                          {{-- <input type="text" name="type" class="form-control" id=""  value="{{$data->type}}"> --}}
                        </div> 
                        <div class="form-group col-md-6">
                          <label for="">Category</label>
                           <select class="form-control ss" name="category" id="">
                            <option value="">Select Category</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                          </select>
                        </div>   

                      </div>                
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="">Address</label>
                          <input type="text" name="address" class="form-control" id=""  >
                        </div>   
                        <div class="form-group col-md-6">
                          <label for="">Sub District</label>
                          <input type="text" name="sub_district" class="form-control" id="" >
                        </div>   
 
                        
                        
                      </div>               
                      <div class="row">
                        
                        <div class="form-group col-md-6">
                          <label for="">District</label>
                          <select class="form-control bor ss" name="district" id="">
                            <option value="">Select District</option>
                            @php
                                $district = DB::table('districts')
                                // ->where('client_id', session('client_id'))
                                ->get();
                                // dd($zone);
                            @endphp  
                            @foreach($district as $item) 
                              <option value="{{$item->id}}">{{$item->name}} ({{$item->name_bn}})</option>
                            @endforeach 
                          </select>
                        </div> 


                        <div class="form-group col-md-6">
                          <label for="">Area</label>
                          <select class="form-control ss" name="zone_id" id="">
                            <option value="">Select Area</option>
                            @php
                                $zone = DB::table('zones')
                                // ->where('client_id', session('client_id'))
                                ->get();
                                // dd($zone);
                            @endphp  
                            @foreach($zone as $item) 
                              <option value="{{$item->id}}">{{$item->title}}</option>
                            @endforeach 
                          </select>
                        </div>   

                      </div>    
                      
                    
                                  
                  
                   
                  
                      <!-- <div class="form-group">
                        <label for="">Description</label>
                        <textarea id="summernote" name="description"></textarea>  
                      </div> -->
                  
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
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" id=""  placeholder="Enter email">
                        </div>
                        <div class="form-group col-6 float-left">
                            <label for="">Mobile No</label>
                            <input type="text" name="m_no" class="form-control" id=""  placeholder="Enter mobile no">
                        </div>
                        <div class="form-group col-6 float-left">
                            <label for="">Website</label>
                            <input type="text" name="website" class="form-control" id=""  placeholder="Enter website">
                        </div>
                  
                        <div class="form-group col-6 float-left">
                            <label for="">Facebook Link </label>
                            <input type="text" name="fb_link" class="form-control" id=""  placeholder="Enter facebook link">
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