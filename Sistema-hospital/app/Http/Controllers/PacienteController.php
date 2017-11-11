<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Paciente;

class PacienteController extends Controller
{
    public function index()
    {
    	return view('pacientes.crear');
    }

    public function crear()
    {
	    $data = request()->all();
	    Paciente::create($data);
	    return Redirect::to('/home');
	} 
}
