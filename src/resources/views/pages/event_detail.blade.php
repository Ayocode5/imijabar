@extends('layouts.app')

@section('content')
    @include('layouts.components.breadcrumb')

    <header id="header_detail_event">
        <div class="wrap_header_detail_event">
            <div class="card border-0">
                <img class="img-fluid card-img featured_image_event_detail"
                    src="{{ asset('uploads/') . "/$event->photo" }}" alt="featured image">

                <div class="card-img-overlay overlay_image_event_detail d-flex">
                    <div class="my-auto mx-auto text-center content_overlay_image_event_detail">
                        <h4 class="card-title">{{ $event->name }}</h4>
                        <h6 class="text location_detail_event">{{ $event->location }}
                            {{ \Illuminate\Support\Carbon::parse($event->start_date)->format('d') }}
                            -
                            {{ \Illuminate\Support\Carbon::parse($event->start_date)->format('d F Y') }}</h6>

                        @if ($event->organizer)
                            <p class="card-text">Presented by: {{ $event->organizer }}</p>
                        @endif
                        <a href="{{ $event->link ?? '#' }}">
                            <button class="btn_daftar_event_detail">Daftar Disini</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main id="main_content_detail_event">
        <section class="py-lg-5 content_detail_event">
            <div class="wrap_content_detail_event">
                <p style="color: rgb(26, 38, 48)">
                    &nbsp; &nbsp; &nbsp; &nbsp;
                    {!! $event->content !!}</p>
            </div>
        </section>

        <section class="cabor_lomba_event_detail pt-5">
            <div class="wrap_cabor_lomba">
                <div class="d-flex flex-wrap justify-content-md-between">
                    <div class="col-12 col-md-7">
                        <h2 class="title_event_detail">Cabang Olahraga Yang Dilombakan <span><img class="w-50"
                                    src="{{ asset('images/') }}/line_blue.svg" alt=""></span> </h2>

                    </div>
                    {{-- <div class="col-12 col-md-5 align-self-end">
                        <div class="dropdown select_category_cabor">
                            <button class="btn select_category btn-secondary dropdown-toggle btn_switch_category_event"
                                type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Roda Empat
                            </button>
                            <div class="dropdown-menu event-category" aria-labelledby="dropdownMenuButton">
                                @foreach ($event_categories as $e_category)
                                    <li categories="{{ $e_category->slug }}" class="list-dropdown"><a
                                            class="dropdown-item">{{ $e_category->name }}</a></li>
                                @endforeach
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <!-- START CABOR -->
            <div class="pb-5" id="cabor_detail_event">
                <div class="container-fluid py-3 py-lg-5">
                    <div class="multiple_item_carousel_cabor">
                        <div class="owl-carousel owl-theme carousel_cabor_detail_event">
                            @foreach ($event->sports as $sport)
                                <div categories="{{ $sport->category->slug }}" class="item">
                                    <img src="{{ asset('uploads') . "/$sport->image" }}" alt="{{ $sport->name }}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <a class="text-decoration-none" href="{{ $event->link ?? '#' }}">
                    <button class="btn_daftar_event d-block mx-auto">Daftar Disini</button>
                </a>
            </div>
            <!-- END CABOR -->
        </section>


        <!-- START SPONSOR -->
        @if (count($event->sponsors) > 0)
            <section class="sponsor_event mx-auto d-block">
                <div class="wrap_sponsor_event text-center py-5">
                    <h2>Event Ini Di Sponsori Oleh:</h2>
                    <div class="d-flex flex-wrap justify-content-center logo_sponsor_event mt-3 mt-lg-5">
                        {{-- {{ dd($event) }} --}}
                        @foreach ($event->sponsors as $sponsor)
                            <div>
                                <img src="{{ asset('uploads') . "/$sponsor->image" }}" alt="{{ $sponsor->name }}"><br>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
        <!-- END SPONSOR -->

        <section id="surat_rekomendasi">
            <div class="wrap_surat_rekomendasi">
                <div class="accordion" id="suratRekomendasi">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between"
                            id="suratRekomendasi_headingOne" data-toggle="collapse"
                            data-target="#suratRekomendasi_collapseOne" aria-expanded="false"
                            aria-controls="suratRekomendasi_collapseOne">
                            <h3 class="mb-0 col-10 text_surat_rekomendasi">
                                <button class="btn btn-link" type="button">
                                    Surat Rekomendasi
                                </button>
                            </h3>
                            <div class="col-2">
                                <img src="{{ asset('images/') }}/arrow_top.svg" alt="arrow top">
                            </div>
                        </div>

                        <div id="suratRekomendasi_collapseOne" class="collapse"
                            aria-labelledby="suratRekomendasi_headingOne" data-parent="#suratRekomendasi">
                            <div class="card-body">

                                <p>Surat Rekomendasi {{ $event->name }}</p>
                                @if ($event->document_link)
                                    <a href="{{ $event->document_link }}" target="_blank"
                                        rel="noreferrer nofollow"><button type="button"
                                            class="btn btn-light btn-outline-dark text-center button_download_file mt-2"><img
                                                class="mr-3" src="{{ asset('images/') }}/pdf-icon.png" alt="">
                                            Download
                                            File</button></a>
                                @else
                                    <p>Dokument Tidak Ada</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
