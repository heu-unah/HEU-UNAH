@extends('layouts.app')

@section('titulo',"Habitaciones")

@section('navegacion')
    <a href="{{ url('habitaciones/crear') }}" class="navbar-brand">Agregar Habitación</a>
@endsection

@section('content')

    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="h2 text-center panel-heading text-primary">Listado de habitaciones</div>
                <div class="panel-body">
                    <div class="table-responsive">
                        
                        <table class="table table-condensed table-striped table-bordered table-hover" id="tabla">
                            <thead>
                                <th>Id</th>
                                <th>Número de habitación</th>
                                <th>Área de la habitación</th>
                                <th>Disponible</th>
                            </thead>
                            <tbody>
                            @foreach($Habitaciones as $Habitacion)
                                <tr>
                                    <td>{{$Habitacion->id}}</td>
                                    <td>{{$Habitacion->habitacion_numero}}</td>
                                    <td>{{$Habitacion->habitacion_area}}</td>
                                    <td>{{$Habitacion->disponible}}</td>
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