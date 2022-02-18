@extends('layouts.app')

@section('content')
    @include('layouts.components.breadcrumb')

    <section id="header_page_galeri">
        <div class="head_galeri">
            <h1>Galeri</h1>
            <div class="border_head_title"></div>
            <p>Berita Terbaru Seputar Otomotif, dan Berita Terbaru dari dunia Olahraga Roda Dua & Roda Empat.</p>
        </div>
    </section>

    <main id="main_content_galeri">
        <section id="date-dropown">
            <div class="container">
                <div class="galeri-date-dropdown ">
                    <div class="d-flex flex-wrap justify-content-center justify-content-md-between">
                        <h2 class="galery-date">
                            Bandung, 17 Januari 2020
                        </h2>
                        <div class="dropdown">
                            <button class="btn select_gallery btn-secondary dropdown-toggle btn_switch_gallery_event"
                                type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Malam Penghargaan IMI Jawa Barat
                            </button>
                            <div class="dropdown-menu event-gallery" aria-labelledby="dropdownMenuButton">
                                @foreach ($categories as $category)
                                    <li class="list-dropdown"><a class="dropdown-item">{{ $category->name }}</a></li>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section>
            <div class="container">
                <!-- WRAP LIST FOTO -->
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
                    <!-- ITEM FOTO -->

                    {{-- {{ dd($galleries)}} --}}
                    @foreach ($galleries as $gallery)
                        <div class="col mb-4">
                            <div data-toggle="modal" data-target="#exampleModalCenter-{{ $loop->iteration }}">
                                <div class="h-100 box-image">
                                    @if ($gallery->type == 'photo')
                                        <img src="{{ asset('public/uploads/') . "/$gallery->photo_name" }}"
                                            alt="image gallery" class="gallery-image mx-auto d-block">
                                    @else
                                        <img src="http://img.youtube.com/vi/{{ $gallery->video_youtube }}/default.jpg"
                                            alt="image gallery" class="gallery-image mx-auto d-block">
                                    @endif
                                    <div class="gallery-overlay">
                                        <a href="#" class="icon">
                                            <img src="{{ asset('public/images/') }}/icon-zoom.png" alt="detail"
                                                class="gallery-icon-hover">
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter-{{ $loop->iteration }}" tabindex="-1"
                                role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <!-- <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                    <span aria-hidden="true">&times;</span>
                                                                                </button>
                                                                            </div> -->
                                        <div class="modal-body">
                                            @if ($gallery->type == 'photo')
                                                <img class="d-block w-100"
                                                    src="{{ asset('public/uploads/') . "/$gallery->photo_name" }}">
                                            @else
                                                <iframe width="100%" height="100%"
                                                    src="https://www.youtube.com/embed/{{ $gallery->video_youtube }}">
                                                </iframe>
                                            @endif
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </section>
    </main>
@endsection
