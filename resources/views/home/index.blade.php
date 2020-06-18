@extends('layouts.app')

@section('content')
    <div class="container mb-4">
        <div class="row">
            <div class="col-md-6">
                @php
                    $data = [
                        '0' => 0,
                        '1' => 1,
                        '2' => 2,
                        '3' => 3,
                        '4' => 4
                    ];
                @endphp
                @include('home.assets.slide', ['data' => $data])
            </div>
            <div class="col-md-6">
                <div class="container">
                    <div class="row">
                        <div class="col-12 bg-Amarillo redondo-px-20">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                ¿como subastar?
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <h2> Te enseñamos a Subastar</h2>
                                            </div>
                                        </div>
                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                Encuentra oportunidades de ingreso, o a lo mejor tu gran auto para ti y tu familia
                                            </div>
                                        </div>
                                        <div class="row my-5">
                                            <div class="col-md-12">
                                                <a href="#" class="btn btn-success redondo">Conoce + <i class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                        </div></div>
                                    <div class="col-md-6">
                                        <img src="{{asset('img/mujer.png')}}" alt="" class="alto-100">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5">
                            <div class="col bg-success redondo-px-20 mr-3">
                                <h6>Documentación a la mano de cada subasta</h6>
                                <p>pdf, 125Mb, Sept 9 at 2:03 pm </p>
                                <hr>
                                <div class="text-center">
                                    <p>
                                        <i class="fa fa-download"></i>
                                        Descargalo
                                    </p>
                                </div>
                            </div>

                            <div class="col bg-primary redondo-px-20 ml-3">
                                a
                            </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        @include('assets.breadcrumb-index')
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 bg-light redondo-px-20 mr-4">
                @include('home.assets.filtro')
            </div>

            <div class="col-md-8">
                <div class="container-fluid">
                    <div class="row bg-light redondo-px-20">
                        <div class="col pt-2">
                            @include('home.assets.filtroBarra')
                        </div>
                    </div>
                    <div class="row bg-light redondo-px-20 mt-2">
                        <div class="col pt-2">
                            @include('home.assets.resultados')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

