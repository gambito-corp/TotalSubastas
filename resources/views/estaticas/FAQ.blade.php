@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
      <div class="jumbotron jumbotron-top_container">
        <div class="container">
          <h1 class="font-weight-bold text-light text-uppercase">
            Preguntas <br> frecuentes
          </h1>
          <p class="text-light text-capitalize">conoce las bases para realizar una subasta correcta!</p>

        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row" id="app">
      <!-- main content -->
      <div class="col-md-3 order-md-1 mb-4  ">
        <div class="text-center ">
          <div class="bg-light-card topics shadow-sm ">
            <div class="card-body myList">
              <p class=" font-weight-bold text-left">T&oacute;picos</p>
              <ul class="nav">
                <li class="nav-link text-darken-flat text-nav_faqs"> <i class="fas fa-file mr-2"> </i> <a class="list-link active" id="list-basicas" data-toggle="list" href="#basicas" role="tab" aria-controls="home">Preguntas basicas</a>
                </li>
                <li class="nav-link text-darken-flat text-nav_faqs"> <i class="fas fa-file mr-2"> </i> <a  class="list-link" id="list-saldo" data-toggle="list" href="#saldo" role="tab" aria-controls="home">Recarga de saldos</a>
                </li>
                <li class="nav-link text-darken-flat text-nav_faqs"> <i class="fas fa-file mr-2"> </i> <a class="list-link" id="list-calidad" data-toggle="list" href="#calidad" role="tab" aria-controls="home">Calidad de miembro</a>
                </li>
                <li class="nav-link text-darken-flat text-nav_faqs"> <i class="fas fa-file mr-2"> </i> <a class="list-link" id="list-comision" data-toggle="list" href="#comision" role="tab" aria-controls="home">Comision</a>
                </li>
                <li class="nav-link text-darken-flat text-nav_faqs"> <i class="fas fa-file mr-2"> </i> <a class="list-link" id="list-subasta" data-toggle="list" href="#subasta" role="tab" aria-controls="home">Subasta del martillo virtual</a>
                </li>
                <li class="nav-link text-darken-flat text-nav_faqs"> <i class="fas fa-file mr-2"> </i><a class="list-link" id="list-historial" data-toggle="list" href="#historial" role="tab" aria-controls="home">Historial de participacion</a>
                </li>
                <li class="nav-link text-darken-flat text-nav_faqs"> <i class="fas fa-file mr-2"> </i><a class="list-link" id="list-penalidades" data-toggle="list" href="#penalidades" role="tab" aria-controls="home">Penalidades</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <p class="mt-5 card-side_faqs">
          ¿ C&oacute;mo subastar ?
        </p>
        <div class="card mt-4 border-0">
          <svg class="bd-placeholder-img card-img-top fluid rounded" width="100%" height="180"
            xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"
            aria-label="Placeholder: Image cap">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6"
              dy=".3em">Image
              cap</text>
          </svg>
          <div class="card-body">
            <p class="card-text">In the essays "Overstating the Arab State", by Nazih Ayubi, and "Is Jordan
              Palestine?",
              by Raphael Israel, the authors deal with the psychologically fragmented postcolonial identity.</p>
          </div>
        </div>
      </div>
      <div class="col-md col-md-9 order-md-2 mt-5">    
        <div class="tab-content">
          <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="basicas-tab" id="basicas">
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
                  <img class="d-flex ml-3" src="/images/pathToYourImage.png" alt="Generic placeholder image">
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
          <div class="tab-pane fade" role="tabpanel" aria-labelledby="saldo-tab" id="saldo">
              <h1 class="font-weight-bold text-capitalize text-dark">Recarga de Saldo</h1>
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
                    <img class="d-flex ml-3" src="/images/pathToYourImage.png" alt="Generic placeholder image">
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
                  <img class="d-flex ml-3" src="/images/pathToYourImage.png" alt="Generic placeholder image">
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
                  <img class="d-flex ml-3" src="/images/pathToYourImage.png" alt="Generic placeholder image">
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
                  <img class="d-flex ml-3" src="/images/pathToYourImage.png" alt="Generic placeholder image">
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
                  <img class="d-flex ml-3" src="/images/pathToYourImage.png" alt="Generic placeholder image">
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
                    <img class="d-flex ml-3" src="/images/pathToYourImage.png" alt="Generic placeholder image">
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
@endsection
@push('scripts')

<script>  
 $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  e.target // newly activated tab
  e.relatedTarget // previous active tab
})


</script>
    
@endpush