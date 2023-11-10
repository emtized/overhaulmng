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
                                            <hr class="my-4 mx-n4">

                                            <h6 class="mb-b fw-normal">1.اطلاعات فردی</h6>
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
                                                <hr class="my-4 mx-n4">

                                                <h6 class="mb-b fw-normal">2.اطلاعات تماس</h6>
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
                                                <hr class="my-4 mx-n4">
                                                <h6 class="mb-b fw-normal">3.اطلاعات محل سکونت</h6>
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
                                                <hr class="my-4 mx-n4">
                                                <h6 class="mb-b fw-normal">4.اطلاعات اشتغال و بیمه</h6>
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
                                                        <td class="align-middle"><small class="text-light fw-semibold">تعهد نامه محضری( در صورتی که حساب بانکی به نام شخص نباشد)</small></td>
                                                        <td class="py-3">
                                                            <div class="mb-3">
                                                                <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
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

                                            <div class="row g-3">
                                                <div class="col-sm-3">
                                                    <label class="form-label" for="">1. آیا سابقه بیماری دارید</label>
                                                    <select class="form-select">
                                                        <option selected>خیر</option>
                                                        <option>بله</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="">لطفا ذکر نمایید</label>
                                                    <input type="text" id="" class="form-control text-start">
                                                </div>
                                                <div class="col-sm-3"></div>

                                                <div class="col-sm-3">
                                                    <label class="form-label" for="">2. در صورت ابتلا به بیماری، آیا علایم شما در محیط کار تغییر می کند?</label>
                                                    <select class="form-select">
                                                        <option selected>خیر</option>
                                                        <option>بله</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="">لطفا ذکر نمایید</label>
                                                    <input type="text" id="" class="form-control text-start">
                                                </div>
                                                <div class="col-sm-3"></div>

                                                <div class="col-sm-3">
                                                    <label class="form-label" for="">3. آیا به غذا، دارو یا ماده خاصی حساسیت دارید؟</label>
                                                    <select class="form-select">
                                                        <option selected>خیر</option>
                                                        <option>بله</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="">لطفا ذکر نمایید</label>
                                                    <input type="text" id="" class="form-control text-start">
                                                </div>
                                                <div class="col-sm-3"></div>

                                                <div class="col-sm-3">
                                                    <label class="form-label" for="">4. آیا سابقه بستری در بیمارستان دارید؟</label>
                                                    <select class="form-select">
                                                        <option selected>خیر</option>
                                                        <option>بله</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="">لطفا ذکر نمایید</label>
                                                    <input type="text" id="" class="form-control text-start">
                                                </div>
                                                <div class="col-sm-3"></div>


                                                <div class="col-sm-3">
                                                    <label class="form-label" for="">5.  آیا سابقه عمل جراحی دارید؟</label>
                                                    <select class="form-select">
                                                        <option selected>خیر</option>
                                                        <option>بله</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="">دلیل و تاریخ جراحی</label>
                                                    <input type="text" id="" class="form-control text-start">
                                                </div>
                                                <div class="col-sm-3"></div>

                                                <div class="col-sm-3">
                                                    <label class="form-label" for="">6. آیا داروی خاصی مصرف می کنید؟ </label>
                                                    <select class="form-select">
                                                        <option selected>خیر</option>
                                                        <option>بله</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="">لطفا ذکر نمایید</label>
                                                    <input type="text" id="" class="form-control text-start">
                                                </div>
                                                <div class="col-sm-3"></div>

                                                <div class="col-sm-3">
                                                    <label class="form-label" for="">7. آیا اکنون سیگار می کشید؟ </label>
                                                    <select class="form-select">
                                                        <option selected>خیر</option>
                                                        <option>بله</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="">تعداد نخ روزانه؟ مدت استعمال؟</label>
                                                    <input type="text" id="" class="form-control text-start">
                                                </div>
                                                <div class="col-sm-3"></div>

                                                <div class="col-sm-3">
                                                    <label class="form-label" for="">8. آیا سابقه قبلی مصرف سیگار دارید؟</label>
                                                    <select class="form-select">
                                                        <option selected>خیر</option>
                                                        <option>بله</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="">تعداد نخ روزانه؟ مدت استعمال؟</label>
                                                    <input type="text" id="" class="form-control text-start">
                                                </div>
                                                <div class="col-sm-3"></div>

                                                <div class="col-sm-3">
                                                    <label class="form-label" for="">9.آیا در اوقات فراغت ورزش خاصی انجام می دهید؟  </label>
                                                    <select class="form-select">
                                                        <option selected>خیر</option>
                                                        <option>بله</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="">نام ببرید</label>
                                                    <input type="text" id="" class="form-control text-start">
                                                </div>
                                                <div class="col-sm-3"></div>

                                                <div class="col-sm-3">
                                                    <label class="form-label" for=""> 10. آیا تاکنون دچار حادثه شغلی شده اید؟</label>
                                                    <select class="form-select">
                                                        <option selected>خیر</option>
                                                        <option>بله</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="">نوع آسیب؟ علت؟</label>
                                                    <input type="text" id="" class="form-control text-start">
                                                </div>
                                                <div class="col-sm-3"></div>

                                                <div class="col-sm-3">
                                                    <label class="form-label" for="">11. آیا سابقه استفاده از استعلاجی برای مدت بیش از 3 روز دارید؟</label>
                                                    <select class="form-select">
                                                        <option selected>خیر</option>
                                                        <option>بله</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">

                                                </div>
                                                <div class="col-sm-3"></div>

                                                <div class="col-sm-3">
                                                    <label class="form-label" for=""> 12.آیا سابقه معرفی به کمیسیون پزشکی دارید؟</label>
                                                    <select class="form-select">
                                                        <option selected>خیر</option>
                                                        <option>بله</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for=""> علت؟</label>
                                                    <input type="text" id="" class="form-control text-start">
                                                </div>
                                                <div class="col-sm-3"></div>

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
