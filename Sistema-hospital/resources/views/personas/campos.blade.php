                    <div class="form-group{{ $errors->has('idPersona') ? ' has-error' : '' }}">
                            <label for="idPersona" class="col-md-4 control-label">Identificación</label>

                            <div class="col-md-6">
                                <input id="idPersona" type="text" pattern="[0-9]{4}-[0-9]{4}-[0-9]{5}" placeholder="Número de cédula de identidad" class="form-control" name="idPersona" value="{{ old('idPersona') }}" required autofocus>

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
                                <input id="Persona_Nombre" type="text" pattern="[A-Za-z]" placeholder="Nombre de la persona" class="form-control" name="Persona_Nombre" value="{{ old('Persona_Nombre') }}" required autofocus>

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
                                <input id="Persona_Apellido" type="text" pattern="[A-Za-z]" placeholder="Apellido de la persona" class="form-control" name="Persona_Apellido" value="{{ old('Persona_Apellido') }}" required autofocus>

                                @if ($errors->has('Persona_Apellido'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Persona_Apellido') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                         <div class="form-group{{ $errors->has('Persona_Genero') ? ' has-error' : '' }}">
                            <label for="Persona_Genero" class="col-md-4 control-label">Género</label>

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
                                <input id="Persona_Estatura" type="number" min="1" step="0.1" max="2.5" class="form-control" name="Persona_Estatura" value="{{ old('Persona_Estatura') }}" placeholder="Ingrese la estatura en metros" required autofocus>

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
                                <input id="Persona_Edad" type="number"  min="1" max="115" placeholder="Edad de la persona" class="form-control" name="Persona_Edad" value="{{ old('Persona_Edad') }}" required autofocus>

                                @if ($errors->has('Persona_Edad'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Persona_Edad') }}</strong>
                                    </span>
                                @endif
                            </div> 
                            
                            
                        </div>
                        
                        <div class="form-group{{ $errors->has('Persona_Descripcion') ? ' has-error' : '' }}">
                            <label for="Persona_Descripcion" class="col-md-4 control-label">Descripción</label>

                            <div class="col-md-6">
                                <input id="Persona_Descripcion" type="textarea" placeholder="Descripción de la persona" class="form-control" name="Persona_Descripcion" value="{{ old('Persona_Descripcion') }}" required autofocus>

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
                                <input id="Persona_Tes" type="text" placeholder="Tes de la persona" pattern="[A-Za-z]" class="form-control" name="Persona_Tes" value="{{ old('Persona_Tes') }}" required autofocus>

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
                                        <option value="A-">A-</option>
                                        <option value="A+">A+</option>
                                        <option value="AB-">AB-</option>
                                        <option value="AB+">AB+</option>
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
                                <input id="Observaciones" type="textArea" placeholder="Observaciones" class="form-control" name="Observaciones" value="{{ old('Observaciones') }}" >

                                @if ($errors->has('Observaciones'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('Observaciones') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        