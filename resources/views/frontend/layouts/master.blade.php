<!doctype html>
<html lang="{{ htmlLang() }}" @rtl dir="rtl" @endrtl>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $general->sitename($page_title ?? '') }}</title>
    @include('partials.seo')
    <link rel="shortcut icon" type="image/png" href="{{getImage(imagePath()['logoIcon']['path'] .'/favicon.png')}}">
    @yield('meta')

    @stack('before-styles')
    <!-- App favicon -->

    @stack('before-styles')
    {{-- <link href="{{ mix('css/frontend/app.css') }}" rel="stylesheet"> --}}

      <!-- bootstrap 4  -->
  <link rel="stylesheet" href="{{asset('ico/css/lib/bootstrap.min.css')}}">
  <!-- fontawesome 5  -->
  <link rel="stylesheet" href="{{asset('ico/css/all.min.css')}}">
  <!-- lineawesome font -->
  <link rel="stylesheet" href="{{asset('ico/css/line-awesome.min.css')}}">

  <link rel="stylesheet" href="{{asset('ico/css/lightcase.css')}}">
  <!-- slick slider css -->
  <link rel="stylesheet" href="{{asset('ico/css/lib/slick.css')}}">
  <!-- main css -->
  <link rel="stylesheet" href="{{asset('ico/css/main.css')}}">

  <link rel="stylesheet" href="{{asset('ico/css/color.php?color='.$general->base_color.'&secondColor='.$general->secondary_color)}}">
  <link rel="stylesheet" href="{{asset('ico/css/custom.css')}}">
  
    @stack('after-styles')
</head>
<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    @yield('layout')

    @include('includes.partials.messages')

    @stack('before-scripts')
    {{--<script src="{{ mix('js/frontend/manifest.js') }}"></script>
    <script src="{{ mix('js/frontend/vendor.js') }}"></script>
    <script src="{{ mix('js/frontend/app.js') }}"></script> --}}
        <!-- jQuery library -->
  <script src="{{asset('ico/js/lib/jquery-3.6.0.min.js')}}"></script>
  <!-- bootstrap js -->
  <script src="{{asset('ico/js/lib/bootstrap.bundle.min.js')}}"></script>
  <!-- slick slider js -->
  <script src="{{asset('ico/js/lib/slick.min.js')}}"></script>
  <!-- scroll animation -->
  <script src="{{asset('ico/js/lib/wow.min.js')}}"></script>
  <!-- lightcase js -->
  <script src="{{asset('ico/js/lib/lightcase.min.js')}}"></script>
  <!-- parallax js -->
  <script src="{{asset('ico/js/lib/jquery.paroller.min.js')}}"></script>
  <!-- Tweenmax Js -->
  <script src="{{asset('ico/js/lib/TweenMax.min.js')}}"></script>
  <!-- main js -->
  <script src="{{asset('ico/js/app.js')}}"></script>
    @stack('after-scripts')
</body>
</html>
