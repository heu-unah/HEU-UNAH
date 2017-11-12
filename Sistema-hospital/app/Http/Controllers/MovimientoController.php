<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Movimiento;
class MovimientoController extends Controller
{
    //
    
    public function index()
    {
    	return view('movimientos.formulario');
    }

    public function crear()
    {
	    $data = request()->all();
	    Movimiento::create($data);
	    return Redirect::to('/home');
	} 
    
}
