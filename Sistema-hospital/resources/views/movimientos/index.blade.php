@extends('layouts.app')

@section('titulo',"Movimientos")

@section('navegacion')
    <a href="{{ url('movimientos/crear') }}" class="navbar-brand">Registrar Movimiento</a>
@endsection

@section('content')

    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="h2 text-center panel-heading text-primary">Listado de movimientos</div>
                <div class="panel-body">
                    <div class="table-responsive">

                      <!--<input id="idFicha" type="text" class="form-control" name="idFicha" placeholder="Numero de ficha" style="margin-bottom:10px;"> -->
                        
                        <table class="table table-condensed table-striped table-bordered table-hover" id="tabla">
                            <thead>
                                <th>Id Movimiento</th>
                                <th>Id Ficha</th>
                                <th>Id Paciente</th>
                                <th>Id Empleado</th>
                                <th>Id Habitación</th>
                                <th>Id Paciente</th>
                                <th>Fecha</th>
                                <th>Descripción</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                            @foreach($Movimientos as $Movimiento)
                                <tr>
                                    <td>{{$Movimiento->idMovimiento}}</td>
                                    <td>{{$Movimiento->idFicha}}</td>
                                    <td>{{$Movimiento->idPaciente}}</td>
                                    <td>{{$Movimiento->idEmpleado}}</td>
                                    <td>{{$Movimiento->idHabitacion}}</td>
                                    <td>{{$Movimiento->Movimiento_Fecha}}</td>
                                    <td>{{$Movimiento->Movimiento_Descripcion}}</td>
                                    <td><a href="#">Actualizar</a><a href="#">Eliminar</a></td>
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