@extends('admin.layouts.app')
@push('css')
    <link rel="stylesheet" href="{!! asset('libs/select2/select2.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/bootstrap-select/bootstrap-select.css') !!}">

    <link rel="stylesheet" href="{!! asset('libs/quill/typography.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/quill/katex.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/quill/editor-fa.css') !!}">
    <link rel="stylesheet" href="{!! asset('libs/flatpickr/flatpickr.css') !!}">
@endpush
@section('content')
<nav aria-label="breadcrumb">
    <ol class="lh-1-85 breadcrumb breadcrumb-style1">
        <li class="breadcrumb-item">
            <a href="javascript:void(0);">خانه</a>
        </li>
        <li class="breadcrumb-item">
            <a href="javascript:void(0);">بلاگ</a>
        </li>
        <li class="breadcrumb-item active">ویرایش بلاگ</li>
    </ol>
</nav>
    <div class="card">
        <div class="card-datatable table-responsive pt-0">
            <div class="card-body">
                <form action="{{route('admin.blog.update',$blog->id)}}" method="post" id="submitform" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <label class="form-label" for="">نام </label>
                            <input type="text" id="" class="form-control text-start" name="title" placeholder="" dir="rtl" value="{{old('title',$blog->title)}}">
                            @error('title')
                               <strong class="text-danger">فیلد اجباری است</strong>
                            @enderror
                        </div>
                        <div class="col-sm-6">
                            <label class="form-label" for="lastname">نام نمایشی</label>
                            <input type="text" id="lastname" name="show_title" class="form-control text-start" value="{{old('show_title',$blog->show_title)}}">
                            @error('show_title')
                            <strong class="text-danger">فیلد اجباری است</strong>
                         @enderror
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label" for="email">تاریخ انتشار</label>
                            <input type="text" class="form-control flatpickr-date" name="published_at" value="{{old('published_at',verta($blog->published_at))}}">
                            @error('published_at')
                            <strong class="text-danger">فیلد اجباری است</strong>
                         @enderror
                            <div class="input-group input-group-merge">
                            </div>

                        </div>
                        <div class="col-md-6 mb-4">
                            <label for="select2Primary" class="form-label">تگ نوشته</label>
                            <div class="select2-primary">
                                <select id="select2Primary" class="select2 form-select" name="tag" multiple>
                                    <option value="1" selected>گزینه 1</option>
                                    <option value="2" selected>گزینه 2</option>
                                    <option value="3">گزینه 3</option>
                                    <option value="4">گزینه 4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <label class="form-label" for="">دسته بندی</label>
                            <select class="form-select" name="category_id">
                                <option value="0">select </option>
                                <option value="1">select 2</option>
                                <option value="2">select 3</option>
                                <option value="3">select 4</option>
                            </select>
                        </div>

                        <div class="col-sm-3">
                            <label class="form-label" for="">وضعیت نوشته</label>
                            <select class="form-select" name="status">
                                <option value="1">پیش نویس </option>
                                <option value="2">منتشر شده</option>
                                <option value="3">منتشر نشده</option>
                                <option value="4">در انتظار انتشار</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">عکس شاخص نوشته</label>
                                <input class="form-control" type="file" id="formFile" name="image">
                                @error('image')
                                <strong class="text-danger">فیلد اجباری است</strong>
                             @enderror
                            </div>
                        </div>
                        <div class="col-12">
                            <!-- Full Editor -->

                            <h5 class="card-header heading-color">متن نوشته</h5>
                            <div class="card-body">
                                <div id="full-editor">
                                    {!!old('body',$blog->body)!!}
                                </div>
                                @error('body')
                                <strong class="text-danger">فیلد اجباری است</strong>
                             @enderror
                            </div>
                            <input type="hidden" name="body" id="editor_content">

                            <!-- /Full Editor -->
                        </div>
                    </div>
                    <div class="mt-4">
                        <button type="submit" id="submitEditorContent" class="btn btn-success me-2">ذخیره</button>
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

    <script src="{!! asset('libs/jquery-validation/jquery.validate.min.js') !!}"></script>
    <script src="{!! asset('libs/moment/moment.js') !!}"></script>
    <script src="{!! asset('libs/jdate/jdate.js') !!}"></script>
    <script src="{!! asset('libs/flatpickr/flatpickr-jdate.js') !!}"></script>
    <script src="{!! asset('libs/flatpickr/l10n/fa-jdate.js') !!}"></script>

    <script src="{!! asset('libs/quill/katex.js') !!}"></script>
    <script src="{!! asset('libs/quill/quill.js') !!}"></script>
    <script src="{!! asset('js/forms-editors.js') !!}"></script>
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
    </script>

    <script>
        $(document).ready(function() {
            var quill = new Quill('#full-editor', {
                theme: 'snow'
            });

            quill.on('text-change', function(delta, oldDelta, source) {
                $('#editor_content').val(quill.root.innerHTML);
            });
        });
    </script>

    <script>

        $.validator.setDefaults( {
            submitHandler: function () {
                form.submit();
            }
        } );

        $( document ).ready( function () {
            $( "#submitform" ).validate( {
                rules: {
                    title: "required",
                    show_title: "required",
                    body: {
                        required: true,
                        minlength: 5
                    },
                },
                messages: {
                    title: "لطفا نام را وارد کنید",
                    show_title: "لطفا نام نمایشی رو وارد کنید",
                    body: {
                        required: "لطفا متن نوشته  خود را وارد کنید",
                        minlength: "تعداد کاراکتر وارده از 5 کمتر نباشد"
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

    </script>

@endpush
