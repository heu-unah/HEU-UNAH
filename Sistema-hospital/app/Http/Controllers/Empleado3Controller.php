<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;  
use View;

use App\Empleado;
use App\Persona;


class Empleado3Controller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
        //
        
        $Empleados = Empleado::Join('personas', 'empleados.idPersona', '=', 'personas.idPersona')
            ->select(['empleados.idEmpleado','empleados.idPersona', 'personas.Persona_Nombre', 'personas.Persona_Apellido', 'empleados.Empleado_Cargo'])->paginate(15);
        
        return view('empleados.index')->with('Empleados', $Empleados);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $personas = DB::table('personas')->get();

        return view('empleados.formulario',['personas'=>$personas]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $Empleado = new Empleado;
        $Empleado->Empleado_Cargo = request()->input('Empleado_Cargo');
        $idPersona = request()->input('idPersona');
        $Persona = Persona::find($idPersona);
		
		
            $Persona->empleado()->save($Empleado);
            return Redirect::to('/empleados');
			/*
        if($Persona != null){

        }
        else{
            return redirect()->route('empleados.create')->with(['message'=> '¡ID de persona no existe!']);
        }
*/

	    /*$data = request()->all();
	    Empleado::create($data);*/

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        
        $empleado = Empleado::FindOrFail($id);
            if ($empleado){
              $datosEmpleado = DB::table('empleados as pa')
                  ->select('pa.idEmpleado', 'pa.idPersona','pa.Empleado_Cargo','pe.Persona_Nombre','pe.Persona_Apellido')
                  ->join('personas as pe', 'pa.idPersona', '=', 'pe.idPersona')->get();
               // dd($datosPaciente);

               return view('empleados.editar',['datosEmpleado'=>$datosEmpleado, 'empleado' => $empleado]);
               
            }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        
    public function update(Request $request, $id)
    {
        //
        $empleado = Empleado::findOrFail($id);
        
        $empleado->fill(request()->all());
        $empleado->Empleado_Cargo = request()->input('Empleado_Cargo');
        //dd($empleado);
        $empleado->save();
        return Redirect::to('/empleados');  
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
        $empleado = Empleado::findOrFail($id);
        if ($empleado != null){
            $empleado->delete();
            return redirect()->route('empleados.index');
        }
        else{
            return redirect()->route('empleados.index')->with(['message'=> 'Wrong ID!!']);
        }
        
    }
    
    
    public function home(Request $request)
    {
        if(request()->input('NombreEmpleado') != null){
            $Empleados = Empleado::nombre(request()->input('NombreEmpleado'))->paginate(15);
            return view('empleados.index')->with('Empleados', $Empleados);
        }
        else
        {
            $Empleados = Empleado::Join('personas', 'empleados.idPersona', '=', 'personas.idPersona')->select(['empleados.idEmpleado', 'empleados.idPersona', 'personas.Persona_Nombre', 'personas.Persona_Apellido', 'empleados.Empleado_Cargo'])->paginate(15);
        
            return view('empleados.index')->with('Empleados', $Empleados);
        }
        
    }
}
