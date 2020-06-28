
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/grid.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <!-- my account upload file -->
        <link href="{{ asset('css/dropzone.css') }}" rel="stylesheet">
        @livewireStyles
        @stack('styles')
    </head>
    <body class="{{Request::is('auction/id/*') ?  'bg-dark': 'bg-darken-light'}}">
        @include('assets.header')

        @include('assets.menuPrincipal')

        @yield('content')

        @include('assets.footer')

        <script src="{{ mix('js/app.js') }}"></script>
        <script src="{{ asset('js/dropzone.js') }}"></script>
        @livewireScripts
        @stack('scripts')
    </body>

</html>
