@php $posts = DB::table('posts')->where('page', 'Instructor')->where('active', 'on')->get();@endphp

@extends('layouts.master')
@section('main_content')
<style>
#hero-4-txt {
	background-image: url('{{ URL::asset('storage/app/public/'.$posts[0]->image.'') }}')!important;
	padding-top: 230px;
    padding-bottom: 150px;
} 
/* .page-tf .card-image {
    padding-top: 244px!important;
    width: 100%;
    height: 213px;
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
} */
</style>
<section id="hero-4" class="hero-section">
	<!-- HERO-4 TEXT -->
	<div id="hero-4-txt" class="bg-scroll division">
		<div class="container white-color">						
			<div class="row">
				{{-- <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2"> --}}
				<div class="col-md-12 col-lg-12">
					<div class="hero-txt text-center">
						<!-- Title -->
                        
						<h3 class="h3-lg wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            {{$posts[0]->title}}
						</h3>
                        <br>
						{{-- @include('_banner_menu') --}}
					</div>
				</div>	
			</div>	 <!-- End row -->
		</div>	 <!-- End container --> 
	</div>	 <!-- END HERO-4 TEXT -->
</section>

<section id="blog-1" class="wide-60 blog-section division" style="margin-top: 0px;">				
    <div class="container">

		<div class="col-lg-10 offset-lg-1 section-title">	
			{!! $posts[0]->description !!}
		</div>
		
	
     <script src="https://widgets.mindbodyonline.com/javascripts/healcode.js" type="text/javascript"></script>

<healcode-widget data-type="staff_lists" data-widget-partner="object" data-widget-id="33314367b71" data-widget-version="0" ></healcode-widget>
        
    </div>	   <!-- End container -->		
</section>

		
 
@endsection