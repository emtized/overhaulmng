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
                                    <div class="step" data-target="#info-details">
                                        <button type="button" class="step-trigger">
                                            <span class="bs-stepper-circle"><i class="bx bx-detail"></i></span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">اطلاعات هویتی</span>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="line"></div>
                                    <div class="step" data-target="#document-upload">
                                        <button type="button" class="step-trigger">
                                            <span class="bs-stepper-circle"><i class="bx bx-user"></i></span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">بارگذاری مدارک هویتی</span>
                                                <span class="bs-stepper-subtitle">شناسنامه،کارت ملی</span>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="line"></div>
                                    <div class="step" data-target="#health-details">
                                        <button type="button" class="step-trigger">
                                            <span class="bs-stepper-circle"><i class="bx bx-plus-medical"></i></span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">سلامت جسمانی</span>
                                                <span class="bs-stepper-subtitle">خود اظهاری سلامت</span>
                                            </span>
                                        </button>
                                    </div>

                                    <div class="line"></div>
                                    <div class="step" data-target="#bank-info">
                                        <button type="button" class="step-trigger">
                                            <span class="bs-stepper-circle"><i class="bx bx-credit-card-front"></i></span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">اطلاعات بانکی</span>
                                                <span class="bs-stepper-subtitle">اطلاعات مالی و بانکی</span>
                                            </span>
                                        </button>
                                    </div>

                                    <div class="line"></div>
                                    <div class="step" data-target="#time-sheet">
                                        <button type="button" class="step-trigger">
                                            <span class="bs-stepper-circle"><i class="bx bx-calendar-alt"></i></span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">تاریخ آماده کار</span>
                                                <span class="bs-stepper-subtitle">تعیین زمان همکاری</span>
                                            </span>
                                        </button>
                                    </div>

                                    <div class="line"></div>
                                    <div class="step" data-target="#final-check">
                                        <button type="button" class="step-trigger">
                                            <span class="bs-stepper-circle"><i class="bx bx-check-double"></i></span>
                                            <span class="bs-stepper-label">
                                                <span class="bs-stepper-title">کنترل نهایی</span>
                                                <span class="bs-stepper-subtitle">تایید اطلاعات ثبت نام</span>
                                            </span>
                                        </button>
                                    </div>

                                </div>
                                <div class="bs-stepper-content">
                                    <form onsubmit="return false">
                                        <div id="info-details" class="content">
                                            <div class="content-header mb-3">
                                                <h6 class="mb-1">وارد کردن اطلاعات هویتی</h6>
                                                <small>جزئیات اطلاعات خود را وارد کنید.</small>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="">نام </label>
                                                    <input type="text" id="" class="form-control text-start" placeholder="" dir="rtl">
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="">نام خانوادگی</label>
                                                    <input type="text" id="" class="form-control text-start">
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">نام پدر</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="" class="form-control text-start">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">کدملی</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="" class="form-control text-start">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">شماره شناسنامه</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="" class="form-control text-start">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">محل صدور</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="" class="form-control text-start">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">تاریخ تولد</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="" class="form-control text-start">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">وضعیت تاهل</label>
                                                        <select class="form-select">
                                                            <option>مجرد</option>
                                                            <option>متاهل</option>
                                                        </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">وضعیت نظام وظیفه</label>
                                                    <select class="form-select">
                                                        <option>مشمول</option>
                                                        <option>درحال خدمت</option>
                                                        <option>پایان خدمت</option>
                                                        <option>معافیت پزشکی</option>
                                                        <option>معافیت غیره</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">دلیل معافیت</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="" class="form-control text-start">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4"></div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">زیان مادری</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="" class="form-control text-start">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">تلفن ثابت</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="" class="form-control text-start">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">تلفن همراه</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="" class="form-control text-start">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">پست الکترونیک</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="" class="form-control text-start">
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">وضعیت سکونت</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="" class="form-control text-start">
                                                    </div>
                                                </div>
                                                <div class="col-sm-8">
                                                    <label class="form-label" for="">نشانی محل سکونت</label>
                                                    <textarea class="form-control" id="" rows="3"></textarea>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">کدپستی</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="" class="form-control text-start">
                                                    </div>
                                                </div>
                                                <hr class="mt-5">

                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">وضعیت اشتغال</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="" class="form-control text-start">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">نوع اشتغال فعلی</label>
                                                    <select class="form-select">
                                                        <option>دولتی</option>
                                                        <option>خصوصی</option>
                                                        <option>آزاد</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">نام محل اشتغال فعلی</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="" class="form-control text-start">
                                                    </div>
                                                </div>
                                                <hr class="mt-5 mb-5">
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">وضعیت بیمه تامین اجتماعی</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="" class="form-control text-start">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">شماره بیمه تامین اجتماعی</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="" class="form-control text-start">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">روش دسترسی به سامانه</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="" class="form-control text-start">
                                                    </div>
                                                </div>

                                                <div class="col-sm-3">
                                                    <label class="form-label" for="">قد</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="" class="form-control text-start">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="form-label" for="">وزن</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="" class="form-control text-start">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="form-label" for="">سایز کفش</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="" class="form-control text-start">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="form-label" for="">سایز لباس</label>
                                                    <select class="form-select">
                                                        <option selected>-</option>
                                                        <option>S</option>
                                                        <option>M</option>
                                                        <option>L</option>
                                                        <option>XL</option>
                                                        <option>XXL</option>
                                                        <option>3XL</option>
                                                    </select>
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
                                        <div id="document-upload" class="content">
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
                                        <div id="health-details" class="content">
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
                                        <div id="bank-info" class="content">
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
                                        <div id="time-sheet" class="content">
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
                                        <div id="final-check" class="content">
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
