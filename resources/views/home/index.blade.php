@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row ">
		<!-- slider -->
		@php
		$data = [
		'0' => 0,
		'1' => 1,
		'2' => 2,
		'3' => 3,
		'4' => 4
		];
		@endphp
		@include('home.assets.slide', ['data' => $data])
		<div class="col-12 col-md-12 mt-2 pl-0">
			<nav aria-label="breadcrumb">
				<ul class="nav justify-content-start">
					<li class="breadcrumb-item mr-2" aria-current="page">
						<strong> @include('assets.breadcrumb-index') </strong>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</div>
<div class="container">
	<div class="row ">
		<!--<div class="col col-md-12 mb-4 "> -->
		<!-- Navbar -->
		<!--	@include('home.assets.nav-resultados') -->
		<!-- </div>-->

		<div class="col col-md-3 pl-0 order-md-1 mb-4">
			@include('home.assets.filtro')
		</div>
		<div class="col-md-9 order-md-2 mt-3 pr-0">
		<div class="row">
            <nav class="navbar navbar-expand-lg nav-top-content mb-4">
              <a class="navbar-brand title-to_breadcrums pl-4" href="#">Autos</a>
              <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                    <a class="nav-link title-to_results" href="#">52 Resultados <span class="sr-only">(current)</span></a>
                  </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                  <div class="dropdown mr-4">
                    <button class="btn dropdown-toggle text-fh_nav" type="button" id="dropdownMenu" data-toggle="dropdown"
                      aria-haspopup="true" aria-expanded="false">
                      Filtros <span class="badge badge-sea">4</span>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu">
                      <button class="dropdown-item" type="button">
                        Action
                      </button>
                      <button class="dropdown-item" type="button">
                        Another action
                      </button>
                      <button class="dropdown-item" type="button">
                        Something else here
                      </button>
                    </div>
                  </div>
                  <div class="dropdown">
                    <button class="btn dropdown-toggle text-fh_nav" type="button" id="dropdownMenu2"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Ordenar por
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                      <button class="dropdown-item" type="button">
                        Action
                      </button>
                      <button class="dropdown-item" type="button">
                        Another action
                      </button>
                      <button class="dropdown-item" type="button">
                        Something else here
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </nav>
          </div>
			<div class="row main-container">
				@include('home.assets.resultados')
			</div>
			<!-- Loader botton -->
			<div class="col-12 mt-5">
				<nav aria-label="breadcrumb">
					<a id="loadMore" class="btn rounded-pill expanded btn-block pt-3 pb-3 border font-weight-bold text-light_dark">
						<span class="spinner-border spinner-border-sm mr-4" aria-hidden="true"></span>Load more
					</a>
				</nav>
			</div>
		</div>
	</div>
	<div class=" mb-4">
		@include('assets.widgets')
	</div>
</div>

<div class="container-fluid">

	@include('assets.footer')
</div>

@endsection