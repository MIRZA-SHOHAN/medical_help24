@extends('layouts.master')
@section('main_content')

  <section class="main">	    
    <!-- main_area start -->
    <section class="main_area_story" style="padding-bottom: 0px;">
        @include('_header')

        <!-- hero-area start -->
        <section class="hero-area">
            <div class="container">
                <div class="">
                    <div class="row">
                         <div class="col-lg-6 col-md-6">
                            <div class="project_left">

                                <h2>{!! $banner->title !!}</h2>

                                <!-- <h1 class="story_title_m" style="display: none;">So, Who Are We, You <span>Wonder?</span> </h1> -->
                                <div class="project_right_text">
                                    <p>{{$banner->description}}</p>
                                </div>
                            </div>	
                            <div class="btn_d">
                                <!-- <a href="#!" id="conversation-badge" onclick='openWidget()' class="custom_btn btn_step"> Ask Question</a> -->
                                {{-- <button class="custom_btn">Ask Question</button> --}}
                                <a href="{{$banner->link_action}}"><button class="custom_btn" id="chatWidget" onclick='openWidget()'>{{$banner->link_title}}</button></a>
                            </div>								
                            <div class="btn_m">
                                <!-- <a href="#!" id="conversation-badge" onclick='openWidget()' class="custom_btn btn_step" >Chat & Ask Question</a> -->
                                <button class="custom_btn" id="chatWidget2"  onclick='openWidget()'>Chat & Ask Question</button>
                            </div>								
                            
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="image_part_d">
                                <img src="{{ URL::asset('storage/app/public/'.$banner->image.'') }}" alt="{{$banner->title}}" style="width: 780px; height: 404px;">
                            </div>							
                            <div class="image_part_m">
                                <img src="{{asset('frontend/img/step_main.png')}}" alt="" style="width: 100%; margin-left: 25px;">
                            </div>							
                        </div>
                        
                    </div>
                </div>

            </div>
        </section>
        <!-- hero-area end -->

    </section>
    <!-- main_area end -->

    @foreach ($posts as $item)
 
    <!-- step1__area start -->
        <section class="step__area @if ($loop->iteration == 1) step_area_first @endif"> 
            <div class="container">
                <div class="row">
                        @if ($loop->iteration % 2 == 1)
                            <div class="col-lg-6 col-md-6">
                                <div class="step_left_part step_img_area img_n">
                                    <img src="{{ URL::asset('storage/app/public/'.$item->image.'') }}" class="img_n" alt="{{$item->title}}" />
                                    <img src="{{asset('frontend/img/pipe.png')}}" class="pipe_r"/>									
                                </div>								
                            </div>
                            <div class="col-lg-6 col-md-6">	
                                <div class="step_right_part">
                                    <div class="step_no">
                                        <h4 class="project_sub_ttl"><span >{{$item->sub_title}}</span></h4>
                                    </div>
                                    
                                    
                                    <div class="step_title_part">
                                        <h2 class="">{{$item->title}}</h2>
                                    </div>
                                    <div class="step_content_part">
                                        <p>{{$item->description}}</p>
                                    </div>
                                    <!-- <a href="#!" id="conversation-badge" onclick='openWidget()' class="custom_btn btn_step">Ask Question</a> -->
                                    {{-- <button class="custom_btn">Ask Question</button> --}}
                                    <a href="{{$item->link_action}}"><button class="custom_btn" onclick='openWidget()'>{{$item->link_title}}</button></a>
                                </div>
                            </div>		
                            @else 
                            <div class="col-lg-6 col-md-6">	
                                <div class="step_left_part">
                                    <img src="{{ URL::asset('storage/app/public/'.$item->image.'') }}" class="img_m" alt="{{$item->title}}"/>
                                    <h4 class="project_sub_ttl"><span >{{$item->sub_title}}</span></h4>
                                    <div class="step_title_part">
                                        <h2 class="">{{$item->title}}</h2>
                                    </div>
                                    <div class="step_content_part">
                                        <p>{{$item->description}}</p>
                                    </div>
                                    <!-- <a href="#!" id="conversation-badge" onclick='openWidget()' class="custom_btn btn_step">Ask Question</a> -->
                                    {{-- <button class="custom_btn">Ask Question</button> --}}
                                    <a href="{{$item->link_action}}"><button class="custom_btn" onclick='openWidget()'>{{$item->link_title}}</button></a>
                                </div>

                            </div>	
                            <div class="col-lg-6 col-md-6">
                                <div class="step_right_part step_img_area img_d">
                                    <img src="{{asset('frontend/img/pipe.png')}}" class="pipe_l"/>
                                    <img src="{{ URL::asset('storage/app/public/'.$item->image.'') }}" class="img_d" alt="{{$item->title}}"/>
                                </div>
                            </div>
                        @endif
                           
                            						
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- step1__area end -->
    @endforeach

       
    </section>

@endsection