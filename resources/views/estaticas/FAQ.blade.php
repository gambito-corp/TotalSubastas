@extends('layouts.app')
@section('content')

    <div class="container-fluid" style="background: white">
        <div class="row">
            <div class="jumbotron  jumbotron-top_container faq">
                <div class="container">
                    <h1 class="font-weight-bold text-light text-uppercase">
                        Preguntas <br> frecuentes
                    </h1>
                    <p class="text-light">conoce las bases para realizar una subasta correcta!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="background: white">
        <div class="container">
            <div class="row" id="app">
                <!-- main content -->
                <div class="col-md-3 order-md-1 mb-4  ">
                    <div class="text-center ">
                        <div class="bg-light-card topics shadow-sm ">
                            <div class="card-body myList">
                                <p class=" font-weight-bold text-left">T&oacute;picos</p>
                                <ul class="nav">
                                    <li class="nav-link text-darken-flat "> <i class="fas fa-file mr-2"> </i> <a class="list-link active" id="list-basicas" data-toggle="list" href="#basicas" role="tab" aria-controls="home">Lo más consultado</a>
                                    </li>
                                    <li class="nav-link text-darken-flat "> <i class="fas fa-file mr-2"> </i> <a  class="list-link" id="list-saldo" data-toggle="list" href="#saldo" role="tab" aria-controls="home">Recarga de saldos</a>
                                    </li>
                                    <li class="nav-link text-darken-flat "> <i class="fas fa-file mr-2"> </i> <a class="list-link" id="list-calidad" data-toggle="list" href="#calidad" role="tab" aria-controls="home">Calidad de miembro</a>
                                    </li>
                                    <li class="nav-link text-darken-flat "> <i class="fas fa-file mr-2"> </i> <a class="list-link" id="list-comision" data-toggle="list" href="#comision" role="tab" aria-controls="home">Comision</a>
                                    </li>
                                    <li class="nav-link text-darken-flat "> <i class="fas fa-file mr-2"> </i> <a class="list-link" id="list-subasta" data-toggle="list" href="#subasta" role="tab" aria-controls="home">Subasta del martillo virtual</a>
                                    </li>
                                    <li class="nav-link text-darken-flat "> <i class="fas fa-file mr-2"> </i><a class="list-link" id="list-historial" data-toggle="list" href="#historial" role="tab" aria-controls="home">Historial de participacion</a>
                                    </li>
                                    <li class="nav-link text-darken-flat "> <i class="fas fa-file mr-2"> </i><a class="list-link" id="list-penalidades" data-toggle="list" href="#penalidades" role="tab" aria-controls="home">Penalidades</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <p class="mt-5 card-side_faqs">
                        ¿ C&oacute;mo subastar ?
                    </p>
                    <div class="card mt-4 border-0">
                        <!-- <svg class="bd-placeholder-img card-img-top fluid rounded" width="100%" height="180"
                             xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
                             aria-label="Placeholder: Image cap">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
                                                                                         dy=".3em">Image
                                cap</text>
                        </svg> -->
                        <img src="../img/ter_condic.png" alt="" class="tyclateral radius img100">
                        <div class="card-body pl-0 pr-0">
                            <p class="card-text card-text--estaticas">Esta guía te dara los 4 simples pasos para poder encontrar tu auto y dar tu mejor oferta, aprovecha la oportunidad de obtener un auto a un precio mucho más bajo que el mercado.
                            </p>
                            <a href="/participar" class="btn btn-primary">Conoce</a>
                        </div>
                    </div>
                </div>
                <div class="col-md col-md-9 order-md-2 mb-5">
                    <div class="tab-content tab-content--estatico">
                        <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="basicas-tab" id="basicas">
                            <div class="content-breadcrumbs-ts">Inicio <span class="icono-breadcrumbs-ts"><i class="fas fa-chevron-right"></i></span>  Preguntas </div>
                            <h1 class="font-weight-bold titulo-estatico-ts">Lo más consultado</h1>
                            <div class="">
                                <h5 class="mt-5 subtitulo-estaticas-ts">1. ¿Quién me garantiza que VMC sea una empresa seria? </h5>
                                <p class="mt-5"> En VMC hemos realizado mas de 25mil procesos en nuestros 12 años de experiencia atendiendo a las empresas más importantes del Perú, lo cual es el mejor respaldo de la seriedad de nuestro servicio. Te invito a revisar los testimonios de miles de compradores satisfechos <a href="">aquí</a> 
                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">2. ¿Dónde se realizan sus procesos? </h5>
                                <p class="mt-5">Todos nuestros procesos son 100% virtuales y se realizan a través de nuestra misma plataforma www.vmcsubastas.com por lo que puedes participar desde cualquier lugar del país y con cualquier dispositivo con acceso a Internet.
                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">3. ¿Atienden al público en sus oficinas? </h5>
                                <p class="mt-5"> Nuestro servicio se presta íntegramente a través de nuestra plataforma digital por lo que toda atención al cliente se realiza mediante los siguientes canales: Chat en línea ingresando a www.vmcsubastas.com o llamando a nuestra central telefónica 01-2238200 de lunes a viernes de 9:00am a 6:00pm </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">4. ¿Quién puede participar en VMC Subastas?</h5>
                                <p class="mt-5">
                                   Solo los miembros activos de nuestro servicio pueden participar. Registrarte gratis <a href="">aquí</a> .</p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">5. ¿ Qué es una Oferta "En Vivo" y cómo funciona? </h5>
                                <p class="mt-5  "> 
                                    Le llamamos Oferta "En Vivo" al proceso de venta en el cual, los miembros que hayan consignado la garantía solicitada, tendrán acceso a la Sala donde competirán enviando sus pujas en tiempo real el día y hora indicado en la publicación de la oferta. El participante que envíe la propuesta más alta al cierre de la subasta será declarado ganador.<br><br>
                                    Toda Oferta "En Vivo" cuenta con un precio base, que es el punto de partida desde donde se dará inicio al proceso de puja en Sala y un precio Reserva a menos se indique explícitamente lo contrario en el detalle del ofrecimiento.<br><br>
                                    Puedes ver la repetición de miles de Oferta "En Vivo" <a href="">Aquí</a> <br><br>
                                    Para más información sobre la Oferta "En Vivo" ingresa <a href="">Aquí</a> 

                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">6. Soy miembro de VMC Subastas, ¿Cómo hago para participar en una Oferta? </h5>
                                <p class="mt-5  "> Ingresa a la oferta de tu interés y dale clic al botón participar. Recuerda que debes contar con fondos suficientes para cubrir la garantía solicitada.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" aria-labelledby="saldo-tab" id="saldo">
                            <h1 class="font-weight-bold text-capitalize text-dark">Recarga de Saldo</h1>
                            <div class="col-md col-sm-9">
                                <p class="mt-5 font-weight-bold text-darken">1. Donde se realizan las subastas ? </p>
                                <p class="mt-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo pariatur, amet ullam ab quod
                                    sed error provident debitis, eligendi nisi soluta est animi ipsam. Sint molestias nisi placeat ratione
                                    amet.
                                </p>
                                <!-- <article class="col-md col-md-9">
                                    <figure>
                                        <p class="mt-5 font-weight-bold text-darken">2. Donde se realizan las subastas ?</p>
                                        <img src="" alt="">
                                    </figure>
                                    <p class="mt-5">
                                    <div class="media">
                                        <div class="media-body">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                            odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                                            fringilla. Donec lacinia congue felis in faucibus.
                                        </div>

                                    </div>
                                    </p>
                                </article> -->
                                <p class="mt-5 font-weight-bold text-darken">2. Donde se realizan las subastas </p>
                                <p class="mt-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto suscipit exercitationem
                                    veniam repudiandae necessitatibus iure, harum dolorem, unde ducimus tempore quos eligendi fugiat quo,
                                    distinctio sed labore sunt. Quidem, accusamus!
                                </p>
                                <p class="mt-5 font-weight-bold text-darken">3. Donde se realizan las subastas </p>
                                <p class="mt-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto suscipit exercitationem
                                    veniam repudiandae necessitatibus iure, harum dolorem, unde ducimus tempore quos eligendi fugiat quo,
                                    distinctio sed labore sunt. Quidem, accusamus!
                                </p>
                                <p class="mt-5  font-weight-bold text-darken">4. Donde se realizan las subastas ?</p>
                                <p class="mt-5  "> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui doloremque non ut similique
                                    provident, beatae vel, incidunt, inventore atque ad repellat. Numquam repudiandae similique, incidunt
                                    provident sapiente totam? Nisi, assumenda?
                                </p>
                                <p class="mt-5 font-weight-bold text-darken">5. Donde se realizan las subastas </p>
                                <p class="mt-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto suscipit exercitationem
                                    veniam repudiandae necessitatibus iure, harum dolorem, unde ducimus tempore quos eligendi fugiat quo,
                                    distinctio sed labore sunt. Quidem, accusamus!
                                </p>

                            </div>
                        </div>
                        <div class="tab-pane fade " role="tabpanel" aria-labelledby="calidad-tab" id="calidad">
                            <h1 class="font-weight-bold text-capitalize text-dark">preguntas b&aacute;sicas</h1>
                            <div class="col-md col-sm-9">
                                <p class="mt-5 font-weight-bold text-darken">1. Donde se realizan las subastas ? </p>
                                <p class="mt-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo pariatur, amet ullam ab quod
                                    sed error provident debitis, eligendi nisi soluta est animi ipsam. Sint molestias nisi placeat ratione
                                    amet.
                                </p>
                                <article class="col-md col-md-9">
                                    <figure>
                                        <p class="mt-5 font-weight-bold text-darken">2. Donde se realizan las subastas ?</p>
                                        <img src="" alt="">
                                    </figure>
                                    <p class="mt-5">
                                    <div class="media">
                                        <div class="media-body">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                            odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                                            fringilla. Donec lacinia congue felis in faucibus.
                                        </div>
                                        <!-- <img class="d-flex ml-3" src="/images/pathToYourImage.png" alt="Generic placeholder image"> -->
                                    </div>
                                    </p>
                                </article>
                                <p class="mt-5 font-weight-bold text-darken">3. Donde se realizan las subastas </p>
                                <p class="mt-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto suscipit exercitationem
                                    veniam repudiandae necessitatibus iure, harum dolorem, unde ducimus tempore quos eligendi fugiat quo,
                                    distinctio sed labore sunt. Quidem, accusamus! </p>
                                <p class="mt-5  font-weight-bold text-darken"> Donde se realizan las subastas ?</p>
                                <p class="mt-5  "> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui doloremque non ut similique
                                    provident, beatae vel, incidunt, inventore atque ad repellat. Numquam repudiandae similique, incidunt
                                    provident sapiente totam? Nisi, assumenda?</p>
                            </div>
                        </div>
                        <div class="tab-pane fade " role="tabpanel" aria-labelledby="comision-tab" id="comision">
                            <h1 class="font-weight-bold text-capitalize text-dark">preguntas b&aacute;sicas</h1>
                            <div class="col-md col-sm-9">
                                <p class="mt-5 font-weight-bold text-darken">1. Donde se realizan las subastas ? </p>
                                <p class="mt-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo pariatur, amet ullam ab quod
                                    sed error provident debitis, eligendi nisi soluta est animi ipsam. Sint molestias nisi placeat ratione
                                    amet.
                                </p>
                                <article class="col-md col-md-9">
                                    <figure>
                                        <p class="mt-5 font-weight-bold text-darken">2. Donde se realizan las subastas ?</p>
                                        <img src="" alt="">
                                    </figure>
                                    <p class="mt-5">
                                    <div class="media">
                                        <div class="media-body">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                            odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                                            fringilla. Donec lacinia congue felis in faucibus.
                                        </div>
                                        <!-- <img class="d-flex ml-3" src="/images/pathToYourImage.png" alt="Generic placeholder image"> -->
                                    </div>
                                    </p>
                                </article>
                                <p class="mt-5 font-weight-bold text-darken">3. Donde se realizan las subastas </p>
                                <p class="mt-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto suscipit exercitationem
                                    veniam repudiandae necessitatibus iure, harum dolorem, unde ducimus tempore quos eligendi fugiat quo,
                                    distinctio sed labore sunt. Quidem, accusamus! </p>
                                <p class="mt-5  font-weight-bold text-darken"> Donde se realizan las subastas ?</p>
                                <p class="mt-5  "> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui doloremque non ut similique
                                    provident, beatae vel, incidunt, inventore atque ad repellat. Numquam repudiandae similique, incidunt
                                    provident sapiente totam? Nisi, assumenda?</p>
                            </div>
                        </div>
                        <div class="tab-pane fade " role="tabpanel" aria-labelledby="subasta-tab" id="subasta">
                            <h1 class="font-weight-bold text-capitalize text-dark">preguntas b&aacute;sicas</h1>
                            <div class="col-md col-sm-9">
                                <p class="mt-5 font-weight-bold text-darken">1. Donde se realizan las subastas ? </p>
                                <p class="mt-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo pariatur, amet ullam ab quod
                                    sed error provident debitis, eligendi nisi soluta est animi ipsam. Sint molestias nisi placeat ratione
                                    amet.
                                </p>
                                <article class="col-md col-md-9">
                                    <figure>
                                        <p class="mt-5 font-weight-bold text-darken">2. Donde se realizan las subastas ?</p>
                                        <img src="" alt="">
                                    </figure>
                                    <p class="mt-5">
                                    <div class="media">
                                        <div class="media-body">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                            odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                                            fringilla. Donec lacinia congue felis in faucibus.
                                        </div>
                                        <!-- <img class="d-flex ml-3" src="/images/pathToYourImage.png" alt="Generic placeholder image"> -->
                                    </div>
                                    </p>
                                </article>
                                <p class="mt-5 font-weight-bold text-darken">3. Donde se realizan las subastas </p>
                                <p class="mt-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto suscipit exercitationem
                                    veniam repudiandae necessitatibus iure, harum dolorem, unde ducimus tempore quos eligendi fugiat quo,
                                    distinctio sed labore sunt. Quidem, accusamus! </p>
                                <p class="mt-5  font-weight-bold text-darken"> Donde se realizan las subastas ?</p>
                                <p class="mt-5  "> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui doloremque non ut similique
                                    provident, beatae vel, incidunt, inventore atque ad repellat. Numquam repudiandae similique, incidunt
                                    provident sapiente totam? Nisi, assumenda?</p>
                            </div>
                        </div>
                        <div class="tab-pane fade " role="tabpanel" aria-labelledby="historial-tab" id="historial">
                            <h1 class="font-weight-bold text-capitalize text-dark">preguntas b&aacute;sicas</h1>
                            <div class="col-md col-sm-9">
                                <p class="mt-5 font-weight-bold text-darken">1. Donde se realizan las subastas ? </p>
                                <p class="mt-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo pariatur, amet ullam ab quod
                                    sed error provident debitis, eligendi nisi soluta est animi ipsam. Sint molestias nisi placeat ratione
                                    amet.
                                </p>
                                <article class="col-md col-md-9">
                                    <figure>
                                        <p class="mt-5 font-weight-bold text-darken">2. Donde se realizan las subastas ?</p>
                                        <img src="" alt="">
                                    </figure>
                                    <p class="mt-5">
                                    <div class="media">
                                        <div class="media-body">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                            odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                                            fringilla. Donec lacinia congue felis in faucibus.
                                        </div>
                                        <!-- <img class="d-flex ml-3" src="/images/pathToYourImage.png" alt="Generic placeholder image"> -->
                                    </div>
                                    </p>
                                </article>
                                <p class="mt-5 font-weight-bold text-darken">3. Donde se realizan las subastas </p>
                                <p class="mt-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto suscipit exercitationem
                                    veniam repudiandae necessitatibus iure, harum dolorem, unde ducimus tempore quos eligendi fugiat quo,
                                    distinctio sed labore sunt. Quidem, accusamus! </p>
                                <p class="mt-5  font-weight-bold text-darken"> Donde se realizan las subastas ?</p>
                                <p class="mt-5  "> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui doloremque non ut similique
                                    provident, beatae vel, incidunt, inventore atque ad repellat. Numquam repudiandae similique, incidunt
                                    provident sapiente totam? Nisi, assumenda?</p>
                            </div>
                        </div>
                        <div class="tab-pane fade " role="tabpanel" aria-labelledby="penalidades-tab" id="penalidades">
                            <h1 class="font-weight-bold text-capitalize text-dark">preguntas b&aacute;sicas</h1>
                            <div class="col-md col-sm-9">
                                <p class="mt-5 font-weight-bold text-darken">1. Donde se realizan las subastas ? </p>
                                <p class="mt-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo pariatur, amet ullam ab quod
                                    sed error provident debitis, eligendi nisi soluta est animi ipsam. Sint molestias nisi placeat ratione
                                    amet.
                                </p>
                                <article class="col-md col-md-9">
                                    <figure>
                                        <p class="mt-5 font-weight-bold text-darken">2. Donde se realizan las subastas ?</p>
                                        <img src="" alt="">
                                    </figure>
                                    <p class="mt-5">
                                    <div class="media">
                                        <div class="media-body">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                            odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                                            fringilla. Donec lacinia congue felis in faucibus.
                                        </div>
                                        <!-- <img class="d-flex ml-3" src="/images/pathToYourImage.png" alt="Generic placeholder image"> -->
                                    </div>
                                    </p>
                                </article>
                                <p class="mt-5 font-weight-bold text-darken">3. Donde se realizan las subastas </p>
                                <p class="mt-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto suscipit exercitationem
                                    veniam repudiandae necessitatibus iure, harum dolorem, unde ducimus tempore quos eligendi fugiat quo,
                                    distinctio sed labore sunt. Quidem, accusamus! </p>
                                <p class="mt-5  font-weight-bold text-darken"> Donde se realizan las subastas ?</p>
                                <p class="mt-5  "> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui doloremque non ut similique
                                    provident, beatae vel, incidunt, inventore atque ad repellat. Numquam repudiandae similique, incidunt
                                    provident sapiente totam? Nisi, assumenda?</p>
                            </div>
                        </div>
                        <div class="tab-pane fade " role="tabpanel" aria-labelledby="penalidades-tab" id="penalidades">
                            <h1 class="font-weight-bold text-capitalize text-dark">preguntas b&aacute;sicas</h1>
                            <div class="col-md col-sm-9">
                                <p class="mt-5 font-weight-bold text-darken">1. Donde se realizan las subastas ? </p>
                                <p class="mt-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo pariatur, amet ullam ab quod
                                    sed error provident debitis, eligendi nisi soluta est animi ipsam. Sint molestias nisi placeat ratione
                                    amet.
                                </p>
                                <article class="col-md col-md-9">
                                    <figure>
                                        <p class="mt-5 font-weight-bold text-darken">2. Donde se realizan las subastas ?</p>
                                        <img src="" alt="">
                                    </figure>
                                    <p class="mt-5">
                                    <div class="media">
                                        <div class="media-body">
                                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                                            odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                                            fringilla. Donec lacinia congue felis in faucibus.
                                        </div>
                                        <!-- <img class="d-flex ml-3" src="/images/pathToYourImage.png" alt="Generic placeholder image"> -->
                                    </div>
                                    </p>
                                </article>
                                <p class="mt-5 font-weight-bold text-darken">3. Donde se realizan las subastas </p>
                                <p class="mt-5"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto suscipit exercitationem
                                    veniam repudiandae necessitatibus iure, harum dolorem, unde ducimus tempore quos eligendi fugiat quo,
                                    distinctio sed labore sunt. Quidem, accusamus! </p>
                                <p class="mt-5  font-weight-bold text-darken"> Donde se realizan las subastas ?</p>
                                <p class="mt-5  "> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Qui doloremque non ut similique
                                    provident, beatae vel, incidunt, inventore atque ad repellat. Numquam repudiandae similique, incidunt
                                    provident sapiente totam? Nisi, assumenda?</p>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end footer -->
            </div>
            <!-- end row -->
        </div>
    </div>
@endsection
@push('scripts')
<script>
  $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    e.target // newly activated tab
    e.relatedTarget // previous active tab
  })
</script>
@endpush

