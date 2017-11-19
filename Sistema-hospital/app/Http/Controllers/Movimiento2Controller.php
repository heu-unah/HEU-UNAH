<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movimiento;
use App\Ficha;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB; 
use App\Empleado;
use App\Habitacion;


class Movimiento2Controller extends Controller
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
        $Movimientos = Movimiento::paginate(15);
    	return view('movimientos.index')->with('Movimientos', $Movimientos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Fichas = DB::table('fichas as f')->orderBy('f.Ficha_Fecha','DESC')
            ->select('f.idFicha','f.idPaciente','pe.Persona_Nombre','pe.Persona_Apellido','f.Ficha_Fecha','f.Estado_Paciente','f.idEmpleado')
            ->join('pacientes as pa','f.idPaciente', '=' ,'pa.idPaciente')
            ->join('personas as pe', 'pa.idPersona','=', 'pe.idPersona')->get();
        
        $empleados = Empleado::Join('personas', 'empleados.idPersona', '=', 'personas.idPersona')
            ->select(['empleados.idEmpleado','empleados.idPersona', 'personas.Persona_Nombre', 'personas.Persona_Apellido', 'empleados.Empleado_Cargo'])->get();
        $habitaciones = Habitacion::all();
        //dd($habitaciones);
         return view('movimientos.formulario',['Fichas'=>$Fichas, 'empleados'=>$empleados, "habitaciones"=>$habitaciones]);
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
		$movimiento = new Movimiento;
		$idFicha = request()->input('idFicha');
		$movimiento->idMovimiento = request()->input('idMovimiento');
		$movimiento->idHabitacion = request()->input('idHabitacion');
		$movimiento->idFicha = request()->input('idFicha');
		$movimiento->Movimiento_Fecha = request()->input('Movimiento_Fecha');
		$movimiento->Movimiento_Descripcion = request()->input('Movimiento_Descripcion');
		$movimiento->idEmpleado = request()->input('idEmpleado');
        $Ficha = Ficha::find($idFicha);
        //$data = request()->all();
		
		if ($Ficha != null){
			$movimiento->save();
			//$Ficha->movimiento()->save($movimiento);
             
             return Redirect::to('/movimientos');
        }
        else{
            return redirect()->route('movimientos.create')->with(['message'=> '¡ID de persona no existe!']);
        }
	    /*Movimiento::create($data);
	    return Redirect::to('/movimientos');*/
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
    }
}
