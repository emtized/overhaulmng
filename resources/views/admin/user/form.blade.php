@extends('admin.layouts.app')
@section('content')
<nav aria-label="breadcrumb">
    <ol class="lh-1-85 breadcrumb breadcrumb-style1">
        <li class="breadcrumb-item">
            <a href="javascript:void(0);">خانه</a>
        </li>
        <li class="breadcrumb-item">
            <a href="javascript:void(0);">لیست کارجویان</a>
        </li>
        <li class="breadcrumb-item active">ویرایش کارجو</li>
    </ol>
</nav>

    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">کاربر / نمایش /</span> حساب
    </h4>
    <div class="row gy-4">
        <!-- User Sidebar -->
        <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
            <!-- User Card -->
            <div class="card mb-4">
                <div class="card-body">
                    <div class="user-avatar-section">
                        <div class="d-flex align-items-center flex-column">
                            <img class="img-fluid rounded my-4" src="{!! asset('img/avatars/10.png') !!}" height="110" width="110" alt="User avatar">
                            <div class="user-info text-center">
                                <h5 class="mb-2">امیلیا کلارک</h5>
                                <span class="badge bg-label-secondary">نویسنده</span>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-around flex-wrap my-4 py-3">
                        <div class="d-flex align-items-center me-4 mt-3 gap-3">
                            <span class="badge bg-label-primary p-2 rounded mt-1"><i class="bx bx-check bx-sm"></i></span>
                            <div>
                                <h5 class="mb-0">1.23k</h5>
                                <span>وظیفه انجام شده</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mt-3 gap-3">
                            <span class="badge bg-label-primary p-2 rounded mt-1"><i class="bx bx-customize bx-sm"></i></span>
                            <div>
                                <h5 class="mb-0">568</h5>
                                <span>پروژه اجرا شده</span>
                            </div>
                        </div>
                    </div>
                    <h5 class="pb-2 border-bottom mb-4 secondary-font">جزئیات</h5>
                    <div class="info-container">
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <span class="fw-bold me-2">نام کاربری:</span>
                                <span>violet.dev</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">ایمیل:</span>
                                <span>vafgot@vultukir.org</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">وضعیت:</span>
                                <span class="badge bg-label-success">فعال</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">نقش:</span>
                                <span>نویسنده</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">شناسه مالیاتی:</span>
                                <span>Tax-8965</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">تماس:</span>
                                <span class="d-inline-block" dir="ltr">(123) 456-7890</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">زبان‌ها:</span>
                                <span>فرانسوی</span>
                            </li>
                            <li class="mb-3">
                                <span class="fw-bold me-2">کشور:</span>
                                <span>انگلستان</span>
                            </li>
                        </ul>
                        <div class="d-flex justify-content-center pt-3">
                            <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser" data-bs-toggle="modal">ویرایش</a>
                            <a href="javascript:;" class="btn btn-label-danger suspend-user">غیرفعال</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /User Card -->
            <!-- Plan Card -->
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <span class="badge bg-label-primary">استاندارد</span>
                        <div class="d-flex justify-content-center align-items-center">
                            <sup class="h5 pricing-currency mt-3 mt-sm-4 mb-0 me-1 text-primary">هزار تومان</sup>
                            <h1 class="display-3 fw-normal mb-0 text-primary">2</h1>
                            <sub class="fs-6 pricing-duration mt-auto mb-4">/ ماهانه</sub>
                        </div>
                    </div>
                    <ul class="ps-3 g-2 mb-3 lh-1-85">
                        <li class="mb-2">10 کاربر</li>
                        <li class="mb-2">تا 10 گیگابایت فضا</li>
                        <li>پشتیبانی پایه</li>
                    </ul>
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <h6 class="mb-0">روز</h6>
                        <h6 class="mb-0">65% تمام شده</h6>
                    </div>
                    <div class="progress mb-3" style="height: 8px">
                        <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <span>4 روز باقی مانده</span>
                    <div class="d-grid w-100 mt-3 pt-2">
                        <button class="btn btn-primary" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">
                            ارتقای پلن
                        </button>
                    </div>
                </div>
            </div>
            <!-- /Plan Card -->
        </div>
        <!--/ User Sidebar -->

        <!-- User Content -->
        <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
            <!-- User Pills -->
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                    <a class="nav-link active my-1 my-md-0" href="javascript:void(0);"><i class="bx bx-user me-1"></i>حساب</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""><i class="bx bx-id-card me-1"></i>اطلاعات هویتی</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""><i class="bx bx-image-alt me-1"></i>مدارک هویتی</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""><i class="bx bx-money me-1"></i>اطلاعات بانکی</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""><i class="bx bx-calendar-alt me-1"></i>تاریخ آماده بکار</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href=""><i class="bx bx-link-alt me-1"></i>درخواست ها</a>
                </li>
            </ul>
            <!--/ User Pills -->

            <!-- Project table -->
            <div class="card mb-4">
                <div class="card-header"><h5 class="mb-0">لیست پروژه‌های کاربر</h5></div>
                <div class="table-responsive mb-3">
                    <table class="table datatable-project border-top">
                        <thead>
                        <tr>
                            <th></th>
                            <th>پروژه</th>
                            <th class="text-nowrap">مجموع وظیفه</th>
                            <th>پیشرفت</th>
                            <th>ساعت</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <!-- /Project table -->

            <!-- Activity Timeline -->
            <div class="card mb-4">
                <div class="card-header mb-3"><h5 class="mb-0">خط زمانی فعالیت کاربر</h5></div>
                <div class="card-body">
                    <ul class="timeline">
                        <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-point timeline-point-primary"></span>
                            <div class="timeline-event">
                                <div class="timeline-header mb-1">
                                    <h6 class="mb-0 mt-n1">12 صورتحساب پرداخت شد</h6>
                                    <small class="text-muted mt-1 mt-sm-0 mb-1 mb-sm-0">12 دقیقه قبل</small>
                                </div>
                                <p class="mb-2">صورتحساب ها به شرکت پرداخت شد</p>
                                <div class="d-flex">
                                    <a href="javascript:void(0)" class="me-3">
                                        <img src="../../assets/img/icons/misc/pdf.png" alt="PDF image" width="20" class="me-2">
                                        <span class="fw-bold text-body">invoices.pdf</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-point timeline-point-warning"></span>
                            <div class="timeline-event">
                                <div class="timeline-header mb-1">
                                    <h6 class="mb-0 mt-n1">ملاقات با مشتری</h6>
                                    <small class="text-muted mt-1 mt-sm-0 mb-1 mb-sm-0">45 دقیقه قبل</small>
                                </div>
                                <p class="mb-2">ملاقات برای پروژه با استیو در 10:15 ق.ظ</p>
                                <div class="d-flex flex-wrap align-items-center">
                                    <div class="avatar me-3 mt-1">
                                        <img src="../../assets/img/avatars/3.png" alt="آواتار" class="rounded-circle">
                                    </div>
                                    <div>
                                        <h6 class="mb-1">بیل گیتس (مشتری)</h6>
                                        <span>بنیان‌گذار مایکروسافت</span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-point timeline-point-info"></span>
                            <div class="timeline-event">
                                <div class="timeline-header mb-1">
                                    <h6 class="mb-0 mt-n1">ایجاد یک پروژه جدید برای مشتری</h6>
                                    <small class="text-muted mt-1 mt-sm-0 mb-1 mb-sm-0">2 روز قبل</small>
                                </div>
                                <p class="mb-2">5 عضو تیم در یک پروژه</p>
                                <div class="d-flex align-items-center avatar-group">
                                    <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="تونی استارک">
                                        <img src="../../assets/img/avatars/5.png" alt="آواتار" class="rounded-circle">
                                    </div>
                                    <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="بیل گیتس">
                                        <img src="../../assets/img/avatars/12.png" alt="آواتار" class="rounded-circle">
                                    </div>
                                    <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="پیتر پارکر">
                                        <img src="../../assets/img/avatars/9.png" alt="آواتار" class="rounded-circle">
                                    </div>
                                    <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="بروس وین">
                                        <img src="../../assets/img/avatars/6.png" alt="آواتار" class="rounded-circle">
                                    </div>
                                    <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="اولیور کویین">
                                        <img src="../../assets/img/avatars/14.png" alt="آواتار" class="rounded-circle">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent">
                            <span class="timeline-point timeline-point-success"></span>
                            <div class="timeline-event">
                                <div class="timeline-header mb-1">
                                    <h6 class="mb-0 mt-n1">بررسی طراحی</h6>
                                    <small class="text-muted mt-1 mt-sm-0 mb-1 mb-sm-0">5 روز قبل</small>
                                </div>
                                <p class="mb-0">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</p>
                            </div>
                        </li>
                        <li class="timeline-end-indicator">
                            <i class="bx bx-check-circle"></i>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /Activity Timeline -->

            <!-- Invoice table -->
            <div class="card">
                <div class="table-responsive mb-3">
                    <table class="table datatable-invoice border-top">
                        <thead>
                        <tr>
                            <th></th>
                            <th>شناسه</th>
                            <th><i class="bx bx-trending-up"></i></th>
                            <th>جمع</th>
                            <th>تاریخ صدور</th>
                            <th>عمل‌ها</th>
                        </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <!-- /Invoice table -->
        </div>
        <!--/ User Content -->
    </div>
    <!-- /Modal -->
@endsection
