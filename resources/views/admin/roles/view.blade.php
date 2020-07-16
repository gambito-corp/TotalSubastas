@extends('layouts.admin')
@section('title', 'Roles')
@section('header')
    <i class="navbar-toggler-icon fas fa-user-lock fa-3x"></i>
    <h1 class="m-0 text-dark d-inline-flex mr-3">Roles</h1>
    <a href="{{('admin.roles.create')}}" class="btn btn-success btn-small">
        <i class="fas fa-plus-circle"></i> Crear
    </a>
@endsection
    @push('style')
        <!-- DataTables -->
        <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.bootstrap4.min.css')}}">
    @endpush
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="Roles" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Nombre Mostrado</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @forelse($roles as $key => $rol)
                    <tr>
                        <td>{{$rol->name}}</td>
                        <td>{{$rol->display_name}}</td>
                        <td class="align-items-center">
                            <a href="{{route('admin.roles.show', ['rol' => $rol])}}" class="btn btn-warning btn-small text-light"><i class="fas fa-eye"></i></a>
                            <a href="{{route('admin.roles.edit', ['rol' => $rol])}}" class="btn btn-info btn-small"><i class="fas fa-pencil-alt"></i></a>
                            <a href="{{route('admin.roles.delete', ['rol' => $rol])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>No hay Rol</td>
                        <td>No hay Rol</td>
                        <td>
                            No hay Rol
                        </td>
                    </tr>
                @endforelse
                </tbody>
                <tfoot>
                <tr>
                    <th>Nombre</th>
                    <th>Nombre Mostrado</th>
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
            $("#Roles").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
@endpush
