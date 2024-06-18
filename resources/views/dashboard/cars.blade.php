@extends('dashboard.template.app')
@section('content')
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
    <!--begin::Post-->
    <div class="content flex-row-fluid" id="kt_content">
        <!--begin::Row-->
        <div class="row g-2 g-lg-10">
            <div class="col-12 mb-5 mb-lg-10">
                <!--begin::Table Widget 6-->
                <div class="card h-xl-100">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-2">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold fs-3 mb-1">لیست ماشین‌آلات</span>
                        </h3>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body py-0">
                        <style>
                            .card.h-xl-100 {
                                background: none !important;
                                padding: 0 !important;
                                box-shadow: none !important;
                            }

                            .card.h-xl-100 > div {
                                padding: 0 !important;
                            }
                        </style>
                        <div class="w-100">
                            <input type="text" class="form-control w-300px" placeholder="جستجوی هر اطلاعاتی از ماشین‌ها" oninput="filterCars(this.value)">
                        </div>
                        <div class="row mt-5">
                            @foreach($cars as $car)
                                <div class="col-md-3 mb-10 cars-items">
                                    <div class="card bordered">
                                        <img src="resized/{{$car['car_pic']}}" class="card-img-top"  style="height: 200px !important;object-fit: cover">
                                        <div class="card-body px-5 d-flex justify-content-between align-items-center">
                                            <a href="/car_profile?id=145">
                                                <h4 class="card-title p-0 m-0">{{$car_type[$car['cat_id']]['name']}}</h4>
                                                <p class="card-text p-0 m-0">{{$car_type[$car['subcat_id']]['name']}}</p>
                                            </a>
                                            <div class="card-toolbar">
                                                <div>
                                                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                        <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                                    </button>
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-3" data-kt-menu="true" style="">
                                                        <div class="menu-item px-3 d-none">
                                                            <a onclick="changeProject('2','145');" class="menu-link px-3">
                                                                نقل و انتقال
                                                            </a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                تعمیرات
                                                            </a>
                                                        </div>
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                                            <a class="menu-link px-3">
                                                                <span class="menu-title">اعتبارات</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-3">
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        بیمه شخص ثالث
                                                                    </a>
                                                                </div>
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        بیمه بدنه
                                                                    </a>
                                                                </div>
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        معاینه فنی
                                                                    </a>
                                                                </div>
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        عوارض و مالیات
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                فروش و واگذاری
                                                            </a>
                                                        </div>
                                                        <div class="menu-item px-3">
                                                            <a href="/edit-car?id=145" class="menu-link px-3">
                                                                ویرایش اطلاعات ماشین
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <ul class="list-group list-group-flush px-0 mb-2 bg-transparent">
                                            <li class="list-group-item d-flex justify-content-between">
                                                <small>پلاک ماشین</small>
                                                <h5 class="py-0 my-0">{{$car['licensePlateNumber']}}</h5>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between">
                                                <small>کد</small>
                                                <h5 class="py-0 my-0" style="font-family: Tahoma">{{$car['deviceCode']}}</h5>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between">
                                                <small>شرکت مالک</small>
                                                <h5 class="py-0 my-0">@if(isset($company[$car['company_id']])){{$company[$car['company_id']]['name']}} @endif</h5>
                                            </li>
                                            <li class="list-group-item d-flex justify-content-between">
                                                <small>پروژه بهره‌برداری</small>
                                                <h5 class="py-0 my-0">@if(isset($project[$car['project_id']])){{$project[$car['project_id']]['name']}}@endif</h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            @endforeach
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
