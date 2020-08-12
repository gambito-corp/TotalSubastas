<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('index')}}" class="brand-link">
        <img src="{{asset('img/admin/AdminLTELogo.png')}}"
            alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Total Subastas</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if (isset(auth()->user()->avatar))
                    @include('assets.imagen', ['carpeta' => 'user', 'id' => auth()->id(), 'ancho' => '30', 'class'=> 'img-circle elevation-2'])
                @endif
{{--                <img src="{{asset()}}" class="" alt="User Image">--}}
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>
        <nav class="mt-2" >
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-adjust"></i>
                        <p>
                            Config. Generales
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="{{route('admin.marcas.index')}}" class="nav-link">
                                <i class="fas fa-truck-pickup"></i>
                                <p>
                                    Marcas y modelos
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{route('admin.bancos.index')}}" class="nav-link">
                                <i class="fas fa-university"></i>
                                <p>
                                    Bancos
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{route('admin.pais.index')}}" class="nav-link">
                                <i class="fas fa-flag"></i>
                                <p>
                                    Paises/ubiego
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{route('admin.address.index')}}" class="nav-link">
                                <i class="fas fa-warehouse"></i>
                                <p>
                                    Almacenes
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-journal-whills"></i>
                                <p>
                                    Sistema
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item has-treeview">
                                    <a href="{{route('admin.auditoria.index')}}" class="nav-link">
                                        <i class="fas fa-house-user"></i>
                                        <p>
                                            Auditoria de Sesiones
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-id-badge"></i>
                        <p>
                            Config. de Usuarios
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="{{route('admin.rol.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-user-lock"></i>
                                <p>
                                    Roles
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{route('admin.user.index')}}" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Usuarios
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{route('admin.address.index')}}" class="nav-link">
                                <i class="fas fa-atlas"></i>
                                <p>
                                    Direcciones
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{route('admin.balance.index')}}" class="nav-link">
                                <i class="fas fa-money-check-alt"></i>
                                <p>
                                    Balances
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-users-cog"></i>
                                <p>
                                    Config. de Personas
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item has-treeview">
                                    <a href="{{route('admin.persona.index')}}" class="nav-link">
                                        <i class="far fa-user"></i>
                                        <p>
                                            Personas Naturales
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="{{route('admin.juridica.index')}}" class="nav-link">
                                        <i class="fas fa-user-tie"></i>
                                        <p>
                                            Personas Juridicas
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{route('admin.participacion.index')}}" class="nav-link">
                                <i class="fas fa-people-arrows"></i>
                                <p>
                                    Participaciones por Miembro
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{route('admin.guardado.index')}}" class="nav-link">
                                <i class="fas fa-bookmark"></i>
                                <p>
                                    Productos Guardados
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-box"></i>
                        <p>
                            Config. de Subastas
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item has-treeview">
                            <a href="{{route('admin.empresa.index')}}" class="nav-link">
                                <i class="fas fa-building"></i>
                                <p>
                                    Empresas
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{route('admin.lote.index')}}" class="nav-link">
                                <i class="fas fa-pallet"></i>
                                <p>
                                    Lote
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{route('admin.producto.index')}}" class="nav-link">
                                <i class="fas fa-tasks"></i>
                                <p>
                                    Productos
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{route('admin.imagenesproducto.index')}}" class="nav-link">
                                <i class="fas fa-images"></i>
                                <p>
                                    Imagenes De Productos
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{route('admin.detallevehiculos.index')}}" class="nav-link">
                                <i class="fas fa-asterisk"></i>
                                <p>
                                    Detalles de Vehiculos
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="{{route('admin.documentos.index')}}" class="nav-link">
                                <i class="fas fa-file-pdf"></i>
                                <p>
                                    Documentos
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="fas fa-gavel"></i>
                                <p>
                                    Subasta en Vivo
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item has-treeview">
                                    <a href="{{route('admin.subasta.index')}}" class="nav-link">
                                        <i class="fas fa-trophy"></i>
                                        <p>
                                            Ganadores de Subastas
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="{{route('admin.mensajes.index')}}" class="nav-link">
                                        <i class="fas fa-comments-dollar"></i>
                                        <p>
                                            Mensajes de Subasta
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="{{route('admin.garantias.index')}}" class="nav-link">
                                        <i class="fas fa-money-bill-alt"></i>
                                        <p>
                                            Garantias
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="{{route('admin.ranking.index')}}" class="nav-link">
                                        <i class="fas fa-list-ol"></i>
                                        <p>
                                            Ranking de Participantes
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item has-treeview">
                                    <a href="{{route('admin.activos.index')}}" class="nav-link">
                                        <i class="fas fa-user-clock"></i>
                                        <p>
                                            Participantes Activos
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
{{--                <li class="nav-item">--}}
{{--                    <a href="pages/widgets.html" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-th"></i>--}}
{{--                        <p>--}}
{{--                            Widgets--}}
{{--                            <span class="right badge badge-danger">New</span>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item has-treeview">--}}
{{--                    <a href="#" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-copy"></i>--}}
{{--                        <p>--}}
{{--                            Layout Options--}}
{{--                            <i class="fas fa-angle-left right"></i>--}}
{{--                            <span class="badge badge-info right">6</span>--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                    <ul class="nav nav-treeview">--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Top Navigation</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Top Navigation + Sidebar</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/boxed.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Boxed</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/fixed-sidebar.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Fixed Sidebar</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/fixed-topnav.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Fixed Navbar</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/fixed-footer.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Fixed Footer</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li class="nav-item">--}}
{{--                            <a href="pages/layout/collapsed-sidebar.html" class="nav-link">--}}
{{--                                <i class="far fa-circle nav-icon"></i>--}}
{{--                                <p>Collapsed Sidebar</p>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
