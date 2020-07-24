@extends('layouts.admin')
@section('title', 'Listado de Bancos')
@section('header')
    <i class="fas fa-university fa-3x"></i>
    <h1 class="m-0 text-dark d-inline-flex mr-3">Listado de Bancos</h1>
    <a href="{{route('admin.bancos.create')}}" class="btn btn-success btn-small">
        <i class="fas fa-plus-circle"></i> Crear
    </a>
    @isset($trash)
        <a href="{{route('admin.bancos.index')}}" class="btn btn-info btn-small">
            <i class="fas fa-eye"></i> Regresar
        </a>
    @else
        <a href="{{route('admin.bancos.trash')}}" class="btn btn-info btn-small">
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
            <table id="Bancos" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Orden</th>
                    <th>Nombre</th>
                    <th>Siglas</th>
                    @isset($trash)
                        <td>Borrado Hace</td>
                    @endisset
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @forelse($bancos as $key => $banco)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$banco->nombre}}</td>
                        <td>{{$banco->siglas}}</td>
                        @isset($trash)
                            <td>{{$banco->deleted_at}}</td>
                        @endisset
                        <td class="align-items-center">
                            @isset($trash)
                                <a href="{{route('admin.bancos.restore', ['id' => $banco->id])}}" class="btn btn-info btn-small"> <i class="fas fa-recycle"></i></a>
                                <a href="{{route('admin.bancos.destroy', ['id' => $banco->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
                            @else
                                <a href="{{route('admin.bancos.show', ['id' => $banco->id])}}" class="btn btn-warning btn-small text-light"><i class="fas fa-eye"></i></a>
                                <a href="{{route('admin.bancos.edit', ['id' => $banco->id])}}" class="btn btn-info btn-small"><i class="fas fa-pencil-alt"></i></a>
                                <a href="{{route('admin.bancos.delete', ['id' => $banco->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
                            @endisset
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>No hay rol</td>
                        <td>No hay rol</td>
                        <td>No hay rol</td>
                        <td>Borrado Hace</td>
                        <td>Sin Acciones</td>
                    </tr>
                @endforelse
                </tbody>
                <tfoot>
                <tr>
                    <th>Orden</th>
                    <th>Nombre</th>
                    <th>Siglas</th>
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
            $("#Bancos").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
@endpush
