@extends('layouts.app')

@section('titulo',"Pacientes")

@section('navegacion')
    <a href="{{ url('pacientes/crear') }}" class="navbar-brand">Agregar Paciente</a>
@endsection

@section('content')

    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="h2 text-center panel-heading text-primary">Listado de pacientes</div>
                <div class="panel-body ">
                    <div class="table-responsive">
                        <h4>Hay {{ $Pacientes->count() }} registros</h4>
                        
                        <table class="table table-condensed table-striped table-bordered table-hover" id="tabla">
                            <thead>
                                <th>Número de Identidad</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Condición</th>
                                <th>Ubicación</th>
                            </thead>
                            <tbody>
                            @foreach($Pacientes as $Paciente)
                                <tr>
                                    <td>{{$Paciente->idPersona}}</td>
                                    <td>{{$Paciente->Persona_Nombre}}</td>
                                    <td>{{$Paciente->Persona_Apellido}}</td>
                                    <td>{{$Paciente->condicion_llegada}}</td>
                                    <td>{{$Paciente->ubicacion}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {!! $Pacientes->render() !!}
                </div>
            </div>
        </div>
    </div>

    

    <script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    
    

@endsection




