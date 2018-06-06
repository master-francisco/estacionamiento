<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
    
        <title>SIE /{{Route::currentRouteName()}}</title>
    
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="../../../css/slidebar.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.css">
        <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    </head>
    <body>
            <div class="wrapper">
                    <!-- Sidebar Holder -->
                    <nav id="sidebar">
                        <div class="sidebar-header">
                            <h3>Administrador</h3>
                        </div>
            
                        <ul class="list-unstyled components">
                            <li class="active">
                                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Usuarios</a>
                                <ul class="collapse list-unstyled" id="homeSubmenu">
                                        <li><a href="{{'/create-user'}}">Crear</a></li>
                                        <li><a href="{{'/settings'}}">Configurar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#codeSubmenu" data-toggle="collapse" aria-expanded="false">Codigo</a>
                                <ul class="collapse list-unstyled" id="codeSubmenu">
                                        <li><a href="{{'/codes'}}">Crear</a></li>
                                        <li><a href="{{'/settings-code'}}">Configurar</a></li>
                                    </ul>
                            </li>
                            <li><a href="{{'/home'}}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio</a></li>
                            <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                                 <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>  Logout
                                    </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                        </ul>
                    </nav>
            
                    <!-- Page Content Holder -->
                    <div id="content">
            
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
            
                                <div class="navbar-header">
                                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
            
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                </div>
                            </div>
                        </nav>
                    </div>
                    @yield('content')  
            </div>
    <!--scripts !-->   
   
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="{{ asset('js/styles.js')}}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    <script>
        if($('.modal-display').length > 0) {
            $('.modal-display').modal('show');
        }
    </script>
{!! Toastr::message() !!}

</body>
    
</html>