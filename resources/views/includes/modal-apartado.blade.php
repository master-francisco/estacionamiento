<?php 
$users = App\User::orderBy('created_at', 'asc')->get();
?>
  <!-- Modal -->
  <div class="modal fade" id="modal_space" tabindex="-1" role="dialog" aria-labelledby="modal_space" aria-hidden="true">
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
          <div class="info">
              <h3>Información sobre el apartado</h3>
            <form action="{{route('update.space')}}" method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
              <div class="form-group">
                <input type="hidden" id="user" name="user">
                <input type="hidden" id="id_lugar" name="id_lugar">
                <label for="">Nombre</label>
                <select class="form-control" id="name" name="name">
                  <option selected disabled>Selecciona una opción</option>
                  @foreach ($users as $user)
                  <option value="{{$user->name}}">{{$user->name}}</option>
                  @endforeach 
                 </select>
              </div>
              <div class="form-group">
                  <label for="">Placas</label>
                  <input type="text" class="form-control" name="placas" id="placas">
                </div>
                <div class="form-group">
                    <label for="">Hora de entrada</label>
                    <div class="input-group clockpicker " data-autoclose="true">
                        <input type="text" class="form-control" id="hora_entrada" value="" name="hora_entrada">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                        </span>
                        </div>
                </div>
                <div class="form-group">
                    <label for="">Hora de salida</label>
                    <div class="input-group clockpicker " data-autoclose="true">
                        <input type="text" class="form-control"  id="hora_salida"  value="" name="hora_salida">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-time"></span>
                        </span>
                        </div>
                </div>
                <div class="form-group">
                        <label for="">Status</label>
                        <select class="form-control" id="status" name="status">
                         <option selected disabled>Selecciona una opción</option>
                          <option value="apartado">Apartado</option>
                          <option value="ocupado">Ocupado</option>
                          <option value="disponible">Disponible</option>
                        </select>
                      </div>
           
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary col-sm-6 col-xs-6 col-sm-offset-3 col-xs-offset-3">Save changes</button>
        </div>
      </form>
      </div>
    </div>
  </div>