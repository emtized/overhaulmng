@extends('layouts.app')
@push('css')
    <link rel="stylesheet" href="{!! asset('libs/bs-stepper/bs-stepper.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/bootstrap-select/bootstrap-select.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/select2/select2.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/flatpickr/flatpickr.css') !!}">
    <style>
        .user-profile-header-banner img {
            width: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            height: 250px;
        }

        .user-profile-header {
            margin-top: -2rem;
        }
        .user-profile-header .user-profile-img {
            border: 5px solid;
            width: 120px;
        }

        .light-style .user-profile-header .user-profile-img {
            border-color: #fff;
        }

        .dark-style .user-profile-header .user-profile-img {
            border-color: #283144;
        }

        .dataTables_wrapper .card-header .dataTables_filter label {
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }

        @media (max-width: 767.98px) {
            .user-profile-header-banner img {
                height: 150px;
            }
            .user-profile-header .user-profile-img {
                width: 100px;
            }
        }
    </style>
@endpush

@section('content')
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('layouts.sidebar')
            <!-- Layout container -->
            <div class="layout-page">
                @include('layouts.top-nav-profile')
                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->

                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="py-3 breadcrumb-wrapper mb-4">
                            <span class="text-muted fw-light">تنظیمات حساب /</span> اطلاعات هویتی
                        </h4>
                        @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div>{{$error}}</div>
                        @endforeach
                        @endif
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('user.update.info',$user->id)}}" method="post" enctype="multipart/form-data" id="formsubmit">
                                    @csrf
                                    @method('PUT')
                                    <div class="card mb-4">
                                        <h5 class="card-header heading-color">اطلاعات هویتی</h5>
                                        <!-- Account -->
                                        <div class="card-body">
                                            <div class="d-flex align-items-start align-items-sm-center gap-4">
                                                <img src="{{ asset($user->image_small) }}" alt="user-avatar" class="d-block rounded" height="100" width="100" id="uploadedAvatar">
                                                <div class="button-wrapper">
                                                    <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                        <span class="d-none d-sm-block">ارسال تصویر جدید</span>
                                                        <i class="bx bx-upload d-block d-sm-none"></i>
                                                        <input type="file" id="upload" name="avatar" class="account-file-input" hidden accept="image/png, image/jpeg">
                                                    </label>
                                                    <button type="button" class="btn btn-label-secondary account-image-reset mb-4">
                                                        <i class="bx bx-reset d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">بازنشانی</span>
                                                    </button>

                                                    <p class="mb-0">فایل‌های JPG، GIF یا PNG مجاز هستند. حداکثر اندازه فایل 800KB.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr class="my-0">
                                        <div class="card-body">
                                            <div class="row g-3">
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="firstname">نام </label>
                                                    <span class="link-danger">*</span>
                                                    <input type="text" id="firstname" class="form-control text-start" name="first_name" placeholder="" dir="rtl" value="{{old('first_name',$user->first_name)}}">
                                                </div>

                                                <div class="col-sm-6">
                                                    <label class="form-label" for="lastname">نام خانوادگی</label>
                                                    <span class="link-danger">*</span>
                                                    <input type="text" id="lastname" name="last_name" class="form-control text-start" value="{{old('last_name',$user->last_name)}}">
                                                </div>

                                                {{-- <div class="col-sm-12">
                                                    <table class="table table-borderless">
                                                        <tbody>
                                                            <tr>
                                                                <td class="align-middle p-0"><small class="fw-semibold">تصویر کاربری <span class="link-danger">*</span></small></td>
                                                                <td class="p-0">
                                                                    <div class="mb-1">
                                                                        <label for="formFile" class="form-label">لطفا تصویر کاربری خودرا با فرمت (PNG,JPG) بارگذاری نمایید.</label>
                                                                        <input class="form-control" type="file" id="formFile" name="avatar">
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div> --}}

                                                <div class="col-sm-4">
                                                    <label class="form-label" for="fathername">نام پدر</label>
                                                    <span class="link-danger">*</span>
                                                    <input type="text" id="fathername" name="father_name" class="form-control text-start" value="{{old('father_name',$user->father_name)}}">
                                                    <div class="input-group input-group-merge">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="nationalcode">کدملی</label>
                                                    <span class="link-danger">*</span>
                                                    <input type="text" id="national_code" name="national_code" class="form-control text-start" value="{{old('national_code',$user->national_code)}}">
                                                    <div class="input-group input-group-merge">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="birth_code">شماره شناسنامه</label>
                                                    <span class="link-danger">*</span>
                                                    <input type="text" id="birth_code" name="birth_code" class="form-control text-start" value="{{old('birth_code',$user->birth_code)}}">
                                                    <div class="input-group input-group-merge">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <label class="form-label" for="place">استان محل صدور</label>
                                                    <span class="link-danger">*</span>
                                                    <select class="form-control" id="province" name="province_id">
                                                        @foreach($provinces as $p)
                                                            <option value="{!! $p->id !!}" @if(old('province_id', $p->id) == $user->province_id) selected @endif>{!! $p->city_name !!}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="col-sm-4">
                                                    <label class="form-label" for="place">شهر محل صدور</label>
                                                    <span class="link-danger">*</span>
                                                    <select class="form-control" id="city" name="city_id">
                                                        <option value="{{ $user->city_id }}" selected>{{ $user->city->city_name }}</option>
                                                    </select>
                                                </div>

                                                <div class="col-sm-4">
                                                    <label class="form-label" for="flatpickr">تاریخ تولد</label>
                                                    <span class="link-danger">*</span>
                                                    <input type="text" class="form-control flatpickr-date" name="birth_day" value="{{old('birth_day',verta($user->birth_day))}}">
                                                    <div class="input-group input-group-merge">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">وضعیت تاهل</label>
                                                    <span class="link-danger">*</span>
                                                    <select class="form-select" name="marital">
                                                        <option value="0" @if (old('marital', $user->marital) == 0) selected @endif>مجرد</option>
                                                        <option value="1" @if (old('marital', $user->marital) == 1) selected @endif>متاهل</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">وضعیت نظام وظیفه</label>
                                                    <span class="link-danger">*</span>
                                                    <select class="form-select" name="status">
                                                        <option value="1" @if (old('status', $user->status) == 1) selected @endif>مشمول</option>
                                                        <option value="2" @if (old('status', $user->status) == 2) selected @endif>درحال خدمت</option>
                                                        <option value="3" @if (old('status', $user->status) == 3) selected @endif>پایان خدمت</option>
                                                        <option value="4" @if (old('status', $user->status) == 4) selected @endif>معافیت پزشکی</option>
                                                        <option value="5" @if (old('status', $user->status) == 5) selected @endif>معافیت غیره</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="reasons">دلیل معافیت (در صورت معافیت پزشکی)</label>
                                                    <span class="link-danger">*</span>
                                                    <input type="text" id="reasons" name="status_detail" class="form-control text-start" value="{{old('status_detail',$user->status_detail)}}">
                                                    <div class="input-group input-group-merge">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="moaref">نام و نام خانوادگی معرف</label>
                                                    <span class="link-danger">*</span>
                                                    <input type="text" id="moaref" name="name_identifier" class="form-control text-start" value="{{old('name_identifier',$user->name_identifier)}}">
                                                    <div class="input-group input-group-merge">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="moarefnumber">شماره همراه معرف</label>
                                                    <span class="link-danger">*</span>
                                                    <input type="text" id="moarefnumber" name="mobile_identifier" class="form-control text-start" value="{{old('mobile_identifier',$user->mobile_identifier)}}">
                                                    <div class="input-group input-group-merge">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">زبان مادری</label>
                                                    <div class="input-group input-group-merge">
                                                        <input type="text" id="" class="form-control text-start" name="mother_lang" value="{{old('mother_lang',$user->mother_lang)}}">
                                                    </div>
                                                </div>

                                                <hr class="my-4 mx-n4">

                                                <h6 class="mb-b fw-normal">2.اطلاعات تماس</h6>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="phone">تلفن ثابت</label>
                                                    <span class="link-danger">*</span>
                                                    <input type="text" id="phone" name="phone" class="form-control text-start" value="{{old('mobile2',$user->contact->phone)}}">
                                                    <div class="input-group input-group-merge">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="mobile1">تلفن همراه 1</label>
                                                    <span class="link-danger">*</span>
                                                    <input type="text" id="mobile1" name="mobile1" class="form-control text-start"value="{{old('mobile2',$user->contact->mobile1)}}">
                                                    <div class="input-group input-group-merge">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="mobile2">تلفن همراه 2</label>
                                                    <span class="link-danger">*</span>
                                                    <input type="text" id="mobile2" name="mobile2" class="form-control text-start" value="{{old('mobile2',$user->contact->mobile2)}}">
                                                    <div class="input-group input-group-merge">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="email">پست الکترونیک</label>
                                                    <span class="link-danger">*</span>
                                                    <input type="text" id="email" name="email" class="form-control text-start" value="{{old('email',$user->email)}}">
                                                    <div class="input-group input-group-merge">
                                                    </div>
                                                </div>
                                                <hr class="my-4 mx-n4">
                                                <h6 class="mb-b fw-normal">3.اطلاعات محل سکونت</h6>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">وضعیت سکونت</label>
                                                    <span class="link-danger">*</span>

                                                    <select class="form-select" name="loc_status">
                                                        <option value="0" @if (old('loc_status', $user->loc->loc_status) == 0) selected @endif></option>
                                                        <option value="1" @if (old('loc_status', $user->loc->loc_status) == 1) selected @endif>شخصی</option>
                                                        <option value="2" @if (old('loc_status', $user->loc->loc_status) == 2) selected @endif>مستاجر</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-8">
                                                    <label class="form-label" for="address">نشانی محل سکونت</label>
                                                    <span class="link-danger">*</span>
                                                    <textarea class="form-control" id="address" name="body" rows="3" placeholder="استان-شهرستان-شهر/روستا-خیابان اصلی-خیابان فرعی-پلاک">{{old('body',$user->loc->body)}}</textarea>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="postal">کدپستی</label>
                                                    <span class="link-danger">*</span>
                                                    <input type="text" id="postal" name="postal_code" class="form-control text-start" value="{{old('body',$user->loc->postal_code)}}">
                                                    <div class="input-group input-group-merge">
                                                    </div>
                                                </div>
                                                <hr class="my-4 mx-n4">
                                                <h6 class="mb-b fw-normal">4.اطلاعات اشتغال و بیمه</h6>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">وضعیت اشتغال</label>
                                                    <span class="link-danger">*</span>
                                                    <select class="form-select" name="job_status">
                                                        <option value="1" @if (old('job_status', $user->insurance->job_status) == 1) selected @endif>شاغل پروژه ای</option>
                                                        <option value="2" @if (old('job_status', $user->insurance->job_status) == 2) selected @endif>بازنشسته</option>
                                                        <option value="3" @if (old('job_status', $user->insurance->job_status) == 3) selected @endif>شاغل تمام وقت در بخش دولتی</option>
                                                        <option value="4" @if (old('job_status', $user->insurance->job_status) == 4) selected @endif>شاغل تمام وقت در بخش خصوصی </option>
                                                        <option value="5" @if (old('job_status', $user->insurance->job_status) == 5) selected @endif>بیکار</option>
                                                        <option value="6" @if (old('job_status', $user->insurance->job_status) == 6) selected @endif>آزاد</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">نوع اشتغال فعلی</label>
                                                    <span class="link-danger">*</span>
                                                    <select class="form-select" name="job_type">
                                                        <option value="1" @if (old('job_type', $user->insurance->job_type) == 1) selected @endif>دولتی</option>
                                                        <option value="2" @if (old('job_type', $user->insurance->job_type) == 2) selected @endif>خصوصی</option>
                                                        <option value="3" @if (old('job_type', $user->insurance->job_type) == 3) selected @endif>آزاد</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="work">نام محل اشتغال فعلی</label>
                                                    <span class="link-danger">*</span>
                                                    <input type="text" id="work" name="job_place" class="form-control text-start" value="{{old('job_place',$user->insurance->job_place)}}">
                                                    <div class="input-group input-group-merge">
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">وضعیت بیمه تامین اجتماعی</label>
                                                    <span class="link-danger">*</span>
                                                    <select class="form-select" name="status_ins">
                                                        <option value="0" @if (old('status_ins', $user->insurance->status_ins) == 0) selected @endif>سابقه بیمه تامین اجتماعی دارم</option>
                                                        <option value="1" @if (old('status_ins', $user->insurance->status_ins) == 1) selected @endif>سابقه بیمه تامین اجتماعی ندارم</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="insurance">شماره بیمه تامین اجتماعی</label>
                                                    <span class="link-danger">*</span>
                                                    <input type="text" id="insurance" name="number_insurance" class="form-control text-start" value="{{old('job_place',$user->insurance->number_insurance)}}">
                                                    <div class="input-group input-group-merge">
                                                    </div>
                                                </div>

                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">روش دسترسی به سامانه</label>
                                                    <span class="link-danger">*</span>
                                                    <select class="form-select" multiple id="accessMethodsSelect" name="access[]">
                                                        <option value="1" @if(in_array('1', is_array(old('access', $user->insurance->access)) ? old('access', $user->insurance->access) : explode(',', old('access', $user->insurance->access)))) selected @endif>اپلیکیشن تلفن همراه</option>
                                                        <option value="2" @if(in_array('2', is_array(old('access', $user->insurance->access)) ? old('access', $user->insurance->access) : explode(',', old('access', $user->insurance->access)))) selected @endif>پیام کوتاه</option>
                                                        <option value="3" @if(in_array('3', is_array(old('access', $user->insurance->access)) ? old('access', $user->insurance->access) : explode(',', old('access', $user->insurance->access)))) selected @endif>کافی نت</option>
                                                        <option value="4" @if(in_array('4', is_array(old('access', $user->insurance->access)) ? old('access', $user->insurance->access) : explode(',', old('access', $user->insurance->access)))) selected @endif>تلفن همراه فرزندان</option>
                                                    </select>


                                                </div>

                                                <div class="col-sm-3">
                                                    <label class="form-label" for="hight">قد</label>
                                                    <span class="link-danger">*</span>
                                                    <input type="text" id="hight" name="height" class="form-control text-start"  value="{{old('height',$user->insurance->height)}}">
                                                    <div class="input-group input-group-merge" >
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="form-label" for="weight">وزن</label>
                                                    <span class="link-danger">*</span>
                                                    <input type="text" id="weight" name="weight" class="form-control text-start" value="{{old('weight',$user->insurance->weight)}}">
                                                    <div class="input-group input-group-merge">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="form-label" for="">سایز کفش</label>
                                                    <span class="link-danger">*</span>
                                                    <select class="form-select" name="shoe_size">
                                                        <option value="1" @if (old('shoe_size', $user->insurance->shoe_size) == 1) selected @endif>36</option>
                                                        <option value="2" @if (old('shoe_size', $user->insurance->shoe_size) == 2) selected @endif>38</option>
                                                        <option value="2" @if (old('shoe_size', $user->insurance->shoe_size) == 3) selected @endif>40</option>
                                                        <option value="4" @if (old('shoe_size', $user->insurance->shoe_size) == 4) selected @endif>41</option>
                                                        <option value="5" @if (old('shoe_size', $user->insurance->shoe_size) == 5) selected @endif>42</option>
                                                        <option value="6" @if (old('shoe_size', $user->insurance->shoe_size) == 6) selected @endif>43</option>
                                                        <option value="7" @if (old('shoe_size', $user->insurance->shoe_size) == 7) selected @endif>44</option>
                                                        <option value="8" @if (old('shoe_size', $user->insurance->shoe_size) == 8) selected @endif>45</option>
                                                        <option value="9" @if (old('shoe_size', $user->insurance->shoe_size) == 9) selected @endif>46</option>
                                                        <option value="10" @if (old('shoe_size', $user->insurance->shoe_size) == 10) selected @endif>47</option>
                                                        <option value="11" @if (old('shoe_size', $user->insurance->shoe_size) == 11) selected @endif>48</option>
                                                        <option value="12" @if (old('shoe_size', $user->insurance->shoe_size) == 12) selected @endif>49</option>
                                                        <option value="13" @if (old('shoe_size', $user->insurance->shoe_size) == 13) selected @endif>50</option>
                                                        <option value="14" @if (old('shoe_size', $user->insurance->shoe_size) == 14) selected @endif>51</option>
                                                        <option value="15" @if (old('shoe_size', $user->insurance->shoe_size) == 15) selected @endif>52</option>
                                                        <option value="16" @if (old('shoe_size', $user->insurance->shoe_size) == 16) selected @endif>53</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label class="form-label" for="">سایز لباس</label>
                                                    <span class="link-danger">*</span>
                                                    <select class="form-select" name="dress_size">
                                                        <option value="1" @if (old('dress_size', $user->insurance->dress_size) == 1) selected @endif>S</option>
                                                        <option value="2" @if (old('dress_size', $user->insurance->dress_size) == 2) selected @endif>M</option>
                                                        <option value="3" @if (old('dress_size', $user->insurance->dress_size) == 3) selected @endif>L</option>
                                                        <option value="4" @if (old('dress_size', $user->insurance->dress_size) == 4) selected @endif>XL</option>
                                                        <option value="5" @if (old('dress_size', $user->insurance->dress_size) == 5) selected @endif>XXL</option>
                                                        <option value="6"@if (old('dress_size', $user->insurance->dress_size) == 6) selected @endif >3XL</option>
                                                        <option value="7"@if (old('dress_size', $user->insurance->dress_size) == 7) selected @endif >4XL</option>
                                                        <option value="8"@if (old('dress_size', $user->insurance->dress_size) == 8) selected @endif >5XL</option>
                                                        <option value="9" @if (old('dress_size', $user->insurance->dress_size) == 9) selected @endif>6XL</option>
                                                    </select>
                                                </div>
                                                <hr class="my-4 mx-n4">
                                                <h6 class="mb-b fw-normal">5.اطلاعات تحصیلی</h6>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">آخرین مدرک تحصیلی</label>
                                                    <span class="link-danger">*</span>
                                                    <select class="form-select" name="degree">
                                                        <option value="1" @if (old('degree', $user->education->degree) == 1) selected @endif>بی سواد</option>
                                                        <option value="2" @if (old('degree', $user->education->degree) == 2) selected @endif>ابتدایی</option>
                                                        <option value="3" @if (old('degree', $user->education->degree) == 3) selected @endif>سیکل</option>
                                                        <option value="4" @if (old('degree', $user->education->degree) == 4) selected @endif>دیپلم</option>
                                                        <option value="5" @if (old('degree', $user->education->degree) == 5) selected @endif>فوق دیپلم</option>
                                                        <option value="6" @if (old('degree', $user->education->degree) == 6) selected @endif>لیسانس</option>
                                                        <option value="7" @if (old('degree', $user->education->degree) == 7) selected @endif>فوق لیسانس</option>
                                                        <option value="8" @if (old('degree', $user->education->degree) == 8) selected @endif>دکترا</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="field">رشته تحصیلی</label>
                                                    <span class="link-danger">*</span>
                                                    <input type="text" id="field" name="field" class="form-control text-start"  value="{{old('field',$user->education->field)}}">
                                                    <div class="input-group input-group-merge">
                                                    </div>
                                                </div>
                                                <hr class="my-4 mx-n4">
                                                <h6 class="mb-b fw-normal">6.وضعیت اشتغال</h6>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="">زمینه اشتغال</label>
                                                    <span class="link-danger">*</span>
                                                    <select class="form-select" name="job_statuss">
                                                        <option value="1" @if (old('job_statuss', $user->employ->job_statuss) == 1) selected @endif>بهره برداری</option>
                                                        <option value="2" @if (old('job_statuss', $user->employ->job_statuss) == 2) selected @endif>ایمنی</option>
                                                        <option value="3" @if (old('job_statuss', $user->employ->job_statuss) == 3) selected @endif>تعمیرات</option>
                                                        <option value="4" @if (old('job_statuss', $user->employ->job_statuss) == 4) selected @endif>بازرسی</option>
                                                        <option value="5" @if (old('job_statuss', $user->employ->job_statuss) == 5) selected @endif>برنامه ریزی</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="form-label" for="field">عنوان تخصص</label>
                                                    <span class="link-danger">*</span>
                                                    <input type="text" id="dev" name="job" class="form-control text-start" value="{{old('field',$user->employ->job)}}">
                                                    <div class="input-group input-group-merge">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="mt-4">
                                                <button type="submit" class="btn btn-primary me-2">ذخیره تغییرات</button>
                                                <button type="reset" class="btn btn-label-secondary">انصراف</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="card">
                                    <h5 class="card-header heading-color">حذف حساب</h5>
                                    <div class="card-body">
                                        <div class="mb-3 col-12 mb-0">
                                            <div class="alert alert-warning">
                                                <h6 class="alert-heading mb-1">آیا از حذف حساب خود اطمینان دارید؟</h6>
                                                <p class="mb-0">در صورتی که حساب خود را حذف کنید، بازگشتی وجود نخواهد داشت. لطفا مطمئن باشید.</p>
                                            </div>
                                        </div>
                                        <form id="formAccountDeactivation" onsubmit="return false">
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" type="checkbox" name="accountActivation" id="accountActivation">
                                                <label class="form-check-label" for="accountActivation">من غیرفعال کردن حساب خود را تایید می‌کنم</label>
                                            </div>
                                            <button type="submit" class="btn btn-danger deactivate-account">غیرفعال کردن حساب</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- / Content -->

                    <!-- Footer -->
                    <footer class="content-footer footer bg-footer-theme">
                        <div class="container-fluid d-flex flex-wrap justify-content-between py-3 flex-md-row flex-column">
                            <div class="mb-2 mb-md-0">
                            </div>
                            <div>

                                <a href="#" target="_blank" class="footer-link d-none d-sm-inline-block">پشتیبانی</a>
                            </div>
                        </div>
                    </footer>
                    <!-- / Footer -->

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
        <div class="drag-target"></div>
    </div>
    <!-- / Layout wrapper -->
@endsection
@push('js')
    <script src="{!! asset('libs/bs-stepper/bs-stepper.js') !!}"></script>
    <script src="{!! asset('libs/bootstrap-select/bootstrap-select.js') !!}"></script>
    <script src="{!! asset('libs/bootstrap-select/i18n/defaults-fa_IR.js') !!}"></script>
    <script src="{!! asset('libs/select2/select2.js') !!}"></script>
    <script src="{!! asset('libs/select2/i18n/fa.js') !!}"></script>
    <script src="{!! asset('js/form-wizard-icons.js') !!}"></script>

    <script src="{!! asset('libs/jquery-validation/jquery.validate.min.js') !!}"></script>
    <script src="{!! asset('libs/moment/moment.js') !!}"></script>
    <script src="{!! asset('libs/jdate/jdate.js') !!}"></script>
    <script src="{!! asset('libs/flatpickr/flatpickr-jdate.js') !!}"></script>
    <script src="{!! asset('libs/flatpickr/l10n/fa-jdate.js') !!}"></script>
    <script>
        const flatpickrDate = document.querySelector('.flatpickr-date');
        if (flatpickrDate) {
            flatpickrDate.flatpickr({
                monthSelectorType: 'static',
                locale: 'fa',
                altInput: true,
                altFormat: 'Y/m/d',
            });
        }

        //select2
        $(document).ready(function() {
            $('#accessMethodsSelect').select2({
                tags: true,
                tokenSeparators: [',', ' '],
            });
        });


                    //valiadte
                    $( document ).ready( function () {
                $( "#formsubmit" ).validate( {
                    rules: {
                         first_name: "required",
                         last_name: "required",
                         birth_place: "required",
                         avatar:"required",
                         status_detail:"required",
                         mobile1:"required",
                         mobile2:"required",
                         body:"required",
                         postal_code:"required",
                         job_place:"required",
                         number_insurance:"required",
                         hight:"required",
                         weight:"required",
                         birth_day:"required",
                         name_identifier:"required",
                         mobile_identifier:"required",
                         field:"required",
                         job:"required",
                         father_name: {
                             required: true,
                             minlength: 2
                         },
                         national_code: {
                             required: true,
                             minlength: 10
                         },
                         birth_code: {
                             required: true,
                         },
                    },
                    messages: {
                        field:"لطفا رشته تحصیلی خود را وارد نمایید",
                        avatar : "لطفا تصویر کاربری خود را وارد نمایید",
                        job:"عنوان تخصص را وارد نمایید",
                        mobile_identifier:"لطفا شماره معرف را وارد نمایید",
                        name_identifier:"لطفا نام و نام خانوادگی معرف را وارد کنید",
                        first_name: "لطفا نام را وارد کنید",
                        last_name: "لطفا  نام خانوادگی را وارد کنید",
                        birth_place: "لطفا محل صدور را وارد کنید",
                        birth_day:'لطفا تاریخ تولد را وارد نمایید',
                        mobile1:'لطفا تلفن همراه خود را وارد نمایید',
                        mobile2:'لطفا تلفن همراه خود را وارد نمایید',
                        email: 'لطفا پست الکترونیک خود را وارد نمایید',
                        body:'لطفا نشانی محل سکونت خود را وارد نمایید',
                        postal_code:'لطفا کد پستی خود را وارد نمایید',
                        job_place:'لطفا نام محل اشتغال فعلی خود را وارد نمایید',
                        number_insurance:" لطفا شماره بیمه تامین اجتماعی خود را وارد نمایید ",
                        hight:"لطفا قد خود را وارد نمایید",
                        weight:"لطفا وزن خود را وارد نمایید",
                        status_detail:"لطفا دلیل معافیت خود را وارد نمایید",
                        father_name: {
                            required: "لطفا نام پدر را وارد کنید",
                            minlength: "نباید از 2 کاراکتر کمتر باشد"
                        },
                        national_code: {
                            required: "لطفا کدملی را وارد کنید",
                            minlength: "کد ملی از 10 کاراکتر کمتر نباید باشد"
                        },
                        birth_code: {
                            required: "لطفا شماره شناسنامه را وارد کنید",
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

            //validate handler form
            $.validator.setDefaults({
                 submitHandler: function (form) {
                    form.submit();
                 },
             });

    </script>
   <script>
    $(document).ready(function() {
        $('#province').on('change', function() {
            var provinceId = $(this).val();

            if (provinceId) {
                loadCities(provinceId);
                $('#city').prop('disabled', false);
            } else {
                $('#city').prop('disabled', true);
            }
        });

        function loadCities(provinceId) {
            $.ajax({
                url: '/api/cities-by-province/' + provinceId,
                method: 'GET',
                success: function(data) {
                    $('#city').html('<option value="">انتخاب کنید</option>');
                    $.each(data, function(index, city) {
                        $('#city').append('<option value="' + city.id + '">' + city.city_name + '</option>');
                    });
                },
                error: function(error) {
                    console.log('Error loading cities:', error);
                }
            });
        }
    });
</script>

@endpush
