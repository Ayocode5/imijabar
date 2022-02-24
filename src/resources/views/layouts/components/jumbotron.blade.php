<section id="jumbotron_landing">

    <div @if (!$home_settings->jumbotron_status) hidden @endif class="row no-gutters">
        <div class="col-12 col-md-5 order-2 order-md-1">
            <div class="row no-gutters wrap_section_1">
                <div class="col-6 col-md-12">
                    <div class="wrap_jumbotron_logo position-relative">
                        <img class="jumbotron_logo position-absolute" src="{{ asset('images') }}/logoImiJumbotron.svg"
                            alt="Logo IMI">
                        <img style="object-fit: cover;" class="w-100 h-100"
                            src="{{ asset('uploads') . "/$home_settings->jumbotron_bg" }}" alt="jumbotron-batik">
                    </div>
                </div>
                <div style="background-color: #F4F4F9"
                    class="d-flex justify-content-center align-items-center col-6 col-md-12">
                    <div class="welcome_text d-flex align-items-center">
                        <div class="w-100">
                            <h1>{{ $home_settings->jumbotron_title }}</h1>
                            <p style="height: 50px;" id="typed"></p>
                            <span id="welcome_text_jumbotron" hidden>{{ $home_settings->jumbotron_detail }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-7 order-1 order-md-2">
            <div>
                <div id="carouselJumbotron" class="carousel slide carousel-fade carousel_jumbotron"
                    data-ride="carousel">
                    <ul class="carousel-indicators">
                        @foreach ($news as $key => $c_news)
                            <li data-target="#carouselJumbotron" data-slide-to="{{ $key }}"
                                class="@if ($key == 0) active @endif"></li>
                        @endforeach
                    </ul>
                    <div class="carousel-inner">
                        @foreach ($news as $key => $news)
                            <div
                                class="carousel-item position-relative  @if ($key == 0) active @endif">
                                <div
                                    class="d-flex align-items-center justify-content-center justify-content-md-start overlay_carousel_jumbotron position-absolute">
                                    <div class="content_overlay_carousel_jumbotron">
                                        <p class="date_author">
                                            {{ \Illuminate\Support\Carbon::parse($news->created_at)->format('d F Y') }}
                                            | Editor</p>
                                        <h2>{{ $news->blog_title }}</h2>
                                        <p>{{ $news->blog_content_short }}</p>
                                        <a href="/news/{{ $news->blog_slug }}">

                                            <button type="button" class="btn btn-outline-light btn_show_jumbotron">Show
                                                More</button>
                                        </a>
                                    </div>
                                </div>
                                <img src="{{ asset('uploads') . "/$news->blog_photo" }}" class="d-block w-100"
                                    alt="iteration">
                            </div>
                        @endforeach
                    </div>
                    <!-- <a class="carousel-control-prev" href="#carouselJumbotron" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselJumbotron" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a> -->
                </div>

            </div>
        </div>
    </div>
</section>
