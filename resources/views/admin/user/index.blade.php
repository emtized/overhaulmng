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
                    @foreach($customers as $customer)
                    <tr>
                        <td>
                            <input type="checkbox" class="dt-checkboxes form-check-input mt-0 align-middle"></td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="avatar-wrapper">
                                    <div class="avatar me-2">
                                        <img src="{{ asset($customer->image_small) }}" alt="آواتار" class="rounded-circle">
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <span class="emp_name text-truncate">{{$customer->first_name . ' '.$customer->last_name}}</span>
                                    <small class="emp_post text-truncate text-muted">{{$customer->father_name}}</small>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="emp_name text-truncate">{{$customer->first_name . ' '.$customer->last_name}}</span>
                        </td>
                        <td>{{ $customer->email}}</td>
                        <td>{{jalaliDate($customer->created_at)}}</td>
                        <td>{{$customer->contact->mobile1 ?? 'وارد نشده است'}}</td>
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
                                    <li>
                                        <form class="d-inline" action="{{ route('admin.customer.delete',$customer->id)}}" method="post">
                                            @csrf
                                            {{ method_field('delete') }}
                                        <button class="dropdown-item text-danger delete-record delete" type="submit"> حذف</button>
                                    </form>

                                    </li>
                                </ul>
                            </div>
                            <a href="javascript" class="btn btn-sm btn-icon item-edit"><i class="bx bxs-edit"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal to add new record -->
    <div class="offcanvas offcanvas-end {{ count($errors) > 0 ? 'show' : '' }}" id="add-new-record">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="exampleModalLabel">ایجاد کارجو جدید</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body flex-grow-1">
            <form action="{{route('admin.customer.store')}}" method="post" class="add-new-record pt-0 row g-2" id="form-add-new-record">
                @csrf
                <div class="col-sm-12">
                    <label class="form-label" for="basicFullname">نام </label>
                    <div class="input-group input-group-merge">
                        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                        <input type="text" id="basicFullname" class="form-control dt-full-name"  name="first_name" placeholder="" aria-label="John Doe" aria-describedby="basicFullname2" value="{{old('first_name')}}">
                    </div>
                    @error('first_name')
                    <strong class="text-danger">
                        {{ $message }}
                    </strong>
                    @enderror
                </div>
                <div class="col-sm-12">
                    <label class="form-label" for="basicFullname">نام خانوادگی</label>
                    <div class="input-group input-group-merge">
                        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                        <input type="text" id="basicFullname" class="form-control dt-full-name" name="last_name" placeholder="" aria-label="John Doe" aria-describedby="basicFullname2" value="{{old('last_name')}}">
                    </div>
                    @error('last_name')
                    <strong class="text-danger">
                        {{ $message }}
                    </strong>
                    @enderror
                </div>

                <div class="col-sm-12">
                    <label class="form-label" for="basicFullname">نام پدر</label>
                    <div class="input-group input-group-merge">
                        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                        <input type="text" id="basicFullname" class="form-control dt-full-name dt-salary" name="father_name" placeholder="" aria-label="John Doe" aria-describedby="basicFullname2" value="{{old('father_name')}}">
                    </div>
                    @error('father_name')
                    <strong class="text-danger">
                        {{ $message }}
                    </strong>
                    @enderror
                </div>

                <div class="col-sm-12">
                    <label class="form-label" for="basicEmail">ایمیل</label>
                    <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                        <input type="text" id="basicEmail" name="email" class="form-control dt-email text-start dt-post" placeholder="john.doe@example.com" aria-label="john.doe@example.com" dir="ltr" value="{{old('email')}}">
                    </div>
                    @error('email')
                    <strong class="text-danger">
                        {{ $message }}
                    </strong>
                    @enderror
                </div>
                <div class="col-sm-12">
                    <label class="form-label" for="basicEmail">رمز عبور</label>
                    <div class="input-group input-group-merge">
                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                        <input type="password" id="password" class="form-control text-start dt-date" name="password" placeholder="············" aria-describedby="password" dir="ltr">
                    </div>
                    @error('password')
                    <strong class="text-danger">
                        {{ $message }}
                    </strong>
                    @enderror
                    <div class="form-text">می‌توانید از حروف، اعداد و نقطه استفاده کنید</div>
                </div>
                 {{-- <div class="col-sm-12">
                    <label class="form-label" for="basicPost">مطلب</label>
                    <div class="input-group input-group-merge">
                        <span id="basicPost2" class="input-group-text"><i class="bx bxs-briefcase"></i></span>
                        <input type="text" id="basicPost" name="basicPost" class="form-control dt-post" placeholder="توسعه دهنده وب" aria-label="Web Developer" aria-describedby="basicPost2">
                    </div>
                </div> --}}
                {{-- <div class="col-sm-12">
                    <label class="form-label" for="basicDate">تاریخ عضویت</label>
                    <div class="input-group input-group-merge">
                        <span id="basicDate2" class="input-group-text"><i class="bx bx-calendar"></i></span>
                        <input type="text" class="form-control dt-date" id="basicDate" name="basicDate" aria-describedby="basicDate2" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY">
                    </div>
                </div> --}}
                {{-- <div class="col-sm-12">
                    <label class="form-label" for="basicSalary">حقوق</label>
                    <div class="input-group input-group-merge">
                        <span id="basicSalary2" class="input-group-text">تومان</span>
                        <input type="number" id="basicSalary" name="basicSalary" class="form-control dt-salary" placeholder="12000" aria-label="12000" aria-describedby="basicSalary2">
                    </div>
                </div> --}}
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

    @include('alert.sweetalert.delete-confirm', ['className' => 'delete'])
@endpush
