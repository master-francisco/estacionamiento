<div class="modal fade" id="modal_user" tabindex="-1" role="dialog" aria-labelledby="modal_user" aria-hidden="true">
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
          <form action="{{route('create.apartado')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
            <p id="info"></p>
            <input type="hidden" name="id" id="id" value="{{Auth::user()->id}}">
            <input type="hidden" name="nombre-lugar" id="nombre-lugar">
            <button type="submit" class="btn btn-success col-sm-12 col-xs-12" id="ap">Apartar</button>
          </form>
        </div>
      </div>
    </div>
  </div>