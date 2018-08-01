@extends('layouts.app')

@section('content')
    <div class="col-sm-6 col-sm-offset-3 vl">
        <!--formulario para logearse dentro de la aplicación usa una ruta post por uso de contraseñas
            y datos personales que not se pueden enviar por una ruta get !-->
        <form method="POST"  action="{{ route('login') }}">
            {{csrf_field()}}
            <h1>Iniciar Sesión</h1>
            <div class="col-sm-12">
                <!-- la variable errors es una variable que viene por defecto en 
                    laravel para el manejo de errores segun el campo !-->
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label">Correo Electrónico</label>
                    <!-- guarda el viejo email que ya habias ingresado !-->
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    <!-- muestra un block con estilos de boostrap para mostrar el error !-->
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
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
                <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                        <label for="">Codigo</label>
                        <input type="text" class="form-control" name="code" id="code" placeholder="Ingresa tu código" required>
                        @if ($errors->has('code'))
                        <span class="help-block">
                            <strong>{{ $errors->first('code') }}</strong>
                        </span>
                    @endif  
                    </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="check-condiciones">
                    <label class="form-check-label" for="check-condiciones"><a href="../../reglamento/reglamento.pdf" target="_BLANK">Aceptar términos y condiciones</a></label>
                  </div>
                </div>
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    ¿Olvidaste tu contraseña?
                </a>
                <div class="form-group login">
                        <button type="submit" id="login-btn" class="btn btn-primary col-sm-12 col-xs-12">
                            Entrar
                        </button>
                    </div>
            </div>
        </form>
    </div>
@endsection
