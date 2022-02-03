<section>
    <div @if (!$home_settings->jumbotron_status)
        hidden
    @endif class="row no-gutters">
        <div class="col-12 col-lg-5 order-2 order-lg-1">
            <div class="row no-gutters">
                <div class="col-6 col-lg-12 no-gutters">
                    <img class="jumbotron_logo position-absolute"
                        src="" alt="Logo IMI">
                    <img class="jumbotron_batik" src="{{ asset('public/uploads/') . "/$home_settings->jumbotron_bg" }}"
                        alt="jumbotron-batik">
                </div>
                <div class="col-6 col-lg-12 no-gutters row-cols-1 wrap_welcome-text">
                    <div class="welcome_text">
                        <h1>{{ $home_settings->jumbotron_title }}</h1>
                        <p id="typed"></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-7 order-1 order-lg-2">
            <div id="demo" class="carousel slide carousel-fade jumbotron_carousel" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="overlay_jumbotron">

                        </div>
                        <img src="{{ asset('storage/app/public/assets/img') }}/jumbotron-img.png" alt="Los Angeles"
                            width="100%" height="600">
                        <div class="carousel-caption">
                            <p class="date_author">23 Januari 2022 | Admin</p>
                            <h2>Ford Mustang Shelby GT 500 1967</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit egestas enim id in orci. Id
                                eu
                                ullamcorper aliquet platea pretium. Id commodo nisl accumsan, viverra enim sit mattis.
                                Cras ipsum et
                                blandit auctor.</p>
                            <button type="button" class="btn btn-outline-light btn_show_jumbotron">Show More</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="overlay_jumbotron">

                        </div>
                        <img src="{{ asset('storage/app/public/assets/img') }}/jumbotron-img2.png" alt="Chicago"
                            width="100%" height="600">
                        <div style="text-align: right;" class="carousel-caption">
                            <p>23 Januari 2022 | Admin</p>
                            <h2>Ford Mustang Shelby GT 500 1967</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit egestas enim id in orci. Id
                                eu
                                ullamcorper aliquet platea pretium. Id commodo nisl accumsan, viverra enim sit mattis.
                                Cras ipsum et
                                blandit auctor.</p>
                            <button type="button" class="btn btn-outline-light">Show More</button>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="overlay_jumbotron">

                        </div>
                        <img src="{{ asset('storage/app/public/assets/img') }}/jumbotron-img.png" alt="New York"
                            width="100%" height="600">
                        <div class="carousel-caption">
                            <p>23 Januari 2022 | Admin</p>
                            <h2>Ford Mustang Shelby GT 500 1967</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit egestas enim id in orci. Id
                                eu
                                ullamcorper aliquet platea pretium. Id commodo nisl accumsan, viverra enim sit mattis.
                                Cras ipsum et
                                blandit auctor.</p>
                            <button type="button" class="btn btn-outline-light">Show More</button>

                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </div>
</section>
