@extends('layouts.app')

@section('content')

    @include('layouts.components.breadcrumb')

    <section id="header_page_list_events">
        <div class="head_list_events">
            <h1>{{ $page_event_settings->name }}</h1>
            <div class="border_head_title"></div>
            <p>{!! $page_event_settings->detail !!}</p>
        </div>
        <div class="carousel_head_list_events">
            <div id="demo" class="carousel slide carousel-fade jumbotron_carousel" data-ride="carousel">
                <ul class="carousel-indicators">
                    @foreach ($events as $key => $item)
                        <li data-target="#demo" data-slide-to="{{ $key }}" class="@if($key == 0) active @endif"></li>
                    @endforeach
                </ul>
                {{-- Carousel Banner --}}
                <div class="carousel-inner">
                    @foreach ($events as $key => $crl_event)
                        <div class="carousel-item @if($key == 0) active @endif">
                            <div class="overlay_jumbotron">

                            </div>
                            <img src="{{ asset('public/uploads') . "/$crl_event->photo" }}" alt="Los Angeles" width="100%"
                                height="600">
                            <div class="carousel-caption">
                                <p class="date_author">
                                    {{ \Illuminate\Support\Carbon::parse($crl_event->end_date)->format('d F Y') }}
                                    | Editor</p>
                                <h2>{{ $crl_event->name }}</h2>
                                <p>
                                    {{ $crl_event->summary }}
                                </p>
                                <a href="/event/{{ $crl_event->slug }}">
                                    <button type="button" class="btn btn-outline-light btn_show_jumbotron">Show
                                        More
                                    </button>
                                </a>
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

    <main id="main_content_list_events">

        <section id="content_list_events">
            <div class="wrap_content_list_events row row-cols-1 row-cols-md-2 pt-2 pb-2 pt-md-5 pb-md-5">
                <div class="col">
                    <div class="d-flex justify-content-around">

                        {{-- URL FILETR CATEGORY FORMAT --}}
                        @php
                            $url_filter_prefix = url()->current() . '?page=1';
                        @endphp

                        <a style="height: 44px;" class="d-flex align-items-center px-3"
                            href="{{ $url_filter_prefix . '#content_list_events' }}">All</a>

                        @foreach ($sports as $sport)
                            <a href="{{ "$url_filter_prefix&sport=$sport->slug#content_list_events" }}"
                                style="height: 44px;" class="d-flex align-items-center px-3">{{ $sport->name }}</a>
                        @endforeach

                    </div>
                </div>
                <div class="col">
                    <div class="wrap_search_events">
                        <div class="input-group">
                            <form action="{{ route('front.event.search') }}" method="GET">
                                <input name="q" style="background-color: transparent;" type="text"
                                    class="form-control rounded border-0" placeholder="Search" aria-label="Search"
                                    aria-describedby="search-addon" />
                                <button type="submit" class="btn"><img
                                        src="{{ asset('storage/app/public/assets') }}/img/search-icon.svg"
                                        alt="search icon"></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- LIST EVENTS --}}
        <section class="pb-5 mt-4" id="list_card_events">
            <div class="wrap_list_events">
                <div class="row row-cols-1 row-cols-md-2">

                    @foreach ($events as $event)
                        <div class="col mb-4">
                            <a class="text-decoration-none text-dark" href="/event/{{ $event->slug }}">
                                <div class="card">
                                    <img class="calender_pin"
                                        src="{{ asset('storage/app/public/assets') }}/img/calender_pin.svg"
                                        alt="calender pin image">
                                    <div class="header_card_image">
                                        <div class="feature_image_event_list">
                                            <div class="ribbon_wrapper">
                                                @foreach ($event->categories as $category)
                                                    <div class="ribbon_category_event text-white">{{ $category->name }}
                                                    </div>
                                                @endforeach
                                            </div>

                                            <img src="{{ asset('public/uploads') . "/$event->photo" }}"
                                                class="card-img-top" alt="featured image">
                                        </div>
                                    </div>
                                    <div class="card-body" style="background-color: #f5f5f5">
                                        <div class="card-title">
                                            <h3>
                                                {{ $event->name }}
                                            </h3>
                                            <p class="presented_events">
                                                Presented by : {{ $event->organizer }}
                                            </p>

                                            {{-- @foreach ($event->sports as $sport)
                                                <p>{{$sport->name}}</p>
                                            @endforeach --}}
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between  card_events_list_detail">
                                            <div class="col-12 col-md-7 location_events_list">
                                                {{ $event->location }}
                                            </div>
                                            <div class="col-12 col-md-5 date_events_list pl-0">
                                                <div class="mx-md-4">
                                                    <p>
                                                        {{ \Illuminate\Support\Carbon::parse($event->start_date)->format('l') }}
                                                        -
                                                        {{ \Illuminate\Support\Carbon::parse($event->end_date)->format('l') }}
                                                        <br />
                                                        <span>
                                                            {{ \Illuminate\Support\Carbon::parse($event->start_date)->format('d') }}
                                                            -
                                                            {{ \Illuminate\Support\Carbon::parse($event->end_date)->format('d F Y') }}
                                                        </span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                </div>
            </div>
            <button class="btn_load_more_list_events mx-auto d-block">
                Load More
            </button>
        </section>

    </main>
@endsection
