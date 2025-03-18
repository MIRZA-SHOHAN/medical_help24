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
                                    <h2>Services</h2>                                    
                                </div>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Service</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->


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
            


            <!-- department-area 1-->
            <section class="department-area cta-bg pb-70 mt-10 fix" style="background-image:url(img/an-bg/an-bg05.png); background-size: contain;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="section-title mb-50  " >
                                <span>OUR DEPARTMENTS</span>
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
                                        <p>Department of General  Surgery Maa General Hospital & Diagnostic Center offers a wide range of comprehensive and high quality surgical procedures.</p>
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





		
			
        </main>
        <!-- main-area-end -->

@endsection