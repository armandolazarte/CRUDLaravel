
    <div class="modal fade bd-example-modal-md" tabindex="-1" role="dialog" data-bs-backdrop="static" data-keyboard="false" aria-labelledby="modalCrearCosto" id="modalCrearCosto" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title h5" >Nuevo costo</p>
                    
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

                </div>
                
                <div class="modal-body">
                    <form method="POST" id="formularioCrearCostoModal" >
                        @csrf
                        

                        <div class="row">
                            <div class="form-group col-md-12" >
                                <label  class="col-form-label" for="costoCrear">Cantidad <span title="Campo obligatorio" class="requerido"> * </span></label>
                                <input type="text" class="form-control form-control-md" size="100" maxlength="50" style="width: 100%" name="costo" id="costoCrear"  required="true" autocomplete="off">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12" >
                                <label  class="col-form-label" for="fechaCrear">Inicio de vigencia<span title="Campo obligatorio" class="requerido"> * </span></label>
                                <input type="text" class="form-control form-control-md" size="100" maxlength="100" style="width: 100%" name="fecha" id="fechaCrear"  required="true" autocomplete="off">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-12">
                                <label  class="col-form-label" for="descripcionCrear">Descripción del costo <span title="Campo obligatorio" class="requerido"> * </span></label> 
                                <textarea name="descripcion" id="descripcionCrear"  required="true" class="form-control form-control-md" maxlength="100" rows="3" cols="20"></textarea>
                            </div>
                        </div>
                    </form>
                    <label ><small> <span title="Campos obligatorios" class="requerido"> * </span>Campos obligatorios </small></label>
                </div>
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm mt-0" data-bs-dismiss="modal"><i class="far fa-times-circle"></i>&nbsp;Cerrar</button>
                    
                    <button type="submit" class="btn btn-primary btn-sm mt-0" form="formularioCrearCostoModal" id="btn_guardarCreacion"><i class="far fa-save"></i> Guardar </button>
                </div>
            </div>
        </div>
    </div>
