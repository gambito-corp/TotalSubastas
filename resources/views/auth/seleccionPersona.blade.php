@extends('layouts.auth')

@section('content')
    <!-- Container -->
    <div class="container">
        <div class="row">
            <!-- main content -->
            <div class="col-md col-md-12 mt-5">
                <div class="row main-container">
                    <div class="col-md-12 col-sm-12  col-xs-12 p-5">
                        <h3 class=" font-weight-bold text-dark pb-5 text-center">
                            Elige el tipo de cuenta que deseas
                        </h2>
                        <form method="post" action="{{ route('TakeTipe') }}">
                            @csrf
                            <div class="form-row ">
                                <div class="form-group col-md-6 col-sm-12 text-center">
                                    <label for="tipo" class="font-weight-semibold  text-dark"> Persona Natural </label><br>
                                    <button name="tipo" value="natural" class="btn-tipo-usuario">
                                        <img src="{{asset('img/Usuarios.png')}}" width="150" alt="">
                                    </button>
                                </div>
                                <div class="form-group col-md-6 col-sm-12 text-center">
                                    <label for="tipo" class="font-weight-semibold  text-dark"> Persona Jurídica </label><br>
                                    <button name="tipo" value="juridica"  class="btn-tipo-usuario">
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
