@extends('layouts.app')

@section('titulo',"Registrar pacientes")

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro de habitación</div>

                <div class="panel-body">
                   
                    <form class="form-horizontal" method="POST" action="{{ route('habitaciones.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('habitacion_numero') ? ' has-error' : '' }}">
                            <label for="Habiracion_Area" class="col-md-4 control-label">Numero de habitación</label>

                            <div class="col-md-6">
                                <input id="habitacion_numero" type="number" min="1"  class="form-control" name="habitacion_numero" value="{{ old('habitacion_numero') }}" required autofocus>

                                @if ($errors->has('habitacion_numero'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('habitacion_numero') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('habitacion_area') ? ' has-error' : '' }}">
                            <label for="Habiracion_Area" class="col-md-4 control-label">Área de habitación</label>

                            <div class="col-md-6">
                                <input id="habitacion_area" type="textarea" class="form-control" name="habitacion_area" value="{{ old('habitacion_area') }}" required autofocus>

                                @if ($errors->has('habitacion_area'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('habitacion_area') }}</strong>
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
