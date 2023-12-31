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
                    <th>نام سیستمی</th>
                    <th>نام</th>
                    <th >عملیات</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($roles as $key => $role)
                    <tr>
                        <td>
                            <input type="checkbox" class="dt-checkboxes form-check-input mt-0 align-middle"></td>
                        <td>
                            <div class="d-flex justify-content-start align-items-center user-name">
                                <div class="d-flex flex-column">
                                    <span class="emp_name text-truncate">{{ $key += 1 }}</span>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="emp_name text-truncate">{{$role->name}}</span>
                        </td>
                        <td>
                            <span class="emp_name text-truncate">{{$role->title}}</span>
                        </td>
                        <td class="d-flex align-items-center">
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
                                    {{-- <div class="dropdown-divider"></div>
                                    <li>
                                        <form class="d-inline" action="{{ route('admin.role.delete',$role->uuid)}}" method="post">
                                            @csrf
                                            {{ method_field('delete') }}
                                        <button class="dropdown-item text-danger delete-record delete" type="submit"> حذف</button>
                                    </form>

                                    </li> --}}
                                </ul>
                            </div>
                            <form class="d-inline" action="{{ route('admin.role.delete',$role->uuid)}}" method="post">
                                @csrf
                                {{ method_field('delete') }}
                            <button class="dropdown-item text-danger delete-record delete" type="submit"> <i class="bx bxs-trash"></i></button>
                        </form>
                            {{-- <a href="{{route('admin.role.edit',$role->uuid)}}" class="btn btn-sm btn-icon item-edit"><i class="bx bxs-trash"></i></a> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
@push('js')
    <script src="{!! asset('libs/datatables-bs5/datatables-bootstrap5.js') !!}"></script>
    <script src="{!! asset('libs/datatables-bs5/i18n/fa.js') !!}"></script>
    <script src="{!! asset('js/tables-datatables-basic.js') !!}"></script>
    <script src="{!! asset('libs/jquery-validation/jquery.validate.min.js') !!}"></script>

    @include('alert.sweetalert.delete-confirm', ['className' => 'delete'])

    <script>
        $(function () {
            var dt_basic_table = $('.datatables-basic'),
                dt_basic;

            // DataTable with buttons
            // --------------------------------------------------------------------

            if (dt_basic_table.length) {
                dt_basic = dt_basic_table.DataTable({
                    order: [[2, 'asc']],
                    dom: '<"card-header flex-column flex-md-row"<"head-label text-center"><"dt-action-buttons text-end primary-font pt-3 pt-md-0"B>><"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end"f>>t<"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
                    displayLength: 7,
                    lengthMenu: [7, 10, 25, 50, 75, 100],
                    buttons: [
                            {
                                text: '<i class="bx bx-plus me-sm-1"></i> <span class="d-none d-sm-inline-block">افزودن نقش جدید</span>',
                                className: 'create-new btn btn-primary ms-2',
                                action: function () {
                                    window.location.href = "{{ route('admin.role.create') }}";
                                }
                            }
                        ],
                });
                $('div.head-label').html('<h5 class="card-title mb-0">لیست نقش های سیستم</h5>');
            }

            // Add New record
            // ? Remove/Update this code as per your requirements
            var count = 101;
            // On form submit, if form is valid
            fv.on('core.form.valid', function () {
                var $new_name = $('.add-new-record .dt-full-name').val(),
                    $new_post = $('.add-new-record .dt-post').val(),
                    $new_email = $('.add-new-record .dt-email').val(),
                    $new_date = $('.add-new-record .dt-date').val(),
                    $new_salary = $('.add-new-record .dt-salary').val();

                if ($new_name != '') {
                    dt_basic.row
                        .add({
                            id: count,
                            full_name: $new_name,
                            post: $new_post,
                            email: $new_email,
                            start_date: $new_date,
                            salary: '$' + $new_salary,
                            status: 5
                        })
                        .draw();
                    count++;

                    // Hide offcanvas using javascript method
                    offCanvasEl.hide();
                }
            });

            // Delete Record
            $('.datatables-basic tbody').on('click', '.delete-record', function () {
                dt_basic.row($(this).parents('tr')).remove().draw();
            });


            // Filter form control to default size
            // ? setTimeout used for multilingual table initialization
            setTimeout(() => {
                $('.dataTables_filter .form-control').removeClass('form-control-sm');
                $('.dataTables_length .form-select').removeClass('form-select-sm');
            }, 300);
        });

    </script>
@endpush
