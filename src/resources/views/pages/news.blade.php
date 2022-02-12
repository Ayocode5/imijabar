@extends('layouts.app')

@section('content')
    <section id="header_page_list_berita">
        <div class="head_list_berita">
            <h1>News & Updates</h1>
            <p>Berita Terbaru Seputar Otomotif, dan Berita Terbaru dari dunia Olahraga Roda Dua & Roda Empat.</p>
        </div>
        <div class="carousel_head_list_berita">
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
                        <img src="{{ asset('storage/app/public/assets/img') }}/jumbotron-img.png" alt="Los Angeles" width="100%" height="600">
                        <div class="carousel-caption">
                            <p class="date_author">23 Januari 2022 | Admin</p>
                            <h2>Ford Mustang Shelby GT 500 1967</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit egestas enim id in orci.
                                Id eu
                                ullamcorper aliquet platea pretium. Id commodo nisl accumsan, viverra enim sit
                                mattis. Cras ipsum et
                                blandit auctor.</p>
                            <button type="button" class="btn btn-outline-light btn_show_jumbotron">Show
                                More</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="overlay_jumbotron">

                        </div>
                        <img src="{{ asset('storage/app/public/assets/img') }}/jumbotron-img2.png" alt="Chicago" width="100%" height="600">
                        <div style="text-align: right;" class="carousel-caption">
                            <p>23 Januari 2022 | Admin</p>
                            <h2>Ford Mustang Shelby GT 500 1967</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit egestas enim id in orci.
                                Id eu
                                ullamcorper aliquet platea pretium. Id commodo nisl accumsan, viverra enim sit
                                mattis. Cras ipsum et
                                blandit auctor.</p>
                            <button type="button" class="btn btn-outline-light">Show More</button>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="overlay_jumbotron">

                        </div>
                        <img src="{{ asset('storage/app/public/assets/img') }}/jumbotron-img.png" alt="New York" width="100%" height="600">
                        <div class="carousel-caption">
                            <p>23 Januari 2022 | Admin</p>
                            <h2>Ford Mustang Shelby GT 500 1967</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit egestas enim id in orci.
                                Id eu
                                ullamcorper aliquet platea pretium. Id commodo nisl accumsan, viverra enim sit
                                mattis. Cras ipsum et
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
    </section>

    <main id="main_content_list_berita">
        <section id="content_list_berita">
            <div class="wrap_content_list_berita row row-cols-1 row-cols-md-2 pt-2 pb-2 pt-md-5 pb-md-5">
                <div class="col">
                    <div class="d-flex justify-content-around">
                        <a filters="roda-dua,roda-empat" style="height: 44px; cursor: pointer;" class="d-flex align-items-center px-3 filter_news">All</a>
                        <a  filters="roda-dua" style="height: 44px; cursor: pointer;" class="d-flex align-items-center px-3 filter_news">Roda Dua</a>
                        <a filters="roda-empat" style="height: 44px; cursor: pointer;" class="d-flex align-items-center px-3 filter_news">Roda Empat</a>
                        <a  filters="wisata" style="height: 44px; cursor: pointer;" class="d-flex align-items-center px-3 filter_news">Wisata</a>
                    </div>
                </div>
                <div class="col">
                    <div class="wrap_search_berita">
                        <div class="input-group">
                            <input style="background-color: transparent;" type="search"
                                class="form-control rounded border-0" placeholder="Search" aria-label="Search"
                                aria-describedby="search-addon" />
                            <button type="button" class="btn"><img src="{{ asset('storage/app/public/assets/img') }}/search-icon.svg"
                                    alt="search icon"></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-5" id="list_card_berita">
            <div class="wrap_list_berita">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 wrap_card_news">
                    <!-- <div class="col mb-4 news_item" category_news="roda-dua">
                        <div class="card">
                            <div class="header_card_image">
                                <img src="{{ asset('storage/app/public/assets/img') }}/jumbotron-img.png" class="card-img-top" alt="...">
                                <div class="label_header_card_image d-flex justify-content-between align-items-center px-3">
                                    <p style="height: 8px;" class="category_berita">Roda Empat</p>
                                    <p style="height: 8px;" class="realease_date">5 menit lalu</p>
                                </div>

                            </div>
                            <div class="card-body">
                                <a href="/detail-berita.html">
                                    <h3 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                                </a>
                                <p class="author_date_list_berita">Admin | <span>30 Januari 2022</span></p>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac
                                    dui
                                    dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames
                                    fermentum at
                                    libero, nunc non. Ipsum, aliquam tellus suscipit ullamcorper vitae etiam
                                    integer.
                                    <span>→</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4 news_item" category_news="roda-empat">
                        <div class="card">
                            <div class="header_card_image">
                                <img src="{{ asset('storage/app/public/assets/img') }}/jumbotron-img.png" class="card-img-top" alt="...">
                                <div class="label_header_card_image d-flex justify-content-between align-items-center px-3">
                                    <p style="height: 8px;" class="category_berita">Roda Empat</p>
                                    <p style="height: 8px;" class="realease_date">5 menit lalu</p>
                                </div>

                            </div>
                            <div class="card-body">
                                <a href="/detail-berita.html">
                                    <h3 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                                </a>
                                <p class="author_date_list_berita">Admin | <span>30 Januari 2022</span></p>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac
                                    dui
                                    dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames
                                    fermentum at
                                    libero, nunc non. Ipsum, aliquam tellus suscipit ullamcorper vitae etiam
                                    integer.
                                    <span>→</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4 news_item" category_news="roda-dua">
                        <div class="card">
                            <div class="header_card_image">
                                <img src="{{ asset('storage/app/public/assets/img') }}/jumbotron-img.png" class="card-img-top" alt="...">
                                <div class="label_header_card_image d-flex justify-content-between align-items-center px-3">
                                    <p style="height: 8px;" class="category_berita">Roda Empat</p>
                                    <p style="height: 8px;" class="realease_date">5 menit lalu</p>
                                </div>

                            </div>
                            <div class="card-body">
                                <a href="/detail-berita.html">
                                    <h3 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                                </a>
                                <p class="author_date_list_berita">Admin | <span>30 Januari 2022</span></p>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac
                                    dui
                                    dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames
                                    fermentum at
                                    libero, nunc non. Ipsum, aliquam tellus suscipit ullamcorper vitae etiam
                                    integer.
                                    <span>→</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4 news_item" category_news="roda-empat">
                        <div class="card">
                            <div class="header_card_image">
                                <img src="{{ asset('storage/app/public/assets/img') }}/jumbotron-img.png" class="card-img-top" alt="...">
                                <div class="label_header_card_image d-flex justify-content-between align-items-center px-3">
                                    <p style="height: 8px;" class="category_berita">Roda Empat</p>
                                    <p style="height: 8px;" class="realease_date">5 menit lalu</p>
                                </div>

                            </div>
                            <div class="card-body">
                                <a href="/detail-berita.html">
                                    <h3 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                                </a>
                                <p class="author_date_list_berita">Admin | <span>30 Januari 2022</span></p>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac
                                    dui
                                    dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames
                                    fermentum at
                                    libero, nunc non. Ipsum, aliquam tellus suscipit ullamcorper vitae etiam
                                    integer.
                                    <span>→</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4 news_item" category_news="roda-dua,roda-empat">
                        <div class="card">
                            <div class="header_card_image">
                                <img src="{{ asset('storage/app/public/assets/img') }}/jumbotron-img.png" class="card-img-top" alt="...">
                                <div class="label_header_card_image d-flex justify-content-between align-items-center px-3">
                                    <p style="height: 8px;" class="category_berita">Roda Empat</p>
                                    <p style="height: 8px;" class="realease_date">5 menit lalu</p>
                                </div>

                            </div>
                            <div class="card-body">
                                <a href="/detail-berita.html">
                                    <h3 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h3>
                                </a>
                                <p class="author_date_list_berita">Admin | <span>30 Januari 2022</span></p>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac
                                    dui
                                    dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames
                                    fermentum at
                                    libero, nunc non. Ipsum, aliquam tellus suscipit ullamcorper vitae etiam
                                    integer.
                                    <span>→</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col mb-4 news_item" category_news="roda-dua">
                        <div class="card">
                            <div class="header_card_image">
                                <img src="{{ asset('storage/app/public/assets/img') }}/jumbotron-img.png" class="card-img-top" alt="...">
                                <div class="label_header_card_image d-flex justify-content-between align-items-center px-3">
                                    <p style="height: 8px;" class="category_berita">Roda Empat</p>
                                    <p style="height: 8px;" class="realease_date">5 menit lalu</p>
                                </div>

                            </div>
                            <div class="card-body">
                                <a href="/detail-berita.html">
                                    <h3 class="card-title">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    </h3>
                                </a>
                                <p class="author_date_list_berita">Admin | <span>30 Januari 2022</span></p>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Hac
                                    dui
                                    dui nam augue. Mattis mi auctor nunc sed facilisis facilisis sem. Fames
                                    fermentum at
                                    libero, nunc non. Ipsum, aliquam tellus suscipit ullamcorper vitae etiam
                                    integer.
                                    <span>→</span>
                                </p>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <button class="btn_load_more_list_berita mx-auto d-block">
                Load More
            </button>
        </section>
    </main>
@endsection
