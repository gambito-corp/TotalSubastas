<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- head -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{mix('css/app.css')}}" />
        <link rel="stylesheet" href="{{mix('css/assets.css')}}" />
        <!-- Start of Async Drift Code -->

        <script>
        "use strict";

        !function() {
        var t = window.driftt = window.drift = window.driftt || [];
        if (!t.init) {
            if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
            t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
            t.factory = function(e) {
            return function() {
                var n = Array.prototype.slice.call(arguments);
                return n.unshift(e), t.push(n), t;
            };
            }, t.methods.forEach(function(e) {
            t[e] = t.factory(e);
            }), t.load = function(t) {
            var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
            o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
            var i = document.getElementsByTagName("script")[0];
            i.parentNode.insertBefore(o, i);
            };
        }
        }();
        drift.SNIPPET_VERSION = '0.3.1';
        drift.load('6r6634p4k2sk');
        </script>

<!-- End of Async Drift Code -->
        {{-- llamar desde mix --}}
        {{-- <script src="https://use.fontawesome.com/c01ac736c1.js"></script> --}}

        {{-- Fin de los estilos de live share --}}
        @livewireStyles
        @stack('styles')
    </head>
    <!-- body -->

    <body class="{{Request::is('auction/id/*') ?  'bg-dark': 'bg-darken-light'}}">
        <!-- Header -->
        <header class="sticky-top" id="cabecera">
            <div class="navbar nav-top ">
                <div class="container flex-wrap justify-content-md-between justify-content-sm-center">
                    <div class="row">
                        <div class="col ">
                            <a href="#" class="navbar-brand d-flex text-dark align-items-center">
                                <img src="{{asset('assets/img/Icon-Phone.svg')}}" class="mr-2 " alt="" srcset=""> (+51) 460-2000
                            </a>
                        </div>
                        <div class="col mt-2 ml-2">
                            <a href="#" class="text-dark">
                            <img src="{{asset('assets/img/Imagen 1.png')}}" alt="">
                                Chat en vivo
                            </a>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col-md  mr-auto  ">
                            <a href="{{route('index')}}" class="navbar-brand d-flex text-dark align-items-center">
                                <img src="{{asset('assets/img/Logo-TS.svg')}}">
                            </a>
                        </div>
                    </div>
                    @guest
                    <div class="row ">
                        <a class="nav-link text-dark signin-text" href="{{route('login')}}">
                            <img src="./assets/img/Icon-Key.svg" class="mr-2" alt="" srcset="">
                            Ingresar
                        </a>
                        {{--//TODO: poner ruta --}}
                        <a href="{{route('register')}}" class="btn btn-primary rounded-pill "> <span></span><i class="fas fa-user mr-2"></i>
                            Registrate
                        </a>
                    </div>
                    @else
                    <div class="row ">
                        <a class="nav-link text-dark signin-text" href="{{  url('login') }}">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="col ">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a
                                class="dropdown-item"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                                >
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                    @endguest
                </div>
            </div>
            <div class="navbar navbar-dark navbar-top navbar-expand-lg bg-nav">
                <div class="container">
                    <a class="navbar-brand  d-flex align-items-center pl-5 mr-5" href="#"><img src="{{asset('assets/img/peru.png')}}" alt="" /></a>
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <a href="#" class="navbar-brand d-flex align-items-center">
                            Subastas
                        </a>
                        <a href="{{route('faqs')}}" class="navbar-brand d-flex align-items-center">
                            Preguntas
                        </a>
                    <a href="{{route('terminos')}}" class="navbar-brand d-flex align-items-center">
                            Condiciones
                        </a>
                        <a href="#" class="navbar-brand d-flex align-items-center">
                            Quienes somos
                        </a>
                        <a href="#" class="navbar-brand d-flex align-items-center">
                            Vender
                        </a>
                        @auth
                            <a href="#" class="navbar-brand d-flex align-items-center">
                                <svg class="bd-placeholder-img rounded-circle" width="25" height="25" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Completely round image: 75x75">
                                    <title>Completely round image</title>
                                    <rect width="100%" height="100%" fill="#868e96"></rect>
                                    <text x="25%" y="25%" fill="#dee2e6" dy=".3em"></text>
                                </svg>
                            </a>
                        @endauth
                    </div>
                </div>
            </div>
        </header>
        @include('assets.alertas')
        @yield('content')               
            </div>
        </div>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm col-8 pt-5 col-md-8 align-self-center col-sm-12 col-xs-12 mb-2 mt-5 ml-sm-auto">
                        <article>
                            <div class="input-group col-md-8 offset-md-6">
                                <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Ingresa tu correo para alerta de oportunidades!"
                                    aria-label="Ingresa tu correo para alerta de oportunidades!" aria-describedby="basic-addon2" /
                                >
                                <div class="input-group-append">
                                    <span class="input-group-text rss-send_email" id="basic-addon2">
                                        <i class="fas fa-paper-plane"></i>
                                    </span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm col-md-4 ml-md-auto col-4 pt-5 col-sm-12 col-xs-12 mb-2 mt-5">
                        <article>
                            <article class="social-network_bottom">
                                <ul class="nav justify-content-end m-3">
                                    <li class="nav-item">
                                        <a href="">
                                            <i class="fab fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </article>
                        </article>
                    </div>
                </div>
                <div class="navbar nav-footer shadow-sm pt-5 pb-5">
                    <div class="container d-flex justify-content-between">
                        <a href="#" class="navbar-brand d-flex align-items-center">
                            <span>Subastas</span>
                        </a>
                        <a href="#" class="navbar-brand d-flex align-items-center">
                            <span>Preguntas</span>
                        </a>
                        <a href="#" class="navbar-brand d-flex align-items-center">
                            <span>Condiciones</span>
                        </a>
                        <a href="#" class="navbar-brand d-flex align-items-center">
                            <span>Quienes somos</span>
                        </a>
                        <a href="#" class="navbar-brand d-flex align-items-center">
                            <span>Vender</span>
                        </a>
                    </div>
                </div>
                <!--Footer navbar-->
                <nav class="navbar navbar-expand-lg d-flex justify-content-around pt-5 pb-5">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">
                                <span class="copyright">&copy;</span>
                                <span class="ml-2 copyright">{{date('Y')}} Totalsubastas </span>
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item ml-5">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">whatsapp</a>
                        </li>
                        <li class="nav-item ml-5">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Asesoria legal</a>
                        </li>
                        <li class="nav-item ml-5">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Cont&aacute;ctenos</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0 mr-5 social-network_footer">
                        total
                    </form>
                </nav>
            </div>
        </footer>
        {{-- Llmar desde Mix --}}
        {{-- <script src="{{asset('assets/js/jquery-3.5.1.js')}}"></script> --}}
        <script src="{{mix('js/app.js')}}"></script>
        <script src="{{asset('src/index.js')}}"></script>

        {{-- mix --}}
        {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script> --}}
            {{-- mix --}}
        {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script> --}}
            {{-- mix --}}
        {{-- <script src="{{asset('assets/js/app.js')}}"></script> --}}
        @livewireScripts
        @stack('scripts')
    </body>
</html>
