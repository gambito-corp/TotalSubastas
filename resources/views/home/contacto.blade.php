@extends('layouts.app')
@section('content')
<div style="background: white; padding-bottom: 40px; padding-top: 40px">
    <div class="container">
        
        <form action="" method="Post" enctype="multipart/form-data">
            @csrf
            <div class="card  radius">
                <div class="card-body bg-light-card  radius" style="padding:50px">
                    <h2 class="font-weight-bold text-dark titulo-recarga">Contáctanos</h2>
                    <div class="row">
                        <div class="form-group col-md-4">
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
                        <div class="form-group col-md-4">
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
                        <div class="form-group col-md-4">
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
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="mensaje">Mensaje *</label>
                            <textarea name="mensaje" id="mensaje" cols="10" rows="5" class="form-control" required>{{old('mensaje')}}</textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-2 mt-4 mb-0">
                            <button type="submit" class="btn btn-block  btn-primary rounded-pill">Enviar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
    @include('assets.widgets')
@endsection

