@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{!! asset('libs/bs-stepper/bs-stepper.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/bootstrap-select/bootstrap-select.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/select2/select2.css') !!}">
@endpush

@section('content')
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.sidebar')
            <!-- Layout container -->
            <div class="layout-page">
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">ثبت نام/</span> کارجویان</h4>

                        <!-- Modern Vertical Icons Wizard -->
                        <div class="col-12">
                            <div class="bs-stepper vertical wizard-modern wizard-modern-vertical wizard-modern-vertical-icons-example mt-2">
                                <div class="bs-stepper-header">
                                    <div class="step" data-target="#account-details-vertical-modern">
                                        <button type="button" class="step-trigger">
                          <span class="bs-stepper-circle">
                            <i class="bx bx-detail"></i>
                          </span>
                                            <span class="bs-stepper-label">
                            <span class="bs-stepper-title">جزئیات حساب</span>
                            <span class="bs-stepper-subtitle">تنظیم جزئیات حساب</span>
                          </span>
                                        </button>
                                    </div>
                                    <div class="line"></div>
                                    <div class="step" data-target="#personal-info-vertical-modern">
                                        <button type="button" class="step-trigger">
                          <span class="bs-stepper-circle">
                            <i class="bx bx-user"></i>
                          </span>
                                            <span class="bs-stepper-label">
                            <span class="bs-stepper-title">اطلاعات شخصی</span>
                            <span class="bs-stepper-subtitle">افزودن اطلاعات شخصی</span>
                          </span>
                                        </button>
                                    </div>
                                    <div class="line"></div>
                                    <div class="step" data-target="#social-links-vertical-modern">
                                        <button type="button" class="step-trigger">
                          <span class="bs-stepper-circle">
                            <i class="bx bxl-instagram"></i>
                          </span>
                                            <span class="bs-stepper-label">
                            <span class="bs-stepper-title">شبکه های اجتماعی</span>
                            <span class="bs-stepper-subtitle">افزودن لینک‌های اجتماعی</span>
                          </span>
                                        </button>
                                    </div>
                                </div>
                                <div class="bs-stepper-content">
                                    <form onsubmit="return false">
                                        <!-- Account Details -->
                                        <div id="account-details-vertical-modern" class="content">
                                            <div class="content-header mb-3">
                                                <h6 class="mb-1">جزئیات حساب</h6>
                                                <small>جزئیات حساب خود را وارد کنید.</small>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="username-modern-vertical">نام کاربری</label>
                                                    <input type="text" id="username-modern-vertical" class="form-control text-start" placeholder="john.doe" dir="ltr">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="email-modern-vertical">ایمیل</label>
                                                    <input type="text" id="email-modern-vertical" class="form-control text-start" placeholder="john.doe@email.com" aria-label="john.doe@email.com" dir="ltr">
                                                </div>
                                                <div class="col-sm-6 form-password-toggle">
                                                    <label class="form-label" for="password-modern-vertical">رمز عبور</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="password" id="password-modern-vertical" class="form-control text-start" placeholder="············" dir="ltr" aria-describedby="password-modern-vertical1">
                                                        <span class="input-group-text cursor-pointer" id="password-modern-vertical1"><i class="bx bx-hide"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 form-password-toggle">
                                                    <label class="form-label" for="confirm-password-modern-vertical2">تایید رمز عبور</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="password" id="confirm-password-modern-vertical2" class="form-control text-start" placeholder="············" dir="ltr" aria-describedby="confirm-password-modern-vertical3">
                                                        <span class="input-group-text cursor-pointer" id="confirm-password-modern-vertical3"><i class="bx bx-hide"></i></span>
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex justify-content-between">
                                                    <button class="btn btn-label-secondary btn-prev" disabled>
                                                        <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                                        <span class="d-sm-inline-block d-none">قبلی</span>
                                                    </button>
                                                    <button class="btn btn-primary btn-next">
                                                        <span class="d-sm-inline-block d-none me-sm-1">بعدی</span>
                                                        <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Personal Info -->
                                        <div id="personal-info-vertical-modern" class="content">
                                            <div class="content-header mb-3">
                                                <h6 class="mb-1">اطلاعات شخصی</h6>
                                                <small>اطلاعات شخصی خود را وارد کنید.</small>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="first-name-modern-vertical">نام</label>
                                                    <input type="text" id="first-name-modern-vertical" class="form-control" placeholder="جان">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="last-name-modern-vertical">نام خانوادگی</label>
                                                    <input type="text" id="last-name-modern-vertical" class="form-control" placeholder="اسنو">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="country-vertical-modern">کشور</label>
                                                    <select class="select2" id="country-vertical-modern">
                                                        <option>انگلستان</option>
                                                        <option>ایران</option>
                                                        <option>اسپانیا</option>
                                                        <option>فرانسه</option>
                                                        <option>ایتالیا</option>
                                                        <option>استرالیا</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="language-vertical-modern">زبان</label>
                                                    <select class="selectpicker w-auto" id="language-vertical-modern" data-style="btn-default" data-icon-base="bx" data-tick-icon="bx-check text-white" multiple>
                                                        <option>انگلیسی</option>
                                                        <option>فرانسوی</option>
                                                        <option>اسپانیایی</option>
                                                    </select>
                                                </div>
                                                <div class="col-12 d-flex justify-content-between">
                                                    <button class="btn btn-primary btn-prev">
                                                        <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                                        <span class="d-sm-inline-block d-none">قبلی</span>
                                                    </button>
                                                    <button class="btn btn-primary btn-next">
                                                        <span class="d-sm-inline-block d-none me-sm-1">بعدی</span>
                                                        <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Social Links -->
                                        <div id="social-links-vertical-modern" class="content">
                                            <div class="content-header mb-3">
                                                <h6 class="mb-1">شبکه های اجتماعی</h6>
                                                <small>لینک های اجتماعی خود را وارد کنید.</small>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="twitter-vertical-modern">توییتر</label>
                                                    <input type="text" id="twitter-vertical-modern" class="form-control text-start" dir="ltr" placeholder="https://twitter.com/abc">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="facebook-vertical-modern">فیسبوک</label>
                                                    <input type="text" id="facebook-vertical-modern" class="form-control text-start" dir="ltr" placeholder="https://facebook.com/abc">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="google-vertical-modern">گوگل+</label>
                                                    <input type="text" id="google-vertical-modern" class="form-control text-start" dir="ltr" placeholder="https://plus.google.com/abc">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="linkedin-vertical-modern">لینکدین</label>
                                                    <input type="text" id="linkedin-vertical-modern" class="form-control text-start" dir="ltr" placeholder="https://linkedin.com/abc">
                                                </div>
                                                <div class="col-12 d-flex justify-content-between">
                                                    <button class="btn btn-primary btn-prev">
                                                        <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                                        <span class="d-sm-inline-block d-none">قبلی</span>
                                                    </button>
                                                    <button class="btn btn-success btn-submit">ثبت</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /Modern Vertical Icons Wizard -->
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-fluid d-flex flex-wrap justify-content-between py-3 flex-md-row flex-column">
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

@endsection
@push('js')
    <script src="{!! asset('libs/bs-stepper/bs-stepper.js') !!}"></script>
    <script src="{!! asset('libs/bootstrap-select/bootstrap-select.js') !!}"></script>
    <script src="{!! asset('libs/bootstrap-select/i18n/defaults-fa_IR.js') !!}"></script>
    <script src="{!! asset('libs/select2/select2.js') !!}"></script>
    <script src="{!! asset('libs/select2/i18n/fa.js') !!}"></script>
    <script src="{!! asset('js/form-wizard-icons.js') !!}"></script>

@endpush
