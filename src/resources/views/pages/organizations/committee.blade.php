@extends('layouts.app')

@section('content')

    @include('layouts.components.breadcrumb')

    <div style="background-color: #F8F8F8;">
        <section id="header_page_committee">
            <div class="head_list_committee">
                <h1>Pengurus IMI Jawa Barat</h1>
                <p>Susunan Pengurus Ikatan Motor Indonesia (IMI) Provinsi Jawa Barat, Periode 2021 - 2025.</p>
            </div>
        </section>

        <main id="content_page_committee">
            <div class="wrap_content_page_commiittee">
                <div class="wrap_list_committee scroll_content_page row justify-content-center row-cols-1 row-cols-md-2 row-cols-lg-3">
                    <!-- <div class="col mb-4">
                        <div class="wrap_committe_image selectDisable">

                            <img class="photo_committe selectDisable" src="./assets/img/commite/1.png" alt="pengurus">
                            <div class="ribbon_committee">

                                <div class="d-flex align-items-center">
                                    <div class="col-3 small_logo">
                                        <img src="{{ asset('images') }}/logoSmall.svg" alt="logoimi">
                                    </div>
                                    <div class="col-1 sparator">
                                        <img src="{{ asset('images') }}/sparator.svg" alt="sparator">
                                    </div>
                                    <div class="col-8 small_tag">
                                        <p>
                                            Official Management of IMI Jawa Barat
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="wrap_animation_img_overlay_committe">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="content_overlay_committes">
                                <h2 class="selecDisable name_committe text-center selectDisable">H. Danniel Mutaqien
                                    Syafiuddin, S.T
                                </h2>
                                <p class="selectDisable position_committee">Ketua Umum IMI Jawa Barat</p>
                                <span class="sosial_media_committe">
                                    <p>
                                        <a rel="noopener noreferrer" target="_blank" href="www.google.com">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        <a rel="noopener noreferrer" target="_blank" href="www.google.com">
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                    </p>
                                </span>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
            <div id="loader" class="spinner-border text-secondary" role="status">
                <span class="sr-only">Loading...</span>
            </div>
            <button class="btn_load_more_list_committee mx-auto d-block mb-5">Load More</button>
            <div class="download_structure_committee">
                <p>Struktur Organisasi IMI Jawa Barat periode 2021 - 2025, Silahkan unduh disini:</p>
                <a href="www.google.com"><img class="mr-3" src="{{ asset('images/') }}/pdf-icon.png" alt="pdf icon">Download File</a>
            </div>
        </main>
    </div>
@endsection
