@extends('layout.app')
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
                <h2>Registro de Usuario</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
                        <label for="username">Nombre de Usuario</label>
                        <input
                        class="form-control"
                        type="text"
                        name="username"
                        id="username"
                        placeholder="username"
                        value="{{ old('username') }}">
                        {!! $errors->first('username', '<small>:message</small><br>') !!}
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="email">Email</label>
                            <input
                            class="form-control"
                            type="text"
                            name="email"
                            id="email"
                            placeholder="email"
                            value="{{ old('email') }}">
                            {!! $errors->first('email', '<small>:message</small><br>') !!}
                        </div>
                        <div class="col-md-6 form-group {{ $errors->has('telefono') ? 'has-error' : '' }}">
                            <label for="telefono">telefono</label>
                            <input
                            class="form-control"
                            type="tel"
                            name="telefono"
                            id="telefono"
                            placeholder="telefono"
                            value="{{ old('telefono') }}">
                            {!! $errors->first('telefono', '<small>:message</small><br>') !!}
                        </div>

                    </div>
                    <div class="p row">
                        <div class="col-md-6 form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            <label for="password">Password</label>
                            <input
                            class="form-control"
                            type="password"
                            name="password"
                            id="password"
                            placeholder="password"

                            {!! $errors->first('password', '<small>:message</small><br>') !!}
                        </div>
                        <div class="col-md-6 form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                            <label for="password_confirmation">Confirma tu Password</label>
                            <input
                            class="form-control"
                            type="password"
                            name="password_confirmation"
                            id="password_confirmation"
                            placeholder="Confirma tu password">
                            {!! $errors->first('password_confirmation', '<small>:message</small><br>') !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <input
                        type="submit"
                        name="Registrar"
                        class="btn btn-success
                        btn-block"
                        id="password_confirmation"
                        value="Registrarme">
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
