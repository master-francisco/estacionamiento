<div class="modal fade" id="modal_codigo" tabindex="-1" role="dialog" aria-labelledby="modal_codigo" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <img src="../../imagenes/log.png" alt="">
              <img src="../../imagenes/nombre.png" alt="" class="nombre">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <h3>Ingresa el código</h3>
                  <form action="" method="get">
                  <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                    <label for="">Codigo</label>
                    <input type="text" class="form-control" name="code" id="code" placeholder="Ingresa tu código" required>
                    @if ($errors->has('code'))
                    <span class="help-block">
                        <strong>{{ $errors->first('code') }}</strong>
                    </span>
                @endif  
                </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-primary col-sm-6 col-xs-6 col-sm-offset-3 col-xs-offset-3">Save changes</button>
            </div>
        </form>
          </div>
        </div>
      </div>
</div>