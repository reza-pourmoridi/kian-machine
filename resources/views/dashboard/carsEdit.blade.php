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
                                        <span class="card-label fw-bold fs-3 mb-1">افزودن اطلاعات دستگاه جدید</span>
                                    </h3>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body py-0">
                                    @if (session('car_form_message'))
                                        <div class="alert alert-success">
                                            {{ session('car_form_message') }}
                                        </div>
                                    @endif
                                    <form class="pb-7" action="{{ route('dashboard.carsUpdate', ['id' => $car_detail[0]['id']]) }}"  method="post" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row pb-4">
                                            <div class="col-md-3 mb-3">
                                                <label for="company_id" class="form-label">شرکت</label>
                                                <select class="form-select" id="company_id" name="company_id" required onchange="filter_project(this.value)">
                                                    @foreach($company as $c)
                                                        <option @if($car_detail[0]['company_id'] == $c['id']) selected @endif
                                                        value="{{$c['id']}}">{{$c['name']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="project_id" class="form-label">پروژه</label>
                                                <select class="form-select" id="project_id" name="project_id" required>
                                                    @foreach($project as $p)
                                                        <option @if($car_detail[0]['project_id'] == $p['id']) selected @endif
                                                        value="{{$p['id']}}">{{$p['name']}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="model" class="form-label">تیپ</label>
                                                <input value="{{$car_info_detail[0]['model']}}" type="text" class="form-control" id="model" name="model" required>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="deviceCode" class="form-label">کد دستگاه</label>
                                                <input value="{{$car_detail[0]['deviceCode']}}" type="text" class="form-control" id="deviceCode" name="deviceCode" required>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="licensePlateNumber" class="form-label">شماره پلاک</label>
                                                <input value="{{$car_detail[0]['licensePlateNumber']}}" type="text" class="form-control" id="licensePlateNumber" name="licensePlateNumber" required>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="cat_id" class="form-label">نوع خودرو</label>
                                                <select onchange="filter_car(this.value)" class="form-select" id="fuel" name="cat_id" required>
                                                    @foreach($car_type as $ct)
                                                        <option @if($car_detail[0]['cat_id'] == $ct['id']) selected @endif value="{{$ct['id']}}">{{$ct['name']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-3 mb-3">
                                                <label for="subcat_id" class="form-label">سیستم</label>
                                                <select class="form-select" id="subcat_id" name="subcat_id" required>
                                                    @foreach($car_sub_type as $ct)
                                                        <option  @if($car_detail[0]['subcat_id'] == $ct['id']) selected @endif  value="{{$ct['id']}}">{{$ct['name']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-1 col-md-2 mb-3">
                                                <label for="cylinderCount" class="form-label">تعداد سیلندر</label>
                                                <input  value="{{$car_info_detail[0]['cylinderCount']}}"type="text" class="form-control" id="cylinderCount" name="cylinderCount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1')" maxlength="2">
                                            </div>
                                            <div class="col-lg-1 col-md-2 mb-3">
                                                <label for="axleCount" class="form-label">تعداد محور</label>
                                                <input  value="{{$car_info_detail[0]['axleCount']}}"type="text" class="form-control" id="axleCount" name="axleCount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1')" maxlength="3">
                                            </div>
                                            <div class="col-lg-1 col-md-2 mb-3">
                                                <label for="wheelCount" class="form-label">تعداد چرخ</label>
                                                <input  value="{{$car_info_detail[0]['wheelCount']}}"type="text" class="form-control" id="wheelCount" name="wheelCount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1')" maxlength="3">
                                            </div>
                                            <div class="col-lg-1 col-md-2 mb-3">
                                                <label for="plateYear" class="form-label">سال ساخت</label>
                                                <input  value="{{$car_info_detail[0]['plateYear']}}"type="text" class="form-control" id="plateYear" name="plateYear" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1')" maxlength="4">
                                            </div>
                                            <div class="col-lg-1 col-md-2 mb-3">
                                                <label for="color" class="form-label">رنگ</label>
                                                <input  value="{{$car_info_detail[0]['color']}}"type="text" class="form-control" id="color" name="color">
                                            </div>
                                            <div class="col-lg-1 col-md-2 mb-3">
                                                <label for="countryOfManufacture" class="form-label">کشور سازنده</label>
                                                <input  value="{{$car_info_detail[0]['countryOfManufacture']}}"type="text" class="form-control" id="countryOfManufacture" name="countryOfManufacture">
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="vin" class="form-label">شناسه VIN</label>
                                                <input  value="{{$car_info_detail[0]['vin']}}"type="text" class="form-control" id="vin" name="vin">
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="engineNumber" class="form-label">شماره موتور</label>
                                                <input  value="{{$car_info_detail[0]['engineNumber']}}"type="text" class="form-control" id="engineNumber" name="engineNumber">
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="chassisNumber" class="form-label">شماره شاسی</label>
                                                <input  value="{{$car_info_detail[0]['chassisNumber']}}"type="text" class="form-control" id="chassisNumber" name="chassisNumber">
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="bodyNumber" class="form-label">شماره بدنه</label>
                                                <input  value="{{$car_info_detail[0]['bodyNumber']}}"type="text" class="form-control" id="bodyNumber" name="bodyNumber">
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="fuel" class="form-label">سوخت</label>
                                                <select class="form-select" id="fuel" name="fuel" required>
                                                    <option @if($car_info_detail[0]['fuel'] == 'Petrol') selected @endif   value="Petrol">بنزین</option>
                                                    <option @if($car_info_detail[0]['fuel'] == 'Diesel') selected @endif value="Diesel">دیزل</option>>
                                                </select>
                                            </div>
                                            <div class="col-md-2 mb-3">
                                                <label for="ownership" class="form-label">مالکیت</label>
                                                <input  value="{{$car_info_detail[0]['ownership']}}"type="text" class="form-control" id="ownership" name="ownership">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label for="nationalId" class="form-label">کدملی</label>
                                                <input  value="{{$car_info_detail[0]['nationalId']}}"type="text" class="form-control" id="nationalId" name="nationalId">
                                            </div>
                                            <!-- <div class="col-md-2 mb-3">
				<label for="registrationNumber" class="form-label">شماره ثبت</label>
				<input type="text" class="form-control" id="registrationNumber" name="registrationNumber">
			</div> -->
                                            <div class="col-md-4 mb-3">
                                                <label for="purchaseDate" class="form-label">تاریخ خرید</label>
                                                <input value="{{$car_info_detail[0]['purchaseDate']}}" type="text" class="form-control" id="purchaseDate" name="purchaseDate">
                                            </div>
                                            <!-- <div class="col-md-2 mb-3">
				<label for="unitCode" class="form-label">کد واحد</label>
				<input type="text" class="form-control" id="unitCode" name="unitCode">
			</div> -->
                                            <div class="col-md-4 mb-3">
                                                <label for="tireBody" class="form-label">لاستیک‌ها</label>
                                                <input value="{{$car_info_detail[0]['tireBody']}}" type="text" class="form-control" id="tireBody" name="tireBody">
                                            </div>
                                            <div class="col-lg-2 col-md-2 mb-5">
                                                <div class="me-10">
                                                    <label class="form-label">بدنه</label>
                                                    <div class="d-flex">
                                                        <div class="form-check">
                                                            <input  @if($car_info_detail[0]['carBody'] == '1') checked @endif  class="form-check-input" type="radio" name="carBody" id="carBodyYes" value="1">
                                                            <label class="form-check-label" for="carBodyYes">سالم</label>
                                                        </div>
                                                        <div class="form-check ms-4">
                                                            <input @if($car_info_detail[0]['carBody'] == '0') checked @endif class="form-check-input" type="radio" name="carBody" id="carBodyNo" value="0">
                                                            <label class="form-check-label" for="carBodyNo">نا سالم</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 mb-5">
                                                <div class="me-10">
                                                    <label class="form-label">سپر</label>
                                                    <div class="d-flex">
                                                        <div class="form-check">
                                                            <input @if($car_info_detail[0]['shieldBody'] == '1') checked @endif  class="form-check-input" type="radio" name="shieldBody" id="shieldBodyYes" value="1">
                                                            <label class="form-check-label" for="shieldBodyYes">سالم</label>
                                                        </div>
                                                        <div class="form-check ms-4">
                                                            <input @if($car_info_detail[0]['shieldBody'] == '0') checked @endif  class="form-check-input" type="radio" name="shieldBody" id="shieldBodyNo" value="0">
                                                            <label class="form-check-label" for="shieldBodyNo">نا سالم</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 mb-5">
                                                <div class="me-10">
                                                    <label class="form-label">شیشه</label>
                                                    <div class="d-flex">
                                                        <div class="form-check">
                                                            <input @if($car_info_detail[0]['glassBody'] == '1') checked @endif class="form-check-input" type="radio" name="glassBody" id="glassBodyYes" value="1">
                                                            <label class="form-check-label" for="shieldBodyYes">سالم</label>
                                                        </div>
                                                        <div class="form-check ms-4">
                                                            <input @if($car_info_detail[0]['glassBody'] == '0') checked @endif class="form-check-input" type="radio" name="glassBody" id="glassBodyNo" value="0">
                                                            <label class="form-check-label" for="glassBodyNo">نا سالم</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 mb-5">
                                                <div class="me-10">
                                                    <label class="form-label">فنی و موتوری</label>
                                                    <div class="d-flex">
                                                        <div class="form-check">
                                                            <input @if($car_info_detail[0]['motorBody'] == '1') checked @endif class="form-check-input" type="radio" name="motorBody" id="motorBodyYes" value="1">
                                                            <label class="form-check-label" for="shieldBodyYes">سالم</label>
                                                        </div>
                                                        <div class="form-check ms-4">
                                                            <input @if($car_info_detail[0]['motorBody'] == '0') checked @endif class="form-check-input" type="radio" name="motorBody" id="motorBodyNo" value="0">
                                                            <label class="form-check-label" for="motorBodyNo">نا سالم</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 mb-5">
                                                <div class="me-10">
                                                    <label class="form-label">آمپر</label>
                                                    <div class="d-flex">
                                                        <div class="form-check">
                                                            <input @if($car_info_detail[0]['ampBody'] == '1') checked @endif  class="form-check-input" type="radio" name="ampBody" id="ampBodyYes" value="1">
                                                            <label class="form-check-label" for="shieldBodyYes">سالم</label>
                                                        </div>
                                                        <div class="form-check ms-4">
                                                            <input @if($car_info_detail[0]['ampBody'] == '0') checked @endif  class="form-check-input" type="radio" name="ampBody" id="ampBodyNo" value="0">
                                                            <label class="form-check-label" for="ampBodyNo">نا سالم</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 mb-5">
                                                <div class="me-10">
                                                    <label class="form-label">روشنایی</label>
                                                    <div class="d-flex">
                                                        <div class="form-check">
                                                            <input @if($car_info_detail[0]['lightingBody'] == '1') checked @endif class="form-check-input" type="radio" name="lightingBody" id="lightingBodyYes" value="1">
                                                            <label class="form-check-label" for="lightingBodyYes">سالم</label>
                                                        </div>
                                                        <div class="form-check ms-4">
                                                            <input @if($car_info_detail[0]['lightingBody'] == '0') checked @endif class="form-check-input" type="radio" name="lightingBody" id="lightingBodyNo" value="0">
                                                            <label class="form-check-label" for="lightingBodyNo">نا سالم</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 mb-5">
                                                <div class="me-10">
                                                    <label class="form-label">صندلی و روکش</label>
                                                    <div class="d-flex">
                                                        <div class="form-check">
                                                            <input  @if($car_info_detail[0]['seatBody'] == '1') checked @endif  class="form-check-input" type="radio" name="seatBody" id="seatBodyYes" value="1">
                                                            <label class="form-check-label" for="seatBodyYes">سالم</label>
                                                        </div>
                                                        <div class="form-check ms-4">
                                                            <input  @if($car_info_detail[0]['seatBody'] == '0') checked @endif  class="form-check-input" type="radio" name="seatBody" id="seatBodyNo" value="0">
                                                            <label class="form-check-label" for="seatBodyNo">نا سالم</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 mb-5">
                                                <div class="me-10">
                                                    <label class="form-label">سیستم صوتی</label>
                                                    <div class="d-flex">
                                                        <div class="form-check">
                                                            <input  @if($car_info_detail[0]['voiceBody'] == '1') checked @endif class="form-check-input" type="radio" name="voiceBody" id="voiceBodyYes" value="1">
                                                            <label class="form-check-label" for="voiceBodyYes">سالم</label>
                                                        </div>
                                                        <div class="form-check ms-4">
                                                            <input @if($car_info_detail[0]['voiceBody'] == '0') checked @endif  class="form-check-input" type="radio" name="voiceBody" id="voiceBodyNo" value="0">
                                                            <label class="form-check-label" for="voiceBodyNo">نا سالم</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 mb-5">
                                                <div class="me-10">
                                                    <label class="form-label">کولر و بخاری</label>
                                                    <div class="d-flex">
                                                        <div class="form-check">
                                                            <input  @if($car_info_detail[0]['coolerBody'] == '1') checked @endif  class="form-check-input" type="radio" name="coolerBody" id="coolerBodyYes" value="1">
                                                            <label class="form-check-label" for="coolerBodyYes">سالم</label>
                                                        </div>
                                                        <div class="form-check ms-4">
                                                            <input  @if($car_info_detail[0]['coolerBody'] == '0') checked @endif  class="form-check-input" type="radio" name="coolerBody" id="coolerBodyNo" value="0">
                                                            <label class="form-check-label" for="coolerBodyNo">نا سالم</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-2 mb-5">
                                                <div class="me-10">
                                                    <label class="form-label">پلاک و کد</label>
                                                    <div class="d-flex">
                                                        <div class="form-check">
                                                            <input  @if($car_info_detail[0]['codeBody'] == '1') checked @endif  class="form-check-input" type="radio" name="codeBody" id="codeBodyYes" value="1">
                                                            <label class="form-check-label" for="codeBodyYes">سالم</label>
                                                        </div>
                                                        <div class="form-check ms-4">
                                                            <input  @if($car_info_detail[0]['codeBody'] == '0') checked @endif  class="form-check-input" type="radio" name="codeBody" id="codeBodyNo" value="0">
                                                            <label class="form-check-label" for="codeBodyNo">نا سالم</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-12 mb-3">
                                                <label for="registrationNumber" class="form-label">توضیحات</label>
                                                <textarea class="form-control" id="registrationNumber" name="registrationNumber">
                                                    {{$car_info_detail[0]['registrationNumber']}}
                                                </textarea>
                                            </div>
                                            <div class="col-lg-2 col-md-12 mb-3">
                                                <button type="submit" class="btn btn-primary mt-8 mx-0 w-100">ثبت تغییرات</button>
                                            </div>
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
    var url = '{{ url('/') }}';

    function filter_project(id) {
        $.ajax({
            url: url + '/api/company-projects/' + id,
            type: 'GET',
            success: function(response) {
                // Clear the current options in the select element
                let selectElement = $('#project_id');
                selectElement.empty();

                // Populate the select element with the fetched data
                $.each(response, function(key, value) {
                    selectElement.append($('<option>', {
                        value: key,
                        text:  value.name// assuming the response has a 'name' property
                    }));
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching company projects:', error);
            }
        });
    }

    function filter_car(id) {
        $.ajax({
            url: url + '/api/car-sub-types/' + id,
            type: 'GET',
            success: function(response) {
                // Clear the current options in the select element
                let selectElement = $('#subcat_id');
                selectElement.empty();

                // Populate the select element with the fetched data
                $.each(response, function(key, value) {
                    selectElement.append($('<option>', {
                        value: key,
                        text:  value.name// assuming the response has a 'name' property
                    }));
                });
            },
            error: function(xhr, status, error) {
                console.error('Error fetching car types:', error);
            }
        });
    }
</script>
