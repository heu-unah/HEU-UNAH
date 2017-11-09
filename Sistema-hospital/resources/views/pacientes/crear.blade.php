@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Registro de paciente</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('pacientes/crear') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label for="nombre" class="col-md-4 control-label">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" required autofocus>

                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nombre') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('tes') ? ' has-error' : '' }}">
                            <label for="tes" class="col-md-4 control-label">Tes</label>

                            <div class="col-md-6">
                                <input id="tes" type="text" class="form-control" name="tes" value="{{ old('tes') }}" required autofocus>

                                @if ($errors->has('tes'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('tes') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('domicilio') ? ' has-error' : '' }}">
                            <label for="dom" class="col-md-4 control-label">Domicilio</label>

                            <div class="col-md-6">
                                <input id="dom" type="text" class="form-control" name="domicilio" value="{{ old('domicilio') }}" required autofocus>

                                @if ($errors->has('domicilio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('domicilio') }}</strong>
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
