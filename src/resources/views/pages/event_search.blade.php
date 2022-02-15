@extends('layouts.app')

@section('content')
    @include('layouts.components.breadcrumb')

    <section id="header_page_list_events">
        <div class="head_list_events">
            <h1>Pencarian Event</h1>
            <div class="border_head_title"></div>
            <p>Kata Kunci : <strong>{{ request()->q }}</strong></p>
        </div>
    </section>

    <main id="main_content_list_events">

        <section id="content_list_events">
            <div class="wrap_content_list_events row py-2 py-md-5">
                <div class="filter_parent_category_events my-auto col-12 col-md-6 col-lg-3 mb-4 order-2">
                    <select onchange="location = this.value;" class="col" name="filterCategoryEvents"
                        id="filterCategoryEvents">
                        <option style="display:none" value disabled selected>Category</option>
                        <option value="semua">Semua</option>
                        <option value="roda-dua">Roda Dua</option>
                        <option value="roda-empat">Roda Empat</option>
                    </select>
                </div>
                <div class="filter_sports_events my-auto col-12 col-md-6 col-lg-5 mb-4 order-3 order-md-2">
                    {{-- URL FILETR CATEGORY FORMAT --}}
                    @php
                        $url_filter_prefix = url()->current() . '?q=' . request()->input('q') . '&page=1';
                    @endphp
                    <select onchange="location = this.value;" class="col" name="filterSports" id="filterSports">
                        <option style="display:none" value disabled selected>Sports</option>

                        <option value="{{ $url_filter_prefix . '#content_list_events' }}">Semua</option>

                        @foreach ($sports as $sport)
                            <option value="{{ "$url_filter_prefix&sport=$sport->slug#content_list_events" }}"
                                @if (request()->sport == $sport->slug) selected @endif>{{ $sport->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 col-lg-4 my-auto mb-4 order-1 order-lg-3">
                    <div class="wrap_search_events w-100">
                        <div class="input-group">
                            <form class="d-flex w-100 justify-content-end" action="{{ route('front.event.search') }}"
                                method="GET">
                                <input name="q" style="background-color: transparent;" type="text"
                                    class="form-control rounded border-0" placeholder="Search" aria-label="Search"
                                    aria-describedby="search-addon" />
                                <button type="submit" class="btn"><img
                                        src="{{ asset('public/images') }}/search-icon.svg"
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
                    @if (count($events) == 0)
                        <p class="event_not_found">Oops, Event tidak ditemukan</p>
                    @else
                        @foreach ($events as $event)
                            <div class="col mb-4">
                                <a class="text-decoration-none text-dark" href="/event/{{ $event->slug }}">
                                    <img class="calender_pin"
                                        src="{{ asset('public/images') }}/calender_pin.svg"
                                        alt="calender pin image">
                                    <div class="card">
                                        <div class="header_card_image shadow">
                                            <div class="feature_image_event_list">

                                                <img src="{{ asset('public/uploads/') . "/$event->photo" }}"
                                                    class="card-img-top image_feature_event" alt="featured image">

                                                <div class="ribbon_wrapper">

                                                    @foreach ($event->categories as $category)
                                                        <div class="ribbon_category_event text-white">
                                                            {{ $category->name }}
                                                        </div>
                                                    @endforeach
                                                </div>
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
                                                <div class="col-12 col-md-5 pt-3 location_events_list">
                                                    {{ $event->location }}
                                                </div>
                                                <div class="col-12 col-md-7 pt-3 date_events_list pl-0 align-self-center">
                                                    <div class="d-flex justify-content-center">
                                                        <p class="ml-2">
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
                    @endif
                </div>
            </div>
            @if (count($events) != 0)
                <button class="btn_load_more_list_events mx-auto d-block">
                    Load More
                </button>
            @endif
        </section>

    </main>
@endsection
