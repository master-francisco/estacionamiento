@extends('layouts.admin')
@section('content')
<div class="main">
		<section>
        <div class="wizard">
            <div class="wizard-inner">
                <div class="connecting-line"></div>
                <ul class="nav nav-tabs" role="tablist">

                    <li role="presentation" class="active">
                        <a href="#informacion" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                            <span class="round-tab">
                                <i class="glyphicon glyphicon-user"></i>
                            </span>
                        </a>
                    </li>

                    <li role="presentation" class="disabled">
                        <a href="#informacion-personal" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                            <span class="round-tab">
                                <i class="fa fa-users fa-lg"></i>
                            </span>
                        </a>
                    </li>
                    <li role="presentation" class="disabled">
                        <a href="#vehicle" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                            <span class="round-tab">
                                <i class="fa fa-car fa-lg"></i>
                            </span>
                        </a>
                    </li>

                </ul>
            </div>

                <div class="tab-content">
                    <div class="tab-pane active" role="tabpanel" id="informacion">
                <h3>Información General</h3>
            <form method="POST" action="{{ route('update.user',,['id'=>$user->id])}}">
               {{csrf_field()}}
               <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                   <label for="name" class="control-label">Nombre</label>
                   <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}">
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
                   <button type="submit" class="btn btn-primary col-sm-10 col-xs-10 submit-r" id="submit-r">Registrar</button>
                   <button type="button" class="btn btn-primary col-sm-1 col-xs-1 next-step">Avanzar<span><i class="fa fa-caret-right"></i></span></button>
               </div>
         </form>
                    </div>
                    <div class="tab-pane" role="tabpanel" id="informacion-personal">
                    
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
                                    <button type="submit" class="btn btn-primary col-sm-10 col-xs-10 submit-r">Registrar</button>
                                    <button type="submit" class="btn btn-primary col-sm-1 col-xs-1 next-step">Avanzar <span><i class="fa fa-caret-right"></i></span></button>
                                </div>
                        </form>
                    </div>
                        
                    <div class="tab-pane" role="tabpanel" id="vehicle">
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
                    <div class="clearfix"></div>
                </div>
            </form>
        </div>
    </section>
   </div>
@endsection