@extends('layouts.app')

@section('titulo',"Fichas")

@section('navegacion')
    <a href="{{ url('/home') }}" class="navbar-brand">Inicio</a>
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
                    
                      <!--<input id="Paciente_Nombre" type="text" class="form-control" name="Persona_Nombre" placeholder="nombre de Persona" style="margin-bottom:10px;"> -->
                        
                        <table class="table table-condensed table-striped table-bordered table-hover" id="tabla">
                            <thead>
                                <th>Id ficha</th>
                                <th>Id paciente</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Id empleado</th>
                                <th>Fecha</th>
                                <th>Estado del paciente</th>
                                <th>Acciones</th>
                            </thead>
                            <tbody>
                            @foreach($Fichas as $Ficha)
                                <tr>
                                    <td>{{$Ficha->idFicha}}</td>
                                    <td>{{$Ficha->idPaciente}}</td>
                                    <td>{{$Ficha->Persona_Nombre}}</td>
                                    <td>{{$Ficha->Persona_Apellido}}</td>
                                    <td>{{$Ficha->idEmpleado}}</td>
                                    <td>{{$Ficha->Ficha_Fecha}}</td>
                                    <td>{{$Ficha->Estado_Paciente}}</td>
                                    <td><a class="btn btn-primary" data-toggle="modal" data-target="#fichaDetalle">Ver movimientos</a></td>
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



<!-- Modal -->
<div class="modal fade" id="fichaDetalle" tabindex="-1" role="dialog" aria-labelledby="fichaDetalle">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="fichaDetalle">Detalle de la ficha</h4>
      </div>
      <div class="modal-body">
            <table id="dataTableInfo" name="dataTableInfo" class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <tr>
                        <th>ID Movimiento</th>
						<th>Habitacion</th>
						<th>Descripcion</th>
						<th>Fecha</th>
                    </tr>
                </thead>
                @foreach ($Movimientos as $fd)
                <tbody>
                    <tr>
                        <td>{{ $fd->idMovimiento }}</td>
                        <td>{{ $fd->idHabitacion }}</td>
                        <td>{{ $fd->Movimiento_Descripcion }}</td>
						<td>{{ $fd->Movimiento_Fecha }}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>




