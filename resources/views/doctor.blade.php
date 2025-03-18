@extends('layouts.master')
@section('main_content')

        <!-- main-area -->
        <main>
            <!-- breadcrumb-area -->
            <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(frontend/img/maa-banner.png)">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                            <div class="breadcrumb-wrap text-center">
                                <div class="breadcrumb-title mb-30">
                                    <h2>Our Doctors</h2>                                    
                                </div>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Doctors</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
            <section class="dr_sec">
                <div class="container">
                  
                    <div class="row">
                        {{-- <div class="col-md-12">
                            <div class="dr_title" >
                                <h2>বিশেষজ্ঞ ডাক্তার বৃন্দ</h2>
                            </div>
                        </div> --}}
                        
                    </div>
                    <div class="row">
                        @foreach ($doctors as $item)
                            
                        <div class="col-md-3">
                            <div class="team_member1">
                                <div class="team_img">
                                    <img src="{{ URL::asset('storage/app/public/'.$item->image.'') }}" alt="{{$item->name}}">
                                </div>
                                <div class="team_content">
                                    <h3>{{$item->name}}</h3>
                                </div>
                                <h4>{{$item->designation}}</h4>
                                <p>{{$item->degree}}</p>
                                
                                <h5><span>Visit:</span> {!! $item->short_description !!}</h5>
                                <div class="app_pr_area">
                                    <div class="app">
                                        <a href="/appointment/{{$item->id}}">Appontment</a>
                                    </div>
                                    <div class="pr">
                                        <a href="doctor-details/{{$item->id}}" target="_blank">Profile</a>
                                        {{-- <a class="dropdown-item" href="/edit-team-member/{{$item->id}}" target="_blank">edit</a> --}}
                                        {{-- <a  href="/edit-team-member/{{$item->id}}" target="_blank">edit</a> --}}
                                    </div>
                                </div>                               
                            </div>
                        </div>
                        @endforeach
                    </div>                  
                </div>              
            </section>


            
            {{-- <section class="dr_sec">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="team_member1">
                                <div class="team_img">
                                    <img src="{{asset('frontend/img/dr-ma-bari.jpg')}}" alt="">
                                </div>
                                <div class="team_content">
                                    <h3>{{$doctors->name}}</h3>
                                </div>
                                <p>surgary</p>
                                <h5><span>Visit:</span> Mon-Sat (8.30 am to 5.30 pm)</h5>
                                <div class="app_pr_area">
                                    <div class="app">
                                        <a href="">Appontment</a>
                                    </div>
                                    <div class="pr">
                                        <a href="">Profile</a>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="team_member1">
                                <div class="team_img">
                                    <img src="{{asset('frontend/img/dr-ma-bari.jpg')}}" alt="">
                                </div>
                                <div class="team_content">
                                    <h3>Dr. Md. Sajjad Hossain</h3>
                                </div>
                                <p>surgary</p>
                                <h5><span>Visit:</span> Mon-Sat (8.30 am to 5.30 pm)</h5>
                                <div class="app_pr_area">
                                    <div class="app">
                                        <a href="">Appontment</a>
                                    </div>
                                    <div class="pr">
                                        <a href="">Profile</a>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="team_member1">
                                <div class="team_img">
                                    <img src="{{asset('frontend/img/dr-ma-bari.jpg')}}" alt="">
                                </div>
                                <div class="team_content">
                                    <h3>Dr. Md. Sajjad Hossain</h3>
                                </div>
                                <p>surgary</p>
                                <h5><span>Visit:</span> Mon-Sat (8.30 am to 5.30 pm)</h5>
                                <div class="app_pr_area">
                                    <div class="app">
                                        <a href="">Appontment</a>
                                    </div>
                                    <div class="pr">
                                        <a href="">Profile</a>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="team_member1">
                                <div class="team_img">
                                    <img src="{{asset('frontend/img/dr-ma-bari.jpg')}}" alt="">
                                </div>
                                <div class="team_content">
                                    <h3>Dr. Md. Sajjad Hossain</h3>
                                </div>
                                <p>surgary</p>
                                <h5><span>Visit:</span> Mon-Sat (8.30 am to 5.30 pm)</h5>
                                <div class="app_pr_area">
                                    <div class="app">
                                        <a href="">Appontment</a>
                                    </div>
                                    <div class="pr">
                                        <a href="">Profile</a>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="team_member1">
                                <div class="team_img">
                                    <img src="{{asset('frontend/img/dr-ma-bari.jpg')}}" alt="">
                                </div>
                                <div class="team_content">
                                    <h3>Dr. Md. Sajjad Hossain</h3>
                                </div>
                                <p>surgary</p>
                                <h5><span>Visit:</span> Mon-Sat (8.30 am to 5.30 pm)</h5>
                                <div class="app_pr_area">
                                    <div class="app">
                                        <a href="">Appontment</a>
                                    </div>
                                    <div class="pr">
                                        <a href="">Profile</a>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="team_member1">
                                <div class="team_img">
                                    <img src="{{asset('frontend/img/dr-ma-bari.jpg')}}" alt="">
                                </div>
                                <div class="team_content">
                                    <h3>Dr. Md. Sajjad Hossain</h3>
                                </div>
                                <p>surgary</p>
                                <h5><span>Visit:</span> Mon-Sat (8.30 am to 5.30 pm)</h5>
                                <div class="app_pr_area">
                                    <div class="app">
                                        <a href="">Appontment</a>
                                    </div>
                                    <div class="pr">
                                        <a href="">Profile</a>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="team_member1">
                                <div class="team_img">
                                    <img src="{{asset('frontend/img/dr-ma-bari.jpg')}}" alt="">
                                </div>
                                <div class="team_content">
                                    <h3>Dr. Md. Sajjad Hossain</h3>
                                </div>
                                <p>surgary</p>
                                <h5><span>Visit:</span> Mon-Sat (8.30 am to 5.30 pm)</h5>
                                <div class="app_pr_area">
                                    <div class="app">
                                        <a href="">Appontment</a>
                                    </div>
                                    <div class="pr">
                                        <a href="">Profile</a>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="team_member1">
                                <div class="team_img">
                                    <img src="{{asset('frontend/img/dr-ma-bari.jpg')}}" alt="">
                                </div>
                                <div class="team_content">
                                    <h3>Dr. Md. Sajjad Hossain</h3>
                                </div>
                                <p>surgary</p>
                                <h5><span>Visit:</span> Mon-Sat (8.30 am to 5.30 pm)</h5>
                                <div class="app_pr_area">
                                    <div class="app">
                                        <a href="">Appontment</a>
                                    </div>
                                    <div class="pr">
                                        <a href="">Profile</a>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                    </div>
                </div>
                
            </section> --}}
			<!-- team-area -->
            {{-- <section id="team d-none" class="team-area pt-100 pb-40">             
                <div class="container">                 
                    <div class="row">
                       <div class="col-xl-4">
                            <div class="single-team mb-30" >
                                <div class="team-thumb">
                                    <div class="brd">
                                         <img src="{{asset('frontend/img/maa50.png')}}" alt="img">
                                    </div>
                                    
                                    <div class="dropdown">
                                      <a class="xbtn"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        +
                                      </a>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <div class="team-social mt-15">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                            <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                        </ul>       
                                    </div>
                                      </div>
                                    </div>
                                    
                                    
                                </div>
                                <!-- <div class="team-info">
                                    <h4>প্রফেসর ডাঃ এস এ এম আব্দুস সবুর</h4>
                                    <span>MBBS(Dhaka), MRIT(Japan)</span>
                                
                                </div> -->
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="single-team mb-30" >
                                <div class="team-thumb">
                                    <div class="brd">
                                        <img src="{{asset('frontend/img/maa52.png')}}" alt="img">
                                    </div>
                                     <div class="dropdown">
                                      <a class="xbtn"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        +
                                      </a>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <div class="team-social mt-15">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                            <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                        </ul>       
                                    </div>
                                      </div>
                                    </div>
                                </div>
                                <!-- <div class="team-info">
                                    <h4>ডাঃ ইফতেখার মাহমুদ
                                    </h4>
                                    <span> MBBS, BCS(Heath)</span>                                   
                                </div> -->
                            </div>
                        </div>
                       <div class="col-xl-4">
                            <div class="single-team mb-30" >
                                <div class="team-thumb">
                                    <div class="brd">
                                        <img src="{{asset('frontend/img/maa53.png')}}" alt="img">
                                    </div>
                                    <div class="dropdown">
                                      <a class="xbtn"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        +
                                      </a>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <div class="team-social mt-15">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                            <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                        </ul>       
                                    </div>
                                      </div>
                                    </div>
                                </div>
                                <!-- <div class="team-info">
                                    <h4>ডাঃ মাহমুদা খাতুন রানী
                                    </h4>
                                    <span>MBBS (Dhaka), PGT(Gynae & Obs) </span>
                                </div> -->
                            </div>
                        </div>                        
                       <div class="col-xl-4">
                            <div class="single-team mb-30" >
                                <div class="team-thumb">
                                    <div class="brd">
                                         <img src="{{asset('frontend/img/maa54.png')}}" alt="img">
                                    </div>
                                    
                                    <div class="dropdown">
                                      <a class="xbtn"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        +
                                      </a>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <div class="team-social mt-15">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                            <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                        </ul>       
                                    </div>
                                      </div>
                                    </div>
                                    
                                    
                                </div>
                                <!-- <div class="team-info">
                                    <h4>প্রফেসর ডাঃ এস এ এম আব্দুস সবুর</h4>
                                    <span>MBBS(Dhaka), MRIT(Japan)</span>
                                
                                </div> -->
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="single-team mb-30" >
                                <div class="team-thumb">
                                    <div class="brd">
                                        <img src="{{asset('frontend/img/maa55.png')}}" alt="img">
                                    </div>
                                     <div class="dropdown">
                                      <a class="xbtn"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        +
                                      </a>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <div class="team-social mt-15">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                            <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                        </ul>       
                                    </div>
                                      </div>
                                    </div>
                                </div>
                                <!-- <div class="team-info">
                                    <h4>ডাঃ ইফতেখার মাহমুদ
                                    </h4>
                                    <span> MBBS, BCS(Heath)</span>                                   
                                </div> -->
                            </div>
                        </div>
                       <div class="col-xl-4">
                            <div class="single-team mb-30" >
                                <div class="team-thumb">
                                    <div class="brd">
                                        <img src="{{asset('frontend/img/maa56.png')}}" alt="img">
                                    </div>
                                    <div class="dropdown">
                                      <a class="xbtn"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        +
                                      </a>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <div class="team-social mt-15">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                            <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                        </ul>       
                                    </div>
                                      </div>
                                    </div>
                                </div>
                                <!-- <div class="team-info">
                                    <h4>ডাঃ মাহমুদা খাতুন রানী
                                    </h4>
                                    <span>MBBS (Dhaka), PGT(Gynae & Obs) </span>
                                </div> -->
                            </div>
                        </div>                        
                       <div class="col-xl-4">
                            <div class="single-team mb-30" >
                                <div class="team-thumb">
                                    <div class="brd">
                                        <img src="{{asset('frontend/img/maa57.png')}}" alt="img">
                                    </div>
                                    <div class="dropdown">
                                      <a class="xbtn"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        +
                                      </a>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <div class="team-social mt-15">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                            <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                        </ul>       
                                    </div>
                                      </div>
                                    </div>
                                </div>
                                <!-- <div class="team-info">
                                    <h4>ডাঃ মাহমুদা খাতুন রানী
                                    </h4>
                                    <span>MBBS (Dhaka), PGT(Gynae & Obs) </span>
                                </div> -->
                            </div>
                        </div>                        
                       <div class="col-xl-4">
                            <div class="single-team mb-30" >
                                <div class="team-thumb">
                                    <div class="brd">
                                        <img src="{{asset('frontend/img/maa58.png')}}" alt="img">
                                    </div>
                                    <div class="dropdown">
                                      <a class="xbtn"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        +
                                      </a>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <div class="team-social mt-15">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                            <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                        </ul>       
                                    </div>
                                      </div>
                                    </div>
                                </div>
                                <!-- <div class="team-info">
                                    <h4>ডাঃ মাহমুদা খাতুন রানী
                                    </h4>
                                    <span>MBBS (Dhaka), PGT(Gynae & Obs) </span>
                                </div> -->
                            </div>
                        </div>                        
                       <div class="col-xl-4">
                            <div class="single-team mb-30" >
                                <div class="team-thumb">
                                    <div class="brd">
                                        <img src="{{asset('frontend/img/maa59.png')}}" alt="img">
                                    </div>
                                    <div class="dropdown">
                                      <a class="xbtn"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        +
                                      </a>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                        <div class="team-social mt-15">
                                        <ul>
                                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li> 
                                            <li> <a href="#"><i class="fab fa-twitter"></i></a></li>   
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>   
                                        </ul>       
                                    </div>
                                      </div>
                                    </div>
                                </div>
                                <!-- <div class="team-info">
                                    <h4>ডাঃ মাহমুদা খাতুন রানী
                                    </h4>
                                    <span>MBBS (Dhaka), PGT(Gynae & Obs) </span>
                                </div> -->
                            </div>
                        </div>                        
                    </div>
                </div>
            </section> --}}
            <!-- team-area-end -->       
        </main>
        <!-- main-area-end -->

@endsection