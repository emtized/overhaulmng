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
                            <span class="text-muted fw-light">تنظیمات حساب /</span>اطلاعات حساب بانکی
                        </h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card card-action mb-4">
                                    <div class="card-header align-items-center">
                                        <h5 class="card-action-title mb-0">اطلاعات بانکی ثبت شده</h5>
                                        <div class="card-action-element">
                                            <button class="btn btn-primary btn-sm" type="button" data-bs-toggle="modal" data-bs-target="#addNewCCModal">
                                                <i class="bx bx-plus bx-xs me-1"></i>افزودن کارت
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="added-cards">
                                            @foreach ($user->banks as $bank)
                                            <div class="cardMaster border p-3 rounded mb-3">
                                                <div class="d-flex justify-content-between flex-sm-row flex-column">
                                                    <div class="card-information">
                                                        <div class="avatar avatar-xl">
                                                            <img src="" alt="{{$bank->bank_value}}" class="rounded-circle">
                                                        </div>

                                                        <h6 class="mb-0 me-3">{{$user->first_name . ' '.$user->last_name}}</h6>
                                                        <span class="card-number">{{ $bank->account_number}}</span>
                                                    </div>
                                                    <div class="d-flex flex-column text-start text-lg-end">
                                                        <div class="d-flex order-sm-0 order-1 mt-3">
                                                            <button class="btn btn-label-primary me-3" data-bs-toggle="modal" data-bs-target="#editCCModal">
                                                                ویرایش
                                                            </button>
                                                            <button class="btn btn-label-secondary">حذف</button>
                                                        </div>
                                                        <small class="mt-sm-auto mt-2 order-sm-1 order-0">تاریخ انقضای کارت 1401/12</small>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
        </div>
    </div>
        <!-- Add New Credit Card Modal -->
        <div class="modal fade" id="addNewCCModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4 mt-0 mt-md-n2">
                            <h3 class="secondary-font">افزودن کارت جدید</h3>
                            <p>کارت جدید را برای تکمیل پرداخت اضافه کنید</p>
                        </div>
                        <form id="addNewCCForm" class="row g-3" onsubmit="return false">
                            <div class="col-12">
                                <label class="form-label w-100" for="modalAddCard">شماره کارت</label>
                                <div class="input-group input-group-merge">
                                    <input id="modalAddCard" name="modalAddCard" class="form-control credit-card-mask text-start" type="text" placeholder="1356 3215 6548 7898" aria-describedby="modalAddCard2" dir="ltr">
                                    <span class="input-group-text cursor-pointer p-1" id="modalAddCard2"><span class="card-type"></span></span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalAddCardName">نام</label>
                                <input type="text" id="modalAddCardName" class="form-control" placeholder="جان اسنو">
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label" for="modalAddCardExpiryDate">تاریخ انقضا</label>
                                <input type="text" id="modalAddCardExpiryDate" class="form-control expiry-date-mask text-start" placeholder="YY/MM" dir="ltr">
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label" for="modalAddCardCvv">کد CVV</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="modalAddCardCvv" class="form-control cvv-code-mask text-start" maxlength="4" placeholder="654" dir="ltr">
                                    <span class="input-group-text cursor-pointer" id="modalAddCardCvv2"><i class="bx bx-help-circle text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="شماره CVV کارت"></i></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="switch">
                                    <input type="checkbox" class="switch-input" checked>
                                    <span class="switch-toggle-slider">
                              <span class="switch-on">
                                <i class="bx bx-check"></i>
                              </span>
                              <span class="switch-off">
                                <i class="bx bx-x"></i>
                              </span>
                            </span>
                                    <span class="switch-label">ذخیره کارت برای پرداخت های بعدی؟</span>
                                </label>
                            </div>
                            <div class="col-12 text-center mt-4">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">ثبت</button>
                                <button type="reset" class="btn btn-label-secondary btn-reset" data-bs-dismiss="modal" aria-label="Close">
                                    انصراف
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Add New Credit Card Modal -->

        <!-- Add New Credit Card Modal -->
        <div class="modal fade" id="editCCModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-simple modal-add-new-cc">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4 mt-0 mt-md-n2">
                            <h3 class="secondary-font">ویرایش کارت</h3>
                            <p>جزئیات کارت ذخیره شده خود را ویرایش کنید</p>
                        </div>
                        <form id="editCCForm" class="row g-3" onsubmit="return false">
                            <div class="col-12">
                                <label class="form-label w-100" for="modalEditCard">شماره کارت</label>
                                <div class="input-group input-group-merge">
                                    <input id="modalEditCard" name="modalEditCard" class="form-control credit-card-mask-edit text-start" type="text" placeholder="4356 3215 6548 7898" value="4356 3215 6548 7898" aria-describedby="modalEditCard2" dir="ltr">
                                    <span class="input-group-text cursor-pointer p-1" id="modalEditCard2"><span class="card-type-edit"></span></span>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label" for="modalEditName">نام</label>
                                <input type="text" id="modalEditName" class="form-control" placeholder="جان اسنو" value="جان اسنو">
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label" for="modalEditExpiryDate">تاریخ انقضا</label>
                                <input type="text" id="modalEditExpiryDate" class="form-control expiry-date-mask-edit text-start" placeholder="YY/MM" value="08/28" dir="ltr">
                            </div>
                            <div class="col-6 col-md-3">
                                <label class="form-label" for="modalEditCvv">کد CVV</label>
                                <div class="input-group input-group-merge">
                                    <input type="text" id="modalEditCvv" class="form-control cvv-code-mask-edit text-start" maxlength="4" placeholder="654" value="654" dir="ltr">
                                    <span class="input-group-text cursor-pointer" id="modalEditCvv2"><i class="bx bx-help-circle text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="شماره CVV کارت"></i></span>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="switch">
                                    <input type="checkbox" class="switch-input" checked>
                                    <span class="switch-toggle-slider">
                              <span class="switch-on">
                                <i class="bx bx-check"></i>
                              </span>
                              <span class="switch-off">
                                <i class="bx bx-x"></i>
                              </span>
                            </span>
                                    <span class="switch-label">تنظیم به عنوان کارت اصلی</span>
                                </label>
                            </div>
                            <div class="col-12 text-center mt-4">
                                <button type="submit" class="btn btn-primary me-sm-3 me-1">ثبت</button>
                                <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">
                                    انصراف
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Add New Credit Card Modal -->
@endsection
@push('js')
@endpush
