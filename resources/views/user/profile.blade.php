@extends('layouts.app')
@section('content')
<div class="col-sm-4 perfil">
    <div class="image"></div>
    <div class="image-prof">
        <form action="{{url('/user/profile')">
          <input type="file" name="image" id="avatarInput" style="display:none;">
        </form>
        <img src="../../imagenes/users/avatar.jpg" alt="" id="avatarImage">
    </div>
    <p class="col-sm-8 col-sm-offset-2">
      José Francisco Sedano Cruz
    </p>
</div>
 <div class="col-sm-7 principal">
        <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#informacion">Información</a></li>
                <li><a data-toggle="tab" href="#vehiculo">Vehiculo</a></li>
                <li><a data-toggle="tab" href="#reservacion">Mis Reservaciones</a></li>
              </ul>
              
              <div class="tab-content">
                <div id="informacion" class="tab-pane fade in active">
                        <a class="button pull-right"  id="show"> <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</a>
                  <h3>Información Personal</h3>
                    <div class="container">
                      <p><strong>Nombre: </strong></p>
                    <div id="nombre" class="nombre-input col-sm-4 col-sm-offset-2" id="">
                      <input type="text" class="form-control" name="name">
                    </div>
                    </div>
                    <div class="container">
                      <p><strong>Apellidos: </strong></span></p>
                      <div class="apellido-input col-sm-4 col-sm-offset-2" id="">
                        <input type="text" class="form-control" name="surname">
                      </div>
                    </div>
                    <div class="container">
                      <p><strong>Carrera: </strong></p>
                      <div class="carrera-input col-sm-4 col-sm-offset-2" id="">
                        <input type="text" class="form-control" name="carrera">
                      </div>
                    </div>  
                    <div class="container">
                      <p><strong>Grado: </strong></p>
                      <div class="grado-input col-sm-4 col-sm-offset-2" id="">
                        <input type="text" class="form-control" name="grado">
                      </div>
                    </div>  
                    <div class="container">
                        <p><strong>Turno: </strong></p>
                        <div class="turno-input col-sm-4 col-sm-offset-2" id="">
                          <input type="text" class="form-control" name="turno">
                        </div>
                      </div> 
                      <hr>
                      <div class="buttons">
                          <button type="submit" class="btn btn-primary ">Actualizar</button> 
                          <button type="button" class="btn btn-danger" id="cancelar">Cancelar</button>
                      </div>                 
                </div>
                <div id="vehiculo" class="tab-pane fade">
                      <a id="show1" class="button pull-right"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</a>
                  <h3>Mi vehiculo</h3>
                  <div class="container">
                    <p><strong>Marca: </strong></p>
                  <div class="marca-input col-sm-4 col-sm-offset-2">
                    <input type="text" class="form-control" name="marca">
                  </div>
                  </div>
                  <div class="container">
                    <p><strong>Modelo: </strong></p>
                    <div class="modelo-input col-sm-4 col-sm-offset-2">
                      <input type="text" class="form-control" name="modelo">
                    </div>
                  </div>
                  <div class="container">
                    <p><strong>Color: </strong></p>
                    <div class="color-input col-sm-4 col-sm-offset-2">
                      <input type="text" class="form-control" name="color">
                    </div>
                  </div>
                  <div class="container">
                    <p><strong>Placas: </strong></span></p>
                    <div class="placas-input col-sm-4 col-sm-offset-2">
                      <input type="text" class="form-control" name="placas">
                    </div>
                  </div>
                  <div class="container">
                      <p><strong>Año: </strong></span></p>
                      <div class="año-input col-sm-4 col-sm-offset-2">
                        <input type="text" class="form-control" name="año">
                      </div> 
                    </div>
                    <hr>
                    <div class="buttons-vehiculos">
                        <button type="submit" class="btn btn-primary ">Actualizar</button> 
                        <button type="button" class="btn btn-danger" id="cancelar-v">Cancelar</button>
                    </div>        
                </div>
                <div id="reservacion" class="tab-pane fade">
                  <h3>Mis Reservaciones</h3>
                  <div class="container sr">
                      <img src="../../imagenes/calendar-sr.png" alt="">
                      <strong>Sin Reservación</strong>
                    </div>
                </div>
 </div>
@endsection
