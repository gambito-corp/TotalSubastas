@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <!-- main content -->
        <div class="col-md col-md-12 mt-5">
            <!-- main content -->
        <div class="col-md col-md-12 mt-5 offset-md-3 text-center">
          <div class="col-sm col-sm-12 col-lg-6 p-5 main-container  mt-5">
            <h1 class="font-weight-bold">
             Te ayudamos
            </h1>
            <p>ingresa tu correo electronico y te enviamos un email</p>
          <form>
            <div class="form-group row justify-content-center">
              <div class="col-sm-10">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text bg-light text-light_darken" id="basic-addon1"><i class="fas fa-user"></i></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Correo electronico" aria-label="Username" aria-describedby="basic-addon1">
                </div>
              </div>
            </div>
            <div class="form-group row border-bottom mb-5 pb-5 pt-5">
              <div class="col-sm-12">
                <button type="submit" class="btn btn-primary rounded-pill pt-2 pb-2 pl-5 pr-5">Ingresar</button>
              </div>
            </div>
            <div class="form-group row justify-content-center">
              <div class="col-sm-6">
              <p>Aun no tienes cuenta?</p>
              </div>
              <div class="col-sm-6">
              <a href="./registro.html" class="nav-item">Registrar</a> 
              </div>
            </div>
          </form>
          </div>
        </div>
        </div>
        <!-- Btn -- load more items -->
      <!-- Widgets -->
      <div class="col-md col-12 pt-5 img-focus col-sm-6 col-xs-12 widgets">
        <article>
          <h2 class="ml-5">Credito vehicular</h2>
          <p class="ml-5">
            Te ofrecemos asesoria especializada, si eres cliente de totalsubastas contactanos
          </p>
          <img src="./assets/img/image-368.png" alt="">
          <button class="btn btn-primary rounded-pill mb-5 mr-5 pt-1 pb-1 pr-5 pl-4 border-0">
            Aqu&iacute;
            <!-- font icon-->
          </button>
        </article>
      </div>
      <div class="col-md col-12 pt-5 img-focus col-sm-6 col-xs-12 widgets">
        <article>
          <h2 class="ml-5">Asesoria legal?</h2>
          <p class="ml-5">
            Te ofrecemos asesoria especializada, si eres cliente de totalsubastas contactanos
          </p>
          <img src="./assets/img/image-368-1.png" alt="">
          <button class="btn btn-primary rounded-pill mb-5 mr-5 pt-1 pb-1 pr-5 pl-4 border-0">
            Aqu&iacute;
            <!-- font icon-->
            <i class="fa fa"></i>
          </button>
        </article>
      </div>
      <!--Footer-->
      <footer>
        <div class="row">
          <div class="col-sm col-8 pt-5 col-md-8 align-self-center col-sm-12 col-xs-12 mb-2 mt-5 ml-sm-auto">
            <article>
              <div class="input-group col-md-8 offset-md-6 ">
                <input type="text" class="form-control" placeholder="Ingresa tu correo para alerta de oportunidades!"
                  aria-label="Ingresa tu correo para alerta de oportunidades!" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <span class="input-group-text rss-send_email" id="basic-addon2">
                    <i class="fas fa-paper-plane"></i>
                  </span>
                </div>
              </div>
            </article>
          </div>
          <!-- Social Networks -->
          <div class="col-sm col-md-4 ml-md-auto col-4 pt-5 col-sm-12 col-xs-12 mb-2 mt-5">
            <article>
              <article class="social-network_bottom">
                <ul class="nav justify-content-end m-3 ">
                  <li class="nav-item"><a href=""><i class="fab fa-facebook"></i></a></li>
                  <li class="nav-item "><a href=""><i class="fab fa-twitter"></i></a></li>
                  <li class="nav-item"><a href=""><i class="fab fa-instagram"></i></a></li>
                </ul>
              </article>
            </article>
          </div>
        </div>
        <!-- Bottom footer -->
        <div class="navbar nav-footer shadow-sm pt-5 pb-5">
          <div class="container d-flex justify-content-between ">
            <a href="#" class="navbar-brand d-flex align-items-center">
              <span>Subastas</span>
            </a>
            <a href="#" class="navbar-brand d-flex align-items-center">
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
        <!--Footer navbar-->
        <nav class="navbar navbar-expand-lg d-flex justify-content-around pt-5 pb-5">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">
                <span class="copyright">&copy;</span> <span class="ml-2 copyright">2020 Totalsubastas </span> <span
                  class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item ml-5">
              <a class="nav-link disabled " href="#" tabindex="-1" aria-disabled="true">whatsapp</a>
            </li>
            <li class="nav-item ml-5">
              <a class="nav-link disabled " href="#" tabindex="-1" aria-disabled="true">Asesoria legal</a>
            </li>
            <li class="nav-item ml-5">
              <a class="nav-link disabled " href="#" tabindex="-1" aria-disabled="true">Cont&aacute;ctenos</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0 mr-5 social-network_footer">
            total
          </form>
        </nav>
      </footer>
      <!-- end footer -->
    </div>
    <!-- end row -->
  </div>

@endsection
