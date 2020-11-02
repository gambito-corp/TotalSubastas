@extends('layouts.admin')
@section('title')
    @push('style')
        {{--Estilos--}}
    @endpush
@section('header')
    <h1 class="m-0 text-dark">{{is_null($data->id)? 'Crear' : 'Editar'}} Detalle de Vehiculo</h1>
@endsection
@section('content')
    <form action="{{is_null($data->id)? route('admin.detallevehiculos.store') : route('admin.detallevehiculos.update', ['id'=> $data->id])}}" method="Post" enctype="multipart/form-data">
        @csrf @if(!is_null($data->id))@method('PUT')@endif
        <div class="card">
            <div class="card-body">
                @if(is_null($data->id))
                    @livewire('admin.form.imagen.create',  ['empresas' => $empresas, 'lotes' => $lotes, 'productos' => $productos])
                    @livewire('admin.form.modelo.create')
                @else
                    @livewire('admin.form.modelo.update', ['data' => $data])
                @endif
                <div class="form-group row">
                    <div class="custom-control col-md-2">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'year',
                            'tag'       => 'Año',
                            'tipo'      => 'text',
                            'place'     => '2001',
                            'valor'     => !is_null($data->id) ? $data->year:old('year'),
                            'edit'      => true
                            ])
                    </div>
                    <div class="custom-control col-md-2">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'placa',
                            'tag'       => 'Placa',
                            'tipo'      => 'text',
                            'place'     => 'hhh-000',
                            'valor'     => !is_null($data->id) ? $data->placa:old('placa'),
                            'edit'      => true
                            ])
                    </div>
                    <div class="custom-control col-md-2">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'color',
                            'tag'       => 'Color',
                            'tipo'      => 'text',
                            'place'     => 'Rojo',
                            'valor'     => !is_null($data->id) ? $data->color:old('color'),
                            'edit'      => true
                            ])
                    </div>
                    <div class="custom-control col-md-2">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'version',
                            'tag'       => 'Version',
                            'tipo'      => 'text',
                            'place'     => 'version',
                            'valor'     => !is_null($data->id) ? $data->version:old('version'),
                            'edit'      => true
                            ])
                    </div>
                    <div class="custom-control col-md-2">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'ubicacion',
                            'tag'       => 'Ubicacion',
                            'tipo'      => 'text',
                            'place'     => 'Lima',
                            'valor'     => !is_null($data->id) ? $data->ubicacion:old('ubicacion'),
                            'edit'      => true
                            ])
                    </div>
                    <div class="custom-control col-md-2">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'timon',
                            'tag'       => 'Timon',
                            'tipo'      => 'text',
                            'place'     => 'Tipo Timon',
                            'valor'     => !is_null($data->id) ? $data->timon:old('timon'),
                            'edit'      => true
                            ])
                    </div>
                </div>

                <div class="form-group row">
                    <div class="custom-control col-md-3">
                        @include(
                        'admin.assets.FormsElements.text', [
                        'nombre'    => 'asientos',
                        'tag'       => 'Asientos',
                        'tipo'      => 'text',
                        'place'     => 'asientos',
                        'valor'     => !is_null($data->id) ? $data->asientos:old('asientos'),
                        'edit'      => true
                        ])
                    </div>
                    <div class="custom-control col-md-3">
                        <label for="estado_vehiculo">Estado del Vehiculo</label>
                        <select class="form-control  @error('marca_id') is-invalid @enderror" name="estado_vehiculo" id="estado_vehiculo">
                            <option value="{{!is_null($data->id)?$data->estado:'Selecciona una opcion'}}"{{!is_null($data->id)?'':'disabled'}}>
                                {{!is_null($data->id)?$data->estado:'Selecciona una opcion'}}
                            </option>
                            <option value="Nuevo"{{(!is_null($data->id)&&$data->estado == 'Nuevo')?'selected':''}}>Nuevo</option>
                            <option value="Seminuevo"{{(!is_null($data->id)&&$data->estado == 'Seminuevo')?'selected':''}}>Seminuevo</option>
                        </select>

                        @error('estado_vehiculo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="custom-control col-md-6">
                        <label for="informacion">Informacion del Vehiculo</label>
                        <textarea name="informacion" id="informacion" class="form-control  @error('informacion') is-invalid @enderror" cols="3" rows="2"
                        >{{!is_null($data->id) ? $data->informacion:old('informacion')}}</textarea>

                        @error('informacion')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <div class="custom-control col-md-4">
                        @include(
                        'admin.assets.FormsElements.text', [
                        'nombre'    => 'video_url',
                        'tag'       => 'Url de video',
                        'tipo'      => 'text',
                        'place'     => 'asientos',
                        'valor'     => !is_null($data->id) ? $data->video_url:old('video_url'),
                        'edit'      => true
                        ])
                    </div>
                    <div class="custom-control col-md-4">
                        @include(
                        'admin.assets.FormsElements.text', [
                        'nombre'    => 'valor_interno_activo',
                        'tag'       => 'Valor Interno',
                        'tipo'      => 'text',
                        'place'     => 'asientos',
                        'valor'     => !is_null($data->id) ? $data->valor_interno_activo:old('valor_interno_activo'),
                        'edit'      => true
                        ])
                    </div>
                    <div class="col-md-4 center-block">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="saneado" name="saneado" {{ $data->saneado ? 'checked' : (! empty(old('saneado')) ? 'checked' : '')}}>
                            <label class="custom-control-label" for="saneado">Saneado</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="captura" name="captura" {{ $data->captura? 'checked': (! empty(old('captura')) ? 'checked' : '')}}>
                            <label class="custom-control-label" for="captura">Captura</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="seguro" name="seguro" {{ $data->seguro? 'checked': (! empty(old('seguro')) ? 'checked' : '')}}>
                            <label class="custom-control-label" for="seguro">Seguro</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="soat" name="soat" {{ $data->soat? 'checked': (! empty(old('soat')) ? 'checked' : '')}}>
                            <label class="custom-control-label" for="soat">Soat</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="rtv" name="rtv" {{ $data->rtv? 'checked': (! empty(old('rtv')) ? 'checked' : '')}}>
                            <label class="custom-control-label" for="rtv">RTV</label>
                        </div>
                    </div>

                </div>
                <div class="form-group row">
                    <div class="custom-control col-md-6">
                        <label for="terminos">Terminos y Condiciones Adicionales</label>
                        <textarea name="terminos" id="terminos" class="form-control  @error('terminos') is-invalid @enderror" cols="3" rows="10"
                        >{{!is_null($data->id) ? $data->terminos:old('terminos')}}</textarea>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="custom-control col-md-4">
                                @include(
                                'admin.assets.FormsElements.text', [
                                'nombre'    => 'combustible',
                                'tag'       => 'Combustible',
                                'tipo'      => 'text',
                                'place'     => 'asientos',
                                'valor'     => !is_null($data->id) ? $data->combustible:old('combustible'),
                                'edit'      => true
                                ])
                            </div>
                            <div class="custom-control col-md-4">
                                @include(
                                'admin.assets.FormsElements.text', [
                                'nombre'    => 'traccion',
                                'tag'       => 'Traccion',
                                'tipo'      => 'text',
                                'place'     => 'asientos',
                                'valor'     => !is_null($data->id) ? $data->traccion:old('traccion'),
                                'edit'      => true
                                ])
                            </div>
                            <div class="custom-control col-md-4">
                                @include(
                                'admin.assets.FormsElements.text', [
                                'nombre'    => 'torque',
                                'tag'       => 'Torque',
                                'tipo'      => 'text',
                                'place'     => 'asientos',
                                'valor'     => !is_null($data->id) ? $data->torque:old('torque'),
                                'edit'      => true
                                ])
                            </div>
                        </div>
                        <div class="row">
                            <div class="custom-control col-md-4">
                                @include(
                                'admin.assets.FormsElements.text', [
                                'nombre'    => 'potencia',
                                'tag'       => 'Potencia',
                                'tipo'      => 'text',
                                'place'     => 'asientos',
                                'valor'     => !is_null($data->id) ? $data->potencia:old('potencia'),
                                'edit'      => true
                                ])
                            </div>
                            <div class="custom-control col-md-4">
                                @include(
                                'admin.assets.FormsElements.text', [
                                'nombre'    => 'cilindrada',
                                'tag'       => 'Cilindrada',
                                'tipo'      => 'text',
                                'place'     => 'asientos',
                                'valor'     => !is_null($data->id) ? $data->cilindrada:old('cilindrada'),
                                'edit'      => true
                                ])
                            </div>
                            <div class="custom-control col-md-4">
                                @include(
                                'admin.assets.FormsElements.text', [
                                'nombre'    => 'velocidades',
                                'tag'       => 'Velocidades',
                                'tipo'      => 'text',
                                'place'     => 'asientos',
                                'valor'     => !is_null($data->id) ? $data->velocidades:old('velocidades'),
                                'edit'      => true
                                ])
                            </div>
                        </div>
                        <div class="row">
                            <div class="custom-control col-md-4">
                                @include(
                                'admin.assets.FormsElements.text', [
                                'nombre'    => 'trasmision',
                                'tag'       => 'Trasmision',
                                'tipo'      => 'text',
                                'place'     => 'asientos',
                                'valor'     => !is_null($data->id) ? $data->trasmision:old('trasmision'),
                                'edit'      => true
                                ])
                            </div>
                            <div class="custom-control col-md-4">
                                @include(
                                'admin.assets.FormsElements.text', [
                                'nombre'    => 'puertas',
                                'tag'       => 'Nº De Puertas',
                                'tipo'      => 'text',
                                'place'     => 'asientos',
                                'valor'     => !is_null($data->id) ? $data->puertas:old('puertas'),
                                'edit'      => true
                                ])
                            </div>
                            <div class="custom-control col-md-4">
                                @include(
                                'admin.assets.FormsElements.text', [
                                'nombre'    => 'tipo_freno',
                                'tag'       => 'Tipo De Freno',
                                'tipo'      => 'text',
                                'place'     => 'asientos',
                                'valor'     => !is_null($data->id) ? $data->tipo_freno:old('tipo_freno'),
                                'edit'      => true
                                ])
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="custom-control col-md-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="freno_delantero" name="freno_delantero" {{ $data->freno_delantero? 'checked': (! empty(old('freno_delantero')) ? 'checked' : '')}}>
                                    <label class="custom-control-label" for="freno_delantero">Frenos Delanteros</label>
                                </div>
                            </div>
                            <div class="custom-control col-md-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="freno_trasero" name="freno_trasero" {{ $data->freno_trasero? 'checked': (! empty(old('freno_trasero')) ? 'checked' : '')}}>
                                    <label class="custom-control-label" for="freno_trasero">Frenos Traseros</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="custom-control col-md-2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="am_fm" name="am_fm" {{ $data->am_fm? 'checked': (! empty(old('am_fm')) ? 'checked' : '')}}>
                            <label class="custom-control-label" for="am_fm">Radio</label>
                        </div>
                    </div>
                    <div class="custom-control col-md-2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="cd" name="cd" {{ $data->cd? 'checked': (! empty(old('cd')) ? 'checked' : '')}}>
                            <label class="custom-control-label" for="cd">Lector de CD</label>
                        </div>
                    </div>
                    <div class="custom-control col-md-2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="sd" name="sd" {{ $data->sd? 'checked': (! empty(old('sd')) ? 'checked' : '')}}>
                            <label class="custom-control-label" for="sd">Lector de SD</label>
                        </div>
                    </div>
                    <div class="custom-control col-md-2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="aux" name="aux" {{ $data->aux? 'checked': (! empty(old('aux')) ? 'checked' : '')}}>
                            <label class="custom-control-label" for="aux">Entrada AUX</label>
                        </div>
                    </div>
                    <div class="custom-control col-md-2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="usb" name="usb" {{ $data->usb? 'checked': (! empty(old('usb')) ? 'checked' : '')}}>
                            <label class="custom-control-label" for="usb">Entrada USB</label>
                        </div>
                    </div>
                    <div class="custom-control col-md-2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="bluetooth" name="bluetooth" {{ $data->bluetooth? 'checked': (! empty(old('bluetooth')) ? 'checked' : '')}}>
                            <label class="custom-control-label" for="bluetooth">Bluetooth</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="custom-control col-md-3">
                        @include(
                        'admin.assets.FormsElements.text', [
                        'nombre'    => 'neumaticos',
                        'tag'       => 'Neumaticos',
                        'tipo'      => 'text',
                        'place'     => 'asientos',
                        'valor'     => !is_null($data->id) ? $data->neumaticos:old('neumaticos'),
                        'edit'      => true
                        ])
                    </div><div class="custom-control col-md-3">
                        @include(
                        'admin.assets.FormsElements.text', [
                        'nombre'    => 'tapizado',
                        'tag'       => 'Tapizado',
                        'tipo'      => 'text',
                        'place'     => 'asientos',
                        'valor'     => !is_null($data->id) ? $data->tapizado:old('tapizado'),
                        'edit'      => true
                        ])
                    </div><div class="custom-control col-md-3">
                        @include(
                        'admin.assets.FormsElements.text', [
                        'nombre'    => 'aros',
                        'tag'       => 'Aros',
                        'tipo'      => 'text',
                        'place'     => 'asientos',
                        'valor'     => !is_null($data->id) ? $data->aros:old('aros'),
                        'edit'      => true
                        ])
                    </div><div class="custom-control col-md-3">
                        @include(
                        'admin.assets.FormsElements.text', [
                        'nombre'    => 'kilometraje',
                        'tag'       => 'Kilometraje',
                        'tipo'      => 'text',
                        'place'     => 'asientos',
                        'valor'     => !is_null($data->id) ? $data->kilometraje:old('kilometraje'),
                        'edit'      => true
                        ])
                    </div>
                </div>
                <div class="form-group row">
                    <div class="custom-control col-md-2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="airbag" name="airbag" {{ $data->airbag? 'checked': (! empty(old('airbag')) ? 'checked' : '')}}>
                            <label class="custom-control-label" for="airbag">Airbag</label>
                        </div>
                    </div>
                    <div class="custom-control col-md-2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="alarma" name="alarma" {{ $data->alarma? 'checked': (! empty(old('alarma')) ? 'checked' : '')}}>
                            <label class="custom-control-label" for="alarma">Alarma</label>
                        </div>
                    </div>
                    <div class="custom-control col-md-2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="neblineros" name="neblineros" {{ $data->neblineros? 'checked': (! empty(old('neblineros')) ? 'checked' : '')}}>
                            <label class="custom-control-label" for="neblineros">Neblineros</label>
                        </div>
                    </div>
                    <div class="custom-control col-md-3">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="lunas" name="lunas" {{ $data->lunas? 'checked': (! empty(old('lunas')) ? 'checked' : '')}}>
                            <label class="custom-control-label" for="lunas">Lunas Polarizadas</label>
                        </div>
                    </div>
                    <div class="custom-control col-md-1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="gps" name="gps" {{ $data->gps? 'checked': (! empty(old('gps')) ? 'checked' : '')}}>
                            <label class="custom-control-label" for="gps">gps</label>
                        </div>
                    </div>
                    <div class="custom-control col-md-2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="sensores" name="sensores" {{ $data->sensores? 'checked': (! empty(old('sensores')) ? 'checked' : '')}}>
                            <label class="custom-control-label" for="sensores">Sensores</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="">
                        <button type="submit" class="btn btn-primary ml-4 py-2 px-4"> {{!is_null($data->id) ? 'Editar':'Crear' }}</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@push('scripts')
    {{--scripts--}}
@endpush
