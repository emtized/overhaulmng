@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{!! asset('libs/bs-stepper/bs-stepper.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/bootstrap-select/bootstrap-select.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/select2/select2.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/flatpickr/flatpickr.css') !!}">
    <style>
        .btn-i{
        transform: rotate(180deg) !important;
        }
    </style>
@endpush

@section('content')
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.sidebar-empty')
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
                                                <span class="bs-stepper-title">اطلاعات هویتی و شغلی</span>
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
                                    <form onsubmit="return false" id="signupForm">
                                        <div id="info-details" class="content">
                                            <div class="content-header mb-3">
                                                <h6 class="mb-1"> وارد کردن اطلاعات هویتی و شغلی</h6>
                                                <small>جزئیات اطلاعات خود را وارد کنید.</small>
                                            </div>
                                            <hr class="my-4 mx-n4">

                                            <h6 class="mb-b fw-normal">1.اطلاعات فردی</h6>

                                           @include('forms.user.personal-info')

                                            <div class="row mt-3">
                                                <div class="col-12 d-flex justify-content-between">
                                                    <button class="btn btn-label-secondary btn-prev" disabled>
                                                        <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                                        <span class="d-sm-inline-block d-none">قبلی</span>
                                                    </button>
                                                    <button class="btn btn-primary" id="btn">
                                                        <span class="d-sm-inline-block d-none me-sm-1">بعدی</span>
                                                        <i class="bx bx-chevron-right bx-sm me-sm-n2 btn-i"></i>
                                                    </button>
                                                    <button class="btn btn-primary btn-next d-none" id="next">
                                                        <span class="d-sm-inline-block d-none me-sm-1">بعدی</span>
                                                        <i class="bx bx-chevron-right bx-sm me-sm-n2 "></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="document-upload" class="content">
                                            <div class="content-header mb-3">
                                                <h6 class="mb-1">مدارک هویتی</h6>
                                                <small>لطفا مدارک خواسته شده را در بخش های مربوطه بارگذاری نمایید.</small>
                                            </div>
                                            <div class="row g-3">
                                                <table class="table table-borderless">
                                                    <tbody>
                                                    <tr>
                                                        <td class="align-middle"><small class="text-light fw-semibold">کارت ملی</small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا عکس روی کارت ملی خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"><small class="text-light fw-semibold">صفحه اول شناسنامه</small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"><small class="text-light fw-semibold">صفحه دوم شناسنامه</small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"><small class="text-light fw-semibold">کارت معافیت یا پایان خدمت سربازی</small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"><small class="text-light fw-semibold">عکس 3*4 </small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"><small class="text-light fw-semibold">گواهی عدم اعتیاد</small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"><small class="text-light fw-semibold">گواهی عدم سوء پیشینه</small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"><small class="text-light fw-semibold">نتیجه معاینات طب صنعتی</small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"><small class="text-light fw-semibold">تاییدیه آموزش ایمنی اداره کار</small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"><small class="text-light fw-semibold">سوابق بیمه تامین اجتماعی</small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PDF) بارگذاری نمایید.</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"><small class="text-light fw-semibold">آخرین مدرک تحصیلی</small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PDF) بارگذاری نمایید.</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"><small class="text-light fw-semibold">تعهد نامه محضری( در صورتی که حساب بانکی به نام شخص نباشد)</small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"><small class="text-light fw-semibold"> سایر مدارک</small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PDF) بارگذاری نمایید.</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"><small class="text-light fw-semibold"> سایر مدارک</small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PDF) بارگذاری نمایید.</label>
                                                                <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>


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
                                                <h6 class="mb-1">سلامت جسمانی</h6>
                                                <small>لطفا اطلاعات مربوط به سلامت جسمانی خود را بادقت وارد نمایید.</small>
                                            </div>
                                            <hr class="my-4 mx-n4">

                                            @include('forms.user.health-info')
                                            <div class="row mt-3">
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
                                        <div id="bank-info" class="content">
                                            <div class="content-header mb-3">
                                                <h6 class="mb-1">اطلاعات حساب بانکی</h6>
                                                <small>لطفا اطلاعات خواسته شده را با دقت وارد نمایید.</small>
                                            </div>
                                            <div class="row g-3">
                                                <div class="col-sm-3">
                                                    <label class="form-label" for=""> 12.آیا حساب بانکی به نام خود دارید؟</label>
                                                    <select class="form-select" id="bank-select">
                                                        <option value="0">خیر</option>
                                                        <option value="1" selected>بله</option>
                                                    </select>
                                                </div>

                                                <div class="col-9"></div>

                                                <div class="bank-data">
                                                    <div class="row g-3">
                                                        <div class="col-sm-3">
                                                            <label class="form-label" for="">بانک</label>
                                                            <select class="form-select">
                                                                <option selected>-</option>
                                                                <option>ملی</option>
                                                                <option>ملت</option>
                                                                <option>تجارت</option>
                                                                <option>شهر</option>
                                                                <option>سپه</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-4">
                                                            <label class="form-label" for="phone-number-mask">شماره شبا</label>
                                                            <div class="input-group">
                                                                <input type="text" id="phone-number-mask" class="form-control phone-number-mask text-start" placeholder="0000 0000 0000" dir="ltr">
                                                                <span class="input-group-text">IR</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-4">
                                                            <label class="form-label" for="phone-number-mask">شماره حساب</label>
                                                            <div class="input-group">
                                                                <input type="text" id="phone-number-mask" class="form-control phone-number-mask text-start" placeholder="0000 0000 0000" dir="ltr">
                                                                <span class="input-group-text"></span>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div>
                                                        <button type="button" id="btn-copy" class="btn btn-success btn-sm">+</button>
                                                    </div>
                                                </div>

                                                <div class="bank-no">
                                                    <div class="row g-3">
                                                        <div class="col-sm-3">
                                                            <label class="form-label" for="">بانک</label>
                                                            <select class="form-select">
                                                                <option selected>-</option>
                                                                <option>ملی</option>
                                                                <option>ملت</option>
                                                                <option>تجارت</option>
                                                                <option>شهر</option>
                                                                <option>سپه</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-4">
                                                            <label class="form-label" for="phone-number-mask">شماره شبا</label>
                                                            <div class="input-group">
                                                                <input type="text" id="phone-number-mask" class="form-control phone-number-mask text-start" placeholder="0000 0000 0000" dir="ltr">
                                                                <span class="input-group-text">IR</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-4">
                                                            <label class="form-label" for="phone-number-mask">شماره حساب</label>
                                                            <div class="input-group">
                                                                <input type="text" id="phone-number-mask" class="form-control phone-number-mask text-start" placeholder="0000 0000 0000" dir="ltr">
                                                                <span class="input-group-text"></span>
                                                            </div>
                                                        </div>
                                                    </div>
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
                                        <div id="time-sheet" class="content">
                                            <div class="content-header mb-3">
                                                <h6 class="mb-1">تاریخ آماده بکار</h6>
                                                <small></small>
                                            </div>
                                            <hr class="my-4 mx-n4">

                                            <p class="lead mb-0">برنامه اشتغال خود در سایر پروژه ها را سنجیده و بازه های زمانی آماده به کار بودن خود را از طریق تقویم ذیل مشخص نمایید.</p>
                                                <p class="lead mb-0">در صورت هر گونه تغییر در زمانبندی آماده به کار بودن ، مراتب را مجددا در پروفایل خود بروز رسانی و ذخیره کنید</p>
                                            <div class="row g-3 my-2" id="row">
                                                <div class="col-md-6 col-12 mb-4">
                                                    <label for="" class="form-label">لطفا اولین تاریخ شروع بکار خود را انتخاب نمایید.</label>
                                                    <input type="text" class="form-control start-date">
                                                </div>

                                                <div class="col-md-6 col-12 mb-4">
                                                    <label for="" class="form-label">لطفا آخرین تاریخ  کار خود را انتخاب نمایید.</label>
                                                    <input type="text" class="form-control end-date">
                                                </div>

                                            </div>
                                            <div class="mb-4">
                                                <button type="button" id="btn-copy-date" class="btn btn-success btn-sm">+</button>
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
                                        <div id="final-check" class="content">

                                            <div class="content-header mb-3">
                                                <h6 class="mb-1">کنترل نهایی</h6>
                                                <small>لطفا اطلاعات وارد شده را با دقت کنترل نمایید، ثبت نهایی اطلاعات پس از کنترل و تایید تیم پشتبیانی انجام خواهد گرفت.</small>
                                            </div>
                                            <hr class="my-4 mx-n4">

                                            <div class="row g-3 mt-3">
                                                <div class="row">
                                                    <div class="alert alert-primary" role="alert">1.اطلاعات هویتی</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-7 col-12">
                                                        <dl class="row mb-0">
                                                            <dt class="col-sm-4 mb-2 text-nowrap">نام :</dt>
                                                            <dd class="col-sm-8">تست</dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">نام خانوادگی:</dt>
                                                            <dd class="col-sm-8">تست</dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">نام پدر :</dt>
                                                            <dd class="col-sm-8">تست</dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">کدملی:</dt>
                                                            <dd class="col-sm-8">000000000</dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">شماره شناسنامه:</dt>
                                                            <dd class="col-sm-8">9999</dd>
                                                        </dl>
                                                    </div>
                                                    <div class="col-xl-5 col-12">
                                                        <dl class="row mb-0">
                                                            <dt class="col-sm-4 mb-2 text-nowrap">تماس:</dt>
                                                            <dd class="col-sm-8"><span class="d-inline-block" dir="ltr">+1 (605) 977-32-65</span></dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">کشور:</dt>
                                                            <dd class="col-sm-8">ایران</dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">استان:</dt>
                                                            <dd class="col-sm-8">تهران</dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">کدپستی:</dt>
                                                            <dd class="col-sm-8">403114</dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row g-3 mt-3">
                                                <div class="row">
                                                    <div class="alert alert-info" role="alert">2.مدارک هویتی</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        <dl class="row mb-0">
                                                            <dt class="col-sm-4 mb-2 text-nowrap">تصویر کارت ملی :</dt>
                                                            <dd class="col-sm-8">
                                                                <img class="img-fluid rounded my-4" src="{!! asset('img/backgrounds/7.jpg') !!}" height="300" width="300" alt="User avatar">
                                                            </dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">صفحه اول شناسنامه :</dt>
                                                            <dd class="col-sm-8">
                                                                <img class="img-fluid rounded my-4" src="{!! asset('img/backgrounds/11.jpg') !!}" height="300" width="300" alt="User avatar">
                                                            </dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">صفحه دوم شناسنامه :</dt>
                                                            <dd class="col-sm-8">
                                                                <img class="img-fluid rounded my-4" src="{!! asset('img/backgrounds/14.jpg') !!}" height="300" width="300" alt="User avatar">
                                                            </dd>
                                                            <dt class="col-sm-4 mb-2 text-nowrap">کارت معافیت یا پایان خدمت سربازی :</dt>
                                                            <dd class="col-sm-8">
                                                                <img class="img-fluid rounded my-4" src="{!! asset('img/backgrounds/16.jpg') !!}" height="300" width="300" alt="User avatar">
                                                            </dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">عکس 3*4 :</dt>
                                                            <dd class="col-sm-8">
                                                                <img class="img-fluid rounded my-4" src="{!! asset('img/backgrounds/7.jpg') !!}" height="300" width="300" alt="User avatar">
                                                            </dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">گواهی عدم اعتیاد :</dt>
                                                            <dd class="col-sm-8">
                                                                <img class="img-fluid rounded my-4" src="{!! asset('img/backgrounds/11.jpg') !!}" height="300" width="300" alt="User avatar">
                                                            </dd>

                                                        </dl>
                                                    </div>
                                                    <div class="col-6">
                                                        <dl class="row mb-0">
                                                            <dt class="col-sm-4 mb-2 text-nowrap">گواهی عدم سوء پیشینه :</dt>
                                                            <dd class="col-sm-8">
                                                                <img class="img-fluid rounded my-4" src="{!! asset('img/backgrounds/14.jpg') !!}" height="300" width="300" alt="User avatar">
                                                            </dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">نتیجه معاینات طب صنعتی :</dt>
                                                            <dd class="col-sm-8">
                                                                <img class="img-fluid rounded my-4" src="{!! asset('img/backgrounds/16.jpg') !!}" height="300" width="300" alt="User avatar">
                                                            </dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">تاییدیه آموزش ایمنی اداره کار :</dt>
                                                            <dd class="col-sm-8">
                                                                <img class="img-fluid rounded my-4" src="{!! asset('img/backgrounds/7.jpg') !!}" height="300" width="300" alt="User avatar">
                                                            </dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">سوابق بیمه تامین اجتماعی :</dt>
                                                            <dd class="col-sm-8">
                                                                <img class="img-fluid rounded my-4" src="{!! asset('img/backgrounds/7.jpg') !!}" height="300" width="300" alt="User avatar">
                                                            </dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">تعهد نامه محضری( در صورتی که حساب بانکی به نام شخص نباشد) :</dt>
                                                            <dd class="col-sm-8">
                                                                <img class="img-fluid rounded my-4" src="{!! asset('img/backgrounds/7.jpg') !!}" height="300" width="300" alt="User avatar">
                                                            </dd>

                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row g-3 mt-3">
                                                <div class="row">
                                                    <div class="alert alert-secondary" role="alert">3.سلامت جسمانی</div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-7 col-12">
                                                        <dl class="row mb-0">
                                                            <dt class="col-sm-4 mb-2 text-nowrap">1. آیا سابقه بیماری دارید :</dt>
                                                            <dd class="col-sm-8">خیر</dd>

                                                            <dt class="col-sm-10 mb-2 text-wrap">2. در صورت ابتلا به بیماری، آیا علایم شما در محیط کار تغییر می کند?</dt>
                                                            <dd class="col-sm-2">خیر</dd>

                                                            <dt class="col-sm-10 mb-2 text-wrap">3. آیا به غذا، دارو یا ماده خاصی حساسیت دارید؟ </dt>
                                                            <dd class="col-sm-2">خیر</dd>

                                                            <dt class="col-sm-10 mb-2 text-wrap">4. آیا سابقه بستری در بیمارستان دارید؟</dt>
                                                            <dd class="col-sm-2">بلی</dd>

                                                            <dt class="col-sm-10 mb-2 text-nowrap">5. آیا سابقه عمل جراحی دارید؟</dt>
                                                            <dd class="col-sm-2">9999</dd>

                                                            <dt class="col-sm-10 mb-2 text-nowrap">6. آیا داروی خاصی مصرف می کنید؟</dt>
                                                            <dd class="col-sm-2">9999</dd>

                                                            <dt class="col-sm-10 mb-2 text-nowrap">7. آیا اکنون سیگار می کشید؟</dt>
                                                            <dd class="col-sm-2">خیر</dd>

                                                            <dt class="col-sm-10 mb-2 text-nowrap">8. آیا سابقه قبلی مصرف سیگار دارید؟</dt>
                                                            <dd class="col-sm-2">خیر</dd>
                                                            <dt class="col-sm-10 mb-2 text-nowrap">9.آیا در اوقات فراغت ورزش خاصی انجام می دهید؟</dt>
                                                            <dd class="col-sm-2">خیر</dd>
                                                            <dt class="col-sm-10 mb-2 text-nowrap">10. آیا تاکنون دچار حادثه شغلی شده اید؟</dt>
                                                            <dd class="col-sm-2">خیر</dd>
                                                            <dt class="col-sm-10 mb-2 text-nowrap">11. آیا سابقه استفاده از استعلاجی برای مدت بیش از 3 روز دارید؟</dt>
                                                            <dd class="col-sm-2">خیر</dd>
                                                            <dt class="col-sm-10 mb-2 text-nowrap">12.آیا سابقه معرفی به کمیسیون پزشکی دارید؟</dt>
                                                            <dd class="col-sm-2">خیر</dd>
                                                        </dl>
                                                    </div>
                                                    <div class="col-xl-5 col-12">
                                                        <dl class="row mb-0">
                                                            <dt class="col-sm-10 mb-2 text-nowrap">بیماری:</dt>
                                                            <dd class="col-sm-2">سرماخوردگی</dd>

                                                            <dt class="col-sm-10 mb-2 text-nowrap">علایم:</dt>
                                                            <dd class="col-sm-2">ندارم</dd>

                                                            <dt class="col-sm-10 mb-2 text-nowrap">حسایت های دارویی:</dt>
                                                            <dd class="col-sm-2">ندارم</dd>

                                                            <dt class="col-sm-10 mb-2 text-nowrap">دلایل بستری:</dt>
                                                            <dd class="col-sm-2">سرماخوردگی</dd>
                                                            <dt class="col-sm-10 mb-2 text-nowrap">جراحی:</dt>
                                                            <dd class="col-sm-2">ندارم</dd>
                                                            <dt class="col-sm-10 mb-2 text-nowrap">داروها</dt>
                                                            <dd class="col-sm-2">ندارم</dd>
                                                            <dt class="col-sm-10 mb-2 text-nowrap">تعداد نخ روزانه؟ مدت استعمال:</dt>
                                                            <dd class="col-sm-2">ندارم</dd>
                                                            <dt class="col-sm-10 mb-2 text-nowrap">تعداد نخ روزانه؟ مدت استعمال:</dt>
                                                            <dd class="col-sm-2">ندارم</dd>
                                                            <dt class="col-sm-10 mb-2 text-nowrap">ورزش ها:</dt>
                                                            <dd class="col-sm-2">ندارم</dd>
                                                            <dt class="col-sm-10 mb-2 text-nowrap">نوع آسیب؟ علت؟</dt>
                                                            <dd class="col-sm-2">ندارم</dd>
                                                            <dt class="col-sm-10 mb-2 text-nowrap"></dt>
                                                            <dd class="col-sm-2"></dd>
                                                            <dt class="col-sm-10 mb-2 text-nowrap">علت:</dt>
                                                            <dd class="col-sm-2">ندارم</dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row g-3 mt-3">
                                                <div class="row">
                                                    <div class="alert alert-primary" role="alert">4.اطلاعات بانکی</div>
                                                </div>
                                                <div class="row">
                                                    <div class="added-cards">
                                                        <div class="cardMaster bg-lighter rounded-3 p-3 mb-3">
                                                            <div class="d-flex justify-content-between flex-sm-row flex-column">
                                                                <div class="card-information me-2">
                                                                    <img class="mb-3 img-fluid" width="48" height="48" src="https://myket.ir/app-icon/mob.banking.android.pasargad_c834b1f5-1007-437b-97d7-9235629c3afb.png" alt="Master Card">
                                                                    <div class="d-flex align-items-center mb-1 flex-wrap gap-2">
                                                                        <h6 class="mb-0 me-2">بانک پاسارگاد</h6>
                                                                        <span class="badge bg-label-primary">صاحب حساب</span>
                                                                    </div>
                                                                    <span class="card-number">∗∗∗∗ ∗∗∗∗ 9856</span>
                                                                </div>
                                                                <div class="d-flex flex-column text-start text-sm-end">
                                                                    <small class="mt-sm-auto mt-2 order-sm-1 order-0">شماره شبای حساب : IR57000000000000000000</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cardMaster bg-lighter rounded-3 p-3 mb-3">
                                                            <div class="d-flex justify-content-between flex-sm-row flex-column">
                                                                <div class="card-information me-2">
                                                                    <img class="mb-3 img-fluid" width="48" height="48" src="https://myket.ir/app-icon/mob.banking.android.pasargad_c834b1f5-1007-437b-97d7-9235629c3afb.png" alt="Master Card">
                                                                    <div class="d-flex align-items-center mb-1 flex-wrap gap-2">
                                                                        <h6 class="mb-0 me-2">بانک پاسارگاد</h6>
                                                                        <span class="badge bg-label-primary">صاحب حساب</span>
                                                                    </div>
                                                                    <span class="card-number">∗∗∗∗ ∗∗∗∗ 9856</span>
                                                                </div>
                                                                <div class="d-flex flex-column text-start text-sm-end">
                                                                    <small class="mt-sm-auto mt-2 order-sm-1 order-0">شماره شبای حساب : IR57000000000000000000</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="cardMaster bg-lighter rounded-3 p-3 mb-3">
                                                            <div class="d-flex justify-content-between flex-sm-row flex-column">
                                                                <div class="card-information me-2">
                                                                    <img class="mb-3 img-fluid" width="48" height="48" src="https://myket.ir/app-icon/mob.banking.android.pasargad_c834b1f5-1007-437b-97d7-9235629c3afb.png" alt="Master Card">
                                                                    <div class="d-flex align-items-center mb-1 flex-wrap gap-2">
                                                                        <h6 class="mb-0 me-2">بانک پاسارگاد</h6>
                                                                        <span class="badge bg-label-primary">صاحب حساب</span>
                                                                    </div>
                                                                    <span class="card-number">∗∗∗∗ ∗∗∗∗ 9856</span>
                                                                </div>
                                                                <div class="d-flex flex-column text-start text-sm-end">
                                                                    <small class="mt-sm-auto mt-2 order-sm-1 order-0">شماره شبای حساب : IR57000000000000000000</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row g-3 mt-3 mb-5">
                                                <div class="row">
                                                    <div class="alert alert-success" role="alert">5.تاریخ آماده بکار بودن </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xl-7 col-12">
                                                        <dl class="row mb-0">
                                                            <dt class="col-sm-4 mb-2 text-nowrap">تاریخ شروع :</dt>
                                                            <dd class="col-sm-8">28 آبان 1402</dd>
                                                        </dl>
                                                    </div>
                                                    <div class="col-xl-5 col-12">
                                                        <dl class="row mb-0">

                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12 d-flex justify-content-between">
                                                    <button class="btn btn-primary btn-prev">
                                                        <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                                        <span class="d-sm-inline-block d-none">قبلی</span>
                                                    </button>
                                                    <button class="btn btn-success btn-next">
                                                        <span class="d-sm-inline-block d-none me-sm-1">ثبت نهایی</span>
                                                        <i class="bx bx-chevron-right bx-sm me-sm-n2"></i>
                                                    </button>
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

    <script src="{!! asset('libs/jquery-validation/jquery.validate.min.js') !!}"></script>
    <script src="{!! asset('libs/moment/moment.js') !!}"></script>
    <script src="{!! asset('libs/jdate/jdate.js') !!}"></script>
    <script src="{!! asset('libs/flatpickr/flatpickr-jdate.js') !!}"></script>
    <script src="{!! asset('libs/flatpickr/l10n/fa-jdate.js') !!}"></script>
    <script>
        const flatpickrDate = document.querySelector('.flatpickr-date');
        if (flatpickrDate) {
            flatpickrDate.flatpickr({
                minDate: "today",
                monthSelectorType: 'static',
                locale: 'fa',
                altInput: true,
                altFormat: 'Y/m/d',
            });
        }


    </script>

    <script>

        //bank
        $('.bank-no').hide();

        //change bank attribute
        $("#bank-select").change(function(){
                if($('#bank-select').find(':selected').val() == '0') {
                    $('.bank-data').hide();
                    $('.bank-no').show();
                }
                else{
                    $('.bank-data').show();
                    $('.bank-no').hide();
                }
        });

        $(function(){
            $("#btn-copy").on('click', function(){
                var ele = $(this).parent().prev().clone(true);
                $(this).before(ele);
            })
        })

        //set date
        function initializeFlatpickr(element) {
                if (element) {
                    flatpickr(element, {
                        minDate: "today",
                        monthSelectorType: 'static',
                        locale: 'fa',
                        altInput: true,
                        altFormat: 'Y/m/d',
                    });
                }
        }


        //get date
        initializeFlatpickr(document.querySelector('.start-date'));
        initializeFlatpickr(document.querySelector('.end-date'));



        //add form to bank
        document.getElementById('btn-copy-date').addEventListener('click', function () {
                    var newRow = document.createElement('div');
                    newRow.className = 'row g-3 my-2';

                    var newInput1 = document.createElement('div');
                    newInput1.className = 'col-md-6 col-12 mb-4';
                    newInput1.innerHTML = '<label for="" class="form-label">لطفا اولین تاریخ شروع بکار خود را انتخاب نمایید.</label>' +
                                        '<input type="text" class="form-control start-date">';

                    var newInput2 = document.createElement('div');
                    newInput2.className = 'col-md-6 col-12 mb-4';
                    newInput2.innerHTML = '<label for="" class="form-label">لطفا آخرین تاریخ  کار خود را انتخاب نمایید.</label>' +
                                        '<input type="text" class="form-control end-date">';

                    newRow.appendChild(newInput1);
                    newRow.appendChild(newInput2);

                    document.getElementById('row').appendChild(newRow);

                    initializeFlatpickr(newRow.querySelector('.start-date'));
                    initializeFlatpickr(newRow.querySelector('.end-date'));
        });





            //select2
            $(document).ready(function() {
                $('#accessMethodsSelect').select2({
                    tags: true,
                    tokenSeparators: [',', ' '],
                });
            });

            //validate form
            $.validator.setDefaults({
                submitHandler: function (form) {
                    $("#btn").addClass('d-none');
                    $("#next").removeClass('d-none');
                },
            });

            var currentStep = 1;
            $( document ).ready( function () {
                $( "#signupForm" ).validate( {
                    rules: {
                        firstname: "required",
                        lastname: "required",
                        place: "required",
                        image:"required",
                        flatpickr:"required",
                        reasons:"required",
                        mobile1:"required",
                        mobile2:"required",
                        address:"required",
                        postal:"required",
                        work:"required",
                        insurance:"required",
                        hight:"required",
                        weight:"required",
                        flatpickr:"required",
                        moaref:"required",
                        moarefnumber:"required",
                        field:"required",
                        dev:"required",
                        fathername: {
                            required: true,
                            minlength: 2
                        },
                        nationalcode: {
                            required: true,
                            minlength: 10
                        },
                        birthcode: {
                            required: true,
                        },

                    },
                    messages: {
                        field:"لطفا رشته تحصیلی خود را وارد نمایید",
                        image : "لطفا تصویر کاربری خود را وارد نمایید",
                        dev:"عنوان تخصص را وارد نمایید",
                        moarefnumber:"لطفا شماره معرف را وارد نمایید",
                        moaref:"لطفا نام معرف را وارد کنید",
                        firstname: "لطفا نام را وارد کنید",
                        lastname: "لطفا  نام خانوادگی را وارد کنید",
                        place: "لطفا محل صدور را وارد کنید",
                        phone : 'لطفا تلفن  خود را وارد نمایید',
                        flatpickr:'لطفا تاریخ تولد را وارد نمایید',
                        reasons:'لطفا دلیل معافیت را وارد نمایید',
                        mobile1:'لطفا تلفن همراه خود را وارد نمایید',
                        mobile2:'لطفا تلفن همراه خود را وارد نمایید',
                        email: 'لطفا پست الکترونیک خود را وارد نمایید',
                        address:'لطفا نشانی محل سکونت خود را وارد نمایید',
                        postal:'لطفا کد پستی خود را وارد نمایید',
                        work:'لطفا نام محل اشتغال فعلی خود را وارد نمایید',
                        insurance:" لطفا شماره بیمه تامین اجتماعی خود را وارد نمایید ",
                        hight:"لطفا قد خود را وارد نمایید",
                        weight:"لطفا وزن خود را وارد نمایید",
                        fathername: {
                            required: "لطفا نام پدر را وارد کنید",
                            minlength: "نباید از 2 کاراکتر کمتر باشد"
                        },
                        nationalcode: {
                            required: "لطفا کدملی را وارد کنید",
                            minlength: "کد ملی از 10 کاراکتر کمتر نباید باشد"
                        },
                        birthcode: {
                            required: "لطفا شماره شناسنامه را وارد کنید",
                        },

                    },
                    errorElement: "em",
                    errorPlacement: function ( error, element ) {
                        // Add the `help-block` class to the error element
                        error.appendTo(element.parent());
                        error.addClass( "help-block" );

                        if ( element.prop( "type" ) === "checkbox" ) {
                            error.insertAfter( element.parent( "label" ) );
                        } else {
                            error.insertAfter( element );
                        }
                    },
                    highlight: function ( element, errorClass, validClass ) {
                        $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
                    },
                    unhighlight: function (element, errorClass, validClass) {
                        $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
                    }
                } );
            } );


    </script>
@endpush
