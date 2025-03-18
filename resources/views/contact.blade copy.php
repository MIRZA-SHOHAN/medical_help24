@php $posts = DB::table('posts')->where('page', 'Contact')->where('active', 'on')->get();@endphp
<?php
use App\Models\Setting;
$settings = Setting::find(1);
?>

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

						<h6>{{$posts[0]->sub_title}}</h6>

						<h3 class="h3-lg wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible;animation-delay: 0.5s; animation-name: fadeInUp;">
							{{$posts[0]->title}}
						</h3>
					

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
         <div class="row">

          @include('_message')

<style>
.location_area label {
    display: none;
}
.form-control {
    display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 2.0;
}

.location_area {
    background: #389BF2;
    padding: 15px;
    /* border-right: 30px solid #FAC420; */
}
.location_area_right label {
    display: none;
}
.location_area img{
  width: 35px!important;
}
h5.h5-sm {
    font-size: 1.15rem;
}
h5.h5-sm, h5.h5-sm a {
    color: #fff;
}
</style>

             <div class="col-md-6 col-lg-6">
                 <div class="location_area" >

                    <div class="c8-boxes">

                      <!-- CONTENT BOX #1 -->
                      <div class="cbox-2 box-icon-sm wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">		
                        
                        <!-- Icon -->
                        <img src="https://img.icons8.com/external-kiranshastry-lineal-kiranshastry/64/000000/external-email-interface-kiranshastry-lineal-kiranshastry.png" style="width: 50px"/>
      
                         <!-- Text -->
                        <div class="cbox-2-txt"> 
                          <h5 class="h5-sm mt-10"><a href="mailto:{{$settings->email}}">{{$settings->email}}</a></h5>      
                        </div>
      
                      </div>	
                      <div class="cbox-2 box-icon-sm wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">		
                        
                        <!-- Icon -->
                        <img src="https://img.icons8.com/ios/50/000000/apple-phone.png"/>
      
                         <!-- Text --> 
                        <div class="cbox-2-txt"> 
                          <h5 class="h5-sm mt-10"><a href="">
                            {{$settings->mobile}}</a></h5>      
                        </div>
       
                      </div>	
                      <div class="cbox-2 box-icon-sm wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">		
                        
                        <!-- Icon -->
                        <img src="https://img.icons8.com/ios/50/000000/address--v1.png"/>
      
                         <!-- Text -->
                        <div class="cbox-2-txt"> 
                          <h5 class="h5-sm"><a href="">{{$settings->address}}</a></h5>      
                        </div>
      
                      </div>	
      
      
      
                    </div>
                  </div>
             </div>	
             
             <style>
                 input#prospects_first_name, input#prospects_last_name, input#prospects_email, input#prospects_mobile_phone, select#prospects_referred_by {
                    width: 300px;
                    height: 35px;
                }
                textarea#prospects_notes {
                    width: 300px;
                }
             </style>

         
             <div class="col-md-6 col-lg-6">
                <div class="location_area_right">
                  <!--@include('_contact_form1')-->
                  <script src="https://widgets.mindbodyonline.com/javascripts/healcode.js" type="text/javascript"></script>
                  <healcode-widget data-type="prospects" data-widget-partner="object" data-widget-id="33423067b71" data-widget-version="0" ></healcode-widget>
                  
                </div>
             </div>	
         
             
        </div>


    </div>	   <!-- End container -->		
</section>

		
 
@endsection