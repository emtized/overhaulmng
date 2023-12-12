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
                                        {{
                                            $user->dates
                                        }}
                                        @foreach ($user->dates as $date)
                                        <div class="row g-3 my-2" id="row">
                                            <div class="col-md-6 col-12 mb-4">
                                                <label for="" class="form-label"> اولین تاریخ شروع بکار</label>
                                                <input type="text" class="form-control start-date" name="start_date[]" id="t1" value="{{old('start_date',$date->start_date)}}">
                                            </div>

                                            <div class="col-md-6 col-12 mb-4">
                                                <label for="" class="form-label">اخرین تاریخ کاری</label>
                                                <input type="text" class="form-control end-date" name="end_date[]" id="t2" value="{{old('end_date',$date->end_date)}}">
                                            </div>

                                        </div>
                                        @endforeach
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
<script src="{!! asset('libs/moment/moment.js') !!}"></script>
<script src="{!! asset('libs/jdate/jdate.js') !!}"></script>
<script src="{!! asset('libs/flatpickr/flatpickr-jdate.js') !!}"></script>
<script src="{!! asset('libs/flatpickr/l10n/fa-jdate.js') !!}"></script>
<script>
            //set date
            function initializeFlatpickr(element) {
                if (element) {
                    flatpickr(element, {
                        minDate: "today",
                        monthSelectorType: 'static',
                        locale: 'fa',
                        altInput: true,
                        altFormat: 'Y/m/d',
                    });
                }
        }


        //get date
        initializeFlatpickr(document.querySelector('.start-date'));
        initializeFlatpickr(document.querySelector('.end-date'));
</script>
@endpush
