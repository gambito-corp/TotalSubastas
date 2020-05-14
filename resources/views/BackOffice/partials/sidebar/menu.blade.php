<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    {{-- Configuraciones/ --}}
    <li class="nav-item has-treeview {{ setOpen('home.*')}}">
        <a href="#" class="nav-link active">
            <i class="nav-icon fas fa-wrench fa-lg"></i>
            <p>
                Configuraciones
                <i class="right fas fa-angle-left"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            {{-- Configuraciones/Roles --}}
            <li class="nav-item has-treeview {{ setOpen('rol.*') }}">
                <a href="#Rol" class="nav-link">
                    <i class="fas fa-fw fa-user-tag fa-sm"></i>
                    <p>Roles</p>
                    <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                    {{-- @can('viewAny', Rol::class) --}}
                        <li class="nav-item">
                            <a href="{{ route('rol.index') }}" class="nav-link" id="Rol">
                                <i class="fas fa-fw fa-list fa-xs"></i>
                                <p>
                                    Listar Roles
                                </p>

                            </a>
                        </li>
                    {{-- @endcan --}}
                    {{-- @can('create', Rol::class) --}}
                        <li class="nav-item">
                            <a href="{{ route('rol.create') }}" class="nav-link">
                                <i class="fas fa-fw fa-plus fa-xs"></i>
                                <p>
                                    Crear Rol
                                </p>

                            </a>
                        </li>
                    {{-- @endcan --}}
                    {{-- @can('viewAny', Rol::class) --}}
                        <li class="nav-item">
                            <a href="{{ route('rol.trash') }}" class="nav-link">
                                <i class="fas fa-fw fa-trash-alt fa-xs"></i>
                                <p>
                                    Papelera de Roles
                                </p>

                            </a>
                        </li>
                    {{-- @endcan --}}
                </ul>
            </li>
        </ul>
        <ul class="nav nav-treeview">
            {{-- Configuraciones/Controladores --}}
            <li class="nav-item has-treeview {{ setOpen('Autorizacion.*') }}">
                <a href="#Rol" class="nav-link">
                    <i class="fas fa-clipboard-list fa-sm"></i>
                    <p>Controladores</p>
                    <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                    {{-- @can('viewAny', Rol::class) --}}
                        <li class="nav-item">
                            <a href="{{ route('Autorizacion.index') }}" class="nav-link" id="Rol">
                                <i class="fas fa-fw fa-list fa-xs"></i>
                                <p>
                                    Listar Controladores
                                </p>

                            </a>
                        </li>
                    {{-- @endcan --}}
                    {{-- @can('create', Rol::class) --}}
                        <li class="nav-item">
                            <a href="{{ route('Autorizacion.create') }}" class="nav-link">
                                <i class="fas fa-fw fa-plus fa-xs"></i>
                                <p>
                                    Crear Controlador
                                </p>

                            </a>
                        </li>
                    {{-- @endcan --}}
                    {{-- @can('viewAny', Rol::class) --}}
                        <li class="nav-item">
                            <a href="{{ route('Autorizacion.trash') }}" class="nav-link">
                                <i class="fas fa-fw fa-trash-alt fa-xs"></i>
                                <p>
                                    Papelera de Controladores
                                </p>

                            </a>
                        </li>
                    {{-- @endcan --}}
                </ul>
            </li>
        </ul>
        <ul class="nav nav-treeview">
            {{-- Configuraciones/Permisos --}}
            <li class="nav-item has-treeview {{ setOpen('Permiso.*') }}">
                <a href="#Rol" class="nav-link">
                    <i class="fas fa-key fa-sm"></i>
                    <p>Permisos</p>
                    <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                    {{-- @can('viewAny', Rol::class) --}}
                        <li class="nav-item">
                            <a href="{{ route('Permiso.index') }}" class="nav-link" id="Rol">
                                <i class="fas fa-fw fa-list fa-xs"></i>
                                <p>
                                    Listar Permisos
                                </p>

                            </a>
                        </li>
                    {{-- @endcan --}}
                    {{-- @can('create', Rol::class) --}}
                        <li class="nav-item">
                            <a href="{{ route('Permiso.create') }}" class="nav-link">
                                <i class="fas fa-fw fa-plus fa-xs"></i>
                                <p>
                                    Crear Permisos
                                </p>

                            </a>
                        </li>
                    {{-- @endcan --}}
                    {{-- @can('viewAny', Rol::class) --}}
                        <li class="nav-item">
                            <a href="{{ route('Permiso.trash') }}" class="nav-link">
                                <i class="fas fa-fw fa-trash-alt fa-xs"></i>
                                <p>
                                    Papelera de Permisos
                                </p>

                            </a>
                        </li>
                    {{-- @endcan --}}
                </ul>
            </li>
        </ul>
        <ul class="nav nav-treeview">
            {{-- Configuraciones/Accesos --}}
            <li class="nav-item has-treeview {{ setOpen('Acceso.*') }}">
                <a href="#Rol" class="nav-link">
                    <i class="fas fa-lock fa-sm"></i>
                    <p>Accesos</p>
                    <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                    {{-- @can('viewAny', Rol::class) --}}
                        <li class="nav-item">
                            <a href="{{ route('Acceso.index') }}" class="nav-link" id="Rol">
                                <i class="fas fa-fw fa-list fa-xs"></i>
                                <p>
                                    Listar Accesos
                                </p>

                            </a>
                        </li>
                    {{-- @endcan --}}
                    {{-- @can('create', Rol::class) --}}
                        <li class="nav-item">
                            <a href="{{ route('Acceso.create') }}" class="nav-link">
                                <i class="fas fa-fw fa-plus fa-xs"></i>
                                <p>
                                    Crear Acceso
                                </p>

                            </a>
                        </li>
                    {{-- @endcan --}}
                    {{-- @can('viewAny', Rol::class) --}}
                        <li class="nav-item">
                            <a href="{{ route('Acceso.trash') }}" class="nav-link">
                                <i class="fas fa-fw fa-trash-alt fa-xs"></i>
                                <p>
                                    Papelera de Accesos
                                </p>

                            </a>
                        </li>
                    {{-- @endcan --}}
                </ul>
            </li>
        </ul>
    </li>
    {{-- Usuarios --}}
    <li class="nav-item has-treeview {{-- menu-open --}}">
        <a href="#" class="nav-link">
            <i class="fas fa-fw fa-user-tag fa-sm"></i>
            <p>Usuarios</p>
            <i class="right fas fa-angle-left"></i>
        </a>
        <ul class="nav nav-treeview">

                <li class="nav-item">
                    <a href="{{ route('User.index') }}" class="nav-link">
                        <i class="fas fa-fw fa-list fa-xs"></i>
                        <p>
                            Listar Usuarios
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('User.create') }}" class="nav-link">
                        <i class="fas fa-fw fa-plus fa-xs"></i>
                        <p>
                            Crear Usuario
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('User.trash') }}" class="nav-link">
                        <i class="fas fa-fw fa-trash-alt fa-xs"></i>
                        <p>
                            Papelera de USuarios
                        </p>

                    </a>
                </li>

        </ul>
    </li>
    
    <li class="nav-item has-treeview {{-- menu-open --}}">
        <a href="#" class="nav-link">
            <i class="fas fa-fw fa-image fa-sm"></i>
            <p>Avatares</p>
            <i class="right fas fa-angle-left"></i>
        </a>
        <ul class="nav nav-treeview">

                <li class="nav-item">
                    <a href="{{ route('Avatar.index') }}" class="nav-link">
                        <i class="fas fa-fw fa-list fa-xs"></i>
                        <p>
                            Listar Avatares
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('Avatar.create') }}" class="nav-link">
                        <i class="fas fa-fw fa-plus fa-xs"></i>
                        <p>
                            Crear Avatar
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('Avatar.trash') }}" class="nav-link">
                        <i class="fas fa-fw fa-trash-alt fa-xs"></i>
                        <p>
                            Papelera de Avatares
                        </p>

                    </a>
                </li>

        </ul>
    </li>
    {{-- <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
            </p>
        </a>
    </li> --}}
</ul>
