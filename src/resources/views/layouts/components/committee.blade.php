<!-- START KEPENGURUSAN -->
<section id="strukturPengurus">
    <div class="container-fluid py-5">
        <div class="head_strukturPengurus mb-5">
            <h2>{{ $home_settings->committee_title }}</h2>
            <div class="border_heading_strukturPengurus mb-4"></div>
            <div class="d-flex flex-wrap justify-content-between">
                <p>{{ $home_settings->committee_detail }}</p>
                <a style="background-color: #F8F8F8; color: #263840;"
                    class="px-3 py-2 mt-2 mt-md-1 link_selengkapnya_struktur_pengurus" href="#">Selengkapnya
                    <span>→</span></a>
            </div>
        </div>
        <div class="carousel slide multi-item-carousel" id="theCarousel">
            <div class="carousel-inner row w-100 mx-auto">

                <!-- Orang 1 -->
                <div style="z-index: 100;" class="carousel-item active col-md-3">
                    <div class="overlay_struktur_pengurus"></div>
                    <img src="{{ asset('storage/app/public/assets/img') }}/person1.png"
                        class="img-fluid mx-auto d-block">
                    <div class="text_profile_pengurus">
                        <h3>Jhon Doe</h3>
                        <p>Ketua Umum</p>
                        <div class="d-inline">
                            <img class="mr-3"
                                src="{{ asset('storage/app/public/assets/img') }}/instagram.svg" alt="">
                            <img src="{{ asset('storage/app/public/assets/img') }}/facebook.svg" alt="">
                        </div>
                    </div>
                </div>

                <!-- Orang 2 -->
                <div style="z-index: 100;" class="carousel-item col-md-3">
                    <div class="overlay_struktur_pengurus"></div>
                    <img src="{{ asset('storage/app/public/assets/img') }}/person2.png"
                        class="img-fluid mx-auto d-block">
                    <div class="text_profile_pengurus">
                        <h3>Jhon Doe</h3>
                        <p>Ketua Umum</p>
                        <div class="d-inline">
                            <img class="mr-3"
                                src="{{ asset('storage/app/public/assets/img') }}/instagram.svg" alt="">
                            <img src="{{ asset('storage/app/public/assets/img') }}/facebook.svg" alt="">
                        </div>
                    </div>
                </div>

                <!-- Orang 3 -->
                <div style="z-index: 100;" class="carousel-item col-md-3">
                    <div class="overlay_struktur_pengurus"></div>
                    <img src="{{ asset('storage/app/public/assets/img') }}/person3.png"
                        class="img-fluid mx-auto d-block">
                    <div class="text_profile_pengurus">
                        <h3>Jhon Doe</h3>
                        <p>Ketua Umum</p>
                        <div class="d-inline">
                            <img class="mr-3"
                                src="{{ asset('storage/app/public/assets/img') }}/instagram.svg" alt="">
                            <img src="{{ asset('storage/app/public/assets/img') }}/facebook.svg" alt="">
                        </div>
                    </div>
                </div>

                <!-- Orang 4 -->
                <div style="z-index: 100;" class="carousel-item col-md-3">
                    <div class="overlay_struktur_pengurus"></div>
                    <img src="{{ asset('storage/app/public/assets/img') }}/person4.png"
                        class="img-fluid mx-auto d-block">
                    <div class="text_profile_pengurus">
                        <h3>Jhon Doe</h3>
                        <p>Ketua Umum</p>
                        <div class="d-inline">
                            <img class="mr-3"
                                src="{{ asset('storage/app/public/assets/img') }}/instagram.svg" alt="">
                            <img src="{{ asset('storage/app/public/assets/img') }}/facebook.svg" alt="">
                        </div>
                    </div>
                </div>

                <!-- Orang 5 -->
                <div style="z-index: 100;" class="carousel-item col-md-3">
                    <div class="overlay_struktur_pengurus"></div>
                    <img src="{{ asset('storage/app/public/assets/img') }}/person5.png"
                        class="img-fluid mx-auto d-block">
                    <div class="text_profile_pengurus">
                        <h3>Jhon Doe</h3>
                        <p>Ketua Umum</p>
                        <div class="d-inline">
                            <img class="mr-3"
                                src="{{ asset('storage/app/public/assets/img') }}/instagram.svg" alt="">
                            <img src="{{ asset('storage/app/public/assets/img') }}/facebook.svg" alt="">
                        </div>
                    </div>
                </div>

                <!-- Orang 6 -->
                <div style="z-index: 100;" class="carousel-item col-md-3">
                    <div class="overlay_struktur_pengurus"></div>
                    <img src="{{ asset('storage/app/public/assets/img') }}/person6.png"
                        class="img-fluid mx-auto d-block">
                    <div class="text_profile_pengurus">
                        <h3>Jhon Doe</h3>
                        <p>Ketua Umum</p>
                        <div class="d-inline">
                            <img class="mr-3"
                                src="{{ asset('storage/app/public/assets/img') }}/instagram.svg" alt="">
                            <img src="{{ asset('storage/app/public/assets/img') }}/facebook.svg" alt="">
                        </div>
                    </div>
                </div>

            </div>
            <a style="z-index: 200;" class="carousel-control-prev" href="#theCarousel" role="button" data-slide="prev">
                <img class="carousel_control_img_prev"
                    src="{{ asset('storage/app/public/assets/img') }}/arrow-left-carousel.svg"
                    alt="prev slide carousel">
                <!-- <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span> -->
            </a>
            <a style="z-index: 200;" class="carousel-control-next" href="#theCarousel" role="button" data-slide="next">
                <img class="carousel_control_img_next"
                    src="{{ asset('storage/app/public/assets/img') }}/arrow-right-carousel.svg"
                    alt="next slide carousel">
                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span> -->
            </a>
        </div>
    </div>
</section>
<!-- END KEPENGURUSAN -->
