<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Empleado;

class EmpleadoController extends Controller
{
    //
    
    public function index()
    {
    	return view('empleados.formulario');
    }
    
    public function crear()
    {
	    $data = request()->all();
	    Empleado::create($data);
	    return Redirect::to('/home');
	} 
}
