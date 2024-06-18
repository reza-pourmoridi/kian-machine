</body>
</html>					<!--end::Footer-->
</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
<!--end::Root-->
<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
<script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
</body>
</html><script>
    function filterCars(val) {
        $('.cars-items').each(function () {
            var html = $(this).html();
            if (val == '') {
                $(this).show();
            } else {
                if (html.includes(val))
                    $(this).show();
                else
                    $(this).hide();
            }
        })

    }

    function changeProject(company_id, car_id) {
        $.get("cars.php?state=get_projects&company_id=" + company_id, function (data, status) {
            data = JSON.parse(data);
            $('#projects').empty();
            data.forEach(function (item) {
                var option = new Option(item.title, item.id, item.id == company_id);
                $('#projects').append(option);
            })
            $('#projects').trigger('change');
            $('#car_id').val(car_id);
            var myModal = new bootstrap.Modal(document.getElementById("mdlEditProject"), {});
            myModal.show();
        });
    }
</script>
<div class="modal fade" tabindex="-1" id="mdlEditProject">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">انتقال ماشین به پروژه دیگر</h3>
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                </div>
            </div>
            <form method="post">
                <div class="modal-body">
                    <select name="project_id" id="projects" class="w-100"></select>
                </div>
                <input type="hidden" id="car_id" name="car_id">
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">انصراف</button>
                    <button type="submit" class="btn btn-primary">انتقال به پروژه</button>
                </div>
            </form>
        </div>
    </div>
</div>


