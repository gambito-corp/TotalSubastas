@extends('layouts.app')

@section('content')

<div class="container-fluid">
        <div class="row">
            <div class="jumbotron jumbotron-top_container">
                <div class="container">
                    <!-- <h1 class="font-weight-bold text-light text-uppercase">
              Preguntas <br> frecuentes
          </h1>
        
          <p class="text-light text-capitalize">conoce las bases para realizar una subasta correcta!</p>
          -->
                </div>
            </div>
        </div>
    </div>
    <!-- Container -->
    <div class="container">
        <div class="row">
            <!-- main content -->
            <div class="col-md col-md-12 mt-5">
                <div class="row">
                    <!--<div class="col-md-4  t-rform_top_img  d-sm-none d-lg-block">
              </div>-->
                    <div class="col-md-3 order-md-1 mb-4  ">
                        <div class="text-center">
                            <div class="bg-light-card shadow-sm ">
                                <img src="./assets/img/adobe.png" class="side-nav-br_50" with="" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold  side-nav_title-card">Card title</h5>
                                    <p class="card-text">email@example.com</p>
                                    <p>
                                        <span><i class="text-warning fas fa-star"></i></span>
                                        <span><i class="text-warning fas fa-star"></i></span>
                                        <span><i class="text-warning fas fa-star"></i></span>
                                        <span><i class="text-warning fas fa-star  "></i></span>
                                        <span><i class="darken-flat fas fa-star"></i></span>
                                    </p>
                                    <p class="font-weight-bold text-dark">3 pts</p>
                                    <hr>
                                    <a href=""> editar perfil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12   order-md-2 col-xs-12 t-rform_top main-container p-5">
                        <h2 class=" font-weight-bold text-dark pb-5 text-center">
                            Customer information
                        </h2>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="name" class="font-weight-bold text-dark">Nombres</label>
                                    <input type="text" name="name" class="form-control" placeholder="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name" class="font-weight-bold text-dark">Apellidos</label>
                                    <input type="text" name="name" class="form-control" placeholder="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name" class="font-weight-bold text-dark">Celular</label>
                                    <input type="text" name="name" class="form-control" placeholder="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name" class="font-weight-bold text-dark">Correo electronico</label>
                                    <input type="text" name="name" class="form-control" placeholder="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name" class="font-weight-bold text-dark">Fecha de nacimiento</label>
                                    <input type="text" name="name" class="form-control" placeholder="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name" class="font-weight-bold text-dark">RUC</label>
                                    <input type="text" name="name" class="form-control" placeholder="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name" class="font-weight-bold text-dark">Documento de identidad</label>
                                    <input type="text" name="name" class="form-control" placeholder="">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="name" class="font-weight-bold text-dark">Contrase&ntilde;a</label>
                                    <input type="text" name="name" class="form-control" placeholder="">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="name" class="font-weight-bold text-dark">Pais</label>
                                    <input type="text" name="name" class="form-control" placeholder="">
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="name" class="font-weight-bold text-dark">Ciudad</label>
                                    <input type="text" name="name" class="form-control" placeholder="">
                                </div>
                                <div class="form-group col-md-8">
                                    <label for="name" class="font-weight-bold text-dark">Domicilio</label>
                                    <input type="text" name="name" class="form-control" placeholder="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col bg-light">
                                    <div class="media border-bottom mb-5 pb-2 pt-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios"
                                                id="exampleRadios1" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios1">
                                            </label>
                                        </div>
                                        <div class="media-body ">
                                            <h5 class="mt-0">Person juridica</h5>
                                            Necesito solo facturaci&oacute;n
                                        </div>
                                    </div>
                                    <div class="media ">
                                        <div class="input-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="exampleRadios"
                                                    id="exampleRadios1" value="option1" checked>
                                                <label class="form-check-label" for="exampleRadios1">
                                                </label>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="mt-0">Person Natural</h5>
                                                Necesito solo Recibo
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        Dropzone
                                    </div>
                                    <div class="panel-body">
                                        {!! Form::open(['route'=> 'file.store', 'method' => 'POST', 'files'=>'true', 'id' => 'my-dropzone' , 'class' => 'dropzone']) !!}
                                        <div class="dz-message" style="height:200px;">
                                            Drop your files here
                                        </div>
                                        <div class="dropzone-previews"></div>
                                        <button type="submit" class="btn btn-success" id="submit">Save</button>
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                                </div>
                                <div class="col">
                                  
                                </div>
                            </div>
                            <div class="row mx-lg-n5 mt-5">
                                <div class="col py-3 ml-5 px-lg-5">
                                    <button class="btn  btn-to_buy pl-5 pr-5 text-light rounded-pill">Guardar
                                        cambios</button>
                                </div>
                                <div class="col py-3 px-lg-5">
                                    <button class="btn btn-outline-primary pl-5 pr-5 rounded-pill ">cambiar
                                        contrase&ntilde;a</button></div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-3">
                <img src="" alt="">
            </div>
        
    </div>
    <!-- end row -->
    </div>
<div class="container-fluid">

    @include('assets.footer')
</div>
@endsection
