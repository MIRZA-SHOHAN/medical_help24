
@extends('layouts.master')
@section('main_content')
<style>
#hero-4-txt {
	background-image: url('{{asset('frontend/images/classes.jpg')}}')!important;
   
}
</style>
<section id="hero-4" class="hero-section">
	<!-- HERO-4 TEXT -->
	<div id="hero-4-txt" class="bg-scroll division">
		<div class="container white-color">						
			<div class="row">
				{{-- <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2"> --}}
				<div class="col-md-8 col-lg-6">
					<div class="hero-txt text-center">

						<!-- Title -->
						<h3 class="h3-lg wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
							{{-- Yoga for everyone  --}}
						</h3>
						
						<div class="slider_menu_area">
							<a href="" class="slider_menu">Yoga </a>
							<a href="" class="slider_menu">Sound Bath</a>
							<a href="" class="slider_menu">QI Gong</a>
						</div>
						

						<!-- Text -->
						{{-- <p class="p-md wow fadeInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
						   Semper lacus cursus porta, feugiat primis luctus ultrice tellus potenti neque dolor
						   in magna suscipit rhoncus ipsum 
						</p> --}}

					</div>
				</div>	
			</div>	 <!-- End row -->
		</div>	 <!-- End container --> 
	</div>	 <!-- END HERO-4 TEXT -->
</section>

<section id="blog-1" class="wide-60 blog-section division" style="margin-top: 0px;">				
    <div class="container">


        <!-- SECTION TITLE -->	
        <div class="row">	
            <div class="col-lg-10 offset-lg-1 section-title">	

                <!-- Title 	-->	
                <h3 class="h3-md">We Offer a Variety of Yoga Classes</h3>	

                <!-- Text -->
                <p class="p-md">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, 
                   tempor posuere ligula varius ullam libero
                </p>
                    
            </div>
        </div>	 <!-- END SECTION TITLE -->	


         <!-- BLOG POSTS HOLDER -->
         <div class="row">

             <div class="col-md-6 col-lg-6">
                 <div class="blog-post wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">

                   
                     <!-- BLOG POST IMAGE -->
                     <div class="blog-post-img">
                        <img class="img-fluid" src="{{asset('frontend/images/blog/post-1-img.jpg')}}" alt="blog-post-image">	
                    </div>

                      <!-- BLOG POST TITLE -->
                      <div class="blog-post-txt mt-2">
                        <!-- Post Data -->
                        <span>September 24, 2018 in Technology</span>

                        <!-- Post Title -->
                        <h5 class="h5-sm">Turpis quaerat sodales nemo ipsam egestas</h5>

                        <!-- Post Text -->
                        <p>Quaerat neque purus ipsum neque dolor primis libero tempus impedit tempor...</p>

                    </div>


                    <!-- BLOG POST LINK -->
                    <div class="blog-post-link">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="h5-xs"><a href="single-post.html" class="cbtn">Book Now</a></h5>   
                            </div>
                            <div class="col-md-6">
                                <h5 class="h5-xs"><a href="single-post.html" class="cbtn2">Learn More</a></h5>   
                            </div>
                        </div>
                    </div>
                </div>
             </div>	
             
             <div class="col-md-6 col-lg-6">
                 <div class="blog-post wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">

                   
                     <!-- BLOG POST IMAGE -->
                     <div class="blog-post-img">
                        <img class="img-fluid" src="{{asset('frontend/images/blog/post-1-img.jpg')}}" alt="blog-post-image">	
                    </div>

                      <!-- BLOG POST TITLE -->
                      <div class="blog-post-txt mt-2">
                        <!-- Post Data -->
                        <span>September 24, 2018 in Technology</span>

                        <!-- Post Title -->
                        <h5 class="h5-sm">Turpis quaerat sodales nemo ipsam egestas</h5>

                        <!-- Post Text -->
                        <p>Quaerat neque purus ipsum neque dolor primis libero tempus impedit tempor...</p>

                    </div>


                    <!-- BLOG POST LINK -->
                    <div class="blog-post-link">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="h5-xs"><a href="single-post.html" class="cbtn">Book Now</a></h5>   
                            </div>
                            <div class="col-md-6">
                                <h5 class="h5-xs"><a href="single-post.html" class="cbtn2">Learn More</a></h5>   
                            </div>
                        </div>
                    </div>
                </div>
             </div>	
             
             <div class="col-md-6 col-lg-6">
                 <div class="blog-post wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">

                   
                     <!-- BLOG POST IMAGE -->
                     <div class="blog-post-img">
                        <img class="img-fluid" src="{{asset('frontend/images/blog/post-1-img.jpg')}}" alt="blog-post-image">	
                    </div>

                      <!-- BLOG POST TITLE -->
                      <div class="blog-post-txt mt-2">
                        <!-- Post Data -->
                        <span>September 24, 2018 in Technology</span>

                        <!-- Post Title -->
                        <h5 class="h5-sm">Turpis quaerat sodales nemo ipsam egestas</h5>

                        <!-- Post Text -->
                        <p>Quaerat neque purus ipsum neque dolor primis libero tempus impedit tempor...</p>

                    </div>


                    <!-- BLOG POST LINK -->
                    <div class="blog-post-link">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="h5-xs"><a href="single-post.html" class="cbtn">Book Now</a></h5>   
                            </div>
                            <div class="col-md-6">
                                <h5 class="h5-xs"><a href="single-post.html" class="cbtn2">Learn More</a></h5>   
                            </div>
                        </div>
                    </div>
                </div>
             </div>	
             
             <div class="col-md-6 col-lg-6">
                 <div class="blog-post wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">

                   
                     <!-- BLOG POST IMAGE -->
                     <div class="blog-post-img">
                        <img class="img-fluid" src="{{asset('frontend/images/blog/post-1-img.jpg')}}" alt="blog-post-image">	
                    </div>

                      <!-- BLOG POST TITLE -->
                      <div class="blog-post-txt mt-2">
                        <!-- Post Data -->
                        <span>September 24, 2018 in Technology</span>

                        <!-- Post Title -->
                        <h5 class="h5-sm">Turpis quaerat sodales nemo ipsam egestas</h5>

                        <!-- Post Text -->
                        <p>Quaerat neque purus ipsum neque dolor primis libero tempus impedit tempor...</p>

                    </div>


                    <!-- BLOG POST LINK -->
                    <div class="blog-post-link">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="h5-xs"><a href="single-post.html" class="cbtn">Book Now</a></h5>   
                            </div>
                            <div class="col-md-6">
                                <h5 class="h5-xs"><a href="single-post.html" class="cbtn2">Learn More</a></h5>   
                            </div>
                        </div>
                    </div>
                </div>
             </div>	
             
        </div>	<!-- END BLOG POSTS HOLDER -->


    </div>	   <!-- End container -->		
</section>

		
 
@endsection