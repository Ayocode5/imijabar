{{-- @if($g_setting?->google_analytic_status == 'Show')
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id={{ $g_setting->google_analytic_tracking_id }}"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-84213520-6');
</script>
@endif


@if($g_setting?->cookie_consent_status == 'Show')
<script>
    window.addEventListener("load", function(){
        window.cookieconsent.initialise({
            "palette": {
                "popup": {
                    "background": "#000"
                },
                "button": {
                    "background": "#f1d600"
                }
            },
            "position": "bottom-left"
        })});
</script>
@endif --}}

<!-- All JS -->
<script src="{{ asset('public/frontend/js/cookieconsent.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/wow.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/jquery.meanmenu.js') }}"></script>
<script src="{{ asset('public/frontend/js/waypoints.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('public/frontend/js/select2.full.js') }}"></script>
<script src="{{ asset('public/frontend/js/toastr.min.js') }}"></script>
<script src="https://www.paypalobjects.com/api/checkout.js"></script>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->
{{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script> --}}

<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<!-- <script src="typewriter.js"></script> -->

<script src="{{asset('storage/app/public/assets/js')}}/DOM.js"></script>