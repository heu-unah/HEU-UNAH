<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Ficha;

class FichaController extends Controller
{
    //
      public function index()
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
