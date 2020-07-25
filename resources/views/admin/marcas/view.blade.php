@extends('layouts.admin')
@section('title', 'Marcas y Modelos')
@section('header')
{{--    //TODO: cambiar Iconos--}}
    <i class="fas fa-truck-pickup fa-3x"></i>
    <h1 class="m-0 text-dark d-inline-flex mr-3">Marcas y Modelos de Vehiculos</h1>
    <a href="{{route('admin.marcas.create')}}" class="btn btn-success btn-small">
        <i class="fas fa-plus-circle"></i> Crear
    </a>
    @isset($trash)
        <a href="{{route('admin.marcas.index')}}" class="btn btn-info btn-small">
            <i class="fas fa-eye"></i> Regresar
        </a>
    @else
        <a href="{{route('admin.marcas.trash')}}" class="btn btn-info btn-small">
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
            <table id="Marcas" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Orden</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>slug</th>
                    @isset($trash)
                        <td>Borrado Hace</td>
                    @endisset
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @forelse($marcas as $key => $marca)
                    <tr>
                        <td>@isset($loop->iteration){{$loop->iteration}}@endisset</td>
                        <td>
                            @isset($marca->id){{$marca->parent_id ? $marca->Parent->nombre: $marca->nombre}}@endisset
                        </td>
                        <td>
                            @isset($marca->id){{$marca->parent_id ? $marca->nombre:'' }}@endisset
                        </td>
                        <td>@isset($marca->id){{$marca->slug}}@endisset</td>
                        @isset($trash)
                            <td>{{$marca->deleted_at}}</td>
                        @endisset
                        <td class="align-items-center">
                            @isset($trash)
                                @isset($marca->id)<a href="{{route('admin.marcas.restore', ['id' => $marca->id])}}" class="btn btn-info btn-small"> <i class="fas fa-recycle"></i></a>@endisset
                                @isset($marca->id)<a href="{{route('admin.marcas.destroy', ['id' => $marca->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>@endisset
                            @else
                                @isset($marca->id)<a href="{{route('admin.marcas.show', ['id' => $marca->id])}}" class="btn btn-warning btn-small text-light"><i class="fas fa-eye"></i></a>@endisset
                                @isset($marca->id)<a href="{{route('admin.marcas.edit', ['id' => $marca->id])}}" class="btn btn-info btn-small"><i class="fas fa-pencil-alt"></i></a>@endisset
                                @isset($marca->id)<a href="{{route('admin.marcas.delete', ['id' => $marca->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>@endisset
                            @endisset
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>No hay marca</td>
                        <td>No hay marca</td>
                        <td>No hay marca</td>
                        <td>Borrado Hace</td>
                        <td>Sin Acciones</td>
                    </tr>
                @endforelse
                </tbody>
                <tfoot>
                <tr>
                    <th>Orden</th>
                    <th>Marca</th>
                    <th>Modelo</th>
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
            $("#Marcas").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
@endpush
