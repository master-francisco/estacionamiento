@extends('layouts.admin')

@section('content')
<div class="col-sm-7 admin-register">
<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#informacion">Registrar Usuario</a></li>
    <li><a data-toggle="tab" href="#informacion-personal">Registrar Información</a></li>
    <li><a data-toggle="tab" href="#codigo">Codigo</a></li>
    <li><a data-toggle="tab" href="#vehiculo">Registrar Vehiculo</a></li>
  </ul>
  
  <div class="tab-content">
    <div id="informacion" class="tab-pane fade in active">
          <div class="col-sm-8">
                <h3>Información General</h3>
            <form method="POST" action="{{ route('create.user') }}">
               {{csrf_field()}}
               <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                   <label for="name" class="control-label">Nombre</label>
                   <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                   @if ($errors->has('name'))
                   <span class="help-block">
                       <strong>{{ $errors->first('name') }}</strong>
                   </span>
               @endif
               </div>
               <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                       <label for="surname" class="control-label">Apellidos</label>
                       <input id="surname" type="text" class="form-control" name="surname" value="{{ old('surname') }}" required autofocus>
                       @if ($errors->has('surname'))
                       <span class="help-block">
                           <strong>{{ $errors->first('surname') }}</strong>
                       </span>
                   @endif
                   </div>
               <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                       <label for="email" class="control-label">E-Mail</label>
                       <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                       @if ($errors->has('email'))
                       <span class="help-block">
                           <strong>{{ $errors->first('email') }}</strong>
                       </span>
                   @endif
               </div>
               <div class="form-group">
                    <label for="">Rol</label>
                    <select class="form-control" id="role" name="role">
                     <option selected>Selecciona una opción</option>
                      <option value="USER">Alumno</option>
                      <option value="EDITOR">Guardia</option>
                      <option value="USER">Maestro</option>
                      <option value="EXT">Proveedor</option>
                      <option value="EXT">Invitado</option>
                    </select>
                  </div>
               <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                   <label for="password" class="control-label">Contraseña</label>
                   <input id="password" type="password" class="form-control" name="password" required>
       
                       @if ($errors->has('password'))
                           <span class="help-block">
                               <strong>{{ $errors->first('password') }}</strong>
                           </span>
                       @endif
               </div>
               <div class="form-group">
                       <label for="password-confirm" class="control-label">Confirma contraseña</label>
                       <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
               </div>
               <div class="form-group register">
                   <button type="submit" class="btn btn-primary col-sm-12 col-xs-12">Registrar</button>
               </div>
         </form>
    </div>
    </div>
    <div id="vehiculo" class="tab-pane fade">
            <div class="col-sm-8">
          <h3>Información Vehiculo</h3>
        <form action="" method="post">
            {{csrf_field()}}
                <div class="form-group">
                    <label for="">Marca</label>
                    <input type="text" class="form-control" name="marca" id="marca" required>
                </div>
                <div class="form-group">
                        <label for="">Modelo</label>
                        <input type="text" class="form-control" name="modelo" id="modelo" required>
                    </div>
                <div class="form-group">
                        <label for="">Color</label>
                        <input type="text" class="form-control" name="color" id="color" required>
                    </div>
                <div class="form-group">
                        <label for="">Placas</label>
                        <input type="text" class="form-control" name="placas" id="placas" required>
                    </div>
                <div class="form-group">
                        <label for="">Año</label>
                        <input type="text" class="form-control" name="año" id="año" required>
                    </div>
                <div class="form-group register">
                        <button type="submit" class="btn btn-primary col-sm-12 col-xs-12">Registrar</button>
                    </div>
            </form>
        </div>
    </div>
    <div id="reservacion" class="tab-pane fade">
      <h3>Mis Reservaciones</h3>
      
    </div>
    </div>
@endsection