@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro de Empleado</div>

                <div class="panel-body">
                   
                    <form class="form-horizontal" method="POST" action="{{ url('fichas/crear') }}">
                        {{ csrf_field() }}

                     <div class="form-group{{ $errors->has('idFicha') ? ' has-error' : '' }}">
                            <label for="idFicha" class="col-md-4 control-label">idFicha</label>

                            <div class="col-md-6">
                                <input id="idFicha" type="text" pattern="[0-9]+" class="form-control" name="idFicha" value="{{ old('idFicha') }}" value="0" required autofocus>

                                @if ($errors->has('idFicha'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idFicha') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          
                          
                           <div class="form-group{{ $errors->has('idPaciente') ? ' has-error' : '' }}">
                            <label for="idPaciente" class="col-md-4 control-label">idPaciente</label>

                            <div class="col-md-6">
                                <input id="idPaciente" type="text" pattern="[0-9]+" class="form-control" name="idPaciente" value="{{ old('idPaciente') }}" required autofocus>

                                @if ($errors->has('idPaciente'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idPaciente') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('Persona_Nombre') ? ' has-error' : '' }}">
                            <label for="Persona_Nombre" class="col-md-4 control-label">Persona_Nombre</label>

                            <div class="col-md-6">
                                <input id="Persona_Nombre" type="text" class="form-control" name="Persona_Nombre" value="{{ old('Persona_Nombre') }}" disabled>

                                @if ($errors->has('Persona_Nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Persona_Nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                         <div class="form-group{{ $errors->has('Persona_Apellido') ? ' has-error' : '' }}">
                            <label for="Persona_Apellido" class="col-md-4 control-label">Persona_Apellido</label>

                            <div class="col-md-6">
                                <input id="Persona_Apellido" type="text" class="form-control" name="Persona_Apellido" value="{{ old('Persona_Apellido') }}" disabled>

                                @if ($errors->has('Persona_Apellido'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Persona_Apellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                       
                       <!-- informacion del empleado-->
                       
                       
                        <div class="form-group{{ $errors->has('idEmpleado') ? ' has-error' : '' }}">
                            <label for="idPacidEmpleadoiente" class="col-md-4 control-label">idEmpleado</label>

                            <div class="col-md-6">
                                <input id="idEmpleado" type="text" pattern="[0-9]+" class="form-control" name="idEmpleado" value="{{ old('idEmpleado') }}" required autofocus>

                                @if ($errors->has('idEmpleado'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idEmpleado') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('Empleado_Nombre') ? ' has-error' : '' }}">
                            <label for="Empleado_Nombre" class="col-md-4 control-label">Empleado Nombre</label>

                            <div class="col-md-6">
                                <input id="Empleado_Nombre" type="text" class="form-control" name="Empleado_Nombre" value="{{ old('Empleado_Nombre') }}" disabled>

                                @if ($errors->has('Empleado_Nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Empleado_Nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                         <div class="form-group{{ $errors->has('Empleado_Apellido') ? ' has-error' : '' }}">
                            <label for="Empleado_Apellido" class="col-md-4 control-label">Empleado Apellido</label>

                            <div class="col-md-6">
                                <input id="Empleado_Apellido" type="text" class="form-control" name="Empleado_Apellido" value="{{ old('Empleado_Apellido') }}" disabled>

                                @if ($errors->has('Empleado_Apellido'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Empleado_Apellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       
                       <!-- termina informacion del empleado-->
                       
                       <!-- informacion de la ficha -->
                        
                        <div class="form-group{{ $errors->has('Ficha_Fecha') ? ' has-error' : '' }}">
                            <label for="Ficha_Fecha" class="col-md-4 control-label">Fecha</label>

                            <div class="col-md-6">
                                <input id="Condicion_Llegada" type="date" class="form-control" name="Ficha_Fecha" value="{{ old('Ficha_Fecha') }}" required autofocus>

                                @if ($errors->has('Ficha_Fecha'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Ficha_Fecha') }}</strong>
                                    </span>
                                @endif
                            </div> 
                             
                        </div>

                        
                        
                        <div class="form-group{{ $errors->has('Estado_Paciente') ? ' has-error' : '' }}">
                            <label for="Estado_Paciente" class="col-md-4 control-label">Estado</label>

                            <div class="col-md-6">
                                <input id="Estado_Paciente" type="textarea" class="form-control" name="Estado_Paciente" value="{{ old('Estado_Paciente') }}" required autofocus>

                                @if ($errors->has('Estado_Paciente'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Estado_Paciente') }}</strong>
                                    </span>
                                @endif
                            </div> 
                             
                        </div>
                        
                        <!-- aqui termina la info de la ficha-->

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
