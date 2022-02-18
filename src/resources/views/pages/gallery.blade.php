@extends('layouts.app')

@section('content')
    @include('layouts.components.breadcrumb')

    <section id="header_page_galeri">
        <div class="head_galeri">
            <h1>Galeri</h1>
            <p>Berita Terbaru Seputar Otomotif, dan Berita Terbaru dari dunia Olahraga Roda Dua & Roda Empat.</p>
        </div>
    </section>

    <main id="main_content_galeri">
        <section id="date-dropown">
            <div class="container">
                <div class="galeri-date-dropdown">
                    <div class="d-flex flex-wrap justify-content-center justify-content-md-between">
                        <h2 class="col-12 col-md-4 galery-date">
                            Bandung, 17 Januari 2020
                        </h2>
                        <div class="col-12 col-md-3 border_content_gallery"></div>
                        <select class="col-12 col-md-4 category_gallery" name="filterCategoryGallery"
                        id="filterCategoryGallery">
                            <option style="display:none" value disabled selected>Category</option>
                            <option categories="all" value="all">Semua</option>
                            @foreach ($categories as $category)
                            <option categories="{{ $category->slug }}" value="{{ $category->slug }}">{{         $category->name }}</option>
                            @endforeach
                        </select>
                        
                    </div>
                </div>
        </section>

        <section>
            <div class="container">
                <!-- WRAP LIST FOTO -->
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 list_gallery">
                    <!-- ITEM FOTO -->
                    <div class="col mb-4">
                        <div data-toggle="modal" data-target="#exampleModalCenter">
                            <div class="h-100 box-image position-relative">
                                <img class="position-absolute icon_type_file" src="{{ asset('public/images/') }}/icon_picture.svg" alt="icon picture">
                                <img src="{{ asset('public/images/') }}/jumbotron-img2.png" alt="image gallery"
                                    class="gallery-image mx-auto d-block">
                                
                                <div class="gallery-overlay">
                                    <a href="#" class="icon">
                                        <img src="{{ asset('public/images/') }}/icon-zoom.png" alt="detail" class="gallery-icon-hover">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <img class="d-block w-100" src="{{ asset('public/images/') }}/jumbotron-img2.png">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col mb-4">
                        <div data-toggle="modal" data-target="#exampleModalCenter2">
                            <div class="h-100 box-image position-relative">
                                <img class="position-absolute icon_type_file" src="{{ asset('public/images/') }}/icon_movie.svg" alt="icon video">
                                <img src="http://img.youtube.com/vi/Vaz_kpmTi0M/default.jpg" alt="image gallery"
                                    class="gallery-image mx-auto d-block">
                                
                                <div class="gallery-overlay">
                                    <a href="#" class="icon">
                                        <img src="{{ asset('public/images/') }}/icon-zoom.png" alt="detail" class="gallery-icon-hover">
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenter2Title" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <iframe width="100%" height="300"
                                            src="https://www.youtube.com/embed/Vaz_kpmTi0M">
                                        </iframe>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

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
