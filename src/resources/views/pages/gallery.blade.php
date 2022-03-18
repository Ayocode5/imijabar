@extends('layouts.app')

@section('content')
    @include('layouts.components.breadcrumb')

    <section id="header_page_galeri">
        <div class="head_galeri">
            <h1>{{ $gallery_settings->name }}</h1>
            <p>{!! $gallery_settings->detail !!}</p>
        </div>
    </section>

    <main id="main_content_galeri">
        <section id="date-dropown">
            <div class="wrap_category_gallery">
                <div class="galeri-date-dropdown">
                    <div class="d-flex flex-wrap justify-content-center justify-content-md-between">
                        <h2 class="col-12 col-md-4 galery-date">
                            {{ Illuminate\Support\Carbon::parse($categories[0]->created_at)->format('d F Y') }}
                        </h2>
                        <div class="col-12 col-md-3 border_content_gallery"></div>
                        {{-- <select onchange="location = this.value;" class="col-12 col-md-4 category_gallery"
                            name="filterCategoryGallery" id="filterCategoryGallery">
                            <option style="display:none" value disabled selected>Category</option>
                            @foreach ($categories as $category)
                                <option @if (request()->category == $category->slug) selected @endif
                                    value="{{ request()->url . "?category=$category->slug" }}"
                                    categories="{{ $category->slug }}" value="{{ $category->slug }}">
                                    {{ $category->name }}</option>
                            @endforeach
                        </select> --}}
                        <!-- Button trigger modal -->
                        <button type="button" class="col-12 col-md-4 button_Select_category_gallery btn btn-secondary"
                            data-toggle="modal" data-target="#exampleModalCenter">
                            Select Category
                        </button>

                        <!-- Modal -->
                        <div class="modal gallery_category fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">

                                    <div class="modal-body">
                                        <ul class="list_category_gallery" style="list-style-type:none">
                                            <li>
                                                <div class="form-check">
                                                    <a href="www.google.com">

                                                        <input onClick="window.location = 'http://google.com/';"
                                                            class="form-check-input" type="radio" name="flexRadioDefault"
                                                            id="flexRadioDefault1">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            test Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                                            Illum, ex ipsam. Reiciendis voluptate aliquam sapiente tenetur
                                                            delectus illo magni dolorum soluta, officiis quibusdam facilis
                                                            odit culpa incidunt quis est sint?
                                                        </label>

                                                    </a>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                        id="flexRadioDefault2" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        Default checked radio
                                                    </label>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="modal-footer">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section>
            <div class="wrap_list_gallery">
                <!-- WRAP LIST FOTO -->
                <div class="d-flex flex-wrap list_gallery justify-content-center justify-content-lg-around">

                    @foreach ($galleries as $gallery)
                        <div>
                            <div srcModal="{{ $gallery->type == 'video' ? $gallery->video_youtube : $gallery->photo_name }}"
                                type-file="{{ $gallery->type }}" class="thumbnail_gallery" data-toggle="modal"
                                data-target="#exampleModalCenter-{{ $loop->iteration }}">
                                <div class="h-100 w-100 wrap_thumbnail_image">
                                    <div class="gallery-overlay">
                                        <a href="#" class="icon">
                                            <img src="{{ asset('images') }}/icon-zoom.png" alt="detail"
                                                class="gallery-icon-hover">
                                        </a>
                                    </div>
                                    <div class="position-relative">
                                        @if ($gallery->type == 'photo')
                                            <img loading="lazy" class="position-absolute icon_type_file"
                                                src="{{ asset('images') }}/icon_picture.svg" alt="icon picture">
                                            <img loading="lazy" src="{{ asset('uploads') . "/$gallery->photo_name" }}"
                                                alt="image gallery" class="gallery-image mx-auto d-block skeleton">
                                        @else
                                            <img loading="lazy" class="position-absolute icon_type_file"
                                                src="{{ asset('images') }}/icon_movie.svg" alt="icon video">
                                            <img loading="lazy"
                                                src="http://img.youtube.com/vi/{{ $gallery->video_youtube }}/default.jpg"
                                                alt="image gallery" class="gallery-image mx-auto d-block skeleton">
                                        @endif

                                    </div>
                                </div>
                            </div>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter-{{ $loop->iteration }}" tabindex="-1"
                                role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">

                                        <div class="modal-body frame_modal_gallery">
                                            @if ($gallery->type == 'photo')
                                                <div class="frame_modal_body_photo">

                                                </div>

                                                {{-- <img loading="lazy" class="d-block w-100 skeleton" src=""> --}}
                                            @else
                                                <div class="frame_modal_body_video">

                                                </div>
                                                {{-- <iframe loading="lazy" class="embed-responsive-item skeleton"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen id="video" width="100%" height="300"
                                                    src="https://www.youtube.com/embed/{{ $gallery->video_youtube }}">
                                                </iframe> --}}
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
