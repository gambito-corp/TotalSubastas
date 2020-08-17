@extends('layouts.admin')
@section('title')
@push('style')
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.bootstrap4.min.css')}}">
@endpush
@section('header')
    <i class="fas fa-images fa-3x"></i>
    <h1 class="m-0 text-dark d-inline-flex mr-3">Imagenes de Vehiculos</h1>
    <a href="{{route('admin.imagenesproducto.create')}}" class="btn btn-success btn-small">
        <i class="fas fa-plus-circle"></i> Crear
    </a>
    @isset($trash)
        <a href="{{route('admin.imagenesproducto.index')}}" class="btn btn-info btn-small">
            <i class="fas fa-eye"></i> Regresar
        </a>
    @else
        <a href="{{route('admin.imagenesproducto.trash')}}" class="btn btn-info btn-small">
            <i class="fas fa-recycle"></i> Ver Borrados
        </a>
    @endisset
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <table id="Tabla" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Empresa</th>
                        <th>Lote</th>
                        <th>Producto</th>
                        <th>Imagen</th>
                        <th>Titulo</th>
                        <th>Descrtipcion</th>
                        @isset($trash)
                            <th>Borrado Hace</th>
                        @endisset
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $key => $dat)
                        <tr>
                            <td>{{isset($dat->id)?$dat->id:''}}</td>
                            <td>{{isset($dat->Empresa->nombre)?$dat->Empresa->nombre:'Empresa no Asociada'}}</td>
                            <td>{{isset($dat->Lote->nombre)?$dat->Lote->nombre:'Lote No Asociado'}}</td>
                            <td>{{isset($dat->Producto->nombre)?$dat->Producto->nombre:'Producto No Asociado'}}</td>
                            <td>
                                @if (isset($dat->imagen))
                                    @include('assets.imagen', ['carpeta' => 'imagenesproducto', 'id' => $dat->id, 'ancho' => '150', 'admin' => true])
                                @endif
                            </td>
                            <td>{{isset($dat->titulo)?$dat->titulo:''}}</td>
                            <td>{{isset($dat->descripcion)?$dat->descripcion:''}}</td>
                            @isset($trash)
                                <td>{{$dat->deleted_at}}</td>
                            @endisset
                            <td class="align-items-center">
                                @isset($trash)
                                    <a href="{{route('admin.imagenesproducto.restore', ['id' => $dat->id])}}" class="btn btn-info btn-small"> <i class="fas fa-recycle"></i></a>
                                    <a href="{{route('admin.imagenesproducto.destroy', ['id' => $dat->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
                                @else
                                    <a href="{{route('admin.imagenesproducto.show', ['id' => $dat->id])}}" class="btn btn-warning btn-small text-light"><i class="fas fa-eye"></i></a>
                                    <a href="{{route('admin.imagenesproducto.edit', ['id' => $dat->id])}}" class="btn btn-info btn-small"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{route('admin.imagenesproducto.delete', ['id' => $dat->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
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
                        </tr>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Empresa</th>
                        <th>Lote</th>
                        <th>Producto</th>
                        <th>Imagen</th>
                        <th>Titulo</th>
                        <th>Descrtipcion</th>
                        @isset($trash)
                            <th>Borrado Hace</th>
                        @endisset
                        <th>Acciones</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('js/responsive.bootstrap4.min.js')}}"></script>
    <script>
        $(function () {
            $("#Tabla").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
@endpush
