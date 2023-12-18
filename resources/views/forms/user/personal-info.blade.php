<div class="row g-3">
    <div class="col-sm-6">
        <label class="form-label" for="firstname">نام </label>
        <span class="link-danger">*</span>
        <input type="text" id="firstname" class="form-control text-start" name="first_name" placeholder="" dir="rtl">
    </div>

    <div class="col-sm-6">
        <label class="form-label" for="lastname">نام خانوادگی</label>
        <span class="link-danger">*</span>
        <input type="text" id="lastname" name="last_name" class="form-control text-start">
    </div>

    <div class="col-sm-12">
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
    </div>

    <div class="col-sm-4">
        <label class="form-label" for="fathername">نام پدر</label>
        <span class="link-danger">*</span>
        <input type="text" id="fathername" name="father_name" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="national_code">کدملی</label>
        <span class="link-danger">*</span>
        <input type="number" id="national_code" name="national_code" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="birth_code">شماره شناسنامه</label>
        <span class="link-danger">*</span>
        <input type="number" id="birth_code" name="birth_code" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>

    <div class="col-sm-4">
        <label class="form-label" for="place">محل صدور</label>
        <span class="link-danger">*</span>
        <input type="text" id="place" name="birth_place" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="flatpickr">تاریخ تولد</label>
        <span class="link-danger">*</span>
        <input type="text" class="form-control flatpickr-date" name="birth_day">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="">وضعیت تاهل</label>
        <span class="link-danger">*</span>
        <select class="form-select" name="marital">
            <option value="0">مجرد</option>
            <option value="1">متاهل</option>
        </select>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="">وضعیت نظام وظیفه</label>
        <span class="link-danger">*</span>
        <select class="form-select" name="status">
            <option value="1">مشمول</option>
            <option value="2">درحال خدمت</option>
            <option value="3">پایان خدمت</option>
            <option value="4">معافیت پزشکی</option>
            <option value="5">معافیت غیره</option>
        </select>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="reasons">دلیل معافیت (در صورت معافیت پزشکی)</label>
        <span class="link-danger">*</span>
        <input type="text" id="reasons" name="status_detail" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="moaref">نام و نام خانوادگی معرف</label>
        <span class="link-danger">*</span>
        <input type="text" id="moaref" name="name_identifier" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="moarefnumber">شماره همراه معرف</label>
        <span class="link-danger">*</span>
        <input type="number" id="moarefnumber" name="mobile_identifier" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="">زبان مادری</label>
        <div class="input-group input-group-merge">
            <input type="text" id="" class="form-control text-start" name="mother_lang">
        </div>
    </div>

    <hr class="my-4 mx-n4">

    <h6 class="mb-b fw-normal">2.اطلاعات تماس</h6>
    <div class="col-sm-4">
        <label class="form-label" for="phone">تلفن ثابت</label>
        <span class="link-danger">*</span>
        <input type="text" id="phone" name="phone" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="mobile1">تلفن همراه 1</label>
        <span class="link-danger">*</span>
        <input type="number" id="mobile1" name="mobile1" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="mobile2">تلفن همراه 2</label>
        <span class="link-danger">*</span>
        <input type="number" id="mobile2" name="mobile2" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="email">پست الکترونیک</label>
        <span class="link-danger">*</span>
        <input type="email" id="email" name="email" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <hr class="my-4 mx-n4">
    <h6 class="mb-b fw-normal">3.اطلاعات محل سکونت</h6>
    <div class="col-sm-4">
        <label class="form-label" for="">وضعیت سکونت</label>
        <span class="link-danger">*</span>

        <select class="form-select" name="loc_status">
            <option value="0"></option>
            <option value="1">شخصی</option>
            <option value="2">مستاجر</option>
        </select>
    </div>
    <div class="col-sm-8">
        <label class="form-label" for="address">نشانی محل سکونت</label>
        <span class="link-danger">*</span>
        <textarea class="form-control" id="address" name="body" rows="3" placeholder="استان-شهرستان-شهر/روستا-خیابان اصلی-خیابان فرعی-پلاک"></textarea>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="postal">کدپستی</label>
        <span class="link-danger">*</span>
        <input type="number" id="postal" name="postal_code" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <hr class="my-4 mx-n4">
    <h6 class="mb-b fw-normal">4.اطلاعات اشتغال و بیمه</h6>
    <div class="col-sm-4">
        <label class="form-label" for="">وضعیت اشتغال</label>
        <span class="link-danger">*</span>
        <select class="form-select" name="job_status">
            <option value="1">شاغل پروژه ای</option>
            <option value="2">بازنشسته</option>
            <option value="3">شاغل تمام وقت در بخش دولتی</option>
            <option value="4">شاغل تمام وقت در بخش خصوصی </option>
            <option value="5">بیکار</option>
            <option value="6">آزاد</option>
        </select>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="">نوع اشتغال فعلی</label>
        <span class="link-danger">*</span>
        <select class="form-select" name="job_type">
            <option value="1">دولتی</option>
            <option value="2">خصوصی</option>
            <option value="3">آزاد</option>
        </select>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="work">نام محل اشتغال فعلی</label>
        <span class="link-danger">*</span>
        <input type="text" id="work" name="job_place" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="">وضعیت بیمه تامین اجتماعی</label>
        <span class="link-danger">*</span>
        <select class="form-select" name="status_ins">
            <option value="0">سابقه بیمه تامین اجتماعی دارم</option>
            <option value="1">سابقه بیمه تامین اجتماعی ندارم</option>
        </select>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="insurance">شماره بیمه تامین اجتماعی</label>
        <span class="link-danger">*</span>
        <input type="text" id="insurance" name="number_insurance" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>

    <div class="col-sm-4">
        <label class="form-label" for="">روش دسترسی به سامانه</label>
        <span class="link-danger">*</span>
        <select class="form-select"  multiple id="accessMethodsSelect" name="access[]">
            <option value="1">اپلیکیشن تلفن همراه</option>
            <option value="2">پیام کوتاه</option>
            <option value="3">کافی نت</option>
            <option value="4">تلفن همراه فرزندان</option>
        </select>
    </div>

    <div class="col-sm-3">
        <label class="form-label" for="hight">قد</label>
        <span class="link-danger">*</span>
        <input type="number" id="hight" name="hight" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <div class="col-sm-3">
        <label class="form-label" for="weight">وزن</label>
        <span class="link-danger">*</span>
        <input type="number" id="weight" name="weight" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <div class="col-sm-3">
        <label class="form-label" for="">سایز کفش</label>
        <span class="link-danger">*</span>
        <select class="form-select" name="shoe_size">
            <option value="1">36</option>
            <option value="2">38</option>
            <option value="2">40</option>
            <option value="4">41</option>
            <option value="5">42</option>
            <option value="6">43</option>
            <option value="7">44</option>
            <option value="8">45</option>
            <option value="9">46</option>
            <option value="10">47</option>
            <option value="11">48</option>
            <option value="12">49</option>
            <option value="13">50</option>
            <option value="14">51</option>
            <option value="15">52</option>
            <option value="16">53</option>
        </select>
    </div>
    <div class="col-sm-3">
        <label class="form-label" for="">سایز لباس</label>
        <span class="link-danger">*</span>
        <select class="form-select" name="dress_size">
            <option value="1">S</option>
            <option value="2">M</option>
            <option value="3">L</option>
            <option value="4">XL</option>
            <option value="5">XXL</option>
            <option value="6">3XL</option>
            <option value="7">4XL</option>
            <option value="8">5XL</option>
            <option value="9">6XL</option>
        </select>
    </div>
    <hr class="my-4 mx-n4">
    <h6 class="mb-b fw-normal">5.اطلاعات تحصیلی</h6>
    <div class="col-sm-4">
        <label class="form-label" for="">آخرین مدرک تحصیلی</label>
        <span class="link-danger">*</span>
        <select class="form-select" name="degree">
            <option value="1">بی سواد</option>
            <option value="2">ابتدایی</option>
            <option value="3">سیکل</option>
            <option value="4">دیپلم</option>
            <option value="5">فوق دیپلم</option>
            <option value="6">لیسانس</option>
            <option value="7">فوق لیسانس</option>
            <option value="8">دکترا</option>
        </select>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="field">رشته تحصیلی</label>
        <span class="link-danger">*</span>
        <input type="text" id="field" name="field" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <hr class="my-4 mx-n4">
    <h6 class="mb-b fw-normal">6.وضعیت اشتغال</h6>
    <div class="col-sm-4">
        <label class="form-label" for="">زمینه اشتغال</label>
        <span class="link-danger">*</span>
        <select class="form-select" name="job_statuss">
            <option value="1">بهره برداری</option>
            <option value="2">ایمنی</option>
            <option value="3">تعمیرات</option>
            <option value="4">بازرسی</option>
            <option value="5">برنامه ریزی</option>
        </select>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="field">عنوان تخصص</label>
        <span class="link-danger">*</span>
        <input type="text" id="dev" name="job" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
</div>

