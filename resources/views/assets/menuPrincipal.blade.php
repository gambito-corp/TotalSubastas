<!-- Navbar header bottom -->
<div class="navbar navbar-dark navbar-top navbar-expand-lg bg-nav">
	<div class="container">
		<a class="navbar-brand  d-flex align-items-center pl-5 mr-5" href="#"><img src="./assets/img/peru.png" alt="" /></a>
		<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<a href="{{  url('auction') }}" class="navbar-brand d-flex align-items-center">
				Subastas
			</a>
			<a href="{{  url('faqs') }}" class="navbar-brand d-flex align-items-center">
				Preguntas
			</a>
			<a href="{{ url('terms') }}" class="navbar-brand d-flex align-items-center">
				Condiciones
			</a>
			<a href="{{ url('about') }}" class="navbar-brand d-flex align-items-center">
				Quienes somos
			</a>
			<!-- Link nav - Link nr° 5- top -->
			
			<a href="{{ url('sell') }}" class="navbar-brand d-flex align-items-center">
				Vender
			</a>
			<a href="#" class="navbar-brand d-flex align-items-center">
				<svg class="bd-placeholder-img rounded-circle" width="25" height="25" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Completely round image: 75x75">
					<title>Completely round image</title>
					<rect width="100%" height="100%" fill="#868e96"></rect>
					<text x="25%" y="25%" fill="#dee2e6" dy=".3em"></text>
				</svg>
			</a>
		</div>
	</div>
</div>
<!-- Left Side Of Navbar 
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('users.all') }}">Lista de Usuarios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('game.show') }}">Juego</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('chat.show') }}">Chat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('test') }}">Chat</a>
                </li>
            </ul>-->