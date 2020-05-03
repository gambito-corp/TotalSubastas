@extends('layouts.BackOfice')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tabla de Contactos</h1>
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
                        <h3 class="card-title">Contactos del Sistema</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body container-fluid">
                        <table id="tabla" class="table table-bordered table-hover container-fluid">
                            <thead class="">
                                <tr class="">
                                    <th class="">ID</th>
                                    <th class="">Nombre</th>
                                    <th class="">Correo</th>
                                    <th class="">telefono</th>
                                    <th class="">Descripcion</th>

                                </tr>
                            </thead>
                            <tbody class="">
                                @isset($usuarios)
                                @forelse ($usuarios as $usuario)
                                <tr class="">

                                        <td>

                                                {{ isset($usuario->id)?$usuario->id : 'El usuario No tiene Id' }}

                                        </td>
                                        <td>

                                                {{ isset($usuario->name) ?$usuario->name : 'no existe el nombre ' }}

                                        </td>

                                        <td>
                                            <a href="{{ route('user.perfil', ['id' => $usuario->id]) }}">
                                                {{ isset($usuario->email) ?$usuario->email : 'no existe el Correo' }}
                                            </a>
                                        </td>
                                        <td>
                                            <a href="{{ route('user.perfil', ['id' => $usuario->id]) }}">
                                                {{ isset($usuario->telefono) ?$usuario->telefono : 'no existe el Apodo' }}
                                            </a>
                                        </td>
                                        <td>
                                            @php
                                                if(isset($usuario->mensaje) && !empty($usuario->mensaje)){
                                                    if(strlen($usuario->mensaje) >= 40){
                                                        echo substr($usuario->mensaje, 0, 30).'<a href="#" class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#modal-success_'.$usuario->id.'">Leer Mas...</a>';
                                                    }else{
                                                        echo $usuario->mensaje;
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


                                </tr>
                                {{-- modal leer mas --}}
                                <div class="modal fade" id="modal-success_{{$usuario->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content bg-success">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Descripcion del Usuario {{  $usuario->name   }}</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>{{ $usuario->mensaje }}</p>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
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
                                </tr>
                                @endforelse
                                @else
                                <tr>
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
                                    <th>Nombre </th>
                                    <th>Correo</th>
                                    <th>telefono</th>
                                    <th>Descripcion</th>
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
