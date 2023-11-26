@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{!! asset('css/pages/app-email.css') !!}">

@endpush
@section('content')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.sidebar')
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts.top-nav-profile')
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="app-email card">
                            <div class="border-0">
                                <div class="row g-0">
                                    <!-- Emails List -->
                                    <div class="col app-emails-list">
                                        <div class="card shadow-none border-0">
                                            <div class="card-body emails-list-header p-3 py-lg-3 py-2">
                                                <!-- Email List: Search -->
                                                <div class="d-flex justify-content-between align-items-center mb-2 mb-lg-3">
                                                    <div class="d-flex align-items-center w-100">
                                                        <i class="bx bx-menu bx-sm cursor-pointer d-block d-lg-none me-3" data-bs-toggle="sidebar" data-target="#app-email-sidebar" data-overlay></i>
                                                        <div class="w-100">
                                                            <div class="input-group input-group-merge shadow-none">
                                  <span class="input-group-text border-0 ps-0" id="email-search">
                                    <i class="bx bx-search fs-4"></i>
                                  </span>
                                                                <input type="text" class="form-control email-search-input border-0" placeholder="جستجو در اعلان ها" aria-label="Search mail" aria-describedby="email-search">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <i class="bx bx-rotate-left scaleX-n1-rtl cursor-pointer email-refresh me-2 bx-sm"></i>
                                                        <div class="dropdown">
                                                            <button class="btn p-0" type="button" id="emailsActions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bx bx-dots-vertical-rounded bx-sm"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="emailsActions">
                                                                <a class="dropdown-item" href="javascript:void(0)"> خوانده شده</a>
                                                                <a class="dropdown-item" href="javascript:void(0)">حذف</a>
                                                                <a class="dropdown-item" href="javascript:void(0)">بایگانی</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <hr class="mx-n3 emails-list-header-hr mb-2 mb-lg-3">
                                                <!-- Email List: Actions -->
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center">
                                                        <div class="form-check me-2 mb-1">
                                                            <input class="form-check-input" type="checkbox" id="email-select-all">
                                                            <label class="form-check-label" for="email-select-all"></label>
                                                        </div>
                                                        <i class="bx bx-trash-alt email-list-delete cursor-pointer me-2"></i>
                                                        <i class="bx bx-envelope-open email-list-read cursor-pointer me-2"></i>
                                                        <div class="dropdown me-2">
                                                            <button class="btn p-0" type="button" id="dropdownMenuFolderTwo" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bx bx-folder"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuFolderTwo">
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="bx bx-error-circle bx-xs me-1"></i>
                                                                    <span class="align-middle">اسپم</span>
                                                                </a>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="bx bx-pencil bx-xs me-1"></i>
                                                                    <span class="align-middle">پیش‌نویس</span>
                                                                </a>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="bx bx-trash bx-xs me-1"></i>
                                                                    <span class="align-middle">زباله دان</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown">
                                                            <button class="btn p-0" type="button" id="dropdownLabelOne" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bx bx-purchase-tag"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLabelOne">
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="badge badge-dot bg-success"></i>
                                                                    <span class="align-middle">کارگاه</span>
                                                                </a>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="badge badge-dot bg-primary"></i>
                                                                    <span class="align-middle">شرکت</span>
                                                                </a>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="badge badge-dot bg-info"></i>
                                                                    <span class="align-middle">مهم</span>
                                                                </a>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="badge badge-dot bg-danger"></i>
                                                                    <span class="align-middle">شخصی</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="email-pagination d-sm-flex d-none align-items-center flex-wrap justify-content-between justify-sm-content-end">
                                                        <span class="d-sm-block d-none mx-3 text-muted">1-10 از 653</span>
                                                        <i class="email-prev bx bx-chevron-left scaleX-n1-rtl cursor-pointer text-muted me-2 fs-4"></i>
                                                        <i class="email-next bx bx-chevron-right scaleX-n1-rtl cursor-pointer fs-4"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="container-m-nx m-0">
                                            <!-- Email List: Items -->
                                            <div class="email-list pt-0">
                                                <ul class="list-unstyled m-0">
                                                    <li class="email-list-item" data-starred="true" data-bs-toggle="sidebar" data-target="#app-email-view">
                                                        <div class="d-flex align-items-center">
                                                            <div class="form-check mb-1">
                                                                <input class="email-list-item-input form-check-input" type="checkbox" id="email-1">
                                                                <label class="form-check-label" for="email-1"></label>
                                                            </div>
                                                            <i class="email-list-item-bookmark bx bx-star d-sm-inline-block d-none cursor-pointer ms-2 me-3"></i>
                                                            <img src="{!! asset('img/avatars/1.png') !!}" alt="user-avatar" class="d-block flex-shrink-0 rounded-circle me-sm-3 me-0" height="32" width="32">
                                                            <div class="email-list-item-content ms-2 ms-sm-0 me-2">
                                                                <span class="email-list-item-username me-2">لورم ایپسوم متن</span>
                                                                <span class="email-list-item-subject d-xl-inline-block d-block">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ</span>
                                                            </div>
                                                            <div class="email-list-item-meta ms-auto d-flex align-items-center">
                                                                <span class="email-list-item-label badge badge-dot bg-danger d-none d-md-inline-block me-2" data-label="private"></span>
                                                                <small class="email-list-item-time text-muted">08:40 ق.ظ</small>
                                                                <ul class="list-inline email-list-item-actions">
                                                                    <li class="list-inline-item email-read"><i class="bx bx-envelope-open"></i></li>
                                                                    <li class="list-inline-item email-delete"><i class="bx bx-trash"></i></li>
                                                                    <li class="list-inline-item"><i class="bx bx-archive-in"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="email-list-item email-marked-read" data-sent="true" data-bs-toggle="sidebar" data-target="#app-email-view">
                                                        <div class="d-flex align-items-center">
                                                            <div class="form-check mb-1">
                                                                <input class="email-list-item-input form-check-input" type="checkbox" id="email-2">
                                                                <label class="form-check-label" for="email-2"></label>
                                                            </div>
                                                            <i class="email-list-item-bookmark bx bx-star d-sm-inline-block d-none cursor-pointer ms-2 me-3"></i>
                                                            <img src="{!! asset('img/avatars/1.png') !!}" alt="user-avatar" class="d-block flex-shrink-0 rounded-circle me-sm-3 me-0" height="32" width="32">
                                                            <div class="email-list-item-content ms-2 ms-sm-0 me-2">
                                                                <span class="email-list-item-username me-2">تونی استارک</span>
                                                                <span class="email-list-item-subject d-xl-inline-block d-block">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از</span>
                                                            </div>
                                                            <div class="email-list-item-meta ms-auto d-flex align-items-center">
                                                                <span class="email-list-item-label badge badge-dot bg-info d-none d-md-inline-block me-2" data-label="important"></span>
                                                                <small class="email-list-item-time text-muted">10:12 ق.ظ</small>
                                                                <ul class="list-inline email-list-item-actions">
                                                                    <li class="list-inline-item email-unread"><i class="bx bx-envelope"></i></li>
                                                                    <li class="list-inline-item email-delete"><i class="bx bx-trash"></i></li>
                                                                    <li class="list-inline-item"><i class="bx bx-archive-in"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="email-list-item" data-draft="true" data-bs-toggle="sidebar" data-target="#app-email-view">
                                                        <div class="d-flex align-items-center">
                                                            <div class="form-check mb-1">
                                                                <input class="email-list-item-input form-check-input" type="checkbox" id="email-3">
                                                                <label class="form-check-label" for="email-3"></label>
                                                            </div>
                                                            <i class="email-list-item-bookmark bx bx-star d-sm-inline-block d-none cursor-pointer ms-2 me-3"></i>
                                                            <img src="{!! asset('img/avatars/1.png') !!}" alt="user-avatar" class="d-block flex-shrink-0 rounded-circle me-sm-3 me-0" height="32" width="32">

                                                            <div class="email-list-item-content ms-2 ms-sm-0 me-2">
                                                                <span class="email-list-item-username me-2">لورم ایپسوم متن</span>
                                                                <span class="email-list-item-subject d-xl-inline-block d-block">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</span>
                                                            </div>
                                                            <div class="email-list-item-meta ms-auto d-flex align-items-center">
                                                                <span class="email-list-item-attachment bx bx-paperclip cursor-pointer me-2 float-end float-sm-none"></span>
                                                                <span class="email-list-item-label badge badge-dot bg-primary d-none d-md-inline-block me-2" data-label="company"></span>
                                                                <small class="email-list-item-time text-muted">12:44 ق.ظ</small>
                                                                <ul class="list-inline email-list-item-actions">
                                                                    <li class="list-inline-item email-read"><i class="bx bx-envelope-open"></i></li>
                                                                    <li class="list-inline-item email-delete"><i class="bx bx-trash"></i></li>
                                                                    <li class="list-inline-item"><i class="bx bx-archive-in"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="email-list-item email-marked-read" data-starred="true" data-bs-toggle="sidebar" data-target="#app-email-view">
                                                        <div class="d-flex align-items-center">
                                                            <div class="form-check mb-1">
                                                                <input class="email-list-item-input form-check-input" type="checkbox" id="email-4">
                                                                <label class="form-check-label" for="email-4"></label>
                                                            </div>
                                                            <i class="email-list-item-bookmark bx bx-star d-sm-inline-block d-none cursor-pointer ms-2 me-3"></i>
                                                            <img src="{!! asset('img/avatars/1.png') !!}" alt="user-avatar" class="d-block flex-shrink-0 rounded-circle me-sm-3 me-0" height="32" width="32">
                                                            <div class="email-list-item-content ms-2 ms-sm-0 me-2">
                                                                <span class="email-list-item-username me-2">لورم ایپسوم متن</span>
                                                                <span class="email-list-item-subject d-xl-inline-block d-block">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با</span>
                                                            </div>
                                                            <div class="email-list-item-meta ms-auto d-flex align-items-center">
                                                                <span class="email-list-item-label badge badge-dot bg-success d-none d-md-inline-block me-2" data-label="work"></span>
                                                                <small class="email-list-item-time text-muted">دیروز</small>
                                                                <ul class="list-inline email-list-item-actions">
                                                                    <li class="list-inline-item email-unread"><i class="bx bx-envelope"></i></li>
                                                                    <li class="list-inline-item email-delete"><i class="bx bx-trash"></i></li>
                                                                    <li class="list-inline-item"><i class="bx bx-archive-in"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="email-list-item email-marked-read" data-spam="true" data-bs-toggle="sidebar" data-target="#app-email-view">
                                                        <div class="d-flex align-items-center">
                                                            <div class="form-check mb-1">
                                                                <input class="email-list-item-input form-check-input" type="checkbox" id="email-5">
                                                                <label class="form-check-label" for="email-5"></label>
                                                            </div>
                                                            <i class="email-list-item-bookmark bx bx-star d-sm-inline-block d-none cursor-pointer ms-2 me-3"></i>
                                                            <img src="{!! asset('img/avatars/1.png') !!}" alt="user-avatar" class="d-block flex-shrink-0 rounded-circle me-sm-3 me-0" height="32" width="32">
                                                            <div class="email-list-item-content ms-2 ms-sm-0 me-2">
                                                                <span class="email-list-item-username me-2">لورم ایپسوم</span>
                                                                <span class="email-list-item-subject d-xl-inline-block d-block">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان</span>
                                                            </div>
                                                            <div class="email-list-item-meta ms-auto d-flex align-items-center">
                                                                <span class="email-list-item-label badge badge-dot bg-primary d-none d-md-inline-block me-2" data-label="company"></span>
                                                                <small class="email-list-item-time text-muted">دیروز</small>
                                                                <ul class="list-inline email-list-item-actions">
                                                                    <li class="list-inline-item email-unread"><i class="bx bx-envelope"></i></li>
                                                                    <li class="list-inline-item email-delete"><i class="bx bx-trash"></i></li>
                                                                    <li class="list-inline-item"><i class="bx bx-archive-in"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="email-list-item" data-trash="true" data-bs-toggle="sidebar" data-target="#app-email-view">
                                                        <div class="d-flex align-items-center">
                                                            <div class="form-check mb-1">
                                                                <input class="email-list-item-input form-check-input" type="checkbox" id="email-6">
                                                                <label class="form-check-label" for="email-6"></label>
                                                            </div>
                                                            <i class="email-list-item-bookmark bx bx-star d-sm-inline-block d-none cursor-pointer ms-2 me-3"></i>
                                                            <img src="{!! asset('img/avatars/1.png') !!}" alt="user-avatar" class="d-block flex-shrink-0 rounded-circle me-sm-3 me-0" height="32" width="32">

                                                            <div class="email-list-item-content ms-2 ms-sm-0 me-2">
                                                                <span class="email-list-item-username me-2">لورم ایپسوم متن</span>
                                                                <span class="email-list-item-subject d-xl-inline-block d-block">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</span>
                                                            </div>
                                                            <div class="email-list-item-meta ms-auto d-flex align-items-center">
                                                                <span class="email-list-item-label badge badge-dot bg-info d-none d-md-inline-block me-2" data-label="work"></span>
                                                                <small class="email-list-item-time text-muted">5 تیر</small>
                                                                <ul class="list-inline email-list-item-actions">
                                                                    <li class="list-inline-item email-read"><i class="bx bx-envelope-open"></i></li>
                                                                    <li class="list-inline-item email-delete"><i class="bx bx-trash"></i></li>
                                                                    <li class="list-inline-item"><i class="bx bx-archive-in"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="email-list-item email-marked-read" data-draft="true" data-bs-toggle="sidebar" data-target="#app-email-view">
                                                        <div class="d-flex align-items-center">
                                                            <div class="form-check mb-1">
                                                                <input class="email-list-item-input form-check-input" type="checkbox" id="email-7">
                                                                <label class="form-check-label" for="email-7"></label>
                                                            </div>
                                                            <i class="email-list-item-bookmark bx bx-star d-sm-inline-block d-none cursor-pointer ms-2 me-3"></i>
                                                            <img src="{!! asset('img/avatars/1.png') !!}" alt="user-avatar" class="d-block flex-shrink-0 rounded-circle me-sm-3 me-0" height="32" width="32">
                                                            <div class="email-list-item-content ms-2 ms-sm-0 me-2">
                                                                <span class="email-list-item-username me-2">لورم ایپسوم متن</span>
                                                                <span class="email-list-item-subject d-xl-inline-block d-block">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از</span>
                                                            </div>
                                                            <div class="email-list-item-meta ms-auto d-flex align-items-center">
                                                                <span class="email-list-item-label badge badge-dot bg-primary d-none d-md-inline-block me-2" data-label="company"></span>
                                                                <small class="email-list-item-time text-muted">5 تیر</small>
                                                                <ul class="list-inline email-list-item-actions">
                                                                    <li class="list-inline-item email-unread"><i class="bx bx-envelope"></i></li>
                                                                    <li class="list-inline-item email-delete"><i class="bx bx-trash"></i></li>
                                                                    <li class="list-inline-item"><i class="bx bx-archive-in"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="email-list-item email-marked-read" data-starred="true" data-bs-toggle="sidebar" data-target="#app-email-view">
                                                        <div class="d-flex align-items-center">
                                                            <div class="form-check mb-1">
                                                                <input class="email-list-item-input form-check-input" type="checkbox" id="email-8">
                                                                <label class="form-check-label" for="email-8"></label>
                                                            </div>
                                                            <i class="email-list-item-bookmark bx bx-star d-sm-inline-block d-none cursor-pointer ms-2 me-3"></i>
                                                            <img src="{!! asset('img/avatars/6.png') !!}" alt="user-avatar" class="d-block flex-shrink-0 rounded-circle me-sm-3 me-0" height="32" width="32">
                                                            <div class="email-list-item-content ms-2 ms-sm-0 me-2">
                                                                <span class="email-list-item-username me-2">لورم ایپسوم متن</span>
                                                                <span class="email-list-item-subject d-xl-inline-block d-block">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با</span>
                                                            </div>
                                                            <div class="email-list-item-meta ms-auto d-flex align-items-center">
                                                                <span class="email-list-item-attachment bx bx-paperclip cursor-pointer me-2 float-end float-sm-none"></span>
                                                                <span class="email-list-item-label badge badge-dot bg-danger d-none d-md-inline-block me-2" data-label="private"></span>
                                                                <small class="email-list-item-time text-muted">20 خرداد</small>
                                                                <ul class="list-inline email-list-item-actions">
                                                                    <li class="list-inline-item email-unread"><i class="bx bx-envelope"></i></li>
                                                                    <li class="list-inline-item email-delete"><i class="bx bx-trash"></i></li>
                                                                    <li class="list-inline-item"><i class="bx bx-archive-in"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="email-list-item email-marked-read" data-spam="true" data-bs-toggle="sidebar" data-target="#app-email-view">
                                                        <div class="d-flex align-items-center">
                                                            <div class="form-check mb-1">
                                                                <input class="email-list-item-input form-check-input" type="checkbox" id="email-9">
                                                                <label class="form-check-label" for="email-9"></label>
                                                            </div>
                                                            <i class="email-list-item-bookmark bx bx-star d-sm-inline-block d-none cursor-pointer ms-2 me-3"></i>
                                                            <img src="{!! asset('img/avatars/1.png') !!}" alt="user-avatar" class="d-block flex-shrink-0 rounded-circle me-sm-3 me-0" height="32" width="32">

                                                            <div class="email-list-item-content ms-2 ms-sm-0 me-2">
                                                                <span class="email-list-item-username me-2">لورم ایپسوم</span>
                                                                <span class="email-list-item-subject d-xl-inline-block d-block">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</span>
                                                            </div>
                                                            <div class="email-list-item-meta ms-auto d-flex align-items-center">
                                                                <span class="email-list-item-label badge badge-dot bg-info d-none d-md-inline-block me-2" data-label="important"></span>
                                                                <small class="email-list-item-time text-muted">25 اردیبهشت</small>
                                                                <ul class="list-inline email-list-item-actions">
                                                                    <li class="list-inline-item email-unread"><i class="bx bx-envelope"></i></li>
                                                                    <li class="list-inline-item email-delete"><i class="bx bx-trash"></i></li>
                                                                    <li class="list-inline-item"><i class="bx bx-archive-in"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="email-list-item email-marked-read" data-trash="true" data-bs-toggle="sidebar" data-target="#app-email-view">
                                                        <div class="d-flex align-items-center">
                                                            <div class="form-check mb-1">
                                                                <input class="email-list-item-input form-check-input" type="checkbox" id="email-10">
                                                                <label class="form-check-label" for="email-10"></label>
                                                            </div>
                                                            <i class="email-list-item-bookmark bx bx-star d-sm-inline-block d-none cursor-pointer ms-2 me-3"></i>
                                                            <img src="{!! asset('img/avatars/1.png') !!}" alt="user-avatar" class="d-block flex-shrink-0 rounded-circle me-sm-3 me-0" height="32" width="32">
                                                            <div class="email-list-item-content ms-2 ms-sm-0 me-2">
                                                                <span class="email-list-item-username me-2">لورم ایپسوم متن ساختگی </span>
                                                                <span class="email-list-item-subject d-xl-inline-block d-block">
                                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده</span>
                                                            </div>
                                                            <div class="email-list-item-meta ms-auto d-flex align-items-center">
                                                                <span class="email-list-item-label badge badge-dot bg-primary d-none d-md-inline-block me-2" data-label="company"></span>
                                                                <small class="email-list-item-time text-muted">25 فروردین</small>
                                                                <ul class="list-inline email-list-item-actions">
                                                                    <li class="list-inline-item email-unread"><i class="bx bx-envelope"></i></li>
                                                                    <li class="list-inline-item email-delete"><i class="bx bx-trash"></i></li>
                                                                    <li class="list-inline-item"><i class="bx bx-archive-in"></i></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="app-overlay"></div>
                                    </div>
                                    <!-- /Emails List -->

                                    <!-- Email View -->
                                    <div class="col app-email-view flex-grow-0 bg-body" id="app-email-view">
                                        <div class="card shadow-none border-0 rounded-0 app-email-view-header px-3 py-lg-3 py-2">
                                            <!-- Email View : Title  bar-->
                                            <div class="d-flex justify-content-between align-items-center py-2">
                                                <div class="d-flex align-items-center overflow-hidden">
                                                    <i class="bx bx-chevron-left bx-sm cursor-pointer me-2" data-bs-toggle="sidebar" data-target="#app-email-view"></i>
                                                    <h6 class="text-truncate mb-0 me-2">لورم ایپسوم متن ساختگی با تولید</h6>
                                                    <span class="badge bg-label-danger">شخصی</span>
                                                </div>
                                                <!-- Email View : Action bar-->
                                                <div class="d-flex align-items-center align-items-center">
                                                    <i class="bx bx-printer d-sm-block d-none"></i>
                                                    <div class="dropdown ms-3">
                                                        <button class="btn p-0" type="button" id="dropdownMoreOptions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="bx bx-dots-vertical-rounded"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMoreOptions">
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="bx bx-envelope-open bx-xs me-1"></i>
                                                                <span class="align-middle">علامت خوانده نشده</span>
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="bx bx-envelope-open bx-xs me-1"></i>
                                                                <span class="align-middle">علامت خوانده نشده</span>
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="bx bx-star bx-xs me-1"></i>
                                                                <span class="align-middle">افزودن ستاره</span>
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="bx bx-calendar bx-xs me-1"></i>
                                                                <span class="align-middle">ایجاد رویداد</span>
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="bx bx-volume-mute bx-xs me-1"></i>
                                                                <span class="align-middle">بیصدا کردن</span>
                                                            </a>
                                                            <a class="dropdown-item d-sm-none d-block" href="javascript:void(0)">
                                                                <i class="bx bx-printer bx-xs me-1"></i>
                                                                <span class="align-middle">چاپ</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="app-email-view-hr mx-n3 mb-2 mb-lg-3 mt-2 mt-lg-3">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center">
                                                    <i class="bx bx-trash-alt cursor-pointer me-3" data-bs-toggle="sidebar" data-target="#app-email-view"></i>
                                                    <i class="bx bx-envelope-open cursor-pointer me-3"></i>
                                                    <div class="dropdown me-3">
                                                        <button class="btn p-0" type="button" id="dropdownMenuFolderOne" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="bx bx-folder"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuFolderOne">
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="bx bx-error-circle bx-xs me-1"></i>
                                                                <span class="align-middle">اسپم</span>
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="bx bx-pencil bx-xs me-1"></i>
                                                                <span class="align-middle">پیش‌نویس</span>
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="bx bx-trash bx-xs me-1"></i>
                                                                <span class="align-middle">زباله دان</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="dropdown me-3">
                                                        <button class="btn p-0" type="button" id="dropdownLabelTwo" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="bx bx-purchase-tag"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLabelTwo">
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="badge badge-dot bg-success"></i>
                                                                <span class="align-middle">کارگاه</span>
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="badge badge-dot bg-primary"></i>
                                                                <span class="align-middle">شرکت</span>
                                                            </a>
                                                            <a class="dropdown-item" href="javascript:void(0)">
                                                                <i class="badge badge-dot bg-info"></i>
                                                                <span class="align-middle">مهم</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center flex-wrap justify-content-end">
                                                    <span class="d-sm-block d-none mx-3 text-muted">1-10 از 653</span>
                                                    <i class="bx bx-chevron-left scaleX-n1-rtl cursor-pointer text-muted me-2 fs-4"></i>
                                                    <i class="bx bx-chevron-right scaleX-n1-rtl cursor-pointer fs-4"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="m-0">
                                        <!-- Email View : Content-->
                                        <div class="app-email-view-content py-4">
                                            <p class="email-earlier-msgs text-center text-muted cursor-pointer mb-5">1 پیام قبلی</p>
                                            <!-- Email View : Previous mails-->
                                            <div class="card email-card-prev mx-sm-4 mx-3 border shadow-none">
                                                <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
                                                    <div class="d-flex align-items-center mb-sm-0 mb-3">
                                                        <img src="{!! asset('img/avatars/2.png') !!}" alt="user-avatar" class="flex-shrink-0 rounded-circle me-3" height="40" width="40">
                                                        <div class="flex-grow-1 ms-1">
                                                            <h6 class="m-0">تونی استارک</h6>
                                                            <small class="text-muted">rossGeller@email.com</small>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex">
                                                        <p class="mb-0 me-3 text-muted">20 آبان 1402 - 08:30 ق.ظ</p>
                                                        <i class="bx bx-paperclip cursor-pointer me-2 fs-4"></i>
                                                        <i class="email-list-item-bookmark bx bx-star cursor-pointer me-2 fs-4"></i>
                                                        <div class="dropdown me-3">
                                                            <button class="btn p-0" type="button" id="dropdownEmailOne" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bx bx-dots-vertical-rounded fs-4 lh-1"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownEmailOne">
                                                                <a class="dropdown-item scroll-to-reply" href="javascript:void(0)">
                                                                    <i class="bx bx-share me-1"></i>
                                                                    <span class="align-middle">پاسخ</span>
                                                                </a>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="bx bx-share me-1 scaleX-n1 scaleX-n1-rtl"></i>
                                                                    <span class="align-middle">فوروارد</span>
                                                                </a>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="bx bx-info-circle me-1"></i>
                                                                    <span class="align-middle">گزارش</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="fw-bold">تبریک!</p>
                                                    <p>
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده
                                                    </p>
                                                    <p>
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای
                                                    </p>
                                                    <p class="mb-0">لورم ایپسوم متن ساختگی</p>
                                                    <p class="fw-bold mb-0">تیم طراحی سایت</p>
                                                    <hr>
                                                    <p class="email-attachment-title mb-2">پیوست ها</p>
                                                    <div class="cursor-pointer">
                                                        <i class="bx bx-file"></i>
                                                        <span class="align-middle ms-1">report.xlsx</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Email View : Last mail-->
                                            <div class="card email-card-last mx-sm-4 mx-3 mt-4 border shadow-none">
                                                <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
                                                    <div class="d-flex align-items-center mb-sm-0 mb-3">
                                                        <img src="{!! asset('img/avatars/1.png') !!}" alt="user-avatar" class="flex-shrink-0 rounded-circle me-3" height="40" width="40">
                                                        <div class="flex-grow-1 ms-1 primary-font">
                                                            <h6 class="m-0">بیل گیتس</h6>
                                                            <small class="text-muted">billgates@msn.com</small>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <p class="mb-0 me-3 text-muted">20 آبان 1402 - 08:10 ق.ظ</p>
                                                        <i class="bx bx-paperclip cursor-pointer me-2 fs-4"></i>
                                                        <i class="email-list-item-bookmark bx bx-star cursor-pointer me-2 fs-4"></i>
                                                        <div class="dropdown me-3">
                                                            <button class="btn p-0" type="button" id="dropdownEmailTwo" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bx bx-dots-vertical-rounded fs-4 lh-1"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownEmailTwo">
                                                                <a class="dropdown-item scroll-to-reply" href="javascript:void(0)">
                                                                    <i class="bx bx-share me-1"></i>
                                                                    <span class="align-middle">پاسخ</span>
                                                                </a>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="bx bx-share me-1 scaleX-n1 scaleX-n1-rtl"></i>
                                                                    <span class="align-middle">فوروارد</span>
                                                                </a>
                                                                <a class="dropdown-item" href="javascript:void(0)">
                                                                    <i class="bx bx-info-circle me-1"></i>
                                                                    <span class="align-middle">گزارش</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="fw-bold">تبریک!</p>
                                                    <p>
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده
                                                    </p>
                                                    <p>
                                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای
                                                    </p>
                                                    <p class="mb-0">لورم ایپسوم متن ساختگی</p>
                                                    <p class="fw-bold mb-0">تیم طراحی سامانه اورهال</p>
                                                    <hr>
                                                    <p class="email-attachment-title mb-2">پیوست ها</p>
                                                    <div class="cursor-pointer">
                                                        <i class="bx bx-file"></i>
                                                        <span class="align-middle ms-1">report.xlsx</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- Email View -->
                                </div>
                            </div>

                            <!-- Compose Email -->
                            <div class="app-email-compose modal" id="emailComposeSidebar" tabindex="-1" aria-labelledby="emailComposeSidebarLabel" aria-hidden="true">
                                <div class="modal-dialog m-0 me-md-4 mb-4 modal-lg">
                                    <div class="modal-content p-0">
                                        <div class="modal-header py-3">
                                            <h5 class="modal-title fs-5 secondary-font">نوشتن پیام</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body flex-grow-1 pb-sm-0 p-4 py-2">
                                            <form class="email-compose-form">
                                                <div class="email-compose-to d-flex justify-content-between align-items-center">
                                                    <label class="form-label mb-0" for="emailContacts">به:</label>
                                                    <div class="select2-primary border-0 shadow-none flex-grow-1 mx-2">
                                                        <select class="select2 select-email-contacts form-select" id="emailContacts" name="emailContacts" multiple>
                                                            <option data-avatar="1.png" value="Jane Foster">تونی استارک</option>
                                                            <option data-avatar="3.png" value="Donna Frank">پیتر پارکر</option>
                                                            <option data-avatar="5.png" value="Gabrielle Robertson">استیو راجرز</option>
                                                            <option data-avatar="7.png" value="Lori Spears">اولیور کویین</option>
                                                            <option data-avatar="9.png" value="Sandy Vega">بروس وین</option>
                                                            <option data-avatar="11.png" value="Cheryl May">کلینت بارتون</option>
                                                        </select>
                                                    </div>
                                                    <div class="email-compose-toggle-wrapper">
                                                        <a class="email-compose-toggle-cc" href="javascript:void(0);">Cc |</a>
                                                        <a class="email-compose-toggle-bcc" href="javascript:void(0);">Bcc</a>
                                                    </div>
                                                </div>

                                                <div class="email-compose-cc d-none">
                                                    <hr class="mx-n4 my-2">
                                                    <div class="d-flex align-items-center">
                                                        <label for="email-cc" class="form-label mb-0">Cc:</label>
                                                        <input type="text" class="form-control border-0 shadow-none flex-grow-1 mx-2" id="email-cc" placeholder="someone@email.com">
                                                    </div>
                                                </div>
                                                <div class="email-compose-bcc d-none">
                                                    <hr class="mx-n4 my-2">
                                                    <div class="d-flex align-items-center">
                                                        <label for="email-bcc" class="form-label mb-0">Bcc:</label>
                                                        <input type="text" class="form-control border-0 shadow-none flex-grow-1 mx-2" id="email-bcc" placeholder="someone@email.com">
                                                    </div>
                                                </div>
                                                <hr class="mx-n4 my-2">
                                                <div class="email-compose-subject d-flex align-items-center mb-2">
                                                    <label for="email-subject" class="form-label mb-0">موضوع:</label>
                                                    <input type="text" class="form-control border-0 shadow-none flex-grow-1 mx-2" id="email-subject" placeholder="جزئیات پروژه">
                                                </div>
                                                <div class="email-compose-message mx-n4">
                                                    <div class="d-flex justify-content-end">
                                                        <div class="email-editor-toolbar border-bottom-0 w-100">
                                <span class="ql-formats me-0">
                                  <button class="ql-bold"></button>
                                  <button class="ql-italic"></button>
                                  <button class="ql-underline"></button>
                                  <button class="ql-list" value="ordered"></button>
                                  <button class="ql-list" value="bullet"></button>
                                  <button class="ql-link"></button>
                                  <button class="ql-image"></button>
                                </span>
                                                        </div>
                                                    </div>
                                                    <div class="email-editor"></div>
                                                </div>
                                                <hr class="mx-n4 mt-0 mb-2">
                                                <div class="email-compose-actions d-flex justify-content-between align-items-center mt-3 mb-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="btn-group">
                                                            <button type="reset" class="btn btn-primary" data-bs-dismiss="modal" aria-label="Close">
                                                                ارسال
                                                            </button>
                                                            <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="visually-hidden">نمایش منوی کشویی</span>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item" href="javascript:void(0);">زمان‌بندی ارسال</a></li>
                                                                <li><a class="dropdown-item" href="javascript:void(0);">ذخیره پیش‌نویس</a></li>
                                                            </ul>
                                                        </div>
                                                        <label for="attach-file"><i class="bx bx-paperclip cursor-pointer ms-2"></i></label>
                                                        <input type="file" name="file-input" class="d-none" id="attach-file">
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div class="dropdown">
                                                            <button class="btn p-0" type="button" id="dropdownMoreActions" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="bx bx-dots-vertical-rounded"></i>
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMoreActions">
                                                                <li><button type="button" class="dropdown-item">افزودن برچسب</button></li>
                                                                <li><button type="button" class="dropdown-item">حالت متن ساده</button></li>
                                                                <li>
                                                                    <hr class="dropdown-divider">
                                                                </li>
                                                                <li><button type="button" class="dropdown-item">چاپ</button></li>
                                                                <li><button type="button" class="dropdown-item">بررسی املا</button></li>
                                                            </ul>
                                                        </div>
                                                        <button type="reset" class="btn" data-bs-dismiss="modal" aria-label="Close">
                                                            <i class="bx bx-trash"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Compose Email -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('js')
    <script src="{!! asset('js/app-email.js') !!}"></script>

@endpush
