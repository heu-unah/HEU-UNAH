@extends('layouts.app')

@section('titulo',"Empleados")

@section('navegacion')

    <a href="{{ route('empleados.create') }}" class="navbar-brand">Agregar Empleado</a>
 
@endsection

@section('content')

    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="h2 text-center panel-heading text-primary">Listado de empleados</div>
                <div class="panel-body">
                    <div class="table-responsive">
                    <h4>Hay {{ $Empleados->count() }} empleados</h4>
                    <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search fa-fw" aria-hidden="true"></i>Buscar</span>
                            <input id="kwd_search" type="text" class="form-control" placeholder="Ingrese su búsqueda">
                    </div>
                        

                        
                        <table class="table table-condensed table-striped table-bordered table-hover" id="tabla">
                            
                            <thead>
                               <th class="text-center">idEmpleado</th>
                                <th class="text-center">Identificación</th>
                                <th class="text-center">Nombre</th>
                                <th class="text-center">Apellido</th>
                                <th class="text-center">Cargo</th>
                                <th colspan="2" class="text-center">Acciones</th>
                            </thead>
                            <tbody>
                            @foreach($Empleados as $Empleado)
							
                                <tr>
                                   <td class="text-center">{{$Empleado->idEmpleado}}</td>
                                    <td class="text-center">{{$Empleado->idPersona}}</td>
                                    <td class="text-center">{{$Empleado->Persona_Nombre}}</td>
                                    <td class="text-center">{{$Empleado->Persona_Apellido}}</td>
                                    <td class="text-center">{{$Empleado->Empleado_Cargo}}</td>
                                    <td class="text-center col-md-1"><a href="{{route('empleados.edit',$Empleado->idEmpleado)}}"><button type="button" class="btn btn-info">Editar</button></a></td>
                                    <td class="col-md-1">
                                        
                                     {{ Form::open(array('url' => 'empleados/' . $Empleado->idEmpleado, 'class' => 'pull-right')) }}
                                        {{ Form::hidden('_method', 'DELETE') }}
                                        {{ Form::submit('Eliminar', array('class' => 'btn btn-warning')) }}
                                        {{ Form::close() }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {!! $Empleados->render() !!}
                </div>
            </div>
        </div>
    </div>
  

@endsection