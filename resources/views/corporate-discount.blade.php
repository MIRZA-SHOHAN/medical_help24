<?php $posts = DB::table('posts')->where('page', 'Corporate')->where('active', 'on')->get(); ?>
@extends('layouts.master')
@section('main_content')
<style>
#hero-4-txt {
	background-image: url('{{ URL::asset('storage/app/public/'.$posts[0]->image.'') }}')!important;
	padding-top: 230px;
    padding-bottom: 150px;
} 
a.action_link {
    background: #FAC420;
}
div#partnershipForm label {
    font-weight: 500;
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

						
						<h3 class="h3-lg wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                            {{$posts[0]->title}}
						</h3>       
                                         					
						<p class="p-md wow fadeInUp d-none" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                            {{$posts[0]->sub_title}}
						</p>
                        <br> <br>

                        <a href="#partnershipForm" class="action_link">FILL OUT PARTNERSHIP FORM</a>

					</div>
				</div>	
			</div>	 <!-- End row -->
		</div>	 <!-- End container --> 
	</div>	 <!-- END HERO-4 TEXT -->
</section>

<section id="blog-1" class="wide-60 blog-section division" style="margin-top: 0px;">				
   
   
    <div class="container">
        
        @include('_message')    

        <div class="row">	
            <div class="col-lg-12 text-center">	
                          
                    <h2>PROUD PARTNERS</h2>

                    <img src="https://fh-sites.imgix.net/sites/4316/2020/07/28162542/Perrys-Logo.jpg?auto=compress%2Cformat&w=1200&fit=max" alt="">

                    <img src="https://fh-sites.imgix.net/sites/4316/2020/07/28162517/Viceroy_logo_SANTA_MONICA-010-4f218fcb50.jpg?auto=compress%2Cformat&w=1200&fit=max" alt="">
                    <img src="https://fh-sites.imgix.net/sites/4316/2020/07/28162553/logo-nobg.png?auto=compress%2Cformat&w=1200&fit=max" alt="">

                    <img src="https://fh-sites.imgix.net/sites/4316/2020/07/28162459/Le-Meridian-Logo.jpg?auto=compress%2Cformat&w=1200&fit=max" alt="">
                    <img src="https://fh-sites.imgix.net/sites/4316/2020/07/28162508/Hotel-Erwin-Logo.jpg?auto=compress%2Cformat&w=1200&fit=max" alt="">
                    <img src="https://fh-sites.imgix.net/sites/4316/2020/07/28162512/Spanx-Logo.jpg?auto=compress%2Cformat&w=1200&fit=max" alt="">
                    <img src="https://fh-sites.imgix.net/sites/4316/2020/07/28162515/Air-Venice-Logo.jpg?auto=compress%2Cformat&w=1200&fit=max" alt="">
                    <img src="https://fh-sites.imgix.net/sites/4316/2020/07/28165657/Pinterest-Logo.png?auto=compress%2Cformat&w=1200&fit=max" alt="">

                    <img src="https://fh-sites.imgix.net/sites/4316/2020/07/28165403/Jordan-Logo.png?auto=compress%2Cformat&w=1200&fit=max" alt="">
                    <img src="https://fh-sites.imgix.net/sites/4316/2020/07/28165401/Nike-Logo.png?auto=compress%2Cformat&w=1200&fit=max" alt="">
                    <img src="https://fh-sites.imgix.net/sites/4316/2020/07/28165357/SMTT-Logo.png?auto=compress%2Cformat&w=1200&fit=max" alt="">
                    <img src="https://fh-sites.imgix.net/sites/4316/2020/07/28165355/Discover-LA-Logo.png?auto=compress%2Cformat&w=1200&fit=max" alt="">
                    <img src="https://fh-sites.imgix.net/sites/4316/2020/07/28165353/Visit-California.png?auto=compress%2Cformat&w=1200&fit=max" alt="">
                    <img src="https://fh-sites.imgix.net/sites/4316/2020/07/28165351/13138756_1726430080908389_59401350322936.png?auto=compress%2Cformat&w=1200&fit=max" alt="">
                    <img src="https://fh-sites.imgix.net/sites/4316/2020/07/28170200/Mesa_Public_Schools_logo.png?auto=compress%2Cformat&w=1200&fit=max" alt="">
                    <img src="https://fh-sites.imgix.net/sites/4316/2020/07/28165346/logo_2x.png?auto=compress%2Cformat&w=1200&fit=max" alt="">
                    <img src="https://fh-sites.imgix.net/sites/4316/2020/07/28165703/Brookdale-Senior-Logo.png?auto=compress%2Cformat&w=1200&fit=max" alt="">
                    <img src="https://fh-sites.imgix.net/sites/4316/2020/07/28165341/LA-Any-Day-Logo.png?auto=compress%2Cformat&w=1200&fit=max" alt="">
                    <img src="{{asset('frontend/images/ath.png')}}" alt="">
                    
            </div>
        </div>

        
        
        <div id="partnershipForm">
            <br> <br>  <br> <br>
            <h2 style="text-align: center">PARTNERSHIP FORM</h2>

            <div id="message"></div>

            <form action="" method="post" style="padding: 0px 5%; margin-top:55px; border: 1px solid #ced4da;
            padding: 50px; border-radius: 5px;">
            @csrf
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter email address">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter phone number">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="">Select Your Region</label>
                            <select name="cars" name="region" id="subject" class="form-control">
                                <option value="Atlanta">Atlanta</option>
                                <option value="Baltimore">Baltimore</option>
                                <option value="Boston">Boston</option>
                                <option value="Los Angeles">Los Angeles</option>
                                <option value="New York">New York</option>
                                <option value="Northern California">Northern California</option>
                                <option value="Washington Dc">Washington Dc</option>
                              </select>                              
                        </div>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="">Enter Your Message Below</label>
                            <textarea class="form-control" name="message" id="message" rows="3" placeholder="Hi there .."></textarea>
                          </div>
                    </div>                    
                </div>
               
                <div class="form-group">
                    <button class="btn btn-md cbtn" id="contactFormBtn">Submit</button>
                </div>
            </form>

        </div>

        </div>
            
        </div>	 

     


    </div>	   <!-- End container -->		
</section>

		
 
@endsection