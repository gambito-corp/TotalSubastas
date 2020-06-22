@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
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
		<div class="col-12 col-md-12 mt-4">
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
	<div class="row">
		<!--<div class="col col-md-12 mb-4 "> -->
		<!-- Navbar -->
		<!--	@include('home.assets.nav-resultados') -->
		<!-- </div>-->

		<div class="col col-md-3 order-md-1 mb-4">
			@include('home.assets.filtro')
		</div>
		<div class="col-md-9 order-md-2 mt-3">
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