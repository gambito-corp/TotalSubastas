@extends('layouts.BackOffice')

@section('contenido')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                @include('includes.sesion')
                <div class="col-sm-6">
                    <h1>{{ $clase['titulo'] }}</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="">
        <div class="">
            <div class="">
                @include('includes.sesion')
                <div class="card">
                    <div class="card-header">
                        @if($clase['method'] != 'show')
                            <h3 class="card-title">{{ $clase['subtitulo'] }}</h3>
                        @elseif($clase['controlador'] == 'usuarios')
                            <h3 class="card-title">{{ $clase['subtitulo'].' '.Auth::user()->titulo.' '.Auth::user()->subtitulo }}</h3>
                        @endif
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body container-fluid">
                        @include($clase['vista'])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
