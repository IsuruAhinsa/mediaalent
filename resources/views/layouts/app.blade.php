<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="{{ setting('site.description') }}">
    <meta name="keywords" content="{{ setting('site.keywords') }}">
    <meta name="author" content="University of Moratuwa|Isuru Jayawickrama|isurujayawickramat@gmail.com">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ setting('site.title') }} @yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/core-img/favicon.png') }}" sizes="16x16 32x32 64x64">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>
    <div id="preloader">
        <div class="loader"></div>
    </div>

    @include('include.search')

    @include('include.header')

    @yield('content')

    @include('include.follow')

    @include('include.footer')

    <!-- jQuery 2.2.4 -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Popper -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- All Plugins -->
    <script src="{{ asset('js/alime.bundle.js') }}"></script>
    <!-- Active -->
    <script src="{{ asset('js/default-assets/active.js') }}"></script>

</body>
</html>
