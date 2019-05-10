<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Title -->
    <title>@yield('title') | Aurora</title>
    <!-- Font Google -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{asset('public/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome Css -->
    <link href="{{asset('public/assets/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- Magnific Popup Css -->
    <link href="{{asset('public/assets/css/magnific-popup.css')}}" rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{asset('public/assets/img/favicon.png')}}" />
    <!-- Owl Carousel Css -->
    <link href="{{asset('public/assets/css/owl.carousel.css')}}" rel="stylesheet">
    <!-- Main Css -->
    <link href="{{asset('public/assets/css/style.css')}}" rel="stylesheet">
    <!-- Responsive Css -->
    <link href="{{asset('public/assets/css/responsive.css')}}" rel="stylesheet">
    @yield('style')
</head>
<body>
<!-- Preloader Area Start -->
<div class="preloader flex-center">
    <div class="dots">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
    </div>
</div>
<!-- Preloader Area End -->


<!-- Header Area Start -->
@include('shared.user.header')
<!-- Header Area Start -->

{{--Content Area--}}
@yield('content')
{{--Content Area--}}

{{--Footer Area--}}
@include('shared.user.footer')
{{--Footer Area--}}

<!-- Main JS -->
<script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('public/assets/js/popper.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
<!-- Owl Carousel JS -->
<script src="{{asset('public/assets/js/owl.carousel.min.js')}}"></script>
<!-- Manific Popup JS -->
<script src="{{asset('public/assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- One Page Nav JS -->
<script src="{{asset('public/assets/js/onepagenav.js')}}"></script>
<!-- Isotope JS -->
<script src="{{asset('public/assets/js/isotope.js')}}"></script>
{{--Circle --}}
<script src="{{asset('public/assets/js/circle-progress.js')}}"></script>
<!-- Imageload JS -->
<script src="{{asset('public/assets/js/imageloaded.min.js')}}"></script>
<!-- Counter JS -->
<script src="{{asset('public/assets/js/jquery.counterup.min.js')}}"></script>
<!-- Waypoint JS -->
<script src="{{asset('public/assets/js/waypoint.min.js')}}"></script>
<!-- Main JS -->
<script src="{{asset('public/assets/js/main.js')}}"></script>
@yield('script')
</body>
</html>