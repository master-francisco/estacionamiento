@extends('layouts.admin')
@section('content')
<div class="col-sm-7 admin-register">
<ul class="nav nav-tabs" id="myTab">
    <li class="active "><a data-toggle="tab" href="#informacion">Registrar Usuario</a></li>
    <li><a data-toggle="tab" href="#vehiculo">Registrar Vehiculo</a></li>
    <li><a data-toggle="tab"  href="#codigo">Codigo</a></li>
    <li><a data-toggle="tab" href="#informacion-personal">Registrar Información</a></li>
  </ul>
  <div class="tab-content">
    <div id="informacion" class="tab-pane fade in active">
          <div class="col-sm-8">
                <h3>Información General</h3>
            <form method="POST" action="{{ route('create.user')}}">
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
               <div class="form-group{{ $errors->has('email2') ? ' has-error' : '' }}">
                       <label for="email" class="control-label">E-Mail</label>
                       <input id="email2" type="email" class="form-control" name="email2" value="{{ old('email2') }}" required>
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
                   <button type="submit" class="btn btn-primary col-sm-12 col-xs-12 ">Registrar</button>
               </div>
         </form>
    </div>
    </div>
   <div id="vehiculo" class="tab-pane fade">
    <div class="col-sm-8">
  <h3>Información Vehiculo</h3>
<form action="{{route('update.vehicle')}}" method="post">
    {{csrf_field()}}
        <div class="form-group">
            <input type="hidden" name="user_id" id="user_id" value="{{$user_id  ?? ''}}">
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
                <button type="submit" class="btn btn-primary col-sm-12 col-xs-12 changes-vehiculo">Registrar</button>
            </div>
    </form>
</div>
</div>
    <div id="codigo" class="tab-pane fade">
            <div class="col-sm-8 ">
                    <form method="POST" action="{{ route('create.code') }}">
                       {{csrf_field()}}
                       <h3>Codigo</h3>
                   <div class="col-sm-12">
                        <input type="hidden" name="correo" id="correo" value="{{$user_id  ?? ''}}">
                       <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                           <label for="code" class="control-label">Codigo</label>
                           <input id="code" type="text" class="form-control" name="code" value="{{ old('code') }}" required autofocus>
                       
                           @if ($errors->has('code'))
                           <span class="help-block">
                               <strong>{{ $errors->first('code') }}</strong>
                           </span>
                       @endif
                       </div>
                       <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                               <label for="nombre" class="control-label">Nombre</label>
                               <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>
                           
                               @if ($errors->has('nombre'))
                               <span class="help-block">
                                   <strong>{{ $errors->first('nombre') }}</strong>
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
                            <label for="tipo_usuario">Rol</label>
                            <select class="form-control" id="tipo_usuario" name="tipo_usuario">
                             <option selected>Selecciona una opción</option>
                              <option value="USER">Alumno</option>
                              <option value="EDITOR">Guardia</option>
                              <option value="USER">Maestro</option>
                              <option value="ADMIN">Proveedor</option>
                              <option value="USER">Invitado</option>
                            </select>
                          </div>
                       <div class="form-group register">
                           <button type="submit" class="btn btn-primary col-sm-12 col-xs-12 changes-codigo">Registrar</button>
                       </div>
                    </div>
                 </form>
               </div>
    </div>
    <div id="informacion-personal" class="tab-pane fade">
        <div class="col-sm-8">
            <h3>Información adicional</h3>
            <form  method="POST" action="{{route('update.info')}}">
                {{csrf_field()}}
                <div class="form-group">
                        <input type="hidden" name="correo" id="correo" value="{{$user_email  ?? ''}}">
                    <label for="">Carrera</label>
                    <input type="text" class="form-control" id="career" name="career" required>
                </div>
                <div class="form-group">
                        <label for="">Grado</label>
                        <input type="text" class="form-control" id="grade" name="grade" required>
                    </div>
                <div class="form-group">
                        <label for="">Turno</label>
                        <input type="text" class="form-control" id="turn" name="turn" required>
                    </div>
                <div class="form-group">
                        <label for="">Telefono</label>
                        <input type="text" class="form-control" id="number_phone" name="number_phone" required>
                    </div>
                <div class="form-group register">
                        <button type="submit" class="btn btn-primary col-sm-12 col-xs-12 changes-personal">Registrar</button>
                    </div>
            </form>
        </div>
        </div>

   
    </div>
@endsection
<script>
    $('.2').show();
</script>