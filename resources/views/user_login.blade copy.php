<?php
use App\Models\Setting;
$settings = Setting::find(1);
?>
<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
    <base href="../" />

    <title>Login | {{$settings->title}}</title>

    <!-- include common vendor stylesheets & fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/node_modules/bootstrap/dist/css/bootstrap.css')}}">


    <link rel="stylesheet" type="te xt/css" href="{{asset('assets/node_modules/@fortawesome/fontawesome-free/css/fontawesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/node_modules/@fortawesome/fontawesome-free/css/regular.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/node_modules/@fortawesome/fontawesome-free/css/brands.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/node_modules/@fortawesome/fontawesome-free/css/solid.css')}}">
    <!-- include vendor stylesheets used in "Login" page. see "/views//pages/partials/page-login/@vendor-stylesheets.hbs" -->


   <!-- include fonts -->
   <link rel="stylesheet" type="text/css" href="{{asset('assets/dist/css/ace-font.css')}}">
   <!-- ace.css -->
   <link rel="stylesheet" type="text/css" href="{{asset('assets/dist/css/ace.css')}}">
   <!-- favicon -->
   <link rel="icon" type="image/png" href="{{asset('assets/assets/favicon.png')}}" />

   <!-- "Dashboard" page styles, specific to this page for demo only -->
   <link rel="stylesheet" type="text/css" href="{{asset('assets/views/pages/dashboard/@page-style.css')}}">
  </head>

  <body>
    <style>
      .alert-success {
          color: #11481d!important;
          background-color: #d4edda;
          border-color: #c3e6cb;
          font-weight: 600!important;
      }
    </style>
    <div class="body-container" style="background: #f2efea;">

      <div class="main-container container bgc-transparent">

        <div class="main-content minh-100 justify-content-center">
          <div class="p-2 p-md-4">
            <div class="row" id="row-1">
              <div class="col-12 col-xl-10 offset-xl-1 bgc-white shadow radius-1 overflow-hidden">

                <div class="row" id="row-2">

                  <div id="id-col-intro" class="col-lg-5 d-none d-lg-flex border-r-1 brc-default-l3 px-0">
                    <!-- the left side section is carousel in this demo, to show some example variations -->

                    <div id="loginBgCarousel" class="carousel slide minw-100 h-100" style="background-color: #ecf4fc !important;">
                      <ol class="d-none carousel-indicators">
                        <li data-target="#loginBgCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#loginBgCarousel" data-slide-to="1"></li>
                        <li data-target="#loginBgCarousel" data-slide-to="2"></li>
                        <li data-target="#loginBgCarousel" data-slide-to="3"></li>
                      </ol>

                      <div class="carousel-inner minw-100 h-100">
                        <div class="carousel-item active minw-100 h-100">
                          <!-- default carousel section that you see when you open login page -->
                          <div class="px-3 bgc-blue-l4 d-flex flex-column align-items-center justify-content-center">
                            <a class="mt-5 mb-2" href="{{URL::to('/')}}">
                              <img src="{{ URL::asset('storage/app/public/'.$settings->logo_header.'') }}" height="60px" width="100%" alt="">
                            </a>                          

                            <div class="mt-5 mx-4 text-dark-tp3 text-center">
                              <span class="text-120">                               
                                {{$settings->title}}
                              </span>
                              <hr class="mb-1 brc-black-tp10" />
                              <span class="text-120">    
                                {{$settings->sub_title}}
                              </span>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>
                              <br>  
                              <br>
                              <br>
                              <div style="text-align: center">
                              
                                {{-- <br />
                                <a id="id-remove-carousel" href="#" class="text-md text-dark
                                
                                -l2 d-inline-block mt-3">
                                  <i class="far fa-trash-alt text-110 text-orange-d1 mr-1 w-2"></i>
                                  Remove this section
                                </a>
                                <br /> --}}
                               
                              </div>
                            </div>

                            <div class="mt-auto mb-4 text-dark-tp2">
                              {{ENV('APP_NAME')}} &copy; {{date("Y")}}
                            </div>
                          </div>
                        </div>



                        <div class="carousel-item minw-100 h-100">
                          <!-- the second carousel item with dark background -->
                          <div class="d-flex flex-column align-items-center justify-content-start">
                           
                            <a class="mt-5 mb-2" href="">
                              <img src="{{ URL::asset('storage/app/public/'.$settings->logo_header.'') }}" height="80px" alt="">
                            </a>    
{{-- 
                            <h2 class="text-blue-l1">
                                {{ENV('APP_NAME')}} <span class="text-80 text-white-tp3"> App</span>
                            </h2> --}}
                          </div>
                        </div>



                        <div class="carousel-item minw-100 h-100">
                          <div class="d-flex flex-column align-items-center justify-content-start">
                            <div class="bgc-black-tp4 radius-1 p-3 w-90 text-center my-3 h-100">
                              <a class="mt-5 mb-2" href="">
                                <img src="{{ URL::asset('storage/app/public/'.$settings->logo_header.'') }}" height="80px" alt="">
                              </a>    

                              {{-- <h2 class="text-blue-l1">
                               {{ENV('APP_NAME')}} <span class="text-80 text-white-tp3">Application</span>
                              </h2> --}}
                            </div>
                          </div>
                        </div>



                        <div class="carousel-item minw-100 h-100">
                          <div style="background-image: url({{asset('assets/assets/image/login-bg-4.jpg')}});" class="d-flex flex-column align-items-center justify-content-start">
                           
                            <a class="mt-5 mb-2" href="">
                              <img src="{{ URL::asset('storage/app/public/'.$settings->logo_header.'') }}" height="80px" alt="">
                            </a>    

                            {{-- <h2 class="text-blue-d1">
                             {{ENV('APP_NAME')}} <span class="text-80 text-dark-tp3">Application</span>
                            </h2> --}}
                          </div>
                        </div>

                      </div>
                    </div>
                  </div> 


                  <div id="id-col-main" class="col-12 col-lg-7 py-lg-5 bgc-white px-0">


                    <!-- you can also use these tab links -->
                    <ul class="d-none mt-n4 mb-4 nav nav-tabs nav-tabs-simple justify-content-end bgc-black-tp11" role="tablist">
                      <li class="nav-item mx-2">
                        <a class="nav-link active px-2" data-toggle="tab" href="#id-tab-login" role="tab" aria-controls="id-tab-login" aria-selected="true">
                          Login
                        </a>
                      </li>
                      <li class="nav-item mx-2">
                        <a class="nav-link px-2" data-toggle="tab" href="#id-tab-signup" role="tab" aria-controls="id-tab-signup" aria-selected="false">
                          Signup
                        </a>
                      </li>
                    </ul>


                    <div class="tab-content tab-sliding border-0 p-0" data-swipe="right">

                      <div class="tab-pane active show mh-100 px-3 px-lg-0 pb-3" id="id-tab-login">

                        


                        <!-- show this in desktop -->
                        <div class="d-none d-lg-block col-md-6 offset-md-3 mt-lg-4 px-0">
                          <div class="flash-message">
                            @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                                @if(Session::has('alert-' . $msg))
                                    <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} 
                                      {{-- <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> --}}
                                    </p>
                                @endif
                            @endforeach
                          </div>

                    <?php 
                        $exception= Session::get('exception');
                        if (isset($exception)) {
                          echo "<div class=\"alert alert-danger\" role=\"alert\">";
                          echo $exception;
                          echo "</div>";
                          Session::put('exception');
                        }
          
                        $message= Session::get('message');
                        if (isset($message)) {
                          echo "<div class=\"alert alert-success\" role=\"alert\">";
                          echo $message;
                          echo "</div>";
                          Session::put('message');
                        }      
                    ?>
                    
                          <h4 class="text-dark-tp4 border-b-1 brc-secondary-l2 pb-1 text-130">
                            {{-- <i class="fa fa-coffee text-orange-m1 mr-1"></i> --}}
                            Login or Create a Free Account 
                          </h4>
                        </div>

                        <!-- show this in mobile device -->
                        <div class="d-lg-none text-secondary-m1 my-4 text-center">
                          <a class="mt-5 mb-2" href="">
                            <img src="{{ URL::asset('storage/app/public/'.$settings->logo_header.'') }}" height="80px" alt="">
                          </a>    

                        


                          {{-- <h1 class="text-170">
                            <span class="text-blue-d1">
                               {{ENV('APP_NAME')}} <span class="text-80 text-dark-tp3">Application</span>
                            </span>
                          </h1> --}}

                          Welcome back
                        </div>

                        


                        <form action="access-user" method="post" autocomplete="off" class="form-row mt-4">
                          @csrf                         

                          <div class="form-group col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3">

                          <span style="color:red">@error('name'){{$message}}@enderror</span>
                          <span style="color:red">@error('email'){{$message}}@enderror</span>
                          <span style="color:red">@error('password'){{$message}}@enderror</span>

                          <br>
                          <label class="floating-label text-grey-l1" for="id-login-username">
                            User email
                          </label>
                            <div class="d-flex align-items-center input-floating-label1 text-blue brc-blue-m2">
                              
                               <input type="email" name="email" class="form-control form-control-lg pr-4 shadow-none" id="id-login-username" />
                              <i class="fa fa-user text-grey-m2 ml-n4"></i>
                              
                            </div>
                          </div>


                          <div class="form-group col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-2 mt-md-1">
                            <label class="floating-label text-grey-l1" for="id-login-password">
                              Password
                            </label>
                            <div class="d-flex align-items-center input-floating-label1 text-blue brc-blue-m2">
                             <input type="password" name="password" class="form-control form-control-lg pr-4 shadow-none" id="id-login-password" />
                              <i class="fa fa-key text-grey-m2 ml-n4"></i>
                            </div>
                          </div>


                          <div class="col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 text-right text-md-right mt-n2 mb-2">
                            <a href="#" class="text-primary-m1 text-95" data-toggle="tab" data-target="#id-tab-forgot">
                              Forgot Password?
                            </a>
                          </div>


                          <div class="form-group col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                            <label class="d-inline-block mt-3 mb-0 text-dark-l1">
                              <input type="checkbox" class="mr-1" id="id-remember-me" />
                              Remember me
                            </label>

                            <button type="submit" class="btn btn-primary btn-block px-4 btn-bold mt-2 mb-4">
                              Sign In
                            </button>
                          </div>
                        </form>


                        <div class="form-row">
                          <div class="col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 d-flex flex-column align-items-center justify-content-center">

                            <hr class="brc-default-l2 mt-0 mb-2 w-100" />

                            <div class="p-0 px-md-2 text-dark-tp3 my-3">
                              Not a member?
                              <a class="text-success-m1 text-600 mx-1" data-toggle="tab" data-target="#id-tab-signup" href="#">
                                Signup now
                              </a>
                            </div>

                            {{-- <hr class="brc-default-l2 w-100 mb-2" />
                            <div class="mt-n4 bgc-white-tp2 px-3 py-1 text-secondary-d3 text-90">Or Get Started Using</div>

                            <div class="my-2">
                              <button type="button" class="btn btn-bgc-white btn-lighter-primary btn-h-primary btn-a-primary border-2 radius-round btn-lg mx-1">
                                <i class="fab fa-facebook-f text-110"></i>
                              </button>

                              <button type="button" class="btn btn-bgc-white btn-lighter-info btn-h-info btn-a-info border-2 radius-round btn-lg px-25 mx-1">
                                <i class="fab fa-twitter text-110"></i>
                              </button>

                              <button type="button" class="btn btn-bgc-white btn-lighter-red btn-h-red btn-a-red border-2 radius-round btn-lg px-25 mx-1">
                                <i class="fab fa-google text-110"></i>
                              </button>
                            </div> --}}

                          </div>
                        </div>
                        <div class="footer_contact text-center">
                          Questions? <a href="/contact">Contact Us</a>
                        </div>
                      </div>


                      <div class="tab-pane mh-100 px-3 px-lg-0 pb-3" id="id-tab-signup" data-swipe-prev="#id-tab-login">
                        <div class="position-tl ml-3 mt-3 mt-lg-0">
                          {{-- <a class="mt-5 mb-2" href="">
                            <img src="{{ URL::asset('storage/app/public/'.$settings->logo_header.'') }}" height="80px" alt="">
                          </a>     --}}
                        </div>

                        <!-- show this in desktop -->
                        <div class="d-none d-lg-block col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-lg-4 px-0">
                          <h4 class="text-dark-tp4 border-b-1 brc-grey-l1 pb-1 text-130">
                            <i class="fa fa-user text-purple mr-1"></i>
                            Create an Account
                          </h4>

                          <div class="flash-message">
                              <div id="message"></div>
                          </div>


                        </div>

                        <!-- show this in mobile device -->
                        <div class="d-lg-none text-secondary-m1 my-4 text-center">
                          
                          <h1 class="text-170">
                            <span class="text-blue-d1">{{ENV('APP_NAME')}}, Inc <span class="text-80 text-dark-tp4">Application</span></span>
                          </h1>

                          Create an Account
                        </div>

                        {{-- @if($errors->any())
                          @foreach ($errors->all() as $err)
                              <li>{{$err}}</li>
                          @endforeach
                        @endif --}}

                        <form method="post" autocomplete="off" class="form-row mt-4">                          
                          @csrf
                         
                          <div class="form-group col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-1">
                              <div class="d-flex align-items-center input-floating-label text-success brc-success-m2">
                                <input type="text" class="form-control form-control-lg pr-4 shadow-none" id="name" required name="name" />
                                <i class="fa fa-user text-grey-m2 ml-n4"></i>
                                <label class="floating-label text-grey-l1 text-100 ml-n3" for="id-signup-username">
                                  Your name
                                </label>                                 
                              </div>
                              <span style="color:red">@error('name'){{$message}}@enderror</span>
                            </div>

                            
                            <div class="form-group col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                              <div class="d-flex align-items-center input-floating-label text-success brc-success-m2">
                                <input type="email" required name="email" class="form-control form-control-lg pr-4 shadow-none" id="email" />
                                <i class="fa fa-envelope text-grey-m2 ml-n4"></i>
                                <label class="floating-label text-grey-l1 text-100 ml-n3" for="id-signup-email">
                                  Email address
                                </label>                              
                              </div>                            
                              <span style="color:red">@error('email'){{$message}}@enderror</span>
                            </div>


                         

                          <div class="form-group col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-1">
                            <div class="d-flex align-items-center input-floating-label text-success brc-success-m2">
                              <input type="password" required name="password" class="form-control form-control-lg pr-4 shadow-none" id="password" />
                              <i class="fa fa-key text-grey-m2 ml-n4"></i>
                              <label class="floating-label text-grey-l1 text-100 ml-n3" for="id-signup-password">
                                Password
                              </label>                             
                            </div>
                           <span><i>The password must be at least 8 characters inclusing a sign. e.g. @ ! # *</i> </span>
                            <span style="color:red">@error('password'){{$message}}@enderror</span>
                          </div>

                          <div class="form-group col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-2">
                            <label class="d-inline-block mt-3 mb-0 text-secondary-d2">
                              <input type="checkbox" required class="mr-1" id="idAgree" />
                              <span class="text-dark-m3">I have read and agree to <a href="{{URL::to('/page/legal')}}" target="_blank" class="text-blue-d2">terms &amp; conditions</a> </span>
                            </label> 
                             
                           
                            <button type="submit" id="signupBtn" class="btn btn-success btn-block px-4 btn-bold mt-2 mb-3">
                              Sign Up
                            </button>
                          </div>
                        </form>


                        <div class="form-row w-100">
                          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 d-flex flex-column align-items-center justify-content-center">

                            <hr class="brc-default-l2 mt-0 mb-2 w-100" />

                            <div class="p-0 px-md-2 text-dark-tp4 my-3">
                              Already a member?
                              <a class="text-blue-d1 text-600 mx-1" data-toggle="tab" data-target="#id-tab-login" href="#">
                                Login here
                              </a>
                            </div>

                            {{-- <hr class="brc-default-l2 w-100 mb-2" />
                            <div class="mt-n4 bgc-white-tp2 px-3 py-1 text-secondary-d3 text-90">Or Register Using</div>

                            <div class="mt-2 mb-3">
                              <button type="button" class="btn btn-primary border-2 radius-round btn-lg mx-1">
                                <i class="fab fa-facebook-f text-110"></i>
                              </button>

                              <button type="button" class="btn btn-blue border-2 radius-round btn-lg px-25 mx-1">
                                <i class="fab fa-twitter text-110"></i>
                              </button>

                              <button type="button" class="btn btn-danger border-2 radius-round btn-lg px-25 mx-1">
                                <i class="fab fa-google text-110"></i>
                              </button>
                            </div> --}}

                          </div>
                        </div>
                      </div>


                      <div class="tab-pane mh-100 px-3 px-lg-0 pb-3" id="id-tab-forgot" data-swipe-prev="#id-tab-login">
                        <div class="position-tl ml-3 mt-2">
                          <a href="#" class="btn btn-light-default btn-h-light-default btn-a-light-default btn-bgc-tp" data-toggle="tab" data-target="#id-tab-login">
                            <i class="fa fa-arrow-left"></i>
                          </a>
                        </div>


                        <div class="col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-5 px-0">
                          <h4 class="pt-4 pt-md-0 text-dark-tp4 border-b-1 brc-grey-l2 pb-1 text-130">
                            <i class="fa fa-key text-brown-m1 mr-1"></i>
                            Recover Password
                          </h4>
                        </div>


                        <form action="reset-password" method="post" autocomplete="off" class="form-row mt-4">
                          @csrf
                          <div class="form-group col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3">
                            <label class="text-secondary-d3 mb-3">
                              Enter your email address and we'll send you the instructions:
                            </label>
                            <div class="d-flex align-items-center">
                              <input type="email" name="email" class="form-control form-control-lg pr-4 shadow-none" id="id-recover-email" placeholder="Email" />
                              <i class="fa fa-envelope text-grey-m2 ml-n4"></i>
                            </div>
                          </div>

                          <div class="form-group col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 mt-1">
                            <button type="submit" class="btn btn-orange btn-block px-4 btn-bold mt-2 mb-4">
                              Continue
                            </button>
                          </div>
                        </form>


                        <div class="form-row w-100">
                          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-6 offset-lg-3 d-flex flex-column align-items-center justify-content-center">

                            <hr class="brc-default-l2 mt-0 mb-2 w-100" />

                            <div class="p-0 px-md-2 text-dark-tp4 my-3">
                              <a class="text-blue-d1 text-600 btn-text-slide-x" data-toggle="tab" data-target="#id-tab-login" href="#">
                                <i class="btn-text-2 fa fa-arrow-left text-110 align-text-bottom mr-2"></i>Back to Login
                              </a>
                            </div>

                          </div>
                        </div>
                      </div>

                    </div><!-- .tab-content -->
                  </div>

                </div><!-- /.row -->

              </div><!-- /.col -->
            </div><!-- /.row -->

            <div class="d-lg-none my-3 text-white-tp1 text-center">
              <i class="fa fa-leaf text-success-l3 mr-1 text-110"></i> {{env('APP_NAME')}} &copy; {{date("Y")}}
            </div>
          </div>
        </div>

      </div>

    </div>

    <!-- include common vendor scripts used in demo pages -->
    <script src="{{asset('assets/node_modules/jquery/dist/jquery.js')}}"></script>
    <script src="{{asset('assets/node_modules/popper.js/dist/umd/popper.js')}}"></script>
    <script src="{{asset('assets/node_modules/bootstrap/dist/js/bootstrap.js')}}"></script>

    <!-- include ace.js -->
    <script src="{{asset('assets/dist/js/ace.js')}}"></script>

    <!-- demo.js is only for Ace's demo and you shouldn't use it -->
    <script src="{{asset('assets/app/browser/demo.js')}}"></script>

    <!-- "Dashboard" page script to enable its demo functionality -->
    <script src="{{asset('assets/views/pages/page-login/@page-script.js')}}"></script>


<script>    
      $( document ).ready(function() {
          // signup start
          $('#signupBtn').click(function (event){  
              event.preventDefault();            
              var name = $('#name').val();
              var email=$('#email').val();              
              var password=$('#password').val();   
              console.log('clicked');
                              
              if($('#idAgree').is(':checked')){      
                        
                    $.ajax({
                    url:"create_user",
                    data: {
                        _token: '{{csrf_token()}}',
                        name: name, email: email, password:password,
                    },
                    type: 'POST',
                    success: function(response){     
                          
                        console.log(response);  

                        if(response.success==true){  
                          var string = '<p class="alert alert-success">'+response.data+'</p>';
                          $('#message').html(string);
                        }
                        else{
                          var string = '<p class="alert alert-danger">'+response.data+'</p>';
                          $('#message').html(string);  
                        } 
                      
                    }
                    });

                }else{
                  var string = '<p class="alert alert-danger">Please agree with terms and conditions.</p>';
                    $('#message').html(string);  
                } 
  
            });
      // coupon end
  });
</script>
 
  </body>

</html>