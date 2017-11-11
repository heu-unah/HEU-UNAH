@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro de Empleado</div>

                <div class="panel-body">
                   
                    <form class="form-horizontal" method="POST" action="{{ url('pacientes/crear') }}">
                        {{ csrf_field() }}

                           <div class="form-group{{ $errors->has('idPersona') ? ' has-error' : '' }}">
                            <label for="idPersona" class="col-md-4 control-label">Identificacion</label>

                            <div class="col-md-6">
                                <input id="idPersona" type="text" class="form-control" name="idPersona" value="{{ old('idPersona') }}" required autofocus>

                                @if ($errors->has('idPersona'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('idPersona') }}</strong>
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


                        
                        <div class="form-group{{ $errors->has('Condicion_Llegada') ? ' has-error' : '' }}">
                            <label for="Condicion_Llegada" class="col-md-4 control-label">Condicion</label>

                            <div class="col-md-6">
                                <input id="Condicion_Llegada" type="textarea" class="form-control" name="Condicion_Llegada" value="{{ old('Condicion_Llegada') }}" required autofocus>

                                @if ($errors->has('Condicion_Llegada'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Condicion_Llegada') }}</strong>
                                    </span>
                                @endif
                            </div> 
                             
                        </div>

                        
                        
                        <div class="form-group{{ $errors->has('ubicacion') ? ' has-error' : '' }}">
                            <label for="ubicacion" class="col-md-4 control-label">ubicacion</label>

                            <div class="col-md-6">
                                <input id="ubicacion" type="textarea" class="form-control" name="ubicacion" value="{{ old('ubicacion') }}" required autofocus>

                                @if ($errors->has('ubicacion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ubicacion') }}</strong>
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
