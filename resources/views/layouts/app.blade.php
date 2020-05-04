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
        <!--=========== all js file link ==============-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        @include('includes.tags.scripts')
    </body>
</html>
