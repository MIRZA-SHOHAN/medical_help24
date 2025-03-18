
@extends('admin.master')
@section('main_content')    

<style>
  .requarde{
    color:red;
  }
  <style>
 
  .select2-container--default .select2-selection--single {
    background-color: #fff;
    border: 1px dashed rgba(106, 113, 133, 0.3) !important;
    border-radius: 4px;
}
</style>
</style>


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
      
                    <form action="/save_doctor" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="row">

                        

                        <div class="form-group col-md-6">
                          <label for="">Name <span class="requarde">*</span></label>
                          <input type="text" name="name" class="form-control" id=""  placeholder="Enter Name Here" required>
                        </div>

                        <div class="form-group col-md-6">
                          <label for="">Dr. Degree <span class="requarde">*</span></label>
                          <input type="text" name="degree" class="form-control" id=""  required>
                        </div>

                      </div>               
                      <div class="row">

                        <div class="form-group col-md-6">
                          <label for="">Dr. Designation</label>
                          <input type="text" name="designation" class="form-control" id=""  placeholder="Enter Designation Here">
                        </div> 
                        
                        
                        <!-- <div class="form-group col-md-6">
                          <label for="">Type</label>
                            <select class="form-control" id="districts" style="width: 100%;">
                                <option value="">Select a Type</option>
                                <option value="Doctor">Doctor</option>
                                <option value="Nurse">Nurse</option>
                                <option value="Lab Technologist">Lab Technologist</option>
                                <option value="Ultra Assistant">Ultra Assistant</option>
                            </select>
                        </div> -->
                        <div class="form-group col-md-6">
                          <label for="">Gender</label>
                            <select class="form-control" id="districts" style="width: 100%;">
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                        </div> 
                        <div class="form-group col-md-6">
                             <label for="">Department <span class="requarde">*</span></label>
                             <select class="form-control ss" name="dep_id" id="" required>
                               <option value="">Select department</option>
                               @php
                                   $hospital_departments = DB::table('hospital_departments')
                                   ->get();
                                   // dd($zone);
                               @endphp
                               @foreach($hospital_departments as $item) 
                                  <option value="{{$item->id}}">{{$item->name}} ({{$item->name_bn}})</option>
                               @endforeach 
                             </select>
                           </div> 
                           
                           <div class="form-group col-md-6">
                             <label for="">Hospital <span class="requarde">*</span></label>
                             <select class="form-control ss" name="hospital_id" id="" required>
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
                          <div class="form-group col-md-6">
                            <label for="">Specialities </label>
                            <input type="text" name="specialities" class="form-control" id="" >
                          </div> 
                          <div class="form-group col-md-6">
                            <label for="">Consultancy Fees</label>
                            <input type="text" name="fees" class="form-control" id="" >
                          </div>   

                      </div>    
                                   
                              
                      
                      <div class="form-group  col-md-12">
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