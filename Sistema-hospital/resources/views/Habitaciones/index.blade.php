@extends('layouts.app')

@section('titulo',"Habitaciones")

@section('navegacion')

    <a href="{{ route('habitaciones.create') }}" class="navbar-brand">Agregar Habitación</a>
@endsection

@section('content')

    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="h2 text-center panel-heading text-primary">Listado de habitaciones</div>
                <div class="panel-body">
                    <div class="table-responsive">
                    <h4>Hay {{ $Habitaciones->count() }} habitaciones</h4>
                    <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-search fa-fw" aria-hidden="true"></i>Buscar</span>
                            <input id="kwd_search" type="text" class="form-control" placeholder="Ingrese su búsqueda">
                    </div>
                        
                        <table class="table table-condensed table-striped table-bordered table-hover" id="tabla">
                            <thead>
                                <th class="text-center">Id</th>
                                <th class="text-center">Número de habitación</th>
                                <th class="text-center">Área de la habitación</th>
                                <th class="text-center">Acciones</th>
                            </thead>
                            <tbody>
                            @foreach($Habitaciones as $Habitacion)
                                <tr>
                                    <td class="text-center">{{$Habitacion->id}}</td>
                                    <td class="text-center">{{$Habitacion->habitacion_numero}}</td>
                                    <td class="text-center">{{$Habitacion->habitacion_area}}</td>
                                    <td class="text-center col-md-1"><a href="{{route('habitaciones.edit',$Habitacion->id)}}"><button type="button" class="btn btn-info">Editar</button></a></td>
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