@extends('layouts.app')
@push('css')<link rel="stylesheet" href="{!! asset('css/pages/page-auth.css') !!}">@endpush
@section('content')
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner py-4">
            <!-- Forgot Password -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <span class="app-brand-logo">
                    <img src="{!! asset('img/logo/logo.png') !!}" style="width: 200px;height: auto">
                </span>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-3 secondary-font">رمز عبور را فراموش کردید؟</h4>
                    <p class="mb-4">نام کاربری یا شماره همراه خود را وارد کنید و ما دستورالعمل های لازم را برای بازنشانی رمز عبور برای شما ارسال خواهیم کرد.</p>
                    <form id="formAuthentication" class="mb-3" action="{!! url('/') !!}" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">ایمیل</label>
                            <input type="text" class="form-control text-start" id="email" name="email" placeholder="نام کاربری یا شماره همراه" autofocus dir="ltr">
                        </div>
                        <button class="btn btn-primary d-grid w-100">ارسال لینک بازنشانی</button>
                    </form>
                    <div class="text-center">
                        <a href="{!! route('user.login.get') !!}" class="d-flex align-items-center justify-content-center">
                            <i class="bx bx-chevron-left scaleX-n1-rtl"></i>
                            بازگشت به ورود
                        </a>
                    </div>
                </div>
            </div>
            <!-- /Forgot Password -->
        </div>
    </div>
@endsection
