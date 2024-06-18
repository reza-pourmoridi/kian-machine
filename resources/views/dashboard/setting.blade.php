@extends('dashboard.template.app')
@section('content')
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Row-->
        <div class="row g-2 g-lg-10">
            <div class="col-xl-6 mb-5 mb-lg-10">
                <!--begin::Table Widget 6-->
                <div class="card h-xl-100">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-2">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">تنظیمات سیستم</span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-0">




                        <form action="" method="POST">
                            <input value="1" name="getid" style="display:none;">
                            <input type="text" name="site_name" class="form-control mt-2" value="پنل مدیریت" placeholder="نام سایت">
                            <input type="text" name="site_description" class="form-control mt-2" value="سامانه مدیریت ماشین آلات کیان" placeholder="توضیحات سایت">
                            <button type="submit" name="update" class="btn btn-primary mt-2 w-100 btn-sm">به روز رسانی</button>
                        </form>



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
