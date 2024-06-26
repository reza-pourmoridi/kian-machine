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
                                        <div class="row pb-2">
                                            <div class="col-6">
                                                <label for="request_code" class="form-label">کد تعمیر</label>
                                                <input disabled  value="139" type="text" class="form-control" id="request_code" name="request_code">
                                            </div>
                                            <div class="col-6">
                                                <label for="user" class="form-label">درخواست کننده</label>
                                                <input disabled value="احسان آهنین" type="text" class="form-control" id="user" name="user">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="requestingProject" class="form-label">پروژه</label>
                                            <select class="form-control" id="project" name="project">
                                                <option selected> انتخاب کنید </option>
                                            </select>
                                        </div>
                                        <div class="row pb-2">
                                            <div class="col-6">
                                                <label for="request_code" class="form-label">نوع دستگاه</label>
                                                <select    type="text" class="form-control" id="cat_id" name="cat_id">
                                                    <option>انتخاب کنید</option>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <label for="user" class="form-label">سیستم</label>
                                                <select   type="text" class="form-control" id="subcat_id" name="subcat_id">
                                                    <option>انتخاب کنید</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="requestManager" class="form-label">انتخاب خودرو</label>
                                            <input type="text" class="form-control" id="car" name="car">
                                        </div>
                                        <div class="row pb-2">
                                            <div class="col-6">
                                                <label for="last_work" class="form-label">آخرین کارکرد</label>
                                                <input    type="time" class="form-control" id="last_work" name="last_work">
                                            </div>
                                            <div class="col-6">
                                                <label for="user" class="form-label">تاریخ درخواست</label>
                                                <input   type="date" class="form-control" id="request_date" name="request_date">
                                        </div>
                                        <div class="row pb-2">
                                            <div class="col-6 mb-3">
                                                <label for="issue_kind" class="form-label">نوع تعمیر</label>
                                                <select class="form-control" id="issue_kind" name="issue_kind">
                                                    <option>انتخاب کنید</option>
                                                    <option value="priventing">پیشگیرانه</option>
                                                    <option value="repair">اضطراری</option>
                                                    <option value="upgrade">ارتقا</option>
                                                    <option value="correction">اصلاحی</option>
                                                </select>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <label for="issue_code" class="form-label">کد تعمیر</label>
                                                <input type="text" class="form-control" id="issue_code" name="issue_code">
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="deviceSelection" class="form-label">شرح خرابی</label>
                                            <textarea class="form-control" id="description" name="description"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="issue_code" class="form-label">عکس وضعیت خرابی</label>
                                            <input type="file"  multiple accept="image/*" class="form-control" id="image" name="image">
                                        </div>
                                        <div class="mb-3">
                                            <label for="car_status" class="form-label">وضعیت دستگاه</label>
                                            <select  class="form-control" id="car_status" name="car_status">
                                                <option value="working">انتخاب کنید</option>
                                                <option value="working">درحال کار</option>
                                                <option value="stopped">متوقف</option>
                                            </select>
                                        </div>
                                        <div class="row pb-2">
                                            <div class="col-6">
                                                <label for="stopped_at_hour" class="form-label">ساعت توقف</label>
                                                <input    type="time" class="form-control" id="stopped_at_hour" name="stopped_at_hour">
                                            </div>
                                            <div class="col-6">
                                                <label for="stopped_at_date" class="form-label">تاریخ توقف</label>
                                                <input   type="date" class="form-control" id="stopped_at_date" name="stopped_at_date">
                                            </div>
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

