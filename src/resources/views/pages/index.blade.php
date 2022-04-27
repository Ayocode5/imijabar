@extends('layouts.app')

@section('content')
    @include('layouts.components.jumbotron', [
        'ads_greetings' => $ads_greetings,
        'default_banner' => $home_banner_default,
    ])

    <main>
        <!-- START BERITA & EVENT -->
        <section class="py-5 border-bottom border-top-news-events" style="background-color: #FBFBFB">
            <div class="d-flex flex-wrap berita-acara">
                <div class="col-lg-8 col-12">
                    <h1 class="title-berita-acara">{{ $home_settings->news_title }}</h1>
                    <!-- BERITA -->
                    @foreach ($news as $news_data)
                        <a class="text-decoration-none text-dark" href="/news/{{ $news_data->blog_slug }}">
                            <div class="content-berita mb-3 mb-md-2">
                                <div class="row">
                                    <div class="col-12 col-md-8 order-2 order-md-1 my-auto">
                                        <p class="tanggal-berita">
                                            {{ Illuminate\Support\Carbon::parse($news_data->created_at)->format('d F Y') }}
                                        </p>
                                        <h1 class="title-berita">{{ $news_data->blog_title }} </h1>
                                        <p class="subtitle-berita">
                                            {!! $news_data->blog_content_short !!}
                                            <img src="{{ asset('images') }}/icon-arrow-right.png" alt="icon arrow"
                                                style="width: 16px; height: 16px;">
                                        </p>
                                    </div>
                                    <div class="col-12 col-md-4 order-1 order-md-2 my-auto">
                                        <div class="img-wrap">
                                            <img class="cover-berita"
                                                src="{{ asset("uploads/$news_data->blog_photo") }}" alt="cover berita">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                    <a href="/news" class="text-decoration-none text-dark">
                        <button type="button" class="btn_show_more_berita_landing mt-4 d-block mx-auto">Show More</button>
                    </a>
                </div>

                <!-- Filter -->
                <div class="col-lg-4 col-12">
                    <h2 class="title-berita-acara">{{ $home_settings->events_title }}</h2>
                    {{-- <div class="dropdown">
                        <button class="btn select_category btn-secondary dropdown-toggle btn_switch_category_event"
                            type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Semua
                        </button>
                        <div class="dropdown-menu event-category" aria-labelledby="dropdownMenuButton">
                            <li class="list-dropdown"><a filters="roda-empat,roda-dua" class="dropdown-item">Semua</a>
                            </li>
                            @foreach ($event_categories as $event_category)
                                <li class="list-dropdown"><a filters="{{ $event_category->slug }}"
                                        class="dropdown-item">{{ $event_category->name }}</a></li>
                            @endforeach
                        </div>
                    </div> --}}
                    <select class="w-100 mb-3 filter_events" name="filterEvents" id="filterEvents">
                        {{-- <option style="display:none" selected value disabled>Category</option> --}}
                        <option value="roda-empat,roda-dua">Semua</option>

                        @foreach ($event_categories as $event_category)
                            <option value="{{ $event_category->slug }}">{{ $event_category->name }}</option>
                        @endforeach
                    </select>
                    <!-- Events -->
                    <div class="accordion events_wrapper_home" id="accordionExample">
                        @if (count($events) > 0)
                            @foreach ($events as $event)
                                <div categories="{{ $event->categories_slug }}" style="cursor: pointer;"
                                    class="my-2 card item_event" data-toggle="collapse"
                                    data-target="#collapse{{ $loop->iteration }}" aria-expanded="false"
                                    aria-controls="collapse{{ $loop->iteration }}">
                                    <div class="card-header content-event" id="headingOne">
                                        <div class="d-flex flex-wrap align-items-center justify-content-center">
                                            <div class="col-11" style="padding-left: 0px;">
                                                <h3 class="date_start_event">
                                                    {{ date_format(date_create($event->event_start_date), 'd F Y') }}
                                                    @if ($event->status == 'Current')
                                                        &nbsp;&nbsp;<span class="badge badge-success">tersedia</span>
                                                    @elseif ($event->status == 'Upcoming')
                                                        &nbsp;&nbsp;<span class="badge badge-info">akan datang</span>
                                                    @elseif ($event->status == 'Past')
                                                        &nbsp;&nbsp;<span class="badge badge-danger">berakhir</span>
                                                    @endif
                                                </h3>
                                                <p class="event_location_province">{{ $event->location }},
                                                    {{ $event->event_location_city }},
                                                    {{ $event->event_location_province }}</p>
                                                <div class="border_split"></div>
                                                <p class="name_event_header">{{ $event->name }}</p>
                                            </div>
                                            <div class="col-1">
                                                <img src="{{ asset('images') }}/icon-arrow-down.svg" alt="icon arrow">
                                            </div>

                                        </div>
                                    </div>
                                    <div id="collapse{{ $loop->iteration }}" class="collapse "
                                        aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="detail-event">
                                                <h3 class="title-event">
                                                    Cabang Olahraga
                                                </h3>
                                                {{ $event->sports }}
                                                {!! $home_event_registration_section->content1 !!}
                                                <a class="link_detail_event"
                                                    href="/event/{{ $event->slug }}">Selengkapnya
                                                    <span>→</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom"></div>
                            @endforeach
                        @endif
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
                    <div class="mt-4 position-relative slide_tentangImi2">
                        <p>Optimization to Execellence.</p>
                        <p class="signature_text">IMI Jawa Barat</p>
                        <img class="position-absolute" src="{{ asset('images') }}/line_blue.svg" alt="line_blue">
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
            'detail' => $home_settings->committee_detail,
            'committee' => $committee,
        ])
        <!-- END KEPENGURUSAN -->

        <!-- START NEWSLETTER -->
        @include('layouts.components.newsletter')
        <!-- END NEWSLETTER -->
    </main>
@endsection
