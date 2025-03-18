@php $posts = DB::table('posts')->where('page', 'Event')->where('active', 'on')->get();@endphp

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
                       
						
						{{-- @include('_banner_menu') --}}

					</div>
				</div>	
			</div>	 <!-- End row -->
		</div>	 <!-- End container --> 
	</div>	 <!-- END HERO-4 TEXT -->
</section>

<section id="blog-1" class="wide-60 blog-section division" style="margin-top: 10px;">				
    <div class="container">

        <!-- SECTION TITLE -->	
        <div class="row">	
            <div class="col-lg-10 offset-lg-1 section-title1">	
                {!! $posts[0]->description !!} 
            </div>
            <iframe src="https://app.glofox.com/portal/#/branch/60d10845e72ff139c03ceb1b/courses" frameborder="0" width="100%" height="800"></iframe><a href="https://www.glofox.com">powered by <b>Glofox</b></a>

            
        </div>


         <!-- BLOG POSTS HOLDER -->
         <div class="d-none row">

            @php
                $classes = DB::table('events')->where('active', 'on')->get();
            @endphp
            @foreach ($classes as $item)
            <div class="col-md-6 col-lg-6">
                <div class="blog-post wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">

                  
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
                               <h5 class="h5-xs"><a href="{{URL::to('event')}}/{{$item->id}}" class="cbtn2">Learn More</a></h5>   
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