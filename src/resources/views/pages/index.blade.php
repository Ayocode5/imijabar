@extends('layouts.app')

{{-- @section('content')
<div class="slider">
    <div class="slide-carousel owl-carousel">

        @foreach ($sliders as $row)
        <div class="slider-item" style="background-image:url({{ asset('public/uploads/'.$row->slider_photo) }});">
            <div class="slider-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <div class="slider-table">
                            <div class="slider-text">
                                <div class="text-animated">
                                    <h1>{{ $row->slider_heading }}</h1>
                                </div>
                                <div class="text-animated">
                                    <p>
                                        {!! nl2br(e($row->slider_text)) !!}
                                    </p>
                                </div>
                                <div class="text-animated">
                                    <ul>
                                        <li><a href="{{ $row->slider_button_url }}">{{ $row->slider_button_text }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>


@if ($page_home?->why_choose_status == 'Show')
<div class="feature">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h2>{{ $page_home->why_choose_title }}</h2>
                    <h3>{{ $page_home->why_choose_subtitle }}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($why_choose_items as $row)
            <div class="col-md-4">
                <div class="feature-item wow fadeInUp">
                    <div class="icon">
                        <img src="{{ asset('public/uploads/'.$row->photo) }}" alt="">
                    </div>
                    <h4>{{ $row->name }}</h4>
                    <p>
                        {!! nl2br(e($row->description)) !!}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif


@if ($page_home?->special_status == 'Show')
<div class="special" style="background-image: url({{ asset('public/uploads/'.$page_home->special_bg) }});">
    <div class="bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 wow fadeInLeft">
                <h2>{{ $page_home->special_title }}</h2>
                <h3>{{ $page_home->special_subtitle }}</h3>
                <p>
                    {!! nl2br(e($page_home->special_content)) !!}
                </p>
                <div class="read-more">
                    <a href="{{ $page_home->special_btn_url }}" class="btn btn-primary btn-arf">{{ $page_home->special_btn_text }}</a>
                </div>
            </div>
            <div class="col-md-6 wow fadeInRight">
                <div class="video-section" style="background-image: url({{ asset('public/uploads/'.$page_home->special_video_bg) }})">
                    <div class="bg video-section-bg"></div>
                    <div class="video-button-container">
                        <a class="video-button" href="https://www.youtube.com/watch?v={{ $page_home->special_yt_video }}"><span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif


@if ($page_home?->service_status == 'Show')
<div class="service">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h2>{{ $page_home->service_title }}</h2>
                    <h3>{{ $page_home->service_subtitle }}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="service-carousel owl-carousel">
                    @foreach ($services as $row)
                    <div class="service-item wow fadeInUp">
                        <div class="photo">
                            <a href="{{ url('service/'.$row->slug) }}"><img src="{{ asset('public/uploads/'.$row->photo) }}" alt=""></a>
                        </div>
                        <div class="text">
                            <h3><a href="{{ url('service/'.$row->slug) }}">{{ $row->name }}</a></h3>
                            <p>
                                {!! nl2br(e($row->short_description)) !!}
                            </p>
                            <div class="read-more">
                                <a href="{{ url('service/'.$row->slug) }}">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif


@if ($page_home?->testimonial_status == 'Show')
<div class="testimonial" style="background-image: url({{ asset('public/uploads/'.$page_home->testimonial_bg) }});">
    <div class="testimonial-bg"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h2>{{ $page_home->testimonial_title }}</h2>
                    <h3>{{ $page_home->testimonial_subtitle }}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-carousel owl-carousel">
                    @foreach ($testimonials as $row)
                    <div class="testimonial-item wow fadeInUp">
                        <div class="photo">
                            <img src="{{ asset('public/uploads/'.$row->photo) }}" alt="">
                        </div>
                        <div class="text">
                            <p>
                                {!! nl2br(e($row->comment)) !!}
                            </p>
                            <h3>{{ $row->name }}</h3>
                            <h4>{{ $row->designation }}</h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif


@if ($page_home?->project_status == 'Show')
<div class="project">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h2>{{ $page_home->project_title }}</h2>
                    <h3>{{ $page_home->project_subtitle }}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="project-carousel owl-carousel">
                    @foreach ($projects as $row)
                    <div class="project-item wow fadeInUp">
                        <div class="photo">
                            <a href="{{ url('project/'.$row->project_slug) }}"><img src="{{ asset('public/uploads/'.$row->project_featured_photo) }}" alt=""></a>
                        </div>
                        <div class="text">
                            <h3><a href="{{ url('project/'.$row->project_slug) }}">{{ $row->project_name }}</a></h3>
                            <p>
                                {!! nl2br(e($row->project_content_short)) !!}
                            </p>
                            <div class="read-more">
                                <a href="{{ url('project/'.$row->project_slug) }}">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif


@if ($page_home?->team_member_status == 'Show')
<div class="team bg-lightblue">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h2>{{ $page_home->team_member_title }}</h2>
                    <h3>{{ $page_home->team_member_subtitle }}</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="team-carousel owl-carousel">

                    @foreach ($team_members as $row)
                    <div class="team-item wow fadeInUp">
                        <div class="team-photo">
                            <a href="{{ url('team-member/'.$row->slug) }}" class="team-photo-anchor">
                                <img src="{{ asset('public/uploads/'.$row->photo) }}" alt="Team Member Photo">
                            </a>
                        </div>
                        <div class="team-text">
                            <h4><a href="{{ url('team-member/'.$row->slug) }}">{{ $row->name }}</a></h4>
                            <p>{{ $row->designation }}</p>
                        </div>
                    </div>
                    @endforeach
                                        
                </div>
            </div>
        </div>
    </div>
</div>
@endif



@if ($page_home?->appointment_status == 'Show')
<div class="cta" style="background-image: url({{ asset('public/uploads/'.$page_home->appointment_bg) }});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="cta-box text-center">
                    <h2>{{ $page_home->appointment_title }}</h2>
                    <p class="mt-3">
                        {!! nl2br(e($page_home->appointment_text)) !!}
                    </p>
                    <a href="{{ $page_home->appointment_btn_url }}" class="btn btn-primary">{{ $page_home->appointment_btn_text }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endif



@if ($page_home?->latest_blog_status == 'Show')
<div class="blog-area">
    <div class="container wow fadeIn">

        <div class="row">
            <div class="col-md-12">
                <div class="heading wow fadeInUp">
                    <h2>{{ $page_home->latest_blog_title }}</h2>
                    <h3>{{ $page_home->latest_blog_subtitle }}</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="blog-carousel owl-carousel">

                    @foreach ($blogs as $row)
                    <div class="blog-item wow fadeInUp">
                        <a href="{{ url('blog/'.$row->blog_slug) }}">
                            <div class="blog-image">
                                <img src="{{ asset('public/uploads/'.$row->blog_photo) }}" alt="Blog Image">
                                <div class="date">
                                    <h3>{{ \Carbon\Carbon::parse($row->created_at)->format('d') }}</h3>
                                    <h4>{{ \Carbon\Carbon::parse($row->created_at)->format('M') }}</h4>
                                </div>
                            </div>
                        </a>
                        <div class="blog-text">
                            <h3><a href="{{ url('blog/'.$row->blog_slug) }}">{{ $row->blog_title }}</a></h3>
                            <p>
                                {!! nl2br(e($row->blog_content_short)) !!}
                            </p>
                            <div class="read-more">
                                <a href="{{ url('blog/'.$row->blog_slug) }}">Read More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endif


@if ($page_home?->newsletter_status == 'Show')
<div class="newsletter-area" style="background-image: url({{ asset('public/uploads/'.$page_home->newsletter_bg) }});">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 newsletter">
                <div class="newsletter-text wow fadeInUp">
                    <h2>{{ $page_home->newsletter_title }}</h2>
                    <p>
                        {!! nl2br(e($page_home->newsletter_text)) !!}
                    </p>
                </div>
                <div class="newsletter-button wow fadeInUp">
                    <form action="{{ route('front.subscription') }}" method="post" class="frm_newsletter justify-content-center">
                        @csrf
                        <input type="text" placeholder="Enter Your Email" name="subs_email">
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

@endsection --}}



{{-- Jumbotron --}}
@section('jumbotron-section')
    @include('pages.component.jumbotron')
@endsection

{{-- Main Section --}}
@section('main-section')
    {{-- News & Event --}}
    <section>
        <div class="d-flex flex-wrap berita-acara">
            <div class="col-lg-8 col-12">
                <h1 class="title-berita-acara">Berita</h1>
                <div class="border_title"></div>
                <!-- BERITA 1 -->
                @foreach ($news as $item)
                    <div class="content-berita mb-3 mb-md-2">
                        <div class="row">
                            <div class="col-12 col-md-8 order-2 order-md-1 my-auto">
                                <p class="tanggal-berita">{{ $item->created_at }}
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspEditor</p>
                                <h1 class="title-berita">{{ $item->blog_title }}</h1>
                                <p class="subtitle-berita">
                                    {{ $item->blog_content_short }}
                                    <img src="{{ asset('storage/app/public/assets/img') }}/icon-arrow-right.png"
                                        alt="icon arrow" style="width: 16px; height: 16px;">
                                </p>
                            </div>
                            <div class="col-12 col-md-4 order-1 order-md-2 my-auto">
                                <div class="img-wrap">
                                    <img class="cover-berita"
                                        src="{{ asset('public/uploads') . '/' . $item->blog_photo }}" alt="cover berita">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <button type="button" class="btn mt-4 btn-outline-dark d-block mx-auto">Show More</button>
            </div>

            <div class="col-lg-4">
                <h1 class="title-berita-acara">Jadwal Acara</h1>
                <div class="border_acara"></div>
                <div class="dropdown">
                    <button class="btn select_category btn-secondary dropdown-toggle btn_switch_category_event"
                        type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        All Event
                    </button>
                    <div class="dropdown-menu event-category" aria-labelledby="dropdownMenuButton">
                        @foreach ($event_categories as $event_category)
                            <li class="list-dropdown"><a class="dropdown-item">{{ $event_category->name }}</a></li>
                        @endforeach
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    @foreach ($events as $event)
                        <div class="card item_event">
                            <div class="card-header content-event" id="headingOne">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-2" style="margin-right: 16px;">
                                        <h3 class="tgl-event">{{ date_format(date_create($event->event_start_date), "d") }}</h1>
                                    </div>
                                    <div style="border-right: 1px solid #5996EC;" class="col-5 p-0">
                                        <p class="month-event m-0">{{ date_format(date_create($event->event_start_date), "F Y") }}</p>
                                        <h3 class="loc-event">{{ $event->event_location }}</h1>
                                    </div>
                                    <div class="col-3 p-2">
                                        <h3 class="name-event">{{$event->name}}</h1>
                                    </div>
                                    <div style="cursor: pointer;" class="col-1" data-toggle="collapse"
                                        data-target="#collapse{{$loop->iteration}}" aria-expanded="true" aria-controls="collapse{{$loop->iteration}}">
                                        <img src="{{ asset('storage/app/public/assets/img') }}/icon-arrow-down.svg"
                                            alt="icon arrow">
                                    </div>
                                </div>
                            </div>
                            <div id="collapse{{$loop->iteration}}" class="collapse " aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <div class="col">
                                        <h1 class="title-event">
                                            Cabang Olahraga
                                        </h1>
                                        <p class="detail-event">
                                            {{ $event->sports }}
                                        </p>
                                    </div>
                                    <div class="col">
                                        <h1 class="title-event">
                                            Info Pendaftaran
                                        </h1>
                                        <p class="detail-event">
                                            Robert Alfonso: 0857-XXXX-XXXX atau<br>Link: bit.ly/kejurnas2022
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- About --}}
    <section id="tentangIMI" class="pb-5 mb-5">
        <div class="row mx-lg-5 mt-5 no-gutters wrap_tentangImi">
            <div class="col-12 col-lg-6 slide_tentangImi1">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    IMI Jawa Barat merupakan organisasi yang bergerak di bidang otomotif dan beraffiliasi langsung
                    dengan PP
                    IMI. IMI Jawa Barat dibentuk pada 19 Desember 1989. Di awal pembentukan IMI Jawa Barat di pimpin
                    oleh H
                    MADJOERI yang juga aktif sebagai Kepaa DLLAJR Jawa Barat.
                </p>`
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Berdirinya IMI Jawa Barat di prakarsai oleh klub mobil Volkswagen Club Bandung dan Speed Driver,
                    yang pada
                    selanjutnya bersama-sama membentuk suatu Steering Committe untuk merumuskan perubahan dari IMJB
                    (Ikatan
                    Motor Jawa Barat) yang sudah ada untuk menjadi IMI Jawa Barat.
                </p>
            </div>
            <div class="col-12 col-lg-6 ml-auto my-auto signature_imijabar position-relative">
                <p class="position-relative"><span class="position-absolute">“</span></p>
                <div class="position-relative slide_tentangImi2">
                    <p>Optimization to Execellence.</p>
                    <p class="signature_text">IMI Jawa Barat</p>
                    <img class="position-absolute" src="{{ asset('storage/app/public/assets/img') }}/line_blue.svg"
                        alt="line_blue">
                    <p class="selengkapnya_tentangImi">Selengkapnya</p>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row wrap_background_imi pt-3 pb-3 justify-content-center align-items-center">
                <img class="col-2 img-fluid image_border_right"
                    src="{{ asset('storage/app/public/assets/img') }}/background_IMI1.png" alt="">

                <img class="col-4 img-fluid image_border_right"
                    src="{{ asset('storage/app/public/assets/img') }}/background_IMI2.png" alt="">

                <img class="col-4 img-fluid" src="{{ asset('storage/app/public/assets/img') }}/background_IMI3.png"
                    alt="">

                <img class="col-2 img-fluid image_border_left"
                    src="{{ asset('storage/app/public/assets/img') }}/background_IMI4.png" alt="">


            </div>
        </div>

    </section>

    @include('pages.component.committee')
    @include('pages.component.newsletter')
@endsection
