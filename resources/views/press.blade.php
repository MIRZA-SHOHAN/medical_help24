<?php $posts = DB::table('posts')->where('page', 'Press')->where('position', 'Banner')->get(); ?>
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
				<div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2">
					<div class="hero-txt text-center">

						<h3 class="h3-lg wow fadeInUp"  data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
							{{$posts[0]->title}}
						</h3>
						<p class="p-md wow fadeInUp d-none" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                            {{$posts[0]->sub_title}}
						</p>

					</div>
				</div>	
			</div>	 <!-- End row -->
		</div>	 <!-- End container --> 
	</div>	 <!-- END HERO-4 TEXT -->

</section>

			<!-- SERVICES-2
			============================================= -->	

			<section id="blog-1" class="wide-60 blog-section division" style="margin-top: 0px;">
				<div class="container">
					<div class="row">	

						<div class="col-lg-10 offset-lg-1 section-title">	
							{!! $posts[0]->description !!}
						</div>

                        <?php $data = DB::table('posts')->where('page', 'Press')->where('position', null)->get(); ?>
						@foreach ($data as $item)				
						
						<div class="col-md-6 col-lg-6">
							<div class="blog-post wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">

								<!-- BLOG POST TITLE -->
							   <div class="blog-post-txt">
								   <!-- Post Title -->
								   <h5 class="h5-sm mt-20"><a href="{{$item->link_action}}" target="_blank">{{$item->title}}</a></h5> 
							   </div>
				
								<!-- BLOG POST IMAGE -->
								<div class="blog-post-img">
								  
								@if($item->image != null )
									<img class="img-fluid" src="{{ URL::asset('storage/app/public/'.$item->image.'') }}" alt="blog-post-image">	
								 @else
								   <img src="{{asset('frontend/images/no-image.png')}}" class="img-fluid">
								 @endif   
							   </div>

							   <!-- BLOG POST LINK -->
							   <div class="blog-post-link">
								   <h5 class="h5-xs"><a href="{{$item->link_action}}" target="_blank">{{$item->link_title}}</a></h5>
								   <span><svg class="svg-inline--fa fa-align-right fa-w-14" aria-hidden="true" data-prefix="fas" data-icon="align-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M160 84V44c0-8.837 7.163-16 16-16h256c8.837 0 16 7.163 16 16v40c0 8.837-7.163 16-16 16H176c-8.837 0-16-7.163-16-16zM16 228h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 256h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm160-128h256c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H176c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></svg><!-- <i class="fas fa-align-right"></i> --></span>
							   </div>

						   </div>
						</div>


						@endforeach	
						
					</div>
				</div>
					
			</section>
			
 @endsection