@extends('BackOffice.page')
@section('title-pre', 'TotalSubastas')
@section('title', ' - Controladores')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
@endsection
@section('fuentes')
@section('content_header', 'Control de Controladores')
@section('BreadCrumbs', 'Controladores')


@section('contenido')
    <h2>Visualiza Todos Los Controladores {{ request()->routeis('Autorizacion.index') ? 'Que hay': 'Borrados' }}</h2>
    <a href="{{ route('Autorizacion.create') }}" class="btn btn-success">Crear un Nuevo Controlador</a>
    @if (request()->routeis('Autorizacion.index'))        
        <a href="{{ route('Autorizacion.trash') }}" class="btn btn-info">Ve a la papelera de reciclaje</a>
    @else
        <a href="{{ route('Autorizacion.index') }}" class="btn btn-info">Ve a la lista de index</a>        
    @endif
    <br><br>


    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Listado de Controladores {{ request()->routeis('Autorizacion.index') ? 'Activos': 'Dados de Baja' }}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">            
            <table id="rol" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Ruta</th>
                        <th>Descripcion</th>
                        @if(request()->routeis('Autorizacion.index'))                            
                        <th>Fecha de Creacion</th>
                        <th>Fecha de actualizacion</th>
                        @else
                        <th>Fecha de Borrado</th>
                        @endif
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>                    
                    @forelse ($datos as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->nombre }}</td>
                            <td>
                                @if (request()->routeis('Autorizacion.index'))
                                    <a href="{{route('Autorizacion.show', ['autorizacion' => $data->slug])}}">{{ $data->slug }}</a></td>                                
                                @else
                                    {{ $data->slug }}
                                @endif                                
                            <td>
                                @if(strlen($data->descripcion)>= 60)  
                                    {{ substr($data->descripcion, 0, 60) }} <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-success_{{ $data->id }}"><i class="fa fa-eye"></i></a>
                                @else
                                    {{$data->descripcion}}
                                @endif
                            </td>
                            @if(request()->routeis('Autorizacion.index'))                        
                            <td>{{ $data->created_at->diffForHumans() }}</td>
                            <td>{{ ($data->created_at < $data->updated_at) ? $data->updated_at->diffForHumans() : '' }}</td>
                            @else
                            <td>{{ $data->deleted_at->diffForHumans() }}</td>
                            @endif
                            <td>
                                @if(request()->routeis('Autorizacion.index')) 
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-info_{{$data->id}}">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modal-warning_{{$data->id}}">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                @else
                                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-info_{{$data->id}}">
                                    <i class="fas fa-recycle"></i>
                                </button>
                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-danger_{{$data->id}}">
                                    <i class="fas fa-times"></i>
                                </button>
                                @endif
                            </td>
                        </tr>

                        <div class="modal fade" id="modal-success_{{ $data->id }}">
                            <div class="modal-dialog">
                                <div class="modal-content bg-success">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Descripcion del Controlador {{ $data->nombre }}</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>{{ $data->descripcion }}</p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                    </div>
                                </div>                              
                            </div>                           
                        </div>

                        @if(request()->routeis('Autorizacion.index'))
                        
                        <div class="modal fade" id="modal-info_{{$data->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content bg-info">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Editar Contolador {{ $data->nombre }}</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Deseas Editar al Controlador {{ $data->nombre }}</p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                        <form action="{{ route('Autorizacion.edit', ['autorizacion' => $data->slug]) }}" method="get">
                                             @csrf
                                            <input type="submit" class="btn btn-outline-light" value="Editar">
                                        </form>
                                    </div>
                                </div>                              
                            </div>                           
                        </div>
                        
                        <div class="modal fade" id="modal-warning_{{$data->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content bg-warning">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Borrar Controlador {{ $data->nombre }}</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Deseas Borrar al Controlador {{ $data->nombre }}</p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
                                        <form action="{{ route('Autorizacion.delete', ['autorizacion' => $data->id]) }}" method="post">
                                            @method('PUT') @csrf
                                            <input type="submit" class="btn btn-outline-dark" value="Borrar">
                                        </form>
                                    </div>
                                </div>                              
                            </div>                           
                        </div>

                        @else
                        <div class="modal fade" id="modal-info_{{$data->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content bg-info">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Restaurar Controlador {{ $data->nombre }}</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Deseas Restaurar al Controlador {{ $data->nombre }}</p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                        
                                        <form action="{{ route('Autorizacion.restore', ['id' => $data->slug]) }}" method="post">
                                             @csrf
                                            <input type="submit" class="btn btn-outline-light" value="Restaurar">
                                        </form>
                                    </div>
                                </div>                              
                            </div>                           
                        </div>
                        
                        <div class="modal fade" id="modal-danger_{{$data->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content bg-danger">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Eliminar Definitivamente al Controlador {{ $data->nombre }}</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            Deseas Eliminar Definitivamente al Controlador {{ $data->nombre }} Una vez comfirmado esta accion no hay marcha atras,
                                            el Controlador Sera eliminado de la base de datos y no podra ser Restablecido por ninguna forma
                                        </p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#modal-danger-Confirmar_{{$data->id}}">
                                            Proceder con la Confirmacion
                                        </button>                                        
                                    </div>
                                </div>                              
                            </div>                           
                        </div>

                        <div class="modal fade" id="modal-danger-Confirmar_{{$data->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content bg-danger">
                                    <div class="modal-header">
                                        <h4 class="modal-title">confirma tu Contraseña para eliminar al Controlador {{ $data->nombre }}</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            Es necesaria la confirmacion de contraseña de Administrador para proceder a eliminar al Controlador {{ $data->nombre }}
                                        </p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                        <form action="{{ route('Autorizacion.destroy', ['autorizacion' => $data->slug]) }}" method="post">
                                            @csrf @method('DELETE')
                                           <input type="submit" class="btn btn-outline-light" value="Introducir Contraseña">
                                       </form>                                                                             
                                    </div>
                                </div>                              
                            </div>                           
                        </div>

                        @endif
                        
                    @empty
                        <tr>
                            <td>Sin Id</td>
                            <td>Sin Nombre</td>
                            <td>Sin Ruta</td>
                            <td>Sin Descripcion</td>
                            @if(request()->routeis('Autorizacion.index'))                        
                            <td>Sin Fecha</td>
                            <td>Sin Fecha</td>
                            @else
                            <td>Sin Fecha</td>
                            @endif
                            <td>Sin Acciones</td>
                        </tr>
                    @endforelse                        
                </tbody>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Ruta</th>
                        <th>Descripcion</th>
                        @if(request()->routeis('Autorizacion.index'))                            
                        <th>Fecha de Creacion</th>
                        <th>Fecha de actualizacion</th>
                        @else
                        <th>Fecha de Borrado</th>
                        @endif
                        <th>Acciones</th>
                    </tr>
                </tfoot>
            </table>

        </div>
    </div>
    
@endsection




@section('plugins')
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('#rol').DataTable();
    });
</script>
@endsection
