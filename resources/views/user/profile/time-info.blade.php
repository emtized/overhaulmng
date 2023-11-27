@extends('layouts.app')
@push('css')
@endpush
@section('content')
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.sidebar')
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts.top-nav-profile')
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="py-3 breadcrumb-wrapper mb-4">
                            <span class="text-muted fw-light">تنظیمات حساب /</span>زمان آماده بکار
                        </h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <h5 class="card-header heading-color">اطلاعات تاریخ آماده بکار بودن</h5>
                                    <div class="card-body">
                                        <div class="mt-4">
                                            <button type="submit" class="btn btn-primary me-2">ذخیره تغییرات</button>
                                            <button type="reset" class="btn btn-label-secondary">انصراف</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>

@endsection
@push('js')
@endpush
