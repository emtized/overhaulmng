<div class="row g-3">
    <div class="col-sm-6">
        <label class="form-label" for="firstname">نام </label>
        <span class="link-danger">*</span>
        <input type="text" id="firstname" class="form-control text-start" name="firstname" placeholder="" dir="rtl">
    </div>
    <div class="col-sm-6">
        <label class="form-label" for="lastname">نام خانوادگی</label>
        <span class="link-danger">*</span>
        <input type="text" id="lastname" name="lastname" class="form-control text-start">
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="fathername">نام پدر</label>
        <span class="link-danger">*</span>
        <input type="text" id="fathername" name="fathername" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="nationalcode">کدملی</label>
        <span class="link-danger">*</span>
        <input type="text" id="nationalcode" name="nationalcode" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="birthcode">شماره شناسنامه</label>
        <span class="link-danger">*</span>
        <input type="text" id="birthcode" name="birthcode" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>

    <div class="col-sm-4">
        <label class="form-label" for="place">محل صدور</label>
        <span class="link-danger">*</span>
        <input type="text" id="place" name="place" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="flatpickr">تاریخ تولد</label>
        <span class="link-danger">*</span>
        <input type="text" class="form-control flatpickr-date" name="flatpickr">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="">وضعیت تاهل</label>
        <span class="link-danger">*</span>
        <select class="form-select">
            <option>مجرد</option>
            <option>متاهل</option>
        </select>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="">وضعیت نظام وظیفه</label>
        <span class="link-danger">*</span>
        <select class="form-select">
            <option>مشمول</option>
            <option>درحال خدمت</option>
            <option>پایان خدمت</option>
            <option>معافیت پزشکی</option>
            <option>معافیت غیره</option>
        </select>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="reasons">دلیل معافیت (در صورت معافیت پزشکی)</label>
        <span class="link-danger">*</span>
        <input type="text" id="reasons" name="reasons" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="moaref">نام معرف</label>
        <span class="link-danger">*</span>
        <input type="text" id="moaref" name="moaref" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="moarefnumber">شماره همراه معرف</label>
        <span class="link-danger">*</span>
        <input type="text" id="moarefnumber" name="moarefnumber" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="">زبان مادری</label>
        <div class="input-group input-group-merge">
            <input type="text" id="" class="form-control text-start">
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
        <input type="text" id="mobile1" name="mobile1" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="mobile2">تلفن همراه 2</label>
        <span class="link-danger">*</span>
        <input type="text" id="mobile2" name="mobile2" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="email">پست الکترونیک</label>
        <span class="link-danger">*</span>
        <input type="text" id="email" name="email" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <hr class="my-4 mx-n4">
    <h6 class="mb-b fw-normal">3.اطلاعات محل سکونت</h6>
    <div class="col-sm-4">
        <label class="form-label" for="">وضعیت سکونت</label>
        <span class="link-danger">*</span>
        <select class="form-select">
            <option></option>
            <option>شخصی</option>
            <option>مستاجر</option>
        </select>
    </div>
    <div class="col-sm-8">
        <label class="form-label" for="address">نشانی محل سکونت</label>
        <span class="link-danger">*</span>
        <textarea class="form-control" id="address" name="address" rows="3" placeholder="استان-شهرستان-شهر/روستا-خیابان اصلی-خیابان فرعی-پلاک"></textarea>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="postal">کدپستی</label>
        <span class="link-danger">*</span>
        <input type="text" id="postal" name="postal" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <hr class="my-4 mx-n4">
    <h6 class="mb-b fw-normal">4.اطلاعات اشتغال و بیمه</h6>
    <div class="col-sm-4">
        <label class="form-label" for="">وضعیت اشتغال</label>
        <span class="link-danger">*</span>
        <select class="form-select">
            <option>شاغل پروژه ای</option>
            <option>بازنشسته</option>
            <option>شاغل تمام وقت در بخش دولتی</option>
            <option>شاغل تمام وقت در بخش خصوصی </option>
            <option>بیکار</option>
            <option>آزاد</option>
        </select>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="">نوع اشتغال فعلی</label>
        <span class="link-danger">*</span>
        <select class="form-select">
            <option>دولتی</option>
            <option>خصوصی</option>
            <option>آزاد</option>
        </select>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="work">نام محل اشتغال فعلی</label>
        <span class="link-danger">*</span>
        <input type="text" id="work" name="work" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="">وضعیت بیمه تامین اجتماعی</label>
        <span class="link-danger">*</span>
        <select class="form-select">
            <option>سابقه بیمه تامین اجتماعی دارم</option>
            <option>سابقه بیمه تامین اجتماعی ندارم</option>
        </select>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="insurance">شماره بیمه تامین اجتماعی</label>
        <span class="link-danger">*</span>
        <input type="text" id="insurance" name="insurance" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>

    <div class="col-sm-4">
        <label class="form-label" for="">روش دسترسی به سامانه</label>
        <span class="link-danger">*</span>
        <select class="form-select"  multiple id="accessMethodsSelect">
            <option>اپلیکیشن تلفن همراه</option>
            <option>پیام کوتاه</option>
            <option>کافی نت</option>
            <option>تلفن همراه فرزندان</option>
        </select>
    </div>

    <div class="col-sm-3">
        <label class="form-label" for="hight">قد</label>
        <span class="link-danger">*</span>
        <input type="text" id="hight" name="hight" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <div class="col-sm-3">
        <label class="form-label" for="weight">وزن</label>
        <span class="link-danger">*</span>
        <input type="text" id="weight" name="weight" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
    <div class="col-sm-3">
        <label class="form-label" for="">سایز کفش</label>
        <span class="link-danger">*</span>
        <select class="form-select">
            <option>36</option>
            <option>38</option>
            <option>40</option>
            <option>41</option>
            <option>42</option>
            <option>43</option>
            <option>44</option>
            <option>45</option>
            <option>46</option>
            <option>47</option>
            <option>48</option>
            <option>49</option>
            <option>50</option>
            <option>51</option>
            <option>52</option>
            <option>53</option>
        </select>
    </div>
    <div class="col-sm-3">
        <label class="form-label" for="">سایز لباس</label>
        <span class="link-danger">*</span>
        <select class="form-select">
            <option>S</option>
            <option>M</option>
            <option>L</option>
            <option>XL</option>
            <option>XXL</option>
            <option>3XL</option>
            <option>4XL</option>
            <option>5XL</option>
            <option>6XL</option>
        </select>
    </div>
    <hr class="my-4 mx-n4">
    <h6 class="mb-b fw-normal">5.اطلاعات تحصیلی</h6>
    <div class="col-sm-4">
        <label class="form-label" for="">آخرین مدرک تحصیلی</label>
        <span class="link-danger">*</span>
        <select class="form-select">
            <option>بی سواد</option>
            <option>ابتدایی</option>
            <option>سیکل</option>
            <option>دیپلم</option>
            <option>فوق دیپلم</option>
            <option>لیسانس</option>
            <option>فوق لیسانس</option>
            <option>دکترا</option>
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
        <select class="form-select">
            <option>بهره برداری</option>
            <option>ایمنی</option>
            <option>تعمیرات</option>
            <option>بازرسی</option>
            <option>برنامه ریزی</option>
        </select>
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="field">عنوان تخصص</label>
        <span class="link-danger">*</span>
        <input type="text" id="dev" name="dev" class="form-control text-start">
        <div class="input-group input-group-merge">
        </div>
    </div>
</div>

