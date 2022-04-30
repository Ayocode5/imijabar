@extends('layouts.app')

@section('content')
    @include('layouts.components.breadcrumb')

    <section id="header_page_registration_event">
        <div class="head_registration_event">
            <h1>{{ $head_section->name }}</h1>
            <p>{!! $head_section->content1 !!}</p>
        </div>

        <div class="wrap_header_event_register">
            <div class="card border-0">
                <img class="img-fluid card-img featured_image_event_register" src="{{ asset("uploads/$head_section->banner") }}"
                    alt="featured image event">

                <div class="card-img-overlay overlay_image_event_register d-flex">
                    <div class="my-auto mx-auto text-center content_overlay_image_event_register">
                        <h4 class="card-title">{!! $head_section->content2 !!}</h4>

                        <a href="{{ $head_section->link }}">
                            <button class="btn_daftar_event">Daftar Disini</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main id="main_registrasi_event">
        <section id="requirements_resgis_event">
            <div class="wrap_requirements_resgis_event py-5">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div class="title_requirements_regis_event col-12 col-md-7">
                        <h2>{{ $requirement_section->name }}</h2>
                    </div>
                    <div class="wrap_image_line_requirements_regis_event col-12 col-md-5">
                        <img class="w-100" src="{{ asset('images') }}/line_blue.svg" alt="line image">
                    </div>
                </div>
                <div class="mt-3 list_requirements_regis_event">
                    {!! $requirement_section->content1 !!}
                </div>
            </div>
        </section>

        <section id="tatacara_resgis_event">
            <div class="wrap_requirements_resgis_event py-5">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                    <div class="title_requirements_regis_event col-12 col-md-5">
                        <h2>{{ $howto_section->name }}</h2>
                    </div>
                    <div class="wrap_image_line_requirements_regis_event col-12 col-md-7">
                        <img class="w-100" src="{{ asset('images') }}/line_blue.svg" alt="line image">
                    </div>
                </div>
                {!! $howto_section->content1 !!}
            </div>
        </section>
    </main>
@endsection
