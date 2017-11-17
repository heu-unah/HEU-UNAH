@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro de Ficha</div>

                <div class="panel-body">
                   
                    <form class="form-horizontal" method="POST" action="{{ route('fichas.store')  }}">
                        {{ csrf_field() }}

                        
                          
                           <div class="form-group{{ $errors->has('idPaciente') ? ' has-error' : '' }}">
                            <label for="idPaciente" class="col-md-4 control-label">Id Paciente</label>
                            <button class="btn btn-primary" type="button" id="btnBuscar" data-toggle="modal" data-target="#buscarPacientes">Buscar</button>

                            <div class="col-md-6">
                                <input id="idPaciente" type="text" pattern="[0-9]+" class="form-control" name="idPaciente" value="{{ old('idPaciente') }}" required autofocus >

                                @if ($errors->has('idPaciente'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idPaciente') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('Paciente_Nombre') ? ' has-error' : '' }}">
                            <label for="Paciente_Nombre" class="col-md-4 control-label">Nombre del Paciente</label>

                            <div class="col-md-6">
                                <input id="Paciente_Nombre" type="text" class="form-control" name="Paciente_Nombre" value="{{ old('Paciente_Nombre') }}" disabled>

                                @if ($errors->has('Paciente_Nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Paciente_Nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                         <div class="form-group{{ $errors->has('Paciente_Apellido') ? ' has-error' : '' }}">
                            <label for="Paciente_Apellido" class="col-md-4 control-label">Apellido del Paciente</label>

                            <div class="col-md-6">
                                <input id="Paciente_Apellido" type="text" class="form-control" name="Paciente_Apellido" value="{{ old('Paciente_Apellido') }}" disabled>

                                @if ($errors->has('Paciente_Apellido'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Paciente_Apellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                       
                       <!-- informacion del empleado-->
                       
                       
                        <div class="form-group{{ $errors->has('idEmpleado') ? ' has-error' : '' }}">
                            <label for="idEmpleado" class="col-md-4 control-label">Id Empleado</label>
                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#buscarEmpleado">Buscar</button>

                            <div class="col-md-6">
                                <input id="idEmpleado" type="text" pattern="[0-9]+" class="form-control" name="idEmpleado" value="{{ old('idEmpleado') }}" required autofocus >

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
                            <label for="Estado_Paciente" class="col-md-4 control-label">Estado del paciente</label>

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


<div class="modal fade" id="buscarPacientes" tabindex="-1" role="dialog" aria-labelledby="buscarPersona">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="buscarPersona">Buscar Persona</h4>
      </div>
      <div class="modal-body">
        <input type="text" name="code" id="code" />
        <input type="text" name="code2" id="code2" />
        <input type="text" name="code3" id="code3" />
            <table id="dataTableInfo" name="dataTableInfo" class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <tr>
                        <th>Identidad</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                    </tr>
                </thead>
                @foreach ($pacientes as $pe)
                <tbody>
                    <tr>
                        <td>{{ $pe->idPaciente }}</td>
                        <td>{{ $pe->Persona_Nombre }}</td>
                        <td>{{ $pe->Persona_Apellido }}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <a href="#" id="btnPaciente" class="btn btn-primary">Seleccionar</a>
      </div>
    </div>
  </div>
</div>



<div class="modal fade" id="buscarEmpleado" tabindex="-1" role="dialog" aria-labelledby="buscarPersona">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="buscarPersona">Buscar Persona</h4>
      </div>
      <div class="modal-body">
        <input type="text" name="code22" id="code22" />
        <input type="text" name="code23" id="code23" />
        <input type="text" name="code34" id="code34" />
           
            <table id="dataTableInfo2" name="dataTableInfo2" class="table table-striped table-bordered table-condensed table-hover">
                <thead>
                    <tr>
                        <th>Id Empleado</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                    </tr>
                </thead>
                @foreach ($empleados as $empleado)
                <tbody>
                    <tr>
                        <td>{{ $empleado->idEmpleado }}</td>
                        <td>{{ $empleado->Persona_Nombre }}</td>
                        <td>{{ $empleado->Persona_Apellido }}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <a href="#" id="btnEmpleado" class="btn btn-primary">Seleccionar</a>
      </div>
    </div>
  </div>
</div>


