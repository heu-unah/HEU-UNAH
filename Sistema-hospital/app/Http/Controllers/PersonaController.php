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

    }
    
<<<<<<< HEAD
    public function update(Request $request){
       // echo "aqui estoy";
        
        $persona = Persona::findOrFail($request->idPersona);
        dd($persona);
        $persona->fill(Request()::all());
        $persona->save();
        
        return Redirect::to('personas.index');
=======
    public function update(LocalFormRequest $request, $id){
       // echo "aqui estoy";
       
            $persona = Persona::findOrFail($id);
          //  dd(persona);
            $persona->fill(Request()::all());
            $persona->save();
            return Redirect::to('personas.index');  

      
>>>>>>> 99ca699b4c131eb6083a9c95b2395487251b9fd2
    }
    
}
