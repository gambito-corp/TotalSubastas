<!-- Header -->
<header>
  <div class="navbar nav-top ">
    <div class="container flex-wrap justify-content-md-between justify-content-sm-center">
      <div class="row">
        <div class="col ">
          <a href="#" class="navbar-brand d-flex text-dark align-items-center">
              <img src="{{asset('assets\img\Icon-Phone.svg')}}" class="mr-2 " alt="" srcset="">
            (+51) 460-2000
          </a></div>
        <div class="col mt-2">
          <a href="#" class="text-dark">
            <img src=" {{ asset('./assets/img/Imagen 1.png') }}" alt="">
            Chat en vivo
          </a>
        </div>
      </div>
      <div class="row ">
        <div class="col-md  mr-auto  ">
          <a href="{{  url('/') }}" class="navbar-brand d-flex text-dark align-items-center">
            <img src="{{ asset('./assets/img/Logo_front.png') }}">
          </a></div>
      </div>
      @guest
      <div class="row ">
        <a class="nav-link text-dark signin-text" href="{{  url('login') }}">
          Ingresar</a>
        <a href="{{  url('register') }}" class="btn btn-primary rounded-pill "> <span></span><i class="fas fa-user mr-2"></i>
          Registrate </a>
      </div>
      @else
        <div class="row ">
            <a class="nav-link text-dark signin-text" href="{{  url('login') }}">
                {{ Auth::user()->name }}
            </a>
            <div class="col ">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    <span class="caret"></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
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

