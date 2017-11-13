<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Yajra\Datatables\DataTables;
use Illuminate\Support\Facades\DB;


use App\Paciente;
use App\Persona;

class PacienteController extends Controller
{
    public function home()
    {
        //Hace el Join de la tabla Pacientes con la tabla Personas
        $Pacientes = Paciente::Join('personas', 'pacientes.idPersona', '=', 'personas.idPersona')->select(['pacientes.idPersona', 'personas.Persona_Nombre', 'personas.Persona_Apellido', 'pacientes.condicion_llegada', 'pacientes.ubicacion'])->paginate(15);
        //Devuelve y renderiza la vista, con el resultado delJoin
        return view('pacientes.home')->with('Pacientes', $Pacientes);
    }


    
    public function mostrarFormCrear()
    {

        return view('pacientes.formulario');
    }

    public function crear()
    {

        //Se instancia el nuevo paciente, según el modelo
        $Paciente = new Paciente;
        //Campos que obtenemos del formulario
        $Paciente->condicion_llegada = request()->input('Condicion_Llegada');
        $Paciente->ubicacion = request()->input('ubicacion');
        //Obtenemos el Id que el usuario ingresa(será nuestro Id para buscar a la persona)
        $idPersona = request()->input('idPersona');
        //Se instancia la nueva persona, según el resultado obtenido con el idPersona
        $Persona = Persona::find($idPersona);

        //Se crea el paciente
        $Persona->paciente()->save($Paciente);
	    return Redirect::to('/home');
	} 

}
