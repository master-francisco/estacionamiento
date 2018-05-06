@extends('layouts.app')

@section('content')
    <div class="col-sm-6 col-sm-offset-3 vrp">
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
    <form method="POST" action="{{ route('password.email') }}">
                {{ csrf_field() }}
                <h1>Restablecer Contraseña</h1>
        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="control-label">E-Mail Address</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
        </div>
        <div class="form-group reset">
            <button type="submit" class="btn btn-primary col-sm-12 col-xs-12">Enviar </button>
            </div>       
    </form>
</div>
@endsection
