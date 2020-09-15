@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm col-sm-6 col-lg-6 p-5 main-container  mt-5">
            <div>
                <div class="row justify-content-center mt-5">
                    <img src="{{asset('/assets/img/iconos/password-reset.png')}}" alt="">
                </div>

                <div class=" row justify-content-center mt-3">
                    <h3>
                        <b>
                        Te ayudamos
                        </b>
                    </h3>
                </div>
                <div class="row justify-content-center mt-3">
                    <p>
                        Ingresa tu correo y te enviaremos un email
                    </p>
                </div>


                <div class="row justify-content-center mt-3">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="col-md-9" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group row">
                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-light text-light_darken" id="email" type="email"><i class="fas fa-user"></i></i></span>
                                </div>
                                <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" placeholder="Correo electr&oacute;nico" value="{{ old('email') }}" required autocomplete="email" autofocus aria-label="Username" aria-describedby="basic-addon1" {{ old('remember') ? 'checked' : '' }} no-validator>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group justify-content-center row border-bottom mb-2 pb-5 pt-2">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar correo de recuperacion') }}
                                </button>
                            </div>
                        </div>
                        <div class="form-group row text-center">
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
</div>
@endsection
