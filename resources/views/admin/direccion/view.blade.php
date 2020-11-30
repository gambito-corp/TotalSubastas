@extends('layouts.admin')
@section('title', 'Listado de Direcciones')
@section('header')
    <i class="fas fa-atlas fa-3x"></i>
    <h1 class="m-0 text-dark d-inline-flex mr-3">Listado de Direcciones</h1>
    <a href="{{route('admin.address.create')}}" class="btn btn-success btn-small">
        <i class="fas fa-plus-circle"></i> Crear
    </a>
    @isset($trash)
        <a href="{{route('admin.address.index')}}" class="btn btn-info btn-small">
            <i class="fas fa-eye"></i> Regresar
        </a>
    @else
        <a href="{{route('admin.address.trash')}}" class="btn btn-info btn-small">
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
        <div class="card-body direcciones">
            <table id="Direcciones" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Usuario</th>
                    <th>Pais</th>
                    <th>Departamento</th>
                    <th>Provincia</th>
                    <th>Distrito</th>
                    <th>Linea Direccion 1</th>
                    <th>Referencia</th>
                    <th>Titulo de Direccion</th>
                    @isset($trash)
                        <th>Borrado Hace</th>
                    @endisset
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @forelse($direcciones as $direccion)
                    <tr>
                        <td>{{$direccion->id}}</td>
                        <td>{{$direccion->Usuario->name??'Usuario borrado'}}</td>
                        <td>{{$direccion->Pais->nombre??'Pais borrado'}}</td>
                        <td>{{$direccion->Departamento->nombre??'Departamento borrado'}}</td>
                        <td>{{$direccion->Provincia->nombre??'Provincia borrada'}}</td>
                        <td>{{$direccion->Distrito->nombre??'Distrito borrado'}}</td>
                        <td>{{$direccion->direccion1}}</td>
                        <td>{{$direccion->referencia}}</td>
                        <td>{{$direccion->titulo_direccion}}</td>
                        @isset($trash)
                            <td>{{$direccion->deleted_at}}</td>
                        @endisset
                        <td class="align-items-center">
                            @isset($trash)
                                <a href="{{route('admin.address.restore', ['id' => $direccion->id])}}" class="btn btn-info btn-small"> <i class="fas fa-recycle"></i></a>
                                <a href="{{route('admin.address.destroy', ['id' => $direccion->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
                            @else
                                <a href="{{route('admin.address.show', ['id' => $direccion->id])}}" class="btn btn-warning btn-small text-light"><i class="fas fa-eye"></i></a>
                                <a href="{{route('admin.address.edit', ['id' => $direccion->id])}}" class="btn btn-info btn-small"><i class="fas fa-pencil-alt"></i></a>
                                <a href="{{route('admin.address.delete', ['id' => $direccion->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
                            @endisset
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>Sin Acciones</td>
                    </tr>
                @endforelse
                <tbody>
                <tr>
                    <th>Id</th>
                    <th>Usuario</th>
                    <th>Pais</th>
                    <th>Departamento</th>
                    <th>Provincia</th>
                    <th>Distrito</th>
                    <th>Linea Direccion 1</th>
                    <th>Referencia</th>
                    <th>Titulo de Direccion</th>
                    @isset($trash)
                        <th>Borrado Hace</th>
                    @endisset
                    <th>Acciones</th>
                </tr>
                </tbody>
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
            $("#Direcciones").DataTable({
                "scrollX": true,
            });
        });
    </script>
@endpush
