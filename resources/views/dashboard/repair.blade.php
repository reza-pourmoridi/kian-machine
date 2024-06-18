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
                                        <span class="card-label fw-bold fs-3 mb-1">ثبت درخواست تعمیر</span>
                                    </h3>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body py-0">


                                    <form>
                                        <div class="mb-3">
                                            <label for="requestCode" class="form-label">کد درخواست</label>
                                            <input type="text" class="form-control" id="requestCode" name="requestCode">
                                        </div>
                                        <div class="mb-3">
                                            <label for="requestingProject" class="form-label">پروژه درخواست کننده</label>
                                            <input type="text" class="form-control" id="requestingProject" name="requestingProject">
                                        </div>
                                        <div class="mb-3">
                                            <label for="requestManager" class="form-label">مسئول درخواست کننده</label>
                                            <input type="text" class="form-control" id="requestManager" name="requestManager">
                                        </div>
                                        <div class="mb-3">
                                            <label for="deviceCategory" class="form-label">دسته دستگاه</label>
                                            <input type="text" class="form-control" id="deviceCategory" name="deviceCategory">
                                        </div>
                                        <div class="mb-3">
                                            <label for="deviceSelection" class="form-label">انتخاب دستگاه</label>
                                            <select class="form-select" id="deviceSelection" name="deviceSelection">
                                                <!-- Options here based on available devices -->
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="deviceInfo" class="form-label">اطلاعات عمومی دستگاه</label>
                                            <textarea class="form-control" id="deviceInfo" name="deviceInfo"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="lastOperation" class="form-label">آخرین کارکرد</label>
                                            <input type="text" class="form-control" id="lastOperation" name="lastOperation">
                                        </div>
                                        <div class="mb-3">
                                            <label for="requestDate" class="form-label">تاریخ درخواست</label>
                                            <input type="date" class="form-control" id="requestDate" name="requestDate">
                                        </div>
                                        <div class="mb-3">
                                            <label for="faultCode" class="form-label">کد خرابی</label>
                                            <input type="text" class="form-control" id="faultCode" name="faultCode">
                                        </div>
                                        <div class="mb-3">
                                            <label for="faultDescription" class="form-label">شرح عیب</label>
                                            <textarea class="form-control" id="faultDescription" name="faultDescription"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="deviceStatus" class="form-label">وضعیت دستگاه</label>
                                            <select class="form-select" id="deviceStatus" name="deviceStatus">
                                                <option value="operational">عملیاتی</option>
                                                <option value="nonOperational">غیر عملیاتی</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="stopDate" class="form-label">تاریخ توقف</label>
                                            <input type="date" class="form-control" id="stopDate" name="stopDate">
                                        </div>
                                        <div class="mb-3">
                                            <label for="stopTime" class="form-label">ساعت توقف</label>
                                            <input type="time" class="form-control" id="stopTime" name="stopTime">
                                        </div>
                                        <button type="submit" class="btn btn-primary">ثبت درخواست</button>
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

