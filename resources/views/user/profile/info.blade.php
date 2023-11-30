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

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="py-3 breadcrumb-wrapper mb-4">
                            <span class="text-muted fw-light">تنظیمات حساب /</span> اطلاعات هویتی
                        </h4>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <h5 class="card-header heading-color">اطلاعات هویتی</h5>
                                    <!-- Account -->
                                    <div class="card-body">
                                        <div class="d-flex align-items-start align-items-sm-center gap-4">
                                            <img src="{!! asset('img/avatars/1.png') !!}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar">
                                            <div class="button-wrapper">
                                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                    <span class="d-none d-sm-block">ارسال تصویر جدید</span>
                                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                                    <input type="file" id="upload" class="account-file-input" hidden accept="image/png, image/jpeg">
                                                </label>
                                                <button type="button" class="btn btn-label-secondary account-image-reset mb-4">
                                                    <i class="bx bx-reset d-block d-sm-none"></i>
                                                    <span class="d-none d-sm-block">بازنشانی</span>
                                                </button>

                                                <p class="mb-0">فایل‌های JPG، GIF یا PNG مجاز هستند. حداکثر اندازه فایل 800KB.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0">
                                    <div class="card-body">
                                    @include('forms.user.personal-info')
                                        <div class="mt-4">
                                            <button type="submit" class="btn btn-primary me-2">ذخیره تغییرات</button>
                                            <button type="reset" class="btn btn-label-secondary">انصراف</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <h5 class="card-header heading-color">حذف حساب</h5>
                                    <div class="card-body">
                                        <div class="mb-3 col-12 mb-0">
                                            <div class="alert alert-warning">
                                                <h6 class="alert-heading mb-1">آیا از حذف حساب خود اطمینان دارید؟</h6>
                                                <p class="mb-0">در صورتی که حساب خود را حذف کنید، بازگشتی وجود نخواهد داشت. لطفا مطمئن باشید.</p>
                                            </div>
                                        </div>
                                        <form id="formAccountDeactivation" onsubmit="return false">
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation">
                                                <label class="form-check-label" for="accountActivation">من غیرفعال کردن حساب خود را تایید می‌کنم</label>
                                            </div>
                                            <button type="submit" class="btn btn-danger deactivate-account">غیرفعال کردن حساب</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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

        //select2
        $(document).ready(function() {
            $('#accessMethodsSelect').select2({
                tags: true,
                tokenSeparators: [',', ' '],
            });
        });

    </script>


@endpush
