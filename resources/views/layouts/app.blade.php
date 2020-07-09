<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Styles -->
        <link rel="stylesheet" href="{{mix('css/app.css')}}">
        <link rel="stylesheet" href="{{mix('css/assets.css')}}">
        <link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/grid.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <script src="https://use.fontawesome.com/c01ac736c1.js"></script>
        
        {{-- Estilos de liveshare --}}
        <link href="{{ asset('assets/css/estilosPedro.css') }}" rel="stylesheet">


        {{-- Fin de los estilos de live share --}}
        @livewireStyles
        @stack('styles')
    </head>
    <body class="{{Request::is('auction/id/*') ?  'bg-dark': 'bg-darken-light'}}">
        <div class="sticky-top">
            @include('assets.header')
    
            @include('assets.menuPrincipal')
            @include('assets.alertas')
        </div>

        @yield('content')
        <div class="{{Request::is('auction/id/*') ?  'd-none': ''}}">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 pl--1">
                        @include('assets.anuncio')
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 pl--1">
                        @include('assets.widgets')
                    </div>
                </div>
            </div>
        </div>
            
        @include('assets.footer')

        <script src="{{ mix('js/app.js') }}"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://js.pusher.com/6.0/pusher.min.js"></script>
        <script src="{{ asset('js/dropzone.js') }}"></script>
        @livewireScripts
        @stack('scripts')
    </body>

</html>
