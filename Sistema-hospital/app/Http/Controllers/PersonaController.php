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
<<<<<<< HEAD
	}

    /*public function actualizar(Request $request)
    {
        $persona = Persona::find($request->id);
        $persona->idPersona = $request->idPersona;
        $persona->Persona_Nombre = $request->Persona_Nombre;
        $persona->Persona_Apellido = $request->Persona_Apellido;
        $persona->Persona_Genero = $request->Persona_Genero;
        $persona->Persona_Estatura = $request->Persona_Estatura;
        $persona->Persona_Edad = $request->Persona_Edad;
        $persona->Persona_Descripcion = $request->Persona_Descripcion;
        $persona->Persona_Tes = $request->Persona_Tes;
        $persona->Tipo_Sangre = $request->Tipo_Sangre;
        $persona->Observaciones = $request->Observaciones;
        $persona->save();
        return Redirect::to('/home');
    }

        public function editar($id)
    {
        $persona = Personas::find($id);
        return view('personas.editar', compact('persona'));
    } 
    */
=======
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
    
    
  
    
>>>>>>> 8ce2413bf1ad8de9d4b1259051f5aed0bbeb8659
}
