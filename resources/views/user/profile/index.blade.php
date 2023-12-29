@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{!! asset('libs/bs-stepper/bs-stepper.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/bootstrap-select/bootstrap-select.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/select2/select2.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/flatpickr/flatpickr.css') !!}">

    <style>
        .user-profile-header-banner img {
            width: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            height: 250px;
        }

        .user-profile-header {
            margin-top: -2rem;
        }
        .user-profile-header .user-profile-img {
            border: 5px solid;
            width: 120px;
        }

        .light-style .user-profile-header .user-profile-img {
            border-color: #fff;
        }

        .dark-style .user-profile-header .user-profile-img {
            border-color: #283144;
        }

        .dataTables_wrapper .card-header .dataTables_filter label {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }

        @media (max-width: 767.98px) {
            .user-profile-header-banner img {
                height: 150px;
            }
            .user-profile-header .user-profile-img {
                width: 100px;
            }
        }
    </style>
@endpush

@section('content')
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.sidebar')
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts.top-nav-profile')
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    @include('alert.alert-section.success')
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="py-3 breadcrumb-wrapper mb-4">
                            <span class="text-muted fw-light">پروفایل کاربر /</span> پروفایل
                        </h4>
                        <!-- Header -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card mb-4">
                                    <div class="user-profile-header-banner">
                                        <img src="{!! asset('img/pages/profile-banner.png') !!}" alt="Banner image" class="rounded-top">
                                    </div>
                                    <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                                        <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                                            <img src="{{ asset($user->image_small) }}" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded-3 user-profile-img">
                                        </div>
                                        <div class="flex-grow-1 mt-3 mt-sm-5">
                                            <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                                                <div class="user-profile-info">
                                                    <h4>{{$user->first_name . ' '.$user->last_name}}</h4>
                                                    <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
                                                        <li class="list-inline-item fw-semibold"><i class="bx bx-phone"></i>{{$user->contact->mobile1}}</li>
                                                        <li class="list-inline-item fw-semibold"><i class="bx bx-map"></i> شهر {{$user->birth_place}}</li>
                                                        <li class="list-inline-item fw-semibold">
                                                            <i class="bx bx-calendar-alt"></i> عضویت در {{jalaliDate($user->created_at)}}
                                                        </li>
                                                    </ul>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Header -->

                        <!-- Navbar pills -->
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav nav-pills flex-column flex-sm-row mb-4">
                                    <li class="nav-item">
                                        <a class="nav-link active my-1 my-md-0" href="javascript:void(0);"><i class="bx bx-user me-1"></i> پروفایل</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="bx bx-group me-1"></i> درخواست ها</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="bx bx-grid-alt me-1"></i> پروژه‌ها</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="bx bx-link-alt me-1"></i> اعلان ها</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--/ Navbar pills -->
<div class="row mb-4">
    <div class="col-12">
        <div class="card">
            <h5 class="card-header heading-color">فعال سازی حساب</h5>
            <div class="card-body">
                <div class="mb-3 col-12 mb-0">
                    <div class="alert alert-warning">
                        <h6 class="alert-heading mb-1">فعالسازی حساب</h6>
                        <p class="mb-0">در صورتی که حساب خود را  ظرف مدت 48 ساعت فعال ننماید حساب کاربری شما حذف خواهد شد، بازگشتی وجود نخواهد داشت. لطفاجهت بررسی و تایید حساب کاربری خود هزینه بررسی اطلاعات را پرداخت نمایید.</p>
                    </div>
                </div>
                <form id="formAccountDeactivation" onsubmit="return false" class="fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation">
                        <label class="form-check-label" for="accountActivation">قوانین و مقررات را خوانده و قبول دارم</label>
                        <div class="fv-plugins-message-container invalid-feedback"></div></div>
                    <button type="submit" class="btn btn-danger deactivate-account">پرداخت</button>
                    <input type="hidden"></form>
            </div>
        </div>
    </div>
</div>
                        <!-- User Profile Content -->
                        <div class="row">
                            <div class="col-xl-4 col-lg-5 col-md-5">
                                <!-- About User -->
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <small class="text-muted text-uppercase">درباره</small>
                                        <ul class="list-unstyled mb-4 mt-3">
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="bx bx-user"></i><span class="fw-semibold mx-2">نام کامل:</span>
                                                <span>{{$user->first_name . ' '.$user->last_name}}</span>
                                            </li>
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="bx bx-check"></i><span class="fw-semibold mx-2">وضعیت:</span> <span>@if($user->activation == 0) غیرفعال  @else فعال @endif</span>
                                            </li>
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="bx bx-star"></i><span class="fw-semibold mx-2">نقش:</span> <span>توسعه دهنده</span>
                                            </li>
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="bx bx-flag"></i><span class="fw-semibold mx-2">کشور:</span> <span>ایران</span>
                                            </li>
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="bx bx-detail"></i><span class="fw-semibold mx-2">زبان‌ها:</span>
                                                <span>انگلیسی</span>
                                            </li>
                                        </ul>
                                        <small class="text-muted text-uppercase">تماس</small>
                                        <ul class="list-unstyled mb-4 mt-3">
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="bx bx-phone"></i><span class="fw-semibold mx-2">تماس:</span>
                                                <span class="d-inline-block" dir="ltr">{{$user->contact->mobile1}}</span>
                                            </li>
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="bx bx-chat"></i><span class="fw-semibold mx-2">تلگرام:</span> <span>john.doe</span>
                                            </li>
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="bx bx-envelope"></i><span class="fw-semibold mx-2">ایمیل:</span>
                                                <span>{{$user->email}}</span>
                                            </li>
                                        </ul>
                                        <small class="text-muted text-uppercase">تیم‌ها</small>
                                        <ul class="list-unstyled mt-3 mb-0">
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="bx bxl-github text-primary me-2"></i>
                                                <div class="d-flex flex-wrap">
                                                    <span class="fw-semibold me-2">توسعه دهنده پنل مدیریت</span><span>(126 عضو)</span>
                                                </div>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <i class="bx bxl-react text-info me-2"></i>
                                                <div class="d-flex flex-wrap">
                                                    <span class="fw-semibold me-2">توسعه دهنده React</span><span>(98 عضو)</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ About User -->
                                <!-- Profile Overview -->
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <small class="text-muted text-uppercase">وضعیت اکانت</small>
                                        <ul class="list-unstyled mt-3 mb-0">
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="bx bx-customize"></i><span class="fw-semibold mx-2">ثبت اولیه اطلاعات</span>
                                                <span>{{jalaliDate($user->created_at)}}</span>
                                            </li>
                                            <li class="d-flex align-items-center mb-3">
                                                <i class="bx bx-check"></i><span class="fw-semibold mx-2">اطلاعات تایید شده</span>
                                                <span>{{jalaliDate($user->updated_at)}}</span>
                                            </li>
                                            <li class="d-flex align-items-center">
                                                <i class="bx bx-user"></i><span class="fw-semibold mx-2">تاریخ آماده بکار:</span>
                                                <span>1402/08/28</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ Profile Overview -->
                            </div>
                            <div class="col-xl-8 col-lg-7 col-md-7">
                                <!-- Activity Timeline -->
                                <div class="card card-action mb-4">
                                    <div class="card-header align-items-center">
                                        <h5 class="card-action-title mb-3"><i class="bx bx-list-ul bx-sm me-2"></i>خط زمانی فعالیت</h5>
                                        <div class="card-action-element btn-pinned">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <ul class="timeline ms-2">
                                            <li class="timeline-item timeline-item-transparent">
                                                <span class="timeline-point timeline-point-success"></span>
                                                <div class="timeline-event pb-0">
                                                    <div class="timeline-header mb-1">
                                                        <h6 class="mb-0 mt-n1">لورم ایپسوم متن ساختگی</h6>
                                                        <small class="text-muted mt-1 mt-sm-0 mb-1 mb-sm-0">10 روز قبل</small>
                                                    </div>
                                                    <p class="mb-0">لورم ایپسوم متن ساختگی با تولید</p>
                                                </div>
                                            </li>
                                            <li class="timeline-item timeline-item-transparent">
                                                <span class="timeline-point timeline-point-success"></span>
                                                <div class="timeline-event pb-0">
                                                    <div class="timeline-header mb-1">
                                                        <h6 class="mb-0 mt-n1">لورم ایپسوم متن ساختگی</h6>
                                                        <small class="text-muted mt-1 mt-sm-0 mb-1 mb-sm-0">10 روز قبل</small>
                                                    </div>
                                                    <p class="mb-0">لورم ایپسوم متن ساختگی با تولید</p>
                                                </div>
                                            </li>
                                            <li class="timeline-item timeline-item-transparent">
                                                <span class="timeline-point timeline-point-success"></span>
                                                <div class="timeline-event pb-0">
                                                    <div class="timeline-header mb-1">
                                                        <h6 class="mb-0 mt-n1">لورم ایپسوم متن ساختگی</h6>
                                                        <small class="text-muted mt-1 mt-sm-0 mb-1 mb-sm-0">10 روز قبل</small>
                                                    </div>
                                                    <p class="mb-0">لورم ایپسوم متن ساختگی با تولید</p>
                                                </div>
                                            </li>
                                            <li class="timeline-end-indicator">
                                                <i class="bx bx-check-circle"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ Activity Timeline -->
                                <div class="row">
                                    <!-- Teams -->
                                    <div class="col-lg-12 col-xl-12">
                                        <div class="card card-action mb-4">
                                            <div class="card-header align-items-center">
                                                <h5 class="card-action-title mb-0">پرداخت ها</h5>
                                                <div class="card-action-element btn-pinned">
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <ul class="list-unstyled mb-0">
                                                    <li class="mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar me-3">
                                                                    <img src="https://myket.ir/app-icon/mob.banking.android.pasargad_c834b1f5-1007-437b-97d7-9235629c3afb.png" alt="آواتار" class="rounded-circle">
                                                                </div>
                                                                <div class="me-2">
                                                                    <h6 class="mb-0">تاییده اطلاعات</h6>
                                                                    <small class="text-muted">2000 تومان</small>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <a href="javascript:;"><span class="mt-1 badge bg-label-danger">پرداخت نشده</span></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar me-3">
                                                                    <img src="https://myket.ir/app-icon/mob.banking.android.pasargad_c834b1f5-1007-437b-97d7-9235629c3afb.png" alt="آواتار" class="rounded-circle">
                                                                </div>
                                                                <div class="me-2">
                                                                    <h6 class="mb-0">تیم پشتیبانی</h6>
                                                                    <small class="text-muted">2000 تومان</small>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <a href="javascript:;"><span class="mt-1 badge bg-label-primary">تایید شده</span></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar me-3">
                                                                    <img src="https://myket.ir/app-icon/mob.banking.android.pasargad_c834b1f5-1007-437b-97d7-9235629c3afb.png" alt="آواتار" class="rounded-circle">
                                                                </div>
                                                                <div class="me-2">
                                                                    <h6 class="mb-0">هزینه</h6>
                                                                    <small class="text-muted">2000 تومان</small>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <a href="javascript:;"><span class="mt-1 badge bg-label-info">پرداخت شده</span></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar me-3">
                                                                    <img src="https://myket.ir/app-icon/mob.banking.android.pasargad_c834b1f5-1007-437b-97d7-9235629c3afb.png" alt="آواتار" class="rounded-circle">
                                                                </div>
                                                                <div class="me-2">
                                                                    <h6 class="mb-0">توسعه دهندگان Vue.js</h6>
                                                                    <small class="text-muted">289 عضو</small>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <a href="javascript:;"><span class="mt-1 badge bg-label-danger">پرداخت نشده</span></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-3">
                                                        <div class="d-flex align-items-start">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar me-3">
                                                                    <img src="https://myket.ir/app-icon/mob.banking.android.pasargad_c834b1f5-1007-437b-97d7-9235629c3afb.png" alt="آواتار" class="rounded-circle">
                                                                </div>
                                                                <div class="me-w">
                                                                    <h6 class="mb-0">هزینه تاییده اطلاعات بانکی</h6>
                                                                    <small class="text-muted">3000 تومان</small>
                                                                </div>
                                                            </div>
                                                            <div class="ms-auto">
                                                                <a href="javascript:;"><span class="mt-1 badge bg-label-secondary">تایید نشده</span></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="text-center">
                                                        <a href="javascript:;">مشاهده همه پرداخت ها</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ Teams -->
                                </div>
                                <!-- Projects table -->
                                <div class="card">
                                    <div class="card-datatable table-responsive">
                                        <table class="datatables-projects border-top table">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>نام</th>
                                                <th>رهبر</th>
                                                <th>تیم</th>
                                                <th class="w-px-200">وضعیت</th>
                                                <th>عمل</th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                                <!--/ Projects table -->
                            </div>
                        </div>
                        <!--/ User Profile Content -->
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

    <script src="{!! asset('libs/moment/moment.js') !!}"></script>
    <script src="{!! asset('libs/jdate/jdate.js') !!}"></script>
    <script src="{!! asset('libs/flatpickr/flatpickr-jdate.js') !!}"></script>
    <script src="{!! asset('libs/flatpickr/l10n/fa-jdate.js') !!}"></script>
    <script>
        const flatpickrDate = document.querySelector('#flatpickr-date');
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


@endpush


