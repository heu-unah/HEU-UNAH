@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro de Paciente</div>

                <div class="panel-body">
                   
                   {{ Form::model($paciente, ['route' =>['pacientes.update',$paciente->idPaciente], 'method' => 'PUT', 'class' => "form-horizontal"] ) }}
                  
                        {{ csrf_field() }}

                        <?php $info = json_decode($datosPaciente,true);?>
                              
                         
                          
                           <div class="form-group{{ $errors->has('idPersona') ? ' has-error' : '' }}">
                            <label for="idPersona" class="col-md-4 control-label">Identificación</label>

                            <div class="col-md-6">
                                <input id="idPersona" type="text" class="form-control" name="idPersona" value="{{$info[0]["idPersona"]}}" required autofocus disabled>

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
                              

                                <input id="Persona_Nombre" type="text" class="form-control"  name="Persona_Nombre" value="{{$info[0]["Persona_Nombre"]}}"  disabled>

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
                                <input id="Persona_Apellido" type="text" class="form-control" name="Persona_Apellido" value="{{ $info[0]["Persona_Apellido"]}}"  disabled>

                                @if ($errors->has('Persona_Apellido'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Persona_Apellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        
                        <div class="form-group{{ $errors->has('Condicion_Llegada') ? ' has-error' : '' }}">
                            <label for="Condicion_Llegada" class="col-md-4 control-label">Condición</label>

                            <div class="col-md-6">
                                <input id="Condicion_Llegada" type="textarea" class="form-control" name="Condicion_Llegada" value="{{$paciente->condicion_llegada}}" required autofocus>

                                @if ($errors->has('Condicion_Llegada'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Condicion_Llegada') }}</strong>
                                    </span>value= {{ $paciente->Condicion_Llegada }}
                                @endif
                            </div> 
                             
                        </div>

                        
                        
                        <div class="form-group{{ $errors->has('ubicacion') ? ' has-error' : '' }}">
                            <label for="ubicacion" class="col-md-4 control-label">Ubicación</label>

                            <div class="col-md-6">
                                <input id="ubicacion" type="textarea" class="form-control" name="ubicacion" value="{{$paciente->ubicacion}}"  required autofocus>

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
                                    Actualizar
                                </button>
                            </div>
                        </div>
                        
                   {{ Form::close() }}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
