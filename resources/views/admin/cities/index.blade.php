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
                    <th>نام شهر</th>
                    <th>عملیات</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($cities as $key => $city)
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
                            <span class="emp_name text-truncate">{{$city->city_name}}</span>
                        </td>
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
                                        <form class="d-inline" action="{{ route('admin.city.delete',$city->id)}}" method="post">
                                            @csrf
                                            {{ method_field('delete') }}
                                        <button class="dropdown-item text-danger delete-record delete" type="submit"> حذف</button>
                                    </form>

                                    </li>
                                </ul>
                            </div>
                            <a href="{{route('admin.city.edit',$city->id)}}" class="btn btn-sm btn-icon item-edit"><i class="bx bxs-edit"></i></a>
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
            <h5 class="offcanvas-title" id="exampleModalLabel">ایجاد شهر جدید</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body flex-grow-1">
            <form action="{{route('admin.city.store')}}" method="post" class="add-new-record pt-0 row g-2" id="form-add-new-record">
                @csrf
                <div class="col-sm-12">
                    <label class="form-label" for="city_name">نام </label>
                    <div class="input-group input-group-merge">
                        <span id="basicFullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                        <input type="text" id="city_name" class="form-control dt-full-name dt-salary dt-post dt-date dt-email"  name="city_name" placeholder="نام شهر" aria-label="John Doe" aria-describedby="basicFullname2" value="{{old('city_name')}}">
                    </div>
                    @error('city_name')
                    <strong class="text-danger">
                        {{ $message }}
                    </strong>
                    @enderror
                </div>

                <div class="col-sm-12">
                    <label class="form-label" for="selectProvince">استان</label>
                    <select class="form-select" name="parent_id" id="selectProvince">
                        <option value="">استان</option>
                        @foreach ($province as $p)
                        <option value="{{$p->id}}">{{ $p->city_name}}</option>
                        @endforeach
                    </select>
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
    <script src="{!! asset('libs/jquery-validation/jquery.validate.min.js') !!}"></script>

    <script>

		$.validator.setDefaults( {
			submitHandler: function () {
				form.submit();
			}
		} );

		$( document ).ready( function () {
			$( "#form-add-new-record" ).validate( {
				rules: {
					city_name: "required",
				},
				messages: {
					city_name: "لطفا نام شهر را وارد کنید",
				},
				errorPlacement: function ( error, element ) {
					error.addClass( "ui red pointing label transition" );
					error.insertAfter( element.parent() );
				},
				highlight: function ( element, errorClass, validClass ) {
					$( element ).parents( ".row" ).addClass( errorClass );
				},
				unhighlight: function (element, errorClass, validClass) {
					$( element ).parents( ".row" ).removeClass( errorClass );
				}
			} );
		} );

    </script>


    @include('alert.sweetalert.delete-confirm', ['className' => 'delete'])
@endpush
