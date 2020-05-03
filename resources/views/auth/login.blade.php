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
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="form-group {{ $errors->has('user') ? 'has-error' : '' }}">
                        <label for="username">Nombre de Usuario / Email / Telefono</label>
                        <input type="text"
                        name="user"
                        class="form-control"
                        id="user"
                        value="{{ old('username') }}">
                        {!! $errors->first('user', '<small>:message</small><br>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                        <label for="password">Password</label>
                        <input type="password"
                        name="password"
                        class="form-control"
                        id="password">
                        {!! $errors->first('password', '<small>:message</small><br>') !!}
                    </div>

                    <div class="form-group">
                        <input type="submit" name="Loguear" class="btn btn-success btn-block" value="Conectar">
                    </div>
                </form>
            </div>
            <div class="card-footer text-muted">
                <h2 class="text-muted">{{ env('APP_NAME') }}</h2>
            </div>
        </div>
    </div>
</div>
@endsection
