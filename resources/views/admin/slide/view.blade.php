@extends('layouts.admin')
@section('title')
@push('style')
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.bootstrap4.min.css')}}">
@endpush
@section('header')
{{--    <i class="fas fa-flag fa-3x"></i>--}}
    <h1 class="m-0 text-dark d-inline-flex mr-3">{{--Modelo--}}</h1>
    <a href="{{route('admin.slide.create')}}" class="btn btn-success btn-small">
        <i class="fas fa-plus-circle"></i> Crear
    </a>
    @isset($trash)
        <a href="{{route('admin.slide.index')}}" class="btn btn-info btn-small">
            <i class="fas fa-eye"></i> Regresar
        </a>
    @else
        <a href="{{route('admin.slide.trash')}}" class="btn btn-info btn-small">
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
                        <th>Orden</th>
                        <th>Imagen</th>
                        <th>Activo</th>
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
                            <td>
                                @if (isset($dat->ruta))
                                    @include('assets.imagen', ['carpeta' => 'slide', 'id' => $dat->id, 'ancho' => '150', 'admin' => true])
                                @endif
                            </td>
                            <td>{{$dat->activo?'Aprobado':'Rechazado'}}</td>
                            @isset($trash)
                                <td>{{$dat->deleted_at}}</td>
                            @endisset
                            <td class="align-items-center">
                                @isset($trash)
                                    <a href="{{route('admin.slide.restore', ['id' => $dat->id])}}" class="btn btn-info btn-small"> <i class="fas fa-recycle"></i></a>
                                    <a href="{{route('admin.slide.destroy', ['id' => $dat->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
                                @else
                                    <a href="{{route('admin.slide.show', ['id' => $dat->id])}}" class="btn btn-warning btn-small text-light"><i class="fas fa-eye"></i></a>
                                    <a href="{{route('admin.slide.edit', ['id' => $dat->id])}}" class="btn btn-info btn-small"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{route('admin.slide.delete', ['id' => $dat->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
                                @endisset
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>Orden</td>
                            <td>imagen</td>
                            <td>activo</td>
                            <td>Borrado Hace</td>
                            <td>Sin Acciones</td>
                        </tr>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr>
                        <th>Orden</th>
                        <th>Imagen</th>
                        <th>Activo</th>
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
