@extends('layouts.app')

@section('titulo',"Empleados")

@section('navegacion')
    <a href="{{ url('empleados/crear') }}" class="navbar-brand">Agregar Empleado</a>
@endsection

@section('content')

    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="h2 text-center panel-heading text-primary">Listado de empleados</div>
                <div class="panel-body">
                    <div class="table-responsive">
                        
                        <table class="table table-condensed table-striped table-bordered table-hover" id="tabla">
                            <thead>
                                <th>Identificación</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Cargo</th>
                            </thead>
                            <tbody>
                            @foreach($Empleados as $Empleado)
                                <tr>
                                    <td>{{$Empleado->idPersona}}</td>
                                    <td>{{$Empleado->Persona_Nombre}}</td>
                                    <td>{{$Empleado->Persona_Apellido}}</td>
                                    <td>{{$Empleado->Empleado_cargo}}</td>
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