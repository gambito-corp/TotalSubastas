@extends('adminlte::page')

@section('title', 'Panel de Control de Permisos')

@section('content_header')
@if (session()->has('personificacion'))
    <form class="nav-form pull-right" method="post" action="{{ route('User.inpersonificar') }}">
        @csrf
        <input type="submit" class="btn btn-outline-danger" value="Dejar de Personificar">
    </form>
@endif
    <h1>Panel de Control de Permisos</h1>
@stop

@section('content')
    <p>Bienvenido al panel de control de la Pagina Web, esta desarrollado con Admin LTE 3</p>

    <a href="{{ route('User.create') }}" class="btn btn-success">Nuevo Permiso</a>
    <br><br>
    @include('includes.sesion')

@section('plugins.Datatables', true)

<table id="example" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
    <thead>
        <tr>
            <th>Id</th>
            <th>Rol</th>
            <th>Nombre</th>
            <th>Username</th>
            <th>Email</th>
            <th>Telefono</th>
            <th>Creado Hace</th>
            <th>Actualizado Hace</th>
            <th>Eliminado Hace</th>
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        @forelse ($datos as $data)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->rol->nombre }}</td>
            <td><a href='{{ route('User.show', ['user' => $data->username]) }}'>{{ $data->name }}</a></td>
            <td><a href='{{ route('User.show', ['user' => $data->username]) }}'>{{ $data->username }}</a></td>
            <td>{{ $data->email }}</td>
            <td>{{ $data->telefono }}</td>
            <td>{{ $data->created_at ? $data->created_at->diffForHumans() : '' }}</td>
            <td>{{ ($data->updated_at && $data->updated_at != $data->created_at) ? $data->updated_at->diffForHumans() : '' }}</td>
            <td>{{ $data->deleted_at ? $data->deleted_at->diffForHumans() : '' }}</td>
            <td>
                @if (request()->routeis('User.index'))
                    <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#modal-info_{{ $data->id }}">
                        <i class="fa fa-pen"></i>
                    </button>
                    <button class="btn btn-warning btn-xs" data-toggle="modal" data-target="#modal-warning_{{ $data->id }}">
                        <i class="fa fa-trash-alt"></i>
                    </button>

                    @puedePersonificar ($data->id)
                        <button class="btn btn-success btn-xs" data-toggle="modal" data-target="#modal-success_{{ $data->id }}">
                            <i class="fa fa-user"></i>
                        </button>
                    @endif
                @endpuedePersonificar

                @if (request()->routeis('User.trash'))
                    <button class="btn btn-info btn-xs" data-toggle="modal" data-target="#modal-info_{{ $data->id }}">
                        <i class="fa fa-recycle"></i>
                    </button>
                    <button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-danger_{{ $data->id }}">
                        <i class="fa fa-times"></i>
                    </button>
                @endif
            </td>
        </tr>
        @if (request()->routeis('User.index'))
            @puedePersonificar ($data->id)
                {{-- modal Personificacion de usuarios --}}
                <div class="modal fade" id="modal-success_{{ $data->id }}">
                    <div class="modal-dialog">
                        <div class="modal-content bg-success">
                            <div class="modal-header">
                                <h4 class="modal-title">{{ "Personificar a $data->name" }}</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                            <p>{{ "Ahora seras logueado automaticamente con el usuario $data->username recuerda que todo lo que veas sera exactamente lo mismo que lo que este usuario pueda ver" }}</p>
                            </div>
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                                <form action="{{ route('User.personificar') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ $data->id }}">
                                    <input type="submit" value="Personificar" class="btn btn-outline-light">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endpuedePersonificar
            {{-- modal actualizar --}}
            <div class="modal fade" id="modal-info_{{ $data->id }}">
                <div class="modal-dialog">
                    <div class="modal-content bg-info">
                        <div class="modal-header">
                            <h4 class="modal-title">{{ "Actualizar El Permiso $data->name" }}</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>{{ "Deseas Actualizar el Permiso $data->name" }}</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                            <a href="{{route('User.edit', ['user' => $data->username])}}" class="btn btn-outline-light">Actualizar</a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- modal dar de baja --}}
            <div class="modal fade" id="modal-warning_{{ $data->id }}">
                <div class="modal-dialog">
                    <div class="modal-content bg-warning">
                        <div class="modal-header">
                            <h4 class="modal-title">Dar de Baja al Permiso {{ $data->name }}</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Si das de baja al Permiso {{ $data->name }} este no podra acceder a la intranet hasta que decidas volver a darlo de alta en la plataforma</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Cerrar</button>
                            <form action="{{route('User.delete', ['user' => $data->username])}}" method="post">
                                @csrf @method('PUT')
                                <input type="submit" value="Dar de Baja" class="btn btn-outline-dark">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if (request()->routeis('User.trash'))
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
                            <p>Deseas Restaurar al Permiso {{ $data->name }} </p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>

                            <form action="{{route('User.restore', ['id' => $data->id])}}" method="POST">
                                @csrf @method('POST')
                                <input type="submit" value="Actualizar" class="btn btn-outline-light">
                            </form>
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
                            <p>Esto eliminara al Permiso {{ $data->name }} de forma irrecuperable una vez presionado y confirmado el boton eliminar no hay marcha atras <br> desear eliminar al {{ $data->name }}</p>
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
                            <p>100% Seguro de eliminar al Permiso  {{ $data->name }}, Podrias generar un fallo en cascada de hacerlo</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                            <form action="{{ route('User.destroy', $data) }}" method="post">
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


