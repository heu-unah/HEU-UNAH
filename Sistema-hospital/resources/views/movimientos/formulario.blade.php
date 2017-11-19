@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro de Movimiento</div>

                <div class="panel-body">
                   
                    <form class="form-horizontal" method="POST" action="{{ route('movimientos.store') }}">
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
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#buscarFicha">Buscar</button>


                            <div class="col-md-6">
                                <input id="idFicha" type="text" pattern="[0-9]+" class="form-control" name="idFicha" value="{{ old('idFicha') }}" required autofocus>

                                @if ($errors->has('idFicha'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idFicha') }}</strong>
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
                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#buscarEmpleado">Buscar</button>

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
                        <label for="idHabitacion" class="col-md-4 control-label">Id Habitacion</label>
                        <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#buscarhabitacion">Buscar</button>

                        <div class="col-md-6">
                            <input id="idHabitacion" type="text" pattern="[0-9]+" class="form-control" name="idHabitacion" value="{{ old('idHabitacion') }}"  required autofocus>

                            @if ($errors->has('idHabitacion'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('idHabitacion') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                       
                        
                    <div class="form-group{{ $errors->has('habitacion_numero') ? ' has-error' : '' }}">
                        <label for="habitacion_numero" class="col-md-4 control-label">Número de Habitación</label>

                        <div class="col-md-6">
                            <input id="habitacion_numero" type="text" pattern="[0-9]+" class="form-control" name="habitacion_numero" value="{{ old('habitacion_numero') }}"  disabled>

                            @if ($errors->has('habitacion_numero'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('habitacion_numero') }}</strong>
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

<div class="modal fade" id="buscarFicha" tabindex="-1" role="dialog" aria-labelledby="buscarFicha">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="buscarFicha">Buscar Ficha</h4>
      </div>
      <div class="modal-body">
        <input type="text" name="code" id="code" />
        <input type="text" name="code2" id="code2" />
        <input type="text" name="code3" id="code3" />
        <div class="input-group" style="margin-top: 15px; margin-bottom: 15px;">
            <span class="input-group-addon"><i class="fa fa-search fa-fw" aria-hidden="true"></i>Buscar</span>
            <input id="kw_search" type="text" class="form-control" placeholder="Ingrese su búsqueda">
        </div>
            <table id="tablaM" name="tablaM" class="table table-striped table-bordered table-condensed table-hover" style="margin-top: 15px;">
                <thead>
                    <tr>
                        <th>Id Ficha</th>
                        <th>Nombre del paciente</th>
                        <th>Apellido del paciente</th>
                    </tr>
                </thead>
                @foreach ($Fichas as $ficha)
                <tbody>
                    <tr>
                        <td>{{ $ficha->idFicha }}</td>
                        <td>{{ $ficha->Persona_Nombre }}</td>
                        <td>{{ $ficha->Persona_Apellido }}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <a href="#" id="Ficha" class="btn btn-primary">Seleccionar</a>
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
        <div class="input-group" style="margin-top: 15px; margin-bottom: 15px;">
            <span class="input-group-addon"><i class="fa fa-search fa-fw" aria-hidden="true"></i>Buscar</span>
            <input id="k_search" type="text" class="form-control" placeholder="Ingrese su búsqueda">
        </div>
           
            <table id="tabla2" name="tabla2" class="table table-striped table-bordered table-condensed table-hover" style="margin-top: 15px;">
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


<div class="modal fade" id="buscarhabitacion" tabindex="-1" role="dialog" aria-labelledby="buscarhabitacion">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="buscarhabitacion">Buscar Habitación</h4>
      </div>
      <div class="modal-body">
        <input type="text" name="hab" id="hab" />
        <input type="text" name="hab1" id="hab1" />
        <div class="input-group" style="margin-top: 15px; margin-bottom: 15px;">
            <span class="input-group-addon"><i class="fa fa-search fa-fw" aria-hidden="true"></i>Buscar</span>
            <input id="hab_search" type="text" class="form-control" placeholder="Ingrese su búsqueda">
        </div>
            <table id="tablaHab" name="tablaH" class="table table-striped table-bordered table-condensed table-hover" style="margin-top: 15px;">
                <thead>
                    <tr>
                        <th>Id Habitación</th>
                        <th>Número de Habitación</th>
                    </tr>
                </thead>
                @foreach ($habitaciones as $habitacion)
                <tbody>
                    <tr>
                        <td>{{ $habitacion->id }}</td>
                        <td>{{ $habitacion->habitacion_numero }}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <a href="#" id="Hab" class="btn btn-primary">Seleccionar</a>
      </div>
    </div>
  </div>
</div>
