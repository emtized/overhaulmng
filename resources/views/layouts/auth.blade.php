@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="{!! asset('css/pages/page-auth.css') !!}">
@endpush
@section('content')
    <!-- Content -->

    <div class="authentication-wrapper authentication-cover">
        <div class="authentication-inner row m-0">
            <!-- /Left Text -->
            <div class="d-none d-lg-flex col-lg-7 col-xl-8 align-items-center">
                <div class="flex-row text-center mx-auto">
                </div>
            </div>
            <!-- /Left Text -->

            <!-- Login -->
            <div class="d-flex col-12 col-lg-5 col-xl-4 align-items-center authentication-bg p-sm-5 p-4">
                <div class="w-px-400 mx-auto">
                    <!-- Logo -->
                    <div class="app-brand mb-4">
                        <a href="" class="app-brand-link gap-2 mb-2">
                <span class="app-brand-logo">
                    <img src="{!! asset('img/logo/logo.png') !!}" style="width: 200px;height: auto">
                </span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-3 secondary-font">به سامانه اورهال خوش آمدید!</h4>
                    <p class="mb-4">لطفا با استفاده از نام کاربری و رمزعبور خود وارد شوید!</p>

                    <form id="formAuthentication" class="mb-3" action="{{ route('user.login.form')}}" method="POST">
                        @csrf
                        <div class="mb-0">
                            <label for="email" class="form-label">ایمیل یا نام کاربری</label>
                            <input type="text" class="form-control text-start" id="email" name="email" value="{{old('email')}}" placeholder="ایمیل یا نام کاربری خود را وارد کنید" autofocus dir="ltr">
                            @error('email')
                                <strong class="text-danger">
                                    {{ $message }}
                                </strong>
                            @enderror
                            @include('alert.alert-section.error')
                        </div>
                        <div class="my-3 form-password-toggle">
                            <div class="d-flex justify-content-between">
                                <label class="form-label" for="password">رمز عبور</label>
                                <a href="#">
                                    <small>رمز عبور را فراموش کردید؟</small>
                                </a>
                            </div>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="form-control text-start" name="password" placeholder="············" aria-describedby="password" dir="ltr">
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                            @error('password')
                            <strong class="text-danger">
                                {{ $message }}
                            </strong>
                            @enderror
                            @include('alert.alert-section.error')
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember-me">
                                <label class="form-check-label" for="remember-me"> به خاطر سپاری </label>
                            </div>
                        </div>
                        <button class="btn btn-primary d-grid w-100">ورود</button>
                    </form>

                    <p class="text-center">
                        <span>کاربر جدید هستید؟</span>
                        <a href="{{route('user.register.get')}}">
                            <span>یک حساب بسازید</span>
                        </a>
                    </p>
                </div>
            </div>
            <!-- /Login -->
        </div>
    </div>

    <!-- / Content -->
@endsection
@push('js')
<script src="{!! asset('libs/jquery-validation/jquery.validate.min.js') !!}"></script>
  <script>
                //valiadte
                $( document ).ready( function () {
                $( "#formAuthentication" ).validate( {
                    rules: {
                         email: {
                            required: true,
                            email: true
                        },
                        password:'required'
                    },
                    messages: {
                        email: {
                            required: "وارد کردن ایمیل  یا نام کاربری الزامی است",
                            email: "لطفاً یک ایمیل معتبر وارد کنید"
                        },
                        password : 'وارد کردن رمز عبور الزامی است'
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

            //validate handler form
            $.validator.setDefaults({
                 submitHandler: function (form) {
                    form.submit();
                 },
             });
  </script>
@endpush
