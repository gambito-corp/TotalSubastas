@extends('layouts.admin')
@section('title')
@push('style')
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.bootstrap4.min.css')}}">
@endpush
@section('header')
    <i class="fas fa-asterisk fa-3x"></i>
    <h1 class="m-0 text-dark d-inline-flex mr-3">Detalles de Vehiculos</h1>
    <a href="{{route('admin.detallevehiculos.create')}}" class="btn btn-success btn-small">
        <i class="fas fa-plus-circle"></i> Crear
    </a>
    @isset($trash)
        <a href="{{route('admin.detallevehiculos.index')}}" class="btn btn-info btn-small">
            <i class="fas fa-eye"></i> Regresar
        </a>
    @else
        <a href="{{route('admin.detallevehiculos.trash')}}" class="btn btn-info btn-small">
            <i class="fas fa-recycle"></i> Ver Borrados
        </a>
    @endisset
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <table id="Tabla" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Orden</th>
                        <th>Empresa</th>
                        <th>Lote</th>
                        <th>Producto</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Año</th>
                        <th>Placa</th>
                        <th>Color</th>
                        <th>Version</th>
                        <th>Ubicacion</th>
                        <th>Timon</th>
                        <th>Nª Asientos</th>
                        <th>Estado</th>
                        <th>Informacion</th>
                        <th>Direccion</th>
                        <th>Url del Video</th>
                        <th>Valor Interno Activo</th>
                        <th>Saneado</th>
                        <th>Captura</th>
                        <th>Seguro</th>
                        <th>Soat</th>
                        <th>RTV</th>
                        <th>Terminos</th>
                        <th>Combustible</th>
                        <th>Traccion</th>
                        <th>Torque</th>
                        <th>Potencia</th>
                        <th>Cilindrada</th>
                        <th>Velocidades</th>
                        <th>Trasmision</th>
                        <th>Nº Puertas</th>
                        <th>Frenos Delanteros</th>
                        <th>Frenos Traseros</th>
                        <th>Tipos de Freno</th>
                        <th>Radio</th>
                        <th>Reproductor</th>
                        <th>Lector de Tarjetas</th>
                        <th>Entrada Auxiliar</th>
                        <th>USB</th>
                        <th>Bluetooth</th>
                        <th>Neumaticos</th>
                        <th>Tapizados</th>
                        <th>Airbags</th>
                        <th>Alarma</th>
                        <th>Aros</th>
                        <th>Faros Neblineros</th>
                        <th>Lunas</th>
                        <th>GPS</th>
                        <th>Sensores</th>
                        <th>Kilometraje</th>
                        @isset($trash)
                            <th>Borrado Hace</th>
                        @endisset
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $key => $dat)
                        <tr>

                            <td>
                                @isset($dat->id)
                                    {{ $dat->id }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->Empresa->nombre)
                                    {{ $dat->Empresa->nombre }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->Lote->nombre)
                                    {{ $dat->Lote->nombre }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->Producto->nombre)
                                    {{ $dat->Producto->nombre }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->Marca->nombre)
                                    {{ $dat->Marca->nombre }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->Modelo->nombre)
                                    {{ $dat->Modelo->nombre }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->year)
                                    {{ $dat->year }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->placa)
                                    {{ $dat->placa }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->color)
                                    {{ $dat->color }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->version)
                                    {{ $dat->version }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->ubicacion)
                                    {{ $dat->ubicacion }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->timon)
                                    {{ $dat->timon }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->asientos)
                                    {{ $dat->asientos }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->estado_vehiculo)
                                    {{ $dat->estado_vehiculo }}
                                @endisset
                            </td>



                            <td>
                                @isset($dat->informacion)
                                    {!! $dat->informacion !!}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->direccion)
                                    {{ $dat->direccion }}
                                @endisset
                            </td>


                            <td>
                                @isset($dat->video_url)
                                    <a href="{{$dat->video_url}}" target="_blank">Video Del Vehiculo</a>
                                @endisset
                            </td>

                            <td>
                                @isset($dat->valor_interno_activo)
                                    {{ $dat->valor_interno_activo }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->saneado)
                                    {{ $dat->saneado? 'si':'no' }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->captura)
                                    {{ $dat->captura ? 'si':'no' }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->seguro)
                                    {{ $dat->seguro ? 'si':'no' }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->soat)
                                    {{ $dat->soat ? 'si':'no' }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->rtv)
                                    {{ $dat->rtv ? 'si':'no' }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->terminos)
                                    {{ $dat->terminos }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->combustible)
                                    {{ $dat->combustible }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->traccion)
                                    {{ $dat->traccion }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->torque)
                                    {{ $dat->torque }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->potencia)
                                    {{ $dat->potencia }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->cilindrada)
                                    {{ $dat->cilindrada }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->velocidades)
                                    {{ $dat->velocidades }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->trasmision)
                                    {{ $dat->trasmision }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->puertas)
                                    {{ $dat->puertas }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->freno_delantero)
                                    {{ $dat->freno_delantero ? 'si':'no' }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->freno_trasero)
                                    {{ $dat->freno_trasero ? 'si':'no' }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->tipo_freno)
                                    {{ $dat->tipo_freno }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->am_fm)
                                    {{ $dat->am_fm ? 'si':'no' }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->cd)
                                    {{ $dat->cd ? 'si':'no' }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->sd)
                                    {{ $dat->sd ? 'si':'no' }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->aux)
                                    {{ $dat->aux ? 'si':'no' }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->usb)
                                    {{ $dat->usb ? 'si':'no' }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->bluetooth)
                                    {{ $dat->bluetooth ? 'si':'no' }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->neumaticos)
                                    {{ $dat->neumaticos }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->tapizado)
                                    {{ $dat->tapizado }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->airbag)
                                    {{ $dat->airbag ? 'si':'no' }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->alarma)
                                    {{ $dat->alarma ? 'si':'no' }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->aros)
                                    {{ $dat->aros }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->neblineros)
                                    {{ $dat->neblineros ? 'si':'no' }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->lunas)
                                    {{ $dat->lunas ? 'si':'no' }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->gps)
                                    {{ $dat->gps ? 'si':'no' }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->sensores)
                                    {{ $dat->sensores ? 'si':'no' }}
                                @endisset
                            </td>

                            <td>
                                @isset($dat->kilometraje)
                                    {{ $dat->kilometraje }}
                                @endisset
                            </td>
                            @isset($trash)
                                <td>
                                    {{$dat->deleted_at}}
                                </td>
                            @endisset
                            <td class="align-items-center">
                                @isset($trash)
                                    <a href="{{route('admin.detallevehiculos.restore', ['id' => $dat->id])}}" class="btn btn-info btn-small"> <i class="fas fa-recycle"></i></a>
                                    <a href="{{route('admin.detallevehiculos.destroy', ['id' => $dat->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
                                @else
                                    <a href="{{route('admin.detallevehiculos.show', ['id' => $dat->id])}}" class="btn btn-warning btn-small text-light"><i class="fas fa-eye"></i></a>
                                    <a href="{{route('admin.detallevehiculos.edit', ['id' => $dat->id])}}" class="btn btn-info btn-small"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{route('admin.detallevehiculos.delete', ['id' => $dat->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
                                @endisset
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr>
                        <th>Orden</th>
                        <th>Empresa</th>
                        <th>Lote</th>
                        <th>Producto</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Año</th>
                        <th>Placa</th>
                        <th>Color</th>
                        <th>Version</th>
                        <th>Ubicacion</th>
                        <th>Timon</th>
                        <th>Nª Asientos</th>
                        <th>Estado</th>
                        <th>Informacion</th>
                        <th>Direccion</th>
                        <th>Url del Video</th>
                        <th>Valor Interno Activo</th>
                        <th>Saneado</th>
                        <th>Captura</th>
                        <th>Seguro</th>
                        <th>Soat</th>
                        <th>RTV</th>
                        <th>Terminos</th>
                        <th>Combustible</th>
                        <th>Traccion</th>
                        <th>Torque</th>
                        <th>Potencia</th>
                        <th>Cilindrada</th>
                        <th>Velocidades</th>
                        <th>Trasmision</th>
                        <th>Nº Puertas</th>
                        <th>Frenos Delanteros</th>
                        <th>Frenos Traseros</th>
                        <th>Tipos de Freno</th>
                        <th>Radio</th>
                        <th>Reproductor</th>
                        <th>Lector de Tarjetas</th>
                        <th>Entrada Auxiliar</th>
                        <th>USB</th>
                        <th>Bluetooth</th>
                        <th>Neumaticos</th>
                        <th>Tapizados</th>
                        <th>Airbags</th>
                        <th>Alarma</th>
                        <th>Aros</th>
                        <th>Faros Neblineros</th>
                        <th>Lunas</th>
                        <th>GPS</th>
                        <th>Sensores</th>
                        <th>Kilometraje</th>
                        @isset($trash)
                            <th>Borrado Hace</th>
                        @endisset
                        <th>Acciones</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('js/responsive.bootstrap4.min.js')}}"></script>
    <script>
        $(function () {
            $("#Tabla").DataTable({
                "scrollX":true
            });
        });
    </script>
@endpush
