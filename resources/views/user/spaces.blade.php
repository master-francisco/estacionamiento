@extends('layouts.app')

@section('content')

<div class="col-sm-7">
    <form action="" method="post">
        <div class="input-group clockpicker">
            <input type="text" class="form-control" value="" name="">
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-time"></span>
            </span>
            </div>
    </form>
</div>

@endsection
<button type="button" id="modal" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          <h3>Información sobre el apartado</h3>
          <p><strong>Nombre:</strong><a class="datos">Miriam Yarazeth Becerra Real </a></p>
          <p><strong>Placas:</strong><a class="datos">JDF-96-45</a></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>