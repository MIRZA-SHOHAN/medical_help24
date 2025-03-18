@extends('admin.master')
@section('main_content')  

<div class="col-4 col-xl-4 page-title">
    <h4 class="f-w-700">Edit Profile</h4>
    <nav>
      <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
        <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"> </i></a></li>
        <li class="breadcrumb-item f-w-400">Users</li>
        <li class="breadcrumb-item f-w-400 active">Edit Profile</li>
      </ol>
    </nav>
  </div>
@include('admin._nav_top')

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="edit-profile">
        <div class="row">
          <div class="col-xl-4">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title mb-0">My Profile</h4>
                <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
              </div>
              <div class="card-body">
                <form>
                  <div class="row mb-2">
                    <div class="profile-title">
                      <div class="d-flex">                        
                        <img class="img-70 rounded-circle" alt="" src="{{asset('backend/assets/images/user/7.jpg')}}">
                        <div class="flex-grow-1">
                          <h4 class="mb-1">{{$data->fname}}</h4>
                          <p>{{session('user.type')}}</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="mb-3 d-none">
                    <h6 class="form-label">Bio</h6>
                    <textarea class="form-control" rows="5">On the other hand, we denounce with righteous indignation</textarea>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Email-Address: {{$data->email}}</label>
                   
                  </div>
               
                  <div class="mb-3">
                    <label class="form-label">Phone: {{$data->phone}}</label>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Preferred Language: {{$data->language}}</label>
                  </div>
                  {{-- <div class="form-footer">
                    <button class="btn btn-primary btn-block">Save</button>
                  </div> --}}
                </form>
              </div>
            </div>
          </div>
          <div class="col-xl-8">
            <form class="card" action="update_profile" method="post">
              @csrf
              <div class="card-header">
                <h4 class="card-title mb-0">Edit Profile</h4>
                <div class="card-options"><a class="card-options-collapse" href="#" data-bs-toggle="card-collapse"><i class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#" data-bs-toggle="card-remove"><i class="fe fe-x"></i></a></div>
              </div>
              <div class="card-body">
                <div class="row">

                    <div class="col-sm-6 col-md-6">
                        <div class="mb-3">
                          <label class="form-label">First Name</label>
                          <input class="form-control" type="text" name="fname" value="{{$data->fname}}">
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-6">
                        <div class="mb-3">
                          <label class="form-label">Last Name</label>
                          <input class="form-control" type="text" name="lname" value="{{$data->lname}}">
                        </div>
                      </div>
                 
                  <div class="col-sm-6 col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Email address</label>
                      <input class="form-control" type="email" name="email" value="{{$data->email}}">
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Password</label>
                      <input class="form-control" type="password" name="password" autocomplete="off" value="******">
                    </div>
                  </div>
                 
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label class="form-label">Phone</label>
                      <input class="form-control" type="text" name="phone" value="{{$data->phone}}">
                    </div>                   
                  </div>

                  <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label">Preferred Language </label>
                        <select class="form-control btn-square" name="language">
                            <option value="{{$data->language}}">{{$data->language}}</option>
                            <option value="English">English</option>
                            <option value="Germany">Germany</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-md-12 d-none">
                    <div>
                      <label class="form-label">About Me</label>
                      <textarea class="form-control" rows="4" placeholder="Enter About your description"></textarea>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer text-end">
                <button class="btn btn-primary" type="submit">Update Profile</button>
              </div>
            </form>
          </div>
        
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>
@endsection