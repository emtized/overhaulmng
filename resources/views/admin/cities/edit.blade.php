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
                <form action="{{route('admin.city.update',$city->id)}}" method="post" id="formsubmit">
                    @csrf
                    @method('put')
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label class="form-label" for="firstname">نام شهر </label>
                            <input type="text" id="firstname" class="form-control text-start" name="city_name" placeholder="" dir="rtl" value="{{old('city_name',$city->city_name)}}">
                            @error('city_name')
                             <strong class="text-danger">
                                {{ $message }}
                            </strong>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="">استان</label>
                            <select class="form-select" name="parent_id">
                                @foreach ($province as $p)
                                  <option value="{{$p->id}}" @if(old('parent_id', $city->parent_id) == $p->id) selected @endif>{{$p->city_name}}</option>
                                @endforeach
                            </select>
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
					city_name: "required",
				},
				messages: {
					city_name: "لطفا نام را وارد کنید",
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
