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
                                <span class="card-label fw-bold fs-3 mb-1">افزودن اطلاعات راننده جدید</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-0">
                            <form class="pb-7" action="{{ route('drivers.store') }}"  method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-4">
                                    <div class="col-md-1 mb-3">
                                        <label for="gender" class="form-label">جنسیت</label>
                                        <select class="form-select form-select-sm" id="gender" name="gender">
                                            <option value="male">مرد</option>
                                            <option value="female">زن</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1 mb-3">
                                        <label for="firstName" class="form-label">نام</label>
                                        <input type="text" class="form-control form-control-sm" id="firstName" name="firstName" required>
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="lastName" class="form-label">نام خانوادگی</label>
                                        <input type="text" class="form-control form-control-sm" id="lastName" name="lastName" required>
                                    </div>
                                    <div class="col-md-1 mb-3">
                                        <label for="fatherName" class="form-label">نام پدر</label>
                                        <input type="text" class="form-control form-control-sm" id="fatherName" name="fatherName" required>
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="nationalId" class="form-label">شماره ملی</label>
                                        <input type="text" class="form-control form-control-sm" id="nationalId" name="nationalId" required>
                                    </div>
                                    <div class="col-md-1 mb-3">
                                        <label for="birthdate" class="form-label">تاریخ تولد</label>
                                        <input type="text" class="form-control form-control-sm" id="birthdate" name="birthdate">
                                    </div>
                                    <div class="col-md-1 mb-3">
                                        <label for="maritalStatus" class="form-label">وضعیت تاهل</label>
                                        <select class="form-select form-select-sm" id="maritalStatus" name="maritalStatus">
                                            <option value="single">مجرد</option>
                                            <option value="married">متاهل</option>
                                        </select>
                                    </div>
                                    <div class="col-md-1 mb-3">
                                        <label for="province" class="form-label">استان</label>
                                        <input type="text" class="form-control form-control-sm" id="province" name="province" required>
                                    </div>
                                    <div class="col-md-1 mb-3">
                                        <label for="city" class="form-label">شهر</label>
                                        <input type="text" class="form-control form-control-sm" id="city" name="city" required>
                                    </div>
                                    <div class="col-md-1 mb-3">
                                        <label for="section" class="form-label">بخش</label>
                                        <input type="text" class="form-control form-control-sm" id="section" name="section" required>
                                    </div>
                                    <div class="col-md-1 mb-3">
                                        <label for="education" class="form-label">مدرک تحصیلی</label>
                                        <input type="text" class="form-control form-control-sm" id="education" name="education">
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="fieldOfStudy" class="form-label">رشته</label>
                                        <input type="text" class="form-control form-control-sm" id="fieldOfStudy" name="fieldOfStudy">
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="mobilePhone" class="form-label">تلفن همراه</label>
                                        <input type="text" class="form-control form-control-sm" id="mobilePhone" name="mobilePhone" required>
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label for="homePhone" class="form-label">تلفن منزل</label>
                                        <input type="text" class="form-control form-control-sm" id="homePhone" name="homePhone">
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="address" class="form-label">آدرس</label>
                                        <input type="text" class="form-control form-control-sm" id="address" name="address">
                                    </div>
                                </div>
                                <did class="row mb-4">
                                    <div class="col-3">
                                        <h3>وضعیت نظام وظیفه</h3>
                                        <div class="row">
                                            <div class="col-md-9">
                                                <label for="militaryServiceType" class="form-label">نوع</label>
                                                <input type="text" class="form-control form-control-sm" id="militaryServiceType" name="militaryServiceType">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <!-- اطلاعات استخدام -->
                                        <div class="row mb-5">
                                            <h3>اطلاعات استخدام</h3>
                                            <div class="col-md-9">
                                                <label for="employmentDate" class="form-label">تاریخ استخدام</label>
                                                <input type="text" class="form-control form-control-sm" id="employmentDate" name="employmentDate" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <!-- اطلاعات استخدام -->
                                        <div class="row mb-4">
                                            <h3>اطلاعات گواهینامه</h3>
                                            <div class="col-md-4">
                                                <label for="licenseType" class="form-label">نوع گواهینامه</label>
                                                <input type="text" class="form-control form-control-sm" id="licenseType" name="licenseType">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="licenseNumber" class="form-label">شماره گواهینامه</label>
                                                <input type="text" class="form-control form-control-sm" id="licenseNumber" name="licenseNumber">
                                            </div>
                                            <div class="col-md-4">
                                                <label for="licenseValidityDate" class="form-label">تاریخ اعتبار</label>
                                                <input type="text" class="form-control form-control-sm" id="licenseValidityDate" name="licenseValidityDate">
                                            </div>
                                        </div>
                                    </div>
                                </did>
                                <div class="row pb-4">
                                    <h3>اطلاعات خودروی تحویل شده</h3>
                                    <div class="col-md-2 mb-3">
                                        <label for="cat_id" class="form-label">نوع خودرو</label>
                                        <select class="form-select" id="cat_id" name="cat_id" required onchange="filter_car(this.value)">
                                            <option selected value="">انتخاب کنید</option>
                                            @foreach($car_categories as $type)
                                                <option value="{{$type['id']}}">{{$type['name']}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="car_id" class="form-label">ماشین تحویل داده شده</label>
                                        <select class="form-select" id="car_id" name="car_id" required>
                                            <option selected value="">انتخاب کنید</option>
                                        </select>
                                    </div>
                                    <input type="number" style="display: none" id="subcat_id" name="subcat_id" value="">
                                    <input type="number" style="display: none" id="project_id" name="project_id" value="">
                                    <input type="number" style="display: none" id="company_id" name="company_id" value="">
                                    <div class="col-md-3 mb-3">
                                        <label for="driverPhoto" class="form-label">آپلود عکس راننده</label>
                                        <input type="file" class="form-control form-control-sm" id="driverPhoto" name="driverPhoto" multiple accept="image/*">
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="documentPhoto" class="form-label">آپلود عکس مدارک</label>
                                        <input type="file" class="form-control form-control-sm" id="documentPhoto" name="documentPhoto" multiple accept="image/*">
                                    </div>
                                    <!-- <div class="col-6">
        <div class="d-flex justify-content-start align-items-start pt-5">
            <div class="me-10">
                <label class="form-label">کارت هوشمند</label>
                <div class="d-flex">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="smartCard" id="smartCardYes" value="1">
                        <label class="form-check-label" for="smartCardYes">دارد</label>
                    </div>
                    <div class="form-check ms-4">
                        <input class="form-check-input" type="radio" name="smartCard" id="smartCardNo" value="0">
                        <label class="form-check-label" for="smartCardNo">ندارد</label>
                    </div>
                </div>
            </div>
            <div class="me-10 ms-10">
                <label class="form-label">کارت سلامت</label>
                <div class="d-flex">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="healthCard" id="healthCardYes" value="1">
                        <label class="form-check-label" for="healthCardYes">دارد</label>
                    </div>
                    <div class="form-check ms-4">
                        <input class="form-check-input" type="radio" name="healthCard" id="healthCardNo" value="0">
                        <label class="form-check-label" for="healthCardNo">ندارد</label>
                    </div>
                </div>
            </div>
            <div class="ms-10">
                <label class="form-label">دفترچه اتوبوس</label>
                <div class="d-flex">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="busBooklet" id="busBookletYes" value="1">
                        <label class="form-check-label" for="busBookletYes">دارد</label>
                    </div>
                    <div class="form-check ms-4">
                        <input class="form-check-input" type="radio" name="busBooklet" id="busBookletNo" value="0">
                        <label class="form-check-label" for="busBookletNo">ندارد</label>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
                                </div>
                                <div class="col-12 text-end">
                                    <button type="submit" class="btn btn-primary">ثبت اطلاعات راننده جدید</button>
                                </div>
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

<script>
    function filter_car(id) {
        $.ajax({
            url: 'api/car-types/' + id,
            type: 'GET',
            success: function(response) {
                // Clear the current options in the select element
                let selectElement = $('#car_id');
                selectElement.empty();

                // Populate the select element with the fetched data
                $.each(response, function(key, value) {
                    selectElement.append($('<option>', {
                        value: key,
                        text: '( ' + value.cat_name + ' - ' + value.deviceCode + ' - ' + value.licensePlateNumber + ')'// assuming the response has a 'name' property
                    }));
                    document.getElementById('subcat_id').value = value.subcat_id
                    document.getElementById('company_id').value = value.company_id
                    document.getElementById('project_id').value = value.project_id
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching car types:', error);
            }
        });
    }
</script>
