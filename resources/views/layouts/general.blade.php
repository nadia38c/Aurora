<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('public/admin_asset/css/bootstrap.min.css')}}">
    <link href="{{asset('public/admin_asset/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/admin_asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/admin_asset/css/fontawesome-all.css')}}">
    <title>@yield('title') | Aurora-Admin</title>
</head>

<body>
<!-- main wrapper -->
<div class="dashboard-main-wrapper">

    <!-- navbar -->
@include('shared.admin.header')
<!-- end navbar -->



        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content">
                <!-- pageheader  -->
            @yield('content')
            <!-- end pageheader  -->

            </div>
        </div>

</div>

<!-- end main wrapper  -->

<!-- Optional JavaScript -->
<!-- jquery 3.3.1 -->
<script src="{{asset('public/admin_asset/js/jquery-3.3.1.min.js')}}"></script>
<!-- bootstap bundle js -->
<script src="{{asset('public/admin_asset/js/bootstrap.bundle.js')}}"></script>
<!-- slimscroll js -->
<script src="{{asset('public/admin_asset/jquery.slimscroll.js')}}"></script>
<!-- main js -->
<script src="{{asset('public/admin_asset/js/main-js.js')}}"></script>
@yield('script')
</body>

</html>