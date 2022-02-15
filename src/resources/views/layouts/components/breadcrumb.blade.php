<!-- START BREADCRUMB -->

<section id="breadcumb">
    <div class="container-fluid wrap_breadcumb py-2">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('public/images/') }}/icon-arrow-back.png" alt="back icon" style="width: 24px; height: 24px; margin-right: 20px;">
                    </a>
                </li>
                @php
                    $urls = array_slice(explode('/', url()->current()), 2);
                    $urls[0] = 'home';
                    $urls_last = array_key_last($urls);
                @endphp
                @foreach ($urls as $key => $url)
                    <li class="breadcrumb-item  @if($key == $urls_last) active @endif">
                        <a href="@if($key == 0)/@elseif($key == $urls_last)#@else/{{ $url }}@endif" 
                        style="color: #263840; text-decoration: none; @if($key == $urls_last) font-weight: 700; @endif"> 
                            {{ $url }}
                        </a>
                    </li>
                @endforeach
            </ol>
        </nav>

       
    </div>
</section>
<!-- END BREADCRUMB -->
