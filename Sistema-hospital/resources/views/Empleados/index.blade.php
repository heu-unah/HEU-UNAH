@extends('layouts.app')

@section('titulo',"Empleados")

@section('navegacion')
    <a href="{{ url('/home') }}" class="navbar-brand">Inicio</a>
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
                        <h4>Hay {{ $Empleados->count() }} registros</h4>
                        <form class="navbar-form navbar-left " role="search" action="{{ url('empleados/home') }}" method="GET">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nombre del empleadp" id="NombreEmpleado" name="NombreEmpleado">
                            </div>
                            <button type="submit" class="btn btn-default">Buscar</button>
                        </form>

                        
                        <table class="table table-condensed table-striped table-bordered table-hover" id="tabla">
                            
                            <thead>
                               <th>idEmpleado</th>
                                <th>Identificación</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Cargo</th>
                                <th colspan="2">Acciones</th>
                            </thead>
                            <tbody>
                            @foreach($Empleados as $Empleado)
                                <tr>
                                   <td>{{$Empleado->idEmpleado}}</td>
                                    <td>{{$Empleado->idPersona}}</td>
                                    <td>{{$Empleado->Persona_Nombre}}</td>
                                    <td>{{$Empleado->Persona_Apellido}}</td>
                                    <td>{{$Empleado->Empleado_cargo}}</td>
                                    <td><a href="{{route('empleados.edit',$Empleado->idEmpleado)}}"><button type="button" class="btn btn-info">Editar</button></a></td>
                                    <td>
                                        
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

    

    <script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

   

@endsection