@extends('layouts.app')

@section('titulo',"Pacientes")

@section('navegacion')
    <a href="{{ route('pacientes.create') }}" class="navbar-brand">Agregar Paciente</a>
@endsection

@section('content')

    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="h2 text-center panel-heading text-primary">Listado de pacientes</div>
                <div class="panel-body ">
                    <div class="table-responsive">
                        <h4>Hay {{ $pacientes->count() }} registros</h4>
                        
                         <input id="Paciente_Nombre" type="text" class="form-control" name="Persona_Nombre" placeholder="nombre de Persona" style="margin-bottom:10px;">
                        
                        <table class="table table-condensed table-striped table-bordered table-hover" id="tabla">
                            <thead>
                                <th>Número de Identidad</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Condición</th>
                                <th>Ubicación</th>
                                <th colspan="2">Acciones</th>
                            </thead>
                            <tbody>
                            @foreach($pacientes as $Paciente)
                                <tr>
                                    <td>{{$Paciente->idPersona}}</td>
                                    <td>{{$Paciente->Persona_Nombre}}</td>
                                    <td>{{$Paciente->Persona_Apellido}}</td>
                                    <td>{{$Paciente->condicion_llegada}}</td>
                                    <td>{{$Paciente->ubicacion}}</td>
                                    <td><a href="{{route('pacientes.edit', $Paciente->idPaciente)}}"><button type="button" class="btn btn-info">Editar</button></a></td>
                                    <td>
                                        
                                        {{ Form::open(array('url' => 'pacientes/' . $Paciente->idPaciente, 'class' => 'pull-right')) }}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Eliminar', array('class' => 'btn btn-warning')) }}
                                        {{ Form::close() }}
                                        
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {!! $pacientes->render() !!}
                </div>
            </div>
        </div>
    </div>

    

    <script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    
    

@endsection




