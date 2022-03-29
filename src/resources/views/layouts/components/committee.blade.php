<section id="strukturPengurus">
    <div class="container-fluid py-5">
        <div class="head_strukturPengurus mb-5">
            <h2>{{ $title }}</h2>
            <div class="border_heading_strukturPengurus mb-4"></div>
            <div class="d-flex flex-wrap justify-content-between">
                <p>{{ $detail }}</p>
                <a style="background-color: #F8F8F8; color: #263840;"
                    class="px-3 py-2 mt-2 mt-md-1 link_selengkapnya_struktur_pengurus" href="/about">Selengkapnya
                    <span>→</span></a>
            </div>
        </div>
        <div class="multi-item-carousel">
            <div class="owl-carousel owl-theme carousel_kepengurusan">
                @foreach ($committee as $committee)
                    <div class="item position-relative">
                        <div class="overlay_multiple_item_carousel position-absolute">
                            <div class="content_overlay_multiple_item_carousel">
                                <p class="name_text_overlay">{{ $committee->name }}</p>
                                <p class="role_text_overlay">{{ $committee->designation }}</p>
                                <div class="sossial_media_multiple_carousel d-flex justify-content-center mb-5">
                                    @if ($committee->facebook)
                                        <a href="{{ $committee->facebook }}" class="text-decoration-none text-white">
                                            <i style="height: 22px; width: 22px;" class="fab  fa-facebook"></i>
                                        </a>
                                    @endif
                                    @if ($committee->twitter)
                                    <a href="{{ $committee->twitter }}" class="text-decoration-none text-white">
                                        <i style="height: 22px; width: 22px;" class="fab  fa-twitter"></i>
                                    </a>
                                    @endif
                                    @if ($committee->linkedin)
                                    <a href="{{ $committee->linkedin }}" class="text-decoration-none text-white">
                                        <i style="height: 22px; width: 22px;" class="fab  fa-linkedin"></i>
                                    </a>
                                    @endif
                                    @if ($committee->youtube)
                                    <a href="{{ $committee->youtube }}" class="text-decoration-none text-white">
                                        <i style="height: 22px; width: 22px;" class="fab  fa-youtube"></i>
                                    </a>
                                    @endif
                                    @if ($committee->instagram)
                                    <a href="{{ $committee->instagram }}" class="text-decoration-none text-white">
                                        <i style="height: 22px; width: 22px;" class="fab  fa-instagram"></i>
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <img style="height: 100%; object-fit: cover;"
                            src="{{ asset('uploads/') . "/$committee->photo" }}" alt="commite1">
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
