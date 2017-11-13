@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro de Movimiento</div>

                <div class="panel-body">
                   
                    <form class="form-horizontal" method="POST" action="{{ url('movimientos/crear') }}">
                        {{ csrf_field() }}
                        

                    <div class="form-group{{ $errors->has('idMovimiento') ? ' has-error' : '' }}">
                        <label for="idMovimiento" class="col-md-4 control-label">Id movimiento</label>

                        <div class="col-md-6">
                            <input id="idMovimiento" type="text" pattern="[0-9]+" class="form-control" name="idMovimiento" value="{{ old('idMovimiento') }}"  required autofocus>

                            @if ($errors->has('idMovimiento'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('idMovimiento') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                        

                     <div class="form-group{{ $errors->has('idFicha') ? ' has-error' : '' }}">
                            <label for="idFicha" class="col-md-4 control-label">Id Ficha</label>

                            <div class="col-md-6">
                                <input id="idFicha" type="text" pattern="[0-9]+" class="form-control" name="idFicha" value="{{ old('idFicha') }}" required autofocus>

                                @if ($errors->has('idFicha'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idFicha') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                          
                          
                           <div class="form-group{{ $errors->has('idPaciente') ? ' has-error' : '' }}">
                            <label for="idPaciente" class="col-md-4 control-label">Id Paciente</label>

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
                            <label for="Persona_Nombre" class="col-md-4 control-label">Nombre de la persona</label>

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
                            <label for="Persona_Apellido" class="col-md-4 control-label">Apellido de la persona</label>

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
                            <label for="idPacidEmpleadoiente" class="col-md-4 control-label">Id Empleado</label>

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
                            <label for="Empleado_Nombre" class="col-md-4 control-label">Nombre del Empleado</label>

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
                            <label for="Empleado_Apellido" class="col-md-4 control-label">Apellido del Empleado</label>

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
                        
                         <div class="form-group{{ $errors->has('idHabitacion') ? ' has-error' : '' }}">
                        <label for="idMovimiento" class="col-md-4 control-label">Id Habitacion</label>

                        <div class="col-md-6">
                            <input id="idHabitacion" type="text" pattern="[0-9]+" class="form-control" name="idHabitacion" value="{{ old('idHabitacion') }}"  required autofocus>

                            @if ($errors->has('idHabitacion'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('idHabitacion') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                       
                        
                    <div class="form-group{{ $errors->has('Habitacion_Numero') ? ' has-error' : '' }}">
                        <label for="Habitacion_Numero" class="col-md-4 control-label">Número de Habitación</label>

                        <div class="col-md-6">
                            <input id="Habitacion_Numero" type="text" pattern="[0-9]+" class="form-control" name="Habitacion_Numero" value="{{ old('Habitacion_Numero') }}"  disabled>

                            @if ($errors->has('Habitacion_Numero'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('Habitacion_Numero') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div> 
                        
                        
                        <div class="form-group{{ $errors->has('Movimiento_Fecha') ? ' has-error' : '' }}">
                            <label for="Movimiento_Fecha" class="col-md-4 control-label">Fecha</label>

                            <div class="col-md-6">
                                <input id="Movimiento_Fecha" type="date" class="form-control" name="Movimiento_Fecha" value="{{ old('Movimiento_Fecha') }}" required autofocus>

                                @if ($errors->has('Movimiento_Fecha'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Movimiento_Fecha') }}</strong>
                                    </span>
                                @endif
                            </div> 
                             
                        </div>

                        
                        
                        <div class="form-group{{ $errors->has('Movimiento_Descripcion') ? ' has-error' : '' }}">
                            <label for="Movimiento_Descripcion" class="col-md-4 control-label">Descripción</label>

                            <div class="col-md-6">
                                <input id="Movimiento_Descripcion" type="textarea" class="form-control" name="Movimiento_Descripcion" value="{{ old('Movimiento_Descripcion') }}" required autofocus>

                                @if ($errors->has('Movimiento_Descripcion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Movimiento_Descripcion') }}</strong>
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
