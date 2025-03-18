@extends('layouts.master')
@section('main_content')
           
    
    <style>

        .gallery{
            position: relative;
            column-count: 4;
            padding: 20px;
        }
        .image_area{
            display: inline-block;
            margin-bottom: 10px;
            overflow: hidden;
        }
        /* img{
            width: 100%;
            transition: 0.25s ease-in-out;
        } */
        .image_area:hover img{
            transform: scale(1.1);
        }
    
        .image_area:hover h1{
            opacity: 0.5;
        }

        @media (max-width: 767px){
            .gallery{
                column-count: 1;
            }
        
        }
   
    
    </style>
    <!-- main-area -->
    <main>
        <!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex align-items-center" style="background-image:url(frontend/img/maa-banner.png)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="breadcrumb-wrap text-center">
                            <div class="breadcrumb-title mb-30">
                                <h2>Gallery</h2>                                    
                            </div>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->
        <div class="gallery">
            <div class="image_area">
           
                <a target="_blank" href="img/gallary/gallary1.png')}}"></a>
                <img src="{{asset('frontend/img/gallary/gallary1.png')}}" alt="">
            </div>
            <div class="image_area">
                <img src="{{asset('frontend/img/gallary/gallary2.png')}}" alt="">
            </div>
            <div class="image_area"> 
                <img src="{{asset('frontend/img/gallary/gallary3.png')}}" alt="">
            </div>
            <div class="image_area">
                <img src="{{asset('frontend/img/gallary/gallary4.png')}}" alt="">
            </div>
            <div class="image_area">
                <img src="{{asset('frontend/img/gallary/gallary5.png')}}" alt="">
            </div>
            <div class="image_area">
               
                <img src="{{asset('frontend/img/gallary/gallary6.png')}}" alt="">
            </div>
            <div class="image_area">
                <img src="{{asset('frontend/img/gallary/gallary7.png')}}" alt="">
            </div>
            <div class="image_area">
                <img src="{{asset('frontend/img/gallary/gallary8.png')}}" alt="">
            </div>
            <div class="image_area">
                <img src="{{asset('frontend/img/gallary/gallary9.png')}}" alt="">
            </div>
            <div class="image_area">
                <img src="{{asset('frontend/img/gallary/gallary10.png')}}" alt="">
            </div>
            <div class="image_area">
                <img src="{{asset('frontend/img/gallary/gallary11.png')}}" alt="">
            </div>
            <div class="image_area">
                <img src="{{asset('frontend/img/gallary/gallary12.png')}}" alt="">
            </div>
            <!-- <div class="image_area">
                <img src="{{asset('frontend/img/gallary/gallary13.png')}}" alt="">
            </div>
            <div class="image_area">
                <img src="{{asset('frontend/img/gallary/gallary14.png')}}" alt="">
            </div> -->
            <div class="image_area">
                <img src="{{asset('frontend/img/gallary/gallary15.png')}}" alt="">
            </div>
            <div class="image_area">
                <img src="{{asset('frontend/img/gallary/gallary16.png')}}" alt="">
            </div>
            <!-- <div class="image_area">
                <img src="{{asset('frontend/img/gallary/gallary17.png')}}" alt="">
            </div> -->
            <!-- <div class="image_area">
                <img src="{{asset('frontend/img/gallary/gallary18.png')}}" alt="">
            </div> -->
            <div class="image_area">
                <img src="{{asset('frontend/img/gallary/gallary19.png')}}" alt="">
            </div>
            <div class="image_area">
                <img src="{{asset('frontend/img/gallary/gallary20.png')}}" alt="">
            </div>
            <div class="image_area">
                <img src="{{asset('frontend/img/gallary/gallary21.png')}}" alt="">
            </div>
        </div>
    </main>
    <!-- main-area-end -->
@endsection