@extends('layouts.admin')
@section('title', 'Listado de Usuarios')
@section('header')
{{--    //TODO: cambiar Iconos--}}
    <i class="fas fa-user fa-3x"></i>
    <h1 class="m-0 text-dark d-inline-flex mr-3">Listado de Usuarios</h1>
    <a href="{{route('admin.user.create')}}" class="btn btn-success btn-small">
        <i class="fas fa-plus-circle"></i> Crear
    </a>
    @isset($trash)
        <a href="{{route('admin.user.index')}}" class="btn btn-info btn-small">
            <i class="fas fa-eye"></i> Regresar
        </a>
    @else
        <a href="{{route('admin.user.trash')}}" class="btn btn-info btn-small">
            <i class="fas fa-recycle"></i> Ver Borrados
        </a>
    @endisset
@endsection
    @push('style')
        <!-- DataTables -->
        <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.bootstrap4.min.css')}}">
    @endpush
@section('content')
    <div class="card">
        <!-- /.card-header -->
        <div class="card-body">
            <table id="Usuarios" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Orden</th>
                    <th>Rol</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Avatar</th>
                    <th>Email Verificado</th>
                    @isset($trash)
                        <td>Borrado Hace</td>
                    @endisset
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @forelse($usuarios as $key => $user)
                    <tr>
{{--                        .' 1 '.$user->Parent->id.' '.$user->Parent->descripcion--}}
                        <td>
                            {{$loop->iteration}}
                        </td>
                        <td>
                           {{$user->Rol->name??'Rol Borrado'}}
                        </td>
                        <td>
                            {{$user->name}}
                        </td>
                        <td>
                            {{$user->email}}
                        </td>
                        <td>
                            @if (isset($user->avatar))
                                @include('assets.imagen', ['carpeta' => 'user', 'id' => $user->id, 'ancho' => '50', 'admin' => true])
                            @endif
                        </td>
                        <td>
                            {{$user->email_verified_at == null? 'no':'si'}}
                        </td>
                        @isset($trash)
                            <td>{{$user->deleted_at}}</td>
                        @endisset
                        <td class="align-items-center">
                            @isset($trash)
                                <a href="{{route('admin.user.restore', ['id' => $user->id])}}" class="btn btn-info btn-small"> <i class="fas fa-recycle"></i></a>
                                <a href="{{route('admin.user.destroy', ['id' => $user->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
                            @else
                                @if(auth()->user()->puedePersonificar() && $user->id != auth()->id())
                                    @if($user->id != session('impersonificacion_id'))
                                        <a href="{{route('admin.user.personificacion', ['id' => $user->id])}}" class="btn btn-success btn-small"><i class="fas fa-user"></i></a>
                                    @endif
                                @endif
                                <a href="{{route('admin.user.show', ['id' => $user->id])}}" class="btn btn-warning btn-small text-light"><i class="fas fa-eye"></i></a>
                                <a href="{{route('admin.user.edit', ['id' => $user->id])}}" class="btn btn-info btn-small"><i class="fas fa-pencil-alt"></i></a>
                                <a href="{{route('admin.user.delete', ['id' => $user->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
                            @endisset
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>Orden</td>
                        <td>Rol</td>
                        <td>Nombre</td>
                        <td>Email</td>
                        <td>Avatar</td>
                        <td>Email Verificado</td>
                        <td>Borrado Hace</td>
                        <td>Sin Acciones</td>
                    </tr>
                @endforelse
                </tbody>
                <tfoot>
                <tr>
                    <th>Orden</th>
                    <th>Rol</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Avatar</th>
                    <th>Email Verificado</th>
                    @isset($trash)
                        <td>Borrado Hace</td>
                    @endisset
                    <th>Acciones</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection

@push('scripts')
    <!-- DataTables -->
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('js/responsive.bootstrap4.min.js')}}"></script>
    <script>
        $(function () {
            $("#Usuarios").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
@endpush
