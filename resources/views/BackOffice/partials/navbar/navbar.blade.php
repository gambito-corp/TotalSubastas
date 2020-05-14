<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    @include('BackOffice.partials.navbar.navbarL')
    @include('BackOffice.partials.navbar.search')



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        @include('BackOffice.partials.navbar.mensajes')
        @include('BackOffice.partials.navbar.notificaciones')
        <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                <i class="fas fa-th-large"></i>
            </a>
        </li>
    </ul>
</nav>
  <!-- /.navbar -->
