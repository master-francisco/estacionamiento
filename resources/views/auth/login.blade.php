@extends('layouts.app')

@section('content')
    <div class="col-sm-6 col-sm-offset-3 vl">
        <form method="POST"  action="{{ route('login') }}">
            {{csrf_field()}}
            <h1>Login</h1>
            <div class="col-sm-12">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label">E-Mail</label>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                    
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
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    Olvidaste tu contraseña?
                </a>
                <div class="form-group login">
                        <button type="submit" class="btn btn-primary col-sm-12 col-xs-12">
                            Login
                        </button>
                    </div>
            </div>
        </form>
    </div>
@endsection
