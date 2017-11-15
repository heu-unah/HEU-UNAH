@extends('layouts.app')

@section('titulo',"Fichas")

@section('navegacion')
    <a href="{{ url('/home') }}" class="navbar-brand">Inicio</a>
    <a href="{{ url('fichas/crear') }}" class="navbar-brand">Agregar Ficha</a>
@endsection

@section('content')

    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="h2 text-center panel-heading text-primary">Listado de fichas</div>
                <div class="panel-body">
                    <div class="table-responsive">

                      <!--<input id="Paciente_Nombre" type="text" class="form-control" name="Persona_Nombre" placeholder="nombre de Persona" style="margin-bottom:10px;"> -->
                        
                        <table class="table table-condensed table-striped table-bordered table-hover" id="tabla">
                            <thead>
                                <th>Id ficha</th>
                                <th>Id paciente</th>
                                <th>Id empleado</th>
                                <th>Fecha</th>
                                <th>Estado del paciente</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                            @foreach($Fichas as $Ficha)
                                <tr>
                                    <td>{{$Ficha->idFicha}}</td>
                                    <td>{{$Ficha->idPaciente}}</td>
                                    <td>{{$Ficha->idEmpleado}}</td>
                                    <td>{{$Ficha->Ficha_Fecha}}</td>
                                    <td>{{$Ficha->Estado_Paciente}}</td>
                                    <td><a href="#">Actualizar</a><a href="#">Eliminar</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    

@endsection




