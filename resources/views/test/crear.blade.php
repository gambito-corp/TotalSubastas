@extends('layout.app')
@section('contenido')
    <h2>Controlador test</h2>
    <div class="container">
        <div class="card col-md-4 offset-4">
            <div class="card-heading">
                <h2>
                    Inicia Sesion
                </h2>
            </div>
            <hr>
            <div class="card-title">
                <h3>
                    introduce tus datos
                </h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('test.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="user">Correo, UserName o Telefono</label>
                        <input name="user" type="text" class="form-control" id="email" {{ old('email') }}>
                        <small id="emailHelp" class="form-text text-muted">Nunca compartas tu cuenta con nadie.</small>
                        {!! $errors->first('user', '<small>:message</small>') !!}
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input name="password" type="password" class="form-control" id="password">
                        {!! $errors->first('password', '<small>:message</small>') !!}
                    </div>
                    <div class="form-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-outline-primary active btn-sm" for="recuerdame">
                            <input name="recuerdame" id="recuerdame" type="checkbox"> Recuerdame
                        </label>
                    </div>
                    <button type="submit" class="btn btn-outline-success btn-block btn-sm">enviar</button>
                </form>
            </div>
            <div class="card-footer">
                <h4>
                    Subastas totales
                </h4>
            </div>
        </div>
    </div>

@endsection
