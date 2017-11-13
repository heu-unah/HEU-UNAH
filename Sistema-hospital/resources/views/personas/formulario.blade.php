@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro de Persona</div>

                <div class="panel-body">
                   
                    <form class="form-horizontal" method="POST" action="{{ url('personas/crear') }}">
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
                            <label for="Persona_Nombre" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="Persona_Nombre" type="text" class="form-control" name="Persona_Nombre" value="{{ old('Persona_Nombre') }}" required autofocus>

                                @if ($errors->has('Persona_Nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Persona_Nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                         <div class="form-group{{ $errors->has('Persona_Apellido') ? ' has-error' : '' }}">
                            <label for="Persona_Apellido" class="col-md-4 control-label">Apellido</label>

                            <div class="col-md-6">
                                <input id="Persona_Apellido" type="text" class="form-control" name="Persona_Apellido" value="{{ old('Persona_Apellido') }}" required autofocus>

                                @if ($errors->has('Persona_Apellido'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Persona_Apellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                         <div class="form-group{{ $errors->has('Persona_Genero') ? ' has-error' : '' }}">
                            <label for="Persona_Genero" class="col-md-4 control-label">Genero</label>

                            <div class="col-md-6">
                                <select name="Persona_Genero" id="Persona_Genero" class="form-control" value="{{ old('Persona_Genero') }}" required autofocus>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                                </select>
                                
                                @if ($errors->has('Persona_Genero'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Persona_Apellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Persona_Estatura') ? ' has-error' : '' }}">
                            <label for="Persona_Estatura" class="col-md-4 control-label">Estatura</label>

                            <div class="col-md-6">
                                <input id="Persona_Estatura" type="text" class="form-control" name="Persona_Estatura" value="{{ old('Persona_Estatura') }}" required autofocus>

                                @if ($errors->has('Persona_Estatura'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Persona_Estatura') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('Persona_Edad') ? ' has-error' : '' }}">
                            <label for="Persona_edad" class="col-md-4 control-label">Edad</label>

                            <div class="col-md-6">
                                <input id="Persona_Edad" type="text" pattern="[0-9]+" class="form-control" name="Persona_Edad" value="{{ old('Persona_Edad') }}">

                                @if ($errors->has('Persona_Edad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Persona_Edad') }}</strong>
                                    </span>
                                @endif
                            </div> 
                            
                            
                        </div>
                        
                        <div class="form-group{{ $errors->has('Persona_Descripcion') ? ' has-error' : '' }}">
                            <label for="Persona_Descripcion" class="col-md-4 control-label">Descripcion</label>

                            <div class="col-md-6">
                                <input id="Persona_Descripcion" type="textarea" class="form-control" name="Persona_Descripcion" value="{{ old('Persona_Descripcion') }}">

                                @if ($errors->has('Persona_Descripcion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Persona_Descripcion') }}</strong>
                                    </span>
                                @endif
                            </div> 
                             
                        </div>
                        
                            <div class="form-group{{ $errors->has('Persona_Tes') ? ' has-error' : '' }}">
                            <label for="Persona_Tes" class="col-md-4 control-label">Tes</label>

                            <div class="col-md-6">
                                <input id="Persona_Tes" type="text" class="form-control" name="Persona_Tes" value="{{ old('Persona_Tes') }}" >

                                @if ($errors->has('Persona_Tes'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Persona_Tes') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('Tipo_Sangre') ? ' has-error' : '' }}">
                            <label for="Tipo_Sangre" class="col-md-4 control-label">Tipo de Sangre</label>

                            <div class="col-md-6">
                                <select name="Tipo_Sangre" id="Tipo_Sangre" class="form-control" value="{{ old('Tipo_Sangre') }}"                  required autofocus>
                                        <option value="O-">O-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">A-</option>
                                        <option value="O+">A+</option>
                                        <option value="O-">AB-</option>
                                        <option value="O+">AB+</option>
                                </select>

                                @if ($errors->has('Tipo_Sangre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Tipo_Sangre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        
                         <div class="form-group{{ $errors->has('Observaciones') ? ' has-error' : '' }}">
                            <label for="Observaciones" class="col-md-4 control-label">Observaciones</label>

                            <div class="col-md-6">
                                <input id="Observaciones" type="textArea" class="form-control" name="Observaciones" value="{{ old('Observaciones') }}" >

                                @if ($errors->has('Observaciones'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Observaciones') }}</strong>
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
