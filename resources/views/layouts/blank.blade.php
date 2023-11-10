<!DOCTYPE html>
<html lang="fa" class="light-style layout-navbar-fixed layout-menu-fixed" dir="rtl" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template-no-customizer"><head>
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

    <!-- Page CSS -->
    @stack('css')

    <!-- Helpers -->
    <script src="{!! asset('js/config.js') !!}"></script>
    <script src="{!! asset('js/helpers.js') !!}"></script>
</head>

<body>
<!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        @include('layouts.sidebar')
        <!-- Layout container -->
        <div class="layout-page">
            <!-- Navbar -->

            <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
                <div class="container-fluid">

                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav align-items-center">
                        <a class="nav-link style-switcher-toggle hide-arrow" href="javascript:void(0);">
                            <i class="bx bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{!! asset('/img/avatars/1.png') !!}" alt class="rounded-circle">
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <img src="../../assets/img/avatars/1.png" alt class="rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block">جان اسنو</span>
                                                    <small>مدیر</small>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-user me-2"></i>
                                            <span class="align-middle">پروفایل من</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">تنظیمات</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                          <span class="d-flex align-items-center align-middle">
                            <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                            <span class="flex-grow-1 align-middle">صورتحساب</span>
                            <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                          </span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">خروج</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- / Navbar -->

            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    <h4 class="py-3 breadcrumb-wrapper mb-4">صفحه 1</h4>
                    <p>
                        صفحه نمونه.<br>برای گزینه های طرح بیشتر به
                        <a href="https://v3dboy.ir/previews/html/frest/documentation/layouts.html" target="_blank" class="fw-bold">مستندات طرح ها</a> مراجعه کنید.
                    </p>
                </div>
                <!-- / Content -->

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container-fluid d-flex flex-wrap justify-content-between py-3 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                            طراحی شده با ❤️ ارائه شده emtized
                            <a href="https://rtl-theme.com" target="_blank" class="footer-link fw-semibold">راست‌چین</a>
                        </div>
                        <div>
                            <a href="https://v3dboy.ir/previews/html/frest/documentation" target="_blank" class="footer-link me-4">مستندات</a>
                        </div>
                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{!! asset('libs/jquery/jquery.js') !!}"></script>
<script src="{!! asset('libs/popper/popper.js') !!}"></script>
<script src="{!! asset('js/bootstrap.js') !!}"></script>
<script src="{!! asset('libs/perfect-scrollbar/perfect-scrollbar.js') !!}"></script>

<script src="{!! asset('libs/hammer/hammer.js') !!}"></script>

<script src="{!! asset('js/menu.js') !!}"></script>
<!-- endbuild -->

<!-- Vendors JS -->

<!-- Main JS -->
<script src="{!! asset('js/main.js') !!}"></script>

<!-- Page JS -->
</body>
</html>
