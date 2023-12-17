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
                                    <form action="{{route('user.register.form')}}" method="post" id="signupForm" enctype="multipart/form-data">
                                        @csrf
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
                                                    <button class="btn btn-label-secondary btn-prev" type="button" disabled>
                                                        <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                                        <span class="d-sm-inline-block d-none">قبلی</span>
                                                    </button>
                                                    <button class="btn btn-primary" type="button" id="next1">
                                                        <span class="d-sm-inline-block d-none me-sm-1">بعدی</span>
                                                        <i class="bx bx-chevron-left bx-sm me-sm-n2 "></i>
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
                                                                <input class="form-control" type="file" id="cart" name="cart">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"><small class="text-light fw-semibold">صفحه اول شناسنامه</small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                                <input class="form-control" type="file" id="shena" name="shena">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"><small class="text-light fw-semibold">صفحه دوم شناسنامه</small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                                <input class="form-control" type="file" id="shena2" name="shena2">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"><small class="text-light fw-semibold">کارت معافیت یا پایان خدمت سربازی</small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                                <input class="form-control" type="file" id="soldier" name="soldier">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"><small class="text-light fw-semibold">عکس 3*4 </small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                                <input class="form-control" type="file" id="image" name="image">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"><small class="text-light fw-semibold">گواهی عدم اعتیاد</small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                                <input class="form-control" type="file" id="smook_image" name="smook_image">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"><small class="text-light fw-semibold">گواهی عدم سوء پیشینه</small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                                <input class="form-control" type="file" id="police" name="police">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"><small class="text-light fw-semibold">نتیجه معاینات طب صنعتی</small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                                <input class="form-control" type="file" id="doctor" name="doctor">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"><small class="text-light fw-semibold">تاییدیه آموزش ایمنی اداره کار</small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                                <input class="form-control" type="file" id="work_image" name="work_image">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"><small class="text-light fw-semibold">سوابق بیمه تامین اجتماعی</small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PDF) بارگذاری نمایید.</label>
                                                                <input class="form-control" type="file" id="ins_image" name="ins_image">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"><small class="text-light fw-semibold">آخرین مدرک تحصیلی</small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PDF) بارگذاری نمایید.</label>
                                                                <input class="form-control" type="file" id="edu_image" name="edu_image">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"><small class="text-light fw-semibold">تعهد نامه محضری( در صورتی که حساب بانکی به نام شخص نباشد)</small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                                <input class="form-control" type="file" id="ju_image" name="ju_image">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle"><small class="text-light fw-semibold"> سایر مدارک</small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PDF) بارگذاری نمایید.</label>
                                                                <input class="form-control" type="file" id="other_image" name="other_image">
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>


                                                <div class="col-12 d-flex justify-content-between">
                                                    <button class="btn btn-primary btn-prev" type="button" id="prev1">
                                                        <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                                        <span class="d-sm-inline-block d-none">قبلی</span>
                                                    </button>
                                                    <button class="btn btn-primary" type="button" id="next2">
                                                        <span class="d-sm-inline-block d-none me-sm-1">بعدی</span>
                                                        <i class="bx bx-chevron-left bx-sm me-sm-n2 "></i>
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
                                                    <button class="btn btn-primary btn-prev" type="button" id="prev2">
                                                        <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                                        <span class="d-sm-inline-block d-none">قبلی</span>
                                                    </button>
                                                    <button class="btn btn-primary" type="button" id="next3">
                                                        <span class="d-sm-inline-block d-none me-sm-1">بعدی</span>
                                                        <i class="bx bx-chevron-left bx-sm me-sm-n2 "></i>
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
                                                            <select class="form-select bank-input" name="bank_name[]" id>
                                                            <option selected>-</option>
                                                            <option value="1">ملی</option>
                                                            <option value="2">ملت</option>
                                                            <option value="3">تجارت</option>
                                                            <option value="4">شهر</option>
                                                            <option value="5">سپه</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-4">
                                                            <label class="form-label" for="phone-number-mask">شماره شبا</label>
                                                            <div class="input-group">
                                                                <input type="text" id="phone-number-mask" class="form-control phone-number-mask text-start shaba-input" placeholder="0000 0000 0000" dir="ltr" name="shaba[]">
                                                                <span class="input-group-text">IR</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-md-6 col-sm-12 mb-4">
                                                            <label class="form-label" for="phone-number-mask">شماره حساب</label>
                                                            <div class="input-group">
                                                                <input type="text" id="phone-number-mask" class="form-control phone-number-mask text-start account-number-input" placeholder="0000 0000 0000" dir="ltr" name="account_number[]">
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
                                                    <button class="btn btn-primary btn-prev" type="button" id="prev3">
                                                        <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                                        <span class="d-sm-inline-block d-none">قبلی</span>
                                                    </button>
                                                    <button class="btn btn-primary" type="button" id="next4">
                                                        <span class="d-sm-inline-block d-none me-sm-1">بعدی</span>
                                                        <i class="bx bx-chevron-left bx-sm me-sm-n2 "></i>
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
                                                    <input type="text" class="form-control start-date" name="start_date[]" id="t1">
                                                </div>

                                                <div class="col-md-6 col-12 mb-4">
                                                    <label for="" class="form-label">لطفا آخرین تاریخ  کار خود را انتخاب نمایید.</label>
                                                    <input type="text" class="form-control end-date" name="end_date[]" id="t2">
                                                </div>

                                            </div>
                                            <div class="mb-4">
                                                <button type="button" id="btn-copy-date" class="btn btn-success btn-sm">+</button>
                                            </div>


                                            <div class="col-12 d-flex justify-content-between">
                                                <button class="btn btn-primary btn-prev" type="button" id="prev4">
                                                    <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                                    <span class="d-sm-inline-block d-none">قبلی</span>
                                                </button>
                                                <button class="btn btn-primary" type="button" id="next5">
                                                    <span class="d-sm-inline-block d-none me-sm-1">بعدی</span>
                                                    <i class="bx bx-chevron-left bx-sm me-sm-n2 "></i>
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
                                                            <dd class="col-sm-8" id="f"></dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">نام خانوادگی:</dt>
                                                            <dd class="col-sm-8" id="m"></dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">نام پدر :</dt>
                                                            <dd class="col-sm-8" id="n"></dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">کدملی:</dt>
                                                            <dd class="col-sm-8" id="l"></dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">شماره شناسنامه:</dt>
                                                            <dd class="col-sm-8" id="s"></dd>
                                                        </dl>
                                                    </div>
                                                    <div class="col-xl-5 col-12">
                                                        <dl class="row mb-0">
                                                            <dt class="col-sm-4 mb-2 text-nowrap">تماس:</dt>
                                                            <dd class="col-sm-8"><span class="d-inline-block" id="k" dir="ltr"></span></dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">کشور:</dt>
                                                            <dd class="col-sm-8">ایران</dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">استان:</dt>
                                                            <dd class="col-sm-8" id="c"></dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">کدپستی:</dt>
                                                            <dd class="col-sm-8" id="p"></dd>
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
                                                                <img class="img-fluid rounded my-4" id="previewImage" height="300" width="300" alt="User avatar">
                                                            </dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">صفحه اول شناسنامه :</dt>
                                                            <dd class="col-sm-8">
                                                                <img class="img-fluid rounded my-4" id="previewImage2" height="300" width="300" alt="User avatar">
                                                            </dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">صفحه دوم شناسنامه :</dt>
                                                            <dd class="col-sm-8">
                                                                <img class="img-fluid rounded my-4" id="previewImage3" height="300" width="300" alt="User avatar">
                                                            </dd>
                                                            <dt class="col-sm-4 mb-2 text-nowrap">کارت معافیت یا پایان خدمت سربازی :</dt>
                                                            <dd class="col-sm-8">
                                                                <img class="img-fluid rounded my-4" id="previewImage4" height="300" width="300" alt="User avatar">
                                                            </dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">عکس 3*4 :</dt>
                                                            <dd class="col-sm-8">
                                                                <img class="img-fluid rounded my-4" id="previewImage5" height="300" width="300" alt="User avatar">
                                                            </dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">گواهی عدم اعتیاد :</dt>
                                                            <dd class="col-sm-8">
                                                                <img class="img-fluid rounded my-4" id="previewImage6" height="300" width="300" alt="User avatar">
                                                            </dd>

                                                        </dl>
                                                    </div>
                                                    <div class="col-6">
                                                        <dl class="row mb-0">
                                                            <dt class="col-sm-4 mb-2 text-nowrap">گواهی عدم سوء پیشینه :</dt>
                                                            <dd class="col-sm-8">
                                                                <img class="img-fluid rounded my-4" id="previewImage7" height="300" width="300" alt="User avatar">
                                                            </dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">نتیجه معاینات طب صنعتی :</dt>
                                                            <dd class="col-sm-8">
                                                                <img class="img-fluid rounded my-4" id="previewImage8" height="300" width="300" alt="User avatar">
                                                            </dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">تاییدیه آموزش ایمنی اداره کار :</dt>
                                                            <dd class="col-sm-8">
                                                                <img class="img-fluid rounded my-4" id="previewImage9" height="300" width="300" alt="User avatar">
                                                            </dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">سوابق بیمه تامین اجتماعی :</dt>
                                                            <dd class="col-sm-8">
                                                                <img class="img-fluid rounded my-4" id="previewImage10" height="300" width="300" alt="User avatar">
                                                            </dd>

                                                            <dt class="col-sm-4 mb-2 text-nowrap">تعهد نامه محضری :</dt>
                                                            <dd class="col-sm-8">
                                                                <img class="img-fluid rounded my-4" id="previewImage11" height="300" width="300" alt="User avatar">
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
                                                            <dt class="col-sm-8 mb-2 text-nowrap">1. آیا سابقه بیماری دارید :</dt>
                                                            <dd class="col-sm-4" id="op1">خیر</dd>

                                                            <dt class="col-sm-10 mb-2 text-wrap">2. در صورت ابتلا به بیماری، آیا علایم شما در محیط کار تغییر می کند?</dt>
                                                            <dd class="col-sm-2" id="op2">خیر</dd>

                                                            <dt class="col-sm-10 mb-2 text-wrap">3. آیا به غذا، دارو یا ماده خاصی حساسیت دارید؟ </dt>
                                                            <dd class="col-sm-2" id="op3">خیر</dd>

                                                            <dt class="col-sm-10 mb-2 text-wrap">4. آیا سابقه بستری در بیمارستان دارید؟</dt>
                                                            <dd class="col-sm-2" id="op4">خیر</dd>

                                                            <dt class="col-sm-10 mb-2 text-nowrap">5. آیا سابقه عمل جراحی دارید؟</dt>
                                                            <dd class="col-sm-2" id="op5">خیر</dd>

                                                            <dt class="col-sm-10 mb-2 text-nowrap">6. آیا داروی خاصی مصرف می کنید؟</dt>
                                                            <dd class="col-sm-2"  id="op6">خیر</dd>

                                                            <dt class="col-sm-10 mb-2 text-nowrap">7. آیا اکنون سیگار می کشید؟</dt>
                                                            <dd class="col-sm-2"  id="op7">خیر</dd>

                                                            <dt class="col-sm-10 mb-2 text-nowrap">8. آیا سابقه قبلی مصرف سیگار دارید؟</dt>
                                                            <dd class="col-sm-2"  id="op8">خیر</dd>
                                                            <dt class="col-sm-10 mb-2 text-nowrap">9.آیا در اوقات فراغت ورزش خاصی انجام می دهید؟</dt>
                                                            <dd class="col-sm-2"  id="op9">خیر</dd>
                                                            <dt class="col-sm-10 mb-2 text-nowrap">10. آیا تاکنون دچار حادثه شغلی شده اید؟</dt>
                                                            <dd class="col-sm-2"  id="op9">خیر</dd>
                                                            <dt class="col-sm-10 mb-2 text-nowrap">11. آیا سابقه استفاده از استعلاجی برای مدت بیش از 3 روز دارید؟</dt>
                                                            <dd class="col-sm-2"  id="op10">خیر</dd>
                                                            <dt class="col-sm-10 mb-2 text-nowrap">12.آیا سابقه معرفی به کمیسیون پزشکی دارید؟</dt>
                                                            <dd class="col-sm-2"  id="op11">خیر</dd>
                                                        </dl>
                                                    </div>
                                                    <div class="col-xl-5 col-12">
                                                        <dl class="row mb-0">
                                                            <dt class="col-sm-10 mb-2 text-nowrap">بیماری:</dt>
                                                            <dd class="col-sm-2" id="w1"></dd>

                                                            <dt class="col-sm-10 mb-2 text-nowrap">علایم:</dt>
                                                            <dd class="col-sm-2" id="w2"></dd>

                                                            <dt class="col-sm-10 mb-2 text-nowrap">حسایت های دارویی:</dt>
                                                            <dd class="col-sm-2" id="w3"></dd>

                                                            <dt class="col-sm-10 mb-2 text-nowrap">دلایل بستری:</dt>
                                                            <dd class="col-sm-2" id="w4"></dd>
                                                            <dt class="col-sm-10 mb-2 text-nowrap">جراحی:</dt>
                                                            <dd class="col-sm-2" id="w5"></dd>
                                                            <dt class="col-sm-10 mb-2 text-nowrap">داروها</dt>
                                                            <dd class="col-sm-2" id="w6"></dd>
                                                            <dt class="col-sm-10 mb-2 text-nowrap">تعداد نخ روزانه؟ مدت استعمال:</dt>
                                                            <dd class="col-sm-2"id="w7"></dd>
                                                            <dt class="col-sm-10 mb-2 text-nowrap">تعداد نخ روزانه؟ مدت استعمال:</dt>
                                                            <dd class="col-sm-2" id="w8"></dd>
                                                            <dt class="col-sm-10 mb-2 text-nowrap">ورزش ها:</dt>
                                                            <dd class="col-sm-2" id="w9"></dd>
                                                            <dt class="col-sm-10 mb-2 text-nowrap">نوع آسیب؟ علت؟</dt>
                                                            <dd class="col-sm-2" id="w10"></dd>
                                                            <dt class="col-sm-10 mb-2 text-nowrap"></dt>
                                                            <dd class="col-sm-2"></dd>
                                                            <dt class="col-sm-10 mb-2 text-nowrap">علت:</dt>
                                                            <dd class="col-sm-2" id="w11"></dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row g-3 mt-3">
                                                <div class="row">
                                                    <div class="alert alert-primary" role="alert">4.اطلاعات بانکی</div>
                                                </div>
                                                <div class="row">
                                                    <div class="added-cards" id="added-cards">
                                                        <div class="cardMaster bg-lighter rounded-3 p-3 mb-3">
                                                            <div class="d-flex justify-content-between flex-sm-row flex-column">
                                                                <div class="card-information me-2">
                                                                    <img class="mb-3 img-fluid" width="48" height="48" src="https://myket.ir/app-icon/mob.banking.android.pasargad_c834b1f5-1007-437b-97d7-9235629c3afb.png" alt="Master Card">
                                                                    <div class="d-flex align-items-center mb-1 flex-wrap gap-2">
                                                                        <h6 class="mb-0 me-2" id="bank1"> پاسارگاد</h6>
                                                                        <span class="badge bg-label-primary">صاحب حساب</span>
                                                                    </div>
                                                                    <span class="card-number" id="nubmer">****</span>
                                                                </div>
                                                                <div class="d-flex flex-column text-start text-sm-end">
                                                                    <small class="mt-sm-auto mt-2 order-sm-1 order-0" id="shabaa">شماره شبای حساب : IR </small>
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
                                                    <div class="col-xl-5 col-12">
                                                        <dl class="row mb-0">
                                                            <dt class="col-sm-4 mb-2 text-nowrap">تاریخ شروع :</dt>
                                                            <dd class="col-sm-8" id="wt1"></dd>
                                                        </dl>
                                                    </div>
                                                    <div class="col-xl-5 col-12">
                                                        <dl class="row mb-0">
                                                            <dt class="col-sm-4 mb-2 text-nowrap">تاریخ پایان :</dt>
                                                            <dd class="col-sm-8" id="wt2"></dd>
                                                        </dl>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-12 d-flex justify-content-between">
                                                    <button class="btn btn-primary btn-prev" type="button" id="prev5">
                                                        <i class="bx bx-chevron-left bx-sm ms-sm-n2"></i>
                                                        <span class="d-sm-inline-block d-none">قبلی</span>
                                                    </button>
                                                    <input type="submit" class="btn btn-success" value="ثبت نهایی">
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
                //minDate: "today",
                monthSelectorType: 'static',
                locale: 'fa',
                altInput: true,
                altFormat: 'Y/m/d',
            });
        }


    </script>

    <script>

        var maxCards = 100;

        $(".bank-input, .shaba-input, .account-number-input").on("keyup", function() {
            var bankName = $(this).closest(".row").find(".bank-input").val();
            var shaba = $(this).closest(".row").find(".shaba-input").val();
            var accountNumber = $(this).closest(".row").find(".account-number-input").val();

            $(".cardMaster:last-child .card-information h6").text(getBankName(bankName));
            $(".cardMaster:last-child .card-information .card-number").text(accountNumber);
            $(".cardMaster:last-child .text-start small").text("شماره شبای حساب : " + shaba);
        });

        function createCard(bankName, shaba, accountNumber) {
            var cardHtml = `
                    <div class="cardMaster bg-lighter rounded-3 p-3 mb-3">
                    <div class="d-flex justify-content-between flex-sm-row flex-column">
                    <div class="card-information me-2">
                    <img class="mb-3 img-fluid" width="48" height="48" src="https://myket.ir/app-icon/mob.banking.android.pasargad_c834b1f5-1007-437b-97d7-9235629c3afb.png" alt="Master Card">
                    <div class="d-flex align-items-center mb-1 flex-wrap gap-2">
                    <h6 class="mb-0 me-2" id="bank1">${getBankName(bankName)}</h6>
                    <span class="badge bg-label-primary">صاحب حساب</span>
                    </div>
                    <span class="card-number" id="nubmer">${accountNumber}</span>
                    </div>
                    <div class="d-flex flex-column text-start text-sm-end">
                    <small class="mt-sm-auto mt-2 order-sm-1 order-0" id="shabaa">شماره شبای حساب : IR ${shaba} </small>
                    </div>
                    </div>
                    </div>
            `;

            return cardHtml;
        }

        $(document).on("click", "#btn-copy", function() {
            var bankName = $(this).closest(".row").find(".bank-input").val();
            var shaba = $(this).closest(".row").find(".shaba-input").val();
            var accountNumber = $(this).closest(".row").find(".account-number-input").val();

            var newCard = createCard(bankName, shaba, accountNumber);

            $("#added-cards").append(newCard);

            if ($("#added-cards > .cardMaster").length >= maxCards) {
                $("#btn-copy").prop("disabled", true);
            }
        });

        function getBankName(bankCode) {
            switch (bankCode) {
                case "1":
                    return "ملی";
                case "2":
                    return "ملت";
                case "3":
                    return "تجارت";
                case "4":
                    return "شهر";
                case "5":
                    return "سپه";
                default:
                    return "-";
            }
        }



        // add input value to Dom
        $(document).ready(function() {

            $("#t1").on("input", function() {
                var inputValue = $(this).val();
                $("#wt1").text(inputValue);
            });


            $("#t2").on("input", function() {
                var inputValue = $(this).val();
                $("#wt2").text(inputValue);
            });



            $("#a1").on("input", function() {
                var inputValue = $(this).val();
                $("#w1").text(inputValue);
            });

            $("#a2").on("input", function() {
                var inputValue = $(this).val();
                $("#w2").text(inputValue);
            });

            $("#a3").on("input", function() {
                var inputValue = $(this).val();
                $("#w3").text(inputValue);
            });

            $("#a4").on("input", function() {
                var inputValue = $(this).val();
                $("#w4").text(inputValue);
            });

            $("#a5").on("input", function() {
                var inputValue = $(this).val();
                $("#w5").text(inputValue);
            });

            $("#a6").on("input", function() {
                var inputValue = $(this).val();
                $("#w6").text(inputValue);
            });

            $("#a7").on("input", function() {
                var inputValue = $(this).val();
                $("#w7").text(inputValue);
            });

            $("#a8").on("input", function() {
                var inputValue = $(this).val();
                $("#w8").text(inputValue);
            });

            $("#a9").on("input", function() {
                var inputValue = $(this).val();
                $("#w9").text(inputValue);
            });

            $("#a10").on("input", function() {
                var inputValue = $(this).val();
                $("#w10").text(inputValue);
            });

            $("#a11").on("input", function() {
                var inputValue = $(this).val();
                $("#w11").text(inputValue);
            });

             $("#s1").on("change", function() {
                    var selectedValue = $(this).val();
                    $("#op1").text(selectedValue == "1" ? "بله" : "خیر");
              });

              $("#s2").on("change", function() {
                    var selectedValue = $(this).val();
                    $("#op2").text(selectedValue == "1" ? "بله" : "خیر");
              });

              $("#s3").on("change", function() {
                    var selectedValue = $(this).val();
                    $("#op3").text(selectedValue == "1" ? "بله" : "خیر");
              });

              $("#s4").on("change", function() {
                    var selectedValue = $(this).val();
                    $("#op4").text(selectedValue == "1" ? "بله" : "خیر");
              });

              $("#s5").on("change", function() {
                    var selectedValue = $(this).val();
                    $("#op5").text(selectedValue == "1" ? "بله" : "خیر");
              });

              $("#s6").on("change", function() {
                    var selectedValue = $(this).val();
                    $("#op6").text(selectedValue == "1" ? "بله" : "خیر");
              });

              $("#s7").on("change", function() {
                    var selectedValue = $(this).val();
                    $("#op7").text(selectedValue == "1" ? "بله" : "خیر");
              });

              $("#s8").on("change", function() {
                    var selectedValue = $(this).val();
                    $("#op8").text(selectedValue == "1" ? "بله" : "خیر");
              });

              $("#s9").on("change", function() {
                    var selectedValue = $(this).val();
                    $("#op9").text(selectedValue == "1" ? "بله" : "خیر");
              });

              $("#s10").on("change", function() {
                    var selectedValue = $(this).val();
                    $("#op10").text(selectedValue == "1" ? "بله" : "خیر");
              });

              $("#s11").on("change", function() {
                    var selectedValue = $(this).val();
                    $("#op11").text(selectedValue == "1" ? "بله" : "خیر");
              });



            $("#firstname").on("input", function() {
                var inputValue = $(this).val();
                $("#f").text(inputValue);
            });

            $("#lastname").on("input", function() {
                var inputValue = $(this).val();
                $("#m").text(inputValue);
            });

            $("#fathername").on("input", function() {
                var inputValue = $(this).val();
                $("#n").text(inputValue);
            });

            $("#national_code").on("input", function() {
                var inputValue = $(this).val();
                $("#l").text(inputValue);
            });

            $("#birth_code").on("input", function() {
                var inputValue = $(this).val();
                $("#s").text(inputValue);
            });

            $("#mobile1").on("input", function() {
                var inputValue = $(this).val();
                $("#k").text(inputValue);
            });

            $("#place").on("input", function() {
                var inputValue = $(this).val();
                $("#c").text(inputValue);
            });

            $("#postal").on("input", function() {
                var inputValue = $(this).val();
                $("#p").text(inputValue);
            });

            $("#cart").on("change", function() {
                    var input = $(this)[0];
                    var file = input.files[0];

                    if (file && file.type.match('image.*')) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $("#previewImage").attr("src", e.target.result);
                        };

                        reader.readAsDataURL(file);
                    } else {
                        $("#previewImage").attr("src", "");
                    }
             });

             $("#shena").on("change", function() {
                    var input = $(this)[0];
                    var file = input.files[0];

                    if (file && file.type.match('image.*')) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $("#previewImage2").attr("src", e.target.result);
                        };

                        reader.readAsDataURL(file);
                    } else {
                        $("#previewImage2").attr("src", "");
                    }
             });

             $("#shena2").on("change", function() {
                    var input = $(this)[0];
                    var file = input.files[0];

                    if (file && file.type.match('image.*')) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $("#previewImage3").attr("src", e.target.result);
                        };

                        reader.readAsDataURL(file);
                    } else {
                        $("#previewImage3").attr("src", "");
                    }
             });


             $("#soldier").on("change", function() {
                    var input = $(this)[0];
                    var file = input.files[0];

                    if (file && file.type.match('image.*')) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $("#previewImage4").attr("src", e.target.result);
                        };

                        reader.readAsDataURL(file);
                    } else {
                        $("#previewImage4").attr("src", "");
                    }
             });


             $("#image").on("change", function() {
                    var input = $(this)[0];
                    var file = input.files[0];

                    if (file && file.type.match('image.*')) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $("#previewImage5").attr("src", e.target.result);
                        };

                        reader.readAsDataURL(file);
                    } else {
                        $("#previewImage5").attr("src", "");
                    }
             });


             $("#smook_image").on("change", function() {
                    var input = $(this)[0];
                    var file = input.files[0];

                    if (file && file.type.match('image.*')) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $("#previewImage6").attr("src", e.target.result);
                        };

                        reader.readAsDataURL(file);
                    } else {
                        $("#previewImage6").attr("src", "");
                    }
             });


             $("#police").on("change", function() {
                    var input = $(this)[0];
                    var file = input.files[0];

                    if (file && file.type.match('image.*')) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $("#previewImage7").attr("src", e.target.result);
                        };

                        reader.readAsDataURL(file);
                    } else {
                        $("#previewImage7").attr("src", "");
                    }
             });


             $("#doctor").on("change", function() {
                    var input = $(this)[0];
                    var file = input.files[0];

                    if (file && file.type.match('image.*')) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $("#previewImage8").attr("src", e.target.result);
                        };

                        reader.readAsDataURL(file);
                    } else {
                        $("#previewImage8").attr("src", "");
                    }
             });


             $("#work_image").on("change", function() {
                    var input = $(this)[0];
                    var file = input.files[0];

                    if (file && file.type.match('image.*')) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $("#previewImage9").attr("src", e.target.result);
                        };

                        reader.readAsDataURL(file);
                    } else {
                        $("#previewImage9").attr("src", "");
                    }
             });


             $("#ins_image").on("change", function() {
                    var input = $(this)[0];
                    var file = input.files[0];

                    if (file && file.type.match('image.*')) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $("#previewImage10").attr("src", e.target.result);
                        };

                        reader.readAsDataURL(file);
                    } else {
                        $("#previewImage10").attr("src", "");
                    }
             });


             $("#ju_image").on("change", function() {
                    var input = $(this)[0];
                    var file = input.files[0];

                    if (file && file.type.match('image.*')) {
                        var reader = new FileReader();

                        reader.onload = function(e) {
                            $("#previewImage11").attr("src", e.target.result);
                        };

                        reader.readAsDataURL(file);
                    } else {
                        $("#previewImage11").attr("src", "");
                    }
             });

     });

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
                ele.find('.bank-input').val('');
                ele.find('.shaba-input').val('');
                ele.find('.account-number-input').val('');
            });
        });

        //set date
        function initializeFlatpickr(element) {
                if (element) {
                    flatpickr(element, {
                        //minDate: "today",
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
                                        '<input type="text" class="form-control start-date" name="start_date[]">';

                    var newInput2 = document.createElement('div');
                    newInput2.className = 'col-md-6 col-12 mb-4';
                    newInput2.innerHTML = '<label for="" class="form-label">لطفا آخرین تاریخ  کار خود را انتخاب نمایید.</label>' +
                                        '<input type="text" class="form-control end-date" name="end_date[]">';

                    newRow.appendChild(newInput1);
                    newRow.appendChild(newInput2);

                    document.getElementById('row').appendChild(newRow);

                    initializeFlatpickr(newRow.querySelector('.start-date'));
                    initializeFlatpickr(newRow.querySelector('.end-date'));
        });

        function toEnglish(n) {
    var t = {
    "۰": "0",
    "۱": "1",
    "۲": "2",
    "۳": "3",
    "۴": "4",
    "۵": "5",
    "۶": "6",
    "۷": "7",
    "۸": "8",
    "۹": "9"
    };
    return n.replace(/['۰۱۲۳۴۵۶۷۸۹']/g, function (n) {
    return t[n]
    })
    }

            //select2
            $(document).ready(function() {
                $('#accessMethodsSelect').select2({
                    tags: true,
                    tokenSeparators: [',', ' '],
                });
            });


            //valiadte
            $( document ).ready( function () {
                $( "#signupForm" ).validate( {
                    rules: {
                        cart:{
                             required: true,
                            accept: "image/jpeg, image/png,image/jpg"
                        },
                        shena: {
                             required: true,
                           accept: "image/jpeg, image/png,image/jpg"
                        },
                        shena2: {
                             required: true,
                          accept: "image/jpeg, image/png,image/jpg"
                        },
                        soldier: {
                            required: true,
                          accept: "image/jpeg, image/png,image/jpg"
                        },
                        image: {
                             required: true,
                            accept: "image/jpeg, image/png,image/jpg"
                        },
                        smook_image: {
                             required: true,
                          accept: "image/jpeg, image/png,image/jpg"
                        },
                        police: {
                             required: true,
                          accept: "image/jpeg, image/png,image/jpg"
                        },
                        doctor: {
                             required: true,
                             accept: "image/jpeg, image/png,image/jpg"
                        },
                        work_image: {
                             required: true,
                            accept: "image/jpeg, image/png,image/jpg"
                        },
                        ins_image: {
                            required: true,
                         accept: "image/jpeg, image/png,image/jpg"
                        },
                        edu_image: {
                            required: true,
                         accept: "image/jpeg, image/png,image/jpg"
                        },
                        ju_image: {
                              required: true,
                            accept: "image/jpeg, image/png,image/jpg"
                        },
                        other_image: {
                             required: true,
                             accept: "image/jpeg, image/png,image/jpg"
                        },
                         first_name: "required",
                         last_name: "required",
                         birth_place: "required",
                         avatar:{
                            required: true,
                         accept: "image/jpeg, image/png,image/jpg"
                         },
                         status_detail:"required",
                         mobile1: {
                             required: true,
                             digits: true,
                             minlength: 11
                         },
                         mobile2: {
                             required: true,
                             digits: true,
                             minlength: 11
                         },
                         body:"required",
                         postal_code: {
                             required: true,
                             digits: true
                         },
                         job_place:"required",
                         number_insurance: {
                             required: true,
                             digits: true
                         },
                         hight:"required",
                         weight:"required",
                         birth_day:"required",
                         name_identifier:"required",
                         mobile_identifier:{
                             required: true,
                             digits: true,
                             minlength: 11
                         },
                         field:"required",
                         job:"required",
                         father_name: {
                             required: true,
                             minlength: 2
                         },
                         phone:{
                            digits: true,
                         },
                         national_code: {
                                required: true,
                                digits: true,
                                minlength: 10
                        },
                            birth_code: {
                             required: true,
                             digits: true,
                         },
                         email: {
                            //required: true,
                            email: true
                        }
                    },
                    messages: {
                        cart: "عکس  کارت ملی اجباری است",
                        shena:"مدرک موردنظراجباری است",
                        shena2: " مدرک مورد نظر اجباری است",
                        soldier: " مدرک مورد نظر اجباری است",
                        image: " مدرک مورد نظر اجباری است",
                        smook_image:" مدرک مورد نظر اجباری است",
                        police: " مدرک مورد نظر اجباری است",
                        doctor: " مدرک مورد نظر اجباری است",
                        work_image: " مدرک مورد نظر اجباری است",
                        ins_image: " مدرک مورد نظر اجباری است",
                        edu_image: " مدرک مورد نظر اجباری است",
                        ju_image: " مدرک مورد نظر اجباری است",
                        other_image:" مدرک مورد نظر اجباری است",
                        field:"لطفا رشته تحصیلی خود را وارد نمایید",
                        avatar : {
                            required:"لطفا تصویر کاربری خود را وارد نمایید",
                            accept:"لطفا عکس با فرمت مورد نظر وارد کنید"
                        },
                        job:"عنوان تخصص را وارد نمایید",
                        mobile_identifier:{
                            required: "وارد کردن  شماره همراه معرف الزامی است",
                            digits: "لطفاً فقط از اعداد استفاده کنید",
                            minlength: "باید حداقل 11 رقم باشد"
                        },
                        name_identifier:"لطفا نام و نام خانوادگی معرف را وارد کنید",
                        first_name: "لطفا نام را وارد کنید",
                        last_name: "لطفا  نام خانوادگی را وارد کنید",
                        birth_place: "لطفا محل صدور را وارد کنید",
                        phone : "لطفاً فقط از اعداد استفاده کنید",
                        birth_day:'لطفا تاریخ تولد را وارد نمایید',
                        mobile1:{
                            required: "وارد کردن تلفن همراه الزامی است",
                            digits: "لطفاً فقط از اعداد استفاده کنید",
                            minlength: "باید حداقل 11 رقم باشد"
                        },
                        mobile2:{
                            required: "وارد کردن تلفن همراه الزامی است",
                            digits: "لطفاً فقط از اعداد استفاده کنید",
                            minlength: "باید حداقل 11 رقم باشد"
                        },
                        email: 'لطفا پست الکترونیک خود را وارد نمایید',
                        body:'لطفا نشانی محل سکونت خود را وارد نمایید',
                        postal_code:{
                            required: "وارد کردن کدپستی الزامی است",
                            digits: "لطفاً فقط از اعداد استفاده کنید",
                        },
                        job_place:'لطفا نام محل اشتغال فعلی خود را وارد نمایید',
                        number_insurance:{
                            required: "وارد کردن شماره بیمه تامین اجتماعی الزامی است",
                            digits: "لطفاً فقط از اعداد استفاده کنید",
                            minlength: "باید حداقل 11 رقم باشد"
                        },
                        hight:"لطفا قد خود را وارد نمایید",
                        weight:"لطفا وزن خود را وارد نمایید",
                        status_detail:"لطفا دلیل معافیت خود را وارد نمایید",
                        father_name: {
                            required: "لطفا نام پدر را وارد کنید",
                            minlength: "نباید از 2 کاراکتر کمتر باشد"
                        },
                        national_code: {
                            remote: "این کدملی قبلاً ثبت شده است",
                            required: "وارد کردن کدملی الزامی است",
                            digits: "لطفاً فقط از اعداد استفاده کنید",
                            minlength: "کدملی باید حداقل 10 رقم باشد",
                        },
                        birth_code: {
                            required: "لطفا شماره شناسنامه را وارد کنید",
                            digits: "لطفاً فقط از اعداد استفاده کنید",
                        },
                        email: {
                            //required: "وارد کردن ایمیل الزامی است",
                            email: "لطفاً یک ایمیل معتبر وارد کنید"
                        }

                    },
                    errorElement: "em",
                    errorPlacement: function ( error, element ) {
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

            //validate handler form
            $.validator.setDefaults({
                 submitHandler: function (form) {
                    form.submit();
                 },
             });

            //customize next step
            $('#next1').click(function(){
                if ($("#signupForm").valid()) {
                    var stepper = new Stepper(document.querySelector('.bs-stepper'))
                    stepper.to(2)
                } else {
                    console.log("لطفاً اطلاعات را به درستی وارد کنید.");
                }
            });
            $('#next2').click(function(){
                if ($("#signupForm").valid()) {
                    var stepper = new Stepper(document.querySelector('.bs-stepper'))
                    stepper.to(3)
               } else {
                console.log("لطفاً اطلاعات را به درستی وارد کنید.");
              }
            });
            $('#next3').click(function(){
                if ($("#signupForm").valid()) {
                    var stepper = new Stepper(document.querySelector('.bs-stepper'))
                    stepper.to(4)
                } else {
                    console.log("لطفاً اطلاعات را به درستی وارد کنید.");
                }
            });
            $('#next4').click(function(){
                if ($("#signupForm").valid()) {
                    var stepper = new Stepper(document.querySelector('.bs-stepper'))
                    stepper.to(5)
                } else {
                    console.log("لطفاً اطلاعات را به درستی وارد کنید.");
                }
            });
            $('#next5').click(function(){
                if ($("#signupForm").valid()) {
                    var stepper = new Stepper(document.querySelector('.bs-stepper'))
                    stepper.to(6)
                } else {
                    console.log("لطفاً اطلاعات را به درستی وارد کنید.");
                }
            });
            //customize prev step
            $('#prev1').click(function(){
                    var stepper = new Stepper(document.querySelector('.bs-stepper'))
                    stepper.to(1)
            });
            $('#prev2').click(function(){
                    var stepper = new Stepper(document.querySelector('.bs-stepper'))
                    stepper.to(2)
            });
            $('#prev3').click(function(){
                    var stepper = new Stepper(document.querySelector('.bs-stepper'))
                    stepper.to(3)
            });
            $('#prev4').click(function(){
                    var stepper = new Stepper(document.querySelector('.bs-stepper'))
                    stepper.to(4)
            });
            $('#prev5').click(function(){
                    var stepper = new Stepper(document.querySelector('.bs-stepper'))
                    stepper.to(5)
            });

    </script>
@endpush
