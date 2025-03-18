
@extends('admin.master')
@section('main_content')

<div class="col-4 col-xl-4 page-title">
  <h4 class="f-w-700">Dashboard</h4>
  <nav>
    <ol class="breadcrumb justify-content-sm-start align-items-center mb-0">
      <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"> </i></a></li>
      <li class="breadcrumb-item f-w-400">Dashboard</li>
      <li class="breadcrumb-item f-w-400 active">Home</li>
    </ol>
  </nav>
</div>
@include('admin._nav_top')

 <!-- Page Sidebar Ends-->
 <div class="page-body">
  <!-- Container-fluid starts-->
  <div class="container-fluid default-dashboard"> 
    <div class="row widget-grid">
      <div class="col-xl-12 col-md-12 proorder-xl-1 proorder-md-1">  
        <div class="card profile-greeting p-0">
          <div class="card-body">
            <div class="img-overlay">
              <h1 style="color: #000">Good day, User name</h1>
              <p>Welcome to admin panel dashboard.</p>
              {{-- <a class="btn" href="index.html">Go Premium</a> --}}
              <br>
              <br>
            </div>
          </div>
        </div>
      </div>
      
      
      
      
     
      
      <div class="d-none col-xxl-3 col-xl-6 col-md-5 box-col-6 proorder-xl-6 proorder-md-7"> 
        <div class="card">
          <div class="card-header card-no-border pb-0">
            <div class="header-top">
              <h4>Notifications</h4>
              <div class="dropdown icon-dropdown">
                <button class="btn dropdown-toggle" id="userdropdown12" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown12"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
              </div>
            </div>
          </div>
          <div class="card-body">
            <ul class="notification-box">
              <li class="d-flex"> 
                <div class="flex-shrink-0 bg-light-primary"><img src="{{asset('assets/images/dashboard/icon/wallet.png')}}" alt="Wallet"></div>
                <div class="flex-grow-1"> <a href="private-chat.html">
                    <h5>New daily offer added</h5></a>
                  <p class="text-truncate">New user-only offer added</p>
                </div><span>10 Sep,2023</span>
              </li>
              <li class="d-flex"> 
                <div class="flex-shrink-0 bg-light-info"><img src="{{asset('assets/images/dashboard/icon/shield-dne.png')}}" alt="Shield-dne"></div>
                <div class="flex-grow-1"> <a href="private-chat.html">
                    <h5>Product Evaluation</h5></a>
                  <p class="text-truncate">Changed to a new workflow</p>
                </div><span>12 Oct,2023</span>
              </li>
              <li class="d-flex"> 
                <div class="flex-shrink-0 bg-light-warning"> <img src="{{asset('assets/images/dashboard/icon/graph.png')}}" alt="Graph"></div>
                <div class="flex-grow-1"> <a href="private-chat.html">
                    <h5>Return of a Product</h5></a>
                  <p class="text-truncate">452 items were returned</p>
                </div><span>15 Mar,2023</span>
              </li>
              <li class="d-flex"> 
                <div class="flex-shrink-0 bg-light-tertiary"><img src="{{asset('assets/images/dashboard/icon/ticket-star.png')}}" alt="Ticket-star"></div>
                <div class="flex-grow-1"> <a href="private-chat.html">
                    <h5>Recently Paid</h5></a>
                  <p class="text-truncate">Mastercard payment of $343  </p>
                </div><span>20 Jun,2023</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="d-none col-xxl-5 col-xl-6 box-col-6 proorder-xl-7 proorder-md-8"> 
        <div class="card">
          <div class="card-header card-no-border pb-0">
            <div class="header-top">
              <h4>Upcoming Appointments</h4>
            </div>
          </div>
          <div class="card-body appointments relative">
            <div class="row"> 
              <div class="col-5"> 
                <ul class="appointments-user">
                  <li class="d-flex align-items-center">
                    <div class="flex-shrink-0"><img src="{{asset('assets/images/dashboard/user/05.png')}}" alt=""></div>
                    <div class="flex-grow-1"><a href="private-chat.html">
                        <h5>John Elliot</h5></a>
                      <p>21 Oct 2023<span>(15:55 AM)</span></p>
                    </div>
                  </li>
                  <li class="d-flex align-items-center">
                    <div class="flex-shrink-0"><img src="{{asset('assets/images/dashboard/user/06.png')}}" alt=""></div>
                    <div class="flex-grow-1"><a href="private-chat.html">
                        <h5>Ashley Hart</h5></a>
                      <p>12 Oct 2023<span>(10:20 AM)</span></p>
                    </div>
                  </li>
                  <li class="d-flex align-items-center">
                    <div class="flex-shrink-0"><img src="{{asset('assets/images/dashboard/user/07.png')}}" alt=""></div>
                    <div class="flex-grow-1"><a href="private-chat.html">
                        <h5>Anna lverson</h5></a>
                      <p>05 Oct 2023<span>(14:30 AM)</span></p>
                    </div>
                  </li>
                  <li class="d-flex align-items-center">
                    <div class="flex-shrink-0"><img src="{{asset('assets/images/dashboard/user/08.png')}}" alt=""></div>
                    <div class="flex-grow-1"><a href="private-chat.html">
                        <h5>Dana Lemon</h5></a>
                      <p>01 Oct 2023     <span>(18:45 AM)</span></p>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col-7"> 
                <div class="datepicker-here mod" id="datepicker"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="d-none col-xxl-4 col-xl-5 col-md-7 box-col-5 proorder-xl-10 proorder-md-4"> 
        <div class="card">
          <div class="card-header card-no-border pb-0">   
            <div class="header-top">
              <h4>Active Members     </h4>
              <div class="dropdown icon-dropdown">
                <button class="btn dropdown-toggle" id="userdropdown13" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="icon-more-alt"></i></button>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="userdropdown13"><a class="dropdown-item" href="#">Weekly</a><a class="dropdown-item" href="#">Monthly</a><a class="dropdown-item" href="#">Yearly</a></div>
              </div>
            </div>
          </div>
          <div class="card-body active-members px-0 pb-0">
            <div class="table-responsive theme-scrollbar">
              <table class="table display" style="width:100%">
                <thead>
                  <tr>
                    <th>Member Profile</th>
                    <th>Today’s hrours    </th>
                    <th class="text-center">Status</th>
                  </tr>
                </thead>
                <tbody>   
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0"><img src="{{asset('assets/images/dashboard/user/01.jpg')}}" alt=""></div>
                        <div class="flex-grow-1"><a href="product.html">
                            <h5>Joshua Wood</h5></a><span>UI/UX Designer</span></div>
                      </div>
                    </td>
                    <td> 02 hours</td>
                    <td>
                      <p class="members-box background-light-primary text-center b-light-primary font-primary"> Away</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0"><img src="{{asset('assets/images/dashboard/user/02.jpg')}}" alt=""></div>
                        <div class="flex-grow-1"><a href="product.html">
                            <h5>Ashley Hart</h5></a><span>Website Design</span></div>
                      </div>
                    </td>
                    <td> 05 hours</td>
                    <td>
                      <p class="members-box background-light-secondary text-center b-light-secondary font-secondary">Working</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0"><img src="{{asset('assets/images/dashboard/user/03.jpg')}}" alt=""></div>
                        <div class="flex-grow-1"><a href="product.html">
                            <h5>Anna lverson </h5></a><span>UX Research</span></div>
                      </div>
                    </td>
                    <td> 10 hours</td>
                    <td> 
                      <p class="members-box background-light-secondary text-center b-light-secondary font-secondary"> Working</p>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex align-items-center">
                        <div class="flex-shrink-0"><img src="{{asset('assets/images/dashboard/user/04.jpg')}}" alt=""></div>
                        <div class="flex-grow-1"><a href="product.html">
                            <h5>Ron Dayley</h5></a><span>234+ Online</span></div>
                      </div>
                    </td>
                    <td> 15 hours</td>
                    <td>
                      <p class="members-box background-light-primary text-center b-light-primary font-primary"> Away</p>
                    </td>
                  </tr>
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