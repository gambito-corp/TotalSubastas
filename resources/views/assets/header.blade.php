<header class="sticky-top" id="cabecera">
    <div class="navbar nav-top ">
        <div class="container-header">
            <div class="container-header-left">
                <div class="row header-left-reponsive">
                    <div class="col-xs-3 col-md ">
                        <a href="https://api.whatsapp.com/send?phone=51983521436&text=Quiero%20informacion%20de%20Total%20Subastas" class="navbar-brand d-flex text-dark align-items-center">
                            <img src="{{asset('assets/img/Icon-Phone.svg')}}" class="mr-2 " alt="" srcset=""> (+51) 983 521 436
                        </a>
                    </div>
                    <div class="col-xs-3 col-md   icono-chat">
                        <a href="#" class="text-dark">
                            <img src="{{asset('assets/img/Imagen 1.png')}}" alt="">
                            Chat en vivo
                        </a>
                    </div>
                </div>
            </div>
            <div class="container-header-logo">
                <div class="row ">
                    <div class="col-md col-xs-12  mr-auto">
                        <a href="{{route('index')}}" class="navbar-brand d-flex text-dark align-items-center">
                            <img src="{{asset('assets/img/Logo-TS.svg')}}">
                        </a>
                    </div>
                </div>
            </div>
            @guest
            <div class="container-header-right">
                <div class="row flex-end-ts header-right-responsive">
                    <a class="nav-link text-dark signin-text btn rounded-pill btnHover" href="{{route('login')}}">
                        <img src="./assets/img/Icon-Key.svg" class="mr-2" alt="" srcset="">
                        Ingresar
                    </a>
                    {{--//TODO: poner ruta --}}
                    <a href="{{route('register')}}" class="btn rounded-pill btnHover"> <span></span><i class="fas fa-user mr-2"></i>
                        Registrate
                    </a>
                </div>
            </div>

            @else
                <div class="row container-header-right ">
                    <div class="col ">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark signin-text text-right" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                            <span class="caret"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @if(Auth::user()->role_id == 1)
                                <a
                                    class="dropdown-item"
                                    href="{{ route('admin') }}"
                                >
                                    Panel de Control
                                </a>
                                <hr>
                            @endif
                            <a
                                class="dropdown-item"
                                href="{{ route('perfil') }}"
                            >
                                Mi Perfil
                            </a>
                            <a
                                class="dropdown-item"
                                href="{{ route('recargar.perfil') }}"
                            >
                                Recargar mi cuenta
                            </a>
                            <a
                                class="dropdown-item"
                                href="{{ route('perfil.edit') }}"
                            >
                                Editar Mi Perfil
                            </a>
                            <a
                                class="dropdown-item"
                                href="{{ route('password.perfil') }}"
                            >
                                Cambiar Mi Contraseña
                            </a>
                            <hr>
                            <a
                                class="dropdown-item"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"
                            >
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            @endguest
        </div>
    </div>
