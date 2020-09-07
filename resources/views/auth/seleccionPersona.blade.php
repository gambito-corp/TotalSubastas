@extends('layouts.auth')

@section('content')
    <!-- Container -->
    <div class="container">
        <div class="row">
            <!-- main content -->
            <div class="col-md col-md-12 mt-5">
                <div class="row main-container">
                    <div class="col-md-12 col-sm-12  col-xs-12 p-5">
                        <h2 class=" font-weight-bold text-dark pb-5 text-center">
                            Elige El Tipo De Cuenta Que Deseas
                        </h2>
                        <form method="post" action="{{ route('TakeTipe') }}">
                            @csrf
                            <div class="form-row ">
                                <div class="form-group col-md-6 col-sm-12 text-center">
                                    <label for="tipo"> Persona Natural </label>
                                    <button name="tipo" value="natural">
                                        <img src="{{asset('img/Usuarios.png')}}" width="150" alt="">
                                    </button>
                                </div>
                                <div class="form-group col-md-6 col-sm-12 text-center">
                                    <label for="tipo"> Persona Juridica </label>
                                    <button name="tipo" value="juridica">
                                        <img src="{{asset('img/Empresas.png')}}" width="150" alt="">
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="" alt="">
            </div>
        </div>
    </div>
    </div>

@endsection
@push('scripts')
    <script>
        function mostrarContrasena(){
            var tipo = document.getElementById("password");
            if(tipo.type == "password"){
                tipo.type = "text";
            }else{
                tipo.type = "password";
            }
        }
    </script>
@endpush
