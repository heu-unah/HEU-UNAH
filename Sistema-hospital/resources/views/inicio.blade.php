@extends('layouts.app')

@section('titulo',"Inicio")

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				
				<h1 class="animated fadeInDown text-center">Pagina de inicio-Sistema Hospital</h1>
				<div class="col-xs-12 col-md-12 form-group form-group-lg row">
				<br>
					
					<form class="navbar-form " role="search" action="{{ url('pacientes/buscar') }}" method="GET">
						<h2 class="text-center">Buscar paciente</h2>
						<div class="input-group col-md-10">
  							<span class="input-group-addon">Buscar paciente</span>
  							<input type="text" class="form-control" placeholder="Nombre del paciente" id="NombrePaciente" name="NombrePaciente">
						</div>
	                    

	                    <button type="submit" class="btn btn-default">Buscar</button>
	                </form>
				</div>
			</div>
		</div>
	</div>

@endsection