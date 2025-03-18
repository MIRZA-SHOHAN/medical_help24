
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
							<h2>Blog Details</h2>                                   
						</div>
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="/">Home</a></li>
								<li class="breadcrumb-item active" aria-current="page">News Details</li>
							</ol>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- breadcrumb-area-end -->
	<!-- inner-blog -->
	<section class="inner-blog b-details-p pt-100 pb-50">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="blog-details-wrap">
					<div class="bsingle__post-thumb mb-30">
						<img src="{{ URL::asset('storage/app/public/'.$data->image.'') }}" alt="{{$data->title}}">
						</div>
						<div class="meta__info">
							<ul>
								<li><a href="#">  <i class="far fa-calendar-alt"></i>{{$data->created_at->diffForHumans()}}</a></li>
									{{-- <li><a href="#"><i class="far fa-user"></i>by Zcube</a></li>
									<li><i class="far fa-comments"></i>35 Comments</li> --}}
							</ul>
						</div>
						<div class="details__content pb-50">
							<h2>{{$data->title}}</h2>
							<p>{!!$data->short_description!!}</p>
							<div class="row d-none">
								<div class="col-xl-6 col-md-7">
									<div class="post__tag">
										<h5>Releted Tags</h5>
										<ul>
											<li><a href="#">organic</a></li>
											<li><a href="#">Foods</a></li>
											<li><a href="#">tasty</a></li>
										</ul>
									</div>
								</div>
								<div class="col-xl-6 col-md-5">
									<div class="post__share text-right">
										<h5>Social Share</h5>
										<ul>
											<li><a href="#"><i class="fab fa-twitter"></i></a></li>
											<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
											<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
											<li><a href="#"><i class="fab fa-instagram"></i></a></li>
											<li><a href="#"><i class="fab fa-gg"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						{{-- <div class="posts_navigation pt-35 pb-35">
							<div class="row align-items-center">
								<div class="col-xl-4 col-md-5">
									<div class="prev-link">
										<span>Prev Post</span>
										<h4><a href="#">Tips on Minimalist</a></h4>
									</div>
								</div>
								<div class="col-xl-4 col-md-2 text-left text-md-center">
									<a href="blog.html" class="blog-filter"><img src="{{asset('frontend/img/icon/c_d01.png')}}" alt=""></a>
								</div>
								<div class="col-xl-4 col-md-5">
									<div class="next-link text-left text-md-right">
										<span>next Post</span>
										<h4><a href="#">Less Is More</a></h4>
									</div>
								</div>
							</div>
						</div> --}}
						<div class="related__post mt-45 mb-85">
							<div class="post-title">
								<h4>Related Post</h4>
							</div>
							<div class="row">
								@foreach ($similr_blogs as $item)
									<div class="col-md-6">
										<div class="related-post-wrap mb-30">
											<div class="post-thumb">
												<a href="/blog/{{$item->slug}}"><img src="{{ URL::asset('storage/app/public/'.$item->image.'') }}" alt="{{$item->title}}"></a>
											</div>
											<div class="rp__content">
												<h3><a href="/blog/{{$item->slug}}">{{$item->title}}</a></h3>
												<p>{!! $item->short_description !!}</p>
											</div>
										</div>
									</div>
								@endforeach
							</div>
						</div>
						<div class="avatar__wrap text-center mb-45 d-none">
							<div class="avatar-img">
								<img src="{{asset('frontend/img/blog/comment/avatar.png')}}" alt="">
							</div>
							<div class="avatar__info">
								<h5>Rosalina William</h5>
								<div class="avatar__info-social">
									<a href="#"><i class="fab fa-facebook-f"></i></a>
									<a href="#"><i class="fab fa-twitter"></i></a>
									<a href="#"><i class="fab fa-instagram"></i></a>
									<a href="#"><i class="fab fa-behance"></i></a>
									<a href="#"><i class="fab fa-linkedin"></i></a>
								</div>
							</div>
							<div class="avatar__wrap-content">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
									et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
									aliquip ex ea commodo consequa aute irure dolor.</p>
							</div>
						</div>
						<div class="comment__wrap pb-45 mb-45 d-none">
							<div class="comment__wrap-title">
								<h5>Comments</h5>
							</div>
							<div class="single__comment mb-35">
								<div class="comments-avatar">
									<img src="{{asset('frontend/img/blog/comment/c_01.png')}}" alt="">
								</div>
								<div class="comment-text">
									<div class="avatar-name mb-15">
										<h6>ALina Kelian</h6>
										<span>19th May 2018</span>
										<a href="#" class="comment-reply"><i class="fas fa-reply"></i>Reply</a>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
										ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
								</div>
							</div>
							<div class="single__comment children mb-35">
								<div class="comments-avatar">
									<img src="{{asset('frontend/img/blog/comment/c_02.png')}}" alt="">
								</div>
								<div class="comment-text">
									<div class="avatar-name mb-15">
										<h6>Rlex Kelian <i class="fas fa-bookmark"></i></h6>
										<span>19th May 2018</span>
										<a href="#" class="comment-reply"><i class="fas fa-reply"></i>Reply</a>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
										ullamco laboris nisi ut
										aliquip commodo.</p>
								</div>
							</div>
							<div class="single__comment">
								<div class="comments-avatar">
									<img src="{{asset('frontend/img/blog/comment/c_03.png')}}" alt="">
								</div>
								<div class="comment-text">
									<div class="avatar-name mb-15">
										<h6>Roboto Alex</h6>
										<span>21th May 2018</span>
										<a href="#" class="comment-reply"><i class="fas fa-reply"></i>Reply</a>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
										incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
										ullamco laboris nisi ut
										aliquip ex ea commodo consequat.</p>
								</div>
							</div>
						</div>
						<div class="post-comments-form mb-50  d-none">
							<div class="comment__wrap-title">
								<h5>Post Comment</h5>
							</div>
							<div class="comment-box">
								<form action="#" class="comment__form">
									<div class="comment-field text-area mb-20">
										<i class="fas fa-pencil-alt"></i>
										<textarea name="message" id="message" cols="30" rows="10"
											placeholder="Type your comments...."></textarea>
									</div>
									<div class="comment-field mb-20">
										<i class="far fa-user"></i>
										<input type="text" placeholder="Type your name....">
									</div>
									<div class="comment-field mb-20">
										<i class="fas fa-envelope"></i>
										<input type="email" placeholder="Type your email....">
									</div>
									<div class="comment-field mb-20">
										<i class="fas fa-globe"></i>
										<input type="email" placeholder="Type your website....">
									</div>
									<button class="btn">Post Comments</button>
								</form>
							</div>
						</div>
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
						<div class="widget mb-40 d-none">
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
												<h6><a href="#">{{$item->title}}</a></h6>
												<span><i class="far fa-clock"></i>{{$item->created_at->diffForHumans()}}</span>
											</div>
										</li>
									@endforeach
								</ul>
							</div>
						</div>
						<div class="widget mb-40">
							<div class="widget-title text-center">
								<h4>Follow Us</h4>
							</div>
							<div class="widget-social text-center">
								<a href="#"><i class="fab fa-twitter"></i></a>
								<a href="#"><i class="fab fa-pinterest-p"></i></a>
								<a href="#"><i class="fab fa-facebook-f"></i></a>
								<a href="#"><i class="fab fa-instagram"></i></a>
								<a href="#"><i class="fab fa-wordpress"></i></a>
							</div>
						</div>
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
					</aside>
				</div>
			</div>
		</div>
	</section>
	<!-- inner-blog-end -->
</main>

 @endsection