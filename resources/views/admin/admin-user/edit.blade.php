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
            <div class="card-body">
                <form action="{{route('admin.user.update',$user->id)}}" method="post" id="formsubmit">
                    @csrf
                    @method('put')
                    <div class="row g-3">
                        <div class="col-sm-3">
                            <label class="form-label" for="firstname">نام </label>
                            <span class="link-danger">*</span>
                            <input type="text" id="firstname" class="form-control text-start" name="first_name" placeholder="" dir="rtl" value="{{old('first_name',$user->first_name)}}">
                            @error('first_name')
                             <strong class="text-danger">
                                {{ $message }}
                            </strong>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label" for="lastname">نام خانوادگی</label>
                            <span class="link-danger">*</span>
                            <input type="text" id="lastname" name="last_name" class="form-control text-start" value="{{old('last_name',$user->last_name)}}">
                            @error('last_name')
                             <strong class="text-danger">
                                {{ $message }}
                            </strong>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label" for="email">پست الکترونیک</label>
                            <span class="link-danger">*</span>
                            <input type="text" id="email" name="email" class="form-control text-start" value="{{old('email',$user->email)}}">
                            <div class="input-group input-group-merge">
                            </div>
                            @error('email')
                            <strong class="text-danger">
                                {{ $message }}
                            </strong>
                            @enderror
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label" for="">نقش کاربری</label>
                            <span class="link-danger">*</span>

                            <select class="form-select" name="role">
                                @foreach ($roles as $role)
                                  <option value="{{$role->uuid}}" {{ in_array($role->uuid , $user->roles->pluck('uuid')->toArray()) ? 'selected' : '' }}>{{$role->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-sm-6">
                            <label class="form-label" for="password">رمز عبور </label>
                            <input type="password" id="password" class="form-control text-start" name="password" placeholder="" dir="rtl" value="{{old('password')}}">
                            @error('password')
                             <strong class="text-danger">
                                {{ $message }}
                            </strong>
                            @enderror
                        </div>

                        <div class="col-sm-6">
                            <label class="form-label" for="password_confirmation">تاییدیه رمز عبور</label>
                            <input type="password" id="password_confirmation" class="form-control text-start" name="password_confirmation" placeholder="" dir="rtl" value="{{ old('password_confirmation') }}">
                            @error('password_confirmation')
                            <strong class="text-danger">
                                {{ $message }}
                            </strong>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary me-2">ذخیره تغییرات</button>
                    </div>
                </form>
          </div>
        </div>
    </div>
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
			$( "#formsubmit" ).validate( {
				rules: {
					first_name: "required",
					last_name: "required",
					father_name: {
						required: true,
						minlength: 2
					},
					email: {
						required: true,
						email: true
					},
				},
				messages: {
					first_name: "لطفا نام را وارد کنید",
					last_name: "لطفا نام خانوادگی رو وارد کنید",
					father_name: {
						required: "لطفا نام پدر را وارد کنید",
						minlength: "تعداد کاراکتر از 2 کمتر نباشد"
					},
					email: {
                        required: 'لطفا ایمیل خود را وارد کنید',
						email: 'لطفا  ایمیل معتبر وارد کنید'
                    },
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

    @include('alert.sweetalert.delete-confirm', ['className' => 'delete'])
@endpush
