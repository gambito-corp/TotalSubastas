@livewire('auctions')
<div class="col-6 text-center">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable"
                    data-whatever="@mdo">Open modal for @mdo</button>
                <div class="modal fade " id="exampleModalScrollable" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalScrollableTitle" aria-modal="true">
                    <div class="modal-dialog modal-dialog-scrollable">
                        <div class="modal-content">
                            <div class="modal-header border-0 border-0 pr-5">
                                <h5 class="modal-title" id="exampleModalScrollableTitle"></h5>
                                <button type="button" class="close close-modal " data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <article class="text-center p-5">
                                    <h4 class="text-uppercase font-weight-bold text-italic">Debes iniciar sesión para
                                        poder
                                        participar</h4>
                                    <p class=" text-popup  ">Si ya tienes cuenta puedes ingresar aquí, en su defecto
                                        create una cuenta
                                        y empieza a encontrar oportunidades</p>
                                    <button type="button" class="btn btn-primary rounded-pill">Registrar</button>
                                </article>
                            </div>
                            <!--  <div class="modal-footer">
                                <button.blade.php type="button.blade.php" class="btn btn-secondary" data-dismiss="modal">Close</button.blade.php>
                                <button.blade.php type="button.blade.php" class="btn btn-primary">Save changes</button.blade.php>
                            </div>  -->
                        </div>
                    </div>
                </div>
            </div>
