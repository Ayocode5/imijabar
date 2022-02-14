@extends('layouts.app')

@section('content')
    @include('layouts.components.breadcrumb')

    <header id="header_detail_event">
        <div class="wrap_image_header_detail_event position-relative">
            <div class="conten_overlay_header_image_detail_event">
                <h1>{{ $event->name }}</h1>
                <p>
                    {{ $event->location }}
                    {{ \Illuminate\Support\Carbon::parse($event->start_date)->format('d') }}
                    -
                    {{ \Illuminate\Support\Carbon::parse($event->start_date)->format('d F Y') }}
                </p>
                <p>--- Presented by: {{ $event->organizer }} ---</p>
                <a href="{{ $event->link ?? '#' }}">
                    <button class="btn_daftar_event_detail">Daftar Disini</button>
                </a>
            </div>
            <div class="overlay_image_detail_event">
            </div>
            <img class="featured_image" src="{{ asset('/public/uploads/') . "/$event->photo" }}" alt="featured image">
        </div>
    </header>

    <main id="main_content_detail_event">
        <section class="py-lg-5 content_detail_event">
            <div class="wrap_content_detail_event">
                <p style="color: rgb(26, 38, 48)">
                    &nbsp; &nbsp; &nbsp; &nbsp;
                    &nbsp; &nbsp; &nbsp; &nbsp;
                    {!! $event->content !!}</p>
            </div>
        </section>

        <section class="cabor_lomba_event_detail pt-5">
            <div class="wrap_cabor_lomba">
                <div class="d-flex flex-wrap justify-content-md-between">
                    <div class="col-12 col-md-7">
                        <h2 class="title_event_detail">Cabang Olahraga Yang Dilombakan</h2>
                    </div>
                    <div class="col-12 col-md-5 align-self-end">
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
                    </div>
                </div>
            </div>
            <!-- START CABOR -->
            <div class="pb-5" id="cabor_detail_event">
                <div class="container-fluid py-5">
                    <div class="multiple_item_carousel_cabor">
                        <div class="owl-carousel owl-theme carousel_cabor_detail_event">
                            @foreach ($event->sports as $sport)
                                <div categories="{{ $sport->category->slug }}"" class="      item">
                                    <img src="{{ asset('public/uploads') . "/$sport->image" }}"
                                        alt="{{ $sport->name }}">
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
        <section class="sponsor_event mx-auto d-block">
            <div class="wrap_sponsor_event text-center py-5">
                <h2>Event Ini Di Sponsori Oleh:</h2>
                <div class="d-flex flex-wrap justify-content-center logo_sponsor_event">
                    {{-- {{ dd($event) }} --}}
                    @foreach ($event->sponsors as $sponsor)
                        <img src="{{ asset('public/uploads') . "/$sponsor->image" }}" alt="{{ $sponsor->name }}"><br>
                    @endforeach
                </div>
            </div>
        </section>
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
                                <img src="{{ asset('public/images/') }}/arrow_top.svg" alt="arrow top">
                            </div>
                        </div>

                        <div id="suratRekomendasi_collapseOne" class="collapse"
                            aria-labelledby="suratRekomendasi_headingOne" data-parent="#suratRekomendasi">
                            <div class="card-body">
                                <p>Surat Rekomendasi Indo MotoSport Grandprix 2022</p>
                                <a href="#" target="_blank" rel="noreferrer nofollow"><button type="button"
                                        class="btn btn-light btn-outline-dark text-center button_download_file mt-2"><img
                                            class="mr-3"
                                            src="{{ asset('public/images/') }}/pdf-icon.png" alt="">
                                        Download
                                        File</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
