@extends('layouts.app')

@section('content')

    @include('layouts.components.jumbotron')

    <main>
        <!-- START BERITA & EVENT -->
        <section class="py-5 border-bottom" style="background-color: #FBFBFB">
            <div class="d-flex flex-wrap berita-acara">
                <div class="col-lg-8 col-12">
                    <h1 class="title-berita-acara">{{ $home_settings->news_title }}</h1>
                    <div class="border_title"></div>
                    <!-- BERITA 1 -->
                    @foreach ($news as $news_data)
                        <a class="text-decoration-none text-dark" href="/news/{{ $news_data->blog_slug }}">
                            <div class="content-berita mb-3 mb-md-2">
                                <div class="row">
                                    <div class="col-12 col-md-8 order-2 order-md-1 my-auto">
                                        <p class="tanggal-berita">{{ $news_data->created_at }}</p>
                                        <h1 class="title-berita">{{ $news_data->blog_title }} </h1>
                                        <p class="subtitle-berita">
                                            {!! $news_data->blog_content_short !!}
                                            <img src="{{ asset('public/frontend/assets') }}/img/icon-arrow-right.png"
                                                alt="icon arrow" style="width: 16px; height: 16px;">
                                        </p>
                                    </div>
                                    <div class="col-12 col-md-4 order-1 order-md-2 my-auto">
                                        <div class="img-wrap">
                                            <img class="cover-berita"
                                                src="{{ asset("public/uploads/$news_data->blog_photo") }}"
                                                alt="cover berita">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                    <a href="/berita" class="text-decoration-none text-dark">
                        <button type="button" class="btn_show_more_berita_landing mt-4 d-block mx-auto">Show More</button>
                    </a>
                </div>

                <div class="col-lg-4">
                    <h2 class="title-berita-acara">{{ $home_settings->events_title }}</h2>
                    <div class="border_acara"></div>
                    <div class="dropdown">
                        <button class="btn select_category btn-secondary dropdown-toggle btn_switch_category_event"
                            type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Semua
                        </button>
                        <div class="dropdown-menu event-category" aria-labelledby="dropdownMenuButton">
                            <li class="list-dropdown"><a class="dropdown-item">Semua</a></li>
                            @foreach ($event_categories as $event_category)
                                <li class="list-dropdown"><a class="dropdown-item">{{ $event_category->name }}</a></li>
                            @endforeach
                        </div>
                    </div>
                    <div class="accordion" id="accordionExample">
                        @foreach ($events as $event)
                            <div style="cursor: pointer;" class="card item_event" data-toggle="collapse"
                                data-target="#collapse{{$loop->iteration}}" aria-expanded="true" aria-controls="collapse{{$loop->iteration}}">
                                <div class="card-header content-event" id="headingOne">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-2">
                                            <h3 class="tgl-event" style="font-size: 45px; margin-right: -10px">{{ date_format(date_create($event->event_start_date), "d") }}</h3>
                                        </div>
                                        <div style="border-right: 1px solid #5996EC;" class="col-5 p-0">
                                            <p class="month-event m-0">{{ date_format(date_create($event->event_start_date), "F Y") }}</p>
                                            <h3 class="loc-event">{{ $event->event_location }}</h3>
                                        </div>
                                        <div class="col-3 p-2">
                                            <h3 class="name-event">{{ $event->name }} </h3>
                                        </div>
                                        <div class="col-1">
                                            <img src="{{ asset('public/frontend/assets') }}/img/icon-arrow-down.svg"
                                                alt="icon arrow">
                                        </div>
                                    </div>
                                </div>
                                <div id="collapse{{$loop->iteration}}" class="collapse " aria-labelledby="headingOne"
                                    data-parent="#accordionExample">
                                    <div class="card-body">
                                        <div class="col">
                                            <h3 class="title-event">
                                                Cabang Olahraga
                                            </h3>
                                            <p class="detail-event" style="font-size: 16px">
                                                {{ $event->sports }}
                                            </p>
                                        </div>
                                        <div class="col" style="line-height: 16px">
                                            <h3 class="title-event">
                                                {{ $event_registration_section->name }}
                                            </h3>
                                            <p class="detail-event">
                                                {!! $event_registration_section->content !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!-- END BERITA & EVENT -->

        <!-- START TENTANG IMI -->
        <section id="tentangIMI" class="pb-5 border-bottom">
            <div class="row mx-lg-5 no-gutters wrap_tentangImi">
                <div class="col-12 col-lg-6 slide_tentangImi1">
                    {{-- {{ dd($home_settings) }} --}}
                    {!! $home_settings->about_detail !!}
                </div>
                <div class="col-12 col-lg-6 ml-auto my-auto signature_imijabar position-relative">
                    <p class="position-relative"><span class="position-absolute">“</span></p>
                    <div class="position-relative slide_tentangImi2">
                        <p>Optimization to Execellence.</p>
                        <p class="signature_text">IMI Jawa Barat</p>
                        <img class="position-absolute" src="{{ asset('public/frontend/assets') }}/img/line_blue.svg"
                            alt="line_blue">
                        <a class="selengkapnya_tentangImi" href="/about">Selengkapnya →</a>

                    </div>
                </div>
            </div>

            @include('layouts.components.gallery')

        </section>
        <!-- END TENTANG IMI -->

        <!-- START KEPENGURUSAN -->
        @include('layouts.components.committee', [
            'title' => $home_settings->committee_title, 
            'detail' => $home_settings->committee_detail
        ])
        <!-- END KEPENGURUSAN -->

        <!-- START NEWSLETTER -->
        @include('layouts.components.newsletter')
        <!-- END NEWSLETTER -->
    </main>

@endsection
