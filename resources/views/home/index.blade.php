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

	</div>
    <div>
        @livewire('busqueda.index')
    </div>
	@include('assets.widgets')
</div>

<div class="container-fluid pl-0 pr-0">
    @include('assets.footer')
</div>
@endsection
</div>
</div>
