@extends('adminlte::page')

@section('title', 'Panel de Control')

@section('content_header')
    <h1>Panel de Control</h1>
@stop

@section('content')
    <p>Bienvenido al panel de control de la Pagina Web, esta desarrollado con Admin LTE 3</p>

    <a href="{{ route('Autorizacion.create') }}" class="btn btn-success">Nuevo Rol</a>
    <br><br>
    @include('includes.sesion')

@section('plugins.Datatables', true)

<table id="example" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
    <thead>
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>Descripcion</th>
            <th>slug</th>
            <th>Creado</th>
            <th>Actualizado</th>
            <th>Borrado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($datos as $data)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td><a href='{{ route('Autorizacion.show', ['autorizacion' => $data->slug]) }}'>{{ $data->nombre }}</a></td>
            @if ( strlen($data->descripcion > 40))
                <td>
                    {{ $data->descripcion }}
                </td>
            @else
                <td>
                    {{ substr($data->descripcion, 0 ,40) }} ...<button class="btn btn-success btn-xs" data-toggle="modal" data-target='{{ "#modal-success_$data->id" }}'><i class="fa fa-eye"></i></button>
                </td>
            @endif
            <td>{{ $data->slug }}</td>
            <td>{{ $data->created_at ? $data->created_at->diffForHumans() : '' }}</td>
            <td>{{ ($data->updated_at && $data->updated_at != $data->created_at) ? $data->updated_at->diffForHumans() : '' }}</td>
            <td>{{ $data->deleted_at ? $data->deleted_at->diffForHumans() : '' }}</td>
            <td>
                @if (request()->routeis('Autorizacion.index'))
                    <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#modal-info_{{ $data->id }}">
                        <i class="fa fa-pen"></i>
                    </button>
                    <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-warning_{{ $data->id }}">
                        <i class="fa fa-trash-alt"></i>
                    </button>
                @endif

                @if (request()->routeis('Autorizacion.trash'))
                    <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#modal-info_{{ $data->id }}">
                        <i class="fa fa-recycle"></i>
                    </button>
                    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-danger_{{ $data->id }}">
                        <i class="fa fa-times"></i>
                    </button>
                @endif
            </td>
        </tr>
        {{-- modal leer mas --}}
        <div class="modal fade" id="modal-success_{{ $data->id }}">
            <div class="modal-dialog">
                <div class="modal-content bg-success">
                    <div class="modal-header">
                        <h4 class="modal-title">{{ "descripcion del Controlador $data->nombre" }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                    <p>{{ "$data->descripcion" }}</p>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        @if (request()->routeis('Autorizacion.index'))
            {{-- modal actualizar --}}
            <div class="modal fade" id="modal-info_{{ $data->id }}">
                <div class="modal-dialog">
                    <div class="modal-content bg-info">
                        <div class="modal-header">
                            <h4 class="modal-title">{{ "Actualizar El Controlador $data->nombre" }}</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>{{ "Deseas Actualizar al Controlador $data->nombre" }}</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                            <a href="{{route('Autorizacion.edit', ['autorizacion' => $data->slug])}}" class="btn btn-outline-light">Actualizar</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- modal dar de baja --}}
            <div class="modal fade" id="modal-warning_{{ $data->id }}">
                <div class="modal-dialog">
                    <div class="modal-content bg-warning">
                        <div class="modal-header">
                            <h4 class="modal-title">Dar de Baja al Controllador {{ $data->nombre }}</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Si das de baja al Controllador {{ $data->nombre }} este no podra acceder a la intranet hasta que decidas volver a darlo de alta en la plataforma</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cerrar</button>
                            <form action="{{route('Autorizacion.delete', ['autorizacion' => $data->id])}}" method="post">
                                @csrf @method('PUT')
                                <input type="submit" value="Dar de Baja" class="btn btn-outline-dark">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if (request()->routeis('Autorizacion.trash'))
            {{-- modal Restaurar --}}
            <div class="modal fade" id="modal-info_{{ $data->id }}">
                <div class="modal-dialog">
                    <div class="modal-content bg-info">
                        <div class="modal-header">
                            <h4 class="modal-title">Info Modal </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Deseas Restaurar al Controllador {{ $data->nombre }} </p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>

                            <form action="{{route('Autorizacion.restore', ['id' => $data->id])}}" method="POST">
                                @csrf @method('POST')
                                <input type="submit" value="Actualizar" class="btn btn-outline-light">
                            </form>

                            {{-- <a href="{{route($clase['restaurar'],['id' => $data[$clase['bd'][0]]])}}" class="btn btn-outline-light">Restaurar </a> --}}
                        </div>
                    </div>
                </div>
            </div>
            {{-- modal Eliminar --}}
            <div class="modal fade" id="modal-danger_{{ $data->id }}">
                <div class="modal-dialog">
                    <div class="modal-content bg-danger">
                        <div class="modal-header">
                            <h4 class="modal-title">Eliminar  </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Esto eliminara al Controlador {{ $data->nombre }} de forma irrecuperable una vez presionado y confirmado el boton eliminar no hay marcha atras <br> desear eliminar al {{ $data->nombre }}</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#modal-danger-confirmacion_{{ $data->id }}">
                                Eliminar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Confirmacion de eliminar --}}
            <div class="modal fade" id="modal-danger-confirmacion_{{ $data->id }}">
                <div class="modal-dialog">
                    <div class="modal-content bg-danger">
                        <div class="modal-header">
                            <h4 class="modal-title">Confirmacion de Eliminar  </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>100% Seguro de eliminar al Controllador {{ $data->nombre }}, Podrias generar un fallo en cascada de hacerlo</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                            <form action="{{ route('Autorizacion.destroy', $data) }}" method="post">
                                @csrf @method('DELETE')
                                <input type="submit" value="Eliminar"  class="btn btn-outline-light">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @empty
        <tr>
            <td>No Existe</td>
            <td>No Existe</td>
            <td>No Existe</td>
            <td>No Existe</td>
            <td>No Existe</td>
            <td>No Existe</td>
            <td>No Existe</td>
            <td>No Existe</td>
        </tr>
        @endforelse
    </tbody>
    <tfoot>
        <tr>
            <th>id</th>
            <th>nombre</th>
            <th>Descripcion</th>
            <th>slug</th>
            <th>Creado</th>
            <th>Actualizado</th>
            <th>Borrado</th>
            <th>Acciones</th>
        </tr>
    </tfoot>
</table>

@stop


@section('css')
    <link rel="stylesheet" href="{{ asset('/css/estilos.css') }}">
@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@stop


