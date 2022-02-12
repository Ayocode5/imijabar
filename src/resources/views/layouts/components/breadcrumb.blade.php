<!-- START BREADCRUMB -->
<section id="breadcumb">
    <div class="container-fluid wrap_breadcumb py-3">
        <div class="d-flex align-items-center">
            <a href="{{ url('/') }}">
                <img src="{{ asset('storage/app/public/assets/') }}/img/icon-arrow-back.png" alt="back icon"
                    style="width: 24px; height: 24px; margin-right: 20px;">
            </a>
            {{-- Breacrumb Url Splitter --}}
            @php
                $urls = array_slice(explode('/', url()->current()), 2);
                $urls[0] = 'home';
                $urls_last = array_key_last($urls);
            @endphp
            @foreach ($urls as $key => $url)
                <a href="@if($key == 0)/@elseif($key == $urls_last)#@else/{{ $url }}@endif"
                    style="color: #000; text-decoration: none; @if($key == $urls_last) font-weight: 700; @endif"> 
                    / &nbsp; {{ $url }} &nbsp;
                </a>
            @endforeach
        </div>
    </div>
</section>
<!-- END BREADCRUMB -->
