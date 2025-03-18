
@extends('layouts.master')
@section('main_content')
<style>
#hero-4-txt {
	background-image: url('{{asset('frontend/images/corporate.jpg')}}')!important;
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
							Yoga for All 
						</h3>
						
						<div class="slider_menu_area">
							<a href="" class="slider_menu">Schedule Home </a>
							<a href="" class="slider_menu">Classes</a>
							<a href="" class="slider_menu">Corporate</a>
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

		
 
@endsection