@extends('layouts.master')
@section('main_content')

<section class="main">	    
    <!-- main_area start -->
	<!-- banner-area start -->
	<section class="consulting_banner">
		<div class="container">
			<div class="consulting_header">
				<h1 class="animate__animated animate__fadeInUp animate__delay-250ms">{{$banner->title}}</h1>
				<p class="animate__animated animate__fadeInUp animate__delay-250ms">{!! $banner->short_description !!}</p>
				<div class="consulting_button">
					<a href=""><button class="btn consulting_btn btn_svg">Schedule a Meeting <img src="{{asset('frontend/img/r_arrow_bold.svg')}}" class="right_arrow " alt=""></button></a>
				</div>
			</div>
		</div>	
	</section>
	<!-- banner-area end -->



	<!-- Asphalt Advancement-area-start -->
	<section class="asphalt_advancement">
		<div class="container">
			<div class="advancement_header">
				<h2>Asphalt Advancement: <br>Strategies & Insights</h2>
			</div>
			<div class="strategies_first_col">
				<div class="strategies_col_item">
					<div class="strategies">
						<div class="strategies_img"><img src="{{asset('frontend/img/vector_1.png')}}" alt=""></div>
						<h6>Objective Analysis</h6>
						<p>Our team provides an outside perspective that is crucial for objectively assessing your company's challenges and opportunities. We identify issues that might be overlooked internally.</p>
					</div>
				</div>
				<div class="strategies_col_item">
					<div class="strategies">
						<div class="strategies_img"><img src="{{asset('frontend/img/vector_2.png')}}" alt=""></div>
						<h6>Objective Analysis</h6>
						<p>Our team provides an outside perspective that is crucial for objectively assessing your company's challenges and opportunities. We identify issues that might be overlooked internally.</p>
					</div>
				</div>
				<div class="strategies_col_item">
					<div class="strategies">
						<div class="strategies_img"><img src="{{asset('frontend/img/vector_3.png')}}" alt=""></div>
						<h6>Objective Analysis</h6>
						<p>Our team provides an outside perspective that is crucial for objectively assessing your company's challenges and opportunities. We identify issues that might be overlooked internally.</p>
					</div>
				</div>
			</div>
			<div class="strategies_second_col">
				<div class="strategies_col_item">
					<div class="strategies">
						<div class="strategies_img"><img src="{{asset('frontend/img/vector_4.png')}}" alt=""></div>
						<h6>Objective Analysis</h6>
						<p>Our team provides an outside perspective that is crucial for objectively assessing your company's challenges and opportunities. We identify issues that might be overlooked internally.</p>
					</div>
				</div>
				<div class="strategies_col_item">
					<div class="strategies">
						<div class="strategies_img"><img src="{{asset('frontend/img/vector_5.png')}}" alt=""></div>
						<h6>Objective Analysis</h6>
						<p>Our team provides an outside perspective that is crucial for objectively assessing your company's challenges and opportunities. We identify issues that might be overlooked internally.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Asphalt Advancement-area end -->

		<!-- service_area_start -->
		<section class="service_area">
			<div class="container">
				<div class="service_heading">
					<h2>Service Selection</h2>
				</div>			
				<div class="service_selection">
					<div class="service_leftarea_all">
						<div class="service_left_area">
							<div class="section_left_name">
								<h6>Custom Formulation and Development  of Emulsions and Asphalts</h6>
							</div>
							<div class="section_left_image">
								<img src="{{asset('frontend/img/Frame_1.png')}}" alt="">
							</div>
							<div class="section_left_vector">
								<img src="{{asset('frontend/img/left_vector.png')}}" alt="">
							</div>
						</div>
						<div class="service_left_area">
							<div class="section_left_name">
								<h6>Soil Stabilization and Cold Mixes  Consulting</h6>
							</div>
							<div class="section_left_image">
								<img src="{{asset('frontend/img/Frame_2.png')}}" alt="">
							</div>
							<div class="section_left_vector">
								<img src="{{asset('frontend/img/left_vector.png')}}" alt="">
							</div>
						</div>
						<div class="service_left_area">
							<div class="section_left_name">
								<h6>Performance Design, Evaluation,  and Analysis of Asphalt Mixes</h6>
							</div>
							<div class="section_left_image">
								<img src="{{asset('frontend/img/Frame_3.png')}}" alt="">
							</div>
							<div class="section_left_vector">
								<img src="{{asset('frontend/img/left_vector.png')}}" alt="">
							</div>
						</div>
						<div class="service_left_area">
							<div class="section_left_name">
								<h6>Comprehensive Training in  Pavement Surface Treatments</h6>
							</div>
							<div class="section_left_image">
								<img src="{{asset('frontend/img/Frame_4.png')}}" alt="">
							</div>
							<div class="section_left_vector">
								<img src="{{asset('frontend/img/left_vector.png')}}" alt="">
							</div>
						</div>
						<div class="service_left_area">
							<div class="section_left_name">
								<h6>Expert Assistance for Special  Asphalt Production and Storage</h6>
							</div>
							<div class="section_left_image">
								<img src="{{asset('frontend/img/Frame_5.png')}}" alt="">
							</div>
							<div class="section_left_vector">
								<img src="{{asset('frontend/img/left_vector.png')}}" alt="">
							</div>
						</div>
					</div>
					<div class="service_image_area">
						<img src="{{asset('frontend/img/service_image.png')}}" alt="">
					</div>
					<div class="service_leftarea_all">
						<div class="service_right_area">
							<div class="section_right_vector">
								<img src="{{asset('frontend/img/right_vector.png')}}" alt="">
							</div>
							<div class="section_right_image">
								<img src="{{asset('frontend/img/Frame_6.png')}}" alt="">
							</div>
							<div class="section_right_name">
								<h6>Adhesion Studies for Asphalt <br> Selection</h6>
							</div>
						</div>
						<div class="service_right_area">
							<div class="section_right_vector">
								<img src="{{asset('frontend/img/right_vector.png')}}" alt="">
							</div>
							<div class="section_right_image">
								<img src="{{asset('frontend/img/Frame_7.png')}}" alt="">
							</div>
							<div class="section_right_name">
								<h6>Production and Application Evaluation <br> for Asphalt Mixes</h6>
							</div>
						</div>
						<div class="service_right_area">
							<div class="section_right_vector">
								<img src="{{asset('frontend/img/right_vector.png')}}" alt="">
							</div>
							<div class="section_right_image">
								<img src="{{asset('frontend/img/Frame_8.png')}}" alt="">
							</div>
							<div class="section_right_name">
								<h6>Detailed Pavement Inspection and Deterioration Assessment</h6>
							</div>
						</div>
						<div class="service_right_area">
							<div class="section_right_vector">
								<img src="{{asset('frontend/img/right_vector.png')}}" alt="">
							</div>
							<div class="section_right_image">
								<img src="{{asset('frontend/img/Frame_9.png')}}" alt="">
							</div>
							<div class="section_right_name">
								<h6>Training Programs, Seminars, Conferences, and Technical Courses</h6>
							</div>
						</div>
						<div class="service_right_area">
							<div class="section_right_vector">
								<img src="{{asset('frontend/img/right_vector.png')}}" alt="">
							</div>
							<div class="section_right_image">
								<img src="{{asset('frontend/img/Frame_10.png')}}" alt="">
							</div>
							<div class="section_right_name">
								<h6>Field Support for Crushing Process Evaluation and Aggregate Selection</h6>
							</div>
						</div>
					</div>
				</div>
				<div class="service_res_selection">
					<div class="section_res_image">
						<img src="{{asset('frontend/img/service_res_image.png')}}" alt="">
					</div>
					<div class="service_all_item">
						<div class="service_res">
							<div class="res_vector">
								<img src="{{asset('frontend/img/res_vector.png')}}" alt="">
							</div>
							<div class="service_res_text">
								<div class="service_rec_img">
									<img src="{{asset('frontend/img/ser_img1.png')}}" alt="">
								</div>
								<div class="service_text">
									<h5>Custom Formulation and Development of Emulsions and Asphalts</h5>
								</div>
							</div>
						</div>
						<div class="service_res">
							<div class="res_vector">
								<img src="{{asset('frontend/img/res_vector.png')}}" alt="">
							</div>
							<div class="service_res_text">
								<div class="service_rec_img">
									<img src="{{asset('frontend/img/ser_img2.png')}}" alt="">
								</div>
								<div class="service_text">
									<h5>Soil Stabilization and Cold Mixes Consulting</h5>
								</div>
							</div>
						</div>
						<div class="service_res">
							<div class="res_vector">
								<img src="{{asset('frontend/img/res_vector.png')}}" alt="">
							</div>
							<div class="service_res_text">
								<div class="service_rec_img">
									<img src="{{asset('frontend/img/ser_img3.png')}}" alt="">
								</div>
								<div class="service_text">
									<h5>Performance Design, Evaluation, and Analysis of Asphalt Mixes</h5>
								</div>
							</div>
						</div>
						<div class="service_res">
							<div class="res_vector">
								<img src="{{asset('frontend/img/res_vector.png')}}" alt="">
							</div>
							<div class="service_res_text">
								<div class="service_rec_img">
									<img src="{{asset('frontend/img/ser_img4.png')}}" alt="">
								</div>
								<div class="service_text">
									<h5>Comprehensive Training in Pavement Surface Treatments</h5>
								</div>
							</div>
						</div>
						<div class="service_res">
							<div class="res_vector">
								<img src="{{asset('frontend/img/res_vector.png')}}" alt="">
							</div>
							<div class="service_res_text">
								<div class="service_rec_img">
									<img src="{{asset('frontend/img/ser_img5.png')}}" alt="">
								</div>
								<div class="service_text">
									<h5>Expert Assistance for Special Asphalt Production and Storage</h5>
								</div>
							</div>
						</div>
						<div class="service_res">
							<div class="res_vector">
								<img src="{{asset('frontend/img/res_vector.png')}}" alt="">
							</div>
							<div class="service_res_text">
								<div class="service_rec_img">
									<img src="{{asset('frontend/img/ser_img6.png')}}" alt="">
								</div>
								<div class="service_text">
									<h5>Adhesion Studies for Asphalt Selection</h5>
								</div>
							</div>
						</div>
						<div class="service_res">
							<div class="res_vector">
								<img src="{{asset('frontend/img/res_vector.png')}}" alt="">
							</div>
							<div class="service_res_text">
								<div class="service_rec_img">
									<img src="{{asset('frontend/img/ser_img7.png')}}" alt="">
								</div>
								<div class="service_text">
									<h5>Production and Application Evaluation for Asphalt Mixes</h5>
								</div>
							</div>
						</div>
						<div class="service_res">
							<div class="res_vector">
								<img src="{{asset('frontend/img/res_vector.png')}}" alt="">
							</div>
							<div class="service_res_text">
								<div class="service_rec_img">
									<img src="{{asset('frontend/img/ser_img8.png')}}" alt="">
								</div>
								<div class="service_text">
									<h5>Detailed Pavement Inspection and Deterioration Assessment</h5>
								</div>
							</div>
						</div>
						<div class="service_res">
							<div class="res_vector">
								<img src="{{asset('frontend/img/res_vector.png')}}" alt="">
							</div>
							<div class="service_res_text">
								<div class="service_rec_img">
									<img src="{{asset('frontend/img/ser_img9.png')}}" alt="">
								</div>
								<div class="service_text">
									<h5>Training Programs, Seminars, Conferences, and Technical Courses</h5>
								</div>
							</div>
						</div>
						<div class="service_res_bottom">
							<div class="res_vector">
								<img src="{{asset('frontend/img/res_vector.png')}}" alt="">
							</div>
							<div class="service_res_text">
								<div class="service_rec_img">
									<img src="{{asset('frontend/img/ser_img10.png')}}" alt="">
								</div>
								<div class="service_text">
									<h5>Field Support for Crushing Process Evaluation and Aggregate Selection</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- service_area_end -->
	<!-- global_expertise_area_start -->
	<section class="global_expertise">
		<div class="container">
			<div class="global_expertise_area " >
				<div class="global_expertise_text popular_item aos-init aos-animate" data-aos="fade-left">
					<h2>{{$section3->title}}</h2>
					<p>{!! $section3->short_description !!}</p>
					<div class="global_button">
						<a href=""><button class="btn global_btn btn_svg">Schedule a Meeting <img src="{{asset('frontend/img/r_arrow_bold.svg')}}" class="right_arrow " alt=""></button></a>
					</div>
				</div>
				<div class="global_expertise_img popular_item aos-init aos-animate" data-aos="fade-right">
					<img src="{{asset('frontend/img/image 41.png')}}" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- global_expertise_area_end -->


	<!-- team-area-start -->
	<section class="team_section">
		<div class="container">
			<div class="team_header">
				<h2>Our Team</h2>
			</div>
			<div class="team_row_1 popular_item aos-init aos-animate" data-aos="fade-right">
				<div class="row">
					<div class="col-md-4">
						<div class="identity">
							<div class="team_person_only">
								<div class="team_image"><img src="{{asset('frontend/img/team_1.png')}}" alt=""></div>
								<h5>Estephania Amaya</h5>
								<p>Chemical Engineer, Specialist in Pavement Engineering with 10 years' experience</p>
								<h6>Consultant</h6>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="identity">
							<div class="team_person_only">
								<div class="team_image"><img src="{{asset('frontend/img/team_2.png')}}" alt=""></div>
								<h5>Gabriela Ibañez</h5>
								<p>Civil Engineer, Master in Road Infrastructure with 3 years' experience</p>
								<h6>Consultant</h6>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="identity">
							<div class="team_person_only">
								<div class="team_image"><img src="{{asset('frontend/img/team_3.png')}}" alt=""></div>
								<h5>Iván José Paba</h5>
								<p>Chemical Engineer, Specialist in Pavement Engineering, with 15 years' experience</p>
								<h6>Consultant</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="team_row_2 popular_item aos-init aos-animate" data-aos="fade-left">
				<div class="row">
					<div class="col-md-4">
						<div class="identity">
							<div class="team_person_only">
								<div class="team_image"><img src="{{asset('frontend/img/team_4.png')}}" alt=""></div>
								<h5>Xavier Eduardo Cuellar</h5>
								<p>Civil Engineer, Road Specialist with 19 years' experience</p>
								<h6>Consultant</h6>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="identity">
							<div class="team_person_only">
								<div class="team_image"><img src="{{asset('frontend/img/team_5.png')}}" alt=""></div>
								<h5>Ricardo Carreño</h5>
								<p>Chemical Engineer, Specialist in Pavement Engineering with 15 years' experience</p>
								<h6>CEO</h6>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="identity">
							<div class="team_person_only">
								<div class="team_image"><img src="{{asset('frontend/img/team_6.png')}}" alt=""></div>
								<h5>Leonel Hernández</h5>
								<p>Chemical Engineer, Specialist in Asphalt and Pavement with 25 years' experience</p>
								<h6>Consultant </h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- team-area-end -->


	<!-- training_area_start -->
	<section class="training_development">
		<div class="container">
			<div class="training_area">
				<div class="training_text popular_item aos-init aos-animate" data-aos="fade-left">
					<h2>{{$section5->title}}</h2>
					<p>{!! $section5->short_description !!}</p>
					<div class="global_button">
						<a href=""><button class="btn global_btn btn_svg">Schedule a Meeting <img src="{{asset('frontend/img/r_arrow_bold.svg')}}" class="right_arrow " alt=""></button></a>
					</div>
				</div>
				<div class="training_img popular_item aos-init aos-animate" data-aos="fade-right">
					<img src="{{asset('frontend/img/image 42.png')}}" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- training_area_end -->

	
	<!-- Connect area start -->
	<section class="connect_section">
		<div class="container">
			<div class="test">
				<div class="connect_area">
					<div class="connect_left_area popular_item aos-init aos-animate" data-aos="fade-right">
						<div class="connect_text">
							<h4>Connect With Our Team</h4>
							<p>Feel free to email us with any questions. No need to book a meeting for quick queries—just make sure to leave your contact information so we can get back to you promptly.</p>
						</div>
						<input type="text" class="connect_button_1 form-control" placeholder="Your email id">
						<input type="text" class="connect_button_2 form-control" placeholder="Write your question">
						<a href=""><button class="connect_button_3 btn_svg btn">Ask Question <img src="{{asset('frontend/img/r_arrow_bold.svg')}}" class="right_arrow " alt=""></button></a>
					</div>
					<div class="connect_right_area popular_item aos-init aos-animate" data-aos="fade-left">
						<div class="connect_image">
							<img src="{{asset('frontend/img/connect.png')}}" alt="">
						</div>
						<div class="connect_image_1">
							<img src="{{asset('frontend/img/connect_1.png')}}" alt="">
						</div>
						<h4>To Schedule a Meeting</h4>
						<p>Visit our Calendly to find a time that works for you</p>
						<a href=""><button class="connect_button_4 btn_svg btn">Meeting on Calendly <img src="{{asset('frontend/img/r_arrow_bold.svg')}}" class="right_arrow " alt=""></button></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Connect area end -->
        




      
@endsection