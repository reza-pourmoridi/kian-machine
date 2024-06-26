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
                                    <span class="card-label fw-bold fs-3 mb-1">لیست راننده ها </span>
                                </h3>
                            </div>
                            <!--end::Header-->
                            <!--begin::Body-->
                            <form action="{{ route('dashboard/drivers.index') }}"  method="GET" enctype="multipart/form-data" class="search-box">
                                <div class="parent-search-box">
                                    <div class="items-input-search-box">
                                        <input name="phoneNumber" type="text" placeholder="شماره موبایل"/>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2024 Fonticons, Inc. --><path d="M188.7 32.5c13 2.6 21.4 15.2 18.8 28.2L192.5 136h111l16.9-84.7c2.6-13 15.2-21.4 28.2-18.8s21.4 15.2 18.8 28.2L352.5 136H424c13.3 0 24 10.7 24 24s-10.7 24-24 24H342.9L314.1 328H392c13.3 0 24 10.7 24 24s-10.7 24-24 24H304.5l-16.9 84.7c-2.6 13-15.2 21.4-28.2 18.8s-21.4-15.2-18.8-28.2L255.5 376h-111l-16.9 84.7c-2.6 13-15.2 21.4-28.2 18.8s-21.4-15.2-18.8-28.2L95.5 376H24c-13.3 0-24-10.7-24-24s10.7-24 24-24h81.1l28.8-144H56c-13.3 0-24-10.7-24-24s10.7-24 24-24h87.5l16.9-84.7c2.6-13 15.2-21.4 28.2-18.8zM182.9 184L154.1 328h111l28.8-144h-111z"/></svg>
                                    </div>
                                    <div class="items-input-search-box">
                                        <input name="nationalId" type="text" placeholder="کدملی"/>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2024 Fonticons, Inc. --><path d="M24 32C10.7 32 0 42.7 0 56V456c0 13.3 10.7 24 24 24s24-10.7 24-24V56c0-13.3-10.7-24-24-24zm88 0c-8.8 0-16 7.2-16 16V464c0 8.8 7.2 16 16 16s16-7.2 16-16V48c0-8.8-7.2-16-16-16zm72 0c-13.3 0-24 10.7-24 24V456c0 13.3 10.7 24 24 24s24-10.7 24-24V56c0-13.3-10.7-24-24-24zm112 0c-13.3 0-24 10.7-24 24V456c0 13.3 10.7 24 24 24s24-10.7 24-24V56c0-13.3-10.7-24-24-24zM464 56V456c0 13.3 10.7 24 24 24s24-10.7 24-24V56c0-13.3-10.7-24-24-24s-24 10.7-24 24zm-64-8V464c0 8.8 7.2 16 16 16s16-7.2 16-16V48c0-8.8-7.2-16-16-16s-16 7.2-16 16z"/></svg>
                                    </div>
                                    <div class="items-input-search-box">
                                        <input name="company" type="text" placeholder="شرکت "/>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2024 Fonticons, Inc. --><path d="M448 48c8.8 0 16 7.2 16 16V448c0 8.8-7.2 16-16 16H288c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16H448zM288 0c-35.3 0-64 28.7-64 64V448c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H288zM192 128H72c-39.8 0-72 32.2-72 72V440c0 39.8 32.2 72 72 72H216.4c-11.8-13.2-20.1-29.7-23.1-48H72c-13.3 0-24-10.7-24-24V200c0-13.3 10.7-24 24-24H192V128zM112 320c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V336c0-8.8-7.2-16-16-16H112zm224 16c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V304c0-8.8-7.2-16-16-16H352c-8.8 0-16 7.2-16 16v32zM112 224c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V240c0-8.8-7.2-16-16-16H112zM336 112v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16V112c0-8.8-7.2-16-16-16H352c-8.8 0-16 7.2-16 16zm16 144h32c8.8 0 16-7.2 16-16V208c0-8.8-7.2-16-16-16H352c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16z"/></svg>
                                    </div>
                                    <div class="items-input-search-box">
                                        <input name="project" type="text" placeholder="پروژه بهره برداری"/>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Pro 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2024 Fonticons, Inc. --><path d="M512 337.2V52.4L344 77V373l168-35.8zM296 373V77L128 52.4V337.2L296 373zM523.4 2.2C542.7-.7 560 14.3 560 33.8V350.1c0 15.1-10.6 28.1-25.3 31.3l-201.3 43c-8.8 1.9-17.9 1.9-26.7 0l-201.3-43C90.6 378.3 80 365.2 80 350.1V33.8C80 14.3 97.3-.7 116.6 2.2L320 32 523.4 2.2zM38.3 23.7l10.2 2c-.3 2.7-.5 5.4-.5 8.1V74.6 342.1v66.7l265.8 54.5c2 .4 4.1 .6 6.2 .6s4.2-.2 6.2-.6L592 408.8V342.1 74.6 33.8c0-2.8-.2-5.5-.5-8.1l10.2-2C621.5 19.7 640 34.8 640 55V421.9c0 15.2-10.7 28.3-25.6 31.3L335.8 510.4c-5.2 1.1-10.5 1.6-15.8 1.6s-10.6-.5-15.8-1.6L25.6 453.2C10.7 450.2 0 437.1 0 421.9V55C0 34.8 18.5 19.7 38.3 23.7z"/></svg>
                                    </div>
                                    <button type="submit">
                                        <span>جستجو</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2024 Fonticons, Inc. --><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg>
                                    </button>
                                </div>
                            </form>


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
{{--                                <div class="w-100">--}}
{{--                                    <input type="text" class="form-control w-300px" placeholder="جستجوی هر اطلاعاتی از ماشین‌ها" oninput="filterCars(this.value)">--}}
{{--                                </div>--}}
                                <div class="row mt-5">
                                    @foreach($drivers as $driver)
                                        <div class="col-md-3 mb-10 cars-items">
                                            <div class="card bordered">
                                                <img src="public/resized/{{$driver['driver_pic']}}" class="card-img-top" style="height: 200px !important;object-fit: cover">
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
