@extends('layouts.admin')
@section('title')
@push('style')
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.bootstrap4.min.css')}}">
@endpush
@section('header')
    <i class="fas fa-building fa-3x"></i>
    <h1 class="m-0 text-dark d-inline-flex mr-3">Empresas</h1>
    <a href="{{route('admin.empresa.create')}}" class="btn btn-success btn-small">
        <i class="fas fa-plus-circle"></i> Crear
    </a>
    @isset($trash)
        <a href="{{route('admin.empresa.index')}}" class="btn btn-info btn-small">
            <i class="fas fa-eye"></i> Regresar
        </a>
    @else
        <a href="{{route('admin.empresa.trash')}}" class="btn btn-info btn-small">
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
                        <th>Persona a cargo</th>
                        <th>Direccion</th>
                        <th>Nombre Comercial</th>
                        <th>Razon Social</th>
                        <th>R.U.C.</th>
                        <th>Telefono de Contacto</th>
                        <th>Email</th>
                        <th>Informacion</th>
                        <th>Logotipo</th>
                        @isset($trash)
                            <th>Borrado Hace</th>
                        @endisset
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $key => $dat)
                        <tr>
                            <td>{{$dat->id}}</td>
                            <td>{{$dat->persona_juridica_id}}</td>
                            <td>{{$dat->direccion_id}}</td>
                            <td>{{$dat->nombre}}</td>
                            <td>{{$dat->razon_social}}</td>
                            <td>{{$dat->ruc}}</td>
                            <td>{{$dat->telefono}}</td>
                            <td>{{$dat->email}}</td>
                            <td>{!! $dat->informacion !!}</td>
                            <td>
                                @if (isset($dat->imagen))
                                    @include('assets.imagen', ['carpeta' => 'empresa', 'id' => $dat->id, 'ancho' => '150', 'admin' => true])
                                @endif
                            </td>
{{--                            <td>{{$dat->imagen}}</td>--}}
                            @isset($trash)
                                <td>{{$dat->deleted_at}}</td>
                            @endisset
                            <td class="align-items-center">
                                @isset($trash)
                                    <a href="{{route('admin.empresa.restore', ['id' => $dat->id])}}" class="btn btn-info btn-small"> <i class="fas fa-recycle"></i></a>
                                    <a href="{{route('admin.empresa.destroy', ['id' => $dat->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
                                @else
                                    <a href="{{route('admin.empresa.show', ['id' => $dat->id])}}" class="btn btn-warning btn-small text-light"><i class="fas fa-eye"></i></a>
                                    <a href="{{route('admin.empresa.edit', ['id' => $dat->id])}}" class="btn btn-info btn-small"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{route('admin.empresa.delete', ['id' => $dat->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
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
                            <td>-</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Persona a cargo</th>
                        <th>Direccion</th>
                        <th>Nombre Comercial</th>
                        <th>Razon Social</th>
                        <th>R.U.C.</th>
                        <th>Telefono de Contacto</th>
                        <th>Email</th>
                        <th>Informacion</th>
                        <th>Logotipo</th>
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
                "scrollX": true
            });
        });
    </script>
@endpush
