<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Admin | @yield('title', 'Panel De Control')</title>
        <meta name="theme-color" content="#0394F0" />
        <link  rel="icon"   href="{{asset('favicon.ico')}}" type="image/ico" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha512-xA6Hp6oezhjd6LiLZynuukm80f8BoZ3OpcEYaqKoCV3HKQDrYjDE1Gu8ocxgxoXmwmSzM4iqPvCsOkQNiu41GA==" crossorigin="anonymous" />
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="{{asset('css/adminlte.min.css')}}">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@livewireStyles
        @stack('styles')
    </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            @include('admin.assets.navbar')
            @include('admin.assets.aside')
            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        @include('assets.alertas')
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                @yield('header')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content">
                    @yield('content')
                </div>
            </div>
            <footer class="main-footer">
                <strong>Copyright &copy; {{date('Y')}} <a href="{{route('index')}}">Total Subastas</a>.</strong>
                Todos los Derechos Reservados
            </footer>
        </div>
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('js/adminlte.min.js')}}"></script>
        <script src="{{asset('js/demo.js')}}"></script>
        <script src="{{asset('js/dashboard.js')}}"></script>
        <script src="{{asset('js/Chart.min.js')}}"></script>
@livewireScripts
        @stack('scripts')
    </body>
</html>
