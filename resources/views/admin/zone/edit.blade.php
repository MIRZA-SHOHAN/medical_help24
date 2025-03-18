
@extends('admin.master')
@section('main_content')    


<div class="col-4 col-xl-4 page-title">
  <h4 class="f-w-700">Update Hospital</h4>
  <nav>
    <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
      <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"> </i></a></li>
      <li class="breadcrumb-item f-w-400">Dashboard</li>
      <li class="breadcrumb-item f-w-400 active">Post</li>
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
                  <form action="/update_zone" method="post" enctype="multipart/form-data">
                      @csrf
                      
                      <div class="row">
                        <div class="form-group col-md-6">
                          <label for="">Name</label>
                          <input type="text" name="title" class="form-control" id="" value="{{$data->title}}">
                        </div>  

                        <div class="form-group col-md-6">
                          <label for="">District</label>
                          <select class="form-control ss" name="district" id="">
                            @php
                              $district = DB::table('districts')->where('id', $data->district)->first();
                            @endphp
                            <option value="{{$data->district}}">
                              {{$district->name}} ({{$district->name_bn}})
                            </option>
                            @php
                              $districts = DB::table('districts')->get();
                            @endphp
                            @foreach($districts as $item)
                              <option value="{{$item->id}}">{{$item->name}} ({{$item->name_bn}})</option>
                            @endforeach
                          </select>
                        </div>
                                                
                        
                      </div> 
                        
                      <div class="form-group mb-3">                    
                        <label class="form-check-label" for="exampleCheck1">
                         Active <input type="checkbox" name="active" checked class="form-check-input" id="exampleCheck1">
                        </label>
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
    </div>
    </div>
  </div>
 
@endsection