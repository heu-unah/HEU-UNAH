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
                <div class="panel-body">  
                    <div class="table-responsive" id="txtHint">
                    <h4>Hay {{$Pacientes->count()}} Pacientes</h4>
                    <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search fa-fw" aria-hidden="true"></i>Buscar</span>
                            <input id="kwd_search" type="text" class="form-control" placeholder="Ingrese su búsqueda">
                    </div>

                        
                        <table class="table table-condensed table-striped table-bordered table-hover" id="tabla">
                            <thead>
                               <th class="text-center">idPaciente</th>
                                <th class="text-center">Número de Identidad</th>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Apellido</th>
                                <th class="text-center">Condición</th>
                                <th class="text-center">Ubicación</th>
                                <th colspan="2" class="text-center">Acciones</th>
                            </thead>
                            <tbody>
                            @foreach($Pacientes as $Paciente)
                                <tr>
                                   <td class="text-center">{{$Paciente->idPaciente}}</td>
                                    <td class="text-center">{{$Paciente->idPersona}}</td>
                                    <td class="text-center">{{$Paciente->Persona_Nombre}}</td>
                                    <td class="text-center">{{$Paciente->Persona_Apellido}}</td>
                                    <td class="text-center">{{$Paciente->condicion_llegada}}</td>
                                    <td class="text-center">{{$Paciente->ubicacion}}</td>

                                    <td class="col-md-1"><a href="{{route('pacientes.edit', $Paciente->idPaciente)}}"><button type="button" class="btn btn-info">Editar</button></a></td>
                                    <td class="text-center col-md-1">
                                        
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





