<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        @livewireStyles
        @stack('styles')
    </head>
    <body class="bg-fondo">
        @include('assets.header')
        <div id="app">
            @include('assets.menuPrincipal')
            <main class="">
                <div id="notification" class="alert mx-3 invisible"></div>
                @yield('content')
            </main>
        </div>
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}"></script>
        @livewireScripts
        @stack('scripts')
    </body>
</html>
