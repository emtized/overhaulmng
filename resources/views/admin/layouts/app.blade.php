<!DOCTYPE html>
<html lang="fa" class="light-style layout-menu-fixed" dir="rtl" data-theme="theme-default" data-assets-path="../public/" data-template="horizontal-menu-template-no-customizer">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <title> - سامانه مدیریت کارجویان اورهال - @yield('title')</title>
    <meta name="description" content="">
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
    <link rel="stylesheet" href="{!! asset('libs/typeahead-js/typeahead.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/apex-charts/apex-charts.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/sweetalert/sweetalert2.css') !!}">
    @stack('css')

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{!! asset('js/config.js') !!}"></script>
    <script src="{!! asset('js/helpers.js') !!}"></script>
</head>

<body>

<!-- Layout wrapper -->
<div class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu">
    <div class="layout-container">
        <!-- Navbar -->

        <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="container-xxl">

                <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
                    <a href="{!! url('/') !!}" class="app-brand-link">
              <span class="app-brand-logo demo">
                <img src="{!! asset('img/logo/small-icon.png') !!}" style="width: 40px;">
              </span>
                        <span class="app-brand-text demo menu-text fw-bold ms-2">سامانه اورهال</span>
                    </a>
                </div>
                <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                    <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                        <i class="bx bx-menu bx-sm"></i>
                    </a>
                </div>

                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <ul class="navbar-nav flex-row align-items-center ms-auto">

                        <!-- Notification -->
                        <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <i class="bx bx-bell bx-sm"></i>
                                <span class="badge bg-danger rounded-pill badge-notifications">2</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end py-0">
                                <li class="dropdown-menu-header border-bottom">
                                    <div class="dropdown-header d-flex align-items-center py-3">
                                        <h5 class="text-body mb-0 me-auto secondary-font">اعلان‌ها</h5>
                                        <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="bx fs-4 bx-envelope-open"></i></a>
                                    </div>
                                </li>
                                <li class="dropdown-notifications-list scrollable-container">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bxs-bolt"></i></span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">درخواست مورد تایید قرار گرفت</h6>
                                                    <p class="mb-1">درخواست تایید مدارک شما پذیرفته شد.</p>
                                                    <small class="text-muted">2 روز قبل</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>


                                        <li class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-warning"><i class="bx bx-error"></i></span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">مدارک تایید نشده</h6>
                                                    <p class="mb-1">شما مدارک تایید نشده دارید</p>
                                                    <small class="text-muted">5 روز قبل</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-menu-footer border-top">
                                    <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center p-3">
                                        مشاهده همه اعلان‌ها
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ Notification -->

                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="{!! asset('img/avatars/1.png') !!}" alt class="rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <div class="d-flex align-items-center">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="{!! asset('img/avatars/1.png') !!}" alt class="rounded-circle">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="fw-semibold d-block">{{ auth()->user()->first_name .' '. auth()->user()->last_name  }}</span>
                                                <small>کارجو</small>
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
                                    <a class="dropdown-item" href="">
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
                                        <i class="bx bx-support me-2"></i>
                                        <span class="align-middle">راهنمایی</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <i class="bx bx-help-circle me-2"></i>
                                        <span class="align-middle">سوالات متداول</span>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{route('admin.logout')}}">
                                        <i class="bx bx-power-off me-2"></i>
                                        <span class="align-middle">خروج</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ User -->
                    </ul>
                </div>

                <!-- Search Small Screens -->
                <div class="navbar-search-wrapper search-input-wrapper container-xxl d-none">
                    <input type="text" class="form-control search-input border-0" placeholder="جستجو ..." aria-label="Search...">
                    <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
                </div>
            </div>
        </nav>

        <!-- / Navbar -->

        <!-- Layout container -->
        <div class="layout-page">
            <!-- Content wrapper -->
            <div class="content-wrapper">
                <!-- Menu -->
                <aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
                    <div class="container-xxl d-flex h-100">
                        <ul class="menu-inner">
                            <!-- Dashboards -->
                            <li class="menu-item active">
                                <a href="javascript:void(0)" class="menu-link menu-toggle">
                                    <i class="menu-icon tf-icons bx bx-home-circle"></i>
                                    <div data-i18n="Dashboards">داشبورد</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item active">
                                        <a href="" class="menu-link">
                                            <i class="menu-icon tf-icons bx bx-pie-chart-alt-2"></i>
                                            <div data-i18n="Analytics">تجزیه و تحلیل</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Tables -->
                            <li class="menu-item">
                                <a href="javascript:void(0)" class="menu-link menu-toggle">
                                    <i class="menu-icon tf-icons bx bx-group"></i>
                                    <div data-i18n="Tables">کاربران</div>
                                </a>
                                <ul class="menu-sub">
                                    <!-- Tables -->
                                    <li class="menu-item">
                                        <a href="{{route('admin.customer.index')}}" class="menu-link">
                                            <i class="menu-icon tf-icons bx bx-table"></i>
                                            <div data-i18n="Tables">لیست کاربران</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons bx bx-grid"></i>
                                            <div data-i18n="Datatables">کاربرجدید</div>
                                        </a>
                                        <ul class="menu-sub">
                                            <li class="menu-item">
                                                <a href="javascript:void(0);" class="menu-link">
                                                    <div data-i18n="Basic">منو1</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="javascript:void(0);" class="menu-link">
                                                    <div data-i18n="Advanced">منو2</div>
                                                </a>
                                            </li>
                                            <li class="menu-item">
                                                <a href="javascript:void(0);" class="menu-link">
                                                    <div data-i18n="Extensions">منو3</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>



                            <!-- Misc -->
                            <li class="menu-item">
                                <a href="javascript:void(0)" class="menu-link menu-toggle">
                                    <i class="menu-icon tf-icons bx bx-shape-circle"></i>
                                    <div data-i18n="Misc">متفرقه</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="#" class="menu-link">
                                            <i class="menu-icon tf-icons bx bx-support"></i>
                                            <div data-i18n="Support">پشتیبانی</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="#" class="menu-link">
                                            <i class="menu-icon tf-icons bx bx-file"></i>
                                            <div data-i18n="Documentation">مستندات</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </aside>
                <!-- / Menu -->

                <!-- Content -->

                <div class="container-xxl flex-grow-1 container-p-y">
                    @yield('content')
                </div>
                <!--/ Content -->

                <!-- Footer -->
                <footer class="content-footer footer bg-footer-theme">
                    <div class="container d-flex flex-wrap justify-content-between py-3 flex-md-row flex-column">
                        <div class="mb-2 mb-md-0">
                        </div>
                        <div>

                            <a href="#" target="_blank" class="footer-link d-none d-sm-inline-block">پشتیبانی</a>
                        </div>
                    </div>
                </footer>
                <!-- / Footer -->

                <div class="content-backdrop fade"></div>
            </div>
            <!--/ Content wrapper -->
        </div>

        <!--/ Layout container -->
    </div>
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>

<!-- Drag Target Area To SlideIn Menu On Small Screens -->
<div class="drag-target"></div>

<!--/ Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="{!! asset('libs/jquery/jquery.js') !!}"></script>
<script src="{!! asset('libs/popper/popper.js') !!}"></script>
<script src="{!! asset('js/bootstrap.js') !!}"></script>
<script src="{!! asset('libs/perfect-scrollbar/perfect-scrollbar.js') !!}"></script>

<script src="{!! asset('libs/hammer/hammer.js') !!}"></script>

<script src="{!! asset('libs/i18n/i18n.js')!!}"></script>
<script src="{!! asset('libs/typeahead-js/typeahead.js') !!}"></script>
<script src="{!! asset('libs/sweetalert/sweetalert2.min.js') !!}"></script>
<script src="{!! asset('js/menu.js') !!}"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="{!! asset('libs/apex-charts/apexcharts.js') !!}"></script>
@include('alert.sweetalert.error')
@include('alert.sweetalert.success')
@stack('js')

<!-- Main JS -->
<script src="{!! asset('js/main.js') !!}"></script>

<!-- Page JS -->
<script src="{!! asset('js/dashboards-analytics.js')!!}"></script>

</body>
</html>
