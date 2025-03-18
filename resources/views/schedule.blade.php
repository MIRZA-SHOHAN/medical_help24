<?php $posts = DB::table('posts')->where('page', 'Schedule')->where('active', 'on')->get(); ?>
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

        <div class="row">
            <div class="col-md-10 col-lg-8 offset-md-1 offset-lg-2">
                <div class="hero-txt text-center">

                    <!-- Title -->
                    <br>
                 
						<h3 class="h3-lg wow fadeInUp"  data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
							{{$posts[0]->title}}
						</h3>
						<p class="p-md wow fadeInUp d-none" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                            {{$posts[0]->sub_title}}
						</p>

                </div> 
            </div>	
        </div>	 <!-- End row -->    
         
	</div>	 <!-- END HERO-4 TEXT -->

</section>


<section id="services-2" class="services-section division">		

              
    <div class="container">

         <div class="row mt-50">
             
            <div class="col-lg-10 offset-lg-1 section-title">	
                {!! $posts[0]->description !!}
            </div>
            
        <style>
            .bw-session__description p {
                font-size: 14px!important;
            }
            .bw-session__bio p {
                font-size: 14px!important;
            }
        </style>
            
             <!-- iframe code start here -->
            <script src="https://widgets.mindbodyonline.com/javascripts/healcode.js" type="text/javascript"></script>

<healcode-widget data-type="schedules" data-widget-partner="object" data-widget-id="331721367b71" data-widget-version="1" ></healcode-widget>
            <!-- iframe code end here -->

            <table class="d-none table table-hover">
                {{-- <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead> --}}
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>
                       <h3>2:30 <span class="sm_ttl">PM</span></h3>                      
                        <p class="class_b_p">Start</p>
                    </td>
                    <td>
                        <h3>2:30 <span class="sm_ttl">PM</span></h3>   
                        <p class="class_b_p">End</p>
                    </td>
                    <td>
                        <h3 class="class-title">Vinyasa Flow</h3>
                        <p class="class_b_p">Address</p>
                    </td>
                    <td><button class="btn btn-info" href="">Reserve</button>
                    
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>
                       <h3>2:30 <span class="sm_ttl">PM</span></h3>                      
                        <p class="class_b_p">Start</p>
                    </td>
                    <td>
                        <h3>2:30 <span class="sm_ttl">PM</span></h3>   
                        <p class="class_b_p">End</p>
                    </td>
                    <td>
                        <h3 class="class-title">Vinyasa Flow</h3>
                        <p class="class_b_p">Address</p>
                    </td>
                    <td><button class="btn btn-info" href="">Reserve</button>
                    
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>
                       <h3>2:30 <span class="sm_ttl">PM</span></h3>                      
                        <p class="class_b_p">Start</p>
                    </td>
                    <td>
                        <h3>2:30 <span class="sm_ttl">PM</span></h3>   
                        <p class="class_b_p">End</p>
                    </td>
                    <td>
                        <h3 class="class-title">Vinyasa Flow</h3>
                        <p class="class_b_p">Address</p>
                    </td>
                    <td><button class="btn btn-info" href="">Reserve</button>
                    
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>
                       <h3>2:30 <span class="sm_ttl">PM</span></h3>                      
                        <p class="class_b_p">Start</p>
                    </td>
                    <td>
                        <h3>2:30 <span class="sm_ttl">PM</span></h3>   
                        <p class="class_b_p">End</p>
                    </td>
                    <td>
                        <h3 class="class-title">Vinyasa Flow</h3>
                        <p class="class_b_p">Address</p>
                    </td>
                    <td><button class="btn btn-info" href="">Reserve</button>
                    
                    </td>
                </tr>
                 
                </tbody>
              </table>


         </div>	   <!-- End row -->		
     </div>	   <!-- End container -->		
</section>




 @endsection