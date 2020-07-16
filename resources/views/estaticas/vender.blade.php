@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="jumbotron  jumbotron-top_container faq">
        <div class="container">
            <h1 class="font-weight-bold text-light text-uppercase">
            Como <br> vender
            </h1>
            <p class="text-light">Conoce las bases para realizar una subasta correcta</p>

        </div>
        </div>
    </div>
    <div class="container">
        <div class="col pl-5 pr-5 mt-5 mb-5">
            <h3><strong>¿Estas interesado en vender tus activos?</strong></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultricies eros vitae arcu hendrerit vehicula id non enim. Cras tempor diam auctor finibus malesuada. Donec tristique quis sapien ut ultrices. In pellentesque tincidunt pellentesque. Etiam massa mi, pretium sed magna sit amet, iaculis cursus mauris. Etiam dictum eleifend nibh. Nullam in dictum tellus. Proin sed aliquam sem. Nullam volutpat sapien nec metus feugiat sollicitudin. Proin nec velit sed arcu blandit lobortis. Suspendisse ante lorem, vehicula sit amet luctus eu, pretium ut diam. Ut aliquet velit quis turpis commodo ultricies. Vestibulum faucibus scelerisque semper. Praesent et mauris at ipsum pellentesque porttitor. Nulla ultricies tincidunt lobortis.</p>
        </div>
        <div class="col mb-5 mt-5">
            <div class="row pt-5 pb-5 comment-box">
                <div class="col-md-9 pl-5">
                    <p class=""><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultricies eros vitae arcu hendrerit vehicula id non enim. Cras tempor diam auctor finibus malesuada. Donec tristique quis sapien ut ultrices. In pellentesque tincidunt pellentesque. Etiam massa mi, pretium sed magna sit amet, iaculis cursus mauris.</strong></p>
                </div>
                <div class="col-md-3 pr-5">
                    <div class="row mb-3">
                        <img  style="border-radius: 50%" src="https://picsum.photos/50" alt="img generica">
                    </div>
                    <div class="row">
                        <h4>Broker</h4>
                    </div>
                    <div class="row">
                        <p>Saga Falabella</p>
                    </div>


                </div>
            </div>
        </div>
        <div class="col form-container mt-5 mb-5">
            <form class="form-padding" action="">
                <div class="row mb-2">
                    <div class="col-6">
                        <label for="nombre">Nombre:</label>
                        <br>
                        <input class="input" type="text" name="nombre" id="nombre">
                    </div>
                    <div class="col-6">
                        <label for="venta">Tipo de venta:</label>
                        <br>
                        <select class="input" name="venta" id="venta">
                            <option value="value1">Persona particular</option>
                            <option value="value2" selected>Persona jur&iacute;dica</option>
                        </select>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-6">
                        <label for="correo">Correo:</label>
                        <br>
                        <input class="input" type="email" name="correo" id="correo">
                    </div>
                    <div class="col-6">
                        <label for="celular">Celular:</label>
                        <br>
                        <input class="input" type="number" name="celular" id="celular">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-12">
                        <label for="contenido">Mensaje:</label>
                        <br>
                        <textarea class="input" rows="5" cols="100" name="contenido" id="contenido"></textarea>
                    </div>
                </div>
                <div class="row mt-4">
                    <button class="btn btn-primary rounded-pill btn-padding">Enviar</button>

                </div>

            </form>
        </div>
    </div>
</div>
@endsection
