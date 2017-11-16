@extends('layouts.app')

@section('titulo',"Pacientes")

@section('navegacion')
    <a href="{{ url('/home') }}" class="navbar-brand">Inicio</a>
    <a href="{{ route('pacientes.create') }}" class="navbar-brand">Agregar Paciente</a>
@endsection

@section('content')

    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="h2 text-center panel-heading text-primary">Listado de pacientes</div>

          <h2>Hay {{$Pacientes->count()}} Pacientes</h2>

                    <div class="table-responsive" id="txtHint">

                         <form class="navbar-form navbar-left " role="search" action="{{route('pacientes.index')}}" method="GET">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nombre del paciente" id="NombrePaciente" name="NombrePaciente">
                            </div>
                            <button type="submit" class="btn btn-default">Buscar</button>
                        </form>

                        
                        <table class="table table-condensed table-striped table-bordered table-hover" id="tabla">
                            <thead>
                               <th>idPaciente</th>
                                <th>Número de Identidad</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Condición</th>
                                <th>Ubicación</th>
                                <th colspan="2">Acciones</th>
                            </thead>
                            <tbody>
                            @foreach($Pacientes as $Paciente)
                                <tr>
                                   <td>{{$Paciente->idPaciente}}</td>
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
                    {!! $Pacientes->render() !!}
                </div>
            </div>
        </div>
    </div>
    
    <!--<script>
    $(document).ready(function(){
       $("#search").keyup(function(){
           var str=  $("#search").val();
           if(str == "") {
                   $( "#txtHint" ).html("<b>Buscando paciente...</b>"); 
           }else {
                   $.get( "{{ url('pacientes/buscarNombre') }}"+str, function( data ) {
                       $( "#txtHint" ).html( data );  
                });
           }
       });  
    }); 
    </script> -->



@endsection





