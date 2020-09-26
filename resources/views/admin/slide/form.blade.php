@extends('layouts.admin')
@section('title')
    @push('style')
        {{--Estilos--}}
    @endpush
@section('header')
    <h1 class="m-0 text-dark">{{is_null($data->id)? 'Crear' : 'Editar'}} Slide</h1>
@endsection
@section('content')
    <form action="{{is_null($data->id)? route('admin.slide.store') : route('admin.slide.update', ['id'=> $data->id])}}" method="Post" enctype="multipart/form-data">
        @csrf @if(!is_null($data->id))@method('PUT')@endif
        <div class="card">
            <div class="card-body">
                <div class="form-group row">
                    <div class="custom-control {{!is_null($data->id)?'col-md-6':'col-md-6 offset-3'}}">
                        @include(
                            'admin.assets.FormsElements.text', [
                            'nombre'    => 'ruta',
                            'tag'       => 'Imagen de Slide',
                            'tipo'      => 'file'
                            ])
                    </div>
                    @if(!is_null($data->id))
                        <div class="custom-control col-md-6">
                            @if (isset($data->ruta))
                                @include('assets.imagen', ['carpeta' => 'slide', 'id' => $data->id, 'ancho' => '300', 'admin' => true])
                            @endif
                        </div>
                    @endif
                </div>
                <div class="form-group row">
                    <div class="custom-control col-md-12">
                        @if($data->id)
                            <label for="activo">Aprobar Slide?</label>
                            <select name="activo" id="activo" class="form-control">
                                <option value="" {{$data->activo == null?'selected':''}}>Selecciona una Opcion</option>
                                <option value="true" {{$data->activo == true?'selected':''}}>SI</option>
                                <option value="false" {{$data->activo == false?'selected':''}}>NO</option>
                            </select>
                        @else
                            <label for="activo">Aprobar Slide?</label>
                            <select name="activo" id="activo" class="form-control">
                                <option value="" {{old('activo') == null?'selected':''}}>Selecciona una Opcion</option>
                                <option value="true" {{old('activo') == true?'selected':''}}>SI</option>
                                <option value="false" {{old('activo') == false?'selected':''}}>NO</option>
                            </select>
                        @endif
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
