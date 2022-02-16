@extends('layouts.app')

@section('content')

    @include('layouts.components.breadcrumb')

    <section style="border-bottom: none" id="header_page_list_berita">
        <div class="head_list_berita">
            <h1>Cari Berita </h1>
            <p>Menampilkan Hasil Pencarian : <strong>{{ request()->input('q') }}</strong></p>

        </div>
        
    </section>

    <main id="main_content_list_berita">
        <section id="content_list_berita">
            <div class="wrap_content_list_berita row py-2 py-md-3">
                <div class="col-12 col-md-6 mb-4 order-2 order-md-1 filter_news_page">
                     {{-- URL FILETR CATEGORY FORMAT --}}
                    @php
                        $url_filter_prefix = url()->current()."?q=".request()->input('q')."&page=1"
                    @endphp
                    <select onchange="location = this.value;" style="background-color: transparent;"
                        name="filterCategoryNews" id="filterCategoryNews">
                        <option value="{{ $url_filter_prefix . '#content_list_berita' }}">Semua</option>
                        @foreach ($news_categories as $news_category)
                                <option value="{{ "$url_filter_prefix&category=$news_category->slug#content_list_berita" }}" 
                                @if(request()->category == $news_category->slug) 
                                    selected
                                @endif>{{ $news_category->name }}</option>
                        @endforeach
                    </select>
                    </select>
                </div>
                <div class="col-12 col-md-6 mb-4 order-1 order-md-2">
                    <div class="wrap_search_berita w-100">
                        <div class="input-group">
                            <form class="d-flex w-100 justify-content-end" action="{{ route('front.news.search') }}" method="GET">
                                <input style="background-color: transparent;" type="text" name="q"
                                    class="form-control rounded border-0" placeholder="Search" aria-label="Search"
                                    aria-describedby="search-addon" />
                                <button type="submit" class="btn"><img
                                        src="{{ asset('public/images/') }}/search-icon.svg"
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
                        <p style="font-weight: 700; font-size: 20px" class="text-center">Oops, Berita tidak ada! </p>
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
