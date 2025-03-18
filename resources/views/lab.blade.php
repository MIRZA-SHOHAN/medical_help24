@extends('layouts.master')
@section('main_content')
   
<section class="main">	 

    <!-- banner-area start -->
    <section class="lab_area">
        <div class="container">
            <div class="lab_header">
                <h1 class="animate__animated animate__fadeInUp animate__delay-250ms">{{$banner->title}}</h1>
                <div class="lab_button"><a href=""><button class="lab_btn btn">Schedule a Meeting<img src="{{asset('frontend/img/r_arrow_bold.svg')}}" alt=""></button></a>
                </div>
            </div>
        </div>	
    </section>
    <!-- banner-area end -->


    <!-- Asphalt Advances area -->
    <section class="asphalt_advances">
        <div class="container">
            <div class="asphalt_advances_area">
                <div class="advances_left_area popular_item aos-init aos-animate" data-aos="fade-left">
                    <h2>{{$section1->title}}</h2>
                    <p>{!! $section1->short_description !!}</p>
                    <div class="advance_button"><a href=""><button class="lab_btn btn">Schedule a Meeting<img src="{{asset('frontend/img/r_arrow_bold.svg')}}" alt=""></button></a>
                    </div>
                </div>
                <div class="advances_right_area popular_item aos-init aos-animate" data-aos="fade-right">
                    <img src="{{asset('frontend/img/lab2.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Asphalt Advances end -->


    <!-- scosmart_area_start -->
    <section class="ecosmart">
        <div class="container">
            <div class="ecosmart_area">
                <div class="eco_left_area popular_item aos-init aos-animate" data-aos="fade-right">
                    <img src="{{asset('frontend/img/lab3.png')}}" alt="">
                </div>
                <div class="eco_right_area popular_item aos-init aos-animate" data-aos="fade-left">
                    <h2>{{$section2->title}}</h2>
                    <p>{!! $section2->short_description !!}</p>
                    <h5>{{$section2->sub_title}}</h5>
                    <div class="advance_button"><a href=""><button class="lab_btn btn">Go-Green <img src="{{asset('frontend/img/r_arrow_bold.svg')}}" alt=""></button></a>
                </div>
            </div>
        </div>
    </section>
    <!-- scosmart_area_end -->

    <!-- service-raea-start -->
    <section class="service_section">
        <div class="container">
            <div class="service_sec_area">
                <h2>{{$section3->title}}</h2>
                <p>{!! $section3->short_description !!}</p>
            </div>
        </div>
    </section>

    <!-- service-raea-end -->



    <section class="aggregate_area popular_item aos-init aos-animate" data-aos="fade-up-left">
        <div class="container">
            <div class="aggregate">
                <div class="accordion">
                    <div class="accordion-item">
                        <div class="accordion-item-header" >
                        Aggregate
                        </div>
                        <div class="accordion-item-body">
                        <ul>
                        
                            <li>Granulometric Analysis of Aggregates and Fine Aggregates</li>
                            <li>Methylene Blue Value on Fine Aggregates and Mineral Filler</li>
                            <li>Methylene Blue Value on Fine Aggregates and Mineral Filler</li>
                            <li>Weight per Volume of Loose and Compacted Soil for Aggregates</li>
                            <li>Weight per Volume of Loose and Compacted Soil for Aggregates</li>
                            <li>Weight per Volume of Loose and Compacted Soil for Aggregates</li>
                            <li>Weight per Volume of Loose and Compacted Soil for Aggregates</li>
                            <li>Weight per Volume of Loose and Compacted Soil for Aggregates</li>
                            <li>Weight per Volume of Loose and Compacted Soil for Aggregates</li>
                            
                        </ul>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <div class="accordion-item-header">
                        Surface Asphalt Treatments and Superficial Treatments 
                        </div>
                        <div class="accordion-item-body">
                        <!-- <div class="accordion-item-body-content">
                            HTML, aka HyperText Markup Language, is the dominant markup language for creating websites and anything that can be viewed in a web browser.
                        </div> -->
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <div class="accordion-item-header">
                        Asphalt Mix
                        </div>
                        <div class="accordion-item-body">
                        <!-- <div class="accordion-item-body-content">
                            <ul style="padding-left: 1rem;">
                            <li>HTML, CSS, JavaScript</li>
                            <li>Frameworks (CSS and JavaScript frameworks)</li>
                            <li>Responsive Design</li>
                            <li>Version Control/Git</li>
                            <li>Testing/Debugging</li>
                            <li>Browser Developer Tools</li>
                            <li>Web Performance</li>
                            <li>SEO (Search Engine Optimization)</li>
                            <li>CSS Preprocessing</li>
                            <li>Command Line</li>
                            <li>CMS (Content Management System)</li>
                            </ul>
                        </div> -->
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <div class="accordion-item-header">
                        What is CORS?
                        </div>
                        <div class="accordion-item-body">
                        <!-- <div class="accordion-item-body-content">
                            HTTP, aka HyperText Transfer Protocol, is the underlying protocol used by the World Wide Web and this protocol defines how messages are formatted and transmitted, and what actions Web servers and browsers should take in response to various commands.
                        </div> -->
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <div class="accordion-item-header">
                        What is CORS?
                        </div>
                        <div class="accordion-item-body">
                        <!-- <div class="accordion-item-body-content">
                            CORS, aka Cross-Origin Resource Sharing, is a mechanism that enables many resources (e.g. images, stylesheets, scripts, fonts) on a web page to be requested from another domain outside the domain from which the resource originated.
                        </div> -->
                        </div>
                    </div>
                    
                    </div>
            </div>


        </div>
    </section>

    <!-- pilot-plant-arae-start -->
    <section class="pilot_plant popular_item aos-init aos-animate" data-aos="fade-right">
        <div class="container">
            

            <div class="pilot_plant_area">
                <div class="pilot_left_area">
                    <h2>{{$section4->title}}</h2>
                    <p>{!! $section4->short_description !!}</p>
                </div>
                <div class="pilot_right_area">
                    <img src="{{asset('frontend/img/lab4.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- pilot-plant-arae-end -->

    <!-- quality-control-area-start -->
    <section class="quality_control">
        <div class="container">
            <div class="quality_con_header">
                <div class="con_header_left">
                    <h2>Quality Control</h2>
                    <p>In our asphalt laboratory, we uphold stringent quality control measures to ensure the excellence and reliability of our asphalt products. Here's a brief overview of the key steps we take to maintain high standards:</p>
                </div>
                <div class="con_header_right">
                    <img src="{{asset('frontend/img/image 43.png')}}" alt="">
                </div>
            </div>
            <div class="quality_control_area">
                <div class="quality_item popular_item aos-init aos-animate" data-aos="fade-up-right">
                    <button>1</button>
                    <h6>Raw Material Inspection</h6>
                    <p>We verify raw material standards' compliance.</p>
                </div>
                <div class="quality_item popular_item aos-init aos-animate" data-aos="fade-down">
                    <button>2</button>
                    <h6>Calibration of Equipment</h6>
                    <p>We calibrate our equipment regularly.</p>
                </div>
                <div class="quality_item popular_item aos-init aos-animate" data-aos="fade-up-left">
                    <button>3</button>
                    <h6>Calibration of Equipment</h6>
                    <p>We calibrate our equipment regularly.</p>
                </div>
                <div class="quality_item popular_item aos-init aos-animate" data-aos="fade-up-right">
                    <button>4</button>
                    <h6>Sample Testing</h6>
                    <p>We conduct quality testing on our asphalt samples.</p>
                </div>
                <div class="quality_item popular_item aos-init aos-animate" data-aos="fade-up">
                    <button>5</button>
                    <h6>Record Keeping</h6>
                    <p>We keep detailed production and testing records.</p>
                </div>
                <div class="quality_item popular_item aos-init aos-animate" data-aos="fade-up-left">
                    <button>6</button>
                    <h6>Staff Training</h6>
                    <p>Our staff are trained in quality control.</p>
                </div>
                <div class="quality_item popular_item aos-init aos-animate" data-aos="fade-up-right">
                    <button>7</button>
                    <h6>Review and Feedback</h6>
                    <p>We assess and improve based on quality data.</p>
                </div>
                <div class="quality_item popular_item aos-init aos-animate" data-aos="fade-up">
                    <button>8</button>
                    <h6>Compliance with Standards</h6>
                    <p>We adhere to industry standards.</p>
                </div>
                <div class="quality_item popular_item aos-init aos-animate" data-aos="fade-up-left">
                    <button>9</button>
                    <h6>Continuous Improvement</h6>
                    <p>quality_con_header</p>
                </div>
            </div>
        </div>
    </section>
    <!-- quality-control-area-emd -->


    <!-- Notes-area start -->   
    <section class="rnkm_sec">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="rekm_left_area  popular_item aos-init aos-animate" data-aos="fade-right">
                        <div class="rq_title">
                            <h2>Request a Quote</h2>
                        </div>
                        <div class="rq_content">
                            <p>For a detailed and customized quote that caters specifically to the nuances of your project, just send us an email.</p><br>
                            <p>Our team is ready to provide you with a tailored solution that fits your project’s unique requirements.</p>
                        </div>
                        
                        <div class="search rq_search">
                            <input type="text" class="form-control rq_search_input" placeholder="Type your email ">
                            <a href=""><button class="btn yello_btn">Request a Quote <img src="{{asset('frontend/img/r_arrow_bold.svg')}}" alt=""></i></button></a>
                        </div>

                        <div class=" rq_search_m">					
                            <input type="text" class="form-control rq_search_input" placeholder="Type your email ">
                            <a href=""><button class="btn yello_btn yello_btn_m btn">Request a Quote <img src="{{asset('frontend/img/r_arrow_bold.svg')}}" alt=""></i></button></a>								
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="rekm_right_area  popular_item aos-init aos-animate" data-aos="fade-left">
                        <div class="nkm_title">
                            <h2>Notes to Keep in Mind</h2>
                        </div>
                        <div class="nkm_content">
                            <ul>
                                <li>Adhesion Modifiers can be included according to client's needs.</li>
                                <li>If a formulation is required and not listed, contact a Consultant for help.</li>
                                <li>Handling instructions are specified in the product's technical data sheet.</li>
                            </ul>
                        </div>
                        <div class="get_tuch_area">
                            <div class="gt_title">
                                <h2>Get in Touch</h2>
                            </div>
                            <div class="gt_title_m">
                                <h2>Contact</h2>
                            </div>
                            <div class="social_area">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="social_left">
                                            <h3>Ricardo Carreño</h3>
                                            <ul>
                                                <li><img src="{{asset('frontend/img/phn.svg')}}" alt=""><a href="tel:+57 3203760947">+57 3203760947</a></li>
                                                <li><img src="{{asset('frontend/img/email.svg')}}" alt=""><a href="mailto:ricardo@mpi-ac.com">ricardo@mpi-ac.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="social_left">
                                            <h3>Natalia Méndez</h3>
                                            <ul>
                                                <li><img src="{{asset('frontend/img/phn.svg')}}" alt=""><a href="tel:+57 3203760947">+1 3107953694</a></li>
                                                <li><img src="{{asset('frontend/img/email.svg')}}" alt=""><a href="mailto:ricardo@mpi-ac.com">natalia@mpi-ac.com</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>
<!-- Notes-area end -->  


      
@endsection