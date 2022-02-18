@extends('layouts.app')

@section('content')
    @include('layouts.components.breadcrumb')

    <section id="header_page_pendaftaran_kta">
        <div class="head_pendaftaran_kta">
            <h1>{{ $section1->name }}</h1>
            <div class="border_head_title"></div>
            <p>{!! $section1->content1 !!}</p>
        </div>
        <div class="feature_image_pendaftaran_kta">
            <img class="d-block mx-auto" src="{{ asset('public/uploads') . "/$section1->banner" }}" alt="image pendaftaran kta">
        </div>
    </section>

    <main id="main_content_registrasi_kta">
        <section id="persyaratan_resgis_kta">
            <div class="wrap_persyaratan_resgis_kta py-5">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div class="title_persyaratan_regis_kta col-12 col-md-7">
                        <h2>{{ $section2->name }}</h2>
                    </div>
                    <div class="wrap_image_line_persyaratan_regis_kta col-12 col-md-5">
                        <img class="w-100" src="{{ asset('public/images/')}}/line_blue.svg" alt="line image">
                    </div>
                </div>
                {!! $section2->content1 !!}
            </div>
        </section>

        <section id="tatacara_resgis_kta">
            <div class="wrap_persyaratan_resgis_kta py-5">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div class="title_persyaratan_regis_kta col-12 col-md-5">
                        <h2>{{ $section3->name }}</h2>
                    </div>
                    <div class="wrap_image_line_persyaratan_regis_kta col-12 col-md-7">
                        <img class="w-100" src="{{ asset('public/images/')}}/line_blue.svg" alt="line image">
                    </div>
                </div>
                {!! $section3->content1 !!}
            </div>
        </section>
    </main>
@endsection
