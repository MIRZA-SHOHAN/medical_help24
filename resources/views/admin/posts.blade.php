
@extends('admin.master')
@section('main_content')

<div class="col-4 col-xl-4 page-title">
  <h4 class="f-w-700">Page Content</h4>
  <nav>
    <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
      <li class="breadcrumb-item"><a href="/dashboard"> <i data-feather="home"> </i></a></li>
      <li class="breadcrumb-item f-w-400">Dashboard</li>
      <li class="breadcrumb-item f-w-400 active">Content</li>
    </ol>
  </nav>
</div>
@include('admin._nav_top')

 <!-- Page Sidebar Ends-->
 <div class="page-body">
  <!-- Container-fluid starts-->
  <div class="container-fluid default-dashboard"> 
    <div class="row widget-grid">
      
      
      <div class="col-xl-12 proorder-xl-5 box-col-12 proorder-md-5"> 
        <div class="card">
          <div class="card-header card-no-border pb-0">
            <div class="header-top">
              <h4>Posts | <a href="/add-post" class="small">add new</a>  </h4>
              <div class="dropdown icon-dropdown">
                <button class="btn dropdown-toggle" id="userdropdown0" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown0"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
              </div>
            </div>
          </div>
          <div class="card-body pt-0 projects px-0">
            <div class="table-responsive theme-scrollbar">
              <table class="table display" id="basic-10" style="width:100%">
                <thead>
                  <tr> 
                    <th> 
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="">
                        <label class="form-check-label"></label>
                      </div>
                    </th>
                    <th>Image</th>
                    <th>Tiitle</th>
                    <th>Page</th>
                    <th>Position</th>
                    <th>Status  </th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($data as $item)      
                  <tr>
                    <td>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="">
                        <label class="form-check-label"></label>
                      </div>
                    </td>

                    <td>	
                      @if($item->image != null )
                        <img src="{{ URL::asset('storage/app/public/'.$item->image.'') }}" height="40px" width="80px;">
                      @else
                        <img src="{{asset('frontend/images/no-image.jpg')}}" height="40px" width="80px;" class="product-image">
                      @endif   
                  </td> 
                
                  

                    <td>
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0"><img src="{{asset('assets/images/dashboard/project/1.png')}}" alt=""></div>
                        <div class="flex-grow-1 ms-2"><a href="/edit-post/{{$item->id}}" target="_blank">
                            <h6>{{$item->title}}</h6></a></div>
                      </div>
                    </td>
                    <td class="project-dot">
                      <div class="d-flex"> 
                        <div class="flex-shrink-0"><span class="bg-primary"></span></div>
                        <div class="flex-grow-1">
                          <h6>{{$item->page}}</h6>
                        </div>
                      </div>
                    </td>
                    <td>{{$item->position}}</td>

                    <td class="center">
                        @if($item->active == 'on') 
                        <span class="label label-success">Active</span>
                        @elseif ($item->active != 'on') 
                        <span class="label label-warning">Inactive</span>
                        @endif
                    </td>


                   
                    <td class="text-center"> 
                      <div class="dropdown icon-dropdown">
                        <button class="btn dropdown-toggle" id="userdropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown">
                          <a class="dropdown-item" href="/edit-post/{{$item->id}}" target="_blank">edit</a>
                          <a class="dropdown-item" href="#">delete</a>
                      </div>
                    </td>
                  </tr>
                  @endforeach
             
                  
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
     
      
      
    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>

 
@endsection