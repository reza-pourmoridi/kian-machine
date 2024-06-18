@extends('dashboard.template.app')
@section('content')

            <div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
                <!--begin::Post-->
                <div class="content flex-row-fluid" id="kt_content">
                    <!--begin::Row-->
                    <div class="row g-2 g-lg-10">
                        <div class="col-xl-12 mb-5 mb-lg-10">
                            <!--begin::Table Widget 6-->
                            <div class="card h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header border-0 pt-2">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold fs-3 mb-1">پروفایل</span>
                                    </h3>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body py-0">





                                    <div class="row mt-3">

                                        <div class="col-sm-6">
                                            <div class="m-3">تغییر اطلاعات پروفایل</div>
                                            <hr>
                                            <form action="" method="POST">
                                                <input class="form-control mb-2" name="name" value="احسان آهنین" placeholder="نام و نام خانوادگی">
                                                <input class="form-control mb-2" name="phone_number" value="09194229529" placeholder="شماره تماس">
                                                <input class="form-control mb-2" name="adress" value="" placeholder="آدرس">
                                                <button type="submit" name="update" class="btn btn-primary w-100">به روز رسانی</button>
                                            </form>
                                        </div>


                                        <div class="col-sm-6">
                                            <div class="m-3">تغییر کلمه عبور</div>
                                            <hr>
                                            <form action="" method="POST">
                                                <input class="form-control mb-2" name="static_password" placeholder="پسورد جدید خود را وارد نمایید">
                                                <button type="submit" name="update_password" class="btn btn-primary w-100">به روز رسانی کلمه عبور</button>
                                            </form>
                                        </div>

                                    </div>



                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::جداول Widget 6-->
                        </div>
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Post-->
            </div>
@endsection
