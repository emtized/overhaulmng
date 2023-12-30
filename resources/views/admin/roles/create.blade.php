@extends('admin.layouts.app')
@push('css')
    <link rel="stylesheet" href="{!! asset('libs/datatables-bs5/datatables.bootstrap5.css') !!}">
@endpush

@section('content')
    <h4 class="py-3 breadcrumb-wrapper mb-2">لیست نقش‌ها</h4>

    <p>
        یک نقش، دسترسی به منوها و امکانات از پیش تعریف شده را فراهم می کند که <br>
        بر اساس نقش اختصاص یافته، مدیر می تواند دسترسی های مورد نیاز کاربر را ایجاد کند.
    </p>
    <!-- Role cards -->
    <div class="row g-4">
        @foreach ($roles as $role)
        <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-1">
                        <h6 class="fw-normal">{{$usersCountPerRole[$role->name] ?? 0}} کاربر در مجموع</h6>
                        <ul class="list-unstyled d-flex avatar-group mb-0">
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="تونی استارک" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{!! asset('img/avatars/1.png') !!}" alt="آواتار">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="استیو راجرز" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{!! asset('img/avatars/2.png') !!}" alt="آواتار">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="بری الن" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{!! asset('img/avatars/3.png') !!}" alt="آواتار">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="بیل گیتس" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{!! asset('img/avatars/5.png') !!}" alt="آواتار">
                            </li>
                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="جان اسنو" class="avatar avatar-sm pull-up">
                                <img class="rounded-circle" src="{!! asset('img/avatars/4.png') !!}" alt="آواتار">
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex justify-content-between align-items-end">
                        <div class="role-heading">
                            <h4 class="mb-1">{{ $role->title }}</h4>
                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#editRoleModal-{{$role->uuid}}" class="role-edit-modal"><small>ویرایش نقش</small></a>
                        </div>
                        <a class="text-muted"><i class="bx bx-copy"></i></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <!--create roles-->
        <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="card h-100">
                <div class="row h-100">
                    <div class="col-sm-5">
                        <div class="d-flex align-items-end h-100 justify-content-center mt-1 mt-sm-0">
                            <img src="{!! asset('img/illustrations/lady-with-laptop-light.png') !!}" class="img-fluid mb-2 mb-sm-0 mt-4" alt="Image" width="100" data-app-light-img="illustrations/lady-with-laptop-light.png" data-app-dark-img="illustrations/lady-with-laptop-dark.png">
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body text-sm-end text-center ps-sm-0">
                            <button data-bs-target="#addRoleModal" data-bs-toggle="modal" class="btn btn-primary mb-3 text-nowrap add-new-role">
                                افزودن نقش جدید
                            </button>
                            <p class="mb-0">اگر نقشی وجود ندارد اضافه کنید</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- endcreate roles-->
        <div class="col-12">
            <!-- Role Table -->
            <div class="card">
                <div class="card-datatable table-responsive">
                    <table class="datatables-users table border-top">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>کاربر</th>
                            <th>نقش</th>
                            <th>تاریخ ایجاد</th>
                            <th>وضعیت</th>
                            <th>عمل‌ها</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                            <tr>
                                <td>{{$key += 1}}</td>
                                <td>{{$user->first_name . ' '.$user->last_name}}</td>
                                <td>{{ $user->roles->pluck('title')[0] }}</td>
                                <td>{{jalaliDate($user->created_at)}}</td>
                                <td>
                                    <span class="badge bg-label-primary">اولیه</span>
                                    <span class="badge bg-label-secondary">ثانویه</span>
                                    <span class="badge bg-label-success">موفقیت</span>
                                    <span class="badge bg-label-danger">اخطار</span>
                                    <span class="badge bg-label-warning">هشدار</span>
                                    <span class="badge bg-label-info">اطلاعات</span>
                                    <span class="badge bg-label-dark">تیره</span>
                                </td>
                                <td><a href="#" class="btn btn-sm btn-icon item-edit"><i class="bx bxs-edit"></i></a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/ Role Table -->
        </div>
    </div>
    <!--/ Role cards -->

    <!-- Add Role Modal -->
    <!-- Add Role Modal -->
    <div class="modal fade" id="addRoleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role">
            <div class="modal-content p-3 p-md-5">
                <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="text-center mb-4 mt-0 mt-md-n2">
                        <h3 class="role-title secondary-font">افزودن نقش جدید</h3>
                        <p>مجوزهای نقش را تنظیم کنید</p>
                    </div>
                    <!-- Add role form -->
                    <form action="{{route('admin.role.store')}}" method="POST" id="addRoleForm" class="row g-3">
                        @csrf
                        <div class="col-6 mb-4">
                            <label class="form-label" for="modalRoleName">نام نقش  ( انگلیسی )</label>
                            <input type="text" id="modalRoleName" name="name" class="form-control" placeholder="نام نقش(انگلیسی) را وارد کنید" tabindex="-1">
                        </div>
                        <div class="col-6 mb-4">
                            <label class="form-label" for="modalRoleName">نام نقش ( فارسی )</label>
                            <input type="text" id="modalRoleName" name="title" class="form-control" placeholder="نام نقش (فارسی) را وارد کنید" tabindex="-1">
                        </div>
                        <div class="col-12">
                            <h5>مجوزهای نقش</h5>
                            <!-- Permission table -->
                            <div class="table-responsive">
                                <table class="table table-flush-spacing">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="selectAll">
                                                <label class="form-check-label" for="selectAll"> انتخاب همه </label>
                                            </div>
                                        </td>
                                    </tr>

                                    @foreach ($permissions as $p)
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5 mb-0 mt-0">
                                                        <input class="form-check-input" type="checkbox" name="{{ $p->name }}" value="{{ $p->name }}" id="permission_{{$p->id}}">
                                                        <label class="form-check-label" for="permission_{{$p->id}}"> {{$p->title}} </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- Permission table -->
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">ثبت</button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
                                انصراف
                            </button>
                        </div>
                    </form>
                    <!--/ Add role form -->
                </div>
            </div>
        </div>
    </div>
    <!--/ Add Role Modal -->

    <!-- EDIT ROLE-->
    @foreach ($roles as $role)
    <div class="modal fade" id="editRoleModal-{{$role->uuid}}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role">
            <div class="modal-content p-3 p-md-5">
                <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="text-center mb-4 mt-0 mt-md-n2">
                        <h3 class="role-title secondary-font">ویرایش نقش </h3>
                        <p>مجوزهای نقش را تنظیم کنید</p>
                    </div>
                    <!-- Add role form -->
                    <form action="{{route('admin.role.update',$role->uuid)}}" method="POST" id="addRoleForm" class="row g-3">
                        @csrf
                        @method('put')
                        <div class="col-6 mb-4">
                            <label class="form-label" for="modalRoleName">نام نقش  ( انگلیسی )</label>
                            <input type="text" id="modalRoleName" value="{{old('name',$role->name)}}" name="name" class="form-control" placeholder="نام نقش(انگلیسی) را وارد کنید" tabindex="-1">
                        </div>
                        <div class="col-6 mb-4">
                            <label class="form-label" for="modalRoleName">نام نقش ( فارسی )</label>
                            <input type="text" id="modalRoleName"  value="{{old('title',$role->title)}}" name="title" class="form-control" placeholder="نام نقش (فارسی) را وارد کنید" tabindex="-1">
                        </div>
                        <div class="col-12">
                            <h5>مجوزهای نقش</h5>
                            <!-- Permission table -->
                            <div class="table-responsive">
                                <table class="table table-flush-spacing">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check mb-0">
                                                <input class="form-check-input" type="checkbox" id="selectAll">
                                                <label class="form-check-label" for="selectAll"> انتخاب همه </label>
                                            </div>
                                        </td>
                                    </tr>

                                    @foreach ($permissions as $p)
                                        <tr>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5 mb-0 mt-0">
                                                        <input class="form-check-input" type="checkbox" name="{{ $p->name }}" value="{{ $p->name }}" id="permission_{{$p->id}}"   {{ in_array( $p->uuid , $role->permissions->pluck('uuid')->toArray() ) ? 'checked' : '' }}>
                                                        <label class="form-check-label" for="permission_{{$p->id}}"> {{$p->title}} </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <!-- Permission table -->
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">ثبت</button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
                                انصراف
                            </button>
                        </div>
                    </form>
                    <!--/ Add role form -->
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- END EDIT ROLE -->

@endsection
@push('js')
<script src="{!! asset('libs/jquery-validation/jquery.validate.min.js') !!}"></script>

<script>

    $.validator.setDefaults( {
        submitHandler: function () {
            form.submit();
        }
    } );

    $( document ).ready( function () {
        $( "#addRoleForm" ).validate( {
            rules: {
                title: "required",
                name: "required"
            },
            messages: {
                title: "لطفا نام نقش (فارسی) را وارد نمایید",
                name: "لطفا نام نقش (انگلیسی) را وارد نمایید",
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

</script>
@endpush
