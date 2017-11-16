@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro de Empleado</div>

                <div class="panel-body">
                   
                    <form class="form-horizontal" method="POST" action="{{ route('empleados.store') }}">
                        {{ csrf_field() }}

                           <div class="form-group{{ $errors->has('idPersona') ? ' has-error' : '' }}">
                            <label for="idPersona" class="col-md-4 control-label">Identificación</label>
                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#buscarPersona">Buscar</button>

                            <div class="col-md-6">
                                <input id="idPersona" type="text" class="form-control" name="idPersona" value="{{ old('idPersona') }}" required autofocus disabled>

                                @if ($errors->has('idPersona'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idPersona') }}</strong>
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


                        
                        <div class="form-group{{ $errors->has('Empleado_cargo') ? ' has-error' : '' }}">
                            <label for="Empleado_cargo" class="col-md-4 control-label">Cargo</label>

                            <div class="col-md-6">
                                <input id="Empleado_cargo" type="textarea" placeholder="Cargo del empleado" pattern="[A-Za-z]" class="form-control" name="Empleado_cargo" value="{{ old('Empleado_cargo') }}" required autofocus>

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
<div class="modal fade" id="buscarPersona" tabindex="-1" role="dialog" aria-labelledby="buscarPersona">
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
                @foreach ($personas as $pe)
                <tbody>
                    <tr>
                        <td>{{ $pe->idPersona }}</td>
                        <td>{{ $pe->Persona_Nombre }}</td>
                        <td>{{ $pe->Persona_Apellido }}</td>
                    </tr>
                </tbody>
                @endforeach
            </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <a href="#" id="btnPoblarPaciente" class="btn btn-primary">Seleccionar</a>
      </div>
    </div>
  </div>
</div>
