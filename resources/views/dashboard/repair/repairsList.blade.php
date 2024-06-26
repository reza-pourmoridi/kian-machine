@extends('dashboard.template.app')
<style>
    .fas.fa-external-link-alt {
        color: black;
    }
</style>
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
                                <span class="card-label fw-bold fs-3 mb-1">لیست درخواست‌های تعمیر</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-0">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th scope="col">ردیف</th>
                                        <th scope="col">درخواست کننده</th>
                                        <th scope="col">پروژه</th>
                                        <th scope="col">نوع دستگاه</th>
                                        <th scope="col">سیستم</th>
                                        <th scope="col">انتخاب خودرو</th>
                                        <th scope="col">آخرین کارکرد</th>
                                        <th scope="col">تاریخ درخواست</th>
                                        <th scope="col">نوع تعمیر</th>
                                        <th scope="col">وضعیت دستگاه</th>
                                        <th scope="col">ارجاع</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <tr style="background: #e32323;" >
                                        <td>1</td>
                                        <td>احسان آهنین</td>
                                        <td>پروژه A</td>
                                        <td>دستگاه X</td>
                                        <td>سیستم Y</td>
                                        <td>خودرو 1</td>
                                        <td>10:00</td>
                                        <td>2024-06-25</td>
                                        <td>پیشگیرانه</td>
                                        <td>درحال کار</td>
                                        <td class="text-center align-middle"><a href="#" data-bs-toggle="modal" data-bs-target="#referralModal1"><i class="fas fa-external-link-alt"></i></a></td>
                                    </tr>
                                    <tr style="background: #9daff7;" >
                                        <td>2</td>
                                        <td>علی مرادی</td>
                                        <td>پروژه B</td>
                                        <td>دستگاه Y</td>
                                        <td>سیستم Z</td>
                                        <td>خودرو 2</td>
                                        <td>12:00</td>
                                        <td>2024-06-26</td>
                                        <td>اضطراری</td>
                                        <td>متوقف</td>
                                        <td class="text-center align-middle"><a href="#" data-bs-toggle="modal" data-bs-target="#referralModal2"><i class="fas fa-external-link-alt"></i></a></td>
                                    </tr>
                                    <tr style="background: #eaea50;" >
                                        <td>3</td>
                                        <td>زهرا نادری</td>
                                        <td>پروژه C</td>
                                        <td>دستگاه Z</td>
                                        <td>سیستم W</td>
                                        <td>خودرو 3</td>
                                        <td>14:30</td>
                                        <td>2024-06-27</td>
                                        <td>ارتقا</td>
                                        <td>درحال کار</td>
                                        <td class="text-center align-middle"><a href="#" data-bs-toggle="modal" data-bs-target="#referralModal3"><i class="fas fa-external-link-alt"></i></a></td>
                                    </tr>
                                    <tr style="background: #f7b494;" >
                                        <td>3</td>
                                        <td>زهرا نادری</td>
                                        <td>پروژه C</td>
                                        <td>دستگاه Z</td>
                                        <td>سیستم W</td>
                                        <td>خودرو 3</td>
                                        <td>14:30</td>
                                        <td>2024-06-27</td>
                                        <td>ارتقا</td>
                                        <td>درحال کار</td>
                                        <td class="text-center align-middle"><a href="#" data-bs-toggle="modal" data-bs-target="#referralModal3"><i class="fas fa-external-link-alt"></i></a></td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Table Widget 6-->
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Post-->
    </div>

    <!-- Referral Modal -->
    <div class="modal fade" id="referralModal1" tabindex="-1" aria-labelledby="referralModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="referralModalLabel">ارجاع درخواست</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="referralSelect1" class="form-label">ارجاع به</label>
                            <select class="form-select" id="referralSelect1" name="referralSelect1">
                                <option selected>انتخاب کنید</option>
                                <option value="1">گزینه 1</option>
                                <option value="2">گزینه 2</option>
                                <option value="3">گزینه 3</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">ارسال</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Referral Modal 2 -->
    <div class="modal fade" id="referralModal2" tabindex="-1" aria-labelledby="referralModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="referralModalLabel">ارجاع درخواست</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="referralSelect2" class="form-label">ارجاع به</label>
                            <select class="form-select" id="referralSelect2" name="referralSelect2">
                                <option selected>انتخاب کنید</option>
                                <option value="1">گزینه 1</option>
                                <option value="2">گزینه 2</option>
                                <option value="3">گزینه 3</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">ارسال</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Referral Modal 3 -->
    <div class="modal fade" id="referralModal3" tabindex="-1" aria-labelledby="referralModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="referralModalLabel">ارجاع درخواست</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="referralSelect3" class="form-label">ارجاع به</label>
                            <select class="form-select" id="referralSelect3" name="referralSelect3">
                                <option selected>انتخاب کنید</option>
                                <option value="1">گزینه 1</option>
                                <option value="2">گزینه 2</option>
                                <option value="3">گزینه 3</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">ارسال</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
