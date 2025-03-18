
<?php $posts = DB::table('posts')->where('page', 'Pricing')->where('active', 'on')->get(); ?>
@extends('layouts.master')
@section('main_content')
		
<style>
    #hero-4-txt {
       background-image: url('{{ URL::asset('storage/app/public/'.$posts[0]->image.'') }}')!important;	  
   } 
</style> 

<section id="hero-4" class="hero-section">
	<!-- HERO-4 TEXT -->
	<div id="hero-4-txt" class="bg-scroll division">

        <div class="row">
            <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                <div class="hero-txt text-center">

                    <h6 class="d-none">{{$posts[0]->sub_title}}</h6>

                    <h3 class="h3-lg wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible;animation-delay: 0.5s; animation-name: fadeInUp;">
                        {{$posts[0]->title}}
                    </h3>

                </div>
            </div>	
        </div>	 <!-- End row -->
        
		
        
          <div class="row pricing-row">

        @foreach ($data as $item)   
            <!-- STARTER PRICING PLAN -->
            <div class="col-md-4">
                <div class="pricing-table wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">				
                                            
                    <!-- Pricing Plan  -->
                    <div class="pricing-title">
                        <h4 class="h4-xs">{{$item->title}}</h4>									
                    </div>	
                                                                                
                    <!-- Pricing Plan Features  -->
                    <ul class="features text-center">
                        <li>{!!$item->description!!}</li>		
                    </ul>

                    <!-- Plan Price  -->
                    <div class="pricing-plan mb-25">								
                        <sup>$</sup>								
                        <span class="price">{{$item->price}}</span>
                        <sup class="pricing-coins">00</sup>
                        <p class="p-md grey-color">{{$item->sub_title}}</p>
                    </div>	

                    <!-- Pricing Table Button  -->
                    <a href="{{$item->link_action}}" class="btn btn-sm btn-tra-black black-hover">{{$item->link_title}}</a>

                </div>
            </div>	<!-- END STARTER PRICING PLAN -->
        @endforeach


            {{-- <!-- BASIC PRICING PLAN -->
            <div class="col-md-4">
                <div class="pricing-table highlight wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">

                    <!-- Pricing Plan  -->
                    <div class="pricing-title">
                        <h4 class="h4-xs">MINI - MEMBERSHIP</h4>									
                    </div>				
                                                                                        
                    <!-- Pricing Plan Features  -->
                    <ul class="features">
                        <li>4 classes per month</li>								
                    </ul>

                    <!-- Plan Price  -->
                    <div class="pricing-plan mb-25">	
                        <sup>$</sup>								
                        <span class="price">69</span>
                        <sup class="pricing-coins">00</sup>
                        <p class="p-md grey-color">MONTHLY RECURRING</p>
                    </div>

                    <!-- Pricing Table Button  -->
                    <a href="#" class="btn btn-sm btn-theme black-hover">Get Started Now</a>
                                    
                </div>
            </div>	<!-- END BASIC PRICING PLAN --> --}}



        </div>	<!-- End row -->
	</div>	 <!-- END HERO-4 TEXT -->

</section>

 @endsection