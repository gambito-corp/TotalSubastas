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
        @include('assets.header')
        @include('assets.menuPrincipal')

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
