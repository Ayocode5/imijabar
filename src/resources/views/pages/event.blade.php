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
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                </ul>
                {{-- Carousel Banner --}}
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="overlay_jumbotron">

                        </div>
                        <img src="{{ asset('storage/app/public/assets') }}/img/jumbotron-img.png" alt="Los Angeles"
                            width="100%" height="600">
                        <div class="carousel-caption">
                            <p class="date_author">23 Januari 2022 | Admin</p>
                            <h2>Ford Mustang Shelby GT 500 1967</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit egestas enim id in orci.
                                Id eu
                                ullamcorper aliquet platea pretium. Id commodo nisl accumsan, viverra enim sit
                                mattis. Cras ipsum et
                                blandit auctor.</p>
                            <button type="button" class="btn btn-outline-light btn_show_jumbotron">Show
                                More</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="overlay_jumbotron">

                        </div>
                        <img src="{{ asset('storage/app/public/assets') }}/img/jumbotron-img2.png" alt="Chicago"
                            width="100%" height="600">
                        <div style="text-align: right;" class="carousel-caption">
                            <p>23 Januari 2022 | Admin</p>
                            <h2>Ford Mustang Shelby GT 500 1967</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit egestas enim id in orci.
                                Id eu
                                ullamcorper aliquet platea pretium. Id commodo nisl accumsan, viverra enim sit
                                mattis. Cras ipsum et
                                blandit auctor.</p>
                            <button type="button" class="btn btn-outline-light">Show More</button>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="overlay_jumbotron">

                        </div>
                        <img src="{{ asset('storage/app/public/assets') }}/img/jumbotron-img.png" alt="New York"
                            width="100%" height="600">
                        <div class="carousel-caption">
                            <p>23 Januari 2022 | Admin</p>
                            <h2>Ford Mustang Shelby GT 500 1967</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit egestas enim id in orci.
                                Id eu
                                ullamcorper aliquet platea pretium. Id commodo nisl accumsan, viverra enim sit
                                mattis. Cras ipsum et
                                blandit auctor.</p>
                            <button type="button" class="btn btn-outline-light">Show More</button>

                        </div>
                    </div>
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
                <div class="col mb-4 order-2 order-md-1">
                    <div class="d-flex justify-content-around">
                        <div class="position-relative row row-cols-1 row-cols-md-2 border-0 wrap_select_category_events"> 
                            <select onchange="location = this.value;" class="col" name="filterCategoryEvents" id="filterCategoryEvents" >      
                                <option value="Semua">Semua</option>
                                <option value="Roda Dua">Roda Dua</option>
                                <option value="Roda Dua">Roda Empat</option>
                            </select>
    
                            {{-- URL FILETR CATEGORY FORMAT --}}
                            @php
                                $url_filter_prefix = url()->current()."?page=1"
                            @endphp
                            <select onchange="location = this.value;" class="col" name="filterSports" id="filterSports" >
                                
                                <option value="{{ $url_filter_prefix . "#content_list_events" }}">Semua</option>
    
                                @foreach ($sports as $sport)
                                <option value="{{ "$url_filter_prefix&sport=$sport->slug#content_list_events"}}"
                                    @if(request()->sport == $sport->slug) 
                                        selected
                                    @endif    
                                >{{ $sport->name }}</option>
                                @endforeach
                            </select>
                        </div>

                    

                    </div>
                </div>
                <div class="col mb-4 order-1 order-md-2">
                    <div class="wrap_search_events w-100">
                        <div class="input-group">
                            <form class="d-flex w-100 justify-content-end" action="{{ route('front.event.search') }}" method="GET">
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
                            <a class="text-decoration-none text-dark" href="detail-event.html">
                                <img class="calender_pin"
                                    src="{{ asset('storage/app/public/assets') }}/img/calender_pin.svg"
                                    alt="calender pin image">
                                <div class="card">
                                    <div class="header_card_image shadow">
                                        <div class="feature_image_event_list">

                                            <img src="{{ asset('storage/app/public/assets') }}/img/photo_event_detail.png"
                                                class="card-img-top image_feature_event" alt="featured image">
                                                
                                            <div class="ribbon_wrapper">

                                                @foreach ($event->categories as $category)
                                                    <div class="ribbon_category_event text-white">{{ $category->name }}
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body shadow">
                                        <div class="card-title">
                                            <h3>
                                                {{ $event->name }}
                                            </h3>
                                            <p class="presented_events">Presented By IMI Jabar</p>

                                            {{-- @foreach ($event->sports as $sport)
                                                <p>{{$sport->name}}</p>
                                            @endforeach --}}
                                        </div>
                                        <div class="d-flex flex-wrap justify-content-between  card_events_list_detail">
                                            <div class="col-12 col-md-5 pt-3 location_events_list">
                                                {{ $event->summary }}
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

                </div>
            </div>

            <button class="btn_load_more_list_events mx-auto d-block">
                Load More
            </button>
        </section>

    </main>
@endsection
