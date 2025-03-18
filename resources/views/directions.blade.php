@php $posts = DB::table('posts')->where('page', 'Directions')->where('active', 'on')->get();@endphp
@extends('layouts.master')
@section('main_content')

<style>
 #hero-4-txt {
	background-image: url('{{ URL::asset('storage/app/public/'.$posts[0]->image.'') }}')!important;	  
} 
.scroll{
  scroll-margin-top: 150px;
}
.bg-scroll {
  scroll-margin-top: 250px;
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

						<h6>{{$posts[0]->sub_title}}</h6>

						<h3 class="h3-lg wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible;animation-delay: 0.5s; animation-name: fadeInUp;">
							{{$posts[0]->title}}
						</h3>
						
            @include('_banner_menu')

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

<section id="blog-1" class="wide-60 blog-section division" style="margin-top: -20px;">				
    <div class="container">
        <!-- SECTION TITLE -->	

        {{-- <div class="row">	
            <div class="col-lg-10 offset-lg-1 section-title">	

                <!-- Title 	-->	
                <h3 class="h3-md">We Offer a Variety of Yoga Classes</h3>	

                <!-- Text -->
                <p class="p-md">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero tempus, 
                   tempor posuere ligula varius ullam libero
                </p>
                    
            </div> 
        </div>	 --}}

         <!-- BLOG POSTS HOLDER -->
         <div class="row" id="Directions">

          @include('_message')



             <div class="col-md-6 col-lg-6">
                 <div class="location_area mt-50">
                    <h2>{{$posts[1]->title}}</h2>
                    <p class="fz40">{!!$posts[1]->description!!}
                    </p>
                
                </div>
             </div>	
         
             <div class="col-md-6 col-lg-6">
                @include('_contact_form2')
             </div>	
         
             
        </div>	<!-- END BLOG POSTS HOLDER -->

        <div class="mt-50"></div>


        <div class="row mt-30">
          <div class="col-md-6">
            {!!$posts[2]->description!!}
          </div>
            
          <div class="col-md-6">
            <h2 class=""> {{$posts[3]->title}}</h2>
            <p>{!!$posts[2]->short_description!!}</p>
          </div>     
          <br>          
        </div>

        <div class="row mt-50 scroll" id="Bottom">
          <div class="col-md-6">
            <img src="{{ URL::asset('storage/app/public/'.$posts[2]->image.'') }}" width="100%">
          </div> 
          
          <div class="col-md-6  ">
            <h2 class=""> {{$posts[3]->title}}</h2>
                {!!$posts[3]->description!!}
                <img src="{{ URL::asset('storage/app/public/'.$posts[3]->image.'') }}" width="350px">
                <p>{{$posts[3]->short_description}}</p>
          </div>
        </div>


    </div>	  
</section>

<style>
  form.newsletter-form1 {
    margin-bottom: 25px;
}
</style>
 
@endsection