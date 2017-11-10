<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Habitacion;

class HabitacionController extends Controller
{
    //
    public function index(){
        return view('Habitaciones.crear');
    }
    
    public function crear(){
        
        $data = request()->all();
        Habitacion::create($data);
        return Redirect::to('/home');
    }
}
