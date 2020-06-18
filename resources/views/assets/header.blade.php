<header class="top-0 mb-3">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="col-2 mt-4">
                <a class="btn btn-ligth" role="button">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    (+51)460 2000
                </a>
            </div>
            <div class="col-2 mt-4">
                <a class="btn btn-ligth" role="button">
                    <i class="fa fa-whatsapp" aria-hidden="true"></i>
                    Chat En Vivo
                </a>
            </div>
            <div class="col-4 mt-3">
                <a href="{{ route('index') }}">
                    <img src="{{asset('img/Logo_front.png')}}" alt="">
                </a>
            </div>
            @guest
                <div class="col-2 mt-4">
                    <a class="btn btn-ligth" role="button" href="{{route('login')}}">
                        <i class="fa fa-key" aria-hidden="true"></i>
                        Ingresar
                    </a>
                </div>
                <div class="col-2 mt-4">
                    <a class="btn btn-primary rounded-pill" role="button" href="{{route('register')}}">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        Registrate
                    </a>
                </div>
            @else
                <div class="col-2"></div>
                <div class="col-2 mt-4">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </div>
            @endguest

        </div>
    </div>
</header>
