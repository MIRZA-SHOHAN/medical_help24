@php $posts = DB::table('posts')->where('page', 'My Account')->where('active', 'on')->get();@endphp

@extends('layouts.master')
@section('main_content')
<style>
#hero-4-txt {
	background-image: url('{{ URL::asset('storage/app/public/'.$posts[0]->image.'') }}')!important;
	padding-top: 230px;
    padding-bottom: 150px;
} 
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
						
						{{-- <ul class="slider_menu_area">
							@if ($links = explode(',', $posts[0]->link_title))
								@foreach ($links as $item)
							<li class="slider_menu{{$loop->iteration}}"><a href="" class="action_link1">{{$item}} </a></li>	
								@endforeach
							@endif		
						</ul>	 --}}
                        <ul class="d-none slider_menu_area">
							@if ($links = explode(',', $posts[0]->link_title))
								@foreach ($links as $item)
								<li class="slider_menu{{$loop->iteration}}">
									<a href="" class="action_link1">{{$item}}</a>
								</li>	
								@endforeach
							@endif		 
						</ul>		
						

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
		<div class="col-lg-10 offset-lg-1 section-title">	
			{!! $posts[0]->description !!}
		</div>	
	


		<script src="https://widgets.mindbodyonline.com/javascripts/healcode.js" type="text/javascript"></script>
		<style>
			.
			.pricing_area h3 {
    text-transform: uppercase;
    color: #000000;
    font-family: "Montserrat, sans-serif";
    font-size: 30px;
}
.pricing_right{
	/* border: 1px solid #ededed; */
}
.pricing_btn {
    float: right;
    font-weight: 600;
    border: 1px solid grey;
    padding: 6px 25px;
    background: #ededed;

}
.pricing_content {
    float: left;
	font-weight: 500;
}
.pricing_area p {
    
    
}
		</style>



		@php
			$data = DB::table('pricings')
			->orderBy('id', 'DESC')
            ->get();
		@endphp 

		@foreach ($data as $item)	

		<div class="row" style="margin-bottom: 10px;">
			<div class="col-md-5">
				<div class="pricing_area">
					<h3>{{$item->title}}</h3>
					<p>{{$item->sub_title}}</p>
				</div>				
			</div>
			<div class="col-md-7" style="border: 1px solid #cac9c9; padding:20px; margin-bottom:20px">
				<div class="pricing_right">
					<div class="pricing_content">
						{!!$item->description!!}					
					</div> 
					<div class="pricing_btn">
						{!!$item->short_description!!}
					</div>
				</div>
			</div>
		</div>
		@endforeach
        
		

    </div>	   <!-- End container -->		
</section>

		
 
@endsection