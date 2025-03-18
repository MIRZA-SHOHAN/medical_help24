<?php
use App\Models\Setting;
$settings = Setting::find(1);
if($settings->active != 'on'){  ?>
    <script>
        window.location.href = '{{url("maintenance")}}';
    </script>
<?php } ?>

<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="description" content="Medz - Medical Directory HTML Template" />
        <meta name="author" content="Spruko Technologies Private Limited" />
        <meta
            name="keywords"
            content="{{$settings->meta_description}}"
        />
        <!-- Favicon -->
        <link rel="icon" href="https://www.spruko.com/demo/medz/Medz/assets/images/brand/favicon.ico" type="image/x-icon" />
        <link rel="shortcut icon" type="image/x-icon" href="https://www.spruko.com/demo/medz/Medz/assets/images/brand/favicon.ico" />
        <!-- Title -->
        <title>Medical Help 24</title>
        <!-- Bootstrap Css -->
        <link id="style" href="https://www.spruko.com/demo/medz/Medz/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <!-- Style Css -->
        <link href="https://www.spruko.com/demo/medz/Medz/assets/css/style.css" rel="stylesheet" />
        <!--Icons  Css -->
        <link href="https://www.spruko.com/demo/medz/Medz/assets/css/icons.css" rel="stylesheet" />
        <!-- Switcher css -->
        <link href="https://www.spruko.com/demo/medz/Medz/assets/switcher/css/switcher.css" rel="stylesheet" id="switcher-css" type="text/css" media="all" />
        <link href="https://www.spruko.com/demo/medz/Medz/assets/switcher/css/demo.css" rel="stylesheet" />
        <link href="https://www.spruko.com/demo/medz/Medz/assets/iconfonts/feather/feather.css" rel="stylesheet" /> 
        <!-- <link href="assets/css/feather.css" rel="stylesheet" /> -->
        <link href="{{ asset('frontend/css/feather.css') }}" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.css" rel="stylesheet">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
        <!-- Latest Font Awesome CDN -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> -->


      
        <meta http-equiv="imagetoolbar" content="no" />





    
    
    </head>
    <body>
        <div class="horizontalMenucontainer">
           
           
            <!-- Start Switcher -->
            <div class="switcher-wrapper">
                <div class="demo_changer">
                    <div class="demo-icon bg_dark"><i class="fa fa-cog fa-spin text_primary"></i></div>
                    <div class="form_holder right-sidebar">
                        <div class="row">
                            <div class="predefined_styles">
                                <div class="skin-theme-switcher">
                                    <div class="skin-theme-switcher">
                                        <div class="swichermainleft mt-2 text-center">
                                            <div class="p-3">
                                                <a href="../../index.html" class="btn btn-primary btn-block mt-0">View Demo</a> <a class="btn btn-secondary btn-block" data-bs-target=".buynow-btn" data-bs-toggle="modal" href="">Buy Now</a>
                                                <a href="https://themeforest.net/user/sprukosoft/portfolio" class="btn btn-info btn-block">Our Portfolio</a>
                                            </div>
                                        </div>
                                        <div class="swichermainleft border-top text-center">
                                            <h4>LTR AND RTL VERSIONS</h4>
                                            <div class="switch_section p-3 m-0">
                                                <div class="switch-toggle d-flex mt-2">
                                                    <span class="me-auto">LTR</span>
                                                    <p class="onoffswitch2 my-0">
                                                        <input type="radio" name="onoffswitch5" id="myonoffswitch54" class="onoffswitch2-checkbox" checked="" /> <label for="myonoffswitch54" class="onoffswitch2-label"></label>
                                                    </p>
                                                </div>
                                                <div class="switch-toggle d-flex mt-2">
                                                    <span class="me-auto">RTL</span>
                                                    <p class="onoffswitch2 my-0">
                                                        <input type="radio" name="onoffswitch5" id="myonoffswitch55" class="onoffswitch2-checkbox" /> <label for="myonoffswitch55" class="onoffswitch2-label"></label>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swichermainleft border-top text-center">
                                            <h4>Themes</h4>
                                            <div class="switch_section p-3 m-0">
                                                <div class="switch-toggle d-flex mt-2">
                                                    <span class="me-auto">Light Theme</span>
                                                    <p class="onoffswitch2 my-0">
                                                        <input type="radio" name="onoffswitch6" id="myonoffswitch56" class="onoffswitch2-checkbox" checked="" /> <label for="myonoffswitch56" class="onoffswitch2-label"></label>
                                                    </p>
                                                </div>
                                                <div class="switch-toggle d-flex mt-2">
                                                    <span class="me-auto">Dark theme</span>
                                                    <p class="onoffswitch2 my-0">
                                                        <input type="radio" name="onoffswitch6" id="myonoffswitch57" class="onoffswitch2-checkbox" /> <label for="myonoffswitch57" class="onoffswitch2-label"></label>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swichermainleft border-top mt-2 text-center">
                                            <h4>Color Changes</h4>
                                            <div class="skin-body">
                                                <div class="switch_section p-3">
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Primary Color</span>
                                                        <div class="">
                                                            <input
                                                                class="w-30p h-30 input-color-picker color-primary-light"
                                                                value="#e72a1a"
                                                                id="colorID"
                                                                oninput="changePrimaryColor()"
                                                                type="color"
                                                                data-id="bg-color"
                                                                data-id1="bg-hover"
                                                                data-id2="bg-border"
                                                                data-id7="bg-transparentcolor"
                                                                name="lightPrimary"
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Secondary Color</span>
                                                        <div class="">
                                                            <input
                                                                class="w-30p h-30 input-secondary-color-picker color-secondary-light"
                                                                value="#8d0bb7"
                                                                id="colorID2"
                                                                oninput="changeSecondaryColor()"
                                                                type="color"
                                                                data-id5="color"
                                                                data-id6="hover"
                                                                data-id8="transparent"
                                                                name="lightsecondary"
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Background Color</span>
                                                        <div class="">
                                                            <input
                                                                class="w-30p h-30 input-bg-picker background-primary-light"
                                                                value="#212332"
                                                                id="bgID"
                                                                oninput="changeBackgroundColor()"
                                                                type="color"
                                                                data-id3="body"
                                                                data-id4="theme"
                                                                name="BackgroundPrimary"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swichermainleft border-top text-center">
                                            <h4>Header Styles</h4>
                                            <div class="skin-body">
                                                <div class="switch_section p-3">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Default Header Style</span>
                                                        <div class="onoffswitch2">
                                                            <input type="radio" name="onoffswitch2" id="myonoffswitch" class="onoffswitch2-checkbox" checked="" /> <label for="myonoffswitch" class="onoffswitch2-label"></label>
                                                        </div>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Header Style 1</span>
                                                        <div class="onoffswitch2">
                                                            <input type="radio" name="onoffswitch2" id="myonoffswitch1" class="onoffswitch2-checkbox" /> <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                                        </div>
                                                    </div>
                                                    <div class="switch-toggle d-flex mt-2">
                                                        <span class="me-auto">Header Style 2</span>
                                                        <div class="onoffswitch2">
                                                            <input type="radio" name="onoffswitch2" id="myonoffswitch2" class="onoffswitch2-checkbox" /> <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swichermainleft border-top text-center">
                                            <h4>Menu Styles</h4>
                                            <div class="skin-body">
                                                <div class="switch_section p-3">
                                                    <div class="switch-toggle d-flex">
                                                        <span class="me-auto">Default Menu Style</span>
                                                        <div class="onoffswitch3">
                                                            <input type="radio" name="onoffswitch3" id="myonoffswitch3" class="onoffswitch3-checkbox" checked="" /> <label for="myonoffswitch3" class="onoffswitch3-label"></label>
                                                        </div>
                                                    </div>
                                                    <div class="switch-toggle mt-2 d-flex">
                                                        <span class="me-auto">Menu Style 1</span>
                                                        <div class="onoffswitch3">
                                                            <input type="radio" name="onoffswitch3" id="myonoffswitch4" class="onoffswitch3-checkbox" /> <label for="myonoffswitch4" class="onoffswitch3-label"></label>
                                                        </div>
                                                    </div>
                                                    <div class="switch-toggle mt-2 d-flex">
                                                        <span class="me-auto">Menu Style 2</span>
                                                        <div class="onoffswitch3">
                                                            <input type="radio" name="onoffswitch3" id="myonoffswitch5" class="onoffswitch3-checkbox" /> <label for="myonoffswitch5" class="onoffswitch3-label"></label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swichermainleft border-top mt-2 text-center">
                                            <h4>Reset All Styles</h4>
                                            <div class="skin-body">
                                                <div class="switch_section my-4 p-3">
                                                    <button
                                                        class="btn btn-danger btn-block"
                                                        onclick="localStorage.clear();
														document.querySelector('html').style = '';
														resetData();"
                                                        type="button"
                                                    >
                                                        Reset All
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Switcher -->
            <!--Loader-->
            <div id="global-loader" style="display: none;"><img alt="" class="loader-img" src="https://www.spruko.com/demo/medz/Medz/assets/images/loader.svg" /></div>
            <!--/Loader-->
            <!-- Header-main -->
            <div class="header-main">
                <!-- Top Bar -->
                <div class="top-bar d-none">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-sm-4 col-7">
                                <div class="top-bar-left d-flex">
                                    <div class="clearfix">
                                        <ul class="socials">
                                            <li>
                                                <a class="social-icon text-dark" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a class="social-icon text-dark" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a class="social-icon text-dark" href="javascript:void(0);"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                            <li>
                                                <a class="social-icon text-dark" href="javascript:void(0);"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="clearfix">
                                        <ul class="contact">
                                            <li class="d-lg-none">
                                                <a class="callnumber text-dark" href="javascript:void(0);">
                                                    <span><i class="fa fa-phone"></i>: +425 345 8765</span>
                                                </a>
                                            </li>
                                            <li class="select-country">
                                                <select class="form-control select2-flag-search select2-hidden-accessible" data-placeholder="Select Country" data-select2-id="70" tabindex="-1" aria-hidden="true">
                                                    <option value="UM" data-select2-id="72"> United States of America </option>
                                                    <option value="AT"> Austria </option>
                                                    <option value="AF"> Afghanistan </option>
                                                    <option value="AL"> Albania </option>
                                                   
                                                </select>
                                                <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="71" style="width: 100%;">
                                                    <span class="selection">
                                                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-iau1-container">
                                                            <span class="select2-selection__rendered" id="select2-iau1-container" role="textbox" aria-readonly="true" title=" United States of America ">
                                                                <span><img src="https://www.spruko.com/demo/medz/Medz/assets/images/flags/um.svg" class="img-flag" /> United States of America </span>
                                                            </span>
                                                            <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                        </span>
                                                    </span>
                                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                                </span>
                                            </li>
                                            <li class="dropdown">
                                                <a class="text-dark" data-bs-toggle="dropdown" href="javascript:void(0);">
                                                    <span>Language <i class="fa fa-caret-down text-muted"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="javascript:void(0);">English</a> <a class="dropdown-item" href="javascript:void(0);">Arabic</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">German</a> <a class="dropdown-item" href="javascript:void(0);">Greek</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">Vehiclenish</a>
                                                </div>
                                            </li>
                                            <li class="dropdown">
                                                <a class="text-dark" data-bs-toggle="dropdown" href="javascript:void(0);">
                                                    <span>Currency <i class="fa fa-caret-down text-muted"></i></span>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <a class="dropdown-item" href="javascript:void(0);">USD</a> <a class="dropdown-item" href="javascript:void(0);">EUR</a> <a class="dropdown-item" href="javascript:void(0);">INR</a>
                                                    <a class="dropdown-item" href="javascript:void(0);">GBP</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm-8 col-5">
                                <div class="top-bar-right">
                                    <ul class="custom">
                                        <li>
                                            <a class="text-dark" href="register.html"><i class="fa fa-user me-1"></i> <span>Register</span></a>
                                        </li>
                                        <li>
                                            <a class="text-dark" href="login.html"><i class="fa fa-sign-in me-1"></i> <span>Login</span></a>
                                        </li>
                                        <li class="dropdown">
                                            <a class="text-dark" data-bs-toggle="dropdown" href="javascript:void(0);"><i class="fa fa-home me-1"></i> <span>My Dashboard</span></a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <a class="dropdown-item" href="mydash.html"><i class="dropdown-icon icon icon-user"></i> My Profile</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="dropdown-icon icon icon-speech"></i> Inbox</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="dropdown-icon icon icon-bell"></i> Notifications</a>
                                                <a class="dropdown-item" href="mydash.html"><i class="dropdown-icon icon icon-settings"></i> Account Settings</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i class="dropdown-icon icon icon-power"></i> Log out</a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/Top Bar-->
                <!--Header Search-->
                <header class="header-search border-bottom p-2 bg-white">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 col-md-12">
                                <div class="header-search-logo d-none d-lg-block">
                                    <div class="desktoplogo">
                                        <a href="/"><img src="{{ asset('frontend/images/logo.png') }}" alt="Logo">
                                        </a>
                                    </div>
                                    <div class="desktoplogo-1">
                                        <a href="index.html"><img src="https://www.spruko.com/demo/medz/Medz/assets/images/brand/logo1.png" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9 col-md-12 header-support">
                                <ul class="hor-support float-end">
                                    <li class="support-header">
                                        <a href="tel:{{$settings->mobile}}">
                                            <i class="fa fa-phone"></i>
                                            <div class="support-text">
                                                <h6>{{$settings->mobile}}</h6>
                                                <p>24/7 available services</p>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="support-header">
                                        <a href="mailto:{{$settings->email}}">
                                            <i class="fa fa-envelope"></i>
                                            <div class="support-text">
                                                <h6>{{$settings->email}}</h6>
                                                <p>Ask For any questions</p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </header>
                <!--/Header Search-->
                <!-- Horizontal Header -->
                <div id="sticky-wrapper" class="sticky-wrapper" style="height: 38.3984px;">
                    <div class="horizontal-header clearfix" style="width: 1436px;">
                        <div class="container">
                            <a class="animated-arrow" id="horizontal-navtoggle"><span></span></a>
                            <span class="smllogo-white">
                                <a href="index.html"><img src="https://www.spruko.com/demo/medz/Medz/assets/images/brand/logo1.png" width="120" alt="img" /></a>
                            </span>
                            <span class="smllogo">
                                <a href="index.html"><img src="https://www.spruko.com/demo/medz/Medz/assets/images/brand/logo.png" width="120" alt="img" /></a>
                            </span>
                            <a class="callusbtn" href="tel:245-6325-3256"><i aria-hidden="true" class="fa fa-phone"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /Horizontal Header -->
                <!-- Horizontal Menu -->
                <div class="sticky">
                    <div id="sticky-wrapper" class="sticky-wrapper" style="height: 53.3906px;">
                        <div class="header-style horizontal-main clearfix">
                            <div class="horizontal-mainwrapper container clearfix">
                                <nav class="horizontalMenu clearfix d-md-flex">
                                    <div class="horizontal-overlapbg"></div>
                                    <ul class="horizontalMenu-list">
                                        <li aria-haspopup="true">
                                            <span class="horizontalMenu-click">
                                                <!-- <i class="horizontalMenu-arrow fa fa-angle-down"></i> -->
                                            </span> <a class="active" href="javascript:void(0);">Home 
                                                <!-- <span class="fas fa-chevron-down"></span> -->
                                            </a>
                                            <ul class="sub-menu d-none">
                                                <li aria-haspopup="true" class="active"><a href="index.html" class="active">Home-Default</a></li>
                                                <li aria-haspopup="true"><a href="index-text.html">Home Text</a></li>
                                                <li aria-haspopup="true"><a href="index-slides.html">Home Slides</a></li>
                                                <li aria-haspopup="true"><a href="index-video.html">Home Video</a></li>
                                                <li aria-haspopup="true"><a href="index-animation.html">Home Animation</a></li>
                                                <li aria-haspopup="true"><a href="index-map.html">Home Map</a></li>
                                                <li aria-haspopup="true"><a href="index-intro-page.html">Home Intro Page</a></li>
                                                <li aria-haspopup="true"><a href="index-popup-login.html">Home Pop-up login</a></li>
                                                <li aria-haspopup="true"><a href="index-banner.html">Home Banner</a></li>
                                            </ul>
                                        </li>
                                        <li aria-haspopup="true"><a href="about.html">About Us</a></li>
                                        <li aria-haspopup="true"><a href="widgets.html">Widgets</a></li>
                                        
                                        <li aria-haspopup="true">
                                            <span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span> <a href="javascript:void(0);">Categories <span class="fas fa-chevron-down"></span></a>
                                            <ul class="sub-menu">
                                                <li aria-haspopup="true">
                                                    <span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
                                                    <a href="javascript:void(0);">Hospitals <i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="hospitals-list.html">Hospital List</a></li>
                                                        <li><a href="hospitals-list-right.html">Hospital List Right</a></li>
                                                        <li><a href="hospital-details.html">Hospital Details</a></li>
                                                        <li><a href="hospital-details-02.html">Hospital Details 02</a></li>
                                                        <li><a href="hospital-details-right.html">Hospital Details Right</a></li>
                                                    </ul>
                                                </li>
                                                <li aria-haspopup="true">
                                                    <span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
                                                    <a href="javascript:void(0);">Doctors <i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="doctors-list.html">Doctors List</a></li>
                                                        <li><a href="doctors-list-right.html">Doctors List Right</a></li>
                                                        <li><a href="doctor-details.html">Doctor Details</a></li>
                                                        <li><a href="doctor-details2.html">Doctor Details 2</a></li>
                                                        <li><a href="doctor-details-right.html">Doctor Details Right</a></li>
                                                    </ul>
                                                </li>
                                                <li aria-haspopup="true">
                                                    <span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
                                                    <a href="javascript:void(0);">FitnessCenter<i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="fitness-list.html">Fitness List</a></li>
                                                        <li><a href="fitness-list-right.html">Fitness List Right</a></li>
                                                        <li><a href="fitness-details.html">Fitness Details</a></li>
                                                        <li><a href="fitness-details2.html">Fitness Details02</a></li>
                                                        <li><a href="fitness-details-right.html">Fitness Details Right</a></li>
                                                    </ul>
                                                </li>
                                                <li aria-haspopup="true">
                                                    <span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
                                                    <a href="javascript:void(0);">Pharmacy<i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="pharmacy-list.html">Pharmacy List</a></li>
                                                        <li><a href="pharmacy-list-right.html">Pharmacy List Right</a></li>
                                                        <li><a href="pharmacy-details.html">Pharmacy Details</a></li>
                                                        <li><a href="pharmacy-details2.html">Pharmacy Details02</a></li>
                                                        <li><a href="pharmacy-details-right.html">Pharmacy Details Right</a></li>
                                                    </ul>
                                                </li>
                                                <li aria-haspopup="true">
                                                    <span class="horizontalMenu-click02"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span>
                                                    <a href="javascript:void(0);">BloodBank<i class="fa fa-angle-right float-end mt-1 d-none d-lg-block"></i></a>
                                                    <ul class="sub-menu">
                                                        <li><a href="bloodbank-list.html">BloodBank List</a></li>
                                                        <li><a href="bloodbank-list-right.html">BloodBank List Right</a></li>
                                                        <li><a href="bloodbank-details.html">BloodBank Details</a></li>
                                                        <li><a href="bloodbank-details-right.html">BloodBank Details Right</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                      
                                        <li aria-haspopup="true">
                                            <span class="horizontalMenu-click"><i class="horizontalMenu-arrow fa fa-angle-down"></i></span> <a href="javascript:void(0);">Blog</a>
                                            
                                        </li>
                                        <li aria-haspopup="true"><a href="contact.html">Contact Us </a></li>
                                        <li aria-haspopup="true" class="d-lg-none mt-5 pb-5 mt-lg-0">
                                            <span>
                                                <a href="/post-add" class="btn btn-secondary btn-block mb-lg-0"><i class="fas fa-plus me-1 text-white"></i>Add Your Post</a>
                                            </span>
                                        </li>
                                    </ul>
                                    <ul class="mb-0">
                                        <li aria-haspopup="true" class="d-none d-lg-block">
                                            <span>
                                                <a href="/post-add" class="btn btn-danger btn-block mb-lg-0"><i class="fas fa-plus me-1 text-white"></i>Add Your Post</a>
                                            </span>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Horizontal Menu -->
            </div>
            <!-- /Header-main -->

    @yield('main_content') 


         
            <!--Footer Section-->
            <section>
                <footer class="text-white footer-bg">
                    <div class="footer-main">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-2 col-md-12">
                                    <h6>About</h6>
                                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto mt-0" />
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="javascript:;">Our Team</a></li>
                                        <li><a href="javascript:;">Contact US</a></li>
                                        <li><a href="javascript:;">Faq</a></li>
                                        <li><a href="javascript:;">Careers</a></li>
                                        <li><a href="javascript:;">Blog</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-12">
                                    <h6>Resources</h6>
                                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto mt-0" />
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="javascript:;">Search Doctor</a></li>
                                        <li><a href="javascript:;">Search Hospital</a></li>
                                        <li><a href="javascript:;">Search Clinic</a></li>
                                        <li><a href="javascript:;">Search Fitnesscenter</a></li>
                                        <li><a href="javascript:;">Search BloodBank</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-2 col-md-12">
                                    <h6>More</h6>
                                    <hr class="deep-purple text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto" />
                                    <div class="clearfix"></div>
                                    <ul class="list-unstyled mb-0">
                                        <li><a href="javascript:;">Help</a></li>
                                        <li><a href="javascript:;">Terms and Services</a></li>
                                        <li><a href="javascript:;">Book Appointments</a></li>
                                        <li><a href="javascript:;">Privacy Policy</a></li>
                                        <li><a href="javascript:;">Subscribers</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <h6>Contact</h6>
                                    <hr class="deep-purple text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto" />
                                    <ul class="list-unstyled mb-0 contact-footer">
                                        <li><i class="fa fa-map-marker"></i> House #32, Road #29, Pallabi R/A, Mirpur-12, Dhaka-1216.</li>
                                        <li><i class="fa fa-envelope"></i><a href="mailto:hafizur.csejnu@gmail.com">hafizur.csejnu@gmail.com</a></li>
                                        
                                        <li><i class="fa fa-print"></i><a href="tel:+8801794694159">+8801794694159</a></li>
                                        <li><i class="fa fa-print"></i><a href="tel:+8801799065744">+8801799065744</a></li>
                                    </ul>
                                </div>
                                <div class="col-lg-3 col-md-12">
                                    <h6>Subscribe</h6>
                                    <hr class="deep-purple text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto" />
                                    <div class="clearfix"></div>
                                    <div class="input-group w-100">
                                        <input class="form-control br-ts-3 br-bs-3" placeholder="Email" type="text" />
                                        <div class="input-group-append"><button class="btn btn-primary br-te-3 br-be-3" type="button">Subscribe</button></div>
                                    </div>
                                    <h6 class="mt-5">Follow Us</h6>
                                    <hr class="deep-purple text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto" />
                                    <ul class="list-unstyled list-inline follow-footer">
                                        <li class="list-inline-item">
                                            <a class="btn-floating btn-sm"> <i class="fab fa-facebook-f"></i></i></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="btn-floating btn-sm"><i class="fab fa-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="btn-floating btn-sm"><i class="fab fa-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="btn-floating btn-sm"><i class="fab fa-linkedin-in"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-white p-0">
                        <div class="container">
                            <div class="row d-flex">
                                <div class="col-lg-12 col-sm-12 mt-3 mb-3 text-center">
                                    Copyright © 2025 <a href="" class="fs-14 text-primary"></a> Designed and Developed <span class="fa fa-heart text-primary"></span> by
                                    <a href="https://ordevs.com/" class="text-primary"> ordevs </a> All rights reserved.
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </section>
            <!--Footer Section-->
            <!-- Popup Login-->
            <div class="modal" id="exampleModal">
                <div class="modal-dialog modal-lg modal-appoint" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Make an Appointment</h5>
                            <button aria-label="Close" class="close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group"><label class="form-label">Your Name</label> <input class="form-control" placeholder="Enter Your Name" type="text" /></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"><label class="form-label">Your Email</label> <input class="form-control" placeholder="Enter your Email" type="email" /></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group"><label class="form-label">Your Number</label> <input class="form-control" placeholder="Enter your Phone Number" type="number" /></div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Select Gender</label>
                                        <select class="form-control select2 select2-hidden-accessible" name="user[hour]" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                            <option value="" data-select2-id="3">Male</option>
                                            <option value="0">Female</option>
                                            <option value="1">Others</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 100%;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-userhour-6n-container">
                                                    <span class="select2-selection__rendered" id="select2-userhour-6n-container" role="textbox" aria-readonly="true" title="Male">Male</span>
                                                    <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="form-label">Select Date</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class="fa fa-calendar tx-16 lh-0 op-6"></i></div>
                                            </div>
                                            <input class="form-control fc-datepicker hasDatepicker" placeholder="MM/DD/YYYY" type="text" id="dp1741297801579" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Select City</label>
                                        <select class="form-control form-select select2-show-search select2-hidden-accessible" name="city" data-select2-id="58" tabindex="-1" aria-hidden="true">
                                            <option selected="" value="0" data-select2-id="60">Select City</option>
                                            <option value="1" data-select2-id="224">Hyderabad</option>
                                            <option value="2" data-select2-id="225">Mumbai</option>
                                            <option value="3" data-select2-id="226">Delhi</option>
                                            <option value="4" data-select2-id="227">Bangalore</option>
                                            <option value="5" data-select2-id="228">Ahmedabad</option>
                                            <option value="6" data-select2-id="229">Chennai</option>
                                            <option value="7" data-select2-id="230">Kolkata</option>
                                            <option value="8" data-select2-id="231">Lucknow</option>
                                            <option value="9" data-select2-id="232">Jaipur</option>
                                            <option value="10" data-select2-id="233">Bhopal</option>
                                            <option value="11" data-select2-id="234">Visakhapatnam</option>
                                            <option value="12" data-select2-id="235">Patna</option>
                                            <option value="13" data-select2-id="236">Srinagar</option>
                                            <option value="14" data-select2-id="237">Lucknow</option>
                                            <option value="15" data-select2-id="238">Bhubaneswar</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="239" style="width: 100%;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-city-fb-container">
                                                    <span class="select2-selection__rendered" id="select2-city-fb-container" role="textbox" aria-readonly="true" title="Select City">Select City</span>
                                                    <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Select Hospital</label>
                                        <select class="form-control form-select select2-show-search select2-hidden-accessible" name="Hospital" data-select2-id="61" tabindex="-1" aria-hidden="true">
                                            <option selected="" value="0" data-select2-id="63">Select Hospital</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="240" style="width: 100%;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-Hospital-td-container">
                                                    <span class="select2-selection__rendered" id="select2-Hospital-td-container" role="textbox" aria-readonly="true" title="Select Hospital">Select Hospital</span>
                                                    <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Select Specialist</label>
                                        <select class="form-control form-select select2-show-search select2-hidden-accessible" name="Specialist" data-select2-id="64" tabindex="-1" aria-hidden="true">
                                            <option selected="" value="0" data-select2-id="66">Select Specialist</option>
                                            <option value="1" data-select2-id="241">Cardiologist</option>
                                            <option value="2" data-select2-id="242">Neurosurgeon</option>
                                            <option value="3" data-select2-id="243">Orthopaedic Surgeon</option>
                                            <option value="4" data-select2-id="244">Oncologist</option>
                                            <option value="5" data-select2-id="245">Neurologist</option>
                                            <option value="6" data-select2-id="246">Gastroenterologist</option>
                                            <option value="7" data-select2-id="247">ENT</option>
                                            <option value="8" data-select2-id="248">Dentist</option>
                                            <option value="9" data-select2-id="249">Psychiatrist</option>
                                            <option value="10" data-select2-id="250">Urologist</option>
                                            <option value="11" data-select2-id="251">Gynecologist</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="252" style="width: 100%;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-Specialist-vh-container">
                                                    <span class="select2-selection__rendered" id="select2-Specialist-vh-container" role="textbox" aria-readonly="true" title="Select Specialist">Select Specialist</span>
                                                    <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Select Slot</label>
                                        <select class="form-control form-select select2-show-search select2-hidden-accessible" name="Slot" data-select2-id="67" tabindex="-1" aria-hidden="true">
                                            <option selected="" value="0" data-select2-id="69">Select Hospital</option>
                                            <option value="1" data-select2-id="253">Morning</option>
                                            <option value="2" data-select2-id="254">Afternoon</option>
                                            <option value="3" data-select2-id="255">Evening</option>
                                        </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="256" style="width: 100%;">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-Slot-qs-container">
                                                    <span class="select2-selection__rendered" id="select2-Slot-qs-container" role="textbox" aria-readonly="true" title="Select Hospital">Select Hospital</span>
                                                    <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class=""><a class="btn btn-orange btn-block" href="javascript:void(0);">Book Appointment</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Popup Login-->
            <!-- buynow modal -->
            <div class="modal buynow buynow-btn">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content modal-content-demo cover-image" data-image-src="https://www.spruko.com/demo/medz/Medz/assets/switcher/img/16.jpg" style="background: url('https://www.spruko.com/demo/medz/Medz/assets/switcher/img/16.jpg') center center;">
                        <div class="modal-body px-0">
                            <div class="row justify-content-center py-4 px-0 mx-3 Licenses-img">
                                <div class="col-lg-12"><h3 class="text-center mb-4 text-white">Licenses</h3></div>
                                <button aria-label="Close" class="btn-close" data-bs-dismiss="modal" type="button"><span aria-hidden="true">×</span></button>
                                <div class="col-sm-10 col-md-8 col-xl-5 col-lg-5">
                                    <div class="card border-0 regular-license">
                                        <div class="card-body imag-list cover-image" data-image-src="https://www.spruko.com/demo/medz/Medz/assets/switcher/img/14.jpg" style="background: url('https://www.spruko.com/demo/medz/Medz/assets/switcher/img/14.jpg') center center;">
                                            <div class="text-white">
                                                <img src="https://www.spruko.com/demo/medz/Medz/assets/switcher/img/free.png" alt="" class="w-55 free-img" />
                                                <div class="text-center">
                                                    <div class="tx-26"><span class="font-weight-medium">Regular</span> Licenses</div>
                                                    <p class="fw-semi-bold mb-sm-2 mb-0">
                                                        You <span class="text-success font-weight-semibold">can't charge </span> from your <br />
                                                        <span class="op-8">End Product End Users</span>
                                                    </p>
                                                    <div class="dropdown">
                                                        <button class="btn btn-info w-lg dropdown-toggle mt-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">Buy Now</button>
                                                        <div class="dropdown-menu py-0">
                                                            <a class="dropdown-item border-bottom px-3" target="_blank" href="https://1.envato.market/mgQj6M">
                                                                <div>
                                                                    <p class="tx-14 mb-0 lh-xs font-weight-semibold">Buy Now</p>
                                                                    <span class="tx-12 op-7">6 months support</span>
                                                                </div>
                                                            </a>
                                                            <a class="dropdown-item px-3" target="_blank" href="https://1.envato.market/e46rKZ">
                                                                <div>
                                                                    <p class="tx-14 mb-0 lh-xs font-weight-semibold">Buy Now</p>
                                                                    <span class="tx-12 op-7">12 months support</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-10 col-md-8 col-xl-5 col-lg-5">
                                    <div class="card border-0">
                                        <div class="card-body imag-list cover-image" data-image-src="https://www.spruko.com/demo/medz/Medz/assets/switcher/img/15.jpg" style="background: url('https://www.spruko.com/demo/medz/Medz/assets/switcher/img/15.jpg') center center;">
                                            <div class="text-white">
                                                <img src="https://www.spruko.com/demo/medz/Medz/assets/switcher/img/money-bag.png" alt="" class="w-55 free-img" />
                                                <div class="text-center">
                                                    <div class="tx-26"><span class="font-weight-medium">Extended</span> Licenses</div>
                                                    <p class="fw-semi-bold mb-sm-2 mb-0">
                                                        You <span class="text-warning font-weight-semibold">can charge</span> from your <br />
                                                        <span class="op-8">End Product End Users</span>
                                                    </p>
                                                    <div class="dropdown">
                                                        <button class="btn btn-info w-lg dropdown-toggle mt-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">Buy Now</button>
                                                        <div class="dropdown-menu py-0">
                                                            <a class="dropdown-item border-bottom px-3" target="_blank" href="https://1.envato.market/qnPmRY">
                                                                <div>
                                                                    <p class="tx-14 mb-0 lh-xs font-weight-semibold">Buy Now</p>
                                                                    <span class="tx-12 op-7">6 months support</span>
                                                                </div>
                                                            </a>
                                                            <a class="dropdown-item px-3" target="_blank" href="https://1.envato.market/LPQxX3">
                                                                <div>
                                                                    <p class="tx-14 mb-0 lh-xs font-weight-semibold">Buy Now</p>
                                                                    <span class="tx-12 op-7">12 months support</span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="license-view"><a href="https://spruko.com/licenses" target="_blank" class="modal-title text-center mb-3 tx-14 text-white">View license details</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End buynow modal -->
            <!-- Back to top -->
            <a href="#top" id="back-to-top"><i class="fa fa-angle-double-up"></i></a>
           
           
        <div id="ui-datepicker-div" class="ui-datepicker ui-widget ui-widget-content ui-helper-clearfix ui-corner-all"></div>
        <iframe src="chrome-extension://ijejnggjjphlenbhmjhhgcdpehhacaal/audio-devices.html" allow="microphone" style="display: none;"></iframe><input type="file" id="" name="file" style="display: none;" />
        <div data-v-7fd30aba="">
            <div data-v-7fd30aba="" class="container_selected_area" style="cursor: crosshair;"></div>
            <div data-v-7fd30aba="" class="area" style="left: 0px; top: 0px; width: 0px; height: 0px;"></div>
        </div>
        <div id="loom-companion-mv3" ext-id="liecbddmkiiihnedobmlmillhodjkdmb"><div id="shadow-host-companion"></div></div>






<!-- <script src=""></script>
<script src=""></script>
<script src=""></script> -->

        
<!-- <script src="assets/js/jquery.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script> -->

 
<script src="{{ asset('frontend/js/popper.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>

<script src="https://www.spruko.com/demo/medz/Medz/assets/js/jquery.sparkline.min.js"></script>
<script src="https://www.spruko.com/demo/medz/Medz/assets/js/circle-progress.min.js"></script>
<!-- <script src="assets/js/jquery.rating-stars.js"></script> -->

<script src="{{ asset('frontend/js/jquery.rating-stars.js') }}"></script>

<script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
<script src="{{ asset('frontend/js/horizontal.js') }}"></script>
<script src="{{ asset('frontend/js/counterup.min.js') }}"></script>
<script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
<script src="{{ asset('frontend/js/numeric-counter.js') }}"></script>
<script src="{{ asset('frontend/js/select2.full.min.js') }}"></script>
<script src="{{ asset('frontend/js/select2.js') }}"></script>
<script src="{{ asset('frontend/js/jquery.ihavecookies.js') }}"></script>
<script src="{{ asset('frontend/js/cookie.js') }}"></script>





<!-- <script src="assets/js/owl.carousel.js"></script>
<script src="assets/js/horizontal.js"></script>
<script src="assets/js/counterup.min.js"></script>

<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/numeric-counter.js"></script>
<script src="assets/js/select2.full.min.js"></script>
<script src="assets/js/select2.js"></script>
<script src="assets/js/jquery.ihavecookies.js"></script>
<script src="assets/js/cookie.js"></script> -->


<script src="https://www.spruko.com/demo/medz/Medz/assets/js/sticky.js"></script>
<script src="https://www.spruko.com/demo/medz/Medz/assets/js/jquery.bootstrap.newsbox.js"></script>
<script src="https://www.spruko.com/demo/medz/Medz/assets/js/vertical-scroll.js"></script>
<script src="https://www.spruko.com/demo/medz/Medz/assets/js/switcher.js"></script>
<script src="https://www.spruko.com/demo/medz/Medz/assets/js/owl-carousel.js"></script>
<script src="https://www.spruko.com/demo/medz/Medz/assets/js/themeColors.js"></script>


<script src="assets/js/custom.js"></script>
<script src="assets/js/switcher-custom.js"></script>



    </body>
</html>
