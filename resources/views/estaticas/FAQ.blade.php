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
                                    <li class="nav-link text-darken-flat "> <i class="fas fa-file mr-2"> </i> <a class="list-link" id="list-calidad" data-toggle="list" href="#calidad" role="tab" aria-controls="home">¡La Garantía te da seguridad! </a>
                                    </li>
                                    <li class="nav-link text-darken-flat "> <i class="fas fa-file mr-2"> </i> <a class="list-link" id="list-comision" data-toggle="list" href="#comision" role="tab" aria-controls="home">Las Visitas e Inspecciones Físicas </a>
                                    </li>
                                    <li class="nav-link text-darken-flat "> <i class="fas fa-file mr-2"> </i> <a class="list-link" id="list-subasta" data-toggle="list" href="#subasta" role="tab" aria-controls="home">Los Créditos VMC y las Recargas de saldo</a>
                                    </li>
                                    <li class="nav-link text-darken-flat "> <i class="fas fa-file mr-2"> </i><a class="list-link" id="list-historial" data-toggle="list" href="#historial" role="tab" aria-controls="home">La Comisión, ¿por qué, cuánto y cómo se paga? </a>
                                    </li>
                                    <li class="nav-link text-darken-flat "> <i class="fas fa-file mr-2"> </i><a class="list-link" id="list-penalidades" data-toggle="list" href="#penalidades" role="tab" aria-controls="home">La Calidad de Miembro y los Puntos VMC </a>
                                    </li>
                                    <li class="nav-link text-darken-flat "> <i class="fas fa-file mr-2"> </i><a class="list-link" id="list-penalidades" data-toggle="list" href="#OfertaVivo" role="tab" aria-controls="home">La Oferta “en vivo”: ¿Cómo funciona?  </a>
                                    </li>
                                    <li class="nav-link text-darken-flat "> <i class="fas fa-file mr-2"> </i><a class="list-link" id="list-penalidades" data-toggle="list" href="#OfertaNegociable" role="tab" aria-controls="home">La Oferta Negociable: ¿Cómo funciona? </a>
                                    </li>
                                     <li class="nav-link text-darken-flat "> <i class="fas fa-file mr-2"> </i><a class="list-link" id="list-penalidades" data-toggle="list" href="#OfertaVenta" role="tab" aria-controls="home">La Oferta proceso de venta  </a>
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
                        <img src="../img/jirafa.png" alt="" class="tyclateral radius img100">
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
                            <div class="content-breadcrumbs-ts">Inicio <span class="icono-breadcrumbs-ts"><i class="fas fa-chevron-right"></i></span>  Preguntas </div>
                            <h1 class="font-weight-bold titulo-estatico-ts">¡La Garantía te da seguridad! (13 preguntas) </h1>
                            <div class="">
                                <h5 class="mt-5 subtitulo-estaticas-ts">1. ¿Por qué es importante la garantía? </h5>
                                <p class="mt-5">Se solicitan garantías para asegurar que las intenciones de compra de cada participante son serias y así poder realizar un proceso justo para todas las partes involucradas. Es por esto que a mejor calidad de miembro menor será el monto de garantía que se te solicite para participar.
                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">2. ¿Qué es Calidad de Miembro? </h5>
                                <p class="mt-5">La Calidad de Miembro es una medida de evaluación cualitativa continua que  depende directamente de tu actividad en la plataforma. Al participar responsablemente tu calidad mejora, si incumples en tus obligaciones como ganador tu calidad empeora y el monto de garantía que se te solicitara sera cada vez mas alto. 
                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">3. ¿Cuanto debo consignar en garantía?</h5>
                                <p class="mt-5">Inicia sesión, anda al detalle de la oferta, aquí encontrarás el campo Garantía, dale click para ver cuánto necesitas tener en cuenta para participar.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">4. ¿Qué pasa con mi garantía cuando termina la subasta?</h5>
                                <p class="mt-5">
                                   Si no tienes oportunidad de compra, tu garantía es liberada y regresará a tu Estado de cuenta.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">5. ¿Qué significa ganador directo?</h5>
                                <p class="mt-5  "> 
                                    Es declarado Ganador Directo al participante que envía la última propuesta válida en un proceso de subasta sin precio de reserva o un mejor postor cuya propuesta fue aceptada por el propietario del activo en venta.Es declarado Ganador Directo al participante que envía la última propuesta válida en un proceso de subasta sin precio de reserva o un mejor postor cuya propuesta fue aceptada por el propietario del activo en venta.

                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">6. ¿Qué significa mejor postor?</h5>
                                <p class="mt-5  "> Se considera mejor postor al participante que envía la última oferta válida en un proceso de subasta que no levanto el precio de reserva.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">7. Si quedo como ganador directo, ¿qué pasa con mi garantía?</h5>
                                <p class="mt-5  ">Tu garantía formará parte de la comisión que nos debes pagar como parte del proceso de adjudicación.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">8. Si quedo como mejor postor, ¿qué pasa con mi garantía? </h5>
                                <p class="mt-5  "> Esta quedará retenida hasta que el propietario dé una respuesta. De ser aceptada la venta, la garantía formará parte de la comisión; en caso esta fuese declinada, el monto retenido será liberado a los fondos de tu estado de cuenta.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">9. La subasta ya terminó, no resulté ganador, pero mi garantía sigue retenida, ¿por qué?</h5>
                                <p class="mt-5  ">Cuando se levanta la reserva de una oferta la garantía de los 3 primeros puestos es retenida por tener oportunidad de compra. Tu garantía será liberará a tu Estado de Cuenta cuando el proceso de venta de la oferta sea completado.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">10. Mi garantía sigue retenida y no tengo oportunidad de compra ¿por qué?</h5>
                                <p class="mt-5  ">Esto significa que tu Calidad de Miembro es “Malo”, por seguridad, tu garantía será retenida hasta que se complete el proceso de venta de la oferta</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">11. ¿Qué es oportunidad de compra? </h5>
                                <p class="mt-5  "> La oportunidad de compra es la posibilidad de adjudicarte la oferta en caso el ganador directo u otros mejores postores incumplan con el proceso de adjudicación.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">12. ¿Qué pasa si el ganador directo no cumple con el proceso de adjudicación?</h5>
                                <p class="mt-5  ">Si un ganador directo incumple con el proceso de adjudicación, la oferta será adjudicada al participante que realizó la segunda mayor propuesta por encima del Precio Reserva, quien tendrá un plazo determinado para realizar el pago según se indica en el historial de participación; así sucesivamente mientras las ofertas se encuentren por encima del Precio Reserva.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">13. Soy mejor postor, ¿cómo puedo aumentar la posibilidad de adjudicarme? </h5>
                                <p class="mt-5  ">Al terminar el proceso en vivo, tendrás una oportunidad de mejorar tu propuesta, esto aumentará tus probabilidades de adjudicarte la oferta.</p>


                            </div>
                        </div>
                        <div class="tab-pane fade " role="tabpanel" aria-labelledby="comision-tab" id="comision">
                            <div class="content-breadcrumbs-ts">Inicio <span class="icono-breadcrumbs-ts"><i class="fas fa-chevron-right"></i></span>  Preguntas </div>
                            <h1 class="font-weight-bold titulo-estatico-ts">Las Visitas e Inspecciones Físicas  (8 preguntas) </h1>
                            <div class="">
                                <h5 class="mt-5 subtitulo-estaticas-ts">1. Soy miembro de VMC Subastas, ¿cómo puedo hacer una visita? </h5>
                                <p class="mt-5">En el detalle de la oferta de tu interés, busca la sección Visitas para ver si la oferta cuenta con la opción disponible.
                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">2. ¿Se debe realizar algún pago para realizar las visitas físicas? </h5>
                                <p class="mt-5">Para poder agendar tus visitas sólo debes estar registrado como miembro de nuestra plataforma. Regístrate gratis <a href="">aquí</a>
                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">3. En la sección "Visitas" me pide agendar una, ¿cómo lo puedo hacer?</h5>
                                <p class="mt-5">Solo completa el formulario con tus datos y selecciona el horario disponible.</p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">4. ¿Se puede coordinar una visita para el mismo día de subasta?</h5>
                                <p class="mt-5">
                                   Siempre se deberán agendar con más de 48 hrs. de anticipación.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">5. Durante las visitas, ¿se pueden realizar inspecciones mecánicas?</h5>
                                <p class="mt-5  "> 
                                    Por temas de seguridad, las inspecciones son sólo visuales.
                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">6. No soy miembro de VMC Subastas y quiero visitar las ofertas que me interesan, ¿qué requisitos necesito?</h5>
                                <p class="mt-5  "> Para poder coordinar una visita a las ofertas, es necesario que te hayas registrado como miembro en nuestra plataforma. Podrás hacerlo de manera gratuita <a href="">aquí.</a></p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">7. ¿Qué es el Certificado Mecánico de Autodiagnóstico?</h5>
                                <p class="mt-5  ">Es el diagnóstico mecánico vehicular que realiza el proveedor Autodiagnóstico, con el objetivo de informar el estado mecánico de la oferta publicada.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">8. ¿Todas las ofertas vehiculares tienen certificado mecánico? </h5>
                                <p class="mt-5  "> Podrás identificar las ofertas que cuentan con él, a través del logo que aparecerá en el detalle del ofrecimiento.</p>


                            </div>
                        </div>
                        <div class="tab-pane fade " role="tabpanel" aria-labelledby="subasta-tab" id="subasta">
                            <div class="content-breadcrumbs-ts">Inicio <span class="icono-breadcrumbs-ts"><i class="fas fa-chevron-right"></i></span>  Preguntas </div>
                            <h1 class="font-weight-bold titulo-estatico-ts">Los Créditos VMC y las Recargas de saldo, ¿qué me conviene tener? (24 preguntas) </h1>
                            <div class="">
                                <h5 class="mt-5 subtitulo-estaticas-ts">1. ¿Qué es una recarga de Saldo? </h5>
                                <p class="mt-5">Es el proceso mediante el cual, un miembro añade dinero a su cuenta a través de un depósito bancario o transferencia bancaria electrónica.
                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">2. ¿Cuánto tiempo tarda el procesamiento mi Recarga de Saldo? </h5>
                                <p class="mt-5">La validación de un depósito en ventanilla o la transacción electrónica es un proceso automático que puede tomar hasta 24 horas hábiles en ser efectiva. Recuerda que si quieres disponer de fondos de manera inmediata puedes realizar una compra de Créditos VMC.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">3. ¿Para qué me sirve el Saldo?</h5>
                                <p class="mt-5">El saldo se utiliza para cubrir las garantías que se solicitan al momento de participar en una subasta y también, para pagar comisiones al adjudicarte una oferta.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">4. ¿Cómo hago una recarga de Saldo?</h5>
                                <p class="mt-5">
                                   <b>a.</b> Mediante transferencia electrónica VíaBCP.com, haciendo clic en “Pagos y Servicios”, selecciona “Empresas Diversas” y busca “VMC Subastas”. En servicios, selecciona “Recarga de Saldo” y una vez seleccionado, se te solicitará tu Código de Miembro y el monto que deseas recargar.<br><br>
                                   <b>b.</b> En ventanilla, acercándote a cualquier agencia del BCP, indícale al cajero que desea realizar un depósito a la Cuenta Recaudadora en dólares de VMC Subastas servicio de Recarga de Saldo; luego, te solicitará tu Código de Miembro y el monto que deseas recargar.


                               </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">5. ¿Cuál es el monto mínimo de Saldo que puedo recargar?</h5>
                                <p class="mt-5  "> 
                                    El monto mínimo de recarga de Saldo es de US$ 30 (Treinta Dólares Americanos).
                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">6. Quiero participar en una subasta hoy pero estoy sin saldo, ¿qué hago? </h5>
                                <p class="mt-5 ">En este caso, vas a tener que comprar Créditos VMC, esta es la única forma de contar con valor en cuenta de manera inmediata.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">7. ¿Qué son los Créditos VMC?</h5>
                                <p class="mt-5  ">Es el nombre que recibe nuestra moneda.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">8. ¿Para qué me sirven los Créditos VMC? </h5>
                                <p class="mt-5  "> Los Créditos VMC se utilizan para cubrir garantías y pagar comisiones.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">9. ¿Cuál es el beneficio de participar usando Créditos VMC? </h5>
                                <p class="mt-5  "> La garantía que se solicita para acceder a una subasta siempre es 50% menos en Créditos de la que se solicita en saldo. Es decir, solo necesitas la mitad del valor en cuenta para participar.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">10. ¿Cómo hago una compra de Créditos VMC? </h5>
                                <p class="mt-5  "> Para comprar Créditos VMC sólo debes iniciar sesión e ingresar al módulo de Compra de Créditos VMC y seguir los pasos indicados. Puedes hacerlo desde cualquier dispositivo con conexión a internet. </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">11. ¿Cuál es el monto mínimo de Créditos VMC que puedo comprar? </h5>
                                <p class="mt-5"> El monto mínimo en Créditos VMC que puedes comprar es US$ 30.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">12. ¿Cuál es el monto máximo de Créditos VMC que puedo comprar? </h5>
                                <p class="mt-5"> El monto máximo de Crédito VMC que puedes comprar es US$ 2,000 por operación. El límite es de 5 compras por día. Recuerda que los créditos solo te sirven para pagar comisiones y consignar garantías.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">13. Tengo una deuda pendiente, ¿cuántos Créditos VMC puedo comprar como máximo? </h5>
                                <p class="mt-5"> Si tienes una deuda pendiente deberás comprar como mínimo el monto de tu deuda.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">14. ¿Puedo comprar Créditos VMC con cualquier tarjeta? </h5>
                                <p class="mt-5  ">Podrás comprar Créditos VMC con tarjetas de crédito o débito de las siguientes marcas: Visa, MasterCard, American Express, Dinners Club, Ripley, Saga Falabella, Oh!, Cencosud, Union Pay.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">15. ¿Existe algún cargo por realizar compras de Créditos VMC con mi tarjeta de crédito? </h5>
                                <p class="mt-5  "> No existen cargos ni comisiones por comprar Créditos VMC con tus tarjetas de crédito o débito</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">16. ¿Cuánto tiempo tarda el procesamiento mi compra de Créditos VMC? </h5>
                                <p class="mt-5  "> Las compras de Créditos VMC se procesan al instante, por lo que podrás visualizar y disponer de tus Créditos VMC de manera inmediata.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">17. ¿Puedo transferir mis Créditos VMC? </h5>
                                <p class="mt-5">Los Créditos VMC son intransferibles e intransmisibles, además carecen de valor comercial, siendo innegociables e incapaces de ser canjeados por dinero y solo pertenecen al miembro titular de la cuenta.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">18. ¿Puedo convertir mi Saldo a Créditos VMC? </h5>
                                <p class="mt-5  ">Podrás convertir tu Saldo a Créditos VMC desde la opción Convertir mi saldo en Crédito VMC mostrada en tu Zona de Miembro. Recuerda que la conversión es irreversible y que únicamente podrás convertir la totalidad tu saldo disponible en el momento que desees</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">19. ¿Puedo congelar mi cuenta si tengo Créditos VMC? </h5>
                                <p class="mt-5  ">19. ¿Puedo congelar mi cuenta si tengo Créditos VMC?</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">20. ¿Qué es el Recibo VMC? </h5>
                                <p class="mt-5  ">Es la constancia que avala una operación de compra o recarga en la plataforma.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">21. ¿Cómo puedo recuperar mi Saldo? </h5>
                                <p class="mt-5  "> En tu zona de miembro encontrarás la sección Congelar cuenta, solo sigue las instrucciones para iniciar el proceso de congelamiento de cuenta.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">22. ¿Cuándo puedo solicitar congelar mi cuenta? </h5>
                                <p class="mt-5  "> Podrás solicitar el reembolso de tu saldo siempre que no tengas deudas pendientes, garantías retenidas o procesos activos con oportunidad de compra</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">23. Congelar mi cuenta, ¿tiene algún costo?</h5>
                                <p class="mt-5  "> Cada vez que solicites congelar tu cuenta se te descontarán US$ 30 de tu saldo por concepto de gastos administrativos.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">24. ¿En cuánto tiempo me hacen el reembolso? </h5>
                                <p class="mt-5  "> El proceso de reembolso tiene un plazo máximo de hasta 07 días hábiles. En caso de ser una transferencia interbancaria, podrá tomar hasta 21 días útiles en ser ejecutado.</p>


                            </div>
                        </div>
                        <div class="tab-pane fade " role="tabpanel" aria-labelledby="historial-tab" id="historial">
                            <div class="content-breadcrumbs-ts">Inicio <span class="icono-breadcrumbs-ts"><i class="fas fa-chevron-right"></i></span>  Preguntas </div>
                            <h1 class="font-weight-bold titulo-estatico-ts">La Comisión, ¿por qué, cuánto y cómo se paga? (8 preguntas)</h1>
                            <div class="">
                                <h5 class="mt-5 subtitulo-estaticas-ts">1. ¿Por qué tengo que pagar una comisión? </h5>
                                <p class="mt-5">Todo Participante que resulte adjudicado debe pagar a VMC una comisión  en retribución por el uso de nuestro servicio de subasta.
                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">2. ¿Cuanto se paga de comisión? </h5>
                                <p class="mt-5">El monto de la comisión a pagar es un porcentaje sobre el valor de adjudicación. Puedes ver el porcentaje publicado en el detalle de cada oferta.
                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">3. ¿Dónde puedo ver el monto de comisión que debo pagar?</h5>
                                <p class="mt-5">En caso de adjudicarte una oferta podrás ver el monto correspondiente a la comisión que deberás pagarnos en tu historial de participación.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">4. ¿Cómo se calcula el monto de la comisión?</h5>
                                <p class="mt-5">
                                   La comisión se calcula de la siguiente manera:<br><br>
 
                                    Comisión= (Valor de adjudicación) x (Porcentaje de comisión) / 100
                                    </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">5. ¿Cómo pago la comisión?</h5>
                                <p class="mt-5  "> 
                                   La comisión será debitada de tu Estado de Cuenta de manera automática. En caso de no contar con fondos suficientes para cubrir la comisión deberás realizar una recarga de saldo o crédito dentro del plazo indicado en tu historial de participación o serás sancionado por incumplimiento.
                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">6. ¿Mi propuesta incluye el monto de comisión?</h5>
                                <p class="mt-5  "> La comisión nunca esta incluida en el valor de adjudicación. La comisión es debitada por VMC directamente de tu estado de cuenta.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">7. No cuento con fondos suficiente en mi Estado de Cuenta para pagar la comisión, ¿qué puedo hacer?</h5>
                                <p class="mt-5  ">En este caso, deberás realizar una recarga de Crédito VMC o una recarga de Saldo.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">8. ¿Que pasa si no pago la comisión? </h5>
                                <p class="mt-5  ">Al incumplir con tus obligaciones como ganador serás sancionado, tu garantía será retenida y mantendrás el monto de la comisión por uso de nuestro servicio como deuda en tu estado de cuenta.
                                <br><br>
                                Deberás cancelar esta deuda para poder participar en otros procesos de subasta. Además, tu membresía será suspendida, tus Puntos VMC y Calidad de Miembro serán degradados hasta la calidad anterior. 
                                </p>


                            </div>
                        </div>
                        <div class="tab-pane fade " role="tabpanel" aria-labelledby="penalidades-tab" id="penalidades">
                            <div class="content-breadcrumbs-ts">Inicio <span class="icono-breadcrumbs-ts"><i class="fas fa-chevron-right"></i></span>  Preguntas </div>
                            <h1 class="font-weight-bold titulo-estatico-ts">La Calidad de Miembro y los Puntos VMC (8 preguntas)</h1>
                            <div class="">
                                <h5 class="mt-5 subtitulo-estaticas-ts">1. ¿Qué es calidad de miembro? </h5>
                                <p class="mt-5">Es un indicador cualitativo que califica el comportamiento de todos nuestros miembros en nuestra plataforma de manera continua.
                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">2. ¿Cuál es el objetivo de la calidad de miembro? </h5>
                                <p class="mt-5">Queremos generar un ambiente seguro para todos nuestros miembros, en donde puedas participar tranquilo. La calidad de miembro nos permite identificar a los malos elementos para evitar su participación as como también nos permite beneficiar a los miembros buenos ofreciéndoles el de participar con garantías descontadas, inclusive sin tener que consignar garantías.
                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">3. ¿Qué son Puntos VMC?</h5>
                                <p class="mt-5">Los Puntos VMC son la unidad de medida de la Calidad de Miembro, los obtienes al participar en subastas y cumplir con tus obligaciones como ganador.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">4. ¿Cuáles son los beneficios de mejorar mi calidad de miembro?</h5>
                                <p class="mt-5">
                                   Mejorar tu Calidad de Miembro te permitirá participar en subastas de tu interés con garantías descontadas. Si logras obtener la Calidad de Miembro "Excelente" podrás participar sin dejar garantías.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">5. ¿Cómo puedo mejorar mi Calidad de Miembro?</h5>
                                <p class="mt-5  "> 
                                   Podrás mejorar tu Calidad de Miembro al participar en subastas, adjudicarte ofertas
                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">6. ¿Cómo puedo saber cuál es mi calidad de miembro?</h5>
                                <p class="mt-5"> Al iniciar sesión podrás ver tu Calidad de Miembro al costado de la cantidad  Puntos VMC en la barra lateral derecha, así como también en el resumen de tu Zona de Miembro. Todo miembro nuevo inicia con calidad “Regular” y 0 puntos VMC.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">7. ¿Puedo perder mi calidad de Miembro?</h5>
                                <p class="mt-5">Sí, al incumplir con tus obligaciones como comprador y al solicitar el congelamiento de tu cuenta perderás tu nivel automáticamente.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">8. ¿Los Puntos VMC tienen caducidad? </h5>
                                <p class="mt-5">ASí, los Puntos VMC tienen una vigencia de 12 meses 
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade " role="tabpanel" aria-labelledby="OfertaVivo-tab" id="OfertaVivo">
                            <div class="content-breadcrumbs-ts">Inicio <span class="icono-breadcrumbs-ts"><i class="fas fa-chevron-right"></i></span>  Preguntas </div>
                            <h1 class="font-weight-bold titulo-estatico-ts">La Oferta “en vivo”: ¿Cómo funciona? (31 preguntas)</h1>
                            <div class="">
                                <h5 class="mt-5 subtitulo-estaticas-ts">1. ¿Qué es una Oferta?  </h5>
                                <p class="mt-5">En VMC le decimos “Oferta” a cada una de las oportunidades de compra publicadas en nuestra en plataforma.
                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">2. ¿Que es una Oferta en Vivo? </h5>
                                <p class="mt-5">Es la evolución tecnológica del proceso de subasta tradicional. <br>
                                Nuestros procesos en vivo  rescatan los principios fundamentales del proceso de subasta presencial, replicándolos en un ambiente digital. Esto nos permite ofrecer un servicio transparente, para que nuestros miembros puedan participar de manera segura desde cualquier dispositivo con conexión a internet.<br>
                                Al publicar una oferta en vivo se propone un precio base, que es el punto de partida desde donde se dará inicio al proceso de puja.<br>
                                Todos los miembros que hayan consignado la garantía solicitada tendrán acceso a la Sala “en vivo”, donde competirán enviando sus pujas en tiempo real el dia y hora indicado en la publicacion de la oferta.
                                El participante que envie la propuesta más alta al cierre de la subasta será declarado ganador.

                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">3. ¿Qué es una propuesta?</h5>
                                <p class="mt-5">“Propuesta” o “Puja”, se refieren a la acción de incrementar el precio en el marco de una subasta al martillo virtual.<br>
                                El proceso de puja, durante la etapa “en vivo”, es la competencia que se establece entre los participantes, quienes al pujar o enviar sus propuestas, promueven un aumento escalonado del precio, por consiguiente, quien ofrece más dinero, gana la oportunidad de adquirir la oferta.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">4. ¿Qué es el Precio Base?</h5>
                                <p class="mt-5">
                                  El precio base es el precio con el que se inicia la competencia en todos procesos publicados en nuestra plataforma. Es a partir del precio base que los participantes, hacen sus propuestas para así tratar de ganar la oferta en la cual están participando.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">5. ¿Qué es el precio de reserva?</h5>
                                <p class="mt-5  "> 
                                   El precio de reserva es el monto mínimo que el vendedor está dispuesto a recibir a cambio de su activo. Es muy importante saber que el precio de reserva es una variable confidencial.
                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">6. ¿Qué pasa si la oferta en vivo cierra por debajo del precio de reserva?</h5>
                                <p class="mt-5"> El ganador es declarado mejor postor y su propuesta pasa a consulta para ser evaluada por el vendedor. Esta evaluación puede tomar hasta 10 días hábiles.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">7. ¿Cuándo inicia la etapa “en vivo”?</h5>
                                <p class="mt-5">Encontrarás la fecha y hora de inicio del proceso “en vivo” en el detalle de la publicación de cada oferta.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">8. ¿Por qué es tan importante que ingrese a la sala “en vivo”? </h5>
                                <p class="mt-5">El proceso “en vivo” es la etapa más importante en una subasta al martillo virtual, es aquí donde los miembros compiten en tiempo real, pujando activamente para resultar como ganador de la oferta
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">9. ¿Cómo ingreso a la SALA “en vivo”? </h5>
                                <p class="mt-5">Podrás ingresar haciendo clic en el botón “Ingresar a sala”, que se activará 5 minutos antes de la hora de inicio de la subasta “en vivo”, en el detalle de cada oferta
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">10. ¿Cuántas veces puedo pujar?</h5>
                                <p class="mt-5">Durante el proceso “en vivo” podrás enviar un número ilimitado de pujas. En la etapa “pre-en vivo” podrás enviar un máximo de 10 propuestas por oferta cada 24 horas.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">11. ¿El incremento de la puja sobre el monto a proponer, siempre es el mismo? </h5>
                                <p class="mt-5">El nivel de puja puede aumentar o disminuir durante el proceso “en vivo”.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">12. La oferta se encuentra “en vivo”, ¿todavía puedo participar en ella?</h5>
                                <p class="mt-5">Siempre que cuentes con saldo o créditos VMC disponibles para cubrir la garantía solicitada, podrás ingresar a la sala siempre y cuando el proceso siga activo.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">13. ¿Cuándo termina el proceso “en vivo”?</h5>
                                <p class="mt-5">El proceso “en vivo” finaliza cuando transcurren 12 segundos desde que se registra la última propuesta válida. Como referencia, el sistema hace una cuenta a tres durante estos 12 segundos, antes de cerrar el proceso. 
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">12. La oferta se encuentra “en vivo”, ¿todavía puedo participar en ella?</h5>
                                <p class="mt-5">Siempre que cuentes con saldo o créditos VMC disponibles para cubrir la garantía solicitada, podrás ingresar a la sala siempre y cuando el proceso siga activo.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">14. El proceso “en vivo” ya terminó ¿Puedo volver a ver el proceso?</h5>
                                <p class="mt-5">Puedes ver la repetición del proceso “en vivo” en tu historial de participación.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">15. ¿Qué significa ganador directo?</h5>
                                <p class="mt-5">Se declara ganador directo al participante que envía la última propuesta válida en un proceso sin Precio de Reserva
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">16. ¿Qué significa mejor postor?</h5>
                                <p class="mt-5">Se considera como mejor postor al participante que envía la última propuesta válida y ésta queda por debajo del precio de reserva.<br>
                                En caso un ganador directo incumpla con alguna de sus obligaciones se declarará mejor postor al participante con la segunda oferta más alta y así sucesivamente.

                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">17. Soy mejor postor, ¿cómo puedo aumentar la posibilidad de adjudicarme la oferta?</h5>
                                <p class="mt-5">Si al terminar el proceso “en vivo” resultas mejor postor, tendrás una oportunidad de mejorar tu propuesta, esto aumentará tus probabilidades que el propietario te brinde la oportunidad de compra.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">18. Si quedo como mejor postor ¿qué pasa con mi garantía?</h5>
                                <p class="mt-5">Esta quedará retenida hasta que el propietario te dé una respuesta. 
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">19. Quedé como mejor postor ¿en cuánto tiempo el propietario da una respuesta?</h5>
                                <p class="mt-5">El vendedor tiene un plazo máximo de 10 días hábiles para poder darte una respuesta. Podrás solicitar la liberación de tu garantía si se cumple el plazo sin recibir una respuesta.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">20. ¿Todas las ofertas cuentan con precio de reserva?</h5>
                                <p class="mt-5">Todas las ofertas cuentan con precio reserva a menos que se indique lo contrarío en el detalle de su publicación.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">21. ¿Qué significa que se retiró la reserva de una oferta?</h5>
                                <p class="mt-5">Si durante el proceso “en vivo” aparece el mensaje “el precio de reserva ha sido retirado” significa que el ganador del proceso se considerará ganador directo.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">22. ¿Qué significa que una oferta se publique sin precio de reserva?</h5>
                                <p class="mt-5">Significa que el participante que envíe la propuesta más alta será considerado ganador directo y por lo tanto se adjudicará la oferta sin necesidad de pasar a consulta.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">23. He resultado ganador directo, ¿qué pasos debo seguir</h5>
                                <p class="mt-5">Para visualizar los pasos a seguir debes ingresar a tu historial de participación desde tu zona de miembro.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">24. ¿Puedo participar desde mi teléfono móvil?</h5>
                                <p class="mt-5">Sí, nuestra plataforma te permite participar desde cualquier tipo de dispositivo móvil que tenga conexión a internet.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">25. ¿Qué es la Cuota Mínima de Participantes?</h5>
                                <p class="mt-5">Es la cantidad mínima de miembros conectados en SALA que se necesitan para dar inicio al proceso “en vivo” a la hora programada.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">26. ¿Cómo ingreso a la sala “en vivo”?</h5>
                                <p class="mt-5">El botón “Ingresa en la sala de ofertas” se activa desde 5 minutos antes de la hora de inicio de la subasta en vivo.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">27. ¿Puedo participar desde mi teléfono móvil?</h5>
                                <p class="mt-5">Sí, debes esperar al inicio de la subasta en vivo para poder enviar ofertas desde tu dispositivo móvil. El acceso a la sala de ofertas se activa 5 minutos antes de la hora de inicio de la subasta en vivo.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">28. ¿Qué es la Cuota Mínima de Participantes?</h5>
                                <p class="mt-5">Es la cantidad mínima de miembros conectados en SALA que se necesitan para dar inicio al proceso “en vivo” a la hora programada.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">29. ¿Cuál es la Cuota Mínima?</h5>
                                <p class="mt-5">En caso de contar con una Cuota Mínima esta se mostrará en el detalle de la publicación de cada oferta. 
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">30. ¿Qué sucede si no se alcanza la Cuota Mínima de Participantes?</h5>
                                <p class="mt-5">Cuando eso suceda, el proceso “en vivo” no dará inicio. En caso de haberse recibido propuestas en la etapa “pre-en vivo” se declarar ganador al participante que envió la propuesta más alta en dicha etapa bajo las condiciones antes expuestas.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">31. ¿Qué significa "Inicio Extendido"?</h5>
                                <p class="mt-5">Significa que se ha extendido el inicio del proceso “en vivo” por 30 segundos adicionales con la finalidad de esperar a más miembros para cumplir así con la cuota mínima de miembros conectados.
                                </p>
                            </div>
                        </div>
                        <div class="tab-pane fade " role="tabpanel" aria-labelledby="OfertaNegociable-tab" id="OfertaNegociable">
                            <div class="content-breadcrumbs-ts">Inicio <span class="icono-breadcrumbs-ts"><i class="fas fa-chevron-right"></i></span>  Preguntas </div>
                            <h1 class="font-weight-bold titulo-estatico-ts">La Oferta Negociable: ¿Cómo funciona? (8 preguntas)</h1>
                            <div class="">
                                <h5 class="mt-5 subtitulo-estaticas-ts">1. ¿Qué significa Oferta Negociable? </h5>
                                <p class="mt-5">Cuando encuentres la etiqueta Oferta Negociable, en una de nuestras publicaciones, significa que podrás negociar directamente con el vendedor del activo para tratar de llegar a un acuerdo de venta beneficioso para ambas partes.
                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">2. ¿Puedo comprar una oferta sin necesidad de negociar con el vendedor?</h5>
                                <p class="mt-5">Claro que sí, toda oferta negociable cuenta con la opción de Compra Inmediata, la cual te da la opción de adquirir la oferta al precio indicado en la publicación, en ese momento.
                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">3. ¿Cómo inicio una negociación?</h5>
                                <p class="mt-5">Para poder iniciar el proceso de negociación con el vendedor, debes ser miembro de nuestra plataforma y contar con valor en cuenta para cubrir la garantía solicitada. Si aún tienes pendiente el registro, haz click <a href="#">aquí.</a></p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">4. ¿Qué es el Precio Base?</h5>
                                <p class="mt-5">
                                   El precio base es el precio con el que se inicia la competencia en todos procesos publicados en nuestra plataforma. Es a partir del precio base que los participantes, hacen sus propuestas para así tratar de ganar la oferta en la cual están participando.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">5. ¿Cuántas propuestas puedo enviar en una negociación?</h5>
                                <p class="mt-5  "> 
                                   La cantidad de propuestas en una negociación es indefinida debido a que depende de cómo se desarrolle la interacción entre el vendedor y el miembro interesado en comprar para llegar a un acuerdo. Es importante que sepas que toda propuesta, tiene una vigencia de 24 hrs. <br>
                                    Cuando una propuesta deja de ser atendida, la negociación concluye, pero tu garantía queda retenida para que puedas reiniciar la negociación con el vendedor.

                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">6. ¿Qué pasa si el vendedor rechaza mi propuesta o yo rechazo la suya?</h5>
                                <p class="mt-5"> Al ser rechazada una propuesta, el proceso de negociación se da por concluido inmediatamente, tu garantía será liberada y la opción de negociar será deshabilitada para esa oferta.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">7. El vendedor ha aceptado mi propuesta, ¿qué hago?</h5>
                                <p class="mt-5">¡Felicitaciones! Has concretado exitosamente el proceso de negociación e iniciarás el proceso de compra, la información sobre los pasos a seguir los podrás ver en tu historial de participación.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">8. ¿Cuándo me devuelven la garantía? </h5>
                                <p class="mt-5">Tu garantía se libera inmediatamente después que el vendedor o tú, rechacen una propuesta o cuando el proceso negociable se concluya.
                                </p>
                            </div>
                        </div>
                         <div class="tab-pane fade " role="tabpanel" aria-labelledby="OfertaVenta-tab" id="OfertaVenta">
                            <div class="content-breadcrumbs-ts">Inicio <span class="icono-breadcrumbs-ts"><i class="fas fa-chevron-right"></i></span>  Preguntas </div>
                            <h1 class="font-weight-bold titulo-estatico-ts">El Historial de participación y todo lo que necesitas saber sobre el proceso de venta (20 preguntas)</h1>
                            <div class="">
                                <h5 class="mt-5 subtitulo-estaticas-ts">1. ¿Qué es mi historial de participación?</h5>
                                <p class="mt-5">Es el histórico de todos los procesos en donde has participado.
                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">2. ¿Cómo accedo a mi historial de participación?</h5>
                                <p class="mt-5">Inicia sesión en tu cuenta VMC y podrás visualizarlo desde tu zona de miembro.
                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">3. He adjudicado una oferta, ¿cuáles son los pasos para seguir?</h5>
                                <p class="mt-5">Cada oferta cuenta con condiciones de compra diferentes por lo que cada adjudicación puede tener diferentes formas y plazos de pago, así como documentación especifica. Las instrucciones se te mostraran a detalle en tu historial de participación.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">4. ¿Cuáles son las etapas del proceso de Adjudicación?</h5>
                                <p class="mt-5">
                                   1: Pago de la comisión y/o Adjuntar la documentación solicitada; <br>
                                    2: Pago de la oferta.        <br>                
                                         
                                    Una vez cumplas las primeras dos etapas se te mostrará la información final del proceso de adjudicación.

                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">5. ¿Qué es la comisión?</h5>
                                <p class="mt-5  "> 
                                   Es un monto que todo miembro adjudicado deberá pagar a VMC Subastas por concepto de uso de sus servicios.
                                </p>
                                <h5 class="mt-5 subtitulo-estaticas-ts">6. ¿Cuánto es la comisión?</h5>
                                <p class="mt-5">Es un porcentaje sobre valor de adjudicación. Este se indica en el detalle de cada oferta.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">7. ¿Cómo pago la comisión?</h5>
                                <p class="mt-5">El monto de la comisión se debita de tu Estado de Cuenta por lo que deberas contar con saldo o Créditos VMC suficientes para cubrir dicha comisión en el plazo definido en las condiciones de compra o perderás tu oportunidad de compra y serás sancionado.</p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">8. Si me falta saldo disponible en mi cuenta VMC, ¿cómo pago la comisión?</h5>
                                <p class="mt-5">Deberás hacer una recarga de saldo.<a href="#"> Aquí</a> encontrarás los pasos a seguir.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">9. Ya pagué la comisión, ¿qué debo hacer?</h5>
                                <p class="mt-5">Debes adjuntar la documentación solicitada por la empresa propietaria en el Historial de Participación.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">10. ¿Qué documentos debo adjuntar?</h5>
                                <p class="mt-5">Debes verificar el Historial de Participación para conocer la documentación solicitada.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">11. Ya pagué la comisión y subí los documentos solicitados, ¿cómo pago la oferta?</h5>
                                <p class="mt-5">Una vez verificado el pago de la comisión y validados los documentos, se te mostrarán las instrucciones de pago del vendedor para que puedas concluir el proceso de adjudicación de la oferta en tu historial de participación.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">12. ¿Puedo usar mi saldo VMC para pagar la oferta?</h5>
                                <p class="mt-5">Tu saldo disponible en tu cuenta VMC solo sirve para consignar garantías y pagar comisiones 
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">13. ¿A quién se le paga el valor de adjudicación?</h5>
                                <p class="mt-5">Siempre le harás el pago directamente al propietario de la oferta adjudicada.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">14. ¿Hay otros pagos adicionales que hacer?</h5>
                                <p class="mt-5">Tendrás que hacerte cargo de los gastos administrativos que puedan surgir al momento de la transferencia de propiedad. En el caso de tener que cubrir otros gastos se te indicará en las condiciones de compra publicadas en el detalle de la oferta.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">15. Si me adjudico una oferta, pero incumplo con el pago, ¿qué pasa?</h5>
                                <p class="mt-5">En este caso se te sanciona, lo que significa que se te inhabilitará durante 7 días calendario y perderás tu calidad de miembro. Adicionalmente deberás pagar nuestra comisión por el uso del servicio para poder seguir utilizando nuestra plataforma. <br>
                                Importante, si incurres en un tercer incumplimiento de tus responsabilidades como comprador de una misma empresa, se te suspenderá de manera permanente para participar en cualquier subasta de esa misma empresa.

                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">16. He quedado en segundo lugar, ¿tengo posibilidades de adjudicarme la oferta?</h5>           
                                <p class="mt-5">Si el ganador incumple sus obligaciones y tu propuesta está por encima del precio reserva se te adjudica automáticamente; en el caso de que esto suceda nos comunicaremos contigo vía correo electrónico para informarte al respecto en un plazo máximo de hasta 10 días hábiles
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">17. Si me dan la oportunidad de compra de una oferta, ¿tengo obligación de compra?</h5>
                                <p class="mt-5">Puedes aceptar la oportunidad o dejarla pasar sin ser sancionado. <br>
                                Importante, si aceptas la oportunidad de compra quedas obligado a cumplir tus responsabilidades como comprador o serás sancionado.

                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">18. De aceptar una oportunidad de compra, ¿qué plazo de pago tengo para pagar?</h5>
                                <p class="mt-5">El plazo de pago se te indicará en tu historial de participación.
                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">19. Necesito mi comprobante de pago (boleta/factura), ¿cómo lo solicito?</h5>
                                <p class="mt-5">En tu historial de participación, encontrarás la opción para poder descargar el comprobante generado por la comisión del uso de nuestro servicio. El comprobante por el monto del valor de adjudicación deberás solicitarlo a la empresa que te vendió la oferta.<br>
                                Importante: solo se emitirá factura a los miembros registrados como personas jurídicas.

                                </p>

                                <h5 class="mt-5 subtitulo-estaticas-ts">20. ¿Puedo saber cuál ha sido el resultado de una subasta?</h5>
                                <p class="mt-5">Los participantes de cada subasta pueden acceder a esta información desde su historial de participación. También puedes ver los resultados <a href="#">aquí.</a>
                                </p>

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

