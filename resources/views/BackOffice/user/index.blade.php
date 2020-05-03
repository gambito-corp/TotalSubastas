@extends('layouts.BackOfice')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tabla de Usuarios</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="">
        <div class="">
            <div class="">
                @include('includes.sesion')
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Usuarios del Sistema</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body container-fluid">
                        <table id="tabla" class="table table-bordered table-hover container-fluid">
                            <thead class="">
                                <tr class="">
                                    <th class="">ID</th>
                                    <th class="">Nombre y apellido</th>
                                    <th class="">Rol</th>
                                    <th class="">Correo</th>
                                    <th class="">Apodo</th>
                                    <th class="">Descripcion</th>
                                    <th class="">Imagen</th>
                                    <th class="">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @isset($usuarios)
                                @forelse ($usuarios as $usuario)
                                <tr class="">

                                        <td>
                                            <a href="{{ route('user.perfil', ['id' => $usuario->id]) }}">
                                                {{ isset($usuario->id)?$usuario->id : 'El usuario No tiene Id' }}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('user.perfil', ['id' => $usuario->id]) }}">
                                                {{ isset($usuario->name) ?$usuario->name : 'no existe el nombre ' }} {{ isset($usuario->surname) ? $usuario->surname: 'no existe el apellido' }}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('user.perfil', ['id' => $usuario->id]) }}">
                                                {{ isset($usuario->rol) ?$usuario->rol : 'no existe el Rol' }}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('user.perfil', ['id' => $usuario->id]) }}">
                                                {{ isset($usuario->email) ?$usuario->email : 'no existe el Correo' }}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('user.perfil', ['id' => $usuario->id]) }}">
                                                {{ isset($usuario->nickname) ?$usuario->nickname : 'no existe el Apodo' }}
                                            </a>
                                        </td>
                                        <td>
                                            @php
                                                if(isset($usuario->descripcion) && !empty($usuario->descripcion)){
                                                    if(strlen($usuario->descripcion) >= 40){
                                                        echo substr($usuario->descripcion, 0, 30).'<a href="#" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#modal-success_'.$usuario->id.'">Leer Mas...</a>';
                                                    }else{
                                                        echo $usuario->descripcion;
                                                    }
                                                }else{
                                                    echo 'no existe el Descripcion';
                                                }

                                            // isset($usuario->descripcion) ?if(strlen($usuario->descripcion) <= 30){
                                            //     substr($usuario->descripcion, 0, 30) : 'no existe el Descripcion'
                                            // }else{
                                            //     $usuario->descripcion, 0, 30) : 'no existe el Descripcion'
                                            // }
                                            @endphp
                                        </td>
                                        <td>
                                            @if (isset($usuario->imagen))
                                                <img src="{{route('user.imagen',['filename' => $usuario->imagen])}}" alt="" width="50" height="50">
                                            @else
                                                <img src="{{asset('img/user.png')}}" alt="" width="50" height="50">
                                            @endif
                                        </td>
                                        <td>
                                            @if (Auth::user()->rol == 'admin' || Auth::user()->rol == 'dueño' )
                                                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#modal-info_{{$usuario->id}}">
                                                    Actualizar Usuario
                                                </button>
                                                @if (Auth::user()->id == $usuario->id)

                                                @else
                                                <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#modal-warning_{{$usuario->id}}">
                                                    Dar de Baja Usuario
                                                </button>

                                                @endif

                                            @else
                                                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#modal-permiso{{$usuario->id}}">
                                                    Actualizar Usuario
                                                </button>
                                                <button type="button" class="btn btn-outline-warning" data-toggle="modal" data-target="#modal-permiso{{$usuario->id}}">
                                                    Dar de Baja Usuario
                                                </button>

                                            @endif

                                        </td>

                                </tr>
                                {{-- modal Permiso Denegado --}}
                                <div class="modal fade" id="modal-permiso{{$usuario->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content bg-danger">
                                            <div class="modal-header">
                                                <h4 class="modal-title"> Permiso Denegado</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                        </div>
                                        <div class="modal-body">
                                            No Tiene Permiso Para Modificar o Borrar Este  Usuario ({{  $usuario->name.' '.$usuario->surname   }}), Porfavor Contacte Con el Administrador del Sistema.

                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- modal leer mas --}}
                                <div class="modal fade" id="modal-success_{{$usuario->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content bg-success">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Descripcion del Usuario {{  $usuario->name.' '.$usuario->surname   }}</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>{{ $usuario->descripcion }}</p>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- modal actualizar --}}
                                <div class="modal fade" id="modal-info_{{$usuario->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content bg-info">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Info Modal {{ $usuario->name.' '.$usuario->surname  }}</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Deseas Actualizar al usuario {{ $usuario->name.' '.$usuario->surname  }}</p>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                                                <a href="{{route('user.masteredit',['id' => $usuario->id])}}" class="btn btn-outline-light">Actualizar Usuario</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- modal dar de baja --}}
                                <div class="modal fade" id="modal-warning_{{$usuario->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content bg-warning">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Dar de Baja al Usuario {{ $usuario->name.' '.$usuario->surname }}</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Si das de baja al Usuario {{ $usuario->name.' '.$usuario->surname  }} este no podra acceder a la intranet hasta que decidas volver a darlo de alta en la plataforma</p>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                                                <a href="{{route('user.delete',['id' => $usuario->id])}}" class="btn btn-outline-light">Dar de Baja</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <tr>
                                    <td>No Hay Datos</td>
                                    <td>No Hay Datos</td>
                                    <td>No Hay Datos</td>
                                    <td>No Hay Datos</td>
                                    <td>No Hay Datos</td>
                                    <td>No Hay Datos</td>
                                    <td>No Hay Datos</td>
                                    <td>No Hay Datos</td>
                                </tr>
                                @endforelse
                                @else
                                <tr>
                                    <td>No Existe la variable $usuarios</td>
                                    <td>No Existe la variable $usuarios</td>
                                    <td>No Existe la variable $usuarios</td>
                                    <td>No Existe la variable $usuarios</td>
                                    <td>No Existe la variable $usuarios</td>
                                    <td>No Existe la variable $usuarios</td>
                                    <td>No Existe la variable $usuarios</td>
                                    <td>No Existe la variable $usuarios</td>
                                </tr>
                                @endisset
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre y Apellido</th>
                                    <th>Rol</th>
                                    <th>Correo</th>
                                    <th>Apodo</th>
                                    <th>Descripcion</th>
                                    <th>Imagen</th>
                                    <th>Acciones</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            <!-- /.card -->
            </div>
        </div>
    </section>
</div>

<!-- /.content-wrapper -->
@endsection
