<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Subastas Totales</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ setActive('index') }}">
                <a class="nav-link" href="{{ route('index') }}">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown {{ setActive('rol.*') }}">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Controlador Rol
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item {{ setActive('rol.index') }}" href="{{ route('rol.index') }}">Index Rol</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item {{ setActive('rol.create') }}" href="{{ route('rol.create') }}">Crear Rol</a>
                </div>
            </li>
            <li class="nav-item dropdown {{ setActive('permisos.*') }}">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Controlador Permisos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item {{ setActive('permisos.index') }}" href="{{ route('permisos.index') }}">Index Permisos</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item {{ setActive('permisos.create') }}" href="{{ route('permisos.create') }}">Crear Permisos</a>
                </div>
            </li>
            <li class="nav-item dropdown {{ setActive('accesos.*') }}">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Controlador Rol Permisos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item {{ setActive('accesos.index') }}" href="{{ route('accesos.index') }}">Index accesos</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item {{ setActive('accesos.create') }}" href="{{ route('accesos.create') }}">Crear accesos</a>
                </div>
            </li>
        </ul>
        <ul class="navbar-nav pull-xs-right">
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            @guest
                <li class="nav-item {{ setActive('register') }}">
                    <a class="nav-link" href="{{ route('register') }}">Registrarse</a>
                </li>
                <li class="nav-item {{ setActive('login') }}">
                    <a class="nav-link" href="{{ route('login') }}">Logueate</a>
                </li>
            @endguest
            @auth
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ auth()->user()->username }}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item " href="">Index Test</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                </div>
            </li>
            @endauth
        </ul>
    </div>
</nav>
