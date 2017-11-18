@extends('layouts.app')

@section('titulo',"Movimientos")

@section('navegacion')

    <a href="{{ route('movimientos.create') }}" class="navbar-brand">Registrar Movimiento</a>
@endsection

@section('content')

    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="h2 text-center panel-heading text-primary">Listado de movimientos</div>
                <div class="panel-body">
                    <div class="table-responsive">
                    <h4>Hay {{ $Movimientos->count() }} movimientos</h4>
                    <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search fa-fw" aria-hidden="true"></i>Buscar</span>
                            <input id="kwd_search" type="text" class="form-control" placeholder="Ingrese su búsqueda">
                    </div>

                      <!--<input id="idFicha" type="text" class="form-control" name="idFicha" placeholder="Numero de ficha" style="margin-bottom:10px;"> -->
                        
                        <table class="table table-condensed table-striped table-bordered table-hover" id="tabla">
                            <thead>
                                <th class="text-center">Id Movimiento</th>
                                <th class="text-center">Id Ficha</th>
                                <th class="text-center">Id Empleado</th>
                                <th class="text-center">Id Habitación</th>
                                <th class="text-center">Fecha</th>
                                <th class="text-center">Estado</th>
                            </thead>
                            <tbody>
                            @foreach($Movimientos as $Movimiento)
                                <tr>
                                    <td class="text-center">{{$Movimiento->idMovimiento}}</td>
                                    <td class="text-center">{{$Movimiento->idFicha}}</td>
                                    <td class="text-center">{{$Movimiento->idEmpleado}}</td>
                                    <td class="text-center">{{$Movimiento->idHabitacion}}</td>
                                    <td class="text-center">{{$Movimiento->Movimiento_Fecha}}</td>
                                    <td class="text-center">{{$Movimiento->Movimiento_Descripcion}}</td>
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