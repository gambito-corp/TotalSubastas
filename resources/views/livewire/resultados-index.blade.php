		<div>
			<!--Carousel Wrapper-->
			@php
			$productos = App\Producto::all();
			$users = App\User::all();
			@endphp
		</div>

		<!--Indicators
        <ol class="carousel-indicators">
            <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
            <li data-target="#multi-item-example" data-slide-to="1"></li>
        </ol>
      Indicators-->

		<!--Slides-->
		<!-- nav -->
		<div class="col-md col-md-12 mb-3 pl-0 pr-0">
			<nav class="navbar navbar-expand-lg pb-0 pt-0 nav-top_main-content mb-2 border-bottom">
				<a class="navbar-brand text-darken" href="#">Banco fallabella S.A.C</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
					<h2 class="form-inline my-2 my-lg-0 pt-4 pb-4 text-light_darken title-light_darken">
						<i class="fas fa-clock nav-content_text"></i>
						<span class="ml-3"> Mayo 29,7:12 pm</span>
					</h2>
					<article class="ml-3">
						<div class="btn-group btn-group-toggle" data-toggle="buttons">
							<label class="btn btn-light active">
								<i href="#multi-item-example" data-slide="next" class="fas fa-caret-left"></i>
							</label>
							<label class="btn btn-light">
								<i href="#multi-item-example" data-slide="next" class="fas fa-caret-right"></i>
							</label>
						</div>
					</article>
				</div>
			</nav>
		</div>
		<!-- main content -- nr° 1-->

		@foreach ($productos->chunk(3) as $key => $productCollection)
		<!--First slide-->
		@foreach ($productCollection as $product)

		<div class="col-md-4 col-sm-6 border-right col-xs-12 blogBox  moreBox">
			<div class="card mb-4 pub-item_cont">
				<img class="card-img-top rounded" width="100%" height="172" src="{{asset('img/vehiculos/coche.png')}}" alt="Imagen del Vehiculo">
				<div class="card-body justify-content-center">
					<p class="card-text text-center text-to_auction">
						<strong>Subasta</strong><i class="fas fa-bell ml-2"></i>
					</p>
					<p class="card-text text-center title-to_annoucement">
						<strong>CHEVROLET A91/2018</strong>
					</p>
					<div class="align-items-center">
						<div class="btn-group d-flex justify-content-center">
							<a href="{{ url('auction/1') }}" type="button" class="btn btn-sm btn-to_auction rounded-pill text-light">
								<strong><span class="mr-2">$</span>3500 </strong>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
		<!--/.First slide-->
		@endforeach