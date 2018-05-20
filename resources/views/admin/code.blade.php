@extends('layouts.admin')

@section('content')

<div class="col-sm-8 vc">
        <form method="POST" action="{{ route('create.code') }}">
           {{csrf_field()}}
           <h1>Crear Codigo</h1>
       <div class="col-sm-12">
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
               <button type="submit" class="btn btn-primary col-sm-12 col-xs-12">Registrar</button>
           </div>
        </div>
     </form>
   </div>

@endsection