<div class="pt-3">
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                    <h4 class="dropdown-toggle" data-toggle="collapse" data-target="#PrimerColapso" aria-expanded="true" aria-controls="PrimerColapso">
                        CATEGORIAS
                    </h4>
                </h5>
            </div>

            <div id="PrimerColapso" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                    <p class="d-inline-flex float-left">
                        Autos Livianos
                    </p>
                    <p class="d-inline-flex float-right">
                        25
                    </p>
                </div>
                <hr>
                <div class="card-body">
                    <p class="d-inline-flex float-left">
                        Autos Pesados
                    </p>
                    <p class="d-inline-flex float-right">
                        13
                    </p>
                </div>
                <hr>
                <div class="card-body">
                    <p class="d-inline-flex float-left">
                        Motos
                    </p>
                    <p class="d-inline-flex float-right">
                        2
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                    <h4 class="dropdown-toggle" data-toggle="collapse" data-target="#SegundoColapso" aria-expanded="false" aria-controls="SegundoColapso">
                        TIPO DE SUBASTA
                    </h4>
                </h5>
            </div>

            <div id="SegundoColapso" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="form-check ml-5">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Subasta con Reserva
                    </label>
                </div>

                <div class="form-check ml-5">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Subasta Sin Reserva
                    </label>
                </div>

                <div class="form-check ml-5">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Compra Directa
                    </label>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                    <h4 class="dropdown-toggle" data-toggle="collapse" data-target="#TercerColapso" aria-expanded="false" aria-controls="TercerColapso">
                        PRECIO
                    </h4>
                </h5>
            </div>

            <div id="TercerColapso" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">

            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                    <h4 class="dropdown-toggle" data-toggle="collapse" data-target="#CuartoColapso" aria-expanded="false" aria-controls="CuartoColapso">
                        EMPRESAS
                    </h4>
                </h5>
            </div>

            <div id="CuartoColapso" class="collapse show" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body">
                    <form action="#">
                        @csrf
                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">

                                <div class="input-group-text"><i class="fa fa-search"></i></div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Empresa">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingfive">
                <h5 class="mb-0">
                    <h4 class="dropdown-toggle" data-toggle="collapse" data-target="#QuintoColapso" aria-expanded="false" aria-controls="QuintoColapso">
                        CIUDAD
                    </h4>
                </h5>
            </div>

            <div id="QuintoColapso" class="collapse show" aria-labelledby="headingfive" data-parent="#accordion">
                <div class="card-body">
                    <form action="#">
                        @csrf
                        <label class="sr-only" for="inlineFormInputGroup">Username</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">

                                <div class="input-group-text"><i class="fa fa-search"></i></div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Empresa">
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </div>
</div>
