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
		<div class="container white-color">						
			<div class="row">
				{{-- <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2"> --}}
				<div class="col-md-12 col-lg-12">
					<div class="hero-txt text-center">

						<!-- Title -->
						<h3 class="h3-lg wow fadeInUp"  data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
							{{$posts[0]->title}}
						</h3>

						<!-- Text -->
						<p class="p-md wow fadeInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                            {{$posts[0]->sub_title}}
						</p>

					</div>
				</div>	
			</div>	 <!-- End row -->
		</div>	 <!-- End container --> 
	</div>	 <!-- END HERO-4 TEXT -->
</section>

<section id="blog-1" class="wide-60 blog-section division" style="margin-top: 0px;">				
    <div class="container-fluid">


        <!-- SECTION TITLE -->	
        <div class="row">	

            @if($posts[1]->image != null )
                <div class="col-lg-6">
                    <img src="{{ URL::asset('storage/app/public/'.$posts[1]->image.'') }}" width="100%" alt="">              
                </div>
                <div class="col-lg-6 section-title mt-50">
            @else
                <div class="col-lg-12 section-title mt-50">
            @endif  
           
                <!-- Title 	-->	
                <h3 class="h3-md">{{$posts[1]->title}}</h3>	
                <!-- Text -->
                <p class="p-md" style="font-size: 28px">{!!$posts[1]->description!!}</p>                    
            </div>
        </div>	 

        <div class="row mt-100">	    
            {{-- left image --}}
            @if($posts[2]->image != null )
                <div class="col-lg-6">
            @else
                <div class="col-lg-12">
            @endif 

                <!-- Title 	-->	
                <h3 class="h3-md">{{$posts[2]->title}}</h3>	
                <!-- Text -->
                <p class="p-md" style="font-size: 28px">{!!$posts[2]->description!!}
                </p>   
            {{-- right image --}}
            @if($posts[2]->image != null )
                </div>
                <div class="col-lg-6">
                    <img src="{{ URL::asset('storage/app/public/'.$posts[2]->image.'') }}" width="100%" alt=""> 
                </div>   
            @else
                </div>        
            @endif  


        </div>	 




    </div>	   <!-- End container -->		
</section>

		
 
@endsection