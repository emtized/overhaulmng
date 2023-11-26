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
                            <span class="text-muted fw-light">تنظیمات حساب /</span> مدارک هویتی
                        </h4>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="card">
                                    <h5 class="card-header heading-color">کارت ملی</h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 mb-5">
                                                <img src="{!! asset('img/backgrounds/4.jpg') !!}" class="img-thumbnail  border rounded-2 bx-pull-left">
                                            </div>
                                            <div class="col-12">
                                                <div class="alert alert-primary">
                                                    <h6 class="alert-heading mb-1">در هنگام بارگزرای به نکات زیر توجه کنید</h6>
                                                    <ul>
                                                        <li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و</li>
                                                        <li>لورم ایپسوم متن ساختگی</li>
                                                        <li>لورم ایپسوم متن ساختگی با تولید سادگی </li>
                                                        <li>لورم ایپسوم متن ساختگی با تولید</li>
                                                    </ul>
                                                </div>
                                                <form id="" onsubmit="return false">
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                        <input class="form-control" type="file" id="formFile">
                                                    </div>
                                                    <button type="submit" class="btn btn-success">بروزرسانی</button>
                                                </form>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <h5 class="card-header heading-color">صفحه اول شناسنامه</h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 mb-5">
                                                <img src="{!! asset('img/backgrounds/1.jpg') !!}" class="img-thumbnail  border rounded-2 bx-pull-left">
                                            </div>
                                            <div class="col-12">
                                                <div class="alert alert-primary">
                                                    <h6 class="alert-heading mb-1">در هنگام بارگزرای به نکات زیر توجه کنید</h6>
                                                    <ul>
                                                        <li>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و</li>
                                                        <li>لورم ایپسوم متن ساختگی</li>
                                                        <li>لورم ایپسوم متن ساختگی با تولید سادگی </li>
                                                        <li>لورم ایپسوم متن ساختگی با تولید</li>
                                                    </ul>
                                                </div>
                                                <form id="" onsubmit="return false">
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                        <input class="form-control" type="file" id="formFile">
                                                    </div>
                                                    <button type="submit" class="btn btn-success">بروزرسانی</button>
                                                </form>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <h5 class="card-header heading-color">صفحه دوم شناسنامه</h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 mb-5">
                                                <img src="{!! asset('img/backgrounds/2.jpg') !!}" class="img-thumbnail  border rounded-2 bx-pull-left">
                                            </div>
                                            <div class="col-12">
                                                <form id="" onsubmit="return false">
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                        <input class="form-control" type="file" id="formFile">
                                                    </div>
                                                    <button type="submit" class="btn btn-success">بروزرسانی</button>
                                                </form>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="card">
                                    <h5 class="card-header heading-color">کارت معافیت یا پایان خدمت سربازی</h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 mb-5">
                                                <img src="{!! asset('img/backgrounds/4.jpg') !!}" class="img-thumbnail  border rounded-2 bx-pull-left">
                                            </div>
                                            <div class="col-12">
                                                <form id="" onsubmit="return false">
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                        <input class="form-control" type="file" id="formFile">
                                                    </div>
                                                    <button type="submit" class="btn btn-success">بروزرسانی</button>
                                                </form>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <h5 class="card-header heading-color">عکس 3*4</h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 mb-5">
                                                <img src="{!! asset('img/backgrounds/4.jpg') !!}" class="img-thumbnail  border rounded-2 bx-pull-left">
                                            </div>
                                            <div class="col-12">
                                                <form id="" onsubmit="return false">
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                        <input class="form-control" type="file" id="formFile">
                                                    </div>
                                                    <button type="submit" class="btn btn-success">بروزرسانی</button>
                                                </form>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <h5 class="card-header heading-color">گواهی عدم اعتیاد
                                    </h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 mb-5">
                                                <img src="{!! asset('img/backgrounds/4.jpg') !!}" class="img-thumbnail  border rounded-2 bx-pull-left">
                                            </div>
                                            <div class="col-12">
                                                <form id="" onsubmit="return false">
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                        <input class="form-control" type="file" id="formFile">
                                                    </div>
                                                    <button type="submit" class="btn btn-success">بروزرسانی</button>
                                                </form>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="card">
                                    <h5 class="card-header heading-color">گواهی عدم سوء پیشینه</h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 mb-5">
                                                <img src="{!! asset('img/backgrounds/4.jpg') !!}" class="img-thumbnail  border rounded-2 bx-pull-left">
                                            </div>
                                            <div class="col-12">
                                                <form id="" onsubmit="return false">
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                        <input class="form-control" type="file" id="formFile">
                                                    </div>
                                                    <button type="submit" class="btn btn-success">بروزرسانی</button>
                                                </form>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <h5 class="card-header heading-color">نتیجه معاینات طب صنعتی</h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 mb-5">
                                                <img src="{!! asset('img/backgrounds/4.jpg') !!}" class="img-thumbnail  border rounded-2 bx-pull-left">
                                            </div>
                                            <div class="col-12">
                                                <form id="" onsubmit="return false">
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                        <input class="form-control" type="file" id="formFile">
                                                    </div>
                                                    <button type="submit" class="btn btn-success">بروزرسانی</button>
                                                </form>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <h5 class="card-header heading-color">تاییدیه آموزش ایمنی اداره کار</h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 mb-5">
                                                <img src="{!! asset('img/backgrounds/4.jpg') !!}" class="img-thumbnail  border rounded-2 bx-pull-left">
                                            </div>
                                            <div class="col-12">
                                                <form id="" onsubmit="return false">
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                        <input class="form-control" type="file" id="formFile">
                                                    </div>
                                                    <button type="submit" class="btn btn-success">بروزرسانی</button>
                                                </form>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div class="card">
                                    <h5 class="card-header heading-color">سوابق بیمه تامین اجتماعی</h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 mb-5">
                                                <img src="{!! asset('img/backgrounds/4.jpg') !!}" class="img-thumbnail  border rounded-2 bx-pull-left">
                                            </div>
                                            <div class="col-12">
                                                <form id="" onsubmit="return false">
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                        <input class="form-control" type="file" id="formFile">
                                                    </div>
                                                    <button type="submit" class="btn btn-success">بروزرسانی</button>
                                                </form>
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <h5 class="card-header heading-color">تعهد نامه محضری( در صورتی که حساب بانکی به نام شخص نباشد)
                                    </h5>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12 mb-5">
                                                <img src="{!! asset('img/backgrounds/4.jpg') !!}" class="img-thumbnail  border rounded-2 bx-pull-left">
                                            </div>
                                            <div class="col-12">
                                                <form id="" onsubmit="return false">
                                                    <div class="mb-3">
                                                        <label for="formFile" class="form-label">لطفا مدرک موردنظر خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                        <input class="form-control" type="file" id="formFile">
                                                    </div>
                                                    <button type="submit" class="btn btn-success">بروزرسانی</button>
                                                </form>
                                            </div>

                                        </div>


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
