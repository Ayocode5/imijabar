<script src="{{ asset('public/backend/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('public/backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('public/backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('public/backend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/backend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('public/backend/js/demo/datatables-demo.js') }}"></script>
<script src="{{ asset('public/backend/js/toastr.min.js') }}"></script>
<script src="{{ asset('public/backend/js/jscolor.js') }}"></script>
<script src="{{ asset('public/backend/js/jquery.timepicker.js') }}"></script>
<script src="{{ asset('public/backend/js/jquery-ui.js') }}"></script>
<script src="{{ asset('public/backend/js/summernote-bs4.min.js') }}"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
<script>
    $(document).ready(function() {
        const selectAllCheckbox = document.querySelector(".permission-select-all");

        $(".permission-item").each((index, item) => {
            if(!item.checked) {
                selectAllCheckbox.checked = false;
                return false;
            } else {
                selectAllCheckbox.setAttribute('checked', true)
            }
        })


        // PERMISSIONS SELECTOR 
        const permissions = Array.from($(".permission-item"));
        $(".permission-select-all").click(() => {
            const total_permissions = permissions.length;
            let total_checked_permissions = 0;
            permissions.forEach(permission => {
                if (permission.checked) {
                    total_checked_permissions += 1;
                }
            });
            if (total_checked_permissions != total_permissions) {
                permissions.forEach(permission => {
                    permission.checked = true;
                });
            } else {
                permissions.forEach(permission => {
                    permission.checked = null;
                });
            }
        })
        $(".permission-item").click((e) => {
            if (e.currentTarget.checked) {
                const total_permissions = permissions.length
                let total_checked_permissions = 0;
                permissions.forEach(permission => {
                    if (permission.checked) {
                        total_checked_permissions += 1;
                    }
                });
                if (total_checked_permissions == total_permissions) {
                     selectAllCheckbox.checked = true;
                } else {
                    selectAllCheckbox.checked = null;
                }
            } else {
                selectAllCheckbox.checked = null;
            }
        })
    })
</script>
