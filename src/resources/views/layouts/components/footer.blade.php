<footer class="position-relative border-top border-bottom">
    <div class="container-fluid content_footer">

        <div class="wrap_content_footer row my-auto mx-0 justify-content-md-between h-100">
            <div class="col-12 col-lg-4  mb-3 mb-lg-0 align-self-center">
                <div class="row mx-0">
                    <div class="col-12 col-sm-3">
                        <img style="height: 75px; width: 57px" class="d-block mb-4 logo_footer" src="{{ asset('uploads/') . "/$settings?->logo" }}"
                            alt="logo imi jawa barat">
                    </div>
                    <div class="footer_ttd col-12 col-sm-9 text-sm-right text-center position-relative">
                        <p>IMI Jabar Juara</p>
                        <p class="text_ttd_footer">IMI Jawa Barat</p>
                        <img class="position-absolute line_border" src="{{ asset('images') }}/line_blue.svg"
                            alt="line blue">
                    </div>
                </div>
                <div class="row">
                    <div class="col sosial_media_footer">
                        {{-- {{ dd($social_media)}} --}}

                        @foreach ($social_media as $item)
                            <a class="text-decoration-none" href="{{ $item->social_url }}"><i
                                    class="{{ $item->social_icon }}"></i></a> &nbsp;&nbsp;
                        @endforeach

                        {{-- <img class="mr-3" src="{{ asset('public/images') }}/icon_globe_web.svg" alt="web imi jabar">
                        <img class="mr-3" src="{{ asset('public/images') }}/icon_facebook.svg" alt="facebook imi jabar">
                        <img class="mr-3" src="{{ asset('public/images') }}/icon_instagram.svg" alt="instagram imi jabar"> --}}

                    </div>
                </div>
            </div>
            <!-- <div class="col-1"></div> -->
            <div class="col-12 col-lg-3">
                <div class="address_footer">
                    <h4 style="font-weight: 700;">{{ $settings?->footer_column1_heading }}</h4>
                    <p style="font-weight: 500;">
                        {{ $settings?->footer_address }}
                    </p>
                </div>
                <div class="contact_footer">
                    <h4 style="font-weight: 700;">{{ $settings?->footer_column2_heading }}</h4>
                    <p style="font-weight: 500;">{{ $settings?->footer_email }}<br />{{ $settings?->footer_phone }}
                    </p>
                </div>
            </div>
            <!-- <div class="col-1"></div> -->
            <div class="col-12 col-lg-2">
                <h4 style="font-weight: 700;">{{ $settings?->footer_column3_heading }}</h4>
                <ul style="font-weight: 500;" class="sitemap_footer">
                    <li><a href="/about">Sejarah IMI Jabar</a></li>
                    <li><a href="/about/club/mobil">Mobil</a></li>
                    <li><a href="/about/club/motor">Motor</a></li>
                    <li><a href="/about/club/mobility">Mobility</a></li>
                    <li><a href="/news">Berita</a></li>
                    <li><a href="/event">Kalender Event</a></li>
                </ul>

            </div>
            <div class="col-12 col-lg-2 align-self-center">
                <ul style="font-weight: 500;" class="sitemap_footer">
                    <li><a href="/gallery?category=category-1">Galeri</a></li>
                    <li><a href="/registration/kta">Pendaftaran KTA</a></li>
                    <li><a href="/registration/kis">Pendaftaran KIS</a></li>
                    <li><a href="/registration/club">Pendaftaran Klub</a></li>
                    <li><a href="/registration/eo">Pendaftaran Event</a></li>
                </ul>

            </div>
        </div>

    </div>

    </div>
    <img class="position-absolute background_footer" src="{{ asset('images') }}/background_footer.png"
        alt="background footer">
</footer>

<div class="credit">
    <div class="container text-center p-3 wrap_credit">
        <p class="my-auto">{{ $settings?->footer_copyright }}</p>
    </div>
</div>
