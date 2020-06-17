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
        @stack('styles')
    </head>
    <body class="bg-fondo">
        <header class="top-0">
            <div class="container-fluid">
                <div class="row text-center">
                    <div class="col-2 mt-4">
                        <a class="btn btn-ligth" role="button">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            (+51)460 2000
                        </a>
                    </div>
                    <div class="col-2 mt-4">
                        <a class="btn btn-ligth" role="button">
                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                            Chat En Vivo
                        </a>
                    </div>
                    <div class="col-4 mt-3">
                        <a href="{{ route('index') }}">
                            <img src="{{asset('img/Logo_front.png')}}" alt="">
                        </a>
                    </div>
                    @guest
                        <div class="col-2 mt-4">
                            <a class="btn btn-ligth" role="button" href="{{route('login')}}">
                                <i class="fa fa-key" aria-hidden="true"></i>
                                Ingresar
                            </a>
                        </div>
                        <div class="col-2 mt-4">
                            <a class="btn btn-primary rounded-pill" role="button" href="{{route('register')}}">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                Registrate
                            </a>
                        </div>
                    @else
                        <div class="col-2"></div>
                        <div class="col-2 mt-4">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    @endguest

                </div>
            </div>
        </header>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
                <div class="container">
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="{{ __('Toggle navigation') }}"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                        class="collapse navbar-collapse"
                        id="navbarSupportedContent"
                    >
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('users.all') }}">Lista de Usuarios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('game.show') }}">Juego</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('chat.show') }}">Chat</a>
                            </li>
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else

                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
            <main class="">
                <div id="notification" class="alert mx-3 invisible"></div>
                @yield('content')
            </main>
        </div>
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}"></script>
        @stack('scripts')
    </body>
</html>
