<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!--=============== basic  ===============-->
    <meta charset="UTF-8" />
    @yield('title')
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="robots" content="index, follow" />
    <meta name="description"
        content="AR Store Revoluční webová aplikace na prezentování vaších produktů zapomocí rozšířené reality." />
    <meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="dns-prefetch" href="//www.google.com">
    <!--=============== css  ===============-->
    <link rel="canonical" href="https://www.arstore.cz/">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="/favicon.ico" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('/frontend/css/min/style.min.css') }}" />
    <!-- gallery -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <!--=============== favicons ===============-->


    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    <link rel="manifest" href="{{ asset('site.webmanifest') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">

    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="msapplication-TileImage" content="{{ asset('apple-touch-icon.png') }}" />
    <meta name="theme-color" content="#ffffff" />

    <link rel="preconnect" href="https://www.arstore.cz/blog/">
    <link rel="preconnect" href="https://www.arstore.cz/cenik/">
    <link rel="preconnect" href="https://www.arstore.cz/kontakt/">
    @livewireStyles
    @livewireScripts
</head>

@yield('body-with-class')
@yield('content')

<!-- Main Js File -->
<script src="{{ asset('frontend/js/script.js') }}"></script>


<script src="{{ asset('frontend/js/alpine.js') }}" defer></script>
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/lightslider.js') }}"></script>
<script src="{{ asset('frontend/js/script.js') }}"></script>
<script src="{{ asset('frontend/js/mail.js') }}"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</body>

</html>
