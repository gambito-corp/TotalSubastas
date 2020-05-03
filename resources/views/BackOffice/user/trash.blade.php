@extends('layouts.BackOfice')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tabla de Usuarios Dados de Baja</h1>
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

                                                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target="#modal-info_{{$usuario->id}}">
                                                    Restaurar Usuario
                                                </button>




                                                    <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#modal-danger_{{$usuario->id}}">
                                                        Eliminar Usuario Definitivamente
                                                    </button>



                                        </td>

                                </tr>

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
                                {{-- modal Restaurar --}}
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
                                                <p>Deseas Restaurar al usuario {{ $usuario->name.' '.$usuario->surname  }}</p>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                                                <a href="{{route('user.restore',['id' => $usuario->id])}}" class="btn btn-outline-light">Restaurar Usuario</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- modal Eliminar --}}
                                <div class="modal fade" id="modal-danger_{{$usuario->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content bg-danger">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Eliminar Usuario {{ $usuario->name.' '.$usuario->surname  }}</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Esto eliminara al usuario de forma irreversible una vez presionado y confirmado el boton eliminar no hay marcha atras <br> desear eliminar al usuario {{ $usuario->name.' '.$usuario->surname }}</p>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                                                <a href="{{route('user.delete',['id' => $usuario->id])}}" class="btn btn-outline-light">Eliminar Usuario</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Confirmacion de eliminar --}}
                                <div class="modal fade" id="modal-danger-confirmacion_{{$usuario->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content bg-danger">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Confirmacion de Eliminar Usuario {{ $usuario->name.' '.$usuario->surname  }}</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>100% Seguro de eliminar al usuario {{ $usuario->name.' '.$usuario->surname }}</p>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>

                                                <a href="{{route('user.delete',['id' => $usuario->id])}}" class="btn btn-outline-light">Eliminar Usuario</a>
                                            </div>
                                        </div>
                                    </div>
                                     {{-- modal Eliminar --}}
                                <div class="modal fade" id="modal-danger_{{$usuario->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content bg-danger">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Eliminar Usuario {{ $usuario->name.' '.$usuario->surname  }}</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Esto eliminara al usuario de forma irreversible una vez presionado y confirmado el boton eliminar no hay marcha atras <br> desear eliminar al usuario {{ $usuario->name.' '.$usuario->surname }}</p>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#modal-danger-confirmacion_{{$usuario->id}}">
                                                    Eliminar Usuario
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Confirmacion de eliminar --}}
                                <div class="modal fade" id="modal-danger-confirmacion_{{$usuario->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content bg-danger">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Confirmacion de Eliminar Usuario {{ $usuario->name.' '.$usuario->surname  }}</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>100% Seguro de eliminar al usuario {{ $usuario->name.' '.$usuario->surname }}</p>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cerrar</button>
                                                <a href="{{route('user.destroy',['id' => $usuario->id])}}" class="btn btn-outline-light">Eliminar</a>
                                            </div>
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
