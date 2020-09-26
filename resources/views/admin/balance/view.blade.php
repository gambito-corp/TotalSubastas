@extends('layouts.admin')
@section('title')
@push('style')
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.bootstrap4.min.css')}}">
@endpush
@section('header')
    <i class="fas fa-money-check-alt fa-3x"></i>
    <h1 class="m-0 text-dark d-inline-flex mr-3">Balance de Garantia</h1>
    <a href="{{route('admin.balance.create')}}" class="btn btn-success btn-small">
        <i class="fas fa-plus-circle"></i> Crear
    </a>
    @isset($trash)
        <a href="{{route('admin.balance.index')}}" class="btn btn-info btn-small">
            <i class="fas fa-eye"></i> Regresar
        </a>
    @else
        <a href="{{route('admin.balance.trash')}}" class="btn btn-info btn-small">
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
                        <th>Aprobar</th>
                        <th>Usuario</th>
                        <th>Banco</th>
                        <th>Monto</th>
                        <th>tipo</th>
                        <th>Descripcion</th>
                        <th>Boucher</th>
                        <th>Motivo</th>
                        <th>Cuenta</th>
                        <th>Transaccion</th>
                        <th>Fecha de Abono</th>
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
                            <td>{{$dat->aprobado?'Aprobado':'Espera o Rechazado'}}</td>
                            <td>{{$dat->Usuario->name}}</td>
                            <td>{{$dat->Banco->nombre}}</td>
                            <td>${{$dat->monto}}</td>
                            <td>{{$dat->tipo}}</td>
                            <td>{{$dat->descripcion}}</td>
                            <td>
                                @if (isset($dat->boucher))
                                    @include('assets.imagen', ['carpeta' => 'balance', 'id' => $dat->id, 'ancho' => '150', 'admin' => true])
                                @endif
                            </td>
                            <td>{{$dat->motivo}}</td>
                            <td>{{$dat->cuenta}}</td>
                            <td>{{$dat->transaccion_banco}}</td>
                            <td>{{$dat->abono_at}}</td>
                            @isset($trash)
                                <td>{{$dat->deleted_at}}</td>
                            @endisset
                            <td class="align-items-center">
                                @isset($trash)
                                    <a href="{{route('admin.balance.restore', ['id' => $dat->id])}}" class="btn btn-info btn-small"> <i class="fas fa-recycle"></i></a>
                                    <a href="{{route('admin.balance.destroy', ['id' => $dat->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
                                @else
                                    <a href="{{route('admin.balance.show', ['id' => $dat->id])}}" class="btn btn-warning btn-small text-light"><i class="fas fa-eye"></i></a>
                                    <a href="{{route('admin.balance.edit', ['id' => $dat->id])}}" class="btn btn-info btn-small"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{route('admin.balance.delete', ['id' => $dat->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
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
                        </tr>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Aprobar</th>
                        <th>Usuario</th>
                        <th>Banco</th>
                        <th>Monto</th>
                        <th>tipo</th>
                        <th>Descripcion</th>
                        <th>Boucher</th>
                        <th>Motivo</th>
                        <th>Cuenta</th>
                        <th>Transaccion</th>
                        <th>Fecha de Abono</th>
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
                "scrollX": true,
            });
        });
    </script>
@endpush
