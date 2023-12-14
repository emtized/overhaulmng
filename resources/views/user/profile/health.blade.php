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
                            <span class="text-muted fw-light">تنظیمات حساب /</span>سلامت جسمانی
                        </h4>
                        <form action="{{route('user.update.health',$user->physical->id)}}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card mb-4">
                                        <h5 class="card-header heading-color">اطلاعات سلامت جسمانی</h5>
                                        <div class="card-body">
                                            <div class="row g-3">
                                                <div class="col-sm-3">
                                                    <label class="form-label" for="">1. آیا سابقه بیماری دارید</label>
                                                    <select class="form-select" name="disease" id="s1">
                                                        <option value="0" @if (old('disease', $user->physical->disease) == 0) selected @endif>خیر</option>
                                                        <option value="1" @if (old('disease', $user->physical->disease) == 1) selected @endif>بله</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="">لطفا ذکر نمایید</label>
                                                    <input type="text" id="a1" class="form-control text-start" name="disease_detail" value="{{old('disease_detail',$user->physical->disease_detail)}}">
                                                </div>
                                                <div class="col-sm-3"></div>

                                                <div class="col-sm-3">
                                                    <label class="form-label" for="">2. در صورت ابتلا به بیماری، آیا علایم شما در محیط کار تغییر می کند?</label>
                                                    <select class="form-select" name="first_disease" id="s2">
                                                        <option value="0" @if (old('first_disease', $user->physical->first_disease) == 0) selected @endif>خیر</option>
                                                        <option value="1" @if (old('first_disease', $user->physical->first_disease) == 1) selected @endif>بله</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="">لطفا ذکر نمایید</label>
                                                    <input type="text" id="a2" class="form-control text-start" name="first_disease_detail" value="{{old('first_disease_detail',$user->physical->first_disease_detail)}}">
                                                </div>
                                                <div class="col-sm-3"></div>

                                                <div class="col-sm-3">
                                                    <label class="form-label" for="">3. آیا به غذا، دارو یا ماده خاصی حساسیت دارید؟</label>
                                                    <select class="form-select" name="drug" id="s3">
                                                        <option value="0" @if (old('drug', $user->physical->drug) == 0) selected @endif>خیر</option>
                                                        <option value="1" @if (old('drug', $user->physical->drug) == 1) selected @endif>بله</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="">لطفا ذکر نمایید</label>
                                                    <input type="text" id="a3" class="form-control text-start" name="drug_detail" value="{{old('drug_detail',$user->physical->drug_detail)}}">
                                                </div>
                                                <div class="col-sm-3"></div>

                                                <div class="col-sm-3">
                                                    <label class="form-label" for="">4. آیا سابقه بستری در بیمارستان دارید؟</label>
                                                    <select class="form-select" name="hospital" id="s4">
                                                        <option value="0" @if (old('hospital', $user->physical->hospital) == 0) selected @endif>خیر</option>
                                                        <option value="1" @if (old('hospital', $user->physical->hospital) == 1) selected @endif>بله</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="">لطفا ذکر نمایید</label>
                                                    <input type="text" id="a4" class="form-control text-start" name="hospital_detail" value="{{old('hospital_detail',$user->physical->hospital_detail)}}">
                                                </div>
                                                <div class="col-sm-3"></div>


                                                <div class="col-sm-3">
                                                    <label class="form-label" for="">5.  آیا سابقه عمل جراحی دارید؟</label>
                                                    <select class="form-select" name="surgery" id="s5">
                                                        <option value="0" @if (old('surgery', $user->physical->surgery) == 0) selected @endif>خیر</option>
                                                        <option value="1" @if (old('surgery', $user->physical->surgery) == 1) selected @endif>بله</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="">دلیل و تاریخ جراحی</label>
                                                    <input type="text" id="a5" class="form-control text-start" name="surgery_detail" value="{{old('surgery_detail',$user->physical->surgery_detail)}}">
                                                </div>
                                                <div class="col-sm-3"></div>

                                                <div class="col-sm-3">
                                                    <label class="form-label" for="">6. آیا داروی خاصی مصرف می کنید؟ </label>
                                                    <select class="form-select" name="specific_drug" id="s6">
                                                        <option value="0" @if (old('specific_drug', $user->physical->specific_drug) == 0) selected @endif>خیر</option>
                                                        <option value="1" @if (old('specific_drug', $user->physical->specific_drug) == 1) selected @endif>بله</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="">لطفا ذکر نمایید</label>
                                                    <input type="text" id="a6" class="form-control text-start" name="specific_drug_detail" value="{{old('specific_drug_detail',$user->physical->specific_drug_detail)}}">
                                                </div>
                                                <div class="col-sm-3"></div>

                                                <div class="col-sm-3">
                                                    <label class="form-label" for="">7. آیا اکنون سیگار می کشید؟ </label>
                                                    <select class="form-select" name="smok" id="s7">
                                                        <option value="0" @if (old('smok', $user->physical->smok) == 0) selected @endif>خیر</option>
                                                        <option value="1" @if (old('smok', $user->physical->smok) == 1) selected @endif>بله</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="">تعداد نخ روزانه؟ مدت استعمال؟</label>
                                                    <input type="text" id="a7" class="form-control text-start" name="smok_detail" value="{{old('smok_detail',$user->physical->smok_detail)}}">
                                                </div>
                                                <div class="col-sm-3"></div>

                                                <div class="col-sm-3">
                                                    <label class="form-label" for="">8. آیا سابقه قبلی مصرف سیگار دارید؟</label>
                                                    <select class="form-select" name="smok_past" id="s8">
                                                        <option value="0" @if (old('smok_past', $user->physical->smok_past) == 0) selected @endif>خیر</option>
                                                        <option value="1" @if (old('smok_past', $user->physical->smok_past) == 1) selected @endif>بله</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="">تعداد نخ روزانه؟ مدت استعمال؟</label>
                                                    <input type="text" id="a8" class="form-control text-start" name="smok_past_detail" value="{{old('smok_past_detail',$user->physical->smok_past_detail)}}">
                                                </div>
                                                <div class="col-sm-3"></div>

                                                <div class="col-sm-3">
                                                    <label class="form-label" for="">9.آیا در اوقات فراغت ورزش خاصی انجام می دهید؟  </label>
                                                    <select class="form-select" name="sport" id="s9">
                                                        <option value="0" @if (old('sport', $user->physical->sport) == 0) selected @endif>خیر</option>
                                                        <option value="1" @if (old('sport', $user->physical->sport) == 1) selected @endif>بله</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="">نام ببرید</label>
                                                    <input type="text" id="a9" class="form-control text-start" name="sport_detail" value="{{old('sport_detail',$user->physical->sport_detail)}}">
                                                </div>
                                                <div class="col-sm-3"></div>

                                                <div class="col-sm-3">
                                                    <label class="form-label" for=""> 10. آیا تاکنون دچار حادثه شغلی شده اید؟</label>
                                                    <select class="form-select" name="work" id="s10">
                                                        <option value="0" @if (old('work', $user->physical->work) == 0) selected @endif>خیر</option>
                                                        <option value="1" @if (old('work', $user->physical->work) == 1) selected @endif>بله</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for="">نوع آسیب؟ علت؟</label>
                                                    <input type="text" id="a10" class="form-control text-start" name="work_detail" value="{{old('work_detail',$user->physical->work_detail)}}">
                                                </div>
                                                <div class="col-sm-3"></div>

                                                <div class="col-sm-3">
                                                    <label class="form-label" for="">11. آیا سابقه استفاده از استعلاجی برای مدت بیش از 3 روز دارید؟</label>
                                                    <select class="form-select" name="Leave" id="s11">
                                                        <option value="0" @if (old('Leave', $user->physical->Leave) == 0) selected @endif>خیر</option>
                                                        <option value="1" @if (old('Leave', $user->physical->Leave) == 1) selected @endif>بله</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">

                                                </div>
                                                <div class="col-sm-3"></div>

                                                <div class="col-sm-3">
                                                    <label class="form-label" for=""> 12.آیا سابقه معرفی به کمیسیون پزشکی دارید؟</label>
                                                    <select class="form-select" name="Commission" id="s12">
                                                        <option value="0" @if (old('Commission', $user->physical->Commission) == 0) selected @endif>خیر</option>
                                                        <option value="1" @if (old('Commission', $user->physical->Commission) == 1) selected @endif>بله</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label class="form-label" for=""> علت؟</label>
                                                    <input type="text" id="a11" class="form-control text-start" name="Commission_detail" value="{{old('Commission_detail',$user->physical->Commission_detail)}}">
                                                </div>
                                                <div class="col-sm-3"></div>
                                            </div>

                                            <div class="mt-4">
                                                <button type="submit" class="btn btn-primary me-2">ذخیره تغییرات</button>
                                                <button type="reset" class="btn btn-label-secondary">انصراف</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('js')
@endpush
