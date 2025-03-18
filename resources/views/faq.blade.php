<?php $posts = DB::table('posts')->where('page', 'FAQ')->where('active', 'on')->get(); ?>
@extends('layouts.master')
@section('main_content')
<style>
/* #hero-4-txt {
	background-image: url('{{ URL::asset('storage/app/public/'.$posts[0]->image.'') }}')!important;
	padding-top: 230px;
    padding-bottom: 150px;
}  */

#hero-4-txt {
       background-image: url('https://www.beachyogasocal.com/storage/app/public/images/o6sQXSf69XO0jHh46hOyvv5etTZtvX54ClIBiqua.jpg')!important;	  
   } 
a.action_link {
    background: #FAC420;
}
div#partnershipForm label {
    font-weight: 500;
}
</style>

<style>
      h4 {
    font-family: Arial, Verdana;
    font-weight: 800;
    font-size: 2.5rem;
    color: #091f2f;
    text-transform: uppercase;
}
.accordion-section .panel-default > .panel-heading {
    border: 0;
    background: #f4f4f4;
    padding: 0;
}
.accordion-section .panel-default .panel-title a {
    display: block;
    font-style: italic;
    font-size: 1.0rem;
}
.accordion-section .panel-default .panel-title a:after {
    font-family: 'FontAwesome';
    font-style: normal;
    font-size: 3rem;
    content: "\f106";
    color: #1f7de2;
    float: right;
    margin-top: -12px;
}
.accordion-section .panel-default .panel-title a.collapsed:after {
    content: "\f107";
}
.accordion-section .panel-default .panel-body {
    font-size: 1.2rem;
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

					</div>
				</div>	
			</div>	 <!-- End row -->
		</div>	 <!-- End container --> 

        
<div class="accordion-section clearfix mt-3" aria-label="Question Accordions">
    <div class="container">   
        <div class="row">	
            <div class="col-lg-12 text-center">	               
                    <h2>{{$posts[0]->sub_title}}</h2>
            </div>
        </div>

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">


         @php
             $data = DB::table('data_lookups')->where('data_type', 'FAQ')->get();
         @endphp 
         @foreach ($data as $item)
         <div class="panel panel-default">
            <div class="panel-heading p-3 mb-3" role="tab" id="heading0">
              <h4 class="panel-title">
                <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$loop->iteration}}" aria-expanded="true" aria-controls="collapse0">
                    {{$item->title}}
                </a>
              </h4>
            </div>
            <div id="collapse{{$loop->iteration}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading0">
              <div class="panel-body px-3 mb-4">
                {!! $item->description !!}
              </div>
            </div>
        </div>
         @endforeach

        </div>
    
    </div>
</div><var>

</var>
	</div>	 <!-- END HERO-4 TEXT -->
</section>





<br>
 
@endsection