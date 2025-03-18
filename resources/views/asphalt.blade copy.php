@extends('layouts.master')
@section('main_content')

<section class="main">	     
    

		<!-- banner-area start -->
		<section class="banner_area_asphalt">
			<div class="container">
				<div class="asphalt">
					<div class="asphalt_banner">
						<div class="asphalt_header">
							<h1 class="animate__animated animate__fadeInUp animate__delay-250ms">{{$banner->title}}</h1>
							<p class="animate__animated animate__fadeInUp animate__delay-250ms">{{$banner->short_description}}</p>
		
							<div class="asphalt_button"><a href=""><button class="btn yello_btn">Read More <img src="{{asset('frontend/img/r_arrow_bold.svg')}}" alt=""></button></a>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</section>
		
		
		<!-- Packaging-area start -->   
		<section class="packaging_sec ">
			<div class="container">
				<div class="packaging_area">
					<h2>Asphalt Packaging Options</h2>
					<p>Understanding that our clients have diverse needs and requirements for asphalt product handling and transportation, we offer a variety of packaging options to suit different preferences and logistical goals. </p>
					
				</div>		
				<div class="row">
					<div class="col-md-3">
						<div class="asphalt_box popular_item aos-init aos-animate" data-aos="fade-left">
							<div class="as_box_img_area">
								<img src="{{asset('frontend/img/project/image 23.png')}}" alt="">
							</div>
						
							<div class="package_content_area">
								<h3>Bulk Shipments</h3>
								<p>For large-scale projects and clients requiring significant quantities of asphalt products, we provide bulk shipments.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="asphalt_box" data-aos="fade-left">
							<div class="as_box_img_area">
								<img src="{{asset('frontend/img/project/image 24.png')}}" alt="">
							</div>
							<div class="package_content_area">
								<h3>Drums</h3>
								<p>Our drum packaging option (200 kg) caters to clients who need smaller, more manageable quantities of asphalt products.</p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="asphalt_box" data-aos="fade-right">
							<div class="as_box_img_area">
								<img src="{{asset('frontend/img/project/image 25.png')}}" alt="">
							</div>
							<div class="package_content_area">
								<h3>Totes</h3>
								<p>We export solidified bitumen in totes (1.2 Ton), to provide ease of handling and storage, while accommodating substantial quantities. </p>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="asphalt_box" data-aos="fade-right">
							<div class="as_box_img_area">
								<img src="{{asset('frontend/img/project/image 26.png')}}" alt="">
							</div>
							<div class="package_content_area">
								<h3>IBC</h3>
								<p>The Intermediate Bulk Container (1 Ton) is used exclusively for the transportation of asphalt emulsions, as it ensures product stability during transit.</p>
							</div>
						</div>
					</div>
					
				</div>	
				<!-- <div class="as_box_btn">
					<a href=""><button class="btn">Schedule a Meeting  &#8594;</button></a>
				</div> -->
				
				
				<div class="sch_btn">
					<a href=""><button class="btn yello_btn as_bx_btn">Schedule a Meeting <img src="{{asset('frontend/img/r_arrow_bold.svg')}}" alt=""></button></a>
				</div>
			</div>
		</section>
	<!-- Packaging-area end --> 


	<section class="polybit_sec">
			<div class="container">
				<div class="polybit_area ">
					<div class="polybit_img_area_m">
						<img src="{{asset('frontend/img/project/poly_img_2.png')}}"alt="">
					</div>
					<div class="polybit_content_area popular_item aos-init aos-animate" data-aos="fade-right">
						<div class="poly_title">
							<h2>{{$section2->title}}</h2>
						</div>
						
						<div class="sub_ttl_area">
							<img src="{{asset('frontend/img/poly_yl_sign.jpg')}}"alt="">
							<h3>Polybit Tipo II R</h3>
							<img src="{{asset('frontend/img/poly_yl_sign.jpg')}}"alt="" class="poly_sign">
							<h3>Polybit Tipo II R</h3>
						</div>
						<div class="poly_content">
							<p>{!! $section2->short_description !!}</p>
						</div>
						<div class="poly_btn_area">
							<a href=""><button class="btn yello_btn poly_btn btn_svg">Request a Quote  <img src="{{asset('frontend/img/r_arrow_bold.svg')}}"alt=""></button></a>
						</div>
					</div>
					<div class="polybit_img_area popular_item aos-init aos-animate" data-aos="fade-left">
						<img src="{{asset('frontend/img/project/poly_img_d.png')}}"alt="">
					</div>
				</div>
			</div>

		</section>

		{{-- <section class="polybit_sec">
			<div class="container">
				<div class="polybit_area">
					<div class="polybit_img_area_m">
						<img src="{{asset('frontend/img/project/poly_img_2.png')}}" alt="">
					</div>
					<div class="polybit_content_area popular_item aos-init aos-animate" data-aos="fade-right" >
						<div class="poly_title">
							<h2>{{$section2->title}}</h2>
						</div>
						<div class="sub_ttl_area">
							<img src="{{asset('frontend/img/poly_yl_sign.jpg')}}" alt="">
							<h3>Polybit Tipo II R</h3>
							<img src="{{asset('frontend/img/poly_yl_sign.jpg')}}" alt="">
							<h3>Polybit Tipo II R</h3>
						</div>
						<div class="poly_content">
							<p>Our Crack Sealer is a specially formulated product designed to fill and seal cracks in asphalt and concrete surfaces, preventing further deterioration and extending the pavement's life. With a focus on durability and ease of use, it is ideal for maintaining both commercial and residential pavements. The sealer accommodates the natural expansion and contraction of surfaces, ensuring a long-lasting repair. Adheres to ASTM-D6690 and equivalent standards.</p>
						</div>
						<div class="poly_btn_area">
							<a href=""><button class="btn yello_btn poly_btn">Request a Quote  <img src="{{asset('frontend/img/r_arrow.svg')}}" alt=""></button></a>
						</div>
					</div>
					<div class="polybit_img_area" data-aos="fade-left">
						<img src="{{asset('frontend/img/project/poly_img_d.png')}}" alt="">
					</div>
				</div>
			</div>

		</section> --}}



		<div class="desktop_table">
			<!-- Notes-area start -->   
		<section class="pgac_sec">
			<div class="container">
				<div class="pgac_title">
					<h2>Penetration-Graded Asphalt Cement</h2>
					<p>These conventional asphalt cements are suitable for various paving needs and adhere to ASTM D946/D946M and equivalent standards, offering a reliable performance.</p>
				</div>
				<div class="table_area">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Product</th>
								<th>TDS</th>
								<th>SDS</th>
								<th class="th_ibc" style="padding: 8px 20px;">IBC</th>
								<th>Tambor</th>
								<th>BIG BAG</th>
								<th>Granel</th>
							</tr>
						</thead>
						<tbody>
						<tr>
							<td class="tr_td ">Asphalt MPI 40/50</td>
							<td class="tr_td_d"><button>Download</button></td>
							<td class="tr_td_d"><button>Download</button></td>
							<td ></td>
							<td rowspan="4"  class="check"><img src="{{asset('frontend/img/check.svg')}}" alt=""></td>
							<td rowspan="4"  class="check"><img src="{{asset('frontend/img/check.svg')}}" alt=""></td>
							<td rowspan="4"  class="check"><img src="{{asset('frontend/img/check.svg')}}" alt=""></td>
							
						</tr>
						<tr>
							<td class="tr_td">Asphalt MPI 60/70</td>
							<td class="tr_td_d"><button>Download</button></td>
							<td class="tr_td_d"><button>Download</button></td>
							<td></td>
						</tr>
						
						<tr>
							
							<td class="tr_td">Asphalt MPI 80/100</td>
							<td class="tr_td_d"><button>Download</button></td>
							<td class="tr_td_d"><button>Download</button></td>
							<td></td>
						</tr>
						</tbody>
					</table>
				</div>
				<div class="cad9_area">
					<p>Cumplimiento ASTM-D946</p>
				</div>
				
			</div>

		</section>
	<!-- Notes-area end -->   
	<!-- Notes-area start -->   
		<section class="pgac_sec_viscosity">
			<div class="container">
				<div class="pgac_title">
					<h2>Viscosity-Graded Asphalt Cement</h2>
					<p>These conventional asphalt cements are suitable for various paving needs and adhere to ASTM D946/D946M and equivalent standards, offering a reliable performance.</p>
				</div>
				<div class="table_area">
					<table class="table table-bordered">
						<thead>
						<tr>
							<th>Product</th>
							<th>TDS</th>
							<th>SDS</th>
							<th class="th_ibc" style="padding: 8px 20px;">IBC</th>
							<th>Tambor</th>
							<th>BIG BAG</th>
							<th>Granel</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td class="tr_td ptc">Asphalt MPI 40/50</td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="ptc"></td>
							<td rowspan="4" class="check"><img src="{{asset('frontend/img/check.svg')}}" alt=""></td>
							<td rowspan="4"  class="check"><img src="{{asset('frontend/img/check.svg')}}" alt=""></td>
							<td rowspan="4"  class="check"><img src="{{asset('frontend/img/check.svg')}}" alt=""></td>
							
						</tr>
						<tr>
							<td class="tr_td ptc">Asphalt MPI 60/70</td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="ptc"></td>
						</tr>
						
						<tr>
							
							<td class="tr_td ptc">Asphalt MPI 80/100</td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="ptc"></td>
						</tr>
						
						</tbody>
					</table>
					
				</div>
				<div class="cad9_area">
					<p>Cumplimiento ASTM-D946</p>
				</div>
			</div>

		</section>
	<!-- Notes-area end -->   
	<!-- Notes-area start -->   
		<section class="pgac_sec">
			<div class="container">
				<div class="pgac_title">
					<h2>Performance-Graded Asphalt Cement</h2>
					<p>Our performance-grade asphalts are tailored to address the needs of different environments and loading scenarios. They conform to AASHTO M320 and equivalent standards, aiming to provide quality and durability for road surfaces. </p>
				</div>
				<div class="table_area">
					<table class="table table-bordered">
						<thead>
						<tr>
							<th>Product</th>
							<th>TDS</th>
							<th>SDS</th>
							<th class="th_ibc" style="padding: 8px 20px;">IBC</th>
							<th>Tambor</th>
							<th>BIG BAG</th>
							<th>Granel</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td class="tr_td">Asphalt MPI PG58-22</td>
							<td class="tr_td_d"><button>Download</button></td>
							<td class="tr_td_d"><button>Download</button></td>
							<td></td>
							<td rowspan="8" class="check"><img src="{{asset('frontend/img/check.svg')}}" alt=""></td>
							<td rowspan="3"  class="check"><img src="{{asset('frontend/img/check.svg')}}" alt=""></td>
							<td rowspan="3"  class="check"><img src="{{asset('frontend/img/check.svg')}}" alt=""></td>
						</tr>
						<tr>
							<td class="tr_td">Asphalt MPI PG64-22</td>
							<td class="tr_td_d"><button>Download</button></td>
							<td class="tr_td_d"><button>Download</button></td>
							<td></td>
						</tr>
						<tr>
							<td class="tr_td">Asphalt MPI PG70-22</td>
							<td class="tr_td_d"><button>Download</button></td>
							<td class="tr_td_d"><button>Download</button></td>
							<td></td>
						</tr>
						<tr>
							<td class="tr_td">Asphalt MPI PG70-28</td>
							<td class="tr_td_d"><button>Download</button></td>
							<td class="tr_td_d"><button>Download</button></td>

							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="tr_td">Asphalt MPI PG76-28</td>
							<td class="tr_td_d"><button>Download</button></td>
							<td class="tr_td_d"><button>Download</button></td>

							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="tr_td">Asphalt MPI PG82-22</td>
							<td class="tr_td_d"><button>Download</button></td>
							<td class="tr_td_d"><button>Download</button></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="tr_td">Asphalt MPI PG88-22</td>
							<td class="tr_td_d"><button>Download</button></td>
							<td class="tr_td_d"><button>Download</button></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr>
							<td class="tr_td">Asphalt MPI PG88-22</td>
							<td class="tr_td_d"><button>Download</button></td>
							<td class="tr_td_d"><button>Download</button></td>
							<td></td>
							<td></td>
						</tr>
						
						
						</tbody>
					</table>
					
				</div>
				<div class="cad9_area">
					<p>Cumplimiento AASHTO-M320</p>
				</div>
				
			</div>

		</section>
	<!-- Notes-area end -->   
	<!-- Notes-area start -->   
		<section class="pgac_sec_viscosity">
			<div class="container">
				<div class="pgac_title">
					<h2>Asphalt Emulsions</h2>
					<p> These emulsions are adaptable and eco-friendly, applicable for tasks like tack coats, chip seals, and cold mix asphalt. They adhere to ASTM-D2397,  AASHTO M140 and equivalent standards.</p>
				</div>
				<div class="table_area">
					<table class="table table-bordered">
						<thead>
						<tr>
							<th>Product</th>
							<th>TDS</th>
							<th>SDS</th>
							<th class="th_ibc" style="padding: 8px 20px;">IBC</th>
							<th>Tambor</th>
							<th>BIG BAG</th>
							<th>Granel</th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td class="tr_td ptc">MPI CRS-1</td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td rowspan="12" class="check"><img src="{{asset('frontend/img/check.svg')}}" alt=""></td>


					
							<td class="ptc"></td>
							<td class="ptc"></td>
							<td class="ptc"></td>
						</tr>
						<tr>
							<td class="tr_td ptc">MPI CRS-2</td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="ptc"></td>
							<td class="ptc"></td>
							<td class="ptc"></td>
						</tr>
						<tr>
							<td class="tr_td ptc">MPI CRS-1m</td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="ptc"></td>
							<td class="ptc"></td>
							<td class="ptc"></td>
						</tr>
						<tr>
							<td class="tr_td ptc">MPI CRS-2m</td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="ptc"></td>
							<td class="ptc"></td>
							<td class="ptc"></td>
							
						</tr>
						<tr>
							<td class="tr_td ptc">MPI CRS-0</td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="ptc"></td>
							<td class="ptc"></td>
							<td class="ptc"></td>
						</tr>
						<tr>
							<td class="tr_td ptc">MPI CRS-1</td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="ptc"></td>
							<td class="ptc"></td>
							<td class="ptc"></td>
						</tr>
						<tr>
							<td class="tr_td ptc">MPI CRS-1h</td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="ptc"></td>
							<td class="ptc"></td>
							<td class="ptc"></td>
						</tr>
						<tr>
							<td class="tr_td ptc">MPI CMS-m</td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="ptc"></td>
							<td class="ptc"></td>
							<td class="ptc"></td>
						</tr>
						<tr>
							<td class="tr_td ptc">MPI CMS-2</td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="ptc"></td>
							<td class="ptc"></td>
							<td class="ptc"></td>
						</tr>
						<tr>
							<td class="tr_td ptc">MPI CMS-2h</td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="ptc"></td>
							<td class="ptc"></td>
							<td class="ptc"></td>
						</tr>
						<tr>
							<td class="tr_td ptc">MPI CQS-1h</td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="ptc"></td>
							<td class="ptc"></td>
							<td class="ptc"></td>
						</tr>
						<tr>
							<td class="tr_td ptc">MPI CQS-1hm</td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="tr_td_d ptc"><button class="viscosity_btn">Download</button></td>
							<td class="ptc"></td>
							<td class="ptc"></td>
							<td class="ptc"></td>
						</tr>
						
						
						</tbody>
					</table>
					
				</div>
				<div class="cad9_area">
					<p>Cumplimiento AASHTO-M320</p>
				</div>
			</div>

		</section>
	<!-- Notes-area end -->   
 
	</div>

		

		<div class="responsive_table">
			<section class="pgac_sec">
				<div class="container">
					<div class="content_area">
						<div class="table_title">
							<h2>Penetration-Graded Asphalt Cement</h2>
							<p>These conventional asphalt cements are suitable for various paving needs and adhere to ASTM D946/D946M and equivalent standards, offering a reliable performance.</p>
						</div>
					</div>
					<div class="table_area">
						<table class="table table-bordered">
							<tbody>
								<tr><th>Product</th>
									<td style="margin-top: 15px;">Asphalt MPI 40/50</td>
									<td>Asphalt MPI 60/70</td>
									<td>Asphalt MPI 80/100</td>
								</tr>
								<tr><th>TDS</th>
									<td><button>Download</button></td>
									<td><button>Download</button></td>
									<td><button>Download</button></td>
								</tr>
								<tr><th>IBC</th>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr><th>Tambor</th>
									<td colspan="3" class="check"><img src="{{asset('frontend/img/Ok.svg')}}" alt=""></td>
									
								</tr>
								<tr><th class="bid_bag">BIG BAG</th>
									<td colspan="3" class="check"><img src="{{asset('frontend/img/Ok.svg')}}" alt=""></td>
									
								</tr>
								<tr><th>Granel</th>
									<td colspan="3" class="check"><img src="{{asset('frontend/img/Ok.svg')}}" alt=""></td>
									
								</tr>

									
									
									
								
							</tbody>
							</table>
							<p>Cumplimiento ASTM-D946</p>
				
				</div>
	
			</section>
			<section class="pgac_sec_m2">
				<div class="container">
					<div class="content_area">
						<div class="table_title">
							<h2>Penetration-Graded Asphalt Cement</h2>
							<p>Viscosity-Graded Asphalt Cement: These conventional asphalt cements are suitable for various paving needs and adhere to ASTM-D3381 and equivalent standards, offering a reliable performance.</p>
						</div>
					</div>
					<div class="table_area">
						<table class="table table-bordered">
							<tbody>
								<tr><th>Product</th>
									<td style="margin-top: 15px;">Asphalt MPI AC-20</td>
									<td>Asphalt MPI AC-30</td>
									<td>Asphalt MPI AC-40</td>
								</tr>
								<tr><th>TDS</th>
									<td><button class="viscosity_btn">Download</button></td>
									<td><button class="viscosity_btn">Download</button></td>
									<td><button class="viscosity_btn">Download</button></td>
								</tr>
								<tr><th>IBC</th>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr><th>Tambor</th>
									<td colspan="3" class="check"><img src="{{asset('frontend/img/Ok.svg')}}" alt=""></td>
									
								</tr>
								<tr><th class="bid_bag">BIG BAG</th>
									<td colspan="3" class="check"><img src="{{asset('frontend/img/Ok.svg')}}" alt=""></td>
									
								</tr>
								<tr><th>Granel</th>
									<td colspan="3" class="check"><img src="{{asset('frontend/img/Ok.svg')}}" alt=""></td>
									
								</tr>
							</tbody>
							</table>
							<p>Cumplimiento ASTM-D946</p>
				
				</div>
	
			</section>
			<section class="pgac_sec">
				<div class="container">
					<div class="content_area">
						<div class="table_title">
							<h2>Penetration-Graded Asphalt Cement</h2>
							<p>These conventional asphalt cements are suitable for various paving needs and adhere to ASTM D946/D946M and equivalent standards, offering a reliable performance.</p>
						</div>
					</div>
					<div class="table_area">
						<table class="table table-bordered">
							<tbody>
								<tr><th>Product</th>
									<td style="margin-top: 15px;">Asphalt MPI PG58-22</td>
									<td>Asphalt MPI PG64-22</td>
									<td>Asphalt MPI PG67-22</td>
								</tr>
								<tr><th>TDS</th>
									<td><button>Download</button></td>
									<td><button>Download</button></td>
									<td><button>Download</button></td>
								</tr>
								<tr><th>IBC</th>
									<td></td>
									<td></td>
									<td></td>
								</tr>
								<tr><th>Tambor</th>
									<td colspan="3" class="check"><img src="{{asset('frontend/img/Ok.svg')}}" alt="" class="ok"></td>
									
								</tr>
								<tr><th class="bid_bag">BIG BAG</th>
									<td colspan="3" class="check"><img src="{{asset('frontend/img/Ok.svg')}}" alt=""></td>
									
								</tr>
								<tr><th>Granel</th>
									<td colspan="3" class="check"><img src="{{asset('frontend/img/Ok.svg')}}" alt=""></td>
									
								</tr>
							</tbody>
							</table>
							<p>Cumplimiento ASTM-D946</p>
				</div>
			</section>
			<section class="pgac_sec_m2">
				<div class="container">
					<div class="content_area">
						<div class="table_title">
							<h2>Asphalt Emulsions</h2>
							<p> These emulsions are adaptable and eco-friendly, applicable for tasks like tack coats, chip seals, and cold mix asphalt. They adhere to ASTM-D2397,  AASHTO M140 and equivalent standards.</p>
						</div>
					</div>
					<div class="table_area">
						<table class="table table-bordered">
							<tbody>
								<tr><th>Product</th>
									<td style="margin-top: 15px;">MPI CRS-1</td>
									<td>MPI CRS-2</td>
									<td>MPI CRS-1m</td>
								</tr>
								<tr><th>TDS</th>
									<td><button class="viscosity_btn">Download</button></td>
									<td><button class="viscosity_btn">Download</button></td>
									<td><button class="viscosity_btn">Download</button></td>
								</tr>
								<tr><th>IBC</th>
									<td colspan="3" class="check"></td>
									
								</tr>
								<tr><th>Tambor</th>
									<td></td>
									<td></td>
									<td></td>
									
								</tr>
								<tr><th class="bid_bag">BIG BAG</th>
									<td></td>
									<td></td>
									<td></td>
									
								</tr>
								<tr><th>Granel</th>
									<td></td>
									<td></td>
									<td></td>
									
								</tr>
							</tbody>
							</table>
							<p>Cumplimiento ASTM-D946</p>
				</div>
			</section>
		</div>
		

		<!-- Notes-area start -->   
		<section class="rnkm_sec">
			<div class="container">
				<div class="row">
					<div class="col-md-7">
						<div class="rekm_left_area popular_item aos-init aos-animate" data-aos="fade-right">
							<div class="rq_title">
								<h2>Request a Quote</h2>
							</div>
							<div class="rq_content">
								<p>For a detailed and customized quote that caters specifically to the nuances of your project, just send us an email.</p><br>
								<p>Our team is ready to provide you with a tailored solution that fits your project’s unique requirements.</p>
							</div>
							
							<div class="search rq_search">
								<input type="text" class="form-control rq_search_input" placeholder="Type your email ">
								<a href=""><button class="btn yello_btn">Request a Quote <img src="{{asset('frontend/img/r_arrow_bold.svg')}}" alt=""></i></button></a>
							</div>

							<div class=" rq_search_m">					
								<input type="text" class="form-control rq_search_input" placeholder="Type your email ">
								<a href=""><button class="btn yello_btn yello_btn_m">Request a Quote <img src="{{asset('frontend/img/r_arrow_bold.svg')}}" alt=""></i></button></a>								
							</div>
						</div>
					</div>
					<div class="col-md-5">
						<div class="rekm_right_area popular_item aos-init aos-animate" data-aos="fade-left">
							<div class="nkm_title">
								<h2>Notes to Keep in Mind</h2>
							</div>
							<div class="nkm_content">
								<ul>
									<li>Adhesion Modifiers can be included according to client's needs.</li>
									<li>If a formulation is required and not listed, contact a Consultant for help.</li>
									<li>Handling instructions are specified in the product's technical data sheet.</li>
								</ul>
							</div>
							<div class="get_tuch_area">
								<div class="gt_title">
									<h2>Get in Touch</h2>
								</div>
								<div class="gt_title_m">
									<h2>Contact</h2>
								</div>
								<div class="social_area">
									<div class="row">
										<div class="col-md-6">
											<div class="social_left">
												<h3>Ricardo Carreño</h3>
												<ul>
													<li><img src="{{asset('frontend/img/phn.svg')}}" alt=""><a href="tel:+57 3203760947">+57 3203760947</a></li>
													<li><img src="{{asset('frontend/img/email.svg')}}" alt=""><a href="mailto:ricardo@mpi-ac.com">ricardo@mpi-ac.com</a></li>
												</ul>
											</div>
										</div>
										<div class="col-md-6">
											<div class="social_left">
												<h3>Natalia Méndez</h3>
												<ul>
													<li><img src="{{asset('frontend/img/phn.svg')}}" alt=""><a href="tel:+57 3203760947">+1 3107953694</a></li>
													<li><img src="{{asset('frontend/img/email.svg')}}" alt=""><a href="mailto:ricardo@mpi-ac.com">natalia@mpi-ac.com</a></li>
												</ul>
											</div>
										</div>
										
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>

		</section>
	<!-- Notes-area end -->  

	</section>

    </section>
    <!-- main_area end -->

       

@endsection