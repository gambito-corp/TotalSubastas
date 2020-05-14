@extends('BackOffice.page')
@section('title-pre', 'TotalSubastas')
@section('title', ' - Usuarios')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
@endsection
@section('fuentes')
@section('content_header', 'Control de Usuarios')
@section('BreadCrumbs', 'User')


@section('contenido')
    <h2>Visualiza Todos Los Usuarios {{ request()->routeis('User.index') ? 'Que hay': 'Borrados' }}</h2>
    <a href="{{ route('User.create') }}" class="btn btn-success">Crear un Nuevo Usuario</a>
    @if (request()->routeis('User.index'))        
        <a href="{{ route('User.trash') }}" class="btn btn-info">Ve a la papelera de reciclaje</a>
    @else
        <a href="{{ route('User.index') }}" class="btn btn-info">Ve a la lista de index</a>        
    @endif
    <br><br>

{{-- {{ddd('hola')}} --}}
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Listado de Usuarios {{ request()->routeis('User.index') ? 'Activos': 'Dados de Baja' }}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">            
            <table id="rol" class="table table-striped table-bordered" >
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>rol</th>
                        <th>nombre</th>
                        <th>Username</th>
                        <th>email</th>
                        <th>Telefono</th>
                        <th>Verifico Email</th>
                        <th>Verifico telefono</th>                        
                        @if(request()->routeis('User.index'))                            
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
                            <td>{{ $data->rol->nombre }}</td>
                            <td>{{ $data->name }}</td>
                            <td>
                                @if (request()->routeis('User.index'))
                                    <a href="{{route('User.show', ['user' => $data->username])}}">{{ $data->username }}</a></td>                                
                                @else
                                    {{ $data->slug }}
                                @endif                                
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->telefono }}</td>
                            <td>{!! ($data->email_verified_at != null) ? '<i class="fas fa-check"></i>': '<i class="fas fa-times"></i>' !!}</td>
                            <td>{!! ($data->telefono_verified_at != null) ? '<i class="fas fa-check"></i>': '<i class="fas fa-times"></i>' !!}</td>                            
                            @if(request()->routeis('User.index'))                        
                            <td>{{ $data->created_at->diffForHumans() }}</td>
                            <td>{{ ($data->created_at < $data->updated_at) ? $data->updated_at->diffForHumans() : '' }}</td>
                            @else
                            <td>{{ $data->deleted_at->diffForHumans() }}</td>
                            @endif
                            <td>
                                @if(request()->routeis('User.index'))   
                                    @if (auth()->user()->canImpersonate($data->id))                                        
                                        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-success_{{$data->id}}">
                                            <i class="fas fa-user"></i>
                                        </button>                                
                                    @endif
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
                        @if(request()->routeis('User.index'))
                            @if (auth()->user()->canImpersonate($data->id))                            
                                <div class="modal fade" id="modal-success_{{ $data->id }}">
                                    <div class="modal-dialog">
                                        <div class="modal-content bg-success">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Personificar al Usuario {{ $data->name }}</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Vas a Personificar al Usuario {{ $data->name }}</p>
                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                                <form action="{{ route('User.personificar') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="user_id" value="{{ $data->id }}">
                                                    <input type="submit" class="btn btn-outline-light" value="Personificar">
                                                </form>
                                            </div>
                                        </div>                              
                                    </div>                           
                                </div>
                            @endif
                        
                        <div class="modal fade" id="modal-info_{{$data->id}}">
                            <div class="modal-dialog">
                                <div class="modal-content bg-info">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Editar Usuario {{ $data->name }}</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Deseas Editar al Usuario {{ $data->name }}</p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                        <form action="{{ route('User.edit', ['user' => $data->username]) }}" method="get">
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
                                        <h4 class="modal-title">Borrar Usuario {{ $data->name }}</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Deseas Borrar al Usuario {{ $data->name }}</p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
                                        <form action="{{ route('User.delete', ['user' => $data->id]) }}" method="post">
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
                                        <h4 class="modal-title">Restaurar Usuario {{ $data->name }}</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Deseas Restaurar al USuario {{ $data->name }}</p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                        
                                        <form action="{{ route('User.restore', ['id' => $data->username]) }}" method="post">
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
                                        <h4 class="modal-title">Eliminar Definitivamente al USuario {{ $data->name }}</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            Deseas Eliminar Definitivamente al Usuario {{ $data->name }} Una vez comfirmado esta accion no hay marcha atras,
                                            el USuario Sera eliminado de la base de datos y no podra ser Restablecido por ninguna forma
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
                                        <h4 class="modal-title">confirma tu Contraseña para eliminar al Usuario {{ $data->name }}</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            Es necesaria la confirmacion de contraseña de Administrador para proceder a eliminar al Usuario {{ $data->name }}
                                        </p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                                        <form action="{{ route('User.destroy', ['user' => $data->username]) }}" method="post">
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
                            <td>Sin rol</td>
                            <td>Sin nombre</td>
                            <td>Sin Username</td>
                            <td>Sin email</td>
                            <td>Sin Telefono</td>
                            <td>Sin Verifico Email</td>
                            <td>Sin Verifico telefono<</td>
                            @if(request()->routeis('User.index'))                        
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
                        <th>rol</th>
                        <th>nombre</th>
                        <th>Username</th>
                        <th>email</th>
                        <th>Telefono</th>
                        <th>Verifico Email</th>
                        <th>Verifico telefono</th> 
                        @if(request()->routeis('User.index'))                            
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
