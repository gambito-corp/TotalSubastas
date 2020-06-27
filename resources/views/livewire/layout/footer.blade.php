   <!--Footer-->
   <footer>
        <div class="container">
        <div class="row">
          <div class="col-sm col-8 pt-5 col-md-8 align-self-center col-sm-12 col-xs-12 mb-2 mt-5 ml-sm-auto">
            <article>
              <div class="input-group col-md-8 offset-md-4">
                <input type="text" class="form-control" placeholder="Ingresa tu correo para alerta de oportunidades!"
                  aria-label="Ingresa tu correo para alerta de oportunidades!" aria-describedby="basic-addon2" />
                <div class="input-group-append">
                  <button type="button" class="input-group-text rss-send_email" id="basic-addon2">
                    <i class="fas fa-paper-plane"></i>
                  </button>
                </div>
              </div>
            </article>
          </div>
          <!-- Social Networks -->
          <div class="col-sm col-md-3 ml-md-auto col-4 pt-5 col-sm-12 col-xs-12 mb-2 mt-5">
            <article>
              <article class="social-network_bottom">
                <ul class="nav justify-content-end m-3">
                  <li class="nav-item">
                    <a href=""><i class="fab fa-facebook"></i></a>
                  </li>
                  <li class="nav-item">
                    <a href=""><i class="fab fa-twitter"></i></a>
                  </li>
                  <li class="nav-item">
                    <a href=""><i class="fab fa-instagram"></i></a>
                  </li>
                </ul>
              </article>
            </article>
          </div>
        </div>
        <!-- Bottom footer -->

        <div class="navbar nav-footer shadow-sm pt-5 pb-5">
          <div class="container d-flex justify-content-between text-darken">
            <a href="#" class="navbar-brand d-flex align-items-center">
              <span>Subastas</span>
            </a>
            <a href="FAQS.html" class="navbar-brand d-flex align-items-center">
              <span>Preguntas</span>
            </a>
            <a href="#" class="navbar-brand d-flex align-items-center">
              <span>Condiciones</span>
            </a>
            <a href="#" class="navbar-brand d-flex align-items-center">
              <span>Quienes somos</span>
            </a>
            <a href="#" class="navbar-brand d-flex align-items-center">
              <span>Vender</span>
            </a>
          </div>
        </div>
        </div>
        <!--Footer navbar-->
		<div class="container">
        <nav class="navbar navbar-expand-lg d-flex justify-content-around pt-5 pb-5">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">
                <span class="copyright">&copy;</span>
                <span class="ml-2 copyright">{{date('Y')}} Totalsubastas </span>
                <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ml-5">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">whatsapp</a>
            </li>
            <li class="nav-item ml-5">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Asesoria legal</a>
            </li>
            <li class="nav-item ml-5">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Cont&aacute;ctenos</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0 mr-5 social-network_footer">
           <a href="{{  url('/') }}"> <img src="{{ asset('./assets/img/Logo_front.png') }}"></a>
          </form>
        </nav>
     </div>

      </footer>
