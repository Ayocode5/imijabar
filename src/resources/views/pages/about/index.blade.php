@extends('layouts.app')

@section('content')
    @include('layouts.components.breadcrumb', ['url_path' => 'Tentang IMI'])

    <!-- START VISI MISI -->
    <section id="visi_misi">
        <div class="container-fluid wrap_visi_misi">
            <div class="row visi_section">
                <div class="col-12 col-md-7 order-2 order-md-1 align-items-center d-flex">
                    <div>
                        <div class="d-inline">

                        </div>
                        <h2 class="visimisi-outline">VISI <span
                                class="visimisi-jabar">{{ $about_settings?->heading1 }}</span></h2>
                        <!-- <div class="border_visi"></div> -->
                        <p class="visimisi-detail">{!! $about_settings?->body1 !!}</p>

                    </div>
                </div>
                <div class="align-items-center d-flex col-12 col-md-5 order-1 order-md-2">
                    <img src="{{ asset('images') }}/visi-img.png" alt="visimisi img" class="img-fluid">
                </div>
            </div>
            <div class="row misi_section">
                <div class="align-items-center d-flex col-12 col-md-5 order-1">
                    <img src="{{ asset('images') }}/misi-img.png" alt="visimisi img" class="img-fluid">
                </div>
                <div class="col-12 col-md-7 order-2 align-items-center justify-content-end d-flex">
                    <div>
                        <div class="d-inline">

                        </div>
                        <h2 class="visimisi-jabar text-right">
                            {{ $about_settings?->heading2 }}
                            <span class="visimisi-outline">
                                MISI
                            </span>
                        </h2>

                        <!-- <div class="border_visi"></div> -->
                        <p class="visimisi-detail">{!! $about_settings?->body2 !!}</p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END VISI MISI -->

    <!-- START PAPAN BULETIN -->
    <section id="buletin">
        <div class="container-fluid wrap_buletin">
            <div class="col-12 col-md-7 order-2 order-md-1 align-items-center d-flex">
                <h1 class="title_buletin">
                    Papan Buletin
                </h1>
            </div>

            <div class="accordion" id="accordionPapanBuletin">
                <div class="wrap_bulletin_board">
                 
                </div>

            </div>
            
            <button class="btn_load_more_buletin mx-auto d-block">
                Load More
            </button>
        </div>
    </section>
    <!-- END PAPAN BULETIN -->

    <!-- START SEJARAH -->
    <section id="sejarah">
        <div class="container-fluid wrap_sejarah_imi">
            <div class="row">
                <div class="col-12 col-md-6 order-2 order-md-1">
                    <h2 class="sejarah-title">
                        {!! $about_settings?->subtitle !!}
                    </h2>
                    <div class="sejarah-text">
                        <span class="sejarah-text-bold"> {{ $about_settings?->heading3 }} - </span>
                        {!! $about_settings?->body3 !!}
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1 order-md-2">
                    <img src="{{ asset('images') }}/sejarah-img.png" alt="sejarah img" class="sejarah-img mt-5">
                </div>
            </div>
            <img src="{{ asset('images') }}/sejarah-arrow-down.png" alt="arrow down" class="sejarah-arrow">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="sejarah-text">
                        <span class="sejarah-text-bold"> {{ $about_settings?->heading4 }} - </span>
                        {!! $about_settings?->body4 !!}
                    </div>
                </div>
                <div class="col-12 col-lg-2 d-flex justify-content-center">
                    <img src="{{ asset('images') }}/sejarah-arrow-right.png" alt="arrow right" class="sejarah-arrow2">
                </div>
                <div class="col-12 col-lg-5">
                    <div class="sejarah-text">
                        <span class="sejarah-text-bold"> {{ $about_settings?->heading5 }} - </span>
                        {!! $about_settings?->body5 !!}
                    </div>
                </div>
            </div>
            <div class="showmore-btn">
                <div class="accordion" id="accordionShowMore">
                    <div class="card" style="border: none;">
                        <div id="collapseHistory" class="collapse" aria-labelledby="showMoreHistory"
                            data-parent="#accordionShowMore">
                            <div class="card-body p-0" style="background-color: #fbfbfbfb;">
                                <div class="row d-flex justify-content-end mr-md-2">
                                    <img src="{{ asset('images') }}/sejarah-arrow-down.png" alt="arrow down"
                                        class="sejarah-arrow">
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-5 order-3 order-lg-1">
                                        <div class="sejarah-text">
                                            <span class="sejarah-text-bold"> {{ $about_settings?->heading6 }} - </span>
                                            {!! $about_settings?->body6 !!}
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2 order-2 d-flex justify-content-center">
                                        <img src="{{ asset('images') }}/sejarah-arrow-right.png" alt="arrow right"
                                            class="sejarah-arrow4">
                                    </div>
                                    <div class="col-12 col-lg-5 order-1 order-lg-3">
                                        <div class="sejarah-text">
                                            <span class="sejarah-text-bold"> {{ $about_settings?->heading7 }}- </span>
                                            {!! $about_settings?->body7 !!}
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ asset('images') }}/sejarah-arrow-down.png" alt="arrow down"
                                    class="sejarah-arrow">
                                <div class="row">
                                    <div class="col-12 col-lg-5">
                                        <div class="sejarah-text">
                                            <span class="sejarah-text-bold"> {{ $about_settings?->heading8 }} - </span>
                                            {!! $about_settings?->body8 !!}
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2 d-flex justify-content-center">
                                        <img src="{{ asset('images') }}/sejarah-arrow-right.png" alt="arrow right"
                                            class="sejarah-arrow2">
                                    </div>
                                    <div class="col-12 col-lg-5">
                                        <div class="sejarah-text">
                                            <span class="sejarah-text-bold"> {{ $about_settings?->heading9 }} - </span>
                                            {!! $about_settings?->body9 !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="row d-flex justify-content-end mr-md-2">
                                    <img src="{{ asset('images') }}/sejarah-arrow-down.png" alt="arrow down"
                                        class="sejarah-arrow">
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-5 order-3 order-lg-1">
                                        <div class="sejarah-text">
                                            <span class="sejarah-text-bold"> {{ $about_settings?->heading10 }} - </span>
                                            {!! $about_settings?->body10 !!}
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-2 order-2 d-flex justify-content-center">
                                        <img src="{{ asset('images') }}/sejarah-arrow-right.png" alt="arrow right"
                                            class="sejarah-arrow4">
                                    </div>
                                    <div class="col-12 col-lg-5 order-1 order-lg-3">
                                        <div class="sejarah-text">
                                            <span class="sejarah-text-bold"> {{ $about_settings?->heading11 }} - </span>
                                            {!! $about_settings?->body11 !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-header" id="showMoreHistory" style="background-color: #F8F8F8;">
                            <h2 class="mb-0 d-flex justify-content-center">
                                <div class="showmore_history">
                                    <input type="checkbox" class="show_more_tentang_imi" id="shwmr" data-toggle="collapse"
                                        data-target="#collapseHistory" aria-expanded="true"
                                        aria-controls="collapseHistory" />
                                    <label class="label_show_more_history d-flex align-items-center" for="shwmr">
                                        <div class="text_show_more_tentang_imi"></div>
                                        <img src="{{ asset('images') }}/icon-arrow-down.svg" alt="arrow down"
                                            class="showmore-icon">
                                    </label>
                                </div>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SEJARAH -->

    <!-- START GALERI -->
    @include('layouts.components.gallery')
    <!-- END GALERI -->

    <!-- START KEPENGURUSAN -->
    @include('layouts.components.committee', [
        'title' => $home_settings->committee_title,
        'detail' => $home_settings->committee_detail,
        'committee' => $committee,
    ])
    <!-- END KEPENGURUSAN -->

    <!-- START ANGGARAN -->
    <section>
        <div class="wrap_anggaran">
            <div id="accordion">

                <div class="card my_card">
                    <div style="cursor: pointer" class="card-header ad_imi" id="headingOne" data-toggle="collapse"
                        data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed card-title" style="padding: 0px;">
                                    {{ $ad_section_page->name }}
                                </button>
                            </h5>
                            <img src="{{ asset('images') }}/arrow_down.svg" alt="collaps anggaran dasar">
                        </div>
                    </div>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body ad_imi">

                            {!! $ad_section_page->content1 !!}

                        </div>
                    </div>
                </div>

                <div class="card my_card">
                    <div style="cursor: pointer" class="card-header ad_imi" id="headingTwo" data-toggle="collapse"
                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed card-title" style="padding: 0px;">
                                    {{ $art_section_page->name }}
                                </button>
                            </h5>
                            <img src="{{ asset('images') }}/arrow_down.svg" alt="collaps anggaran dasar">
                        </div>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body ad_imi">
                            {{-- Anggaran Dasar IMI Jawa Barat periode 2021 - 2025, silahkan unduh disini :
                            <br />
                            <div class="btn btn-light btn-outline-dark text-center button_download_file mt-2">
                                <a href="#">
                                    <img class="mr-3" src="{{ asset('images') }}/pdf-icon.png" alt="pdf icon"> 
                                        Download File
                                </a>
                            </div>
                            {{-- <button type="button"
                                class="btn btn-light btn-outline-dark text-center button_download_file mt-2"><img
                                    class="mr-3" src="{{ asset('images') }}/pdf-icon.png" alt=""> Download
                                File</button> --}}
                            {!! $art_section_page->content1 !!}
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- END ANGGARAN -->
@endsection
