@extends('layouts.app')

@section('titulo',"Home")

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Panel</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul>
                        <li>
                           <a href="{{url('pacientes/home')}}">Pacientes</a> 
                        </li>
                        <li>
                            <a href="{{url('pacientes/crear')}}">Empleados</a>
                        </li>
                    </ul>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
