@extends('layouts.app')


@section('content')
    @include('layouts.components.breadcrumb', ['url_path' => 'Tentang IMI'])

    <div id="page_klub_mobil">
        <section id="header_page_klub_mobil">
            <div class="head_klub_mobil">
                <h1>{{ $sub_page_head_section->name }}</h1>
                <p>{!! $sub_page_head_section->content1 !!}</p>
            </div>
        </section>

        <main>
            <div class="list_klub_mobil d-flex flex-wrap row-cols-1 row-cols-md-2 row-cols-lg-3">

                    <!-- <div class="col mb-4">
                        <div class="card wrap_card_community border-0 position-relative d-block">
                            <img src="{{ asset('images') }}/klub-mobil.png" class="card-img-top image_card_klub_mobil" alt="...">

                            <div class="position-absolute overlay_collaps overlay_car_community h-100 w-100">

                                <div class="head_overlay_collaps">
                                    <h5 class="card-title">West-Javanese Tesla Community Lorem ipsum dolor sit, amet</h5>

                                    <div style="color: rgba(244, 244, 249, 0.8);"
                                        class="d-flex subtittle_card justify-content-between align-items-center">
                                        <p style="margin-bottom: 0;">Dibentuk Pada: 19 Januari 2018</p>
                                        <div class="click_icon">
                                            <p
                                                style="font-size:10px; font-weight: 700; margin-bottom: 0; text-align: center;">
                                                Click
                                                Me</p>
                                            <img class="mx-auto d-block" src="{{ asset('images') }}/cursor-hand-click.svg"
                                                alt="click icon">
                                        </div>
                                    </div>
                                </div>

                                <div class="content_overlay_collaps opacity_object">
                                    <div class="leader_name">
                                        <p style="margin-bottom: 0;">Ketua Komunitas:</p>
                                        <p class="">Ahmad Suparjo Widyahadiningrat</p>
                                    </div>
                                    <p style="margin-bottom: 0;">Terhubung Bersama Kami:</p>
                                    <div class="sosial_media_klub_mobil align-self-end">
                                        <p>
                                            <a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com"><i
                                                    class="fa-brands fa-instagram"></i></a>
                                            <a target="_blank" rel="noopener noreferrer" href="https://www.whatsapp.com">
                                                <i class="fa-brands fa-whatsapp"></i>
                                            </a>
                                            <a target="_blank" rel="noopener noreferrer" href="https://www.twitter.com">
                                                <i class="fa-brands fa-twitter"></i>
                                            </a>
                                            <a target="_blank" rel="noopener noreferrer" href="https://www.facebook.com"> <i
                                                    class="fa-brands fa-facebook"></i>
                                            </a>
                                            <a target="_blank" rel="noopener noreferrer" href="https://www.gmail.com">
                                                <i class="fa-solid fa-envelope"></i>
                                            </a>
                                        </p>
                                        <img src="{{ asset('images') }}/close_icon.svg" alt="close_icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

            </div>

            <div id="loader" class="spinner-border text-secondary" role="status">
                <span class="sr-only">Loading...</span>
            </div>

            <button class="btn_load_more_klub_mobil mx-auto d-block">
                Load More
            </button>
        </main>
    </div>
@endsection
