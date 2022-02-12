<!-- START NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <div style="margin: -9px 0;" class="container-fluid mx-lg-5">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('public/uploads/') . "/$settings?->logo" }}" alt="Logo IMI Jabar">
        </a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto navbar_list">
                <li class="nav-item mr-lg-3">
                    <a class="nav-link @if ($url == 'about') active @endif" href="{{ url('/about') }}">Tentang IMI<span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-lg-3 @if ($url == 'news') active @endif" href="/news">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-lg-3 @if ($url == 'events') active @endif" href="#">Acara</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-lg-3 @if ($url == 'galleries') active @endif" href="#">Galeri</a>
                </li>
                <li class="nav-item dropdown mr-lg-3">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <div class="switch_language">
                        <input type="checkbox" class="checkbox_switch_language" id="chk" />
                        <label class="label_switch_language" for="chk">
                            <div class="ball"></div>
                            <div class="flags">
                                <img class="ball_us flag"
                                    src="{{ asset('storage/app/public/assets/img') }}/flag-us.svg" alt="us flag">
                                <img class="ball_id flag"
                                    src="{{ asset('storage/app/public/assets/img') }}/flag-indonesia.svg" alt="is flag">
                            </div>
                            <!-- <div class="ball"></div> -->
                        </label>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link mr-lg-3">
                        <img class="mb-1 mr-2"
                            src="{{ asset('storage/app/public/assets/img') }}/Telephone-Icon.svg"
                            alt="icon contact telephone">
                        {{-- 0857-XXXX-XXXX --}}
                        {{ $settings?->top_bar_phone }}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link mr-lg-3">
                        <img class="mb-1 mr-2" src="{{ asset('storage/app/public/assets/img') }}/Email-Icon.svg"
                            alt="icon contact email">
                        {{ $settings?->top_bar_email }}
                    </a>
                </li>
            </ul>


        </div>
    </div>
</nav>
<!-- END NAVBAR -->
