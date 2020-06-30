<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
        <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/grid.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <!-- my account upload file -->
        {{-- <link href="{{ asset('css/dropzone.css') }}" rel="stylesheet"> --}}
        @livewireStyles
        @stack('styles')
    </head>
    <body class="{{Request::is('auction/id/*') ?  'bg-dark': 'bg-darken-light'}}">
        @include('assets.header')

        @include('assets.menuPrincipal')

        @yield('content')

        @include('assets.footer')

        <script src="{{ mix('js/app.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <script src="{{ asset('js/dropzone.js') }}"></script>
        @livewireScripts
        @stack('scripts')
    </body>

</html>
