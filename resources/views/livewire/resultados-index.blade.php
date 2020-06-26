		<div>
			<!--Carousel Wrapper-->
			@php
			use Hashids\Hashids;
			$productos = App\Producto::all();
			$users = App\User::all();
			$hashids = new Hashids();
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
		
		@include ('home.assets.filtroBarra')
		<!-- main content -- nr° 1-->
		@foreach ($productos->chunk(3) as $key => $productCollection)
		<!--First slide-->
		@foreach ($productCollection as $product)
		<div class="col-md-4 col-sm-6 border-right col-xs-12 blogBox  moreBox">
			<div class="card mb-4 pub-item_cont">
				<img class="card-img-top rounded" width="100%" height="172" src="{{ asset('img/vehiculos/coche.png') }}" alt="Imagen del Vehiculo">
				<div class="card-body justify-content-center">
					<p class="card-text text-center text-to_auction">
						<strong>Subasta</strong><i class="fas fa-bell ml-2"></i>
					</p>
					<p class="card-text text-center title-to_annoucement">
						<strong>{{ $product->producto }}</strong>
					</p>
					<div class="align-items-center">
						<div class="btn-group d-flex justify-content-center">
						<a href=" auction/id/{{ $hashids->encode($product->id, 0,1,2,3,4,5,6) }}" type="button" class="btn btn-sm btn-to_auction rounded-pill text-light">
							<strong><span class="mr-2">$</span>{{ $product->precio }}</strong>
						</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
		<!--/.end products fetch-->
		@endforeach
	