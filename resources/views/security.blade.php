@extends('layouts.master')
@section('main_content')
<style>
    .header-area{
        padding-bottom: 0px!important;
    }
</style>
 
<section class="main">	    
    <!-- main_area start -->
    <section class="main_area" style="padding-bottom: 0px;"> 
         @include('_header')   
        <!-- hero-area start -->
        <section class="hero-area">
            <div class="container">					
                <div class="row"> 
                    <div class="col-lg-12 col-md-12">
                        <div class="benifits_left" >
                            <h2 style="text-align: center!important; width: 100%">{{$data->title}}</h2>
                        </div>	
                    </div>
                </div>
            </div>
        </section>
        <!-- hero-area end -->
    </section>
    <!-- main_area end -->
 <!-- step1__area start -->
 <section class="step__area"> 
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="tos" style="margin: 20px 0px">
                    {!! $data->description !!}
                </div>								
            </div>
            
        </div>
    </div>
</section>
<!-- step1__area end -->




      
@endsection