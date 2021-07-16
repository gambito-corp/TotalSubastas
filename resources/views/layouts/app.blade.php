<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- head -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="theme-color" content="#0394F0" />
        <script src="https://js.pusher.com/6.0/pusher.min.js"></script>
        <link  rel="icon"   href="{{asset('favicon.ico')}}" type="image/ico" />
        <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{mix('css/app.css')}}" />
        <link rel="stylesheet" href="{{mix('css/assets.css')}}" />
        <!-- Start of Async Drift Code -->
        <style>
            input+p{
                display: none;
            }
            input:focus-visible+p{
                padding: 5px;
                font-size: 12px;
                position: absolute;
                top: -25px;
                border: 1px solid rgb(75, 144, 255);
                border-radius: 5px;
                background-color: rgba(75, 144, 255, 0.8);
                display:block;
                color: white;
            }
            select+p{
                display: none;
            }
            select:focus-visible+p{
                padding: 5px;
                font-size: 12px;
                position: absolute;
                top: -25px;
                border: 1px solid rgb(75, 144, 255);
                border-radius: 5px;
                background-color: rgba(75, 144, 255, 0.8);
                display:block;
                color: white;
            }
            /*.btnHover:hover*/
        </style>
        @if(Route::is('auctionLiveDetail'))
        @else
{{--        <script>--}}
{{--        "use strict";--}}

{{--        !function() {--}}
{{--        var t = window.driftt = window.drift = window.driftt || [];--}}
{{--        if (!t.init) {--}}
{{--            if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));--}}
{{--            t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],--}}
{{--            t.factory = function(e) {--}}
{{--            return function() {--}}
{{--                var n = Array.prototype.slice.call(arguments);--}}
{{--                return n.unshift(e), t.push(n), t;--}}
{{--            };--}}
{{--            }, t.methods.forEach(function(e) {--}}
{{--            t[e] = t.factory(e);--}}
{{--            }), t.load = function(t) {--}}
{{--            var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");--}}
{{--            o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";--}}
{{--            var i = document.getElementsByTagName("script")[0];--}}
{{--            i.parentNode.insertBefore(o, i);--}}
{{--            };--}}
{{--        }--}}
{{--        }();--}}
{{--        drift.SNIPPET_VERSION = '0.3.1';--}}
{{--        drift.load('6r6634p4k2sk');--}}
{{--        </script>--}}
        @endif
        @livewireStyles
        @stack('styles')
    </head>
    <!-- body -->

    <body class="{{Request::is('auction/id/*') ?  'bg-dark': 'bg-darken-light'}}">
    @if(Route::is('auctionLiveDetail'))
    @else
        <!-- Header -->
        @include('assets.header')
    @endif
        @include('assets.menuPrincipal')

        @include('assets.notification')
        @include('assets.alertas')
        @yield('content')
            </div>
        </div>
        @if(Route::is('auctionLiveDetail'))
        @else

        <footer>
            <div class="container">
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
                            <a class="nav-link" href="{{route('terminos')}}" tabindex="-1" aria-disabled="true">Terminos y Condiciones</a>
                        </li>
                        <li class="nav-item ml-5">
                            <a class="nav-link"
                               href="https://www.consumidor.gob.pe/documents/51084/408959/HojaDeReclamaci%C3%B3n/ccb89a38-54a6-4a7d-ad61-02f74b7f9d56"
                               target="_blank"
                               tabindex="-1"
                               aria-disabled="true">
                                Libro de Reclamaciones
                            </a>
                        </li>

                    </ul>
                    <form class="form-inline my-2 my-lg-0 mr-5 social-network_footer">
                        TotalSubastas - <a href="mailto:admin@totalsubastas.com">admin@totalsubastas.com</a> - San Miguel, Lima, Perú
                    </form>
                </nav>
            </div>
        </footer>
        @endif
        {{-- Llmar desde Mix --}}
         <script src="{{asset('assets/js/jquery-3.5.1.js')}}"></script>
        <script src="{{mix('js/app.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script>
            $('.datepicker').datepicker();
        </script>
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
