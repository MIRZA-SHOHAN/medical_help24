
<?php $posts = DB::table('posts')->where('page', 'Home')->where('active', 'on')->get(); ?>
@extends('layouts.master')
@section('main_content')
<style>
#hero-4-txt {
	/* background-image: url('{{ URL::asset('storage/app/public/'.$posts[0]->image.'') }}')!important; */
	/* background-image: url('{{ URL::asset('frontend/images/Walter-15 Sec Video.mp4') }}')!important; */
} 

section#hero-4 {
	margin-top: -500px;
	margin-bottom: 350px;
}

@media (max-width: 767px){
	section#hero-4 {
	margin-top: -500px;
	margin-bottom: 250px;
	}
    section#cta-2 {
    margin-top: -95px!important;
}
}

</style>


<div class="custom-row">
	<div class="col-xs-12 vert-center-container" id="divAboveTheFold-1" style="height: 800px;">
	  <video autoplay="" loop="" muted="" playsinline="" style="object-fit: cover; width: 100%; height: 800px;" class="img-responsive" id="divAboveTheFold-2">
		<source src="https://www.beachyogasocal.com/frontend/images/Walter-15 Sec Video.mp4">
	  </video>
	</div>  
  </div> 

<section id="hero-4" class="hero-section" style="">
	<!-- HERO-4 TEXT -->
	<div id="hero-4-txt content" class="bg-scroll division">
		<div class="container white-color">						
			<div class="row">
				{{-- <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2"> --}}
				<div class="col-md-12 col-lg-12">
					<div class="hero-txt text-center">

						<h6 style="margin-bottom: 10px; font-size:19px; margin-left: 6px;">{{$posts[0]->sub_title}}</h6>

						<h3 class="h3-lg wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible;animation-delay: 0.5s; animation-name: fadeInUp;">
							{{$posts[0]->title}}
						</h3>	

						@include('_banner_menu')

					</div>
				</div>	
			</div>	 <!-- End row -->
		</div>	 <!-- End container --> 
	</div>	 <!-- END HERO-4 TEXT -->  
</section> 

<section id="blog-1" class="blog-section division" style="margin-top: 0px;">				
    <div class="container">


        <!-- SECTION TITLE -->	
        <div class="row">	
            <div class="col-lg-10 offset-lg-1 section-title">
                <h3 class="p-md" style="color: rgb(37, 100, 169) !important;"> Wellness & Waves </h3>
				<p class="text-center">We love incorporating the ocean, sand and sun into our classes. <br> Classes are for all levels of experience.</p>

            </div>
        </div>	 <!-- END SECTION TITLE -->	


         <!-- Class -->
         <div class="row" style="margin-top:0px;">

            @php
                $classes = DB::table('classes')->where('active', 'on')->get();
            @endphp
            @foreach ($classes as $item)
           
            <div class="col-md-6 col-lg-6" id="{{$item->custom_id}}">
              
                <div class="blog-post wow fadeInUp">                  
                    <!-- BLOG POST IMAGE -->
                    <div class="blog-post-img">
                       <img class="img-fluid" src="{{ URL::asset('storage/app/public/'.$item->image.'') }}" alt="blog-post-image">	
                   </div> 

                     <!-- BLOG POST TITLE -->
                     <div class="blog-post-txt mt-2">
                       <!-- Post Data -->
                       <span>{{$item->date_time}}</span>

                       <!-- Post Title -->
                       <h5 class="h5-sm">{{$item->title}}</h5>

                       <!-- Post Text -->
                       <p>{{$item->short_description}}</p>

                   </div>


                   <!-- BLOG POST LINK -->
                   <div class="blog-post-link">
                       <div class="row">
                           <div class="col-md-6">
                               <h5 class="h5-xs"><a href="{{$item->link_action}}" class="cbtn">{{$item->link_title}}</a></h5>   
                           </div>
                           <div class="col-md-6">
                               <h5 class="h5-xs"><a href="{{URL::to('class')}}/{{$item->id}}" class="cbtn2">Learn More</a></h5>   
                           </div>
                       </div>
                   </div>
               </div>
            </div>
         
            
            @endforeach

          
                         
             
        </div>	<!-- END Class -->


    </div>	   <!-- End container -->		
</section>

 
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});  
</script>
<style>
	.modal-body img{
		max-width: 100%;
	}
	.modal-body p{
		font-size: 22px;
		font-weight: 600;
		color: #fff;
	}
.pop_left {
    background: #28A8E6;
	margin: 0px -10px;
}
.pop_right {
    background: #F4A805;
	margin: 0px -10px;
}

</style>


    <style>
            @font-face {
        font-family: Bahnschrift;
        src: url(assets/fonts/bahnschrift.ttf);
    }
    @font-face {
        font-family: Acumin;
        src: url(assets/fonts/Acumin Variable Concept.ttf);
    }
        @font-face {
        font-family: BahnschriftLight;
        src: url(assets/fonts/BAHNSCHRIFT3.ttf);
        font-weight:light;
    }
    
    
    .modal-content{
        background-image: linear-gradient(65deg, #fff 50%, #20adce 50%);
    }
    .moondiv{
        display: flex;
        justify-content: center;
    }
    .popupcenter{
        background: #172a44;
        margin: 10px 60px;
        padding: 30px 60px;
        border-radius: 40px;
        margin-bottom: 50px;
        box-shadow: 6px 1px 11px #0000008c;
    }
    .popupheadtext{
        text-align:center;
        color: #76f4ca;
        text-transform:uppercase;
        font-size:30px;
        font-family: Bahnschrift;
    }
    .popupdate{
        text-align:center;
        color: #ffffff;
        text-transform:uppercase;
        font-size:26px;
        font-family: Bahnschrift;
    }
    .popupjoinbtn{
        background:#20adce;
        color:#fff;
        border:2px solid #fff;
        border-radius:40px;
        display: flex;
        justify-content: center;
        width: 70%;
        padding: 10px 20px;
        margin: 0 auto;
        font-family: Acumin;
        font-size:27px;
    }

    .modal-dialog{
        max-width:600px !important;
    }
    .close {
        float: right;
        font-size: 2.5rem;
        color: #fff;
        text-shadow: 0 1px 0 #fff;
        opacity: 1;
        padding: 5px 10px !important;
    }
    .sectionspacing{
        margin-top:30px;
        margin-bottom:30px;
    }
    
     div#myModal {
        display: none!important;
    }

    </style>
    <script>
        $(document).ready(function(){
            // $("#myModal").modal('show');
        });
    </script>
<div id="myModal" class="modal fade show" aria-modal="true" style="display: block;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div>
                <button type="button" class="close" data-dismiss="modal">×</button>
            </div>
            <div class="popupcenter">
                <div class="moondiv">
                    <img src="{{ URL::asset('frontend/images/moon.png') }}" alt="Moon" width="150" height="auto">
                
                </div>
                
                <div>
                     <h2 class="popupheadtext">New Moon Ceremony 1</h2>
                     <h2 class="popupdate">4 November</h2>
                     <h2 class="popupdate"> Thursday 05:00 - 06:15 pm</h2>
                </div>
                <div class="sectionspacing">
                    <button onclick="location.href=&quot;https://www.beachyogasocal.com/events&quot;" class="popupjoinbtn" type="button">JOIN US</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<div class="modal-backdrop fade show"></div>-->


@endsection