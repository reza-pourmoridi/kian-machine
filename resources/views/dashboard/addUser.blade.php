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
                                <span class="card-label fw-bold fs-3 mb-1">ثبت اطلاعات کاربر جدید</span>
                            </h3>
                        </div>
                        <!--end::Header-->
                        <!--begin::Body-->
                        <div class="card-body py-0">
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if($errors->any())
                                <div class="alert alert-danger">
                                    {{ $errors->first('msg') }}
                                </div>
                            @endif

                            <form class="pb-7" action="{{ route('dashboard.addUserStore') }}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row pb-4">
                                    <div class="col-2 mb-3">
                                        <label for="name" class="form-label">نام</label>
                                        <input type="text" class="form-control" id="name" name="name" required>
                                    </div>
                                    <div class="col-2 mb-3">
                                        <label for="last_name" class="form-label">نام خانوادگی</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                                    </div>
                                    <div class="col-2 mb-3">
                                        <label for="national_number" class="form-label">کدملی</label>
                                        <input type="text" class="form-control" id="national_number" name="national_number">
                                    </div>
                                    <div class="col-2 mb-3">
                                        <label for="phone_number" class="form-label">شماره تماس</label>
                                        <input type="text" class="form-control" id="phone_number" name="phone_number" required>
                                    </div>
                                    <div class="col-2 mb-3">
                                        <label for="role_id" class="form-label">نقش</label>
                                        <select class="form-control" id="role_id" name="role_id" required>
                                            <option>انتخاب کنید</option>
                                            @foreach($roles as $role)
                                                <option value="{{ $role['id'] }}">{{ $role['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-2 mb-3">
                                        <label for="hashed_pass" class="form-label">پسورد</label>
                                        <input type="text" class="form-control" id="hashed_pass" name="hashed_pass" required>
                                    </div>
                                    <div class="col-12 mb-3 text-end">
                                        <button type="submit" class="btn btn-primary mt-8">ثبت اطلاعات کاربر جدید</button>
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
