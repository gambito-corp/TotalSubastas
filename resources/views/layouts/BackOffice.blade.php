<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('includes.tags.meta')
    <title>{{ config('app.name', 'Laravel') }} - Dashboard</title>
    <!--favicon icon-->
    <link rel="icon" href="{{ asset(isset($data->favicon) ? $data->favicon : 'Default' ) }}" type="image/png" sizes="16x16">
    @include('includes.tags.fuentes')
    @include('includes.tags.link')

    
    

</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('index') }}" class="nav-link">Inicio</a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('admin.index') }}" class="brand-link">
                <img src="{{ asset('img/logo.png') }}" alt="Total Subastas" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">

                        @if(isset(Auth::user()->avatars[0]->User_id) && Auth::user()->avatars[0]->User_id == Auth::user()->id)
                            <img src="{{asset('img/user.png')}}" class="img-circle elevation-2" alt="User Image">
                            {{-- <img src="{{route('user.imagen',['filename' => Auth::user()->imagen])}}" class="img-circle elevation-2" alt="User Image"> --}}
                        @endif
                    </div>
                    <div class="info">
                        <a href="{{ route('admin.index') }}" class="d-block">{{ Auth::user()->username }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview {{ setActive('rol.*') }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Roles
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item {{ setActive('rol.index') }}">
                                    <a href="{{ route('rol.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listar Roles</p>
                                    </a>
                                </li>
                                <li class="nav-item {{ setActive('rol.create') }}">
                                    <a href="{{ route('rol.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Crear Rol</p>
                                    </a>
                                </li>
                                <li class="nav-item {{ setActive('rol.trash') }}">
                                    <a href="{{ route('rol.trash') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Papelera de Rol</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview {{ setActive('permisos.*') }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Permisos
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item {{ setActive('permisos.index') }}">
                                    <a href="{{ route('permisos.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listar Permisos</p>
                                    </a>
                                </li>
                                <li class="nav-item {{ setActive('permisos.create') }}">
                                    <a href="{{ route('permisos.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Crear Permisos</p>
                                    </a>
                                </li>
                                <li class="nav-item {{ setActive('permisos.trash') }}">
                                    <a href="{{ route('permisos.trash') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Papelera de Permisos</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview {{ setActive('user.*') }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Usuarios
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item {{ setActive('user.index') }}">
                                    <a href="{{ route('user.index') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Listar USusarios</p>
                                    </a>
                                </li>
                                <li class="nav-item {{ setActive('user.create') }}">
                                    <a href="{{ route('user.create') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Crear USusarios</p>
                                    </a>
                                </li>
                                <li class="nav-item {{ setActive('user.trash') }}">
                                    <a href="{{ route('user.trash') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Papelera de USusarios</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        @if (Auth::user()->rol == 'admin' || Auth::user()->rol == 'dueño')

                        @endif
                        @if (Auth::user()->rol == 'admin' || Auth::user()->rol == 'dueño' || Auth::user()->rol == 'personal')
                            <li class="nav-item has-treeview {{ isset($clase['controlador']) && $clase['controlador'] == "usuarios" ? 'menu-open':'' }}">
                                <a href="#" class="nav-link {{ isset($clase['controlador']) && $clase['controlador'] == "usuarios" ? 'active':'' }}">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Usuarios
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    @if (Auth::user()->rol == 'admin' || Auth::user()->rol == 'dueño')
                                        <li class="nav-item">
                                            <a href="{{ route('user.index') }}" class="nav-link {{ isset($clase['method']) && $clase['method'] == "index" ? $clase['usuario_index']:''}}">
                                                <i class="fas fa-list nav-icon"></i>
                                                <p>Ver Usuarios</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('user.trash') }}" class="nav-link {{ isset($clase['usuario_papelera']) ? $clase['usuario_papelera']:''}}">
                                                <i class="fas fa-trash nav-icon"></i>
                                                <p>Ver Usuarios Dados de baja</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('user.registro') }}" class="nav-link {{ isset($clase['usuario_crear']) ? $clase['usuario_crear']:''}}">
                                                <i class="fas fa-user-plus nav-icon"></i>
                                                <p>Crear Usuarios</p>
                                            </a>
                                        </li>
                                    @endif
                                    <li class="nav-item">
                                        <a href="{{ route('user.perfil',['id' => Auth::user()->id]) }}" class="nav-link {{ isset($clase['usuario_mostrar']) ? $clase['usuario_mostrar']:''}}">
                                            <i class="fas fa-user nav-icon"></i>
                                            <p>Mi Perfil</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('user.edit') }}" class="nav-link {{ isset($clase['usuario_configurar']) ? $clase['usuario_configurar']:''}}">
                                            <i class="fas fa-user nav-icon"></i>
                                            <p>Configuracion</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        @if (Auth::user()->rol == 'admin' || Auth::user()->rol == 'dueño' || Auth::user()->rol == 'personal' || Auth::user()->rol == 'editor')
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Categorias
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    @if (Auth::user()->rol == 'admin' || Auth::user()->rol == 'dueño')
                                        <li class="nav-item">
                                            <a href="{{ route('user.index') }}" class="nav-link">
                                                <i class="fas fa-list nav-icon"></i>
                                                <p>Ver Categorias</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('user.index') }}" class="nav-link">
                                                <i class="fas fa-list nav-icon"></i>
                                                <p>Ver Categorias Dados de baja</p>
                                            </a>
                                        </li>
                                    @endif
                                    <li class="nav-item">
                                        <a href="{{ route('user.index') }}" class="nav-link">
                                            <i class="fas fa-list nav-icon"></i>
                                            <p>Crear Categorias</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        @if (Auth::user()->rol == 'admin' || Auth::user()->rol == 'dueño' || Auth::user()->rol == 'personal' || Auth::user()->rol == 'editor')
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Blog
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('user.index') }}" class="nav-link">
                                            <i class="fas fa-list nav-icon"></i>
                                            <p>Ver Blogs</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('user.index') }}" class="nav-link">
                                            <i class="fas fa-list nav-icon"></i>
                                            <p>Ver Blogs Dados de Baja</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('user.index') }}" class="nav-link">
                                            <i class="fas fa-list nav-icon"></i>
                                            <p>Crear Blogs</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                        @if (Auth::user()->rol == 'admin' || Auth::user()->rol == 'dueño' || Auth::user()->rol == 'personal')
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-users"></i>
                                    <p>
                                        Contactos
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('contacto.index') }}" class="nav-link">
                                            <i class="nav-icon fas fa-th"></i>
                                            <p>
                                                Contactos Recibidos
                                            </p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('contacto.trash') }}" class="nav-link">
                                            <i class="nav-icon fas fa-th"></i>
                                            <p>
                                                Contactos Eliminados
                                            </p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </nav>
             <!-- /.sidebar-menu -->
            </div>
        <!-- /.sidebar -->
        </aside>
        <main class="">
            @yield('contenido')
        </main>
        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>
                Copyright &copy; 2014-2019
                <a href="http://adminlte.io">AdminLTE.io</a>.
            </strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.2
            </div>
        </footer>
    </div>
    <!-- ./wrapper -->



    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- DataTables -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <!-- AdminLTE -->
    <script src="{{ asset('dist/js/adminlte.js') }}"></script>

    <!-- OPTIONAL SCRIPTS -->
    {{-- <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('dist/js/demo.js') }}"></script>
    <script src="{{ asset('dist/js/pages/dashboard3.js') }}"></script> --}}
    <script>
        $(function () {
            $('#tabla').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": true,
            });
        });
    </script>
</body>
</html>
