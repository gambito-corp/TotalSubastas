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

		<!--<div class="col col-md-12 mb-4 "> -->
		<!-- Navbar -->
		<!--	@include('home.assets.nav-resultados') -->
		<!-- </div>-->
	</div>
	<div class="row">
		@include('home.assets.breadcrumb-index')
		<div class="col col-md-3  pl-0  order-md-1 mb-4 ">
			@include('home.assets.filtro')
		</div>
		<div class="col-md-9 order-md-2 mt-3">
			<div class="row">
			@include('home.assets.nav-resultados')
				<div class="container">
					<div class="row main-container">
						@include('home.assets.resultados')
						<!-- -->
					</div>
				</div>
			</div>
		</div>
		
	</div>
	@include('assets.widgets')
</div>

@include('assets.footer')
@endsection
</div>
</div>