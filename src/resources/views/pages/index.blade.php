@extends('layouts.app')

{{-- Content Section --}}
@section('content')

    {{-- Jumbotron --}}
    @include('layouts.components.jumbotron')        

    {{-- NEWS EVENTS --}}
    <section @if (!$home_settings->news_status) hidden @endif >
        <div class="d-flex flex-wrap berita-acara">
            <div class="col-lg-8 col-12">
                <h1 class="title-berita-acara">{{ $home_settings->news_title }}</h1>
                <div class="border_title"></div>
                <!-- BERITA 1 -->
                @foreach ($news as $item)
                <a href="#" class="text-decoration-none text-dark">
                    <div class="content-berita mb-3 mb-md-2 border-bottom" style="">
                        <div class="row">
                            <div class="col-12 col-md-8 order-2 order-md-1 my-auto">
                                <p class="tanggal-berita">{{ $item->created_at }}
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspEditor</p>
                                <h1 class="title-berita">{{ $item->blog_title }}</h1>
                                <p class="subtitle-berita">
                                    {{ $item->blog_content_short }}
                                    <img src="{{ asset('storage/app/public/assets/img') }}/icon-arrow-right.png"
                                        alt="icon arrow" style="width: 16px; height: 16px;">
                                </p>
                            </div>
                            <div class="col-12 col-md-4 order-1 order-md-2 my-auto">
                                <div class="img-wrap">
                                    <img class="cover-berita"
                                        src="{{ asset('public/uploads') . '/' . $item->blog_photo }}" alt="cover berita">
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
                <button type="button" class="btn mt-4 btn-outline-dark bg-dark text-white d-block mx-auto">Show
                    More</button>
            </div>

            <div class="col-lg-4">
                <h1 class="title-berita-acara">{{ $home_settings->events_title }}</h1>
                <div class="border_acara"></div>
                <div class="dropdown">
                    <button class="btn select_category btn-secondary dropdown-toggle btn_switch_category_event"
                        type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        All Event
                    </button>
                    <div class="dropdown-menu event-category" aria-labelledby="dropdownMenuButton">
                        @foreach ($event_categories as $event_category)
                            <li class="list-dropdown"><a class="dropdown-item">{{ $event_category->name }}</a></li>
                        @endforeach
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    @foreach ($events as $event)
                        <div class="card item_event">
                            <div class="card-header content-event" id="headingOne">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-2" style="margin-right: 16px;">
                                        <h3 class="tgl-event">
                                            {{ date_format(date_create($event->event_start_date), 'd') }}</h1>
                                    </div>
                                    <div style="border-right: 1px solid #5996EC;" class="col-5 p-0">
                                        <p class="month-event m-0">
                                            {{ date_format(date_create($event->event_start_date), 'F Y') }}</p>
                                        <h3 class="loc-event">{{ $event->event_location }}</h1>
                                    </div>
                                    <div class="col-3 p-2">
                                        <h3 class="name-event">{{ $event->name }}</h1>
                                    </div>
                                    <div style="cursor: pointer;" class="col-1" data-toggle="collapse"
                                        data-target="#collapse{{ $loop->iteration }}" aria-expanded="true"
                                        aria-controls="collapse{{ $loop->iteration }}">
                                        <img src="{{ asset('storage/app/public/assets/img') }}/icon-arrow-down.svg"
                                            alt="icon arrow">
                                    </div>
                                </div>
                            </div>
                            <div id="collapse{{ $loop->iteration }}" class="collapse " aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="col">
                                        <h1 class="title-event">
                                            Cabang Olahraga
                                        </h1>
                                        <p class="detail-event">
                                            {{ $event->sports }}
                                        </p>
                                    </div>
                                    <div class="col">
                                        <h1 class="title-event">
                                            Info Pendaftaran
                                        </h1>
                                        <p class="detail-event">
                                            Robert Alfonso: 0857-XXXX-XXXX atau<br>Link: bit.ly/kejurnas2022
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- TENTANG IMI -->
    <section @if (!$home_settings->about_status) hidden @endif id="tentangIMI" class="pb-5 border-bottom mt-4">
        <div class="row mx-lg-5 no-gutters wrap_tentangImi">
            <div class="col-12 col-lg-6 slide_tentangImi1">
                <p>
                    {!! $home_settings->about_detail !!}
                </p>
            </div>
            <div class="col-12 col-lg-6 ml-auto my-auto signature_imijabar position-relative">
                <p class="position-relative"><span class="position-absolute">“</span></p>
                <div class="position-relative slide_tentangImi2">
                    <p>Optimization to Execellence.</p>
                    <p class="signature_text">IMI Jawa Barat</p>
                    <img class="position-absolute" src="{{ asset('storage/app/public/assets/img') }}/line_blue.svg"
                        alt="line_blue">
                    <a class="selengkapnya_tentangImi" href="/about.html">Selengkapnya →</a>

                </div>
            </div>
        </div>

        <section @if (!$home_settings->gallery_status) hidden @endif id="gallery">
            @include('layouts.components.gallery')
        </section>
    </section>


    <section @if (!$home_settings->committee_status) hidden @endif>
        @include('layouts.components.committee')
    </section>

    <section @if (!$home_settings->newsletter_status) hidden @endif>
        @include('layouts.components.newsletter')
    </section>

@endsection
