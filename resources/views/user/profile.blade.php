@extends('layouts.app')
<?php
$information = App\PersonalInformation::where('email', '=', Auth::user()->email)->first();
if($information == null){
    $information = new App\PersonalInformation;
}
$apartado = App\Space::where('user_id','=',Auth::user()->id)->with(['user.vehicle','spaceInfo'])->first();
?>
<?php 
$vehiculo = App\Vehicle::where('user_id', '=', Auth::user()->id)->first();
if($vehiculo == null){
    $vehiculo = new App\Vehicle;
}
?>
@section('content')
<div class="col-sm-4 perfil">
    <div class="image"></div>
    <div class="image-prof">
        <form action="{{route('image.update')}}" id="avatarForm" method="POST" enctype="multipart/form-data">
          {{csrf_field()}}
          <input type="file" name="image" id="avatarInput">
          <img src="/imagenes/users/{{Auth::user()->image}}" alt="" id="avatarImage">
      </form>
    </div>
    <p class="col-sm-8 col-sm-offset-2">
      {{Auth::user()->name}} {{Auth::user()->surname}}
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
                  <form action="{{route('update.info')}}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="container">
                      <p><strong>Nombre:</strong><a>{{Auth::user()->name}}</a></p>
                    <div id="nombre" class="nombre-input col-sm-4 col-sm-offset-2" id="">
                      <input type="text" id="name" class="form-control" value="{{Auth::user()->name}}" name="name">
                    </div>
                    </div>
                    <div class="container">
                      <p><strong>Apellidos: </strong></span><a>{{Auth::user()->surname}}</a></p>
                      <div class="apellido-input col-sm-4 col-sm-offset-2" id="">
                        <input id="surname" type="text" class="form-control" value="{{Auth::user()->surname}}" name="surname">
                      </div>
                    </div>
                    <div class="container">
                      <p><strong>Carrera: </strong><a>{{$information->career}}</a></p>
                      <div class="carrera-input col-sm-4 col-sm-offset-2" id="">
                        <input id="career" type="text" class="form-control" value="{{$information->career}}" name="career">
                      </div>
                    </div>  
                    <div class="container">
                      <p><strong>Grado: </strong><a>{{$information->grade}}</a></p>
                      <div class="grado-input col-sm-4 col-sm-offset-2" id="">
                        <input id="grade" type="text" class="form-control"  value="{{$information->grade}}" name="grade">
                      </div>
                    </div>  
                    <div class="container">
                        <p><strong>Turno: </strong><a>{{$information->turn}}</a></p>
                        <div class="turno-input col-sm-4 col-sm-offset-2" id="">
                          <input id="turn" type="text" class="form-control"  value="{{$information->turn}}" name="turn">
                        </div>
                      </div> 
                      <div class="container">
                        <p><strong>Telefono: </strong><a>{{$information->number_phone}}</a></p>
                        <div class="number-input col-sm-4 col-sm-offset-2" id="">
                          <input id="number_phone" type="text" class="form-control"  value="{{$information->number_phone}}" name="number_phone">
                        </div>
                      </div> 
                      <hr>
                      <div class="buttons">
                          <button type="submit" class="btn btn-primary ">Actualizar</button> 
                          <button type="button" class="btn btn-danger" id="cancelar">Cancelar</button>
                      </div> 
                    </form>                
                </div>
                <div id="vehiculo" class="tab-pane fade">
                      <a id="show1" class="button pull-right"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Editar</a>
                  <h3>Mi vehiculo</h3>
                  <form action="{{route('update.vehicle')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                  <div class="container">
                    <p><strong>Marca: </strong><a>{{$vehiculo->marca}}</a></p>
                  <div class="marca-input col-sm-4 col-sm-offset-2">
                    <input type="text" class="form-control" name="marca" value="{{$vehiculo->marca}}">
                  </div>
                  </div>
                  <div class="container">
                    <p><strong>Modelo: </strong><a>{{$vehiculo->modelo}}</a></p>
                    <div class="modelo-input col-sm-4 col-sm-offset-2">
                      <input type="text" class="form-control" name="modelo" value="{{$vehiculo->modelo}}">
                    </div>
                  </div>
                  <div class="container">
                    <p><strong>Color: </strong><a>{{$vehiculo->color}}</a></p>
                    <div class="color-input col-sm-4 col-sm-offset-2">
                      <input type="text" class="form-control" name="color" value="{{$vehiculo->color}}">
                    </div>
                  </div>
                  <div class="container">
                    <p><strong>Placas: </strong></span><a>{{$vehiculo->placas}}</a></p>
                    <div class="placas-input col-sm-4 col-sm-offset-2">
                      <input type="text" class="form-control" name="placas" value="{{$vehiculo->placas}}">
                    </div>
                  </div>
                  <div class="container">
                      <p><strong>Año: </strong></span><a>{{$vehiculo->año}}</a></p>
                      <div class="año-input col-sm-4 col-sm-offset-2">
                        <input type="text" class="form-control" name="año"  value="{{$vehiculo->año}}">
                      </div> 
                    </div>
                    <hr>
                    <div class="buttons-vehiculos">
                        <button type="submit" class="btn btn-primary ">Actualizar</button> 
                        <button type="button" class="btn btn-danger" id="cancelar-v">Cancelar</button>
                    </div>
                  </form>        
                </div>
                <div id="reservacion" class="tab-pane fade">
                  <h3>Mis Reservaciones</h3>
                  <div class="container-sr">
                      <img src="../../imagenes/calendar-sr.png" alt="">
                      <div class="container-info">
                          <h1>Sin Reservación</h1>
                      </div>
                      
                    </div>
                    <div class="container-a">
                      <img src="../../imagenes/calendar-a.png" alt="">
                      <div class="container-datos">
                          <h1>En proceso...</h1>
                      </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="container-o">
                            <img src="../../imagenes/calendar-o.png" alt="">
                           <div class="container-datos">
                             <h1>Activo</h1>
                            <p><strong>Placas:</strong>{{$apartado->user->vehicle->placas}}</p>
                            <p><strong>Nombre:</strong>{{$apartado->user->name}}</p>
                            <p><strong>Carro:</strong>{{$apartado->user->vehicle->marca}}</p>                      
                            <p><strong>Color:</strong>{{$apartado->user->vehicle->color}}</p>
                           </div>
                          </div>
                    </div>
                    
                </div>
 </div>
@endsection
