<!doctype html>
<html lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layouts.assets.styles')

    @php
        $fav = Illuminate\Support\Facades\DB::table('general_settings')
            ->select('favicon')
            ->first();
        $social_media = Illuminate\Support\Facades\DB::table('social_media_items')
            ->select('social_url', 'social_icon', 'social_order')
            ->orderBy('social_order')
            ->get();
        $first_gallery_category = Illuminate\Support\Facades\DB::table('gallery_categories')
            ->select('slug')
            ->first();
        $menus_setting = DB::table('menus')
            ->select('name', 'status')
            ->get();
    @endphp

    <script src="https://www.google.com/recaptcha/api.js"></script>

    <link rel="icon" type="image/x-icon" href="{{ asset('uploads') . "/$fav->favicon" }}">
    <title>IMI Jawa Barat</title>
</head>

<body>
    @php
        $url = explode('/', request()->path());
    @endphp

    <!-- Navbar -->
    @include('layouts.components.nav', ['menus' => $menus_setting, 'first_gallery_category' =>
    $first_gallery_category])

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    @include('layouts.components.footer', ['social_media' => $social_media])

    <p id="typed" hidden></p>
    {{-- Scripts --}}
    @include('layouts.assets.scripts')
 
</body>

</html>
