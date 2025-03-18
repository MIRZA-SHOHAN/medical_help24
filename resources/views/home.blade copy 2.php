@extends('layouts.master')
@section('main_content')

<style>
    .single-slider{
        background-image: url("frontend/img/maa_bn2.png");
        background-size: 100%;
        background-repeat: no-repeat;
        min-height: 620px !important;

    }
    @media (max-width: 767px) {
        .single-slider{
        background-image: url("frontend/img/maa_bn2m.png")!important;
        background-size: 100%;
        background-repeat: no-repeat;
        min-height: 400px !important;
    }
}
</style>

        <!-- main-area -->
        <main>
            <!-- slider-area -->
            <section id="home" class="slider-area fix p-relative">
                
                <div class="slider-active">
                    <div class="single-slider slider-bg d-flex align-items-center" style="width:100%">
                        <div class="container">
                            <div class="row align-items-center"> 
                                
                                
                            </div>
                        </div>
                    </div> 
                    <!-- <div class="single-slider slider-bg d-flex align-items-center" style="background-image:url(img/bnr2.png)">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="slider-content s-slider-content text-left">
                                            <h2 data-animation="fadeInUp" data-delay=".4s">Get Better Care For Your <span>Health</span></h2>
                                            <p data-animation="fadeInUp" data-delay=".6s">Quisque leo augue, lobortis ac tellus nec, posuere ultricies nulla. Praesent massa odio, pellentesque in consectetur quis, volutpat sit amet erat.</p>
                                            <div class="slider-btn mt-25">                                          
                                                <a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Learn More <i class="fas fa-chevron-right"></i></a>					
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">									
                                    </div>
                                </div>
                            </div>
                        </div> -->
                     
                </div>
                    
               
            </section>
            <!-- slider-area-end -->
			
            
            
			<!-- about-area -->
            <section id="about" class="about-area about-p mt-100 pb-80 p-relative" style="background-image:url(img/an-bg/an-bg03.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
                <div class="container">
                    <div class="row align-items-center">					
                         <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="s-about-img p-relative">
                                <img src="{{asset('frontend/img/about.jpg')}}" alt="img">
                                
                            </div>
                        </div>
                        <div class="d-none col-lg-6 col-md-12 col-sm-12">
                            <div class="about-content s-about-content pl-30">
                                <div class="section-title mb-20">
                                    <h5>Why Choose US?</h5>
                                    <h2>We Care Your Health and Checkup with Best Technology</h2>                                  
                                </div>
                                <!-- <p>Maa General Hospitals & Diagnostic Center is the leading contributor of private healthcare services in Kashinathpur. This has been achieved only through consistent commitment to improve the lives of people through utmost service excellence since its inception on 16th December 2016.</p> -->
                                
                                <ul>
                                    <li>
                                        <div class="icon"><i class="fas fa-chevron-right"></i></div> 
                                        <div class="text">Clinical excellence must be the priority for any healthcare service provider maa general hospital ensures the best healthcare service comprising of professional (clinical) service excellence with outstanding personal service.
                                        </div>
                                    </li>
                                    <!-- <li>
                                        <div class="icon"><i class="fas fa-chevron-right"></i></div> 
                                        <div class="text">Pellentesque placerat, nisi congue vehicula efficitur.
                                        </div> -->
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fas fa-chevron-right"></i></div> 
                                        <div class="text">Ma General Hospital Kashinathpur Bazar is located next to Bogra Road.
                                        </div>
                                    </li>
                                </ul>
                               
                               <!-- <div class="slider-btn mt-30">                                          
                                    <a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Read More <i class="fas fa-chevron-right"></i></a>					
                                </div> -->
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="about-content s-about-content pl-30">
                                <div class="section-title mb-20">
                                    <h5>সেরা ডাক্তার দের নিয়ে সেরা হাসপাতাল</h5>
                                    <h2>মা জেনারেল হাসপাতাল </h2>                                  
                                </div>
                                <!-- <p>Maa General Hospitals & Diagnostic Center is the leading contributor of private healthcare services in Kashinathpur. This has been achieved only through consistent commitment to improve the lives of people through utmost service excellence since its inception on 16th December 2016.</p> -->
                                
                                <ul>
                                    <li>
                                        <div class="icon"><i class="fas fa-chevron-right"></i></div> 
                                        <div class="text">আমরা সেরা প্রযুক্তির সাথে আপনার স্বাস্থ্য এবং চেকআপের যত্ন নেই
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fas fa-chevron-right"></i></div> 
                                        <div class="text">আমরা সাশ্রয়ী মূল্যে সেবা প্রদানের জন্য প্রতিশ্রুতিবদ্ধ, সেবার মানের সাথে কোনো আপস ছাড়াই - যাতে আপনি খুশি থাকতে পারেন।
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fas fa-chevron-right"></i></div> 
                                        <div class="text">
                                            প্রয়োজনীয় ওষুধ ও চিকিৎসা সরঞ্জাম সরবরাহ।
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fas fa-chevron-right"></i></div> 
                                        <div class="text">
                                            বিশেষজ্ঞ চিকিৎসকদের নিয়মিত রাউন্ড এবং রোগীদের চিকিৎসা পরামর্শ।
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><i class="fas fa-chevron-right"></i></div> 
                                        <div class="text">
                                            প্রয়োজনীয় ক্ষেত্রে অতিরিক্ত পরীক্ষা-নিরীক্ষা ও চিকিৎসা প্রদানের ব্যবস্থা।
                                        </div>
                                    </li>
                                </ul>
                               
                               <!-- <div class="slider-btn mt-30">                                          
                                    <a href="#" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Read More <i class="fas fa-chevron-right"></i></a>					
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="s-about-img-m p-relative">
                                <img src="{{asset('frontend/img/about.jpg')}}" alt="img">
                                
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </section>
            <!-- about-area-end -->
            <style>
                .o_service{
                    list-style: disc;
                    margin-bottom: 10px;
                    text-align: left;
                }
            </style>

			
             <!-- services-area -->
            <section id="services" class="services-area services-bg services-two pt-20 pb-55"  style="background-image:url(img/an-bg/an-bg02.png); background-size: contain; background-repeat: no-repeat;background-position: center center;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8">
                            <div class="service-section " >
                                <!-- <span> our services</span> -->
                                <h2>আমাদের সেবাসমূহ</h2>
                                <p class="mt-10       ">
                                    আমরা সাশ্রয়ী মূল্যে সেবা প্রদানের জন্য প্রতিশ্রুতিবদ্ধ, সেবার মানের সাথে কোনো আপস ছাড়াই - যাতে আপনি খুশি থাকতে পারেন।</p>
<!-- 
                                    <h2>Our Services</h2>
                                    <p>We are committed to provide affordable services, without any compromise on the quality of service – so that you are able to remain happy.</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="row sr-line">
                        <div class="col-lg-4 col-md-12">
                            <div class="s-single-services text-center" >
                                <div class="services-icon">
                                  <img src="{{asset('frontend/img/icon/sr-icon03.png')}}" alt="img">
                                </div>
                                <div class="second-services-content">
                                    <h5><a href="#">প্যাথলজি ও রেডিওলজি</a></h5>     
                                    <ul>
                                        <li>রক্ত পরীক্ষা, ইমিউনোলজি পরীক্ষা, মাইক্রোবায়োলজি পরীক্ষা, হিস্টোপ্যাথলজি ইত্যাদি বিভিন্ন ধরণের প্যাথলজি পরীক্ষা পরিচালনা করার সুবিধা। </li>
                                        <li>এক্স-রে, সিটি স্ক্যান, এমআরআই, ইসিজি, ইকো কার্ডিওগ্রাম, ইউএসজি সহ বিভিন্ন ধরণের রেডিওলজি ও ইমেজিং পরীক্ষা করার সক্ষমতা।</li>
                                    </ul> 
                                </div>
								
                            </div>
                        </div>
                       
                        <div class="col-lg-4 col-md-12">
                             <div class="s-single-services text-center" >
                                <div class="services-icon">
                                   <img src="{{asset('frontend/img/icon/sr-icon02.png')}}" alt="img">
                                </div>
                                <div class="second-services-content">
                                    <h5><a href="#">আইপিডি (ইন-প্যাশেন্ট ডিপার্টমেন্ট)</a></h5>       
                                    <ul>
                                        <li>অভিজ্ঞ নার্স ও স্টাফ দ্বারা চব্বিশ ঘন্টা রোগীদের দেখাশোনা। </li>
                                        <li> রোগীদের চিকিৎসা পরিকল্পনা অনুযায়ী নিয়মিত পর্যবেক্ষণ ও প্রয়োজনীয় ব্যবস্থা গ্রহণ।</li>
                                        <li>বিশেষজ্ঞ চিকিৎসকদের নিয়মিত রাউন্ড এবং রোগীদের চিকিৎসা পরামর্শ।</li>
                                    </ul>
                                </div>
								
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="s-single-services text-center active" >
                                <div class="services-icon">
                                    <img src="{{asset('frontend/img/icon/sr-icon01.png')}}" alt="img">
                                </div>
                                <div class="second-services-content ">
                                    <h5><a href="#">মেডিসিন ও অ্যাম্বুলেন্স সার্ভিস</a></h5>  
                                    <ul >
                                        <li>সব ধরনের ওষুধ পাইকারি ও খুচরা দামে সরবরাহ করে থাকি  এবং হাসপাতালে ভর্তিকৃত রোগীদেরকেও ওষুধ সরবরাহ করি।</li>
                                        <li>জরুরী পরিস্থিতিতে রোগীদের হাসপাতালে বা অন্য চিকিৎসা কেন্দ্রে নিয়ে যাওয়ার অ্যাম্বুলেন্স সার্ভিস।</li>
                                        <li></li>
                                    </ul>     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- services-area-end -->
			
			<!-- counter-area -->
            <div class="counter-area pt-100 pb-100" style="background-image:url(img/an-bg/an-bg04.png); background-repeat: no-repeat; background-size: contain; ">
                <div class="container">
                    <div class="row align-items-end">
                         <div class="col-lg-3 col-md-6 col-sm-12">
                           <div class="single-counter text-center" >
							 <img src="{{asset('frontend/img/icon/cunt-icon01.png')}}" alt="img">
                                <div class="counter p-relative">
                                    <span class="count">16</span><small>+</small>                                   
                                </div>
                                <p>Doctors At Work</p>                               
                            </div>
                        </div>
                      <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="single-counter text-center" >
								<img src="{{asset('frontend/img/icon/cunt-icon02.png')}}" alt="img">
                                <div class="counter p-relative">
                                    <span class="count">5000</span><small>+</small>                                   
                                </div>
                                <p>Happy Patients</p>                               
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="single-counter text-center" >
								 <img src="{{asset('frontend/img/icon/cunt-icon03.png')}}" alt="img">
                                <div class="counter p-relative">
                                   <span class="count">20</span><small>+</small>                       
                                </div>
                                <p>Medical Beds</p>                               
                            </div>
                        </div>
                         <div class="col-lg-3 col-md-6 col-sm-12">
                            <div class="single-counter text-center" >
								 <img src="{{asset('frontend/img/icon/cunt-icon04.png')}}" alt="img">
                                <div class="counter p-relative">
                                    <span class="count">10</span><small>+</small>                      
                                </div>
                                <p>Winning Awards</p>                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- counter-area-end -->	
           
            <!-- department-area 1-->
            <section class="department-area cta-bg pb-70 mt-10 fix" style="background-image:url(img/an-bg/an-bg05.png); background-size: contain;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="section-title mb-50  " >
                              
                                <h2>OUR DEPARTMENTS</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <div><img src="{{asset('frontend/img/gyne.png')}}" alt="de-icon"></div>
                                    </div>
                                    <div class="department_content">
                                        <h5> Gynaecology & Obstetrics</h5>
                                        <p>From puberty to pregnancy, childbirth, and menopause, women experience a variety of health problems that must be treated regularly.</p>
                                    </div> 
                                </li>
                                <li>
                                    <div class="icon">
                                        <div><img src="{{asset('frontend/img/pediatri1.png')}}" alt="de-icon"></div>
                                    </div> 
                                    <div class="department_content">
                                        <h5>Pediatrics</h5>
                                        <p>Pediatrics is a branch of medicine that deals with the medical care of infants, children, and adolescents.</p>
                                    </div>    
                                </li>
                                <li>
                                    <div class="icon">
                                        <div><img src="{{asset('frontend/img/surgery.png')}}" alt="de-icon"></div>
                                    </div> 
                                    <div class="department_content">
                                        <h5>General Surgery</h5>
                                        <p>Department of General Surgery Maa General Hospital offers a wide range of comprehensive and high-quality surgical procedures.</p>
                                    </div>
                                </li>                
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul>
                                <li>
                                    <div class="icon">
                                        <div><img src="{{asset('frontend/img/lab.png')}}" alt="de-icon"></div>
                                    </div> 
                                    <div class="department_content">
                                        <h5>Laboratories</h5>
                                        <p>We provide reliable diagnostic services to patients, 24 hours a day, 7 days a week with the help of state-of-the-art equipment.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <div><img src="{{asset('frontend/img/rediology1.png')}}" alt="de-icon"></div>
                                    </div> 
                                    <div class="department_content">
                                        <h5>Radiology </h5>
                                        <p>Radiology department with a range of state-of-the-art equipment supporting a high quality clinical service provided by a specialized clinical team.</p>
                                    </div>   
                                </li>
                                <li>
                                    <div class="icon">
                                        <div><img src="{{asset('frontend/img/anesthesia.png')}}" alt="de-icon"></div>
                                    </div> 
                                    <div class="department_content">
                                        <h5>Anesthesiology</h5>
                                        <p>Our anesthesiologists use the latest technology and proven techniques to maximize your comfort and safety.</p>
                                    </div>
                                </li>                
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <!-- department-area-end 1-->			
            <!-- department-area 2-->
            <section class="department-area cta-bg pb-70 mt-10 fix d-none" style="background-image:url(img/an-bg/an-bg05.png); background-size: contain;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-50  " >
                                <span>OUR DEPARTMENTS</span>
                                <h2>We Take Care Of Your Life Healthy Health</h2>
                            </div>
                            <ul>
                                        <li>
                                            <div class="icon">
                                                <div><img src="{{asset('frontend/img/icon/de-icon01.png')}}" alt="de-icon"></div></div> 
                                            <a href="departments-detail.html" class="text">
                                                <h3>Pedlatric</h3>
                                                Fusce eget condimentum lectus, sed commodo dui. Suspendisse non vehicula ant aecenas placerat finibus metus, at finibus neque.
                                            </a>
                                        </li>
                                        <li>
                                            <div class="icon">
                                                <div><img src="{{asset('frontend/img/icon/de-icon02.png')}}" alt="de-icon"></div></div> 
                                             <a href="departments-detail.html" class="text">
                                                <h3>Dental</h3>
                                                Fusce eget condimentum lectus, sed commodo dui. Suspendisse non vehicula ant aecenas placerat finibus metus, at finibus neque.
                                            </a>
                                        </li>
                                        <li>
                                             <div class="icon">
                                                <div><img src="{{asset('frontend/img/icon/de-icon03.png')}}" alt="de-icon"></div></div> 
                                            <a href="departments-detail.html" class="text">
                                                <h3>Physicians</h3>
                                                Fusce eget condimentum lectus, sed commodo dui. Suspendisse non vehicula ant aecenas placerat finibus metus, at finibus neque.
                                            </a>
                                        </li>                
                                </ul>
                                             
                        </div>
					    <div class="col-lg-6">
                            <div class="s-d-img p-relative">
                                <img src="{{asset('frontend/img/bg/de-illustration.png')}}" alt="img">
                                
                            </div>
                                             
                        </div>
                    </div>
                </div>
            </section>
            <!-- department-area-end 2-->			
			 <!-- team-area-->
            <section class="dr_sec">
                <div class="container">
                  
                    <div class="row">
                        <div class="col-md-12">
                            <div class="dr_title" >
                                <h2>বিশেষজ্ঞ ডাক্তার বৃন্দ</h2>
                            </div>
                        </div>
                        
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
                                    </div>
                                </div>                               
                            </div>
                        </div>
                        @endforeach
                    </div>                  
                </div>              
            </section>



            {{-- <section id="team d-none" class="pb-20" style="background-image:url(img/an-bg/an-bg13.png); background-size: contain;background-position: center center;background-repeat: no-repeat;">
              
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-8">
                            <div class="section-title-doctor text-center mb-70">
                  
                                <h2> বিশেষজ্ঞ ডাক্তার বৃন্দ
                                </h2>
                                
                            </div>
                        </div>
                    </div>

                    <style>
                        .team-info h4 {
                            display: none;
                        }
                        .dropdown {
                            display: none;
                        }
                    </style>
                    <div class="row team-active">  
                        <div class="col-xl-3">
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
                                <div class="team-info">
                                    <h4>প্রফেসর ডাঃ এস এ এম আব্দুস সবুর</h4>
                                    <span>MBBS(Dhaka), MRIT(Japan)</span>
                                
                                </div>
                            </div>
                        </div>   
                        <div class="col-xl-3">
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
                                <div class="team-info">
                                    <h4>ডাঃ ইফতেখার মাহমুদ
                                    </h4>
                                    <span> MBBS, BCS(Heath)</span>
                                    
                                </div>
                            </div>
                        </div>              
                        <div class="col-xl-3">
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
                                <div class="team-info">
                                    <h4>ডাঃ মাহমুদা খাতুন রানী
                                    </h4>
                                    <span>MBBS (Dhaka), PGT(Gynae & Obs) </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3">
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
                                <div class="team-info">
                                    <h4>অধ্যাপক ডাঃ মোঃ মহিদুল হাসান</h4>
                                    <span>Former Principal and Head of Department Rajshahi Medical College Hospital</span>
                                
                                </div>
                            </div>
                        </div>   
                        <div class="col-xl-3">
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
                                <div class="team-info">
                                    <h4>ডাঃ মোঃ নজরুল ইসলাম খান</h4>
                                    <span> MBBS(Raj), CCD(burdem)</span>
                                    
                                </div>
                            </div>
                        </div>              
                        <div class="col-xl-3">
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
                                <div class="team-info">
                                    <h4>ডাঃ মাহমুদা খাতুন রানী
                                    </h4>
                                    <span>MBBS (Dhaka), PGT(Gynae & Obs) </span>
                                </div>
                            </div>
                        </div>

 
                        
                    </div>
                </div>
            </section> --}}
            <!-- team-area-end -->
            <!-- newslater-area -->
            <!-- <section class="newslater-area pb-50" style="background-image: url(img/an-bg/an-bg06.png);background-position: center bottom; background-repeat: no-repeat;" >
                <div class="container">
                    <div class="row align-items-end">
                        <div class="col-xl-4 col-lg-4 col-lg-4">
                            <div class="section-title mb-100">
                                <span>NEWSLETTER</span>          
                                <h2>Subscribe To Our Newsletter</h2>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <form name="ajax-form" id="contact-form4" action="#" method="post" class="contact-form newslater pb-130">
                               <div class="form-group">
                                  <input class="form-control" id="email2" name="email" type="email" placeholder="Email Address..." value="" required=""> 
                                  <button type="submit" class="btn btn-custom" id="send2">Subscribe <i class="fas fa-chevron-right"></i></button>
                               </div>
                            
                            </form>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <img src="{{asset('frontend/img/bg/news-illustration.png')}}">
                        </div>
                    </div>
                   
                </div>
            </section> -->
            <!-- newslater-aread-end -->
            <!-- testimonial-area -->
            <section id="testimonios" class="testimonial-area testimonial-p pt-50 pb-85 fix" style="background-image: url(img/an-bg/an-bg07.png);background-position: center; background-repeat: no-repeat;background-size: contain;" >
                <div class="container">
                      <div class="row justify-content-center">
                        
                        <div class="col-lg-8"> 
                     <div class="section-title-testimonial center-align mb-60 text-center">
                                <!-- <span>TESTIMONIAL</span> -->
                                <h2>আমাদের সেবা সম্পর্কে রোগীদের অভিব্যক্তি</h2>
                               <!-- <p>Fusce pharetra odio in urna laoreet laoreet. Aliquam erat volutpat. Phasellus nec ligula arcu. Aliquam eu urna pulvinar, iaculis ipsum in, porta massa.</p> -->
                            </div>
                            </div>
                            </div>
                    
                   <div class="row justify-content-center">
                        
                        <div class="col-lg-10">                           
                            <div class="testimonial-active">
                                <div class="single-testimonial">
                                    <div class="testi-img">
                                       <img src="{{asset('frontend/img/testimonial2.png')}}" alt="img"style="max-width:55%;">                                        
                                   </div>
                                   <div class="single-testimonial-bg">
                                   <div class="com-icon"><img src="{{asset('frontend/img/testimonial/qutation.png')}}" alt="img" ></div>
                                       <div class="testi-author">
                                                    <div class="ta-info">                                          
                                           <h6>এডভোকেট শামসুল হক টুকু</h6>
                                           <p>ডেপুটি স্পিকার</p>
                                           
                                       </div>
                                   </div>
                                   <p>অসুস্থতার জন্য চিকিৎসা নিতে আমার বেশিরভাগ সময় সহরের হাসপিটাল গুলোতে যেতে হয় হঠাৎ অসুস্থ হওয়ায় আমাকে দ্রুত চিকিৎসার জন্য পাশের একটি হসপিটালে(মা জেনারেল হাসপাতাল) যেতে হয় তাদের চিকিৎসার ব্যবস্থা যে এত উন্নত ছিল, আমার তা আগে জানা ছিল না। প্রত্যেকে অত্যন্ত একটিভ  এবং চিকিৎসা ব্যবস্থাও খুব ভাল। আশা করছি তারা আরো উন্নত করবে</p>
                                   </div>
                               </div>
                              
                         
                                <div class="single-testimonial">
                                    <div class="testi-img">
                                        <img src="{{asset('frontend/img/testimonial/testimonial-img.png')}}" alt="img">                                        
                                    </div>

                                    <div class="single-testimonial-bg">
                                        <div class="com-icon"><img src="{{asset('frontend/img/testimonial/qutation.png')}}" alt="img"></div>
                                        <div class="testi-author">
                                        <div class="ta-info">                                          
                                            <h6>অংকন</h6> 
                                        </div>
                                        </div>
                                            <p>১৭ বছর বয়সের অংকন,  বছরখানেক ধরে মাথা ব্যথার যন্ত্রনায় ভুগছেন। শুরুতে গুরুত্ব না দিয়ে ঔষধ খেয়ে ব্যথা নিবারণ করতো। ৮ নভেম্বর, হঠাৎ সকালে ঘুম থেকে উঠার পর প্রচন্ড মাথা ব্যথা অনুভুত হয় যা ক্রমশই অসহনীয় পর্যায়ে পৌঁছতে থাকে। নিকটস্থ একটি  ডাক্তার এর কাছে যান তিনি  তাকে পর্যবেক্ষণ করে মা জেনারেল হাসপাতাল ে যাবার পরামর্শ দেন। ৯ নভেম্বর, রাতে রোগীকে মা জেনারেল হাসপাতাল ের জরুরী বিভাগে নিয়ে আসা হয় এবং তার অবস্থা বিবেচনায় ততক্ষণাত ডাঃ মোঃ ইফতেখার মাহমুদ স্যারের তত্ত্বাবধানে থেকে চিকিৎসা নিয়ে এখন তিনি সুস্থ ।</p>
                                    </div>
                                </div>
                             
                            
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->
            

			
        </main>
        <!-- main-area-end -->

@endsection