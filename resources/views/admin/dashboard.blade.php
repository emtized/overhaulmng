@extends('admin.layouts.app')
@section('content')
    <div class="row">
        <!-- Website Analytics-->
        <div class="col-lg-6 col-md-12 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">آمار سامانه</h5>
                </div>
                <div class="card-body pb-2">
                    <div class="d-flex justify-content-around align-items-center flex-wrap mb-4">
                        <div class="user-analytics text-center me-2">
                            <i class="bx bx-user me-1"></i>
                            <span>کل کارجویان </span>
                            <div class="d-flex align-items-center mt-2">
                                <div class="chart-report" data-color="info" data-series="35"></div>
                                <h3 class="mb-0">61K</h3>
                            </div>
                        </div>
                        <div class="sessions-analytics text-center me-2">
                            <i class="bx bx-user-voice me-1"></i>
                            <span>تایید نشده</span>
                            <div class="d-flex align-items-center mt-2">
                                <div class="chart-report" data-color="warning" data-series="76"></div>
                                <h3 class="mb-0">100</h3>
                            </div>
                        </div>
                        <div class="bounce-rate-analytics text-center">
                            <i class="bx bx-user-check me-1"></i>
                            <span>تایید شده</span>
                            <div class="d-flex align-items-center mt-2">
                                <div class="chart-report" data-color="success" data-series="65"></div>
                                <h3 class="mb-0">100</h3>
                            </div>
                        </div>
                    </div>
                    <div id="analyticsBarChart"></div>
                </div>
            </div>
        </div>

        <!-- Weekly Order Summary -->
        <div class="col-lg-6 col-12">
            <div class="row">
                <div class="col-4 col-md-4  mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <div class="avatar mx-auto mb-2">
                                <span class="avatar-initial rounded-circle bg-label-success"><i class="bx bx-coin-stack fs-4"></i></span>
                            </div>
                            <span class="d-block text-nowrap pt-1">فروش کل</span>
                            <h2 class="mb-n3">65</h2>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-md-4  mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <div class="avatar mx-auto mb-2">
                                <span class="avatar-initial rounded-circle bg-label-danger"><i class="bx bx-cart fs-4"></i></span>
                            </div>
                            <span class="d-block text-nowrap pt-1">سفارش</span>
                            <h2 class="mb-n3">40</h2>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-md-4  mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <div class="avatar mx-auto mb-2">
                                <span class="avatar-initial rounded-circle bg-label-info"><i class="bx bx-list-ol fs-4"></i></span>
                            </div>
                            <span class="d-block text-nowrap pt-1">درخواست ها</span>
                            <h2 class="mb-n3">40</h2>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-md-4  mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <div class="avatar mx-auto mb-2">
                                <span class="avatar-initial rounded-circle bg-label-info"><i class="bx bx-envelope fs-4"></i></span>
                            </div>
                            <span class="d-block text-nowrap pt-1">پیام ها</span>
                            <h2 class="mb-n3">40</h2>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-md-4  mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <div class="avatar mx-auto mb-2">
                                <span class="avatar-initial rounded-circle bg-label-secondary"><i class="bx bx-folder-open fs-4"></i></span>
                            </div>
                            <span class="d-block text-nowrap pt-1">پروژه ها</span>
                            <h2 class="mb-n3">40</h2>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-md-4  mb-4">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <div class="avatar mx-auto mb-2">
                                <span class="avatar-initial rounded-circle bg-label-primary"><i class="bx bx-tag-alt fs-4"></i></span>
                            </div>
                            <span class="d-block text-nowrap pt-1">تگ ها</span>
                            <h2 class="mb-n3">40</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- All Users -->
        <div class="col-md-6 col-lg-6 col-xl-4 mb-4 mb-xl-0">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title mb-3">  کاربران به تفکیک تگ </h5>
                    <h1 class="display-6 fw-normal mb-0 primary-font">84</h1>
                </div>
                <div class="card-body">
                    <span class="d-block mb-2">تگ ها</span>
                    <div class="progress progress-stacked mb-3 mb-xl-5" style="height: 8px">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <ul class="p-0 m-0">
                        <li class="mb-3 d-flex justify-content-between">
                            <div class="d-flex align-items-center me-3">
                                <span class="badge badge-dot bg-success me-2"></span> کارمند
                            </div>
                            <div class="d-flex gap-3">
                                <span>29.5k</span>
                                <span class="fw-semibold">56%</span>
                            </div>
                        </li>
                        <li class="mb-3 d-flex justify-content-between">
                            <div class="d-flex align-items-center me-3">
                                <span class="badge badge-dot bg-danger me-2"></span>تنکنیسین
                            </div>
                            <div class="d-flex gap-3">
                                <span>25.7k</span>
                                <span class="fw-semibold">26%</span>
                            </div>
                        </li>
                        <li class="mb-3 d-flex justify-content-between">
                            <div class="d-flex align-items-center me-3">
                                <span class="badge badge-dot bg-info me-2"></span>فنی
                            </div>
                            <div class="d-flex gap-3">
                                <span>11.5k</span>
                                <span class="fw-semibold">34%</span>
                            </div>
                        </li>
                        <li class="mb-3 d-flex justify-content-between">
                            <div class="d-flex align-items-center me-3">
                                <span class="badge badge-dot bg-primary me-2"></span>برنامه نویس
                            </div>
                            <div class="d-flex gap-3">
                                <span>48.5k</span>
                                <span class="fw-semibold">45%</span>
                            </div>
                        </li>
                        <li class="mb-1 d-flex justify-content-between">
                            <div class="d-flex align-items-center me-3">
                                <span class="badge badge-dot bg-warning me-2"></span> سرپرست
                            </div>
                            <div class="d-flex gap-3">
                                <span>22.1k</span>
                                <span class="fw-semibold">7%</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-xl-8 col-12 mb-4">
            <div class="card h-100">
                <div class="row row-bordered m-0">
                    <!-- Order Summary -->
                    <div class="col-md-8 col-12 pe-0">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">درآمد ماهیانه</h5>
                        </div>
                        <div class="card-body p-0">
                            <div id="orderSummaryChart"></div>
                        </div>
                    </div>
                    <!-- Sales History -->
                    <div class="col-md-4 col-12 px-0">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h5 class="card-title mb-0">مقایسه فروش‌ها</h5>
                        </div>
                        <div class="card-body">
                            <h6 class="mt-1">هفته قبل</h6>
                            <p class="mb-4">فروش 45% بهتر نسبت به ماه قبل</p>
                            <ul class="list-unstyled m-0 pt-0">
                                <li class="mb-4">
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="avatar avatar-sm flex-shrink-0 me-2">
                                            <span class="avatar-initial rounded bg-label-primary"><i class="bx bx-trending-up"></i></span>
                                        </div>
                                        <div>
                                            <p class="mb-0 text-muted text-nowrap">درآمد این ماه</p>
                                            <small class="fw-semibold text-nowrap">84,789 تومان</small>
                                        </div>
                                    </div>
                                    <div class="progress" style="height: 6px">
                                        <div class="progress-bar bg-primary" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="d-flex align-items-center mb-2">
                                        <div class="avatar avatar-sm flex-shrink-0 me-2">
                                            <span class="avatar-initial rounded bg-label-success"><i class="bx bx-dollar"></i></span>
                                        </div>
                                        <div>
                                            <p class="mb-0 text-muted text-nowrap">میانگین فروش روزانه</p>
                                            <small class="fw-semibold text-nowrap">12,398 تومان</small>
                                        </div>
                                    </div>
                                    <div class="progress" style="height: 6px">
                                        <div class="progress-bar bg-success" style="width: 75%" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Weekly Order Summary -->

        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">آخرین کارجویان ثبت شده</h5>
                    <div class="dropdown primary-font">
                        <button class="btn p-0" type="button" id="marketingOptions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="marketingOptions">
                            <a class="dropdown-item" href="javascript:void(0);">انتخاب همه</a>
                            <a class="dropdown-item" href="javascript:void(0);">تازه سازی</a>
                            <a class="dropdown-item" href="javascript:void(0);">اشتراک گذاری</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                        <a href="javascript:;" class="btn btn-sm btn-primary">مشاهده همه</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table border-top">
                        <thead>
                        <tr>
                            <th>نام و نام خانوادگی</th>
                            <th>شماره همراه</th>
                            <th>شماره ملی</th>
                            <th>وضعیت</th>
                            <th>عمل</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                        <tr>
                            <td class="text-nowrap">
                                <img src="{!! asset('img/avatars/1.png') !!}" class="me-3" width="22" alt="Fastrack">لورم ایپسوم متن ساختگی
                            </td>
                            <td>09123456789</td>
                            <td>1234567890</td>
                            <td><span class="text-success">فعال</span></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="action1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="action1">
                                        <a class="dropdown-item" href="javascript:void(0);">جزئیات</a>
                                        <a class="dropdown-item" href="javascript:void(0);">ارسال پیام</a>
                                        <a class="dropdown-item" href="javascript:void(0);">فعالسازی</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-nowrap">
                                <img src="{!! asset('img/avatars/1.png') !!}" class="me-3" width="22" alt="Fastrack">لورم ایپسوم متن ساختگی
                            </td>
                            <td>09123456789</td>
                            <td>1234567890</td>
                            <td><span class="text-success">فعال</span></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="action1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="action1">
                                        <a class="dropdown-item" href="javascript:void(0);">جزئیات</a>
                                        <a class="dropdown-item" href="javascript:void(0);">ارسال پیام</a>
                                        <a class="dropdown-item" href="javascript:void(0);">فعالسازی</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-nowrap">
                                <img src="{!! asset('img/avatars/1.png') !!}" class="me-3" width="22" alt="Fastrack">لورم ایپسوم متن ساختگی
                            </td>
                            <td>09123456789</td>
                            <td>1234567890</td>
                            <td><span class="text-success">فعال</span></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="action1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="action1">
                                        <a class="dropdown-item" href="javascript:void(0);">جزئیات</a>
                                        <a class="dropdown-item" href="javascript:void(0);">ارسال پیام</a>
                                        <a class="dropdown-item" href="javascript:void(0);">فعالسازی</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-nowrap">
                                <img src="{!! asset('img/avatars/1.png') !!}" class="me-3" width="22" alt="Fastrack">لورم ایپسوم متن ساختگی
                            </td>
                            <td>09123456789</td>
                            <td>1234567890</td>
                            <td><span class="text-success">فعال</span></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="action1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="action1">
                                        <a class="dropdown-item" href="javascript:void(0);">جزئیات</a>
                                        <a class="dropdown-item" href="javascript:void(0);">ارسال پیام</a>
                                        <a class="dropdown-item" href="javascript:void(0);">فعالسازی</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-nowrap">
                                <img src="{!! asset('img/avatars/1.png') !!}" class="me-3" width="22" alt="Fastrack">لورم ایپسوم متن ساختگی
                            </td>
                            <td>09123456789</td>
                            <td>1234567890</td>
                            <td><span class="text-success">فعال</span></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="action1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="action1">
                                        <a class="dropdown-item" href="javascript:void(0);">جزئیات</a>
                                        <a class="dropdown-item" href="javascript:void(0);">ارسال پیام</a>
                                        <a class="dropdown-item" href="javascript:void(0);">فعالسازی</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-nowrap">
                                <img src="{!! asset('img/avatars/1.png') !!}" class="me-3" width="22" alt="Fastrack">لورم ایپسوم متن ساختگی
                            </td>
                            <td>09123456789</td>
                            <td>1234567890</td>
                            <td><span class="text-success">فعال</span></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="action1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="action1">
                                        <a class="dropdown-item" href="javascript:void(0);">جزئیات</a>
                                        <a class="dropdown-item" href="javascript:void(0);">ارسال پیام</a>
                                        <a class="dropdown-item" href="javascript:void(0);">فعالسازی</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-nowrap">
                                <img src="{!! asset('img/avatars/1.png') !!}" class="me-3" width="22" alt="Fastrack">لورم ایپسوم متن ساختگی
                            </td>
                            <td>09123456789</td>
                            <td>1234567890</td>
                            <td><span class="text-success">فعال</span></td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn p-0" type="button" id="action1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="action1">
                                        <a class="dropdown-item" href="javascript:void(0);">جزئیات</a>
                                        <a class="dropdown-item" href="javascript:void(0);">ارسال پیام</a>
                                        <a class="dropdown-item" href="javascript:void(0);">فعالسازی</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
