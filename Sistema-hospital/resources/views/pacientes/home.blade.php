@extends('layouts.app')

@section('titulo',"Pacientes")

@section('content')

    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="h2 text-center">Listado de pacientes</div>
                <div class="panel-body">
                    <table class="table table bordered" id="tabla">
                        <thead>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Tes</th>
                            <th>Domicilio</th>
                        </thead>
                        <tbody>
                        @foreach($Pacientes as $Paciente)
                            <tr>
                                <td>{{$Paciente->id}}</td>
                                <td>{{$Paciente->nombre}}</td>
                                <td>{{$Paciente->tes}}</td>
                                <td>{{$Paciente->domicilio}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    

    <script src="http://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#tabla').DataTable( {
                "processing": true,
                "serverSide": true,
                "ajax": "{{ url('api/pacientes') }}",
                "columns":[
                    {data:'id'},
                    {data:'nombre'},
                    {data:'tes'},
                    {data:'domicilio'},
                ]
            });
        });
    </script>

@endsection




