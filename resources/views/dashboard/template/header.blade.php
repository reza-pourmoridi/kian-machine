
<!DOCTYPE html>
<html direction="rtl" dir="rtl" style="direction: rtl">
<head>
    <title>پنل مدیریت</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Include CSS files using the asset helper -->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('views/assets/style.css') }}" rel="stylesheet" type="text/css"/>
    <script src="{{ asset('views/assets/script.js') }}"></script>

</head>
<body>

<body id="kt_body" class="header-extended header-fixed header-tablet-and-mobile-fixed">
<!--begin::Theme mode setup on page load-->
<!--end::Theme mode setup on page load-->
<!--begin::اصلی-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="page d-flex flex-row flex-column-fluid">
        <!--begin::Wrapper-->
        <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
            <div id="kt_header" class="header">
                <div class="header-top d-flex align-items-stretch flex-grow-1">
                    <div class="d-flex container-xxl align-items-stretch">
                        <div class="d-flex align-items-center align-items-lg-stretch me-5 flex-row-fluid">
                            <button class="d-lg-none btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px ms-n3 me-2" id="kt_header_navs_toggle">
                                <i class="ki-duotone ki-abstract-14 fs-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </button>
                            <a href="{{ route('dashboard.dashboard') }}" class="d-flex align-items-center">
                                <img alt="Logo" src="{{ asset('uploads/logo1.png') }}" class="h-25px h-lg-30px"/>
                            </a>
                            <div class="align-self-end overflow-auto" id="kt_brand_tabs">
                                <div class="header-tabs overflow-auto mx-4 ms-lg-10 mb-5 mb-lg-0" id="kt_header_tabs" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_header_navs_wrapper', lg: '#kt_brand_tabs'}">
                                    <ul class="nav flex-nowrap text-nowrap">

                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" data-kt-trigger="hover" href="#tab1">
                                                <i class="bi bi-speedometer text-light"></i>
                                                داشبورد
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" data-kt-trigger="hover" href="#tab2">
                                                <i class="bi bi-truck text-light"></i>
                                                ماشین آلات
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" data-kt-trigger="hover" href="#tab3">
                                                <i class="bi bi-person-fill-check text-light"></i>
                                                رانندگان
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" data-kt-trigger="hover" href="#tab4">
                                                <i class="bi bi-hammer text-light"></i>
                                                تعمیرات
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" data-kt-trigger="hover" href="#tab5">
                                                <i class="bi bi-geo-alt-fill text-light"></i>
                                                مکان نما
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" data-kt-trigger="hover" href="#tab6">
                                                <i class="bi bi-bar-chart-line text-light"></i>
                                                گزارشات
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" data-kt-trigger="hover" href="#tab7">
                                                <i class="bi bi-plus-circle-fill text-light"></i>
                                                ثبت اطلاعات پایه
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex align-items-center flex-row-auto">
                            <div class="d-flex align-items-center ms-1"></div>
                            <div class="d-flex align-items-center ms-1">
                                <div class="btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px position-relative" id="kt_activities_toggle">
                                    <i class="ki-duotone ki-message-text-2 fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                    <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center ms-1">
                                <a href="#" class="btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    <i class="ki-duotone ki-night-day theme-light-show fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                        <span class="path7"></span>
                                        <span class="path8"></span>
                                        <span class="path9"></span>
                                        <span class="path10"></span>
                                    </i>
                                    <i class="ki-duotone ki-moon theme-dark-show fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-duotone ki-night-day fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
															<span class="path5"></span>
															<span class="path6"></span>
															<span class="path7"></span>
															<span class="path8"></span>
															<span class="path9"></span>
															<span class="path10"></span>
														</i>
													</span>
                                            <span class="menu-title">روشن</span>
                                        </a>
                                    </div>
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-duotone ki-moon fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
                                            <span class="menu-title">تیره</span>
                                        </a>
                                    </div>
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
													<span class="menu-icon" data-kt-element="icon">
														<i class="ki-duotone ki-screen fs-2">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
															<span class="path4"></span>
														</i>
													</span>
                                            <span class="menu-title">سیستم</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex align-items-center ms-1" id="kt_header_user_menu_toggle">
                                <div class="btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 ps-2 pe-2 me-n2" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                                    <div class="d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4">
                                        <span class="text-white opacity-75 fs-8 fw-semibold lh-1 mb-1">احسان آهنین</span>
                                        <span class="text-white fs-8 fw-bold lh-1">خوش آمدید</span>
                                    </div>
                                    <div class="symbol symbol-30px symbol-md-40px">
                                        <img src="{{ asset('images/no-profile.jpg') }}" alt="image"/>
                                    </div>
                                </div>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <div class="menu-content d-flex align-items-center px-3">
                                            <div class="symbol symbol-50px me-5">
                                                <img alt="Logo" src="{{ asset('images/no-profile.jpg') }}"/>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <div class="fw-bold d-flex align-items-center fs-5">
														<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">
																																														کاربر
																													</span></div>
                                                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">09194229529</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="separator my-2"></div>
                                    <div class="menu-item px-5">
                                        <a href="profile" class="menu-link px-5">پروفایل من</a>
                                    </div>
                                    <div class="separator my-2"></div>
                                    <div class="menu-item px-5 my-1">
                                        <a href="settings" class="menu-link px-5">تنظیمات سیستم</a>
                                    </div>
                                    <div class="menu-item px-5">
                                        <a href="{{ route('logout') }}" class="menu-link px-5 text-danger">خروج</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-navs d-flex align-items-stretch flex-stack h-lg-70px w-100 py-5 py-lg-0 overflow-hidden overflow-lg-visible" id="kt_header_navs" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_navs_toggle" data-kt-swapper="true" data-kt-swapper-mode="append" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header'}">
                    <div class="d-lg-flex container-xxl w-100">
                        <div class="d-lg-flex flex-column justify-content-lg-center w-100" id="kt_header_navs_wrapper">
                            <div class="tab-content" data-kt-scroll="true" data-kt-scroll-activate="{default: true, lg: false}" data-kt-scroll-height="auto" data-kt-scroll-offset="70px">
                                <div class="tab-pane fade active show" id="tab1">
                                    <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                                        <div class="d-flex flex-column flex-lg-row gap-2">
                                            <a class="btn btn-sm btn-light fw-bold" href="{{ route('dashboard.dashboard') }}">
                                                داشبورد
                                            </a>
                                            <a class="btn btn-sm btn-light fw-bold" href="#">
                                                کاربران
                                            </a>
                                            <a class="btn btn-sm btn-light fw-bold" href="settings">
                                                تنظیمات
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab2">
                                    <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                                        <div class="d-flex flex-column flex-lg-row gap-2">
                                            <div>
                                                <a class="btn btn-sm btn fw-bold" href="{{ route('dashboard/cars.index') }}">
                                                    تمام ماشین آلات
                                                </a>
                                            </div>
                                            @foreach($menuData['company'] as $company)
                                                <div>
                                                    <a href="{{ route('dashboard/cars.index', ['company_id' => $company['id']]) }}" class="btn btn-sm btn fw-bold" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end" data-kt-menu-offset="0, 0" >
                                                        {{$company['name']}}
                                                    </a>
                                                    <div class="py-3 menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-250px" data-kt-menu="true">
                                                        @foreach($menuData['project'] as $project)
                                                            @if($project['company'] == $company['id'])
                                                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                                                <a class="menu-link px-3" href="{{ route('dashboard/cars.index', ['company_id' => $company['id'], 'project_id' => $project['id']]) }}">
                                                                    <span class="menu-title">{{$project['name']}}</span>
                                                                    <span class="menu-arrow"></span>
                                                                </a>
                                                                <div class="menu-sub menu-sub-dropdown w-175px py-3">
                                                                    @foreach($menuData['car_type'] as $car_type)
                                                                        @if($car_type['parent_id'] == 0)
                                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                                                            <a class="menu-link px-3" href="{{ route('dashboard/cars.index', ['company_id' => $company['id'], 'project_id' => $project['id'], 'cat_id' => $car_type['id']]) }}">
                                                                                <span class="menu-title">{{$car_type['name']}}</span>
                                                                                <span class="menu-arrow"></span>
                                                                            </a>
                                                                            <div class="menu-sub menu-sub-dropdown w-175px py-3">
                                                                                @foreach($menuData['car_type'] as $car_sub)
                                                                                    @if($car_sub['parent_id'] == $car_type['id'])
                                                                                        <div class="menu-item px-3">
                                                                                            <a class="menu-link px-3"  href="{{ route('dashboard/cars.index', ['company_id' => $company['id'], 'project_id' => $project['id'], 'cat_id' => $car_type['id'], 'subcat_id' => $car_sub['id']]) }}">
                                                                                                {{$car_sub['name']}}
                                                                                            </a>
                                                                                        </div>
                                                                                    @endif
                                                                                @endforeach
                                                                            </div>
                                                                        </div>
                                                                        @endif
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab3">
                                    <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                                        <div class="d-flex flex-column flex-lg-row gap-2">
                                            <div>
                                                <a class="btn btn-sm btn fw-bold" href="{{ route('dashboard/drivers.index') }}">
                                                    تمام راننده‌ها
                                                </a>
                                            </div>
                                            @foreach($menuData['company'] as $company)
                                                <div>
                                                    <a href="{{ route('dashboard/drivers.index', ['company_id' => $company['id']]) }}" class="btn btn-sm btn fw-bold" data-kt-menu-trigger="hover" data-kt-menu-placement="bottom-end" data-kt-menu-offset="0, 0" >
                                                        {{$company['name']}}
                                                    </a>
                                                    <div class="py-3 menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-250px" data-kt-menu="true">
                                                        @foreach($menuData['project'] as $project)
                                                            @if($project['company'] == $company['id'])
                                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                                                    <a class="menu-link px-3" href="{{ route('dashboard/drivers.index', ['company_id' => $company['id'], 'project_id' => $project['id']]) }}">
                                                                        <span class="menu-title">{{$project['name']}}</span>
                                                                        <span class="menu-arrow"></span>
                                                                    </a>
                                                                    <div class="menu-sub menu-sub-dropdown w-175px py-3">
                                                                        @foreach($menuData['car_type'] as $car_type)
                                                                            @if($car_type['parent_id'] == 0)
                                                                                <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="left-start">
                                                                                    <a class="menu-link px-3" href="{{ route('dashboard/drivers.index', ['company_id' => $company['id'], 'project_id' => $project['id'], 'cat_id' => $car_type['id']]) }}">
                                                                                        <span class="menu-title">{{$car_type['name']}}</span>
                                                                                        <span class="menu-arrow"></span>
                                                                                    </a>
                                                                                    <div class="menu-sub menu-sub-dropdown w-175px py-3">
                                                                                        @foreach($menuData['car_type'] as $car_sub)
                                                                                            @if($car_sub['parent_id'] == $car_type['id'])
                                                                                                <div class="menu-item px-3">
                                                                                                    <a class="menu-link px-3"  href="{{ route('dashboard/drivers.index', ['company_id' => $company['id'], 'project_id' => $project['id'], 'cat_id' => $car_type['id'], 'subcat_id' => $car_sub['id']]) }}">
                                                                                                        {{$car_sub['name']}}
                                                                                                    </a>
                                                                                                </div>
                                                                                            @endif
                                                                                        @endforeach
                                                                                    </div>
                                                                                </div>
                                                                            @endif
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab4">
                                    <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                                        <div class="d-flex flex-column flex-lg-row gap-2">
                                            <a class="btn btn-sm btn fw-bold" href="{{ route('dashboard.repairForm') }}">
                                                ثبت درخواست تعمیر
                                            </a>
                                            <a class="btn btn-sm btn fw-bold" href="#">
                                                دستور کار
                                            </a>
                                            <a class="btn btn-sm btn fw-bold" href="#">
                                                ثبت نهایی تعمیر
                                            </a>
                                            <a class="btn btn-sm btn fw-bold" href="#">
                                                وضعیت
                                            </a>
                                            <a class="btn btn-sm btn fw-bold" href="#">
                                                سرویس
                                            </a>
                                            <a class="btn btn-sm btn fw-bold" href="#">
                                                کد خرابی
                                            </a>
                                            <a class="btn btn-sm btn fw-bold" href="#">
                                                افزودن تعمیرکار
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab5">
                                    <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                                        <div class="d-flex flex-column flex-lg-row gap-2">
                                            <a class="btn btn-sm btn fw-bold" href="map">
                                                نقشه آنلاین
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab6">
                                    <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                                        <div class="d-flex flex-column flex-lg-row gap-2">
                                            <a class="btn btn-sm btn fw-bold" href="#">
                                                گزارش تعمیرات
                                            </a>
                                            <a class="btn btn-sm btn fw-bold" href="#">
                                                گزارش رانندگان
                                            </a>
                                            <a class="btn btn-sm btn fw-bold" href="#">
                                                گزارش دستگاه و ماشین آلات
                                            </a>
                                            <a class="btn btn-sm btn fw-bold" href="#">
                                                گزارش قعالیت کاربران
                                            </a>
                                            <a class="btn btn-sm btn fw-bold" href="#">
                                                گزارش مکانی
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab7">
                                    <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
                                        <div class="d-flex flex-column flex-lg-row gap-2">
                                            <a class="btn btn-sm btn fw-bold d-none" href="new-company">
                                                شرکت
                                            </a>
                                            <a class="btn btn-sm btn fw-bold d-none" href="new-project">
                                                پروژه
                                            </a>
                                            <a class="btn btn-sm btn fw-bold" href="{{ route('dashboard.addUser') }}">
                                                کاربر
                                            </a>
                                            <a class="btn btn-sm btn fw-bold" href="{{ route('dashboard.carsForm') }}">
                                                دستگاه و ماشین آلات
                                            </a>
                                            <a class="btn btn-sm btn fw-bold" href="{{ route('dashboard/drivers-form') }}">
                                                راننده
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="kt_activities" class="bg-body drawer drawer-end" data-kt-drawer="true" data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '50%'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close" style="width: 50% !important;">
                <div class="card shadow-none border-0 rounded-0">
                    <div class="card-header" id="kt_activities_header">
                        <h3 class="card-title fw-bold text-dark">اعلان‌های هوشمند</h3>
                        <div class="card-toolbar">
                            <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n10" id="kt_activities_close">
                                <i class="ki-duotone ki-cross fs-1">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body position-relative" id="kt_activities_body">
                        <div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body" data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" data-kt-scroll-offset="5px" style="height: 749px;">
                            <div class="timeline">
                                <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>
                                    <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-message-text-2 fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <div class="timeline-content mb-5 mt-n1">
                                        <div class="pe-3 mb-3">
                                            <div class="fs-5 fw-semibold mb-0">ماشین‌آلات زیر نیاز به تمدید بیمه بدنه دارند لطفاً بررسی کنید</div>
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <div class="text-muted me-2 fs-7">دارای اولویت بالا</div>
                                            </div>
                                        </div>
                                        <div class="overflow-auto pb-5">
                                            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 pe-0 py-3 mb-2">
                                                <a href="cars" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">شرکت - پروژه</a>
                                                <div class="min-w-150px pe-2">
                                                    <span class="badge badge-light text-muted">عنوان ماشین</span>
                                                </div>
                                                <div class="min-w-100px pe-2">
                                                    <span class="badge badge-light-primary">پلاک</span>
                                                </div>
                                                <a href="cars" class="btn btn-sm btn-light btn-active-light-primary mx-0">تاریخ اتمام</a>
                                            </div>
                                            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 pe-0 py-3 mb-2">
                                                <a href="cars" class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">شرکت - پروژه</a>
                                                <div class="min-w-150px pe-2">
                                                    <span class="badge badge-light text-muted">عنوان ماشین</span>
                                                </div>
                                                <div class="min-w-100px pe-2">
                                                    <span class="badge badge-light-primary">پلاک</span>
                                                </div>
                                                <a href="cars" class="btn btn-sm btn-light btn-active-light-primary mx-0">تاریخ اتمام</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-disconnect fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <div class="timeline-content mb-5 mt-n1">
                                        <div class="mb-5 pe-3">
                                            <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 پروژه ورودی جدید پرونده ها:</a>
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <div class="text-muted me-2 fs-7">ارسال شده در ساعت 10:30</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <div class="timeline-content mb-5 mt-n1">
                                        <div class="pe-3 mb-5">
                                            <div class="fs-5 fw-semibold mb-2">وظیفه
                                                <a href="#" class="text-primary fw-bold me-1">#45890</a>ادغام با
                                                <a href="#" class="text-primary fw-bold me-1">#45890</a>داشبورد پروژه ها:
                                            </div>
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <div class="text-muted me-2 fs-7">آغاز شده در 4:23 بعد از ظهر توسط</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <div class="timeline-content mb-5 mt-n1">
                                        <div class="pe-3 mb-5">
                                            <div class="fs-5 fw-semibold mb-0">3 مفهوم جدید طراحی برنامه اضافه شده است:</div>
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <div class="text-muted me-2 fs-7">ایجاد شده در 4:23 بعد از ظهر توسط</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-sms fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <div class="timeline-content mt-n1">
                                        <div class="pe-3">
                                            <div class="fs-5 fw-semibold mb-2">کیس جدید
                                                <a href="#" class="text-primary fw-bold me-1">#67890</a>در پروژه چند پلتفرمی دیتابیس دیزاین به شما واگذار شده است
                                            </div>
                                            <div class="overflow-auto pb-5">
                                                <div class="d-flex align-items-center mt-1 fs-6">
                                                    <div class="text-muted me-2 fs-7">اضافه شده در ساعت 4:12</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <div class="timeline-content mb-5 mt-n1">
                                        <div class="pe-3 mb-5">
                                            <div class="fs-5 fw-semibold mb-0">رسید به دست شما سفارش جدید</div>
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <div class="text-muted me-2 fs-7">در 5:05 صبح توسط</div>
                                            </div>
                                        </div>
                                        <div class="overflow-auto pb-5">
                                            <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                                <i class="ki-duotone ki-devices-2 fs-2tx text-primary me-4">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                                <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                                    <div class="mb-3 mb-md-0 fw-semibold">
                                                        <h4 class="text-gray-900 fw-bold">پردازش دیتابی کامل شد</h4>
                                                        <div class="fs-6 text-gray-700 pe-7">وارد ادمین داشبورد شوید تا مطمئن شوید که یکپارچگی داده ها موفق است</div>
                                                    </div>
                                                    <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">پردازش</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-line w-40px"></div>
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <i class="ki-duotone ki-basket fs-2 text-gray-500">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                            </i>
                                        </div>
                                    </div>
                                    <div class="timeline-content mt-n1">
                                        <div class="pe-3 mb-5">
                                            <div class="fs-5 fw-semibold mb-2">سفارش جدید
                                                <a href="#" class="text-primary fw-bold me-1">#67890</a>برای برنامه ریزی کارگاه و برآورد بودجه قرار داده شده است
                                            </div>
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <div class="text-muted me-2 fs-7">در ساعت 4:23 بعد از ظهر توسط</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>					<!--end::Header-->
