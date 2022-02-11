<!doctype html>
<html lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layouts.assets.styles')

    @php
        $fav = Illuminate\Support\Facades\DB::table('general_settings')->select('favicon')->first();
    @endphp
    
    <link rel="icon" type="image/x-icon" href="{{ asset('public/uploads')."/$fav->favicon" }}">
    <title>IMI Jawa Barat</title>
</head>

<body>
    @php
        $url = request()->path();
    @endphp

    <!-- Navbar -->
    @include('layouts.components.nav')

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    @include('layouts.components.footer')

    {{-- Scripts --}}
    @include('layouts.assets.scripts')

</body>

</html>
