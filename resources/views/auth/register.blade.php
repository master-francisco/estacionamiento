@extends('layouts.app')

@section('content')
    <div class="col-sm-7 col-sm-offset-2 vr">
     <form method="POST" action="{{ route('register') }}">
        {{csrf_field()}}
        <h1>Registrar</h1>
    <div class="col-sm-12">
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
        <div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
                <label for="code" class="control-label">Codigo</label>
                <input id="code" type="text" class="form-control" name="code" value="{{ old('code') }}" required>
                @if ($errors->has('code'))
                <span class="help-block">
                    <strong>{{ $errors->first('code') }}</strong>
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
        <div class="form-group">
                <label for="password-confirm" class="control-label">Confirma contraseña</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
        </div>
        <div class="form-group register">
            <button type="submit" class="btn btn-primary col-sm-12 col-xs-12">Registrar</button>
        </div>
     </div>
  </form>
</div>
@endsection
