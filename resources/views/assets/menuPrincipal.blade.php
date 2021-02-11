<div class="navbar navbar-dark navbar-top navbar-expand-lg bg-nav">
    <div class="container">
        <a class="navbar-brand  d-flex align-items-center pl-3 mr-3" href="#"><img src="{{asset('assets/img/peru.png')}}" alt="" /></a>
        <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">

            <a href="{{route('index')}}" class="navbar-brand d-flex align-items-center">
                Inicio
            </a>
            <a href="{{route('quienessomos')}}" class="navbar-brand d-flex align-items-center">
                Nosotros
            </a>
            <a href="{{route('faqs')}}" class="navbar-brand d-flex align-items-center">
                Centro de Ayuda
            </a>
            <a href="{{route('vender')}}" class="navbar-brand d-flex align-items-center">
                Vender
            </a>
            <a href="{{route('contacto')}}" class="navbar-brand d-flex align-items-center">
                Contácto
            </a>
            @auth
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <svg class="bd-placeholder-img rounded-circle" width="25" height="25" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Completely round image: 75x75">
                        @if (isset(auth()->user()->avatar))
                            @include('assets.imagen', ['carpeta' => 'user', 'id' => auth()->id(), 'ancho' => '30', 'class'=> 'img-circle elevation-2'])
                        @endif
                        <title>Completely round image</title>
                        <rect width="100%" height="100%" fill="#868e96"></rect>
                        <text x="25%" y="25%" fill="#dee2e6" dy=".3em"></text>
                    </svg>
                </a>
            @endauth
        </div>
    </div>
</div>
</header>
