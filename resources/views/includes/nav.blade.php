<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Subastas Totales</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item {{ setActive('home') }}">
                <a class="nav-link" href="{{ route('home') }}">Inicio <span class="sr-only">(current)</span></a>
            </li>
            {{-- <li class="nav-item {{ setActive('clientes.index') }}">
                <a class="nav-link" href="{{ route('clientes.index') }}">Ver Clientes</a>
            </li>
            <li class="nav-item {{ setActive('clientes.create') }}">
                <a class="nav-link" href="{{ route('clientes.create') }}">Crear Clientes</a>
            </li>
            <li class="nav-item dropdown {{ setActive('test.*') }}">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Controlador Test
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item {{ setActive('test.index') }}" href="{{ route('test.index') }}">Index Test</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item {{ setActive('test.create') }}" href="{{ route('test.create') }}">Crear Test</a>
                </div>
            </li> --}}
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
