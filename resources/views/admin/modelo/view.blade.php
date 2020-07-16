@extends('layouts.admin')
@section('title', 'Modelos De Vehiculo')
@section('header')
    <i class="fas fa-truck-pickup fa-3x"></i>
    <h1 class="m-0 text-dark d-inline-flex mr-3">Modelos de Vehiculos</h1>
    <a href="{{route('admin.modelos.create')}}" class="btn btn-success btn-small">
        <i class="fas fa-plus-circle"></i> Crear
    </a>
    @isset($trash)
        <a href="{{route('admin.modelos.index')}}" class="btn btn-info btn-small">
            <i class="fas fa-eye"></i> Regresar
        </a>
    @else
        <a href="{{route('admin.modelos.trash')}}" class="btn btn-info btn-small">
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
            <table id="Modelos" class="table table-bordered table-striped">
                <thead>
                <tr>

                    <th>Marca</th>
                    <th>Nombre</th>
                    <th>slug</th>
                    @isset($trash)
                        <td>Borrado Hace</td>
                    @endisset
                        <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @forelse($modelos as $key => $modelo)

                    <tr>
                        <td>{{$modelo->Marca->nombre}}</td>
                        <td>{{$modelo->nombre}}</td>
                        <td>{{$modelo->slug}}</td>
                        @isset($trash)
                            <td>{{$modelo->deleted_at}}</td>
                        @endisset
                        <td class="align-items-center">
                            @isset($trash)
                                <a href="{{route('admin.modelos.restore', ['id' => $modelo->id])}}" class="btn btn-info btn-small"> <i class="fas fa-recycle"></i></a>
                                <a href="{{route('admin.modelos.destroy', ['id' => $modelo->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
                            @else
                                <a href="{{route('admin.modelos.show', ['modelo' => $modelo])}}" class="btn btn-warning btn-small text-light"><i class="fas fa-eye"></i></a>
                                <a href="{{route('admin.modelos.edit', ['modelo' => $modelo])}}" class="btn btn-info btn-small"><i class="fas fa-pencil-alt"></i></a>
                                <a href="{{route('admin.modelos.delete', ['modelo' => $modelo])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
                            @endisset
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>No hay Marca</td>
                        <td>No hay Marca</td>
                        <td>Borrado Hace</td>
                        <td>
                            No hay Marca
                        </td>
                    </tr>
                @endforelse
                </tbody>
                <tfoot>
                <tr>
                    <th>Nombre</th>
                    <th>slug</th>
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
            $("#Modelos").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
@endpush
