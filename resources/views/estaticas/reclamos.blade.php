@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="jumbotron  jumbotron-top_container faq">
        <div class="container">
            <h1 class="font-weight-bold text-light text-uppercase">
            Reclamos y Quejas
            </h1>
            <p class="text-light">Env&iacute;anos tus comentarios y te responderemos en breve</p>

        </div>
        </div>
    </div>
    <div class="container">
        <div class="col pl-5 pr-5 mt-5 mb-5">
            <h3>No te preocupes te ayudamos en lo que necesites</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultricies eros vitae arcu hendrerit vehicula id non enim. Cras tempor diam auctor finibus malesuada. Donec tristique quis sapien ut ultrices. In pellentesque tincidunt pellentesque. Etiam massa mi, pretium sed magna sit amet, iaculis cursus mauris. Etiam dictum eleifend nibh. Nullam in dictum tellus. Proin sed aliquam sem. Nullam volutpat sapien nec metus feugiat sollicitudin. Proin nec velit sed arcu blandit lobortis. Suspendisse ante lorem, vehicula sit amet luctus eu, pretium ut diam. Ut aliquet velit quis turpis commodo ultricies. Vestibulum faucibus scelerisque semper. Praesent et mauris at ipsum pellentesque porttitor. Nulla ultricies tincidunt lobortis.</p>
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
                        <label for="reclamo">Tipo de reclamo:</label>
                        <br>
                        <select class="input" name="reclamo" id="reclamo">
                            <option value="value1">Queja</option> 
                            <option value="value2" selected>Reclamo</option>
                        </select>
                    </div>                    
                </div>
                <div class="row mb-2">
                    <div class="col-6">
                        <label for="correo">Correo:</label>
                        <br>
                        <input class="input" type="email" name="correo" id="correo">
                    </div>
                    <div class="col-3">
                        <label for="celular">Celular:</label>
                        <br>
                        <input class="input" type="number" name="celular" id="celular">
                    </div> 
                    <div class="col-3">
                        <label for="cuotas">Cuotas:</label>
                        <br>
                        <input class="input" type="number" name="cuotas" id="cuotas">
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-12">
                        <label for="contenido">Contenido:</label>
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