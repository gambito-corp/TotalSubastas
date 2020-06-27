
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
    
        @if (Request::is('auction/id/*'))
            <body class="bg-dark">
        @else 
            <body class="bg-darken-light">
        @endif
        
        @livewire('layout.header')
    
        @livewire('layout.top-menu')
        
        @yield('content')
    
        @livewire('layout.footer')
       
        <script src="{{ mix('js/app.js') }}"></script>
        <script src="{{ asset('js/dropzone.js') }}"></script>
        @livewireScripts
        @stack('scripts')
    </body>
    
    </html>