@extends('admin.layouts.app')
@push('css')
    <link rel="stylesheet" href="{!! asset('libs/datatables-bs5/datatables.bootstrap5.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/datatables-responsive-bs5/responsive.bootstrap5.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/datatables-checkboxes-jquery/datatables.checkboxes.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/datatables-buttons-bs5/buttons.bootstrap5.css') !!}">
@endpush

@section('content')
    <!-- DataTable with Buttons -->
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <table class="datatables-basic table table-bordered table-responsive">
                <thead>
                <tr>
                    <th><input type="checkbox" class="form-check-input mt-0 align-middle"></th>
                    <th>شناسه</th>
                    <th>نام</th>
                    <th>ایمیل</th>
                    <th>تاریخ</th>
                    <th>همراه</th>
                    <th>وضعیت</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <input type="checkbox" class="dt-checkboxes form-check-input mt-0 align-middle"></td>
                    <td>
                        <div class="d-flex justify-content-start align-items-center user-name">
                            <div class="avatar-wrapper">
                                <div class="avatar me-2">
                                    <img src="{!! asset('img/avatars/3.png') !!}" alt="آواتار" class="rounded-circle">
                                </div>
                            </div>
                            <div class="d-flex flex-column">
                                <span class="emp_name text-truncate">تونی استارک</span>
                                <small class="emp_post text-truncate text-muted">نام پدر</small>
                            </div>
                        </div>
                    </td>
                    <td>
                        <span class="emp_name text-truncate">تونی استارک</span>
                    </td>
                    <td>ecarnock2q@washington.edu</td>
                    <td>1401/01/26</td>
                    <td>091211111</td>
                    <td><span class="badge rounded-pill  bg-label-warning">استعفا داده</span></td>
                    <td>
                        <div class="d-inline-block">
                            <a href="javascript:;" class="btn btn-sm btn-icon dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end m-0" style="">
                                <li>
                                    <a href="javascript:;" class="dropdown-item">جزئیات</a>
                                </li>
                                <li>
                                    <a href="javascript:;" class="dropdown-item">ارسال پیام</a>
                                </li>
                                <div class="dropdown-divider"></div>
                                <li><a href="javascript:;" class="dropdown-item text-danger delete-record">حذف</a></li>
                            </ul>
                        </div>
                        <a href="javascript:;" class="btn btn-sm btn-icon item-edit"><i class="bx bxs-edit"></i></a>
                    </td>
                </tr>

                </tbody>

            </table>
        </div>
    </div>
    <!-- Modal to add new record -->
    <div class="offcanvas offcanvas-end" id="add-new-record">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="exampleModalLabel">رکورد جدید</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body flex-grow-1">
            <form class="add-new-record pt-0 row g-2" id="form-add-new-record" onsubmit="return false">
                <div class="col-sm-12">
                    <label class="form-label" for="basicFullname">نام کامل</label>
                    <div class="input-group input-group-merge">
                        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                        <input type="text" id="basicFullname" class="form-control dt-full-name" name="basicFullname" placeholder="جان اسنو" aria-label="John Doe" aria-describedby="basicFullname2">
                    </div>
                </div>
                <div class="col-sm-12">
                    <label class="form-label" for="basicPost">مطلب</label>
                    <div class="input-group input-group-merge">
                        <span id="basicPost2" class="input-group-text"><i class="bx bxs-briefcase"></i></span>
                        <input type="text" id="basicPost" name="basicPost" class="form-control dt-post" placeholder="توسعه دهنده وب" aria-label="Web Developer" aria-describedby="basicPost2">
                    </div>
                </div>
                <div class="col-sm-12">
                    <label class="form-label" for="basicEmail">ایمیل</label>
                    <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                        <input type="text" id="basicEmail" name="basicEmail" class="form-control dt-email text-start" placeholder="john.doe@example.com" aria-label="john.doe@example.com" dir="ltr">
                    </div>
                    <div class="form-text">می‌توانید از حروف، اعداد و نقطه استفاده کنید</div>
                </div>
                <div class="col-sm-12">
                    <label class="form-label" for="basicDate">تاریخ عضویت</label>
                    <div class="input-group input-group-merge">
                        <span id="basicDate2" class="input-group-text"><i class="bx bx-calendar"></i></span>
                        <input type="text" class="form-control dt-date" id="basicDate" name="basicDate" aria-describedby="basicDate2" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY">
                    </div>
                </div>
                <div class="col-sm-12">
                    <label class="form-label" for="basicSalary">حقوق</label>
                    <div class="input-group input-group-merge">
                        <span id="basicSalary2" class="input-group-text">تومان</span>
                        <input type="number" id="basicSalary" name="basicSalary" class="form-control dt-salary" placeholder="12000" aria-label="12000" aria-describedby="basicSalary2">
                    </div>
                </div>
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary data-submit me-sm-3 me-1">ثبت</button>
                    <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">انصراف</button>
                </div>
            </form>
        </div>
    </div>
    <!--/ DataTable with Buttons -->
    <div class="offcanvas offcanvas-end" id="add-new-record">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="exampleModalLabel">رکورد جدید</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body flex-grow-1">
            <form class="add-new-record pt-0 row g-2" id="form-add-new-record" onsubmit="return false">
                <div class="col-sm-12">
                    <label class="form-label" for="basicFullname">نام کامل</label>
                    <div class="input-group input-group-merge">
                        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                        <input type="text" id="basicFullname" class="form-control dt-full-name" name="basicFullname" placeholder="جان اسنو" aria-label="John Doe" aria-describedby="basicFullname2">
                    </div>
                </div>
                <div class="col-sm-12">
                    <label class="form-label" for="basicPost">مطلب</label>
                    <div class="input-group input-group-merge">
                        <span id="basicPost2" class="input-group-text"><i class="bx bxs-briefcase"></i></span>
                        <input type="text" id="basicPost" name="basicPost" class="form-control dt-post" placeholder="توسعه دهنده وب" aria-label="Web Developer" aria-describedby="basicPost2">
                    </div>
                </div>
                <div class="col-sm-12">
                    <label class="form-label" for="basicEmail">ایمیل</label>
                    <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                        <input type="text" id="basicEmail" name="basicEmail" class="form-control dt-email text-start" placeholder="john.doe@example.com" aria-label="john.doe@example.com" dir="ltr">
                    </div>
                    <div class="form-text">می‌توانید از حروف، اعداد و نقطه استفاده کنید</div>
                </div>
                <div class="col-sm-12">
                    <label class="form-label" for="basicDate">تاریخ عضویت</label>
                    <div class="input-group input-group-merge">
                        <span id="basicDate2" class="input-group-text"><i class="bx bx-calendar"></i></span>
                        <input type="text" class="form-control dt-date" id="basicDate" name="basicDate" aria-describedby="basicDate2" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY">
                    </div>
                </div>
                <div class="col-sm-12">
                    <label class="form-label" for="basicSalary">حقوق</label>
                    <div class="input-group input-group-merge">
                        <span id="basicSalary2" class="input-group-text">تومان</span>
                        <input type="number" id="basicSalary" name="basicSalary" class="form-control dt-salary" placeholder="12000" aria-label="12000" aria-describedby="basicSalary2">
                    </div>
                </div>
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary data-submit me-sm-3 me-1">ثبت</button>
                    <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">انصراف</button>
                </div>
            </form>
        </div>
    </div>
    <!--/ DataTable with Buttons -->
@endsection
@push('js')
    <script src="{!! asset('libs/datatables-bs5/datatables-bootstrap5.js') !!}"></script>
    <script src="{!! asset('libs/datatables-bs5/i18n/fa.js') !!}"></script>
    <script src="{!! asset('js/tables-datatables-basic.js') !!}"></script>

@endpush
