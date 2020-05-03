@extends('layouts.app')
@section('contenido')
<div class="container">
    <div class="col-md-6 offset-3">
        <div class="card">
            @if(session('message'))
                <h1>
                    {{ session('message') }}
                </h1>
            @endif
            <div class="card-header">
                <h2>Logueo de Usuario</h2>
            </div>
            <div class="card-body">
                <h2>Bienvenido {{ auth()->user()->username }} <br> eres un {{auth()->user()->rol->nombre }}</h2>
            </div>
            <div class="card-footer text-muted">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button class="btn btn-outline-danger btn-block btn-xs">Cerrar Sesion</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
