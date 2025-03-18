@php $posts = DB::table('posts')->where('page', 'Class')->where('active', 'on')->get();@endphp

@extends('layouts.master')
@section('main_content')
<style>
#hero-4-txt {
	background-image: url('{{ URL::asset('storage/app/public/'.$posts[0]->image.'') }}')!important;
} 

html {
  /* scroll-behavior: smooth; */
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

						<h6 style="margin-bottom: 10px; font-size:19px; margin-left: 6px;">{{$posts[0]->sub_title}}</h6>

						<h3 class="h3-lg wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible;animation-delay: 0.5s; animation-name: fadeInUp;">
							{{$posts[0]->title}}
						</h3>	

						@include('_banner_menu')

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
                <p class="p-md"> {!! $posts[0]->short_description !!} </p>
            </div>
        </div>	 <!-- END SECTION TITLE -->	


         <!-- BLOG POSTS HOLDER -->
         <div class="row" style="margin-top:-50px;">

            @php
                $classes = DB::table('classes')->where('active', 'on')->get();
            @endphp
            @foreach ($classes as $item)
           
            <div class="col-md-6 col-lg-6" id="{{$item->custom_id}}">
              
                <div class="blog-post wow fadeInUp">                  
                    <!-- BLOG POST IMAGE -->
                    <div class="blog-post-img">
                       <img class="img-fluid" src="{{ URL::asset('storage/app/public/'.$item->image.'') }}" alt="blog-post-image">	
                   </div> 

                     <!-- BLOG POST TITLE -->
                     <div class="blog-post-txt mt-2">
                       <!-- Post Data -->
                       <span>{{$item->date_time}}</span>

                       <!-- Post Title -->
                       <h5 class="h5-sm">{{$item->title}}</h5>

                       <!-- Post Text -->
                       <p>{{$item->short_description}}</p>

                   </div>


                   <!-- BLOG POST LINK -->
                   <div class="blog-post-link">
                       <div class="row">
                           <div class="col-md-6">
                               <h5 class="h5-xs"><a href="{{$item->link_action}}" class="cbtn">{{$item->link_title}}</a></h5>   
                           </div>
                           <div class="col-md-6">
                               <h5 class="h5-xs"><a href="{{URL::to('class')}}/{{$item->id}}" class="cbtn2">Learn More</a></h5>   
                           </div>
                       </div>
                   </div>
               </div>
            </div>
         
            
            @endforeach

          
                         
             
        </div>	<!-- END BLOG POSTS HOLDER -->


    </div>	   <!-- End container -->		
</section>

		
 
@endsection