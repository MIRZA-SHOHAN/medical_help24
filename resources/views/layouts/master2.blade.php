<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">


<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="author" content="Jthemes"/>	
		<meta name="description" content=""/>
		<meta name="keywords" content="">	
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
				
  		<!-- SITE TITLE -->
		<title>{{env('APP_NAME')}}</title>
		@php
		//dd('123');
	@endphp
	
							
		<!-- FAVICON AND TOUCH ICONS  -->
		<link rel="shortcut icon" href="{{asset('frontend/images/favicon.ico')}}" type="image/x-icon">
		<link rel="icon" href="{{asset('frontend/images/favicon.ico')}}" type="image/x-icon">
		<link rel="apple-touch-icon" sizes="152x152" href="{{asset('frontend/images/apple-touch-icon-152x152.png')}}">
		<link rel="apple-touch-icon" sizes="120x120" href="{{asset('frontend/images/apple-touch-icon-120x120.png')}}">
		<link rel="apple-touch-icon" sizes="76x76" href="{{asset('frontend/images/apple-touch-icon-76x76.png')}}">
		<link rel="apple-touch-icon" href="{{asset('frontend/images/apple-touch-icon.png')}}">

		<!-- GOOGLE FONTS -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"> 	
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" rel="stylesheet">

		<!-- BOOTSTRAP CSS -->
		<link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
				
		<!-- FONT ICONS -->
		<link href="{{asset('frontend/css/fontawesome.css')}}" rel="stylesheet">
		<link href="{{asset('frontend/css/flaticon.css')}}" rel="stylesheet">

		<!-- PLUGINS STYLESHEET -->
		<link href="{{asset('frontend/css/animate.css')}}" rel="stylesheet">
		<link href="{{asset('frontend/css/magnific-popup.css')}}" rel="stylesheet">	
		<link href="{{asset('frontend/css/owl.carousel.min.css')}}" rel="stylesheet">
		<link href="{{asset('frontend/css/owl.theme.default.min.css')}}" rel="stylesheet">
				
		<!-- TEMPLATE CSS -->
		<link href="{{asset('frontend/css/spinner.css')}}" rel="stylesheet">
		{{-- <link href="{{asset('frontend/css/greenery.css')}}" rel="stylesheet"> 	 --}}
 
		<!-- Style Switcher CSS -->		
		<link href="{{asset('frontend/css/apricot.css')}}" rel="alternate stylesheet" title="apricot-theme">  
		<link href="{{asset('frontend/css/blue.css')}}" rel="alternate stylesheet" title="blue-theme"> 
		<link href="{{asset('frontend/css/bluestone.css')}}" rel="alternate stylesheet" title="bluestone-theme"> 
		<link href="{{asset('frontend/css/coral.css')}}" rel="alternate stylesheet" title="coral-theme"> 
		<link href="{{asset('frontend/css/curacao.css')}}" rel="alternate stylesheet" title="curacao-theme"> 		
		<link href="{{asset('frontend/css/green.css')}}" rel="alternate stylesheet" title="green-theme"> 
		<link href="{{asset('frontend/css/magenta.css')}}" rel="alternate stylesheet" title="magenta-theme">
		<link href="{{asset('frontend/css/purple.css')}}" rel="alternate stylesheet" title="purple-theme"> 
		<link href="{{asset('frontend/css/violet.css')}}" rel="alternate stylesheet" title="violet-theme"> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		 	
		<!-- RESPONSIVE CSS -->
		<link href="{{asset('frontend/css/responsive.css')}}" rel="stylesheet">  
		{{-- <link href="{{asset('frontend/css/custom.css')}}" rel="stylesheet">  	 --}}
		@include('layouts.css')
		

	</head> 

	<body> 

<!-- Messenger Chat Plugin Code -->
<div id="fb-root"></div>
<script>
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "260250541402");
  chatbox.setAttribute("attribution", "biz_inbox");

  window.fbAsyncInit = function() {
	FB.init({
	  xfbml            : true,
	  version          : 'v12.0'
	});
  }; 

  (function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
	fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Your Chat Plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>



		<!-- PRELOADER SPINNER
		============================================= -->		
		{{-- <div id="loader-wrapper">
			<div id="loader">
				<div class="cssload-spinner"></div>
			</div>
		</div> --}}




		<!-- PAGE CONTENT
		============================================= -->	
		<div id="page" class="page">


			<!-- HEADER
			============================================= -->
			<header id="header" class="header">
				<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-tra hover-menu">
					<div class="container-fluid">


						<!-- LOGO IMAGE -->
						<!-- For Retina Ready displays take a image with double the amount of pixels that your image will be displayed (e.g 268 x 60 pixels) -->
				 		<a href="/" class="navbar-brand logo-black1">
							 <img src="{{asset('frontend/images/logo.png')}}" width="264" height="60" alt="header-logo">
						</a>			 		
												


				 		<!-- Responsive Menu Button -->
				 		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				   		 	<span class="navbar-bar-icon"><i class="fas fa-bars"></i></span>
				  		</button>


				  		<!-- Navigation Menu -->
				  		<div id="navbarSupportedContent" class="collapse navbar-collapse">				  			
					   		<ul class="navbar-nav ml-auto">
								<li class="nav-item nl-simple"><a class="nav-link" href="{{URL::to('/')}}">Home</a></li>		 
																
							
								{{-- <li class="nav-item dropdown">
		                            <a class="nav-link dropdown-toggle" href="{{URL::to('classes')}}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Classes
		                            </a> 
		                            <!-- Dropdown Menu -->
                           			<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                           				<li><a class="dropdown-item" href="#video-1">Sunrise Beach Yoga</a></li>
                           				<li><a class="dropdown-item" href="#content-7">Beach Flow</a></li>	                                
		                                <li><a class="dropdown-item" href="#video-2">Sound Bath</a></li>
		                                <li><a class="dropdown-item" href="#brands-2"> Sunset Flow</a></li>	
		                                <li><a class="dropdown-item" href="#brands-2">Yoga Nidra</a></li>	
		                                <li><a class="dropdown-item" href="#brands-2">Beach Power Flow ⅔</a></li>	
		                                <li><a class="dropdown-item" href="#brands-2">Beach Flow & Sound Bath</a></li>	
		                                <li><a class="dropdown-item" href="#brands-2">Signature Flow</a></li>	
		                                <li><a class="dropdown-item" href="#brands-2">QI Gong</a></li>	
										   
                            		</ul>
                        		</li>  --}}
								
								
								<li class="nav-item nl-simple"><a class="nav-link" href="{{URL::to('classes')}}">Classes </a></li>	
								<li class="nav-item nl-simple"><a class="nav-link" href="{{URL::to('/schedule')}}">Schedule </a></li>	
								<li class="nav-item nl-simple"><a class="nav-link" href="{{URL::to('/pricing')}}">Pricing </a></li>	
								{{-- <li class="nav-item nl-simple"><a class="nav-link" href="{{URL::to('/blog')}}">Directions </a></li>	 --}}
								
								<li class="nav-item dropdown">
		                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										Community
		                            </a>
		                            <!-- Dropdown Menu -->
                           			<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                           				
                           				<li><a class="dropdown-item" href="#video-1">Blog</a></li>
		                                <li><a class="dropdown-item" href="#video-2">Video</a></li>
		                              										 
                            		</ul>
                        		</li>
								<li class="nav-item nl-simple"><a class="nav-link" href="{{URL::to('/directions ')}}">Directions  </a></li>
								<li class="nav-item dropdown">
		                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
										About
		                            </a>
		                            <!-- Dropdown Menu -->
                           			<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                           				<li><a class="dropdown-item" href="{{URL::to('about-us')}}">About Us</a></li>
                           				<li><a class="dropdown-item" href="{{URL::to('')}}">Instructors</a></li>
                           				<li><a class="dropdown-item" href="#content-7">FAQ</a></li>	                                
		                                <li><a class="dropdown-item" href="#video-2">Our Partners</a></li>
		                                <li><a class="dropdown-item" href="#brands-2">Contact Us</a></li>											 
                            		</ul>
                        		</li>
								<li class="nav-item nl-simple"><a class="nav-link" href="{{URL::to('/login')}}">My Account</a></li>	

								 
					      	</ul>

					      	<!-- Header Social Icons -->	
					      	<span class="d-none navbar-text">		
								<span class="header-socials clearfix">
									<span><a href="" class="ico-instagram"><i class="fab fa-instagram"></i></a></span>
									<span><a href="" class="ico-youtube"><i class="fab fa-youtube"></i></a></span>	
									
									<span><a href="https://www.yelp.com/biz/yoga-and-meditation-by-vanessa-rezende-marina-del-rey" class="ico-linkedin">
									
									    <img src="{{asset('frontend/images/yelp.png')}}" style="height: 100%;" alt="header-logo">
									</a></span>
								</span>
						    </span>	

						    
					    </div>	<!-- End Navigation Menu -->


					</div>	  <!-- End container -->
				</nav>	   <!-- End navbar -->
			</header>	<!-- END HEADER -->



    
    @yield('main_content') 

	<footer id="footer-2" class="pt-100 footer division">
		<div class="container-fluid">


			<!-- FOOTER CONTENT -->
			<div class="row">


				<!-- FOOTER INFO -->
				<div class="col-md-8 col-lg-8 col-sm-12">

					<div class="footer-info mb-40">
						

						<nav class="footer-nav" id="nav" aria-label="footer-nav-other-areas">
							<a href="{{URL::to('contact')}}" title=""> &nbsp; &nbsp; CONTACT US</a>
							<a href="{{URL::to('corporate-discount')}}" title="">Corporate Discounts</a>
						  <a href="{{URL::to('about-us')}}" title="ABOUT Us">About Us</a>	
						</nav>

						<br>

						

						<!-- Social Icons -->
						<div class="footer-socials-links">						
							
							<ul class="social-media-links"><li class="social-media-link" "=""><a class=" -normal " title="Click here to visit our Facebook" aria-label="Click here to visit our Facebook" aria-labelledby="social-media-sr-labelFacebook" target="_blank" href="https://facebook.com/beachyogasocal"><span id="social-media-sr-labelFacebook" hidden="">Click here to visit our Facebook</span><svg class="icon icon-facebook " xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"><title>Facebook</title><path d="M21.73,0H1.27A1.27,1.27,0,0,0,0,1.27V21.73A1.27,1.27,0,0,0,1.27,23H12V14.09H9V10.62h3V8.06c0-3,1.56-4.59,4.21-4.59a24.64,24.64,0,0,1,2.68.14v3.1H17.08c-1.44,0-1.72.68-1.72,1.69v2.22h3.44l-.45,3.47h-3V23h6.37A1.27,1.27,0,0,0,23,21.73V1.27A1.27,1.27,0,0,0,21.73,0Z"></path></svg></a></li><li class="social-media-link" "=""><a class=" -normal " title="Click here to visit our Instagram" aria-label="Click here to visit our Instagram" aria-labelledby="social-media-sr-labelInstagram" target="_blank" href="https://instagram.com/beachyogasocal"><span id="social-media-sr-labelInstagram" hidden="">Click here to visit our Instagram</span><svg class="icon icon-instagram " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 503.84 503.84"><title>Instagram</title><g><path d="M256,49.47c67.27,0,75.23.26,101.8,1.47,24.56,1.12,37.9,5.22,46.78,8.67a78.05,78.05,0,0,1,29,18.84,78.05,78.05,0,0,1,18.84,29c3.45,8.88,7.55,22.22,8.67,46.78,1.21,26.56,1.47,34.53,1.47,101.8s-.26,75.23-1.47,101.8c-1.12,24.56-5.22,37.9-8.67,46.78a83.43,83.43,0,0,1-47.81,47.81c-8.88,3.45-22.22,7.55-46.78,8.67-26.56,1.21-34.53,1.47-101.8,1.47s-75.24-.26-101.8-1.47c-24.56-1.12-37.9-5.22-46.78-8.67a78.05,78.05,0,0,1-29-18.84,78.05,78.05,0,0,1-18.84-29c-3.45-8.88-7.55-22.22-8.67-46.78-1.21-26.56-1.47-34.53-1.47-101.8s.26-75.23,1.47-101.8c1.12-24.56,5.22-37.9,8.67-46.78a78.05,78.05,0,0,1,18.84-29,78.05,78.05,0,0,1,29-18.84c8.88-3.45,22.22-7.55,46.78-8.67,26.56-1.21,34.53-1.47,101.8-1.47m0-45.39c-68.42,0-77,.29-103.87,1.52S107,11.08,91,17.31A123.49,123.49,0,0,0,46.36,46.36,123.49,123.49,0,0,0,17.31,91C11.08,107,6.82,125.32,5.6,152.13S4.08,187.58,4.08,256s.29,77,1.52,103.87S11.08,405,17.31,421a123.49,123.49,0,0,0,29.06,44.62A123.49,123.49,0,0,0,91,494.7c16,6.23,34.34,10.49,61.15,11.71s35.45,1.52,103.87,1.52,77-.29,103.87-1.52S405,500.92,421,494.7A128.82,128.82,0,0,0,494.7,421c6.23-16,10.49-34.34,11.71-61.15s1.52-35.45,1.52-103.87-.29-77-1.52-103.87S500.92,107,494.7,91a123.49,123.49,0,0,0-29.06-44.62A123.49,123.49,0,0,0,421,17.31C405,11.08,386.68,6.82,359.87,5.6S324.42,4.08,256,4.08Z" transform="translate(-4.08 -4.08)"></path><path d="M256,126.64A129.36,129.36,0,1,0,385.36,256,129.36,129.36,0,0,0,256,126.64ZM256,340a84,84,0,1,1,84-84A84,84,0,0,1,256,340Z" transform="translate(-4.08 -4.08)"></path><circle cx="386.4" cy="117.44" r="30.23"></circle></g></svg></a></li><li class="social-media-link" "=""><a class=" -normal " title="Click here to visit our TripAdvisor" aria-label="Click here to visit our TripAdvisor" aria-labelledby="social-media-sr-labelTripAdvisor" target="_blank" href="https://www.tripadvisor.com/Attraction_Review-g33052-d14078089-Reviews-Beach_Yoga_SoCal-Santa_Monica_California.html"><span id="social-media-sr-labelTripAdvisor" hidden="">Click here to visit our TripAdvisor</span><svg class="icon icon-tripadvisor " width="39" height="24" viewBox="0 0 39 24" xmlns="http://www.w3.org/2000/svg"><title>TripAdvisor</title><path d="M6.734 4.916c3.66-.472 14.04-.797 11.197 14.204l3.226-.263C19.743 9.611 22.699 4.896 31.942 4.444c-15.33-8.489-24.057.324-25.208.472z" class="head"></path><circle cx="9.649" cy="13.579" r="1.624" class="left-eye"></circle><circle cx="29.222" cy="13.579" r="1.623" class="right-eye"></circle><path d="M37.083 7.881a12.581 12.581 0 0 1 1.92-3.905l-6.518-.005A23.736 23.736 0 0 0 19.466.357c-4.71-.101-9.35 1.17-13.35 3.66L0 4.02a12.65 12.65 0 0 1 1.912 3.872A9.757 9.757 0 0 0 17.39 19.768l2.079 3.113 2.098-3.139a9.765 9.765 0 0 0 15.516-11.86zm-8.151-3.937a9.734 9.734 0 0 0-9.425 9.011 9.77 9.77 0 0 0-9.536-9.05 24.137 24.137 0 0 1 9.495-1.845c3.253-.05 6.48.593 9.466 1.884zM9.775 21.46a7.796 7.796 0 1 1 7.795-7.794 7.804 7.804 0 0 1-7.795 7.794zm22.169-.442a7.8 7.8 0 0 1-10.015-4.615v-.002a7.796 7.796 0 1 1 10.015 4.617z"></path><path d="M9.655 8.756a4.824 4.824 0 1 0 4.817 4.823 4.831 4.831 0 0 0-4.817-4.823zm0 7.986a3.163 3.163 0 1 1 3.156-3.163 3.17 3.17 0 0 1-3.156 3.163zM29.222 8.756a4.824 4.824 0 1 0-.005 9.648 4.824 4.824 0 0 0 .005-9.648zm0 7.986a3.163 3.163 0 1 1-.002-6.325 3.163 3.163 0 0 1 .002 6.325z"></path></svg></a></li><li class="social-media-link" "=""><a class=" -normal " title="Click here to visit our Twitter" aria-label="Click here to visit our Twitter" aria-labelledby="social-media-sr-labelTwitter" target="_blank" href="https://twitter.com/beachyogasocal"><span id="social-media-sr-labelTwitter" hidden="">Click here to visit our Twitter</span><svg class="icon icon-twitter " xmlns="http://www.w3.org/2000/svg" width="30" height="24" viewBox="0 0 30 24" style="enable-background:new 0 0 30 24;"><title>Twitter</title><path d="M9.5,24c11.1,0,17.2-9.2,17.2-17.2c0-0.3,0-0.5,0-0.8c1.2-0.9,2.2-1.9,3-3.1c-1.1,0.5-2.3,0.8-3.5,1C27.5,3,28.5,1.9,29,0.4 c-1.2,0.7-2.5,1.2-3.8,1.5C24,0.7,22.4,0,20.7,0c-3.3,0-6.1,2.7-6.1,6.1c0,0.5,0.1,0.9,0.2,1.4c-5-0.3-9.5-2.7-12.5-6.3 C1.8,2,1.5,3,1.5,4.2c0,2.1,1.1,4,2.7,5c-1,0-1.9-0.3-2.7-0.8c0,0,0,0.1,0,0.1c0,2.9,2.1,5.4,4.9,5.9c-0.5,0.1-1,0.2-1.6,0.2 c-0.4,0-0.8,0-1.1-0.1c0.8,2.4,3,4.2,5.7,4.2c-2.1,1.6-4.7,2.6-7.5,2.6c-0.5,0-1,0-1.4-0.1C2.9,23,6.1,24,9.5,24"></path></svg></a></li><li class="social-media-link" "=""><a class=" -normal " title="Click here to visit our Yelp" aria-label="Click here to visit our Yelp" aria-labelledby="social-media-sr-labelYelp" target="_blank" href="https://www.yelp.com/biz/beach-yoga-socal-santa-monica-3"><span id="social-media-sr-labelYelp" hidden="">Click here to visit our Yelp</span><svg class="icon icon-yelp " xmlns="http://www.w3.org/2000/svg" width="20" height="26" viewBox="0 0 20 26" style="enable-background:new 0 0 20 26;"><title>Yelp</title><path d="M10.1,19.1V21c0,2.8,0,4.3-0.1,4.4c-0.1,0.3-0.4,0.5-0.7,0.6c-0.5,0.1-1.4-0.1-2.6-0.6s-2-0.9-2.4-1.3 C4.1,24,4.1,23.8,4,23.6c0-0.1,0-0.2,0.1-0.4c0-0.1,0.2-0.3,0.5-0.7s1.2-1.4,2.6-3.1c0,0,0.3-0.3,0.9-1c0.1-0.2,0.3-0.3,0.6-0.4 c0.2-0.1,0.5,0,0.7,0.1c0.2,0.1,0.4,0.2,0.5,0.4S10.1,18.9,10.1,19.1z M7.9,15.5c0,0.5-0.3,0.9-0.8,1l-1.7,0.6 c-2.7,0.9-4.1,1.3-4.2,1.3c-0.3,0-0.6-0.2-0.8-0.5c-0.1-0.2-0.2-0.6-0.2-1.1c-0.1-0.7-0.1-1.5,0-2.4c0.1-0.9,0.2-1.5,0.4-1.8 s0.5-0.5,0.8-0.5c0.1,0,1.1,0.4,2.9,1.1C5,13.5,5.6,13.7,6,13.9l1.2,0.5c0.2,0.1,0.4,0.2,0.5,0.4C7.9,15,7.9,15.2,7.9,15.5z  M19.9,19.8c-0.1,0.5-0.5,1.3-1.3,2.3c-0.8,1-1.5,1.6-2,1.8c-0.4,0.1-0.7,0.1-0.9-0.1c-0.1-0.1-1-1.5-2.7-4.2l-0.7-1.1 c-0.1-0.2-0.2-0.4-0.2-0.7s0.1-0.5,0.3-0.7c0.3-0.4,0.7-0.5,1.2-0.4c0,0,0.6,0.2,1.7,0.6c2,0.6,3.1,1,3.5,1.2s0.6,0.2,0.7,0.3 C19.8,19.1,19.9,19.4,19.9,19.8z M10.1,10.7c0,1-0.2,1.6-0.8,1.8c-0.6,0.2-1.1-0.2-1.7-1L2.2,2.7c-0.1-0.3,0-0.6,0.3-0.9 c0.4-0.4,1.4-0.8,3-1.3s2.7-0.6,3.3-0.5c0.4,0.1,0.6,0.3,0.7,0.7c0,0.2,0.1,1.6,0.3,4.4S10.1,9.8,10.1,10.7z M19.7,12.2 c0,0.4-0.1,0.7-0.4,0.9c-0.1,0.1-1.7,0.5-4.8,1.2c-0.6,0.1-1.1,0.3-1.3,0.3l0,0c-0.2,0.1-0.4,0-0.7-0.1c-0.2-0.1-0.4-0.3-0.5-0.5 c-0.3-0.5-0.3-0.9,0-1.3c0,0,0.4-0.5,1.1-1.5c1.2-1.7,1.9-2.6,2.2-3c0.2-0.3,0.4-0.5,0.5-0.6c0.3-0.2,0.6-0.2,0.9,0 c0.5,0.2,1.1,0.9,1.8,1.9C19.3,10.8,19.7,11.6,19.7,12.2L19.7,12.2z"></path></svg></a></li></ul>
							<br>
						</div>	

						
											
					</div>	
				</div>	



				<!-- FOOTER NEWSLETTER FORM -->
				<div class="col-md-4 col-lg-4 col-sm-12">
					<div class="footer-form mb-20">

						<!-- Title -->
						<h5 class="h5-xs">JOIN OUR COMMUNITY</h5>

						<!-- Newsletter Form Input -->
						<form class="newsletter-form" novalidate="true">
									
							<div class="input-group">
								<input type="email" class="form-control" placeholder="Email Address" required="" id="s-email" name="EMAIL">								
								<span class="input-group-btn">
									<button type="submit" class="btn">
										<svg class="svg-inline--fa fa-arrow-alt-circle-right fa-w-16" aria-hidden="true" data-prefix="far" data-icon="arrow-alt-circle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M504 256C504 119 393 8 256 8S8 119 8 256s111 248 248 248 248-111 248-248zm-448 0c0-110.5 89.5-200 200-200s200 89.5 200 200-89.5 200-200 200S56 366.5 56 256zm72 20v-40c0-6.6 5.4-12 12-12h116v-67c0-10.7 12.9-16 20.5-8.5l99 99c4.7 4.7 4.7 12.3 0 17l-99 99c-7.6 7.6-20.5 2.2-20.5-8.5v-67H140c-6.6 0-12-5.4-12-12z"></path></svg><!-- <i class="far fa-arrow-alt-circle-right"></i> -->
									</button>
								</span>
							</div>

							<!-- Newsletter Form Notification -->		
							<label for="s-email" class="form-notification"></label>
										
						</form>
						<a href="" class="gift_card"> <img src="https://img.icons8.com/ios/24/000000/gift-card.png"/> BUY A GIFT CARD </a>
												
					</div>
				

				</div>	<!-- END FOOTER NEWSLETTER FORM -->


			</div>	  <!-- END FOOTER CONTENT -->


			<!-- FOOTER COPYRIGHT -->
			<div class="row bottom-footer">
				<div class="col-md-12 col-sm-12">
					<div class="footer-copyright text-center">
						<p>&copy; 2021 Beach Yoga Socal. All right reserved. Designed &#38; Developed By  <span><a href="https://dinocodela.com/" title="">Dino Code LA</a></span> </p>
					</div>
				</div>
			</div>


		</div>	   <!-- End container -->										
	</footer>


		
		</div>	<!-- END PAGE CONTENT -->




		<!-- EXTERNAL SCRIPTS
		============================================= -->	
		<script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
		<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>	
		<script src="{{asset('frontend/js/fontawesome.js')}}"></script>	
		<script src="{{asset('frontend/js/modernizr.custom.js')}}"></script>
		<script src="{{asset('frontend/js/jquery.easing.js')}}"></script>
		<script src="{{asset('frontend/js/retina.js')}}"></script>	
		<script src="{{asset('frontend/js/jquery.stellar.min.js')}}"></script>	
		<script src="{{asset('frontend/js/jquery.scrollto.js')}}"></script>
		<script src="{{asset('frontend/js/jquery.appear.js')}}"></script>
		<script src="{{asset('frontend/js/jquery.vide.min.js')}}"></script>
		<script src="{{asset('frontend/js/wow.js')}}"></script>	
		<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('frontend/js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('frontend/js/contact-form.js')}}"></script>
		<script src="{{asset('frontend/js/register-form.js')}}"></script>	
		<script src="{{asset('frontend/js/quick-form.js')}}"></script>
		<script src="{{asset('frontend/js/comment-form.js')}}"></script>			
		<script src="{{asset('frontend/js/jquery.validate.min.js')}}"></script>
		<script src="{{asset('frontend/js/jquery.ajaxchimp.min.js')}}"></script>	
				
		<!-- Custom Script -->		
		<script src="{{asset('frontend/js/custom.js')}}"></script>	

		<script>
			new WOW().init();
		</script>	
					
		<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
		<!-- [if lt IE 9]>
			<script src="{{asset('frontend/js/html5shiv.js')}}" type="text/javascript"></script>
			<script src="{{asset('frontend/js/respond.min.js')}}" type="text/javascript"></script>
		<![endif] -->
									
		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->															
		<!--
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
		-->


		<script src="{{asset('frontend/js/changer.js')}}"></script>
		<script defer src="{{asset('frontend/js/styleswitch.js')}}"></script>	
		



	</body>

</html>	