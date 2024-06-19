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
                                <span class="card-label fw-bold fs-3 mb-1"></span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-0">
                            <style>
                                .card-header {
                                    display: none !important;
                                }

                                .card.h-xl-100 {
                                    background: none !important;
                                    padding: 0 !important;
                                    box-shadow: none !important;
                                }

                                .card.h-xl-100 > div {
                                    padding: 0 !important;
                                }
                            </style>
                            <div class="d-flex flex-stack flex-wrap mb-7">
                                <div class="page-title d-flex flex-column align-items-start me-3 py-2 py-lg-0 gap-2">
                                    <h1 class="d-flex text-dark fw-bold m-0 fs-3">مدیریت ماشین‌آلات</h1>
                                    <ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7">
                                        <li class="breadcrumb-item text-gray-600">
                                            <a href="/" class="text-gray-600 text-hover-primary">خانه</a>
                                        </li>
                                        <li class="breadcrumb-item text-gray-600">
                                            <a href="/cars?company=1" class="text-gray-600 text-hover-primary">ماشین‌آلات پروژه کیهان راه شرق</a>
                                        </li>
                                        <li class="breadcrumb-item text-gray-600">پروفایل ماشین‌ و راننده</li>
                                    </ul>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <button type="button" class="btn btn-sm btn-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
                                            عملیات
                                        </button>
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-3" data-kt-menu="true" style="">
                                            <div class="menu-item px-3">
                                                <a onclick="changeProject2('{{$driver['company_id']}}','{{$car['id']}}');" class="menu-link px-3">
                                                    انتقال به پروژه دیگر
                                                </a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="/new-repair?car_id=14" class="menu-link px-3">
                                                    ثبت تعمیر جدید
                                                </a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="/new-bimeh?car_id=14" class="menu-link px-3">
                                                    ثبت بیمه جدید
                                                </a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="/new-fani?car_id=14" class="menu-link px-3">
                                                    ثبت گواهی فنی جدید
                                                </a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="/new-khalafi?car_id=14" class="menu-link px-3">
                                                    ثبت خلافی جدید
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card profile-main">
                                <div class="card-body pb-0">
                                    <div class="d-flex flex-wrap flex-sm-nowrap">
                                        <div class="me-7 mb-4">
                                            <a class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative" href="{{ asset('resized/'.$car['car_pic']) }}" target="_blank">
                                                <img src="{{ asset('resized/'.$car['car_pic']) }}" style="height: 156px !important;object-fit: cover">
                                            </a>
                                        </div>
                                        <div class="flex-grow-1">
                                            <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                                <div class="d-flex flex-column">
                                                    <div class="d-flex align-items-center mb-2">
                                                        <a class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{$driver['firstName']}} {{$driver['lastName']}}</a>
                                                        <a>
                                                            <i class="ki-duotone ki-verify fs-1 text-primary">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </a>
                                                    </div>
                                                    <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2 ">
                                                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                            <i class="ki-duotone ki-profile-circle fs-4 me-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                                <span class="path3"></span>
                                                            </i>{{$driver['nationalId']}}</a>
                                                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                            <i class="ki-duotone ki-geolocation fs-4 me-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>{{$driver['firstName']}}</a>
                                                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                            <i class="ki-duotone ki-call fs-4 me-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>{{$driver['mobilePhone']}}</a>
                                                        <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
                                                            <i class="ki-duotone ki-call fs-4 me-1">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>{{$driver_info['homePhone']}}</a>
                                                    </div>
                                                </div>
                                                <div class="d-flex my-4"></div>
                                            </div>
                                            <div class="d-flex justify-content-between">
                                                <div class="d-flex flex-wrap flex-stack">
                                                    <div class="d-flex flex-column flex-grow-1 pe-8">
                                                        <div class="d-flex flex-wrap">
                                                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="fs-2 fw-bold counted">{{$car['deviceCode']}}</div>
                                                                </div>
                                                                <div class="fw-semibold fs-6 text-gray-400">کد دستگاه</div>
                                                            </div>
                                                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="fs-2 fw-bold counted">{{$car['licensePlateNumber']}}</div>
                                                                </div>
                                                                <div class="fw-semibold fs-6 text-gray-400">پلاک ملی</div>
                                                            </div>
                                                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="fs-2 fw-bold counted">غیر فعال</div>
                                                                </div>
                                                                <div class="fw-semibold fs-6 text-gray-400">وضعیت ماشین</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3"></div>
                                                </div>
                                                <div class="d-flex flex-wrap flex-stack d-none">
                                                    <div class="d-flex flex-column flex-grow-1 pe-8">
                                                        <div class="d-flex flex-wrap">
                                                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="fs-2 fw-bold counted">{{$car['deviceCode']}}</div>
                                                                </div>
                                                                <div class="fw-semibold fs-6 text-gray-400">کد دستگاه</div>
                                                            </div>
                                                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="fs-2 fw-bold counted">{{$car['licensePlateNumber']}}</div>
                                                                </div>
                                                                <div class="fw-semibold fs-6 text-gray-400">پلاک ملی</div>
                                                            </div>
                                                            <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                                <div class="d-flex align-items-center">
                                                                    <div class="fs-2 fw-bold counted">فعال</div>
                                                                </div>
                                                                <div class="fw-semibold fs-6 text-gray-400">وضعیت ماشین</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-flex align-items-center w-200px w-sm-300px flex-column mt-3"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                                        <li class="nav-item mt-2">
                                            <a class="nav-link text-active-primary ms-0 me-10 py-5 active" data-bs-toggle="tab" href="#information">پروفایل ماشین</a>
                                        </li>
                                        <li class="nav-item mt-2">
                                            <a class="nav-link text-active-primary ms-0 me-10 py-5" data-bs-toggle="tab" href="#repair">تعمیرات</a>
                                        </li>
                                        <li class="nav-item mt-2">
                                            <a class="nav-link text-active-primary ms-0 me-10 py-5" data-bs-toggle="tab" href="#bimeh">بیمه</a>
                                        </li>
                                        <li class="nav-item mt-2">
                                            <a class="nav-link text-active-primary ms-0 me-10 py-5" data-bs-toggle="tab" href="#khalafi">خلافی</a>
                                        </li>
                                        <li class="nav-item mt-2">
                                            <a class="nav-link text-active-primary ms-0 me-10 py-5" data-bs-toggle="tab" href="#fani">معاینه فنی</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="tab-content mt-5">
                                <div class="tab-pane fade active show" 		id="information" role="tabpanel">
                                    <div class="row">
                                        <div class="col-lg-9 col-md-7 col-sm-7 col-12">
                                            <div class="mb-5">
                                                <div class="card">
                                                    <div class="card-body padding-mobile">
                                                        <div class="px-7 border-0 pt-7">
                                                            <h3 class="d-flex card-title align-items-start flex-column">
                                                                <span class="card-label fw-bold fs-3 mb-1">اطلاعات تکمیلی ماشین</span>
                                                                <span class="text-muted mt-1 fw-semibold fs-7">تمام اطلاعات بروز هستند</span>
                                                            </h3>
                                                            <div class="card-toolbar"></div>
                                                        </div>
                                                        <div class="parent-car-items">
                                                            <div class="">
                                                                <div class="fw-bold title-profile-cars">نوع</div>
                                                                <div class=" content-profile-cars">{{$car_type[$car['cat_id']]['name']}}</div>
                                                            </div>
                                                            <div class="">
                                                                <div class="fw-bold title-profile-cars">سیستم</div>
                                                                <div class=" content-profile-cars">{{$car_type[$car['subcat_id']]['name']}}</div>
                                                            </div>
                                                            <div class="">
                                                                <div class="fw-bold title-profile-cars">مدل</div>
                                                                <div class=" content-profile-cars">{{$carInfo['model']}}</div>
                                                            </div>
                                                            <div class="">
                                                                <div class="fw-bold title-profile-cars">تعداد سیلندر</div>
                                                                <div class=" content-profile-cars">{{$carInfo['cylinderCount']}}</div>
                                                            </div>
                                                            <div class="">
                                                                <div class="fw-bold title-profile-cars">شماره VIN</div>
                                                                <div class=" content-profile-cars" style="font-family: Tahoma !important;letter-spacing: 5px !important;">{{$carInfo['vin']}}</div>
                                                            </div>
                                                            <div class="">
                                                                <div class="fw-bold title-profile-cars">شناسه موتور</div>
                                                                <div class=" content-profile-cars" style="font-family: Tahoma !important;letter-spacing: 5px !important;">{{$carInfo['engineNumber']}}</div>
                                                            </div>
                                                            <div class="">
                                                                <div class="fw-bold title-profile-cars">شماره شاسی</div>
                                                                <div class=" content-profile-cars" style="font-family: Tahoma !important;letter-spacing: 5px !important;">{{$carInfo['chassisNumber']}}</div>
                                                            </div>
                                                            <div class="">
                                                                <div class="fw-bold title-profile-cars">شماره بدنه</div>
                                                                <div class=" content-profile-cars" style="font-family: Tahoma !important;letter-spacing: 5px !important;">{{$carInfo['bodyNumber']}}</div>
                                                            </div>
                                                            <div class="">
                                                                <div class="fw-bold title-profile-cars">شماره ملی</div>
                                                                <div class=" content-profile-cars">{{$carInfo['nationalId']}}</div>
                                                            </div>
                                                            <div class="">
                                                                <div class="fw-bold title-profile-cars">شرکت مالک</div>
                                                                <div class=" content-profile-cars">@if(isset($company[$driver['company_id']])){{$company[$driver['company_id']]['name']}}@endif </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-5">
                                                <div class="card">
                                                    <div class="px-7 border-0 pt-7">
                                                        <h3 class="d-flex card-title align-items-start flex-column">
                                                            <span class="card-label fw-bold fs-3 mb-1">سوابق پروژه های خودرو</span>
                                                        </h3>
                                                        <div class="card-toolbar"></div>
                                                    </div>
                                                    <div class="card-body py-3 px-7">
                                                        <table class="table align-middle p-0 gy-1 table-hover table-sm">
                                                            <thead>
                                                            <tr>
                                                                <th class="p-0 w-200px"></th>
                                                                <th class="p-0 min-w-100px"></th>
                                                                <th class="p-0 min-w-140px"></th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr class="border-bottom">
                                                                <td class="text-start ps-5">
                                                                    <a href="/cars?project=7" class="text-dark fw-bold text-hover-primary mb-1 fs-6">باند دوم طبس_جوخواه</a>
                                                                </td>
                                                                <td class="text-start">
                                                                    <span class="text-muted fw-semibold d-block fs-7">قدرت ایمان کویر</span>
                                                                </td>
                                                                <td class="text-end pe-5">
                                                                    <span class="text-danger fs-7 fw-bold">1403/01/30</span>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-5 col-sm-5 col-12 ">
                                            <div class="card mb-5">
                                                <div class="card-body padding-mobile">
                                                    <div class="d-flex flex-center flex-column">
                                                        <a class="symbol symbol-100px symbol-circle mb-7" href="{{ asset('resized/'.$driver['driver_pic']) }}" target="_blank" style="border: 5px #eaeaea solid;box-shadow: 0 2px 5px rgba(0,0,0,0.1)">
                                                            <img src="{{ asset('resized/'.$driver['driver_pic']) }}">
                                                        </a>
                                                        <a class="fs-3 text-gray-800 text-hover-primary fw-bold mb-3">
                                                            جلال شهریاری								</a>
                                                        <div class="mb-9">
                                                            <div class="badge badge-lg badge-light-primary d-inline px-5 round rounded">0850035872</div>
                                                        </div>
                                                        <div class="fw-bold mb-3">متولد 1369/04/28 | خراسان جنوبی | فردوس</div>
                                                    </div>
                                                    <div class=" fs-6">
                                                        <div class="fw-bold mt-2">نام پدر</div>
                                                        <div class="text-gray-600">{{$driver_info['fatherName']}}</div>
                                                        <div class="fw-bold mt-2">وضعیت تاهل</div>
                                                        <div class="text-gray-600">
                                                            @if($driver_info['maritalStatus'] == 'married')
                                                                متاهل
                                                            @else
                                                                مجرد
                                                            @endif</div>
                                                        <div class="fw-bold mt-2">آدرس</div>
                                                        <div class="text-gray-600">فردوس بلوار حصار حصار 9</div>
                                                    </div>
                                                </div>
                                            </div>
{{--                                            <div class="card mb-5">--}}
{{--                                                <div class="card-body padding-mobile">--}}
{{--                                                    <div class="d-flex flex-center flex-column">--}}
{{--                                                        <a class="symbol symbol-100px symbol-circle mb-7" href="uploads/photo11021665109_662ab49b55f31.jpg" target="_blank" style="border: 5px #eaeaea solid;box-shadow: 0 2px 5px rgba(0,0,0,0.1)">--}}
{{--                                                            <img src="assets/media/avatars/300-1.jpg">--}}
{{--                                                        </a>--}}
{{--                                                        <a class="fs-3 text-gray-800 text-hover-primary fw-bold mb-3">--}}
{{--                                                            حسین رضایی								</a>--}}
{{--                                                        <div class="mb-9">--}}
{{--                                                            <div class="badge badge-lg badge-light-primary d-inline px-5 round rounded">0850035872</div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="fw-bold mb-3">متولد 1370/08/14 |  بندرعباس | حلما</div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class=" fs-6">--}}
{{--                                                        <div class="fw-bold mt-2">نام پدر</div>--}}
{{--                                                        <div class="text-gray-600">محمد</div>--}}
{{--                                                        <div class="fw-bold mt-2">وضعیت تاهل</div>--}}
{{--                                                        <div class="text-gray-600">مجرد</div>--}}
{{--                                                        <div class="fw-bold mt-2">آدرس</div>--}}
{{--                                                        <div class="text-gray-600">تهران بلوار آزادی پلاک 9</div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="bimeh" 		role="tabpanel">
                                    <div class="card">
                                        <div class="px-7 border-0 pt-7">
                                            <h3 class="d-flex card-title align-items-start flex-column">
                                                <span class="card-label fw-bold fs-3 mb-1">سوابق بیمه ماشین</span>
                                                <span class="text-muted mt-1 fw-semibold fs-7">تمام اطلاعات بروز هستند</span>
                                            </h3>
                                            <div class="card-toolbar"></div>
                                        </div>
                                        <div class="card-body py-3 px-7">
                                            <table class="table align-middle p-0 gy-1 table-hover table-sm">
                                                <thead>
                                                <tr>
                                                    <th class="p-0 min-w-100px ps-5">شرکت بیمه‌گذار</th>
                                                    <th class="p-0 min-w-50px">نوع بیمه</th>
                                                    <th class="p-0 min-w-50px">شماره قبلی</th>
                                                    <th class="p-0 min-w-50px">شماره جدید</th>
                                                    <th class="p-0 min-w-50px">شروع</th>
                                                    <th class="p-0 min-w-50px">پایان</th>
                                                    <th class="p-0 min-w-50px">خسارت</th>
                                                    <th class="p-0 min-w-50px">تخفیف</th>
                                                    <th class="p-0 min-w-50px">مبلغ/ارزش</th>
                                                    <th class="p-0 min-w-25px"></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="repair" 		role="tabpanel">
                                    <div class="card">
                                        <div class="px-7 border-0 pt-7">
                                            <h3 class="d-flex card-title align-items-start flex-column">
                                                <span class="card-label fw-bold fs-3 mb-1">سوابق خرابی و تعمیرات ماشین</span>
                                                <span class="text-muted mt-1 fw-semibold fs-7">تمام اطلاعات بروز هستند</span>
                                            </h3>
                                            <div class="card-toolbar"></div>
                                        </div>
                                        <div class="card-body py-3 px-7">
                                            <table class="table align-middle p-0 gy-1 table-hover table-sm">
                                                <thead>
                                                <tr>
                                                    <th class="p-0 min-w-100px ps-5">کد درخواست</th>
                                                    <th class="p-0 min-w-50px">مسئول درخواست‌کننده</th>
                                                    <th class="p-0 min-w-50px">کدخرابی</th>
                                                    <th class="p-0 min-w-50px">وضعیت دستگاه</th>
                                                    <th class="p-0 min-w-50px">تاریخ توقف</th>
                                                    <th class="p-0 min-w-50px">تاریخ درخواست</th>
                                                    <th class="p-0 min-w-50px">شرح</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="khalafi" 	role="tabpanel">
                                    <div class="card">
                                        <div class="px-7 border-0 pt-7">
                                            <h3 class="d-flex card-title align-items-start flex-column">
                                                <span class="card-label fw-bold fs-3 mb-1">سوابق جریمه‌ و خلافی‌های ماشین</span>
                                                <span class="text-muted mt-1 fw-semibold fs-7">تمام اطلاعات بروز هستند</span>
                                            </h3>
                                            <div class="card-toolbar"></div>
                                        </div>
                                        <div class="card-body py-3 px-7">
                                            <table class="table align-middle p-0 gy-1 table-hover table-sm">
                                                <thead>
                                                <tr>
                                                    <th class="p-0 min-w-50px ps-5">تخلف</th>
                                                    <th class="p-0 min-w-100px">کد قبض</th>
                                                    <th class="p-0 min-w-50px">تاریخ جربمه</th>
                                                    <th class="p-0 min-w-50px">تاریخ اتمام مهلت</th>
                                                    <th class="p-0 min-w-100px">شرح</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="fani" 		role="tabpanel">
                                    <div class="card">
                                        <div class="px-7 border-0 pt-7">
                                            <h3 class="d-flex card-title align-items-start flex-column">
                                                <span class="card-label fw-bold fs-3 mb-1">سوابق گواهی معاینه‌فنی ماشین</span>
                                                <span class="text-muted mt-1 fw-semibold fs-7">تمام اطلاعات بروز هستند</span>
                                            </h3>
                                            <div class="card-toolbar"></div>
                                        </div>
                                        <div class="card-body py-3 px-7">
                                            <table class="table align-middle p-0 gy-1 table-hover table-sm">
                                                <thead>
                                                <tr>
                                                    <th class="p-0 min-w-50px ps-5">شماره کد معاینه‌فنی</th>
                                                    <th class="p-0 min-w-100px">نام مرکز</th>
                                                    <th class="p-0 min-w-50px">تاریخ شروع</th>
                                                    <th class="p-0 min-w-50px">تاریخ پایان</th>
                                                    <th class="p-0 min-w-50px">وضعیت</th>
                                                    <th class="p-0 min-w-100px">شرح</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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
