
@extends('admin.master')
@section('main_content')    

<div class="col-4 col-xl-4 page-title">
  <h4 class="f-w-700">Page Content</h4>
  <nav>
    <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
      <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"> </i></a></li>
      <li class="breadcrumb-item f-w-400">Dashboard</li>
      <li class="breadcrumb-item f-w-400 active">Default</li>
    </ol>
  </nav>
</div>
@include('admin._nav_top')

<div class="page-body">
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="edit-profile">
      <div class="row">
        
        <div class="col-xl-12">
          
          <table id="datatable" class="d-style w-100 table text-dark-m1 text-95 border-y-1 brc-black-tp11 collapsed">
            <!-- add `collapsed` by default ... it will be removed by default -->
            <!-- thead with .sticky-nav -->
            <thead class="sticky-nav text-secondary-m1 text-uppercase text-85">
              <tr>
                <th class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">SN</th>
                <th  class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm">Image </th>	
                <th  class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm"> Content Title </th>	
                <th  class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm"> Page</th>								
                <th  class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm"> Position</th>								
                <th  class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm"> Status </th>
                <th  class="border-0 bgc-white bgc-h-yellow-l3 shadow-sm"> Action </th>                   

              </tr>
            </thead>

            <tbody class="pos-rel">
            @foreach($data as $item)                                   
              <tr class="d-style bgc-h-default-l4">
              
                <td class="pl-3 pl-md-4 align-middle pos-rel"> </td>
                <td>	
                    @if($item->image != null )
                      <img src="{{ URL::asset('storage/app/public/'.$item->image.'') }}" height="40px" width="80px;">
                    @else
                      <img src="{{asset('frontend/images/no-image.jpg')}}" height="40px" width="80px;" class="product-image">
                    @endif   
                </td> 
                
                <td>{{$item->title}}</td>
                <td>{{$item->page}}</td>
                <td>{{$item->position}}</td>
                <td class="center">
                    @if($item->active == 'on') 
                    <span class="label label-success">Active</span>
                    @elseif ($item->active != 'on') 
                    <span class="label label-warning">Inactive</span>
                    @endif
                </td>

                <td class="align-middle">
                  <span class="d-none d-lg-inline">
                      <a  title="Edit" href="edit-post/{{$item->id}}" class="v-hover">
                          <i class="fa fa-edit text-blue-m1 text-120"></i>
                      </a>
                  </span>

                  <span class="d-lg-none text-nowrap">
                      <a title="Edit" href="edit-post/{{$item->id}}" class="btn btn-outline-info shadow-sm px-4 btn-bgc-white">
                          <i class="fa fa-pencil-alt mx-1"></i>
                          <span class="ml-1 d-md-none">Edit</span>
                  </a>
                  </span>
                                                                                
                  @if (session('user.email') == 'hafizur.csejnu@gmail.com')                             
                 
                  <span class="d-lg-inline">
                    <a data-rel="tooltip" title="Delete" href="javascript:void(0)" data-target="#confirm_delete_modal" data-toggle="modal" data-id="{{$item->id}}" class="delete-btn v-hover">
                        <i class="fa fa-trash text-blue-m1 text-120"></i>
                    </a>
                    <div id="confirm_delete_modal" class="modal fade" aria-modal="true">
                      <div class="modal-dialog modal-dialog-centered modal-confirm">
                        <div class="modal-content">
                          <div class="modal-header">
                            <div class="icon-box">
                              <i class="fa fa-times fa-4x"></i>
                            </div>				
                            <h4 class="modal-title w-100">Warning!</h4>	
                          </div>
                          <div class="modal-body">
                            <p class="text-center">Are you sure? This action can't be undone.</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <a href="" class="btn btn-danger delete-post">Delete</a>
                          </div>
                        </div>
                      </div>
                    </div>                              
                  </span>

                  <span class="d-lg-none text-nowrap">
                      <a title="Edit" href="#" class="btn btn-outline-info shadow-sm px-4 btn-bgc-white">
                          <i class="fa fa-trash-alt mx-1"></i>
                          <span class="ml-1 d-md-none">Delete</span>
                  </a>
                  </span>

                  @endif


                </td>
              </tr>
              @endforeach

            
            </tbody>
          </table>


        </div>
      
      </div>
    </div>
  </div>
  <!-- Container-fluid Ends-->
</div>


 
@endsection