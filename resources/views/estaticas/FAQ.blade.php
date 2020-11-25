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
                                <ul class="nav" style="text-align: left;">
                                    <li class="nav-link text-darken-flat "> <i class="fas fa-file mr-2"> </i> <a class="list-link active" id="list-basicas" data-toggle="list" href="#basicas" role="tab" aria-controls="home">Lo más consultado</a>
                                    </li>
                                    <li class="nav-link text-darken-flat "> <i class="fas fa-file mr-2"> </i> <a  class="list-link" id="list-saldo" data-toggle="list" href="#saldo" role="tab" aria-controls="home">El Registro y tu Membresía </a>
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

                                <h5 class="mt-5 subtitulo-estaticas-ts">7. ¿Por qué tengo que dejar una garantía para participar? </h5>
                                <p class="mt-5  ">Se solicita que los interesados en participar consignen una garantía por adelantado para proteger la integridad de cada proceso. Al consignar la garantía, respaldas tu intención de compra y ayudas a prevenir que malos elementos interfieran en el correcto desarrollo de los procesos.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">8. ¿Puedo comprar una Oferta sin necesidad de ganar el proceso "En Vivo"? </h5>
                                <p class="mt-5  "> Sí, solo debes verificar que la oferta cuente con la opción de Compra Inmediata, la cual te da la opción de adquirir la oferta al precio indicado en la publicación en ese momento y sin necesidad de competir con el resto de participantes en el proceso "En Vivo".</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">9. ¿Qué es una Oferta "Negociable" y cómo funciona? </h5>
                                <p class="mt-5  "> Le llamamos Oferta "Negociable" al proceso de venta en el cual los miembros podrán iniciar negociaciones directamente con el propietario del activo para tratar de llegar a un acuerdo de venta beneficioso para ambas partes. Toda Oferta "Negociable" cuenta con valor de Compra Inmediata.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">10. ¿Puedo comprar una oferta Negociable sin necesidad de negociar con el vendedor? </h5>
                                <p class="mt-5  ">Claro que sí, toda <b>Oferta Negociable</b> cuenta con la opción de Compra Inmediata, la cual te da la opción de adquirir la oferta al precio indicado en la publicación, en ese momento y sin necesidad de negociar con el propietario de la oferta.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">11. ¿Qué significa Compra Inmediata? </h5>
                                <p class="mt-5  "> Significa que podrás adquirir directamente una oferta al aceptar el precio que se indique en la publicación. Para poder ejecutar una Compra Inmediata deberás contar con el monto de la comisión en tu estado de cuenta.<br><br>
                                Para saber cómo agregar valor a tu estado de cuenta ingresa <a href="">Aquí.</a>
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">12. ¿Se pueden visitar las ofertas?</h5>
                                <p class="mt-5  ">¡Siempre recomendamos visitar antes de participar! En el detalle de cada oferta encuentras la opción Visitas, aquí podrás poder agendar tu visita según su disponibilidad. Para agendar visitas debes ser miembro de nuestro servicio.<br>
                                Regístrate gratis <a href=""> aquí.</a>
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">13. ¿Qué pasa con mi Garantía cuando termina el proceso "En Vivo"? </h5>
                                <p class="mt-5  ">Tu garantía regesará a tu estado de cuenta inmediatamente después que concliua el proceso "En Vivo", a menos que hayas resultado ganador o tengas oportunidad de compra. Es importante recalcar, que los participantes que incumplan sus obligaciones serán sancionados con una detracción de 15 puntos VMC y penalizados con el íntegro de la garantía consignada.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">14. ¿Hay otros pagos adicionales que hacer? </h5>
                                <p class="mt-5  ">Tendrás que hacerte cargo de los gastos administrativos que puedan surgir al momento de la transferencia de propiedad. <br>
                                En el caso de tener que cubrir otros gastos, se te indicará en las <B>Condiciones de Compra</B> que se encuentran publicadas en el detalle de la oferta.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">15. ¿Qué es una recarga?</h5>
                                <p class="mt-5  ">Es el proceso por el cual se agrega Saldo al Estado de Cuenta del Miembro. Las Recargas de Saldo demoran 24 horas en verse reflejadas en el estado de cuenta del miembro.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">16. ¿Qué son los Créditos VMC? </h5>
                                <p class="mt-5  ">Es el nombre que recibe nuestra moneda. Esta puede ser adquirida a través de cargo directo a una tarjeta de crédito o débito. Una vez adquiridos los Créditos VMC podrá ser utilizado para la consignación de garantías en las Subastas Electrónicas y para el pago de la(s) deuda(s) de comisiones y penalidades. Recuerda que toda compra de créditos VMc es final
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">17. ¿Por que me recomiendan comprar Créditos VMC? </h5>
                                <p class="mt-5  ">La garantía para participar en una subasta siempre es %50 menos usando Créditos VMC. Compra tus Creditos VMC <a href=""> aquí.</a>
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">18. ¿Qué significa Oferta Financiable? </h5>
                                <p class="mt-5  ">Cuando se indique financiable en el detalle del ofrecimiento, significa que el ganador de la subasta podrá pagar usando su linea de financiamiento en VMC, en caso esta estar aprobada.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade" role="tabpanel" aria-labelledby="saldo-tab" id="saldo">
                            <div class="content-breadcrumbs-ts">Inicio <span class="icono-breadcrumbs-ts"><i class="fas fa-chevron-right"></i></span>  Preguntas </div>
                            <h1 class="font-weight-bold titulo-estatico-ts">El Registro y tu Membresía (14 preguntas)</h1>
                            <div class="">
                                <h5 class="mt-5 subtitulo-estaticas-ts">1. ¿Cuesta ser miembro de VMC Subastas? </h5>
                                <p class="mt-5"> Nuestra membresía es totalmente gratuita.
                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">2. ¿Cómo me registro? </h5>
                                <p class="mt-5">Solo debes completar el formulario de registro <a href="">aquí.</a> Y luego activar tu membresia validando el correo que te enviaremos a tu casilla personal.
                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">3. Tengo o represento a una empresa, ¿puedo registrarme? </h5>
                                <p class="mt-5">Sí, solo deberás ingresar el número de RUC de la empresa y el cargo que desempeñas en ella al momento de registrarte. Recuerda que al adjudicarte una oferta solo se te podrá emitir una factura si registraste la información de tu empresa.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">4. ¿Cómo activo mi membresía?</h5>
                                <p class="mt-5">
                                   Al finalizar el proceso de registro recibirás un correo electrónico con un enlace para activar tu cuenta.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">5. Ingresé un correo equivocado, ¿ahora qué hago? </h5>
                                <p class="mt-5  "> 
                                    Deberás volver a hacer el proceso de registro nuevamente, verifica que tus datos sean correctos, una vez finalizado el proceso de registro te enviaremos un correo de activación a la cuenta ingresada en el formulario de registro.

                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">6. Estoy esperando el correo de activación hace rato ¿qué hago?</h5>
                                <p class="mt-5  "> En ocasiones existen demoras para las entregas de correo, te recomendamos esperar un poco y/o revisar tu bandeja de spam. También es posible que hayas ingresado una dirección de correo equivocada, en ese caso tendrás que volver a completar el formulario de registro.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">7. ¿Puedo registrarme desde un Smartphone?</h5>
                                <p class="mt-5  ">Sí, puedes registrarte desde cualquier dispositivo movil.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">8. Ya tengo mi cuenta activa, ¿qué tengo que hacer para participar en mi primera subasta? </h5>
                                <p class="mt-5  "> Para participar debes agregar fondos a tu cuenta para así poder cubrir el monto de la garantía de la o las ofertas de tu interés. Puedes agregar fondos a tu cuenta Comprando Créditos VMC o Recargando Saldo. </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">9. ¿Qué es el código de miembro?</h5>
                                <p class="mt-5  "> Es el número de identificación compuesto de 6 dígitos que se le asigna automáticamente al activar tu membresia. </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">10. ¿Dónde puedo ver cuál es mi código de miembro?</h5>
                                <p class="mt-5  ">Para ver tu código de miembro debes iniciar sesión, desde un dispositivo móvil podrás verlo al hacer tap sobre el icono ubicado en el margen superior derecho, en una desktop lo encuentras en la parte superior de la barra de acción lateral sobre la mano derecha de la pantalla.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">11. ¿Para qué sirve mi seudónimo? </h5>
                                <p class="mt-5  "> Tu seudónimo protege tu identidad frente a los otros miembros durante el proceso de subasta
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">12. ¿Puedo cambiar mi seudónimo?</h5>
                                <p class="mt-5  ">¡Por estándares de seguridadu seudónimo es generado automáticamente utilizando tus nombres y apellidos
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">13. ¿Puede un miembro tener varias cuentas? </h5>
                                <p class="mt-5  ">Cada miembro solo podrá disponer de una única cuenta.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">14. He olvidado mi contraseña, ¿cómo puedo recuperar el acceso a mi cuenta? </h5>
                                <p class="mt-5  ">Aquí te dejo el vinculo para recuperar el acceso a tu cuenta <a href="">  www.vmcsubastas.com/login/recordar </a>
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

