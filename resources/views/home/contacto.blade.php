@extends('layouts.app')
@section('content')
<div class="container">
    <br><br>
    <form action="" method="Post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-body">
                <h2>Contactanos</h2>
                <div class="form-group row">
                    <div class="custom-control col-md-4">
                        @include(
                            'home.assets.text', [
                            'nombre'    => 'nombre',
                            'tag'       => 'Nombre',
                            'tipo'      => 'text',
                            'place'     => 'Nombre',
                            'require'   => true,
                            'valor'     => old('nombre'),
                            'edit'      => true

                            ])
                    </div>
                    <div class="custom-control col-md-4">
                        @include(
                            'home.assets.text', [
                            'nombre'    => 'asunto',
                            'tag'       => 'Asunto',
                            'tipo'      => 'text',
                            'place'     => 'Asunto',
                            'require'   => true,
                            'valor'     => old('asunto'),
                            'edit'      => true

                            ])
                    </div>
                    <div class="custom-control col-md-4">
                        @include(
                            'home.assets.text', [
                            'nombre'    => 'correo',
                            'tag'       => 'Correo',
                            'tipo'      => 'email',
                            'place'     => 'Correo',
                            'require'   => true,
                            'valor'     => old('correo'),
                            'edit'      => true

                            ])
                    </div>
                </div>
                <div class="form-group row">
                    <div class="custom-control col-md-12">
                        <label for="mensaje">Mensaje *</label>
                        <textarea name="mensaje" id="mensaje" cols="10" rows="5" class="form-control" required>{{old('mensaje')}}</textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="">
                        <button type="submit" class="btn btn-primary ml-4 py-2 px-4">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
    @include('assets.widgets')
@endsection

