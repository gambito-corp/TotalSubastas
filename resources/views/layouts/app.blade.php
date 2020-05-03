<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.tags.meta')
        <title>{{ env('APP_NAME') }}</title>
        @include('includes.tags.link')
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        @include('includes.tags.fuentes')
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <!--start header section-->
        <header id="header" class="header">
            <!--start navbar-->
            @include('includes.nav')
            <!--end navbar-->
        </header>
        <!--Start Main Content-->
        <main class="">
            @yield('contenido')
        </main>
        <!--End Main Content-->
        <!--start footer section-->
        <footer class="footer-section bg-white ptb-10">
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright-text text-center">
                                <p>&copy; copyright <a href="#">GambitoCode</a> Derechos reservados {{date('Y   ')}}.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--end footer section-->
        @include('includes.tags.scripts')
    </body>
</html>
