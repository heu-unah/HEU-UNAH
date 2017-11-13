@extends('layouts.app')

@section('titulo',"Home")


@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-center">Panel principal</h1>
            <div class="panel-group"> 
                <div class="panel panel-default">
                    <div class="panel-heading text-center h2 ">Pacientes</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container">
                            <div class="row">
                                <div class="col-md-3">
                                    <a href="{{url('pacientes/home')}}" class="h2">Página de inicio</a>
                                    <p class="h4">Acceder a la página de inicio de los pacientes</p>
                                </div>
                                <div class="col-md-3">
                                    <a href="{{url('pacientes/crear')}}" class="h2">Agregar paciente</a>
                                    <p class="h4">Acceder al formulario de registro de nuevos pacientes</p>
                                </div>
                                <div class="col-md-3">
                                    <a href="{{url('pacientes/buscar')}}" class="h2">Buscar paciente</a>
                                    <p class="h4">Buscar paciente</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="h2 panel-heading text-center">Empleados</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <a href="{{url('empleados/home')}}" class="h2">Página de inicio</a>
                                    <p class="h4">Acceder a la página de inicio de los empleados</p>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{url('empleados/crear')}}" class="h2">Agregar empleado</a>
                                    <p class="h4">Acceder al formulario de registro de nuevos empleados</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="h2 panel-heading text-center">Habitaciones</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <a href="{{url('habitaciones/home')}}" class="h2">Página de inicio</a>
                                    <p class="h4">Acceder a la página de inicio de las habitaciones</p>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{url('habitaciones/crear')}}" class="h2">Agregar habitación</a>
                                    <p class="h4">Acceder al formulario de registro de nuevas habitaciones</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="h2 panel-heading text-center">Personas</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <a href="{{url('personas/home')}}" class="h2">Página de inicio</a>
                                    <p class="h4">Acceder a la página de inicio de las personas</p>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{url('personas/crear')}}" class="h2">Agregar personas</a>
                                    <p class="h4">Acceder al formulario de registro de nuevas personas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="h2 panel-heading text-center">Movimientos</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <a href="{{url('movimientos/home')}}" class="h2">Página de inicio</a>
                                    <p class="h4">Acceder a la página de inicio de las movimientos</p>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{url('movimientos/crear')}}" class="h2">Registrar movimiento</a>
                                    <p class="h4">Acceder al formulario de registro de nuevos movimientos</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="h2 panel-heading text-center">Fichas</div>
                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <a href="{{url('fichas/home')}}" class="h2">Página de inicio</a>
                                    <p class="h4">Acceder a la página de inicio de las fichas</p>
                                </div>
                                <div class="col-md-4">
                                    <a href="{{url('fichas/crear')}}" class="h2">Agregar fichas</a>
                                    <p class="h4">Acceder al formulario de registro de nuevas fichas</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
