@extends('layouts.admin')
@section('title')
@push('style')
    <link rel="stylesheet" href="{{asset('css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.bootstrap4.min.css')}}">
@endpush
@section('header')
    <i class="far fa-user fa-3x"></i>
    <h1 class="m-0 text-dark d-inline-flex mr-3">Usuarios</h1>
    <a href="{{route('admin.persona.create')}}" class="btn btn-success btn-small">
        <i class="fas fa-plus-circle"></i> Crear
    </a>
    @isset($trash)
        <a href="{{route('admin.persona.index')}}" class="btn btn-info btn-small">
            <i class="fas fa-eye"></i> Regresar
        </a>
    @else
        <a href="{{route('admin.persona.trash')}}" class="btn btn-info btn-small">
            <i class="fas fa-recycle"></i> Ver Borrados
        </a>
    @endisset
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <table id="Tabla" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Usuario</th>
                        <th>Direccion</th>
                        <th>Banco</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Tipo de Documento</th>
                        <th>Numero de Documento</th>
                        <th>Digito Verificado</th>
                        <th>Genero</th>
                        <th>Estado Civil</th>
                        <th>Cuenta Bancaria</th>
                        <th>Persona Juridica</th>
                        <th>Fecha de Cumpleaños</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Imagen del DNI Adelante</th>
                        <th>Imagen del DNI Atras</th>
                        @isset($trash)
                            <th>Borrado Hace</th>
                        @endisset
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($data as $key => $dat)
                        <tr class="{{$dat->bDay() == 0? 'bg-success':''}}">
                            <td>{{$dat->id}}</td>
                            <td>{{$dat->Usuario->name}}</td>
                            <td>
                            @isset($dat->Direccion)
                                {{$dat->Direccion->titulo_direccion}}
                            @endisset
                            </td>
                            <td>
                                @isset($dat->Banco)
                                    {{$dat->Banco->siglas}}
                                @endisset
                            </td>
                            <td>{{$dat->nombres}}</td>

                            <td>{{$dat->apellidos}}</td>
                            <td>{{$dat->tipo_documento}}</td>
                            <td>{{$dat->numero_documento}}</td>
                            <td>{{$dat->digito_documento}}</td>
                            <td>{{$dat->genero}}</td>
                            <td>{{$dat->estado_civil}}</td>
                            <td>{{$dat->cuenta_banco}}</td>
                            <td>{{$dat->juridica == 0? 'No':'Si'}}</td>
                            <td>{{$dat->b_day->format('d-m-Y')}} {{Carbon\Carbon::parse($dat->b_day)->isBirthday()? 'Hoy es su Cumpleaños': Carbon\Carbon::parse($dat->b_day->format('d-m-'.now('Y')))->diffForHumans()}}</td>
                            <td>{{$dat->telefono}}</td>
                            <td>{{$dat->Usuario->email}}</td>
                            <td>
                                @if (isset($dat->dni_front))
                                    @include('assets.imagen', ['carpeta' => 'persona', 'id' => $dat->id, 'ancho' => '150', 'admin' => true, 'dni'=>'1'])
                                @endif
                            </td>
                            <td>
                                @if (isset($dat->dni_back))
                                    @include('assets.imagen', ['carpeta' => 'persona', 'id' => $dat->id, 'ancho' => '150', 'admin' => true, 'dni'=>'2'])
                                @endif
                            </td>
                            @isset($trash)
                                <td>{{$dat->deleted_at}}</td>
                            @endisset
                            <td class="align-items-center">
                                @isset($trash)
                                    <a href="{{route('admin.persona.restore', ['id' => $dat->id])}}" class="btn btn-info btn-small"> <i class="fas fa-recycle"></i></a>
                                    <a href="{{route('admin.persona.destroy', ['id' => $dat->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
                                @else
                                    <a href="{{route('admin.persona.show', ['id' => $dat->id])}}" class="btn btn-warning btn-small text-light"><i class="fas fa-eye"></i></a>
                                    <a href="{{route('admin.persona.edit', ['id' => $dat->id])}}" class="btn btn-info btn-small"><i class="fas fa-pencil-alt"></i></a>
                                    <a href="{{route('admin.persona.delete', ['id' => $dat->id])}}" class="btn btn-danger btn-small"><i class="fas fa-trash-alt"></i></a>
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
                            <td>-</td>
                        </tr>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Usuario</th>
                        <th>Direccion</th>
                        <th>Banco</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Tipo de Documento</th>
                        <th>Numero de Documento</th>
                        <th>Digito Verificado</th>
                        <th>Genero</th>
                        <th>Estado Civil</th>
                        <th>Cuenta Bancaria</th>
                        <th>Persona Juridica</th>
                        <th>Fecha de Cumpleaños</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Imagen del DNI Adelante</th>
                        <th>Imagen del DNI Atras</th>
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
                "scrollX":true
            });
        });
    </script>
@endpush
