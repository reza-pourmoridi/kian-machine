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
                                    @foreach($drivers as $driver)
                                        <div class="col-md-3 mb-10 cars-items">
                                            <div class="card bordered">
                                                <img src="resized/{{$driver['driver_pic']}}" class="card-img-top" style="height: 200px !important;object-fit: cover">
                                                <div class="card-body px-5 d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <h4 class="card-title p-0 m-0">{{$driver['firstName']}} {{$driver['lastName']}}</h4>
                                                    </div>
                                                    <div class="card-toolbar">
                                                        <div>
                                                            <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                                                <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                                                            </button>
                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-200px py-3" data-kt-menu="true" style="">
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        عنوان
                                                                    </a>
                                                                </div>
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        عنوان
                                                                    </a>
                                                                </div>
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        ویرایش اطلاعات راننده
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="list-group list-group-flush px-0 mb-2">
                                                    <li class="list-group-item d-flex justify-content-between">
                                                        <small>کدملی</small>
                                                        <h5 class="py-0 my-0" style="font-family: Tahoma">{{$driver['nationalId']}}</h5>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between">
                                                        <small>شماره موبایل</small>
                                                        <h5 class="py-0 my-0">{{$driver['mobilePhone']}}</h5>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between">
                                                        <small>شرکت</small>
                                                        <h5 class="py-0 my-0">@if(isset($company[$driver['company_id']])){{$company[$driver['company_id']]['name']}}@endif</h5>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between">
                                                        <small>پروژه</small>
                                                        <h5 class="py-0 my-0">@if(isset($project[$driver['project_id']])){{$project[$driver['project_id']]['name']}}@endif</h5>
                                                    </li>
                                                    <li class="list-group-item d-flex justify-content-between">
                                                        <small>ماشین</small>
                                                        <h5 class="py-0 my-0">
                                                            @if(isset($CarDriverRelation[$driver['id']]))
                                                                <?php
                                                                $car_id = $CarDriverRelation[$driver['id']]['car_id'];
                                                                ?>
                                                                @if(isset($car_type[$cars[$car_id]['cat_id']]) and isset($car_type[$cars[$car_id]['subcat_id']]) )
                                                                         {{$car_type[$cars[$car_id]['cat_id']]['name']}}
                                                                         . {{$car_type[$cars[$car_id]['subcat_id']]['name']}}
                                                                @endif
                                                                : @if(isset($cars[$car_id])){{$cars[$car_id]['deviceCode']}}@endif
                                                            @endif
                                                        </h5>
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
