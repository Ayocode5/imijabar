{{-- @php
$menus = DB::table('menus')->get();
$menu_arr = [];
@endphp

@foreach ($menus as $row)
    @php
        $menu_arr[$row->menu_name] = $row->menu_status;
    @endphp
@endforeach --}}

<!-- Start Navbar Area -->
{{-- <div class="navbar-area" id="stickymenu">

    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="" class="logo">
            <img src="{{ asset('public/uploads/' . $g_setting?->logo) }}" alt="">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('public/uploads/' . $g_setting?->logo) }}" alt="logo">
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                        @if (!empty($menu_arr))

                            @if ($menu_arr['Home'] == 'Show')
                                <li class="nav-item">
                                    <a href="{{ url('/') }}" class="nav-link">Home</a>
                                </li>
                            @endif

                            @if ($menu_arr['About'] == 'Show')
                                <li class="nav-item">
                                    <a href="{{ route('front.about') }}" class="nav-link ">About</a>
                                </li>
                            @endif

                            @if ($menu_arr['Services'] == 'Show')
                                <li class="nav-item">
                                    <a href="{{ route('front.services') }}" class="nav-link ">Services</a>
                                </li>
                            @endif

                            @if ($menu_arr['Shop'] == 'Show')
                                <li class="nav-item">
                                    <a href="{{ route('front.shop') }}" class="nav-link ">Shop</a>
                                </li>
                            @endif

                            @if ($menu_arr['Blog'] == 'Show')
                                <li class="nav-item">
                                    <a href="{{ route('front.blogs') }}" class="nav-link ">Blog</a>
                                </li>
                            @endif


                            @php
                                $dynamic_pages = DB::table('dynamic_pages')->get();
                            @endphp


                            @if ($menu_arr['Career'] == 'Hide' && $menu_arr['Project'] == 'Hide' && $menu_arr['Photo Gallery'] == 'Hide' && $menu_arr['Video Gallery'] == 'Hide' && $menu_arr['FAQ'] == 'Hide' && $menu_arr['Team Members'] == 'Hide' && !$dynamic_pages)

                            @else
                                <li class="nav-item">
                                    <a href="javascript:void(0);" class="nav-link dropdown-toggle">Pages</a>
                                    <ul class="dropdown-menu">

                                        @if ($menu_arr['Career'] == 'Show')
                                            <li class="nav-item">
                                                <a href="{{ route('front.career') }}"
                                                    class="nav-link">Career</a>
                                            </li>
                                        @endif

                                        @if ($menu_arr['Project'] == 'Show')
                                            <li class="nav-item">
                                                <a href="{{ route('front.projects') }}"
                                                    class="nav-link">Projects</a>
                                            </li>
                                        @endif

                                        @if ($menu_arr['Photo Gallery'] == 'Show')
                                            <li class="nav-item">
                                                <a href="{{ route('front.photo_gallery') }}"
                                                    class="nav-link">Photo Gallery</a>
                                            </li>
                                        @endif

                                        @if ($menu_arr['Video Gallery'] == 'Show')
                                            <li class="nav-item">
                                                <a href="{{ route('front.video_gallery') }}"
                                                    class="nav-link">Video Gallery</a>
                                            </li>
                                        @endif

                                        @if ($menu_arr['FAQ'] == 'Show')
                                            <li class="nav-item">
                                                <a href="{{ route('front.faq') }}" class="nav-link">FAQ</a>
                                            </li>
                                        @endif

                                        @if ($menu_arr['Team Members'] == 'Show')
                                            <li class="nav-item">
                                                <a href="{{ route('front.team_members') }}"
                                                    class="nav-link">Team Members</a>
                                            </li>
                                        @endif


                                        @foreach ($dynamic_pages as $row)
                                            <li class="nav-item">
                                                <a href="{{ url('page/' . $row->dynamic_page_slug) }}"
                                                    class="nav-link">{{ $row->dynamic_page_name }}</a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </li>
                            @endif


                            @if ($menu_arr['Contact'] == 'Show')
                                <li class="nav-item">
                                    <a href="{{ route('front.contact') }}" class="nav-link ">Contact</a>
                                </li>
                            @endif
                        @endif

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div> --}}
<!-- End Navbar Area -->

<!-- START NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid mx-lg-5">
      <a class="navbar-brand" href="index.html">
        <img src="{{asset('storage/app/public/assets/img')}}/logoIMIJabar.svg" alt="Logo IMI Jabar">
      </a>
      <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto navbar_list">
          <li class="nav-item mr-lg-3">
            <a class="nav-link" href="about.html">Tentang IMI<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-lg-3" href="#">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-lg-3" href="#">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-lg-3" href="#">Acara</a>
          </li>
          <li class="nav-item dropdown mr-lg-3">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Pendaftaran
            </a>
            <div class="dropdown-menu mb-3" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">KIS</a>
              <a class="dropdown-item" href="#">KTA</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto navbar_list">
          <li class="nav-item mr-lg-3">
            <input type="checkbox" checked data-toggle="toggle" data-on="IND" data-off="ENG" data-style="ios"
              data-onstyle="primary" data-offstyle="danger">
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link mr-lg-3">
              <img class="mb-1 mr-2" src="{{asset('storage/app/public/assets/img')}}/Telephone-Icon.svg" alt="icon contact telephone">
              0857-XXXX-XXXX
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link mr-lg-3">
              <img class="mb-1" src="{{asset('storage/app/public/assets/img')}}/Email-Icon.svg" alt="icon contact email">

            </a>
          </li>
        </ul>


      </div>
    </div>
  </nav>
  <!-- END NAVBAR -->