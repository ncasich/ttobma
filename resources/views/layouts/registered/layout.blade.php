<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>{{ config('app.name', 'TTO BMA') }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1.0"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss'])
    @stack('styles')
</head>
<body>
<div id="ttobma">
    @include('layouts.registered.partials.header')
    <div id="content">
        @yield('content')
    </div>
{{--    @include('layouts.registered.partials.footer')--}}
</div>
@vite(['resources/js/app.js'])
@stack('scripts')
</body>
</html>
