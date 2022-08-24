@extends('layouts.app')

@section('content')

    @include('layouts.components.breadcrumb')

    <section id="header_page_list_berita">
        <div class="head_list_berita">
            <h1>{{ $page_news_settings->name }}</h1>
            <p>{!! $page_news_settings->detail !!}</p>
        </div>

        <!-- Carousel List Berita Terbaru -->
        <div class="carousel_head_list_berita">
            <div id="newsCarousel" class="carousel slide carousel-fade jumbotron_carousel" data-ride="carousel">
                <ul class="carousel-indicators">
                    @if (count($news) > 0)
                        @foreach ($news as $key => $v)
                            <li data-target="#newsCarousel" data-slide-to="{{ $loop->iteration - 1 }}"
                                class="@if ($loop->iteration == 1) active @endif"></li>
                        @endforeach
                    @endif
                </ul>
                <div class="carousel-inner">
                    @if (count($news) > 0)
                        @foreach ($news as $news_carousel)
                            <div class="carousel-item @if ($loop->iteration == 1) active @endif">
                                <div class="overlay_jumbotron">

                                </div>
                                <img src="{{ asset('uploads/news/') . "/$news_carousel->photo" }}"
                                    alt="{{ $news_carousel->title }}" width="100%" height="600">
                                <div class="carousel-caption">
                                    <p class="date_author">
                                        {{ Illuminate\Support\Carbon::parse($news_carousel->created_at)->isoFormat("D MMMM Y") }} |
                                        Editor</p>
                                    <h2>{{ $news_carousel->title }}</h2>
                                    <p>
                                        {{ $news_carousel->summary }}
                                    </p>
                                    <a href="{{ url("news/$news_carousel->slug") }}">
                                        <button type="button" class="btn btn-outline-light btn_show_jumbotron">Show
                                            More
                                        </button>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <img src="{{ asset('uploads/news/') . "/$news_banner_default->banner" }}"
                            alt="News page default banner" width="100%" height="600">
                    @endif
                </div>
                <a class="carousel-control-prev" href="#newsCarousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#newsCarousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </section>

    <main id="main_content_list_berita">
        <section id="content_list_berita">
            <div class="wrap_content_list_berita row py-2 py-md-5">
                <div class="col-12 col-md-6 mb-4 order-2 order-md-1 filter_news_page">
                    <select onchange="location = this.value;" style="background-color: transparent;"
                        name="filterCategoryNews" id="filterCategoryNews">
                        <option value="?page=1">Semua</option>
                        @foreach ($news_categories as $news_category)
                            <option value="{{ url()->current() . "?page=1&category=$news_category->slug" }}"
                                @if (request()->category == $news_category->slug) selected @endif>{{ $news_category->name }}</option>
                        @endforeach
                    </select>
                    </select>
                </div>
                <div class="col-12 col-md-6 mb-4 order-1 order-md-2">
                    <div class="wrap_search_berita w-100">
                        <div class="input-group">
                            <form class="d-flex w-100 justify-content-end" action="{{ route('front.news.search') }}"
                                method="GET">
                                <input style="background-color: transparent;" type="text" name="q"
                                    class="form-control rounded border-0" placeholder="Search" aria-label="Search"
                                    aria-describedby="search-addon" />
                                <button type="submit" class="btn"><img
                                        src="{{ asset('images/') }}/search-icon.svg" alt="search icon">
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-5" id="list_card_berita">
            <div class="wrap_list_berita">
                @if (count($news) == 0)
                    <p class="empty_news">Oops, Berita tidak ada!</p>
                @else
                    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                        @foreach ($news as $news_data)
                            <div class="col mb-4" categories="{{ $news_data->category->slug }}">
                                <a href="/news/{{ $news_data->slug }}" class="text-decoration-none">
                                    <div class="card">
                                        <div class="header_card_image">
                                            <img src="{{ asset('uploads/news/') . "/$news_data->photo" }}"
                                                class="card-img-top skeleton" alt="{{ $news_data->title }}">
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
                                            <h3 class="card-title">
                                                {{ $news_data->title }}
                                            </h3>
                                            <p class="author_date_list_berita">Editor &nbsp; | &nbsp;
                                                <span>{{ Illuminate\Support\Carbon::parse($news_data->created_at)->isoFormat("D MMMM Y") }}</span>
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
                    </div>
                @endif
            </div>
            <div id="loader" class="spinner-border text-secondary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            @if (count($news) != 0)
                <button class="btn_load_more_list_berita mx-auto d-block">
                    Load More
                </button>
            @endif
        </section>
    </main>
@endsection
