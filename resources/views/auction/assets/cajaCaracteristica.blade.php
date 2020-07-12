<div class="col-md col-md-12 col-lg-12   mt-0 pt-2 data_sheet-d">
  <div class="row">
    <div class="col-12 col-md-4 col-sm-12 col-xs-12 pl-0 pb-0">
      <div class="nav flex-column data_sheet-menu nav-pills" id="v-pills-tab" role="tablist"
        aria-orientation="vertical">
        <a class="font-weight-bold border-bottom text-center p-3 text-uppercase">Caracteristicas</a>
        <a class="d-sheet_link border-bottom  pb-5 active" id="v-pills-home-tab" data-toggle="pill"
          href="#v-pills-resumen" role="tab" aria-controls="v-pills-home" aria-selected="true">resumen
          <br> <img src="{{asset('assets/img/Trazado 1851.svg')}}" alt="" srcset="">
        </a>
        <a class="d-sheet_link border-bottom pb-5 " id="v-pills-ficha_tecnica-tab" data-toggle="pill"
          href="#v-pills-ficha_tenica" role="tab" aria-controls="v-pills-ficha_tecnica"
          aria-selected="false">ficha tecnica<br> <img src="{{asset('assets/img/Trazado 1841.svg')}}" class="" alt=""
            srcset=""></a>
        <a class="d-sheet_link border-bottom pb-5 " id="v-pills-equipamiento-tab" data-toggle="pill"
          href="#v-pills-equipamiento" role="tab" aria-controls="v-pills-equipamiento"
          aria-selected="false">equipamiento <br> <img src="{{asset('assets/img/Trazado 1832.svg')}}" class="" alt=""
            srcset=""></a>
        <a class="d-sheet_link border-bottom pb-5 " id="v-pills-otros-tab" data-toggle="pill"
          href="#v-pills-otros" role="tab" aria-controls="v-pills-otros" aria-selected="false">otros<br>
          <img src="{{asset('assets/img/Trazado 1850.svg')}}" class="" alt="" srcset=""></a>
        <a class="d-sheet_link pb-5 " id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
          role="tab" aria-controls="v-pills-settings" aria-selected="false">observaciones<br> <img
            src="{{asset('assets/img/Trazado 1835.svg')}}" class="" alt="" srcset=""></a>
      </div>
    </div>
    <div class="col-8 pt-3 p-4 pr-2">
      <div class="tab-content" id="v-pills-tabContent" data-spy="scroll" data-target="#v-pills-tab">
        <div class="tab-pane fade show active" id="v-pills-resumen" role="tabpanel"
          aria-labelledby="v-pills-resumen-tab">
          <p>
            {!!'lo que determina el consumo de combustible de una moto, esta dado principalmente por el
            tamaÃƒÂ±o de su
            motor, el peso general de la moto y el tipo
            de conducciÃ³n que mantenga el piloto. En leo 110, los dos primeros factores estan a favor de un
            excelente rendimiento de combustible, que sumados
            a una conducciÃ³n tranquila, permiten entregar una autonomia aproximada de 165 km. con su toque
            de 0.92 galones a tope'!!}
          </p>

          <div class="row">
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Kilometraje</strong> <br>
              @isset($detalle->kilometraje)
                <small>{{$detalle->kilometraje}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Combustible</strong> <br>
              @isset($vehiculo->Combustible)
                <small>{{$vehiculo->Combustible}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i> 
              <strong>Ubicacion</strong> <br>
                @isset($detalle->Ubicacion)
                <small>{{$detalle->Ubicacion}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Marca</strong> <br>
              @isset($vehiculo->Marca->nombre)
                <small>{{$vehiculo->Marca->nombre}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i> 
              <strong>Modelo</strong>
              <br>
              @isset($vehiculo->Modelo->nombre)
                <small>{{$vehiculo->Marca->nombre}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i> 
              <strong>Año</strong> <br>
                @isset($vehiculo->year)
                <small>{{$vehiculo->year}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i> 
              <strong>Nombre</strong>
              <br>
              @isset($vehiculo->nombre)
                <small>{{$vehiculo->nombre}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i> 
              <strong>Color</strong>
              <br>
              @isset($vehiculo->color)
                <small>{{$vehiculo->color}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Placa</strong> <br>
              @isset($vehiculo->placa)
                <small>{{$vehiculo->placa}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="v-pills-ficha_tenica" role="tabpanel"
          aria-labelledby="v-pills-ficha_tecnica">          
          <div class="row">
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Traccion</strong> <br>
              @isset($detalle->traccion)
                <small>{{$detalle->traccion}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Torque</strong> <br>
              @isset($vehiculo->torque)
                <small>{{$vehiculo->torque}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i> 
              <strong>Pontencia</strong> <br>
                @isset($detalle->potencia)
                <small>{{$detalle->potencia}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Cilindrada</strong> <br>
              @isset($vehiculo->cilindrada)
                <small>{{$vehiculo->cilindrada}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i> 
              <strong>Velocidades</strong>
              <br>
              @isset($vehiculo->velocidades)
                <small>{{$vehiculo->velocidades}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i> 
              <strong>Version</strong> <br>
                @isset($vehiculo->version)
                <small>{{$vehiculo->version}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i> 
              <strong>Timon</strong>
              <br>
              @isset($vehiculo->timon)
                <small>{{$vehiculo->timon}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>            
          </div>
        </div>
        <div class="tab-pane fade" id="v-pills-equipamiento" role="tabpanel"
          aria-labelledby="v-pills-equipamiento-tab">          
          <div class="row">
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Neumaticos</strong> <br>
              @isset($detalle->neumaticos)
                <small>{{$detalle->neumaticos}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Airbag</strong> <br>
              @isset($vehiculo->airbag)
                <small>{{$vehiculo->airbag}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i> 
              <strong>Aros</strong> <br>
                @isset($detalle->aros)
                <small>{{$detalle->aros}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Lunas</strong> <br>
              @isset($vehiculo->lunas)
                <small>{{$vehiculo->lunas}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i> 
              <strong>Gps</strong>
              <br>
              @isset($vehiculo->gps)
                <small>{{$vehiculo->gps}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i> 
              <strong>Asientos</strong> <br>
                @isset($vehiculo->asientos)
                <small>{{$vehiculo->asientos}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="v-pills-otros" role="tabpanel" aria-labelledby="v-pills-otros-tab">
          <div class="row">
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Bluetooth</strong> <br>
              @isset($detalle->bluetooth)
                <small>{{$detalle->bluetooth}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Radio</strong> <br>
              @isset($vehiculo->amfm)
                <small>{{$vehiculo->amfm}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i> 
              <strong>Reproductor</strong> <br>
                @isset($detalle->cd)
                <small>{{$detalle->cd}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Soporte de Tarjeta</strong> <br>
              @isset($vehiculo->sd)
                <small>{{$vehiculo->sd}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i> 
              <strong>Audio Aux</strong>
              <br>
              @isset($vehiculo->aux)
                <small>{{$vehiculo->aux}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i> 
              <strong>Entrada USB</strong> <br>
                @isset($vehiculo->usb)
                <small>{{$vehiculo->usb}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i> 
              <strong>Tapizado</strong>
              <br>
              @isset($vehiculo->tapizado)
                <small>{{$vehiculo->tapizado}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i> 
              <strong>Alarma</strong> <br>
                @isset($vehiculo->alarma)
                <small>{{$vehiculo->alarma}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i> 
              <strong>Faros Neblineros</strong>
              <br>
              @isset($vehiculo->neblineros)
                <small>{{$vehiculo->neblineros}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i> 
              <strong>Sensores</strong> <br>
                @isset($vehiculo->sensores)
                <small>{{$vehiculo->sensores}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
          aria-labelledby="v-pills-settings-tab">
          <strong>Estado del Vehiculo</strong>
          <br>
          @isset($vehiculo->estado_vehiculo)
                {!!$vehiculo->estado_vehiculo!!}
              @else
                <small>Sin Datos en la BD</small>
              @endisset
          <div class="row">
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Saneado</strong> <br>
              @isset($vehiculo->saneado)
                <small>{{$vehiculo->saneado}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>Captura</strong> <br>
              @isset($vehiculo->captura)
                <small>{{$vehiculo->captura}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i> 
              <strong>Seguro</strong> <br>
              @isset($vehiculo->seguro)
                <small>{{$vehiculo->seguro}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i>
              <strong>SOAT</strong> <br>
              @isset($vehiculo->soat)
                <small>{{$vehiculo->soat}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
            <div class="w-100"></div>
            <div class="col mt-4"><i class="fas fa-check-circle text-primary"></i> 
              <strong>RTV</strong> <br>
              @isset($vehiculo->rtv)
                <small>{{$vehiculo->rtv}}</small>
              @else
                <small>Sin Datos en la BD</small>
              @endisset
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>