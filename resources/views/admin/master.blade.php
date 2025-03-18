<?php
use App\Models\Setting;
$settings = Setting::find(1);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="pixelstrap">
    {{-- <link rel="icon" href="{{asset('backend/assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('backend/assets/images/favicon.png')}}" type="image/x-icon"> --}}
    <link rel="icon" href="{{ URL::asset('storage/app/public/'.$settings->favicon.'') }}" />
    <link rel="shortcut icon" href="{{ URL::asset('storage/app/public/'.$settings->favicon.'') }}" />
    <title>Admin Panel</title> 
    <!-- Google font--> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/font-awesome.css')}}">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/icofont.css')}}">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/themify.css')}}">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/flag-icon.css')}}">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/feather-icon.css')}}">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/scrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/date-range-picker/flatpickr.min.css')}}">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/bootstrap.css')}}">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/style.css')}}">
    <link id="color" rel="stylesheet" href="{{asset('backend/assets/css/color-1.css')}}" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/css/vendors/summernote.css')}}">

    <!-- latest jquery-->
    <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>  

    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" /> -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>





  </head> 
  <body>  
    <style>
      a.small {
          font-size: 13px;
      }
      .form-group label {
          margin-top: 10px;
      }
      .select2-container--default .select2-selection--single {
        background-color: #fff;
        border: 1px dashed rgba(106, 113, 133, 0.3) !important;
        border-radius: 4px;
      }
    </style>
    <div class="loader-wrapper"> 
      <div class="loader loader-1">
        <div class="loader-outter"></div>
        <div class="loader-inner"></div>
        <div class="loader-inner-1"></div>
      </div>
    </div>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <div class="page-header row">
        <div class="header-logo-wrapper col-auto">
          <div class="logo-wrapper"><a href="/dashboard"><img class="img-fluid for-light" src="{{asset('backend/assets/images/logo/logo.png')}}" alt=""/><img class="img-fluid for-dark" src="{{asset('backend/assets/images/logo/logo_light.png')}}" alt=""/></a></div>
        </div>    
    
        @include('_message')
        @yield('main_content')

  <!-- footer start-->
  <footer class="footer">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 footer-copyright d-flex flex-wrap align-items-center justify-content-between">
          <p class="mb-0 f-w-600">Copyright 2025 © <a href="https://www.ordevs.com/" target="_blank">ordevs</a> </p>
          <p class="mb-0 f-w-600">Hand crafted & made with
            <svg class="footer-icon">
              <use href="{{asset('backend/assets/svg/icon-sprite.svg#footer-heart')}}"></use>
            </svg>
          </p>
        </div>
      </div>
    </div>
  </footer>
</div>
</div>

<!-- Bootstrap js-->
<script src="{{asset('backend/assets/js/bootstrap/bootstrap.bundle.min.js')}}"></script>
<!-- feather icon js-->
<script src="{{asset('backend/assets/js/icons/feather-icon/feather.min.js')}}"></script>
<script src="{{asset('backend/assets/js/icons/feather-icon/feather-icon.js')}}"></script>
<!-- scrollbar js-->
<script src="{{asset('backend/assets/js/scrollbar/simplebar.js')}}"></script>
<script src="{{asset('backend/assets/js/scrollbar/custom.js')}}"></script>
<!-- Sidebar jquery-->
<script src="{{asset('backend/assets/js/config.js')}}"></script>
<!-- Plugins JS start-->
<script src="{{asset('backend/assets/js/sidebar-menu.js')}}"></script>
<script src="{{asset('backend/assets/js/sidebar-pin.js')}}"></script>
<script src="{{asset('backend/assets/js/slick/slick.min.js')}}"></script>
<script src="{{asset('backend/assets/js/slick/slick.js')}}"></script>
<script src="{{asset('backend/assets/js/header-slick.js')}}"></script>
<script src="{{asset('backend/assets/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{asset('backend/assets/js/chart/apex-chart/stock-prices.js')}}"></script>
<script src="{{asset('backend/assets/js/chart/apex-chart/moment.min.js')}}"></script>
<script src="{{asset('backend/assets/js/notify/bootstrap-notify.min.js')}}"></script>
<!-- calendar js-->
<script src="{{asset('backend/assets/js/dashboard/default.js')}}"></script>
<script src="{{asset('backend/assets/js/notify/index.js')}}"></script>
<script src="{{asset('backend/assets/js/datatable/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/assets/js/datatable/datatables/datatable.custom.js')}}"></script>
<script src="{{asset('backend/assets/js/datatable/datatables/datatable.custom1.js')}}"></script>
<script src="{{asset('backend/assets/js/datepicker/date-range-picker/moment.min.js')}}"></script>
<script src="{{asset('backend/assets/js/datepicker/date-range-picker/datepicker-range-custom.js')}}"></script>
<script src="{{asset('backend/assets/js/typeahead/handlebars.js')}}"></script>
<script src="{{asset('backend/assets/js/typeahead/typeahead.bundle.js')}}"></script>
<script src="{{asset('backend/assets/js/typeahead/typeahead.custom.js')}}"></script>
<script src="{{asset('backend/assets/js/typeahead-search/handlebars.js')}}"></script>
<script src="{{asset('backend/assets/js/typeahead-search/typeahead-custom.js')}}"></script>
<script src="{{asset('backend/assets/js/height-equal.js')}}"></script>
<script src="{{asset('backend/assets/js/animation/wow/wow.min.js')}}"></script>
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{asset('backend/assets/js/script.js')}}"></script>
<script src="{{asset('backend/assets/js/theme-customizer/customizer.js')}}"></script>

{{-- <script src="{{asset('backend/assets/summernote/dist/summernote-lite.js')}}"></script>  --}}

<script src="{{asset('backend/assets/js/editor/summernote/summernote.js')}}"></script>
<script src="{{asset('backend/assets/js/editor/summernote/summernote.custom.js')}}"></script>
<script src="{{asset('backend/assets/js/editor/summernote/summernote-custom1.js')}}"></script>

<script>
  $(document).ready(function() {
    $('#summernote').summernote();
  });
</script>
<!-- Plugin used-->
<script>

        $(document).ready(function () {
            $('.ss').select2();
            // Auto-hide the flash message after 3 seconds (3000ms)
            setTimeout(function () {
                $(".flash-message").fadeOut("slow");
            }, 3000);
        });
    </script>





  
</body>
</html>