      <!-- slider -->
      <div class="top-slide pl-0 pr-0 pt-5 mb-2 col-md-12 col-sm-12 col-xs-12">
        <div class="a pl-0 pr-0 col-md-12">
          <div id="FirstSlide" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              @forelse($data as $dat)

              <li data-target="#FirstSlide" data-slide-to="0" class="active"></li>
              @empty

              @endforelse
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active" data-interval="100000">

                <span class="text-light pt-1 live-today">
                  Hoy
                </span>

                <article class="top-slide_carousel-item-a">
                  <figure class="heading-carousel_top ">
                    <!-- slider item carousel logo fallabella -->
                    <img class="mb-2 logo_top-slide-sg_falabella" src="./assets/img/image-207.png" alt="">
                    <h5 class="">Saga Falabella {{$dat}}</h5>
                    <p class="date_top-slide-sg_falabella">20.05.20</p>
                  </figure>
                  <figure class="heading-carousel ">
                    <h1 class="text-uppercase">
                      Gran subasta <br />
                      10 activos <br />podran ser tuyos
                    </h1>
                    <button class="btn btn-primary  rounded-pill carousel-btn-look_lote">
                      <span><i class="fas fa-image ml-2 mr-4"></i></span>
                      Ver lote
                      <span class="badge ml-4 badge-button_count_slide">10</span>
                    </button>
                  </figure>
                </article>
                <!-- slider item carousel nr° 1 -->
                <img class="carousel-item-a_imagen" src="./assets/img/image-205.png" height="499px" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item" data-interval="2000">
                <!-- slider item carousel nr° 2 -->
                <img src="..." height="499px" class="d-block w-100" alt="..." />
              </div>
              <div class="carousel-item">
                <!-- slider item carousel nr° 3 -->
                <img src="..." height="499px" class="d-block w-100" alt="..." />
              </div>
            </div>




          </div>
        </div>
        <div class="b ml-3 pl-5 pt-5 d-none d-sm-none d-md-block col-md-12">
          <div class="row">
            <div class="col-md-5">
              <article>
                <p class="carousel-text_item_b-top">como subastar?</p>
                <h2 class="carousel-text_item_b">
                  Te enseñamos a Subastar
                </h2>
                <p class="carousel-text_item_b-text">
                  Encuentra oportunidades de ingreso, o a lo mejor un gran
                  auto
                </p>
                <p class="carousel-text_item_b-text">para ti y tu familia</p>
                <button class="btn btn-to_buy text-light pr-4 pl-4 rounded-pill bt-sm carousel-btn_text-success">
                  conoce +
                </button>
              </article>
            </div>
            <div class="col-md-6 d-flex justify-content-center top-slide_carousel-item-b">
              <div class="oval"></div>

              <img src="./assets/img/kiara-png-kiara-clipart-png-298.png" alt="">
            </div>
          </div>
        </div>
        <div class="c ml-3 mt-3 d-none d-sm-none d-md-block">
          <article class="">
            <strong class="text-light d-flex justify-content-center pt-3 pl-3 pr-2">Documentación a la mano de cada
              subasta</strong>
            <p
              class="text-light d-flex justify-content-center pt-2 pr-2 border-bottom pl-2 pr-2 pb-2 text-doc_saga-fallabella">
              PDF, 125 MB, Sep 8 at 2:03 pm
            </p>
            <span class="d-flex justify-content-center text-light pb-3">
              <svg class="bi bi-download  mt-1 mr-2 fa-download" width="16px" height="16px" viewBox="0 0 16 16"
                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                  d="M.5 8a.5.5 0 0 1 .5.5V12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V8.5a.5.5 0 0 1 1 0V12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8.5A.5.5 0 0 1 .5 8z">
                </path>
                <path fill-rule="evenodd"
                  d="M5 7.5a.5.5 0 0 1 .707 0L8 9.793 10.293 7.5a.5.5 0 1 1 .707.707l-2.646 2.647a.5.5 0 0 1-.708 0L5 8.207A.5.5 0 0 1 5 7.5z">
                </path>
                <path fill-rule="evenodd" d="M8 1a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0v-8A.5.5 0 0 1 8 1z"></path>
              </svg>
              <span class="f-500">Download</span></span>
          </article>
        </div>
        <div class="d mt-3 ml-3 d-none d-sm-none d-md-block">
          <strong class="text-light d-flex justify-content-start pl-3 pt-3">Regalamos 20$</strong>
          <p class="text-light d-flex justify-content-start pl-3">
            Para tu primera oferta
          </p>
          <div class="input-group mb-3 no-border border-0 pr-3 pl-3">
            <input type="text" class="form-control" placeholder="Ingresa tu email" aria-label="Recipient's username" aria-describedby="button-addon2">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary border-0 bg-light" type="button" id="button-addon2">
                <i class="fas fa-paper-plane text-primary"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      