<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SIE /{{Route::currentRouteName()}}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="../../../css/master.css">
    <link rel="stylesheet" href="../../../css/estilos.css">
    <link rel="stylesheet" href="../../../css/modals-estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai|Permanent+Marker|Archivo+Black" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div id="app">
            <div class="p">
                      <img src="../../imagenes/log.png" alt="">
                      <img src="../../imagenes/nombre.png" alt="" class="img-n">
                  </div>
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="">
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            @if(Auth::user()->role == 'EDITOR')
                            <li><a href="{{'/apartado'}}"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Apartado</a></li>
                            <li class="dropdown">
                                    <li><a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                                 <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  Logout
                                    </a></li>
                            @else
                            @if(Auth::user()->role == 'ADMIN')
                             <li><a href="{{'/dashboard'}}">Admin Page</a></li>
                             <li><a href="{{'/apartado'}}"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Apartado</a></li>
                             <li class="dropdown">
                                    <li><a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                                 <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  Logout
                                    </a></li>
                             @else
                            <li><a href="{{'/home'}}">Inicio</a></li>
                            <li><a href="{{'/perfil'}}"> <span class="glyphicon glyphicon-user" aria-hidden="true"></span> Perfil</a></li>
                            <li><a href="{{'/apartado'}}"><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Apartado</a></li>
                            <li class="dropdown">
                                    <li><a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                                 <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  Logout
                                    </a></li>
                                @endif
                            @endif
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
    <!-- Scripts -->
  
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="{{ asset('js/master.js')}}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
