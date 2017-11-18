<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('titulo') - Sistema hospital</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome-4/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css"> -->
   

    

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
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
                    <a class="navbar-brand" href="{{ url('/') }}">
                        Inicio
                    </a>
                    <a class="navbar-brand" href="{{ url('/home') }}">
                        Panel Principal
                    </a>

					<!--<a class="navbar-brand" href="{{ url('/') }}">
                       Buscar Paciente
                    </a>
					
					<a class="navbar-brand" href="{{ route('personas.index') }}">
                       Personas
                    </a>
					
					<a class="navbar-brand" href="{{ route('empleados.index') }}">
                       Empleados
                    </a>
					
					<a class="navbar-brand" href="{{ route('pacientes.index') }}">
                       Pacientes
                    </a>
					
					<a class="navbar-brand" href="{{ route('habitaciones.index') }}">
                       Habitaciones
                    </a>
					
					<a class="navbar-brand" href="{{ route('fichas.index') }}">
                       Fichas
                    </a>-->
					
					
                    @yield('navegacion')
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
                            <li><a href="{{ route('login') }}">Inicio de sesion</a></li>
                            <li><a href="{{ route('register') }}">Registrar usuario</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ url('/home') }}">Panel Principal</a>
                                    </li>
                                    <li>
                                        <a href="{{ url('/') }}">Inicio</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="{{ route('personas.index')}}">Personas</a>
                                    <li>
                                    <li>
                                        <a href="{{route('pacientes.index')}}">Pacientes</a>
                                    </li>
                                    <li>
                                    
                                        <a href="{{ route('empleados.index') }}">Empleados</a>
                                    </li>
                                    <li>
                                        <a href="{{route('habitaciones.index')}}">Habitaciones</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('fichas.index')}}">Fichas</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('movimientos.index')}}">Movimientos</a>
                                    </li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script src="{{ asset('js/buscar.js') }}"></script>
    <script src="{{ asset('js/tablas.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <!-- <script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script> -->
</body>
</html>
