@extends('layouts.auth')

@section('content')
<!-- Container -->
<div class="container">
    <div class="row">
        <!-- main content -->
        <div class="col-md col-md-12 mt-5">
            <div class="row main-container">
                <div class="col-md-4 t-rform_top_img d-sm-none d-lg-block">
                </div>
                <div class="col-md-8 col-sm-12  col-xs-12 p-5">
                    <h2 class=" font-weight-bold text-dark pb-5 text-center">
                        Crea tu cuenta para el mejor portal para subastar de tus sue&ntilde;os
                    </h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="nombre" class="font-weight-bold text-dark">Nombres</label>
                                <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="">
                                @error('nombre')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group col-md-6">
                                <label for="apellido" class="font-weight-bold text-dark">Apellidos</label>
                                <input type="text" name="apellido" class="form-control @error('apellido') is-invalid @enderror" value="">
                                @error('apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                            </div>
                            <div class="form-group col-md-6">
                                <label for="email" class="font-weight-bold text-dark">Correo electronico</label>
                                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" value="">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                            </div>
                            <div class="form-group col-md-6">
                                <label for="tel" class="font-weight-bold text-dark">Celular</label>
                                <input type="tel" name="tel" class="form-control @error('tel') is-invalid @enderror" value="">
                                @error('tel')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                            </div>
                            <div class="form-group col-md-6">
                                <label for="dni" class="font-weight-bold text-dark">Documento de identidad</label>
                                <input type="text" name="dni" class="form-control @error('dni') is-invalid @enderror" value="">
                                @error('dni')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                            </div>
                            <div class="form-group col-md-6">
                                <label for="password" class="font-weight-bold text-dark">Contrase&ntilde;a</label>
                                <div class="input-group  ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-light text-light_darken" id="basic-addon1"><i class="fas fa-lock"></i></i></span>
                                        <!-- -->
                                    </div>
                                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" value="" aria-label="Username" aria-describedby="basic-addon1">
                                    <div class="input-group-append"  onclick="mostrarContrasena()">
                                        <span class="input-group-text bg-light  text-light_darken "> <i class="fas fa-eye" id="showpassword"></i></span>
                                    </div>
                                </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                            </div>
                            <div class="form-group col-md-12">
                                <input type="submit" value="Registrarse" class="btn btn-success btn-block">
                            </div>
                            <div class="form-group col-md-8 text-center offset-md-2 pt-4">
                                <div class="form-check">
                                    <input class="form-check-input checkbox-primary @error('Check') is-invalid @enderror" type="checkbox" id="gridCheck" name="Check"">
                                    <label class="form-check-label" for="Check">
                                        Acepta los terminos y condiciones y las leyes de privacidad de datos
                                    </label>
                                    @error('Check')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group col-md-12 pt-5 text-center"> 
                                <a href="{{route('login')}}" class="font-weight-bold text-dark">
                                    <h5 class="display-6  text-darken">Ya tienes cuenta ?</h5>
                                </a>                               
                            </div>
                            
                        </div>
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
