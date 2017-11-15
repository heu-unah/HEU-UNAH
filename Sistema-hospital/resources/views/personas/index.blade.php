@extends('layouts.app')

@section('titulo',"Personas")

@section('navegacion')
    <a href="{{ url('/home') }}" class="navbar-brand">Inicio</a>
    <a href="{{ route('personas.create') }}" class="navbar-brand">Agregar Persona</a>
@endsection

@section('content')

    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <div class="container">
        <div class="row">
            <div class="col-md-11">
                <div class="h2 text-center panel-heading text-primary">Listado de personas</div>
                <div class="panel-body">
                    <div class="table-responsive">
                    <h4>Hay {{ $Personas->count() }} registros</h4>

                    <form class="navbar-form navbar-left " role="search" action="{{ url('personas/home') }}" method="GET">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nombre de la persona" id="NombrePersona" name="NombrePersona">
                        </div>
                        <button type="submit" id="busqueda" class="btn btn-default">Buscar</button>
                    </form>
                        
                        <table class="table table-condensed table-striped table-bordered table-hover" id="tabla">
                            
                            <tr></tr>
                            <thead>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Género</th>
                                <th>Estatura</th>
                                <th>Edad</th>
                                <th>Descripción</th>
                                <th>Tes</th>
                                <th>Tipo de sangre</th>
                                <th>Observaciones</th>
                                <th colspan="2">Acciones</th>
                            </thead>
                            <tbody>
                            @foreach($Personas as $Persona)
                                <tr>
                                    <td>{{$Persona->idPersona}}</td>
                                    <td>{{$Persona->Persona_Nombre}}</td>
                                    <td>{{$Persona->Persona_Apellido}}</td>
                                    <td>{{$Persona->Persona_Genero}}</td>
                                    <td>{{$Persona->Persona_Estatura}}</td>
                                    <td>{{$Persona->Persona_Edad}}</td>
                                    <td>{{$Persona->Persona_Descripcion}}</td>
                                    <td>{{$Persona->Persona_Tes}}</td>
                                    <td>{{$Persona->Tipo_Sangre}}</td>
                                    <td>{{$Persona->Observaciones}}</td>
                                    <td>

                                        <a href="{{route('personas.edit',$Persona->idPersona)}}"><button type="button" id="actualizar" class="btn btn-info">Editar</button></a>
                                    </td>
                                    <td>
                                        {{ Form::open(array('url' => 'personas/' . $Persona->idPersona, 'class' => 'pull-right')) }}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Eliminar', array('class' => 'btn btn-warning')) }}
                                    {{ Form::close() }}
                                        

                                    </td>
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