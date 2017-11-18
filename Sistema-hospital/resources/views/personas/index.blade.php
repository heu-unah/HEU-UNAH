@extends('layouts.app')

@section('titulo',"Personas")

@section('navegacion')

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
                    <h4>Hay {{ $Personas->count() }} personas</h4>
                    <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search fa-fw" aria-hidden="true"></i>Buscar</span>
                            <input id="kwd_search" type="text" class="form-control" placeholder="Ingrese su búsqueda">
                    </div>

                   <!-- <form class="navbar-form navbar-left " role="search" action="{{route('personas.index')}}" method="GET">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nombre de la persona" id="NombrePersona" name="NombrePersona">
                        </div>
                        <button type="submit" id="busqueda" class="btn btn-default">Buscar</button>
                    </form>-->
                        
                        <table class="table table-condensed table-striped table-bordered table-hover" id="tabla">
                            
                            <tr></tr>
                            <thead>
                                <th class="text-center">Id</th>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Apellido</th>
                                <th class="text-center">Género</th>
                                <th class="text-center">Estatura</th>
                                <th class="text-center">Edad</th>
                                <th class="text-center">Descripción</th>
                                <th class="text-center">Tes</th>
                                <th class="text-center">Tipo de sangre</th>
                                <th class="text-center">Observaciones</th>
                                <th colspan="2" class="text-center">Acciones</th>
                            </thead>
                            <tbody>
                            @foreach($Personas as $Persona)
                                <tr>
                                    <td class="text-center">{{$Persona->idPersona}}</td>
                                    <td class="text-center">{{$Persona->Persona_Nombre}}</td>
                                    <td class="text-center">{{$Persona->Persona_Apellido}}</td>
                                    <td class="text-center">{{$Persona->Persona_Genero}}</td>
                                    <td class="text-center">{{$Persona->Persona_Estatura}}</td>
                                    <td class="text-center">{{$Persona->Persona_Edad}}</td>
                                    <td class="text-center">{{$Persona->Persona_Descripcion}}</td>
                                    <td class="text-center">{{$Persona->Persona_Tes}}</td>
                                    <td class="text-center">{{$Persona->Tipo_Sangre}}</td>
                                    <td class="text-center">{{$Persona->Observaciones}}</td>
                                    <td class="text-center col-md-1">

                                        <a href="{{route('personas.edit',$Persona->idPersona)}}"><button type="button" id="actualizar" class="btn btn-info">Editar</button></a>
                                    </td>
                                    <td class="col-md-1">
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
                    {!! $Personas->render() !!}
                </div>
            </div>
        </div>
    </div>


 

@endsection