
@extends('layouts.master')
@section('main_content')

<style>
	div#exampleModalLong {
    bottom: 150!important;
    right: 10px!important;
}
iframe{
	height: 769px!important;
    margin-right: 86px!important; 
}
</style>
<section class="main">	    
	<!-- main_area start -->
	<section class="main_area">
		@include('_header')
		<!-- hero-area start -->
		<section class="hero-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="hero__part">
							<div class="hero__left">
								<h1 class="animate__animated animate__fadeInUp animate__delay-250ms">{{$banner->title}}</h1>
								<p class="animate__animated animate__fadeInUp animate__delay-500ms">{{$banner->sub_title}}</p>
								<!-- <a href="#">Get Started</a> -->
								<button class="custom_btn animate__animated animate__fadeInUp animate__delay-900ms" data-toggle="modal" data-target="#exampleModalLong">Get Started</button>

                                  <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="">
                                    <div class="modal-dialog" role="document">
                                    <div class="modal-content">       
                                        <div class="modal-body" style="position: fixed!important; right: 0">
                                            <div id="sentiyen-iframe-wrapper" data-id="4c07a258-6e02-4a4c-8ecf-4cf01b28cd6c"></div>
                                            <script defer type="text/javascript" src="https://www.sentiyen.com/embed/embed.js"></script> 
                                        </div>
                                    </div>
                                    </div>
                                </div>

							</div>
							<div class="hero__right">
								<form autocomplete="off" action="#" method="POST">
									<textarea name="#" id="chat_text" cols="30" rows="10"  /></textarea>
									<input type="button" id="conversation-badge" data-toggle="modal" data-target="#exampleModalLong"  value="Ask Question" />
									{{-- onclick='openWidget()' --}}
									<p class="iam">Ask <span class="text"></span>   </p>
									
									<!-- <a href >Click here!</a> -->

								</form>  
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- hero-area end -->
		
	</section>
	<!-- main_area end -->
	
	<!-- popular__area start -->
	<section class="popular__area">
		<div class="popular__heading_text">
			<h2>{{$section2->title}}</h2>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					
						
						<div class="main_popular_part">
							<div data-aos="fade-up" class="popular_item ">
								<a href="#">
									<img src="{{asset('frontend/img/icon1.svg')}}" alt="images not found" />
									<!-- <p>Enrolled Agent (EA)</p> -->
									<h5>Enrolled Agent (EA)</h5>

								</a>
							</div>
							<div data-aos="fade-down" class="popular_item">
								<a href="#">
									<img src="{{asset('frontend/img/icon2.svg')}}" alt="images not found" />
									<h5>Certified Public Accountant (CPA)</h5>
									<!-- <p>Certified Public Accountant (CPA)</p> -->
								</a>
							</div>
							<div data-aos="fade-right" class="popular_item">
								<a href="#">
									<img src="{{asset('frontend/img/icon3.svg')}}" alt="images not found" />
									<!-- <p>Tax Attorney</p> -->
									<h5>Tax Attorney</h5>
								</a>
							</div>
							<div data-aos="fade-left" class="popular_item">
								<a href="#">
									<img src="{{asset('frontend/img/icon4.svg')}}" alt="images not found" />
									<!-- <p>Chartered Accountant</p> -->
									<h5>Chartered Accountant</h5>
								</a>
							</div>
							<div data-aos="fade-up-right" class="popular_item">
								<a href="#">
									<img src="{{asset('frontend/img/icon5.svg')}}" alt="images not found" />
									<h5>Tax Preparer</h5>
									<!-- <p>Tax Preparer</p> -->
								</a>
							</div>
							<div data-aos="fade-up-left" class="popular_item">
								<a href="#">
									<img src="{{asset('frontend/img/icon6.svg')}}" alt="images not found" />
									<!-- <p>Chartered Accountant</p> -->
									<h5>Chartered Accountant</h5>
								</a>
							</div>
							<div data-aos="fade-up" class="popular_item">
								<a href="#">
									<img src="{{asset('frontend/img/icon7.svg')}}" alt="images not found" />
									<!-- <p>International Tax Advisor</p> -->
									<h5>International Tax Advisor</h5>
								</a>
							</div>
							<div data-aos="fade-left" class="popular_item">
								<a href="#">
									<img src="{{asset('frontend/img/icon8.svg')}}" alt="images not found" />
									<h5>Certified Financial Planner (CFP)</h5>
									<!-- <p>Certified Financial Planner (CFP)</p> -->
								</a>
							</div>
						</div>
				</div>
			</div>
		</div>
	</section>
	<!-- popular__area end -->
	<!-- hiw__area start -->
	<section class="hiw__area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="hiw_part">
						<div class="hiw_left_part computer_view">
							<img src="{{asset('frontend/img/image1.png')}}" alt="images not found" />
						</div>
						<div class="hiw_right_part">
							<h3>{{$section3->title}}</h3>
								<div class="inner_hiw_right_part">
									@php
										$section3_childs = DB::table('posts')
												->where('parent', $section3->id)
												->get();
									@endphp
									@foreach ($section3_childs as $item)
									
										<div data-aos="fade-left" class="inner_hiw_part">
											<div class="inner_hiw_part_img">
												<img src="{{ URL::asset('storage/app/public/'.$item->image.'') }}" alt="{{$item->title}}"/>
											</div>
											<div class="inner_hiw_part_text">
												<h4>{{$item->title}}</h4>
												<p>{{$item->sub_title}}</p>
											</div>
										</div>
									@endforeach									
								</div>
						</div>
						<div class="hiw_left_part mobile_view">
							<img src="{{asset('frontend/img/image1.png')}}" alt="images not found" />
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- hiw__area end -->
	<!-- sfp__area start -->
	<section class="sfp__area">
		<div class="sfp__heading_text">
			<h2>{{$section4->title}}</h2>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="main_sfp__part">
						@php
							$section4_childs = DB::table('posts')
									->where('parent', $section4->id)
									->get();
						@endphp
						@foreach ($section4_childs as $item)
							<div class="inner_sfp__part">
								<div class="inner_sfp__img">
									<img src="{{ URL::asset('storage/app/public/'.$item->image.'') }}" alt="{{$item->title}}"/>
									{{-- {{ URL::asset('storage/app/public/'.$item->image.'') }} --}}
								</div>
								<h4>{{$item->title}}</h4>
								<p>
									{{$item->sub_title}}
								</p>
							</div>
						@endforeach

						{{-- <div class="inner_sfp__part">
							<div class="inner_sfp__img">
								<img src="{{asset('frontend/img/sfp_img2.svg')}}" alt="images not found" />
							</div>
							<h4>Our Complimentary Strategy</h4>
							<p>
								Why offer a free consultation? Because many are so pleased with our guidance, they decide to let us handle their taxes.
							</p>
						</div>
						<div class="inner_sfp__part">
							<div class="inner_sfp__img">
								<img src="{{asset('frontend/img/sfp_img3.svg')}}" alt="images not found" />
							</div>
							<h4>The Value we Aim to Provide</h4>
							<p>
								We hope to provide you with so much value that! you'll consider having our tax pros take care of your tax needs in the future.
							</p>
						</div> --}}
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- sfp__area end -->
	<!-- members_helped__area start -->
	<section class="members_helped__area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="computer_view">
						<div class="members_helped_part">
							<div class="members_helped_title">
								<h2>Over 10 Million Members Helped</h2>
							</div>
							<!--1 -->
							<div class="members_helped_box">
								<div class="members_helped_box_img">
									<img src="{{asset('frontend/img/heart_icon.svg')}}" alt="icon" />
								</div>
								<h4>Best site I've ever been on</h4>
								<p>Very knowledgeable about any question, and they answer withing Minute.</p>
								<h3><i class=""></i> -Wade Warren</h3>
							</div>
							<!--1 -->
							<!--2 -->
							<div class="members_helped_box">
								<div class="members_helped_box_img">
									<img src="{{asset('frontend/img/heart_icon.svg')}}" alt="icon" />
								</div>
								<h4>Great service</h4>
								<p>I had a complicated question and a real lawyer replied within 2 minute.</p>
								<h3><i class=""></i>-Cameron Williamson</h3>
							</div>
							<!--2 -->
							<!--3 -->
							<div class="members_helped_box">
								<div class="members_helped_box_img">
									<img src="{{asset('frontend/img/heart_icon.svg')}}" alt="icon" />
								</div>
								<h4>A valuable asset to my business</h4>
								<p>The appraisers at KindJoe are professional, Friendly very knowledge-able.</p>
								<h3><i class=""></i>-Floyd Miles</h3>
							</div>
							<!--3 -->
							<!--4 -->
							<div class="members_helped_box">
								<div class="members_helped_box_img">
									<img src="{{asset('frontend/img/heart_icon.svg')}}" alt="icon" />
								</div>
								<h4>Best site I've ever been on</h4>
								<p>We were able to fix the problem with little fuss. Definitely worth starting with KindJoe</p>
								<h3><i class=""></i>-Ralph Edwards</h3>
							</div>
							<!--4 -->
							<!--5 -->
							<div class="members_helped_box">
								<div class="members_helped_box_img">
									<img src="{{asset('frontend/img/heart_icon.svg')}}" alt="icon" />
								</div>
								<h4>Best site I've ever been on</h4>
								<p>Got me on the road within a few minutes. I will definitely use this service again.</p>
								<h3><i class="" style="font-weight: 700;"></i>-Kristin Watson</h3>
							</div>
							<!--5 -->
							
						</div>
						
						
					</div>
					<div class="mobile_view">
						<div class="members_helped_title">
							<h2>Over 10 Million Members Helped</h2>
						</div>
						<div class="members_helped_part slider2 owl-carousel">
							<!--1 -->
							<div class="members_helped_box">
								<div class="members_helped_box_img">
									<img src="{{asset('frontend/img/heart_icon.svg')}}" alt="icon" />
								</div>
								<h4>Best site I've ever been on</h4>
								<p>Very knowledgeable about any question, and they answer withing Minute.</p>
								<h3> - Wade Warren</h3>
							</div>
							<!--1 -->
							<!--2 -->
							<div class="members_helped_box">
								<div class="members_helped_box_img">
									<img src="{{asset('frontend/img/heart_icon.svg')}}" alt="icon" />
								</div>
								<h4>Great service</h4>
								<p>I had a complicated question and a real lawyer replied within 2 minute.</p>
								<h3> - Cameron Williamson</h3>
							</div>
							<!--2 -->
							<!--3 -->
							<div class="members_helped_box">
								<div class="members_helped_box_img">
									<img src="{{asset('frontend/img/heart_icon.svg')}}" alt="icon" />
								</div>
								<h4>A valuable asset to my business</h4>
								<p>The appraisers at KindJoe are professional, Friendly very knowledge-able.</p>
								<h3> - Floyd Miles</h3>
							</div>
							<!--3 -->
							<!--4 -->
							<div class="members_helped_box">
								<div class="members_helped_box_img">
									<img src="{{asset('frontend/img/heart_icon.svg')}}" alt="icon" />
								</div>
								<h4>Best site I've ever been on</h4>
								<p>We were able to fix the problem with little fuss. Definitely worth starting with KindJoe</p>
								<h3> - Ralph Edwards</h3>
							</div>
							<!--4 -->
							<!--5 -->
							<div class="members_helped_box">
								<div class="members_helped_box_img">
									<img src="{{asset('frontend/img/heart_icon.svg')}}" alt="icon" />
								</div>
								<h4>Best site I've ever been on</h4>
								<p>Got me on the road within a few minutes. I will definitely use this service again.</p>
								<h3> - Kristin Watson</h3>
							</div>
							<!--5 -->
							
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- members_helped__area end -->
	<!-- demand__area start -->
	<section class="demand__area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="demand__part">
						
						<div class="demand__left">
							<h2>{{$section6->title}}</h2>
							{!! $section6->description !!}
							{{-- <ul>
								<li>Tax Professionals have an average of 14 years of experience</li>
								<li>Profiles of our online Tax Professionals display client ratings and reviews of recent work</li>
								<li>Find Tax Professionals anywhere for every legal need</li>
								<li>Ask an CPA and receive professional advice online</li>
							</ul> --}}
							{{-- <a href="{{$section6->link_action}}">{{$section6->link_title}}</a> --}}
							{{-- <button class="custom_btn"><a href="#">See More Project</a></button> --}}
							<a href="{{$section6->link_action}}"><button class="custom_btn">{{$section6->link_title}}</button></a>

							{{-- <!-- <div class="demand__left_btn">
								<a href="#" class="custom_btn">See More Project</a>  
							</div> --> --}}
						</div>
						<div class="demand__right">
							@foreach ($reviews as $item)
								<div class="inner_demand__right">
									<div class="inner_demand___img">
										<img src="{{ URL::asset('storage/app/public/'.$item->image.'') }}" alt="{{$item->title}}" />
									</div>
									<div class="inner_demand___text">
										<h4>{{$item->name}}</h4>
										<div class="star">
											<img src="{{asset('frontend/img/star.svg')}}" alt="star" />
											<img src="{{asset('frontend/img/star.svg')}}" alt="star" />
											<img src="{{asset('frontend/img/star.svg')}}" alt="star" />
											<img src="{{asset('frontend/img/star.svg')}}" alt="star" />
											<img src="{{asset('frontend/img/star.svg')}}" alt="star" />
										</div> 
										<h5>{{$item->review_title}}</h5>
										<p>{{$item->designation}}</p>
									</div>
								</div>
							@endforeach
							

							{{-- <div class="inner_demand__right">
								<div class="inner_demand___img">
									<img src="{{asset('frontend/img/man2.png')}}" alt="images not found" />
								</div>
								<div class="inner_demand___text">
									<h4>Alejandro Maher</h4>
									<div class="star">
										<img src="{{asset('frontend/img/star.svg')}}" alt="star" />
										<img src="{{asset('frontend/img/star.svg')}}" alt="star" />
										<img src="{{asset('frontend/img/star.svg')}}" alt="star" />
										<img src="{{asset('frontend/img/star.svg')}}" alt="star" />
										<img src="{{asset('frontend/img/star.svg')}}" alt="star" />
									</div>
									<h5>12 years experience</h5>
									<p>Business, Finance and Technology Lawyer</p>
								</div>
							</div>
							
							<div class="inner_demand__right">
								<div class="inner_demand___img">
									<img src="{{asset('frontend/img/man3.png')}}" alt="images not found" />
								</div>
								<div class="inner_demand___text">
									<h4>Kanika Radhakrishnan</h4>
									<div class="star">
										<img src="{{asset('frontend/img/star.svg')}}" alt="star" />
										<img src="{{asset('frontend/img/star.svg')}}" alt="star" />
										<img src="{{asset('frontend/img/star.svg')}}" alt="star" />
										<img src="{{asset('frontend/img/star.svg')}}" alt="star" />
										<img src="{{asset('frontend/img/star.svg')}}" alt="star" />
									</div>
									<h5>Harvard Law School</h5>
									<p>Intellectual Property Lawyer</p>
								</div>
							</div> --}}
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- demand__area end -->
	<!-- askus__area start -->
	<section class="askus__area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="askus__part">
						<div class="inner_askus__part">
							<div class="inner_askus__img">
								<img src="{{ URL::asset('storage/app/public/'.$section7->image.'') }}" alt="{{$item->title}}" />
							</div>
							<div class="inner_askus__text">
								<h2>{{$section7->title}}</h2>
								<p>{{$section7->sub_title}}</p>
								{!! $section7->description !!}
								{{-- <ul>
									<li>How Does the Tax Relief Process Work?</li>
									<li>What Are My Options for Tax Relief?</li>
									<li>How Much Will Cost To Resolve My Tax Issues?</li>
									<li>Can I Handle This on My Own?</li>
									<li>How Long Do I Have to Resolve My Tax Debt?</li>
									<li>What Happens If I Can't Pay the Full Amount I Owe in Taxes?</li>
								</ul> --}}
								{{-- <a href="#">Start Chat</a> --}}
								<a href="{{$section7->link_action}}">{{$section7->link_title}}</a>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- askus__area end -->
			

@endsection