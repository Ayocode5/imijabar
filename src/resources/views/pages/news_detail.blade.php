@extends('layouts.app')

@section('content')

    @if ($news)
        @include('layouts.components.breadcrumb')

        <header id="header_detail_berita">
            <div class="image_feature_detail_berita">
                <img class="featured_image" src="{{ asset('uploads') . "/$news->photo" }}" alt="featured image">
            </div>
            <div class="wrap_header_detail_berita my-md-5">
                <div class="content_header_detail_berita py-2 py-md-3">
                    <div class="kategori_detail_berita">
                        <p>{{ $news->category->name }}</p>
                    </div>
                    <div class="title_detail_berita">
                        <h1>{{ $news->title }}</h1>
                    </div>
                    <div class="d-flex flex-wrap justify-content-between author_date_detail_berita">
                        <p>Editor</p>
                        <p>{{ date_format(date_create($news->created_at), 'd F Y') }}</p>
                    </div>
                </div>
            </div>
        </header>

        <main id="main_content_detail_berita">
            <section id="content_description_detail">
                <div class="pb-4 container-fluid wrap_content_description_detail">
                    <div class="row">
                        <div class="col-12 col-md-2 order-2 order-md-1">
                            <div
                                class="wrap_share_sosmed d-flex flex-row justify-content-between justify-content-md-end flex-md-column">
                                <p style="font-weight: 700;" class="ml-md-auto d-block text-md-right my-auto">Shares</p>

                                <div class="share_sosmed d-flex flex-row flex-md-column align-content-center">
                                    <a target="_blank"
                                        href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}"
                                        class="mt-2 mb-2 ml-md-auto" href="#">
                                        <i class="fab fa-2x fa-facebook"></i>
                                    </a>

                                    <a target="_blank" href="http://www.twitter.com/share?url={{ url()->current() }}"
                                        class="mt-2 mb-2 ml-md-auto" href="#">
                                        <i class="fab fa-2x fa-twitter"></i>
                                    </a>

                                    <a class="mt-2 mb-2 ml-md-auto" href="whatsapp://send?text={{ url()->current() }}"
                                        data-action="share/whatsapp/share" target="_blank">
                                        <i class="fab fa-2x fa-whatsapp"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-8 order-1 order-md-2 description_detail">
                            {!! $news->content !!}
                        </div>
                        <div class="col-12 col-md-2 order-3"></div>
                    </div>
                </div>
            </section>

            <section id="berita_serupa">
                <div class="container py-5">
                    <h2>Berita Serupa</h2>
                    <div class="border_berita_serupa"></div>
                    <div class="row row-cols-1 row-cols-md-2 wrap_berita_serupa">
                        @foreach ($similar_like_news as $similar_news)
                            <div class="col">
                                <a class="text-decoration-none text-dark" href="/news/{{ $similar_news->slug }}">
                                    <div class="card px-5 py-3">
                                        <div class="d-flex flex-wrap justify-content-between author_date_berita_serupa">
                                            <p>Admin</p>
                                            <p>{{ date_format(date_create($similar_news->created_at), 'd F Y') }}</p>
                                        </div>
                                        <div class="title_berita_serupa">
                                            <h3>{{ $similar_news->title }}</h3>
                                        </div>
                                        <div class="short_desc_berita_serupa">
                                            <p>{{ $similar_news->summary }}<span>→</span></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                        {{-- <div class="col">
                        <a class="text-decoration-none text-dark" href="#">
                            <div class="card px-5 py-3">
                                <div class="d-flex flex-wrap justify-content-between author_date_berita_serupa">
                                    <p>Admin</p>
                                    <p>30 Januari 2022</p>
                                </div>
                                <div class="title_berita_serupa">
                                    <h3>Ducati Panigalle V4 S</h3>
                                </div>
                                <div class="short_desc_berita_serupa">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean malesuada donec
                                        consequat luctus. <span>→</span></p>
                                </div>
                            </div>
                        </a>
                    </div> --}}
                    </div>
                </div>
            </section>
        </main>
    @else
        <center>
            <h2>Opps, Berita tidak ditemukan</h2>
        </center>
    @endif

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v13.0"
        nonce="szLewV7D"></script>
@endsection
