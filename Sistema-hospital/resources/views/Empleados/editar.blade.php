@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Actualizacion de Registro: {{$empleado->idPersona}}</div>

                <?php  $info = json_decode($datosEmpleado,true); ?>
                <div class="panel-body">
                   
                    {{ Form::model($empleado, ['route' =>['empleados.update',$empleado->idEmpleado], 'method' => 'PUT', 'class' => "form-horizontal"] ) }}
                        {{ csrf_field() }}

                           <div class="form-group{{ $errors->has('idPersona') ? ' has-error' : '' }}">
                            <label for="idPersona" class="col-md-4 control-label">Identificación</label>

                            <div class="col-md-6">
                                <input id="idPersona" type="text" class="form-control" name="idPersona" value="{{$info[0]["idPersona"] }}" required autofocus disabled>

                                @if ($errors->has('idPersona'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idPersona') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('Persona_Nombre') ? ' has-error' : '' }}">
                            <label for="Persona_Nombre" class="col-md-4 control-label">Nombre Empleado</label>

                            <div class="col-md-6">
                                <input id="Persona_Nombre" type="text" class="form-control" name="Persona_Nombre" value="{{ $info[0]["Persona_Nombre"]}}" disabled>

                                @if ($errors->has('Persona_Nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Persona_Nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                         <div class="form-group{{ $errors->has('Persona_Apellido') ? ' has-error' : '' }}">
                            <label for="Persona_Apellido" class="col-md-4 control-label">Apellido Empleado</label>

                            <div class="col-md-6">
                                <input id="Persona_Apellido" type="text" class="form-control" name="Persona_Apellido" value="{{ $info[0]["Persona_Apellido"] }}" disabled>

                                @if ($errors->has('Persona_Apellido'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Persona_Apellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        
                        <div class="form-group{{ $errors->has('Empleado_cargo') ? ' has-error' : '' }}">
                            <label for="Empleado_cargo" class="col-md-4 control-label">Cargo</label>

                            <div class="col-md-6">
                                <input id="Empleado_cargo" type="textarea" pattern="[A-Za-z]+" class="form-control" name="Empleado_cargo" value="{{ $info[0]["Empleado_Cargo"] }}" required autofocus>

                                @if ($errors->has('Empleado_cargo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Empleado_cargo') }}</strong>
                                    </span>
                                @endif
                            </div> 
                             
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Actualizar
                                </button>
                                <!--
                                 <button type="submit" class="btn btn-primary" id="cancelar" onclick="window.location='{{ route("empleados.index") }}'">
                                    Cancelar
                                </button>-->
                            </div>
                        </div>
                    
                    {{Form::close()}}
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
