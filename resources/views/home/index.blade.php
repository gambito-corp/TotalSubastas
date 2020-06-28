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

	{{-- @include('home.assets.nav-resultados') --}}

	</div>
	@livewire('refactor.busqueda')
</div>
@endsection
