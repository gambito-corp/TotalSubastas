@if(count($referidos) > 0)
<div class="container d-flex justify-content-center">
    <div class="row margin-row main-container  mt-5 mb-5 ">
      <!-- nav -->
      <div class="col col-md-12 col-sm-12 mb-3  pl-0 pr-0">
        <nav class="navbar navbar-expand-lg pb-0 pt-0 nav-top_main-content mb-2 border-bottom">

          <a class="navbar-brand text-darken" href="#">{{$empresa}}</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
            aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
            <h2 class="form-inline my-2 my-lg-0 pt-4 pb-4 text-light_darken title-light_darken">
              <i class="fas fa-clock nav-content_text"></i>
              <span class="ml-3"> {{$fecha}}</span>
            </h2>
            <article class="ml-3">
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-light active">
                  <i class="fas fa-caret-left"></i>
                </label>
                <label class="btn btn-light">
                  <i class="fas fa-caret-right"></i>
                </label>
              </div>
            </article>
          </div>
        </nav>
      </div>
      <!-- main content -- nr° 2-->
        @forelse($referidos as $dato)
            <div class="col col-md-3 col-sm-6 border-right col-xs-6">
                <div class="card mb-3 pub-item_cont ">
                    <div class="image-subasta">
                        @isset($dato->imagen)
                            @include('assets.imagen', ['carpeta' => 'producto', 'id' => $dato->id, 'ancho' => '70', ])
                        @endisset
                    </div>
                <div class="card-body justify-content-center">
                    <p class="card-text text-center text-to_auction {{$dato->tipo_subasta == 'Compra'? 'text-success':''}}">
                        <strong>{{$dato->tipo_subasta}}</strong><i class="fas fa-bell ml-2"></i>
                    <p class="card-text text-center title-to_annoucement">
                        <strong>{{$dato->nombre}}</strong>
                    </p>
                    <div class="align-items-center btn_auction">
                        <div class="btn-group d-flex justify-content-center">
                            @if($dato->tipo_subasta == 'Compra')
                                {{--cambiar a compra cuando la vista este habilitada--}}
                                <a href="{!!route('subastaOnline', ['id' => \App\Helpers\Gambito::hash($dato->id)])!!}">
                            @else
                                <a href="{!!route('subastaOnline', ['id' => \App\Helpers\Gambito::hash($dato->id)])!!}">
                            @endif
                                <button type="button" class="btn btn-sm  rounded-pill text-light  {{$dato->tipo_subasta == 'Compra'? 'btn-success':'btn-to_auction'}} btn-subasta">
                                    <strong><span class="mr-2">$</span>{{$dato->precio}} </strong>
                                    <i class="fa fa-long-arrow-right  ml-2" aria-hidden="true"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
        </div>
      </div>
        @empty
      <div class="col col-md-3 border-right col-sm-6 col col-xs-6">
        <div class="card mb-4 pub-item_cont">
          <img src="{{asset('./assets/img/auctions/image-166.png')}}" alt="">
          <div class="card-body justify-content-center">
            <p class="card-text text-center text-to_buy">
              <strong>comprar ya</strong>
              <i class="fas fa-shopping-cart ml-2"></i>
            </p>
            <p class="card-text text-center title-to_annoucement">
              <strong>CHEVROLET A91/2018</strong>
            </p>
            <div class="align-items-center">
              <div class="btn-group  btn_auction  d-flex justify-content-center">
                <button type="button" class="btn btn-sm btn-to_buy rounded-pill text-light">
                  <strong><span class="mr-2">$</span>3500 </strong>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
        @endforelse
      </div>
    </div>
  </div>
@endif
