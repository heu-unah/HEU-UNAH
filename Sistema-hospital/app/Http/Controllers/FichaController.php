<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Ficha;

class FichaController extends Controller
{
    //
      public function home()
    {
        $Fichas = Ficha::all()->take(10);
    	return view('fichas.index')->with('Fichas', $Fichas);
    }

    public function mostrarFormCrear()
    {
        return view('fichas.formulario');
    }

    public function crear()
    {
	    $data = request()->all();
	    Ficha::create($data);
	    return Redirect::to('/home');
	} 
}
