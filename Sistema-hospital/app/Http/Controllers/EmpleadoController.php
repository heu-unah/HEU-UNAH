<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use App\Empleado;
use App\Persona;

class EmpleadoController extends Controller
{
    //
    
    /*
    public function home(Request $request)
    {
        if(request()->input('NombreEmpleado') != null){
            $Empleados = Empleado::nombre(request()->input('NombreEmpleado'))->paginate(15);
            return view('empleados.index')->with('Empleados', $Empleados);
        }
        else
        {
            $Empleados = Empleado::Join('personas', 'empleados.idPersona', '=', 'personas.idPersona')->select(['empleados.idPersona', 'personas.Persona_Nombre', 'personas.Persona_Apellido', 'empleados.Empleado_cargo'])->paginate(15);
        
            return view('empleados.index')->with('Empleados', $Empleados);
        }
        
    }

    public function mostrarFormCrear()
    {
        return view('empleados.formulario');
    }
    
    public function crear()
    {
        $Empleado = new Empleado;
        $Empleado->Empleado_cargo = request()->input('Empleado_cargo');
        $idPersona = request()->input('idPersona');
        $Persona = Persona::find($idPersona);
        $Persona->empleado()->save($Empleado);


	    /*$data = request()->all();
	    Empleado::create($data);
	    return Redirect::to('/home');
	} 
    */
}
