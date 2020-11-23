@extends('layouts.admin')
@section('title')
@push('style')
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.bootstrap4.min.css')}}">
@endpush
@section('header')

    <i class="fas fa-tasks fa-3x"></i>
    <h1 class="m-0 text-dark d-inline-flex mr-3">Producto</h1>
    <a href="{{route('admin.producto.create')}}" class="btn btn-success btn-small">
        <i class="fas fa-plus-circle"></i> Crear
    </a>
    @isset($trash)
        <a href="{{route('admin.producto.index')}}" class="btn btn-info btn-small">
            <i class="fas fa-eye"></i> Regresar
        </a>
    @else
        <a href="{{route('admin.producto.trash')}}" class="btn btn-info btn-small">
            <i class="fas fa-recycle"></i> Ver Borrados
        </a>
    @endisset
@endsection
@section('content')
    @if (auth()->user()->isAdmin())
        <div class="card">
            <div class="card-body">
                <table id="Tabla" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Empresa</th>
                            <th>Lote</th>
                            <th>Ciudad</th>
                            <th>Tipo de Vehiculo</th>
                            <th>Tipo de Subasta</th>
                            <th>Tipo de Reserva</th>
                            <th>Nombre</th>
                            <th>Imagen</th>
                            <th>Precio</th>
                            <th>Precio de Reserva</th>
                            <th>Garantia</th>
                            <th>Puja</th>
                            <th>comision</th>
                            <th>Subasta inicia</th>
                            <th>Subasta Finaliza</th>
                            @isset($trash)
                                <th>Borrado Hace</th>
                            @endisset
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($data as $key => $dat)
                            <tr>
{{--                                $empresa--}}
                                <td>{{$dat->id}}</td>
{{--                                <td>{{$dat->Empresa->nombre}}</td>--}}
{{--                                <td>{{$dat->Lote->nombre}}</td>--}}
                                <td>{{$dat->ciudad}}</td>
                                <td>{{$dat->tipo_vehiculo}}</td>
                                <td>{{$dat->tipo_subasta}}</td>
                                <td>{{$dat->tipo_reserva}}</td>
                                <td>{{$dat->nombre}}</td>
                                <td>
                                    @if (isset($dat->imagen))
                                        @include('assets.imagen', ['carpeta' => 'producto', 'id' => $dat->id, 'ancho' => '150', 'admin' => true])
                                    @endif
                                </td>
                                <td>{{$dat->precio}} $</td>
                                <td>{{$dat->precio_reserva}} $</td>
                                <td>{{$dat->garantia}} $</td>
                                <td>{{$dat->puja}} $</td>
                                <td>{{$dat->comision}}%</td>
                                <td>{{$dat->started_at}}</td>
                                <td>{{$dat->finalized_at}}</td>
                                @isset($trash)
                                    <td>{{$dat->deleted_at}}</td>
                                @endisset
                                <td class="align-items-center">
                                    @isset($trash)
                                        <a href="{{route('admin.producto.restore', ['id' => $dat->id])}}" class="btn btn-info btn-small"> <i class="fas fa-recycle"></i></a>
                                        <a href="{{route('admin.producto.destroy', ['id' => $dat->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
                                    @else
                                        <a href="{{route('admin.producto.show', ['id' => $dat->id])}}" class="btn btn-warning btn-small text-light"><i class="fas fa-eye"></i></a>
                                        <a href="{{route('admin.producto.edit', ['id' => $dat->id])}}" class="btn btn-info btn-small"><i class="fas fa-pencil-alt"></i></a>
                                        <a href="{{route('admin.producto.delete', ['id' => $dat->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
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
                            <th>Ciudad</th>
                            <th>Tipo de Vehiculo</th>
                            <th>Tipo de Subasta</th>
                            <th>Tipo de Reserva</th>
                            <th>Nombre</th>
                            <th>Imagen</th>
                            <th>Precio</th>
                            <th>Precio de Reserva</th>
                            <th>Garantia</th>
                            <th>Puja</th>
                            <th>comision</th>
                            <th>Subasta inicia</th>
                            <th>Subasta Finaliza</th>
                            @isset($trash)
                                <th>Borrado Hace</th>
                            @endisset
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    @elseif (auth()->user()->OnlyEmpresa())
        <div class="card">
            <div class="card-body">
                <table id="Tabla" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Lote</th>
                        <th>Ciudad</th>
                        <th>Tipo de Vehiculo</th>
                        <th>Tipo de Subasta</th>
                        <th>Tipo de Reserva</th>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Precio</th>
                        <th>Precio de Reserva</th>
                        <th>Garantia</th>
                        <th>Puja</th>
                        <th>comision</th>
                        <th>Subasta inicia</th>
                        <th>Subasta Finaliza</th>
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
                            <td>{{$dat->Lote->nombre}}</td>
                            <td>{{$ciudad->nombre}}</td>
                            <td>{{$dat->tipo_vehiculo}}</td>
                            <td>{{$dat->tipo_subasta}}</td>
                            <td>{{$dat->tipo_reserva}}</td>
                            <td>{{$dat->nombre}}</td>
                            <td>
                                @if (isset($dat->imagen))
                                    @include('assets.imagen', ['carpeta' => 'producto', 'id' => $dat->id, 'ancho' => '150', 'admin' => true])
                                @endif
                            </td>
                            <td>{{$dat->precio}} $</td>
                            <td>{{$dat->precio_reserva}} $</td>
                            <td>{{$dat->garantia}} $</td>
                            <td>{{$dat->puja}} $</td>
                            <td>{{$dat->comision}}%</td>
                            <td>{{$dat->started_at}}</td>
                            <td>{{$dat->finalized_at}}</td>
                            @isset($trash)
                                <td>{{$dat->deleted_at}}</td>
                            @endisset
                            <td class="align-items-center">
                                @isset($trash)
                                    <a href="{{route('admin.producto.restore', ['id' => $dat->id])}}" class="btn btn-info btn-small"> <i class="fas fa-recycle"></i></a>
                                    <a href="{{route('admin.producto.destroy', ['id' => $dat->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
                                @else
                                    <a href="{{route('admin.producto.show', ['id' => $dat->id])}}" class="btn btn-warning btn-small text-light"><i class="fas fa-eye"></i></a>
                                    <a href="{{route('admin.producto.edit', ['id' => $dat->id])}}" class="btn btn-info btn-small"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{route('admin.producto.delete', ['id' => $dat->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
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
                        <th>Lote</th>
                        <th>Ciudad</th>
                        <th>Tipo de Vehiculo</th>
                        <th>Tipo de Subasta</th>
                        <th>Tipo de Reserva</th>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Precio</th>
                        <th>Precio de Reserva</th>
                        <th>Garantia</th>
                        <th>Puja</th>
                        <th>comision</th>
                        <th>Subasta inicia</th>
                        <th>Subasta Finaliza</th>
                        @isset($trash)
                            <th>Borrado Hace</th>
                        @endisset
                        <th>Acciones</th>
                    </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    @endif

@endsection
@push('scripts')
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('js/responsive.bootstrap4.min.js')}}"></script>
    <script>
        $(function () {
            $("#Tabla").DataTable({
                "scrollX": true,
            });
        });
    </script>
@endpush
