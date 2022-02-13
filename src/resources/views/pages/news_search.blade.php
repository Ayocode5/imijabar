@extends('layouts.app')

@section('content')

    @include('layouts.components.breadcrumb')

    <section id="header_page_list_berita">
        <div class="head_list_berita">
            <h1>Cari Berita </h1>
            <p>Kata Kunci : <strong>{{ request()->input('q') }}</strong></p>

        </div>
        <div class="carousel_head_list_berita">
            <div id="demo" class="carousel slide carousel-fade jumbotron_carousel" data-ride="carousel">
                <ul class="carousel-indicators">
                    @foreach ($news as $key => $v)
                        <li data-target="#demo" data-slide-to="{{ $loop->iteration - 1 }}"
                            class="@if ($loop->iteration == 1) active @endif"></li>
                    @endforeach
                </ul>
                <div class="carousel-inner">
                    @foreach ($news as $news_carousel)
                        <div class="carousel-item @if ($loop->iteration == 1) active @endif">
                            <div class="overlay_jumbotron">

                            </div>
                            <img src="{{ asset('public/uploads/') . "/$news_carousel->photo" }}"
                                alt="{{ $news_carousel->title }}" width="100%" height="600">
                            <div class="carousel-caption">
                                <p class="date_author">
                                    {{ date_format(date_create($news_carousel->created_at), 'd F Y') }} |
                                    Editor</p>
                                <h2>{{ $news_carousel->title }}</h2>
                                <p>
                                    {{ $news_carousel->summary }}
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
                <div class="col mb-4 order-2 order-md-1">

                    <div class="d-flex justify-content-start">
                        <div class="position-relative border-0 wrap_select_category_news">

                            {{-- URL FILETR CATEGORY FORMAT --}}
                            @php
                                $url_filter_prefix = url()->current()."?q=".request()->input('q')."&page=1"
                            @endphp

                            <select onchange="location = this.value;" style="background-color: transparent;" class="w-100" name="filterCategoryNews" id="filterCategoryNews" >
                            
                            <option value="?page=1">Semua</option>
                            @foreach ($news_categories as $news_category)
                                <option value="{{ url()->current() . "?page=1&category=$news_category->slug" }}" 
                                @if(request()->category == $news_category->slug) 
                                    selected
                                @endif    >{{ $news_category->name }}</option>
                            @endforeach
                            </select>
                        </div>
                        
                    </div>

                </div>
                <div class="col mb-4 order-1 order-md-2">
                    <div class="wrap_search_berita w-100">
                        <div class="input-group">
                            <form class="d-flex w-100 justify-content-end" action="{{ route('front.news.search') }}" method="GET">
                                <input style="background-color: transparent;" type="text" name="q"
                                    class="form-control rounded border-0" placeholder="Search" aria-label="Search"
                                    aria-describedby="search-addon" />
                                <button type="submit" class="btn"><img
                                        src="{{ asset('storage/app/public/assets/img') }}/search-icon.svg"
                                        alt="search icon">
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-5" id="list_card_berita">
            <div class="wrap_list_berita">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">

                    @if (count($news) == 0)
                        <h2>Oops, Berita tidak ada! </h2>
                    @else
                        @foreach ($news as $news_data)
                            <div class="col mb-4" categories="{{ $news_data->category->slug }}">
                                <a href="/news/{{ $news_data->slug }}" class="text-decoration-none text-white"
                                    >
                                    <div class="card">

                                        <div class="header_card_image">
                                            <img src="{{ asset('public/uploads') . "/$news_data->photo" }}"
                                                class="card-img-top" alt="{{ $news_data->title }}">
                                            <div
                                                class="label_header_card_image d-flex justify-content-between align-items-center px-3">
                                                <p style="height: 8px;" class="category_berita">
                                                    {{ $news_data->category->name }}
                                                </p>
                                                <p style="height: 8px;" class="realease_date">
                                                    {{ Illuminate\Support\Carbon::parse($news_data->created_at)->diffForHumans() }}
                                                </p>
                                            </div>

                                        </div>
                                        <div class="card-body">
                                            <a href="/news/{{ $news_data->slug }}">
                                                <h3 class="card-title">
                                                    {{ $news_data->title }}
                                                </h3>
                                            </a>
                                            <p class="author_date_list_berita">Editor &nbsp; | &nbsp;
                                                <span>{{ date_format(date_create($news_data->created_at), 'd F Y') }}</span>
                                            </p>
                                            <p class="card-text">
                                                {{ $news_data->summary }}
                                                <span>→</span>
                                            </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
            @if (count($news) != 0)
                <button class="btn_load_more_list_berita mx-auto d-block">
                    Load More
                </button>
            @endif
        </section>
    </main>
@endsection
