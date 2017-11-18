@extends('layouts.app')

@section('titulo',"Fichas")

@section('navegacion')

    <a href="{{ route('fichas.create') }}" class="navbar-brand">Agregar Ficha</a>
@endsection

@section('content')

    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="h2 text-center panel-heading text-primary">Listado de fichas</div>
                <div class="panel-body">
                    <div class="table-responsive">
                    <h4>Hay {{ $Fichas->count() }} fichas</h4>
                    <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search fa-fw" aria-hidden="true"></i>Buscar</span>
                            <input id="kwd_search" type="text" class="form-control" placeholder="Ingrese su búsqueda">
                    </div>
                    
                      <!--<input id="Paciente_Nombre" type="text" class="form-control" name="Persona_Nombre" placeholder="nombre de Persona" style="margin-bottom:10px;"> -->
                        
                        <table class="table table-condensed table-striped table-bordered table-hover" id="tabla">
                            <thead>
                                <th class="text-center">Id ficha</th>
                                <th class="text-center">Id paciente</th>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Apellido</th>
                                <th class="text-center">Id empleado</th>
                                <th class="text-center">Fecha</th>
                                <th class="text-center">Estado del paciente</th>
                            </thead>
                            <tbody>
                            @foreach($Fichas as $Ficha)
                                <tr>
                                    <td class="text-center">{{$Ficha->idFicha}}</td>
                                    <td class="text-center">{{$Ficha->idPaciente}}</td>
                                    <td class="text-center">{{$Ficha->Persona_Nombre}}</td>
                                    <td class="text-center">{{$Ficha->Persona_Apellido}}</td>
                                    <td class="text-center">{{$Ficha->idEmpleado}}</td>
                                    <td class="text-center">{{$Ficha->Ficha_Fecha}}</td>
                                    <td class="text-center">{{$Ficha->Estado_Paciente}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

   

@endsection




