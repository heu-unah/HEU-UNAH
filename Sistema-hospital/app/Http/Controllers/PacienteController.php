<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Yajra\Datatables\DataTables;

use App\Paciente;

class PacienteController extends Controller
{
    public function home()
    {
        $Pacientes = Paciente::all()->take(10);
        //$Pacientes = Paciente::select(['id','nombre','tes','domicilio'])->take(10);
        return view('pacientes.home')->with('Pacientes', $Pacientes);
    }
    public function mostrarFormCrear()
    {
    	return view('pacientes.crear');
    }

    public function crear()
    {
	    $data = request()->all();
	    Paciente::create($data);
	    return Redirect::to('/home');
	} 

    public function getTasks()
    {
        //$Pacientes = Paciente::all()->take(10);
        //$tasks = Paciente::select(['id','nombre','tes','domicilio']);
 
        
    }
}
