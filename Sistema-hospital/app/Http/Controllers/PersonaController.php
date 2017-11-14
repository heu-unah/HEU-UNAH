<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use View;
use promoapp\Http\Requests;
use promoapp\Local;
use Illuminate\Support\Facades\Input;
use promoapp\Http\Requests\LocalFormRequest;
use DB;

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

    }
    
    public function update(LocalFormRequest $request, $id){
       // echo "aqui estoy";
       
            $persona = Persona::findOrFail($id);
          //  dd(persona);
            $persona->fill(Request()::all());
            $persona->save();
            return Redirect::to('personas.index');  

      
    }
    
    
  
    
}
