<!DOCTYPE html>
<html lang="fa" class="light-style layout-navbar-fixed layout-menu-fixed" dir="rtl" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template-no-customizer">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title>سامانه مدیریت کارجویان اورهال - @yield('title')</title>

    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico">

    <!-- Icons -->
    <link rel="stylesheet" href="{!! asset('libs/fonts/boxicons.css') !!}">

    <link rel="stylesheet" href="{!! asset('libs/fonts/fontawesome.css') !!}">

    <link rel="stylesheet" href="{!! asset('libs/fonts/flag-icons.css') !!}">

    <!-- Core CSS -->
    <link rel="stylesheet" href="{!! asset('css/rtl/core.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/rtl/theme-default.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/demo.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/rtl/rtl.css') !!}">
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{!! asset('libs/perfect-scrollbar/perfect-scrollbar.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/sweetalert/sweetalert2.css') !!}">
    <!-- Page CSS -->
    @stack('css')

    <!-- Helpers -->
    <script src="{!! asset('js/helpers.js') !!}"></script>
    <script src="{!! asset('js/config.js') !!}"></script>


</head>
<body>
@yield('content')

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{!! asset('libs/jquery/jquery.js') !!}"></script>
<script src="{!! asset('libs/popper/popper.js') !!}"></script>
<script src="{!! asset('js/bootstrap.js') !!}"></script>
<script src="{!! asset('libs/perfect-scrollbar/perfect-scrollbar.js') !!}"></script>
<script src="{!! asset('libs/sweetalert/sweetalert2.min.js') !!}"></script>
<script src="{!! asset('libs/hammer/hammer.js') !!}"></script>

<script src="{!! asset('js/menu.js') !!}"></script>
<!-- endbuild -->
@include('alert.sweetalert.error')
@include('alert.sweetalert.success')
<!-- Vendors JS -->
@stack('js')
<!-- Main JS -->
<script src="{!! asset('js/main.js') !!}"></script>
<!-- Page JS -->
</body>
</html>
