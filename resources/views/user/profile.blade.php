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
                <li ><a data-toggle="tab" href="#vehiculo">Vehiculo</a></li>
                <li><a data-toggle="tab" href="#reservacion">Mis Reservaciones</a></li>
              </ul>
              
              <div class="tab-content">
                <div id="informacion" class="tab-pane fade in active">
                  <h3>Información Personal</h3>
                    <div class="container">
                      <p><strong>Nombre:</strong><a>{{Auth::user()->name}}</a></p>
                    </div>
                    <div class="container">
                      <p><strong>Apellidos: </strong></span><a>{{Auth::user()->surname}}</a></p>
                    </div>
                    <div class="container">
                      <p><strong>Carrera: </strong><a>{{$information->career}}</a></p>
                    </div>  
                    <div class="container">
                      <p><strong>Grado: </strong><a>{{$information->grade}}</a></p>
                    </div>  
                    <div class="container">
                        <p><strong>Turno: </strong><a>{{$information->turn}}</a></p>
                      </div> 
                      <div class="container">
                        <p><strong>Telefono: </strong><a>{{$information->number_phone}}</a></p>
                      </div>              
              </div>
                <div id="vehiculo" class="tab-pane fade">
                      <h3>Mi vehiculo</h3>
                  <div class="container">
                    <p><strong>Marca: </strong><a>{{optional($vehiculo)->marca}}</a></p>
                  </div>
                  <div class="container">
                    <p><strong>Modelo: </strong><a>{{optional($vehiculo)->modelo}}</a></p>
                  </div>
                  <div class="container">
                    <p><strong>Color: </strong><a>{{optional($vehiculo)->color}}</a></p>
                  </div>
                  <div class="container">
                    <p><strong>Placas: </strong></span><a>{{optional($vehiculo)->placas}}</a></p>
                  </div>
                  <div class="container">
                      <p><strong>Año: </strong></span><a>{{optional($vehiculo)->año}}</a></p>
                    </div> 
                  </div>
                <div id="reservacion" class="tab-pane fade">
                    @if(optional($apartado)->status == null && optional($apartado)->user_id != Auth::user()->id)
                  <h3>Mis Reservaciones</h3>
                  <div class="container-sr">
                      <img src="../../imagenes/calendar-sr.png" alt="">
                      <div class="container-info">
                          <h1>Sin Reservación</h1>
                      </div>
                    </div>
                    @elseif(optional($apartado)->status == null && optional($apartado)->user_id == Auth::user()->id)
                    <div class="container-a">
                      <img src="../../imagenes/calendar-a.png" alt="">
                      <div class="container-datos">
                          <h1>En proceso...</h1>
                      </div>
                    </div>
                    @elseif(apartado($apartado)->status == 'activo' && optional($apartado)->user_id == Auth::user()->id)
                    <div class="col-sm-6">
                        <div class="container-o">
                            <img src="../../imagenes/calendar-o.png" alt="">
                           <div class="container-datos">
                             <h1>Activo</h1>
                            <p><strong>Placas:</strong>{{optional(optional(optional($apartado)->user)->vehicle)->placas}}</p>
                            <p><strong>Nombre:</strong>{{optional(optional($apartado)->user)->name}}</p>
                            <p><strong>Carro:</strong>{{optional(optional(optional($apartado)->user)->vehicle)->marca}}</p>                      
                            <p><strong>Color:</strong>{{optional(optional(optional($apartado)->user)->vehicle)->color}}</p>
                           </div>
                          </div>
                    </div>
                    @endif
                </div>
                
 </div>
@endsection
