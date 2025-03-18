<?php $posts = DB::table('posts')->where('page', 'Blog')->where('active', 'on')->get(); ?>
@extends('layouts.master')
@section('main_content')
<main>
	<!-- breadcrumb-area -->
	<section class="breadcrumb-area d-flex align-items-center" style="background-image:url({{asset('frontend/img/maa-banner.png')}})">
																	
		<div class="container">
			<div class="row">
				<div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
					<div class="breadcrumb-wrap text-center">
						<div class="breadcrumb-title mb-30">
							<h2>Blog</h2>                                   
						</div>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="/">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">News</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- breadcrumb-area-end -->
	<!-- inner-blog -->
	<section class="inner-blog pt-100 pb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">

					@foreach ($blogs as $item)
						<div class="bsingle__post mb-50">
							<div class="bsingle__post-thumb">
								{{-- <img src="{{asset('frontend/img/blog/inner_b1.jpg')}}" alt=""> --}}
								<a href="/blog/{{$item->slug}}"><img src="{{ URL::asset('storage/app/public/'.$item->image.'') }}" alt="{{$item->title}}"></a>
							</div>
							<div class="bsingle__content">
								<div class="meta-info">
									<ul>
									<li><a href="#">  <i class="far fa-calendar-alt"></i>{{$item->created_at->diffForHumans()}}</a></li>
										{{-- <li><a href="#"><i class="far fa-user"></i>by Zcube</a></li>
										<li><i class="far fa-comments"></i>35 Comments</li> --}}
									</ul>
								</div>
								<h2><a href="/blog/{{$item->slug}}">{{$item->title}}</a></h2>
								<p>{{$item->short_description}}</p>
									<div class="slider-btn">   
										<a href="/blog/{{$item->slug}}" class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s">Read More <i class="fas fa-chevron-right"></i></a>				
									</div> 
							</div>
						</div>
					@endforeach
					
					
					<!-- <div class="bsingle__post mb-50">
						<div class="bsingle__content quote-post" style="background-image:url(img/bg/quote_bg.png)">
							<div class="meta-info">
								<ul>
									<li><a href="#">  <i class="far fa-calendar-alt"></i>  7 March, 2019</a></li>
									<li><a href="#"><i class="far fa-user"></i>by Zcube</a></li>
									<li><i class="far fa-comments"></i>35 Comments</li>
								</ul>
							</div>
							<div class="quote-icon">
								<img src="{{asset('frontend/img/icon/blockquote.png')}}" alt="">
							</div>
							<h2><a href="blog-details.html">We denounce with of righteous one indignation and dislike men.</a></h2>
						</div>
					</div> -->
					<div class="pagination-wrap mb-50">
						<nav>
							<ul class="pagination">
								<li class="page-item"><a href="#"><i class="fas fa-angle-double-left"></i></a></li>
								<li class="page-item active"><a href="#">1</a></li>
								<li class="page-item"><a href="#">2</a></li>
								<li class="page-item"><a href="#">3</a></li>
								<li class="page-item"><a href="#">...</a></li>
								<li class="page-item"><a href="#">10</a></li>
								<li class="page-item"><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
							</ul>
						</nav>
					</div>
				</div>
				<div class="col-lg-4">
					<aside>
						<div class="widget mb-40">
							<div class="widget-title text-center">
								<h4>Search</h4>
							</div>
							<div class="slidebar__form">
								<form action="#">
									<input type="text" placeholder="Search your keyword...">
									<button><i class="fas fa-search"></i></button>
								</form>
							</div>
						</div>
						<div class="widget mb-40">
							<div class="widget-title text-center">
								<h4>সর্বশেষ</h4>
							</div>
							<div class="widget__post">
								<ul>
									@foreach ($last_blogs as $item)
										<li>
											<div class="widget__post-thumb">
												<a href="/blog/{{$item->slug}}"><img src="{{ URL::asset('storage/app/public/'.$item->image.'') }}" alt="{{$item->title}}"></a>
											</div>
											<div class="widget__post-content">
												<h6><a href="/blog/{{$item->slug}}">{{$item->title}}</a></h6>
												<span><i class="far fa-clock"></i>{{$item->created_at->diffForHumans()}}</span>
											</div>
										</li>
									@endforeach
								</ul>
							</div>
						</div>
						<!-- <div class="widget mb-40">
							<div class="widget-title text-center">
								<h4>Instagram</h4>
							</div>
							<ul class="widget-insta-post">
								<li><a href="#"><img src="{{asset('frontend/img/blog/aside/insta_01.jpg')}}" alt="img"></a></li>
								<li><a href="#"><img src="{{asset('frontend/img/blog/aside/insta_02.jpg')}}" alt="img"></a></li>
								<li><a href="#"><img src="{{asset('frontend/img/blog/aside/insta_03.jpg')}}" alt="img"></a></li>
								<li><a href="#"><img src="{{asset('frontend/img/blog/aside/insta_04.jpg')}}" alt="img"></a></li>
								<li><a href="#"><img src="{{asset('frontend/img/blog/aside/insta_05.jpg')}}" alt="img"></a></li>
								<li><a href="#"><img src="{{asset('frontend/img/blog/aside/insta_06.jpg')}}" alt="img"></a></li>
								<li><a href="#"><img src="{{asset('frontend/img/blog/aside/insta_07.jpg')}}" alt="img"></a></li>
								<li><a href="#"><img src="{{asset('frontend/img/blog/aside/insta_08.jpg')}}" alt="img"></a></li>
								<li><a href="#"><img src="{{asset('frontend/img/blog/aside/insta_09.jpg')}}" alt="img"></a></li>
							</ul>
						</div> -->
					   
						<div class="widget mb-40">
							<div class="widget-title text-center">
								<h4>Categories</h4>
							</div>
							<ul class="cat__list">
								<li><a href="#">Lifestyle <span>(05)</span></a></li>
								<li><a href="#">Travel <span>(34)</span></a></li>
								<li><a href="#">Fashion <span>(89)</span></a></li>
								<li><a href="#">Music <span>(92)</span></a></li>
								<li><a href="#">Branding <span>(56)</span></a></li>
							</ul>
						</div>
						
						<div class="widget mb-40">
							<div class="widget-title text-center">
								<h4>Tags</h4>
							</div>
							<div class="widget__tag">
								<ul>
									<li><a href="#">Travel</a></li>
									<li><a href="#">Lifestyle</a></li>
									<li><a href="#">Photo</a></li>
									<li><a href="#">Adventures</a></li>
									<li><a href="#">Musician</a></li>
									<li><a href="#">08</a></li>
									<li><a href="#">Travel</a></li>
									<li><a href="#">Lifestyle</a></li>
									<li><a href="#">Photo</a></li>
									<li><a href="#">Adventures</a></li>
									<li><a href="#">Musician</a></li>
									<li><a href="#">08</a></li>
								</ul>
							</div>
						</div>
						<div class="widget mb-40">
							<div class="widget-title text-center">
								<h4>Follow Us</h4>
							</div>
							<div class="widget-social text-center">
								<a href="#"><i class="fab fa-twitter"></i></a>
								<!-- <a href="#"><i class="fab fa-pinterest-p"></i></a> -->
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
								<!-- <a href="#"><i class="fab fa-wordpress"></i></a> -->
							</div>
						</div>                               
					</aside>
				</div>
			</div>
		</div>
	</section>
	<!-- inner-blog-end -->
</main>

 @endsection