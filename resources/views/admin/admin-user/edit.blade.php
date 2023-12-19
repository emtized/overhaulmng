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
                <form action="{{route('admin.user.update',$user->id)}}" method="post">
                    @csrf
                    @method('put')
                    <div class="row g-3">
                        <div class="col-sm-4">
                            <label class="form-label" for="firstname">نام </label>
                            <span class="link-danger">*</span>
                            <input type="text" id="firstname" class="form-control text-start" name="first_name" placeholder="" dir="rtl" value="{{old('first_name',$user->first_name)}}">
                            @error('first_name')
                             <strong class="text-danger">
                                {{ $message }}
                            </strong>
                            @enderror
                        </div>
                        <div class="col-sm-4">
                            <label class="form-label" for="lastname">نام خانوادگی</label>
                            <span class="link-danger">*</span>
                            <input type="text" id="lastname" name="last_name" class="form-control text-start" value="{{old('last_name',$user->last_name)}}">
                            @error('last_name')
                             <strong class="text-danger">
                                {{ $message }}
                            </strong>
                            @enderror
                        </div>
                        <div class="col-sm-4">
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
                        <div class="col-sm-6">
                            <label class="form-label" for="password">رمز عبور </label>
                            <span class="link-danger">*</span>
                            <input type="text" id="password" class="form-control text-start" name="password" placeholder="" dir="rtl" value="{{old('password',$user->password)}}">
                            @error('password')
                             <strong class="text-danger">
                                {{ $message }}
                            </strong>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="">نقش کاربری</label>
                            <span class="link-danger">*</span>

                            <select class="form-select" name="role">
                                @foreach ($roles as $role)
                                  <option value="{{$role->uuid}}" {{ in_array($role->uuid , $user->roles->pluck('uuid')->toArray()) ? 'selected' : '' }}>{{$role->title}}</option>
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

    @include('alert.sweetalert.delete-confirm', ['className' => 'delete'])
@endpush
