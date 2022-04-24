<!-- START NAVBAR -->
<nav class="my_nav navbar sticky-top navbar-expand-lg navbar-light bg-light border-bottom">
    <div style="margin: -9px 0;" class="container-fluid">

        <a style="font-size: 16px;" class="navbar-brand" href="/">
            <img src="{{ asset('uploads/') . "/$settings?->logo" }}" alt="Logo IMI Jabar">
            <p style="margin: 0; padding:0; display:inline-block; vertical-align: middle; width: 100%; max-width: 160px;white-space:normal; font-size: 12px; font-weight: 700"
                class="navbar-text">{{ $settings?->top_bar_organization_name }}</p>
        </a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto navbar_list">
                <li class="nav-item mr-lg-3">
                    @if ($menus[0]->status)
                        <a class="nav-link @if (in_array('about', $url)) active @endif"
                            href="{{ url('/about') }}">{{ $menus[0]->name }}<span
                                class="sr-only">(current)</span></a>
                    @endif
                </li>
                <li class="nav-item">
                    @if ($menus[1]->status)
                        <a class="nav-link mr-lg-3 @if (in_array('news', $url)) active @endif"
                            href="/news">{{ $menus[1]->name }}</a>
                    @endif
                </li>
                <li class="nav-item">
                    @if ($menus[2]->status)
                        <a class="nav-link mr-lg-3 @if (in_array('event', $url)) active @endif"
                            href="/event">{{ $menus[2]->name }}</a>
                    @endif
                </li>
                <li class="nav-item">
                    @if ($menus[3]->status)
                        <a class="nav-link mr-lg-3 @if (in_array('gallery', $url)) active @endif"
                            href="/gallery?category={{ $first_gallery_category->slug ?? '' }}">{{ $menus[3]->name }}</a>
                    @endif
                </li>
                <li class="nav-item dropdown mr-lg-3">
                    @if ($menus[4]->status)
                        <a class="nav-link dropdown-toggle  @if (in_array('pendaftaran', $url)) active @endif" href="#"
                            id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            {{ $menus[4]->name }}
                        </a>
                    @endif
                    <div class="dropdown-menu mb-3" aria-labelledby="navbarDropdown">
                        @if ($menus[5]->status)
                            <a class="dropdown-item" href="/registration/kis">{{ $menus[5]->name }}</a>
                        @endif
                        @if ($menus[6]->status)
                            <a class="dropdown-item" href="/registration/kta">{{ $menus[6]->name }}</a>
                        @endif
                        @if ($menus[7]->status)
                            <a class="dropdown-item" href="/registration/club">{{ $menus[7]->name }}</a>
                        @endif
                        <a class="dropdown-item" href="{{ route("eo.registration.index") }}">Event Organizer</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto navbar_list">
                <li class="nav-item mr-lg-3">
                    <div class="switch_language">
                        <input type="checkbox" class="checkbox_switch_language" id="chk" />
                        <label class="label_switch_language" for="chk">
                            <div class="ball"></div>
                            <div class="flags">
                                <img class="ball_us flag" src="{{ asset('images') }}/flag-us.svg" alt="us flag">
                                <img class="ball_id flag" src="{{ asset('images') }}/flag-indonesia.svg"
                                    alt="is flag">
                            </div>
                            <!-- <div class="ball"></div> -->
                        </label>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link mr-lg-3">
                        <img class="mb-1 mr-2" src="{{ asset('images') }}/Telephone-Icon.svg"
                            alt="icon contact telephone">
                        {{-- 0857-XXXX-XXXX --}}
                        {{ $settings?->top_bar_phone }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link mr-lg-3">
                        <img class="mb-1 mr-2" src="{{ asset('images') }}/Email-Icon.svg"
                            alt="icon contact email">
                        {{ $settings?->top_bar_email }}
                    </a>
                </li>
            </ul>


        </div>
    </div>
</nav>
<!-- END NAVBAR -->
