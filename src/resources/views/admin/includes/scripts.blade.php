<script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('backend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/js/demo/datatables-demo.js') }}"></script>
<script src="{{ asset('backend/js/toastr.min.js') }}"></script>
<script src="{{ asset('backend/js/jscolor.js') }}"></script>
<script src="{{ asset('backend/js/jquery.timepicker.js') }}"></script>
<script src="{{ asset('backend/js/jquery-ui.js') }}"></script>
<script src="{{ asset('backend/js/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('backend/js/print.min.js') }}"></script>
<script src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>
{{-- <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script> --}}
{{-- <script src="https://printjs-4de6.kxcdn.com/print.min.css"></script> --}}

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script> --}}

<script>
    $(document).ready(function() {
        const permissionsCheckboxAll = document.querySelector(".permission-select-all");

        // USER ROLE PERMISSIONS SELECTOR 
        const permissions = Array.from($(".permission-item"));

        $(".permission-item").each((index, item) => {
            if (!item.checked) {
                permissionsCheckboxAll.checked = false;
                return false;
            } else {
                permissionsCheckboxAll.setAttribute('checked', true)
            }
        })

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
                    permissionsCheckboxAll.checked = true;
                } else {
                    permissionsCheckboxAll.checked = null;
                }
            } else {
                permissionsCheckboxAll.checked = null;
            }
        })


        /** GET REGISTRATION DOCUMENT (VIEW) AND FEEDING LOADED VIEW TO PRINT.JS */
        $(".btn.btn-danger.export").click(function(event) {

            let doc_url = event.target.getAttribute("export-url");

            $.ajax({
                url: doc_url,
                success: function(result) {
                    
                    $(".pdf-export-result-wrapper").html(result);
                    
                },
                error: function(err) {
                    console.log(err);
                },
                complete: function () {
                    $(".pdf-export-result-wrapper").attr("hidden", false);
                    printJS('pdf-export-result-wrapper', 'html');
                    $(".pdf-export-result-wrapper").attr("hidden", true);
                }
            });
        });
    })
</script>
