@extends('admin.layouts.app')
@push('css')
    <link rel="stylesheet" href="{!! asset('libs/select2/select2.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/bootstrap-select/bootstrap-select.css') !!}">

    <link rel="stylesheet" href="{!! asset('libs/quill/typography.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/quill/katex.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/quill/editor-fa.css') !!}">
@endpush
@section('content')
    @include('admin.layouts.bread_crumb')
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <div class="card-body">
                <form action="" method="post" id="">

                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label class="form-label" for="">نام </label>
                            <input type="text" id="" class="form-control text-start" name="" placeholder="" dir="rtl" value="">
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="lastname">نام نمایشی</label>
                            <input type="text" id="lastname" name="last_name" class="form-control text-start">
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label" for="email">تاریخ انتشار</label>
                            <input type="text" id="email" name="email" class="form-control text-start">
                            <div class="input-group input-group-merge">
                            </div>

                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="select2Primary" class="form-label">تگ نوشته</label>
                            <div class="select2-primary">
                                <select id="select2Primary" class="select2 form-select" multiple>
                                    <option value="1" selected>گزینه 1</option>
                                    <option value="2" selected>گزینه 2</option>
                                    <option value="3">گزینه 3</option>
                                    <option value="4">گزینه 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label" for="">دسته بندی</label>
                            <select class="form-select" name="">
                                <option></option>
                                <option>select </option>
                                <option>select 2</option>
                                <option>select 3</option>
                                <option>select 4</option>
                            </select>
                        </div>

                        <div class="col-sm-3">
                            <label class="form-label" for="">وضعیت نوشته</label>
                            <select class="form-select" name="">
                                <option></option>
                                <option>پیش نویس </option>
                                <option>منتشر شده</option>
                                <option>منتشر نشده</option>
                                <option>در انتظار انتشار</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">عکس شاخص نوشته</label>
                                <input class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                        <div class="col-12">
                            <!-- Full Editor -->

                            <h5 class="card-header heading-color">متن نوشته</h5>
                            <div class="card-body">
                                <div id="full-editor">
                                    <h6>ویرایشگر متن پرقدرت Quill</h6>
                                    <p>
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و
                                    </p>
                                </div>
                            </div>

                            <!-- /Full Editor -->
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" class="btn btn-success me-2">ذخیره</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{!! asset('libs/select2/select2.js') !!}"></script>
    <script src="{!! asset('libs/select2/i18n/fa.js') !!}"></script>
    <script src="{!! asset('libs/bootstrap-select/bootstrap-select.js') !!}"></script>
    <script src="{!! asset('libs/bootstrap-select/i18n/defaults-fa_IR.js') !!}"></script>

    <script src="{!! asset('libs/quill/katex.js') !!}"></script>
    <script src="{!! asset('libs/quill/quill.js') !!}"></script>
    <script src="{!! asset('js/forms-editors.js') !!}"></script>

@endpush
