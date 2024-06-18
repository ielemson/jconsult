
@php
    $setting = \App\Models\Setting::find(1);
@endphp
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ $title ?? "" }} - {{ $setting->website_title }} </title>
        <meta name="author" content="Elemson Ifeanyi">
    <meta name="description" content="{{ $setting->meta_description }}">
    <meta name="keywords" content="{{ $setting->meta_tag }}">
 <!-- FAVICON FILES -->
 <link href="{{ asset("images/settings/$setting->website_logo_dark") }}" rel="apple-touch-icon" sizes="144x144">
 <link href="{{ asset("images/settings/$setting->website_logo_dark") }}" rel="apple-touch-icon" sizes="114x114">
 <link href="{{ asset("images/settings/$setting->website_logo_dark") }}" rel="apple-touch-icon" sizes="72x72">
 <link href="{{ asset("images/settings/$setting->website_logo_dark") }}" rel="apple-touch-icon">
 <link href="{{ asset("images/settings/$setting->website_logo_dark") }}" rel="shortcut icon">

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="SpringLuxury Academy">
    {{-- <meta property="og:image" content="preview.html"> --}}
    <meta property="og:site_name" content="{{ $setting->website_title }}">
    <meta property="og:title" content="{{ $setting->website_title }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://springluxuryacademy.com/">

        <!-- Place favicon.ico in the root directory -->
        <!-- CSS here -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/odometer.css">
        <link rel="stylesheet" href="assets/css/swiper-bundle.css">
        <link rel="stylesheet" href="assets/css/aos.css">
        <link rel="stylesheet" href="assets/css/default.css">
        <link rel="stylesheet" href="assets/css/main.css">
    </head>
</head>
<html class="no-js" lang="en">
    <div class="login-box">
        @yield('content')
    </div>
</body>
 <!-- JS here -->
 <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
 <script src="assets/js/bootstrap.bundle.min.js"></script>
 <script src="assets/js/jquery.magnific-popup.min.js"></script>
 <script src="assets/js/jquery.odometer.min.js"></script>
 <script src="assets/js/jquery.appear.js"></script>
 <script src="assets/js/gsap.js"></script>
 <script src="assets/js/ScrollTrigger.js"></script>
 <script src="assets/js/SplitText.js"></script>
 <script src="assets/js/gsap-animation.js"></script>
 <script src="assets/js/jquery.parallaxScroll.min.js"></script>
 <script src="assets/js/swiper-bundle.js"></script>
 <script src="assets/js/ajax-form.js"></script>
 <script src="assets/js/wow.min.js"></script>
 <script src="assets/js/aos.js"></script>
 <script src="assets/js/main.js"></script>
 {{-- <script>
     const text = document.querySelector('.circle');
     text.innerHTML = text.textContent.replace(/\S/g, "<span>$&</span>");
     const element = document.querySelectorAll('.circle span');
     for (let i = 0; i < element.length; i++) {
         element[i].style.transform = "rotate(" + i * 17 + "deg)"
     }
 </script> --}}
</html>
