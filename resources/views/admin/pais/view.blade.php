@extends('layouts.admin')
@section('title', 'Paises/Ubiegos')
@section('header')
{{--    //TODO: cambiar Iconos--}}
    <i class="fas fa-flag fa-3x"></i>
    <h1 class="m-0 text-dark d-inline-flex mr-3">Paises/Ubiegos</h1>
    <a href="{{route('admin.pais.create')}}" class="btn btn-success btn-small">
        <i class="fas fa-plus-circle"></i> Crear
    </a>
    @isset($trash)
        <a href="{{route('admin.pais.index')}}" class="btn btn-info btn-small">
            <i class="fas fa-eye"></i> Regresar
        </a>
    @else
        <a href="{{route('admin.pais.trash')}}" class="btn btn-info btn-small">
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
            <table id="Paises" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>Orden</th>
                    <th>Pais</th>
                    <th>Departamento</th>
                    <th>Provincia</th>
                    <th>Distrito</th>
                    <th>Descripcion</th>
                    <th>codigo</th>
                    @isset($trash)
                        <td>Borrado Hace</td>
                    @endisset
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @forelse($paises as $key => $pais)
                    <tr>
{{--                        .' 1 '.$pais->Parent->id.' '.$pais->Parent->descripcion--}}
                        <td>{{$loop->iteration}}</td>
                        {{--Coumna de Pais--}}
                        <td>
                            @if(isset($pais->Parent->Parent->parent_id))
                                {{$pais->Parent->Parent->Parent->nombre}}
                            @elseif(isset($pais->Parent->parent_id))
                                {{$pais->Parent->Parent->nombre}}
                            @elseif(isset($pais->parent_id))
                                {{$pais->Parent->nombre}}
                            @else
                                {{$pais->nombre}}
                            @endif
                        </td>
                        {{--Columna de Departamento--}}
                        <td>
                            @if(isset($pais->Parent->Parent->parent_id))
                                {{$pais->Parent->Parent->nombre}}
                            @elseif(isset($pais->Parent->parent_id))
                                {{$pais->Parent->nombre}}
                            @elseif(isset($pais->parent_id))
                                {{$pais->nombre}}
                            @endif
                        </td>
                        {{--Columna de Provincia--}}
                        <td>
                            @if(isset($pais->Parent->Parent->parent_id))
                                {{$pais->Parent->nombre}}
                            @elseif(isset($pais->Parent->parent_id))
                                {{$pais->nombre}}
                            @endif
                        </td>
                        {{--Columna de Distrito--}}
                        <td>
                            @if(isset($pais->Parent->Parent->parent_id))
                                {{$pais->nombre.' distrito'}}
                            @endif
                        </td>
                        <td>{{$pais->descripcion}}</td>
                        <td>{{$pais->codigo}}</td>
                        @isset($trash)
                            <td>{{$pais->deleted_at}}</td>
                        @endisset
                        <td class="align-items-center">
                            @isset($trash)
                                <a href="{{route('admin.pais.restore', ['id' => $pais->id])}}" class="btn btn-info btn-small"> <i class="fas fa-recycle"></i></a>
                                <a href="{{route('admin.pais.destroy', ['id' => $pais->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
                            @else
                                <a href="{{route('admin.pais.show', ['id' => $pais->id])}}" class="btn btn-warning btn-small text-light"><i class="fas fa-eye"></i></a>
                                <a href="{{route('admin.pais.edit', ['id' => $pais->id])}}" class="btn btn-info btn-small"><i class="fas fa-pencil-alt"></i></a>
                                <a href="{{route('admin.pais.delete', ['id' => $pais->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
                            @endisset
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>Orden</td>
                        <td>Pais</td>
                        <td>Departamento</td>
                        <td>Provincia</td>
                        <td>Distrito</td>
                        <td>Descripcion</td>
                        <td>codigo</td>
                        <td>Borrado Hace</td>
                        <td>Sin Acciones</td>
                    </tr>
                @endforelse
                </tbody>
                <tfoot>
                <tr>
                    <th>Orden</th>
                    <th>Pais</th>
                    <th>Departamento</th>
                    <th>Provincia</th>
                    <th>Distrito</th>
                    <th>Descripcion</th>
                    <th>codigo</th>
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
            $("#Paises").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });
    </script>
@endpush
