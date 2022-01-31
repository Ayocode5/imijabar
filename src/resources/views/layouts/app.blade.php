<!doctype html>
<html lang="id">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('layouts.styles')

    <title>IMI Jawa Barat</title>
</head>

<body>
  
    {{-- Navbar --}}
    @include('layouts.nav')
   
    @yield('jumbotron-section')

    {{-- Main Content --}}
    <main>
        @yield('main-section')
    </main>

    @include('layouts.footer')

    <!-- Optional JavaScript -->
    @include('layouts.scripts')
</body>

</html>
