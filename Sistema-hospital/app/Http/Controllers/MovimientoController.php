<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Movimiento;
class MovimientoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    
    public function home()
    {
        $Movimientos = Movimiento::all()->take(10);
    	return view('movimientos.index')->with('Movimientos', $Movimientos);
    }

    public function mostrarFormCrear()
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
