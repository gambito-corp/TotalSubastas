<!-- Navbar header bottom -->

    <div class="navbar navbar-dark navbar-top navbar-expand-lg bg-nav">
        <div class="container">
            <a class="navbar-brand  d-flex align-items-center pl-5 mr-5" href="#"><img src="{{asset('assets/img/peru.png')}}" alt="" /></a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
    			<a href="#" class="navbar-brand d-flex align-items-center">
    				Subastas
    			</a>
    			<a href="{{route('faqs')}}" class="navbar-brand d-flex align-items-center">
    				Preguntas
    			</a>
    			<a href="#" class="navbar-brand d-flex align-items-center">
    				Condiciones
    			</a>
    			<a href="#" class="navbar-brand d-flex align-items-center">
    				Quienes somos
    			</a>

    			<a href="#" class="navbar-brand d-flex align-items-center">
    				Vender
    			</a>
                @auth
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <svg class="bd-placeholder-img rounded-circle" width="25" height="25" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Completely round image: 75x75">
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
