<!-- START BREADCRUMB -->
<section id="breadcumb">
    <div class="container-fluid wrap_breadcumb py-3">
        <div class="d-flex align-items-center">
            <a href="{{ url('/') }}">
                <img src="{{ asset('storage/app/public/assets/') }}/img/icon-arrow-back.png" alt="back icon"
                    style="width: 24px; height: 24px; margin-right: 20px;">
            </a>
            {{-- <a class="mr-2" href="{{ url('/') }}" style="color: #000; text-decoration: none;">Home
            </a> --}}
            @php
                $urls = array_slice(explode('/', url()->current()), 2);
                $urls = array_map(function($url) {
                    return str_replace("-", " ", $url);
                }, $urls);
                $urls[0] = 'home';

                $urls_length = count($urls);
                
            @endphp
            @foreach ($urls as $key => $url)
                <a href="
                    @if($key == 0) 
                        /
                    @else 
                        @if($urls[1] != $url)
                            {{str_replace(" ", "-", $url)}} 
                        @endif
                    @endif" 
                    
                    style="color: #000; text-decoration: none; @if($key == ($urls_length - 1)) font-weight: 700; @endif"> / &nbsp; {{ $url }} &nbsp;
                </a>
            @endforeach
        </div>
    </div>
</section>
<!-- END BREADCRUMB -->
