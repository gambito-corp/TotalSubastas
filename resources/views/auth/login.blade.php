@extends('layouts.auth')

@section('content')
<div class="container  d-grid justify-content-center">
    <div class="row ">
        <!-- main content -->

        <div class="col-md col-md-12 mb-5 text-center">

            <div class="col-sm col-sm-6 col-lg-6 offset-md-3 p-5 main-container  mt-5">
                <div class="form-group row justify-content-center">
                    <img src="{{asset('/assets/img/iconos/login-icon.png')}}" alt="logo-login">
                </div>
                <h1 class="font-weight-bold">
                    Hola nuevamente
                </h1>
                <p>
                    ingresa tus datos
                </p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group row justify-content-center">
                        <div class="col-sm-10">
                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-light text-light_darken" id="email" type="email"><i class="fas fa-user"></i></i></span>
                                </div>
                                <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Correo Electronico" value="{{ old('email') }}" required autocomplete="email" autofocus aria-label="Username" aria-describedby="basic-addon1" {{ old('remember') ? 'checked' : '' }} no-validator>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group row justify-content-center">
                        <div class="col-sm-10 ">
                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-light text-light_darken" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" placeholder="Contrase&ntilde;a" class="form-control @error('password') is-invalid @enderror" name="password" no-require autocomplete="current-password">
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
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6 offset-md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Recordarme') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row border-bottom mb-2 pb-5 pt-2">
                        <div class="col-sm-6">
                            <button type="submit" class="btn btn-primary rounded-pill pt-2 pb-2 pl-5 pr-5"> {{ __('Ingresar') }}</button>
                        </div>
                        <div class="col-sm-6 pt-2">
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="nav-item">Olvidaste tu contrase&ntilde;a?</a>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6 mt-4">
                            <p>Aun no tienes cuenta?</p>
                        </div>
                        <div class="col-sm-6 mt-4">
                            <a href="{{  url('register') }}" class="nav-item">Registrar</a>
                        </div>
                    </div>
                </form>
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
