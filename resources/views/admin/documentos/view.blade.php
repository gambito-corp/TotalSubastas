@extends('layouts.admin')
@section('title')
@push('style')
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.bootstrap4.min.css')}}">
@endpush
@section('header')
{{--    <i class="fas fa-flag fa-3x"></i>--}}
    <h1 class="m-0 text-dark d-inline-flex mr-3">{{--Modelo--}}</h1>
    <a href="{{route('admin.documentos.create')}}" class="btn btn-success btn-small">
        <i class="fas fa-plus-circle"></i> Crear
    </a>
    @isset($trash)
        <a href="{{route('admin.documentos.index')}}" class="btn btn-info btn-small">
            <i class="fas fa-eye"></i> Regresar
        </a>
    @else
        <a href="{{route('admin.documentos.trash')}}" class="btn btn-info btn-small">
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
                        <th>Titulo 1</th>
                        <th>Titulo 2</th>
                        <th>Titulo 3</th>
                        <th>Fecha de Creacion</th>
                        @isset($trash)
                            <td>Borrado Hace</td>
                        @endisset
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $key => $dat)
                        <tr>
                            <td>{{$dat->id}}</td>
                            <td>{{$dat->Empresa->nombre ?? 'Empresa Borrada'}}</td>
                            <td>{{$dat->Lote->nombre ?? 'Lote Borrado'}}</td>
                            <td>{{$dat->Producto->nombre ?? 'Producto Borrado'}}</td>
                            <td>
                                <a href="{{route('admin.documentos.descargar', ['id' => $dat->id, 'file' => Illuminate\Support\Str::slug($dat->titulo1, '-').'.pdf'])}}" class="btn btn-large pull-right btn-success">
                                    <i class="icon-download-alt"> </i>
                                    {{$dat->titulo1}}
                                </a>
                            </td>
                            <td>
                                @isset($dat->documento2)
                                    <a href="{{route('admin.documentos.descargar', ['id' => $dat->id, 'file' => Illuminate\Support\Str::slug($dat->titulo2, '-').'.pdf'])}}" class="btn btn-large pull-right btn-success">
                                        <i class="icon-download-alt"> </i>
                                        {{$dat->titulo2}}
                                    </a>
                                @endisset
                            </td>
                            <td>
                                @isset($dat->documento3)
                                    <a href="{{route('admin.documentos.descargar', ['id' => $dat->id, 'file' => Illuminate\Support\Str::slug($dat->titulo3, '-').'.pdf'])}}" class="btn btn-large pull-right btn-success">
                                        <i class="icon-download-alt"> </i>
                                        {{$dat->titulo3}}
                                    </a>
                                @endisset
                            </td>
                            <td>{{$dat->created_at->diffForHumans()}}</td>
                            @isset($trash)
                                <td>{{$dat->deleted_at}}</td>
                            @endisset
                            <td class="align-items-center">
                                @isset($trash)
                                    <a href="{{route('admin.documentos.restore', ['id' => $dat->id])}}" class="btn btn-info btn-small"> <i class="fas fa-recycle"></i></a>
                                    <a href="{{route('admin.documentos.destroy', ['id' => $dat->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
                                @else
                                    <a href="{{route('admin.documentos.show', ['id' => $dat->id])}}" class="btn btn-warning btn-small text-light"><i class="fas fa-eye"></i></a>
                                    <a href="{{route('admin.documentos.edit', ['id' => $dat->id])}}" class="btn btn-info btn-small"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{route('admin.documentos.delete', ['id' => $dat->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
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
                        <th>Titulo 1</th>
                        <th>Titulo 2</th>
                        <th>Titulo 3</th>
                        <th>Fecha de Creacion</th>
                        @isset($trash)
                            <td>Borrado Hace</td>
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
