@extends('layout.app')
@section('contenido')
    @isset($data)
    <ul>
        @forelse ($data as $dat)
            <li>
                {{ $dat->nombre }}
            </li>

        @empty
            No hay datos carga los sedder
        @endforelse
    </ul>
    @endisset
@endsection
