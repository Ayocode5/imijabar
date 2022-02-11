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
                    @foreach ($news as $key => $value)
                        <li data-target="#demo" data-slide-to="{{ $loop->iteration - 1 }}" class="@if ($loop->iteration == 1) active @endif"></li>
                    @endforeach
                </ul>
                <div class="carousel-inner">
                    @foreach ($news as $new)
                        <div class="carousel-item @if ($loop->iteration == 1) active @endif">
                            <div class="overlay_jumbotron">

                            </div>
                            <img src="{{ asset('public/uploads/') . "/$new->photo" }}" alt="{{ $new->title }}"
                                width="100%" height="600">
                            <div class="carousel-caption">
                                <p class="date_author">{{ date_format(date_create($new->created_at), 'd F Y') }} |
                                    Editor</p>
                                <h2>{{ $new->title }}</h2>
                                <p>
                                    {{ $new->summary }}
                                </p>
                                <button type="button" class="btn btn-outline-light btn_show_jumbotron">Show
                                    More</button>
                            </div>
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
        </div>
    </section>
    <main id="main_content_list_berita">
        <section id="content_list_berita">
            <div class="wrap_content_list_berita row row-cols-1 row-cols-md-2 pt-2 pb-2 pt-md-5 pb-md-5">
                <div class="col">
                    <div class="d-flex justify-content-around">
                        <a style="height: 44px;" class="d-flex align-items-center px-3" href="#">All</a>
                        <a style="height: 44px;" class="d-flex align-items-center px-3" href="#">Roda Dua</a>
                        <a style="height: 44px;" class="d-flex align-items-center px-3" href="#">Roda Empat</a>
                        <a style="height: 44px;" class="d-flex align-items-center px-3" href="#">Roda Wisata</a>
                    </div>
                </div>
                <div class="col">
                    <div class="wrap_search_berita">
                        <div class="input-group">
                            <input style="background-color: transparent;" type="search"
                                class="form-control rounded border-0" placeholder="Search" aria-label="Search"
                                aria-describedby="search-addon" />
                            <button type="button" class="btn"><img
                                    src="{{ asset('storage/app/public/assets/img') }}/search-icon.svg"
                                    alt="search icon"></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-5" id="list_card_berita">
            <div class="wrap_list_berita">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">

                    @foreach ($news as $news)
                    <a href="/news/{{$news->slug}}" class="" style="display: inline;">
                        <div class="col mb-4" categories="{{ $news->category->slug }}">
                            <div class="card">

                                <div class="header_card_image">
                                    <img src="{{ asset('public/uploads') . "/$news->photo" }}" class="card-img-top"
                                        alt="{{ $news->title }}">
                                    <div
                                        class="label_header_card_image d-flex justify-content-between align-items-center px-3">
                                        <p style="height: 8px;" class="category_berita">{{ $news->category->name }}</p>
                                        <p style="height: 8px;" class="realease_date">
                                            {{ Illuminate\Support\Carbon::parse($news->created_at)->diffForHumans() }}
                                        </p>
                                    </div>

                                </div>
                                <div class="card-body">
                                    <a href="/news/{{$news->slug}}">
                                        <h3 class="card-title">
                                            {{ $news->title }}
                                        </h3>
                                    </a>
                                    <p class="author_date_list_berita">Editor &nbsp; | &nbsp;
                                        <span>{{ date_format(date_create($news->created_at), 'd F Y') }}</span>
                                    </p>
                                    <p class="card-text">
                                        {{ $news->summary }}
                                        <span>→</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach

                </div>
            </div>
            <button class="btn_load_more_list_berita mx-auto d-block">
                Load More
            </button>
        </section>
    </main>
@endsection
