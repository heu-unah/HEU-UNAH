<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Persona;

class PersonaController extends Controller
{
    //
    public function index()
    {
    	return view('personas.formulario');
    }
    
    public function crear()
    {
	    $data = request()->all();
	    Persona::create($data);
	    return Redirect::to('/home');
	} 
    
}
