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
       
    }

    public function crear()
    {
	
	} 
}
