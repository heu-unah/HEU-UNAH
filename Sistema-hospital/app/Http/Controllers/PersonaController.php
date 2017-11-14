<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use View;

use App\Persona;

class PersonaController extends Controller
{
    //
    public function home()
    {
        $Personas = Persona::all()->take(10);
        //dd($Personas);
    	return view('personas.index')->with('Personas', $Personas);
    }

    public function mostrarFormCrear()
    {
        return view('personas.formulario');
    }
    
    public function crear()
    {
	    $data = request()->all();
	    Persona::create($data);
	    return Redirect::to('/home');
	} 
   
    
    public function editar($id){
        
        $persona = Persona::findorFail($id);
        return view('personas.editar',compact('persona'));
       // dd($persona);
        //return View::make('personas/editar', compact('persona'));
    }
    
    public function update($id){
       // echo "aqui estoy";
        
        $persona = Persona::findOrFail($id);
        dd(persona);
        $persona->fill(Request()::all());
        $persona->save();
        
        return Redirect::to('personas.index');
    }
    
    
  
    
}
