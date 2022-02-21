<section id="jumbotron_landing">
    <div @if (!$home_settings->jumbotron_status)
        hidden
        @endif class="row no-gutters">
        <div class="col-12 col-lg-5 order-2 order-lg-1">
            <div class="row no-gutters">
                <div class="col-6 col-lg-12 no-gutters border-bottom">
                    <img class="jumbotron_logo position-absolute"
                        src="{{ asset('public/images/') }}/logoImiJumbotron.svg" alt="Logo IMI">
                    <img class="jumbotron_batik" src="{{ asset('public/uploads/') . "/$home_settings->jumbotron_bg" }}"
                        alt="jumbotron-batik">
                </div>
                <div class="col-6 col-lg-12 no-gutters row-cols-1 border-bottom wrap_welcome-text">
                    <div class="welcome_text">
                        <h1>{{ $home_settings->jumbotron_title }}</h1>
                        <p id="typed"></p>
                        <span id="welcome_text_jumbotron" hidden>{{ $home_settings->jumbotron_detail }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-7 order-1 order-lg-2">
            <!-- CAROUSEL BERITA JUMBOTRON-->
            <div id="demo" class="carousel slide carousel-fade jumbotron_carousel" data-ride="carousel">
                <ul class="carousel-indicators">
                    @foreach ($news as $key => $c_news)
                        <li data-target="#demo" data-slide-to="{{ $key }}" class="@if($key == 0) active @endif"></li>
                    @endforeach
                </ul>

                <div class="carousel-inner">
                    <!-- ITEMS CAROUSEL -->
                    @foreach ($news as $key => $news)
                        <div class="carousel-item @if($key == 0) active @endif">
                            <div class="carousel-caption">
                                <div>
                                    <p class="date_author">
                                        {{ \Illuminate\Support\Carbon::parse($news->created_at)->format('d F Y') }}
                                        | Editor
                                    </p>
                                    <h2>{{ $news->blog_title }}</h2>
                                    <p>
                                        {{ $news->blog_content_short }}
                                    </p>
                                    <a href="/news/{{ $news->blog_slug }}">
                                        <button type="button" class="btn btn-outline-light btn_show_jumbotron">Show
                                            More
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <div class="overlay_jumbotron"></div>
                            <img src="{{ asset('public/uploads/') . "/$news->blog_photo" }}" alt="Los Angeles"
                                width="100%" height="600">
                        </div>
                    @endforeach

                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            <!-- CAROUSEL BERITA JUMBOTRON-->
        </div>
    </div>

</section>
