<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use View;

use App\Persona;

class PersonaController extends Controller
{
    //
    public function home(Request $request)
    {
        if(request()->input('NombrePersona') != null)
        {
            $Personas = Persona::nombre(request()->input('NombrePersona'))->paginate(15);
            return view('personas.index')->with('Personas', $Personas);
        }
        else
        {
            $Personas = Persona::paginate(15);
    	   return view('personas.index')->with('Personas', $Personas);
            
        }
    }

    public function mostrarFormCrear()
    {
        return view('personas.formulario');
    }
    
    public function crear()
    {
	    $data = request()->all();
	    Persona::create($data);
	    return Redirect::to('personas.index');

	}
    
    public function editar($id){
        
        $persona = Persona::findorFail($id);
        return view('personas.editar',compact('persona'));
       // dd($persona);
        //return View::make('personas/editar', compact('persona'));
    }
    
    public function update(Request $request){
       // echo "aqui estoy";
        
        $persona = Persona::findOrFail($request->idPersona);
        dd($persona);
        $persona->fill(Request()::all());
        $persona->save();
        
        return Redirect::to('personas.index');
    }
    
}
