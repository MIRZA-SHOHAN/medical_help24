@extends('layouts.master')
@section('main_content')
<style>
#hero-4-txt {
	background-image: url('{{ URL::asset('storage/app/public/'.$data->image.'') }}')!important;
    padding-top: 100px!important;
    padding-bottom: 100px!important;
} 
</style>


<style>
    .class_side_bar span {
    font-weight: 600;
}

a.btn_next {
    float: right;
    font-weight: 600;
     /* background: #2aabe2;
    padding: 15px;
    color: #fcfcfc; */
}

a.btn_prev {
    float: left;
    font-weight: 600;
     /* background: #2aabe2;
    padding: 15px;
    color: #fcfcfc; */
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

						<!-- Sub Title -->
                        <h5 class="mt-50 d-none"  data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
							{{$data->sub_title}}
						</h5>
						<!-- Title -->
						<h3 class="h3-lg wow fadeInUp"  data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
							{{$data->title}}
						</h3>

						<!-- Text -->
						<p class="p-md wow fadeInUp d-none" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                            {{$data->short_description}}
						</p>

					</div>
				</div>	
			</div>	 <!-- End row -->
		</div>	 <!-- End container --> 
	</div>	 <!-- END HERO-4 TEXT -->
</section>

<section id="blog-1" class="wide-60 blog-section division" style="margin-top: 0px;">				
    <div class="container">


        <!-- SECTION TITLE -->	
        <div class="row">	           
            <div class="col-md-8 col-lg-8">
                <div class="hero-txt text-left">

                    <!-- Title -->
                    <h3 class="h3-lg wow fadeInUp"  data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                        {{$data->title}}
                    </h3>

                    <!-- Text -->
                    <p class="p-md wow fadeInUp" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeInUp;">
                        {!!$data->description!!}
                    </p>

                </div>
            </div>	
            <div class="col-md-4 col-lg-4 mt-60 class_side_bar">
                <h3>Information:</h3>
                <p><span>Author:</span>  {{$data->author}}</p>
                <p><span>Category:</span>  {{$data->category}}</p>
                <p><span>Teacher:</span>  {{$data->trainer}}</p>
                <hr>
                 <h3>Class Time:</h3>
                <p>{{$data->date_time}}</p>

                <hr>
                <br>
                <h5 class="h5-xs"><a href="{{$data->link_action}}" class="cbtn"`>{{$data->link_title}}</a></h5>  
                @php
                    $class = DB::table('classes')     
                    ->where('active', 'on')
                    ->where('id', '<', $data->id)
                    ->orderBy('id', 'desc')
                    ->first(); 
                @endphp 
                @if ($class)
                    <a href="{{URL::to('class')}}/{{$class->id}}" class="btn_prev" title="Previous Class">< {{$class->title}}</a>
                @endif
                    
                @php
                    $class = DB::table('classes')     
                    ->where('active', 'on')
                    ->where('id', '>', $data->id)
                    ->orderBy('id', 'asc')
                    ->first(); 
                @endphp 
                @if ($class)
                    <a href="{{URL::to('class')}}/{{$class->id}}" class="btn_next" title="Next Class">{{$class->title}} ></a>
                @endif
                
            </div> 
        </div>	
        
        <!-- End container -->		
</section>

		
 
@endsection