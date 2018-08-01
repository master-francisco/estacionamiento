<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SIE</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../../css/master.css">
    </head>
    <body>
        <div class="container-t">
                <div class="container-img">
                        <img src="../../imagenes/sie.png" alt="">
                    </div>
                    <p>
                        @guest
                          <a class="btn btn-success" id="login" href="{{url('/login')}}">Iniciar sesión</a>
                          @else
                          <a class="btn btn-success" id="login" href="{{url('/home')}}">Ir al menu principal</a>
                          @endif
                    <p>
        </div>
    </body>
</html>
