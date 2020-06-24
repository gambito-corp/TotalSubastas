@extends('layouts.app')

@section('content')
<!-- Container -->
<div class="container">
    <div class="row">
        <!-- main content -->
        <div class="col-md col-md-12 mt-5">
            <div class="row">
                <div class="col-md-4  t-rform_top_img  d-sm-none d-lg-block">
                </div>
                <div class="col-md-8 col-sm-12  col-xs-12t-rform_top main-container p-5">
                    <h2 class=" font-weight-bold text-dark pb-5 text-center">
                        Crea tu cuenta para el mejor portal para subastar de tus sue&ntilde;o
                    </h2>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6 col-sm-12">
                                <label for="name" class="font-weight-bold text-dark">Nombres</label>
                                <input type="text" name="name" class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name" class="font-weight-bold text-dark">Apellidos</label>
                                <input type="text" name="name" class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name" class="font-weight-bold text-dark">Correo electronico</label>
                                <input type="text" name="name" class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name" class="font-weight-bold text-dark">Celular</label>
                                <input type="text" name="name" class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name" class="font-weight-bold text-dark">Documento de identidad</label>
                                <input type="text" name="name" class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name" class="font-weight-bold text-dark">Contrase&ntilde;a</label>
                                <div class="input-group  ">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-light text-light_darken" id="basic-addon1"><i class="fas fa-lock"></i></i></span>
                                        <!-- -->
                                    </div>
                                    <input type="password" id="myInput" class="form-control" placeholder="Contrase&ntilde;a" aria-label="Username" aria-describedby="basic-addon1">
                                    <div class="input-group-append">
                                        <span class="input-group-text bg-light  text-light_darken "> <i class="fas fa-eye" id="showpassword"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="name" class="font-weight-bold text-dark">Pais</label>
                                <input type="text" name="name" class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="name" class="font-weight-bold text-dark">Ciudad</label>
                                <input type="text" name="name" class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="name" class="font-weight-bold text-dark">Address</label>
                                <input type="text" name="name" class="form-control" placeholder="">
                            </div>
                            <div class="form-group col-md-8 text-center offset-md-2 pt-4">
                                <div class="form-check">
                                    <input class="form-check-input checkbox-primary" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Acepta los terminos y condiciones y las leyes de privacidad de datos
                                    </label>
                                </div>
                            </div>
                            <div class="form-group col-md-6 pt-5 text-center">
                                <h3 class="display-6  text-darken">Ya tienes cuenta ?</h3>
                            </div>
                            <div class="form-group col-md-6 pt-5 text-center">
                                <a href="./login.html" class="font-weight-bold text-dark">Ingresar</a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Btn -- load more items -->

<div class="container-fluid">

    @include('assets.footer')
</div>
@endsection