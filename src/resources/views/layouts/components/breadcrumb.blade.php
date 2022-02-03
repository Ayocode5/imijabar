<!-- START BREADCRUMB -->
<section id="breadcumb">
    <div class="container-fluid wrap_breadcumb py-3">
        <div class="d-flex align-items-center">
            <a href="{{ url('/') }}">
                <img src="{{ asset('storage/app/public/assets/') }}/img/icon-arrow-back.png" alt="back icon"
                    style="width: 24px; height: 24px; margin-right: 20px;">
            </a>
            <a class="mr-2" href="{{ url('/') }}" style="color: #000; text-decoration: none;">Home
            </a>
            <a href="#" style="color: #000; text-decoration: none; font-weight: 700;"> / &nbsp; {{ $url_path }}
            </a>
        </div>
    </div>
</section>
<!-- END BREADCRUMB -->