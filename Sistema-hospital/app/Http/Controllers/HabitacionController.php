<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Habitacion;

class HabitacionController extends Controller
{
    //$this->middleware('auth');
    //
     public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('Habitaciones.formulario');
    }
    
    public function crear(){
        
        $data = request()->all();
        Habitacion::create($data);
        return Redirect::to('/home');
    }
}
