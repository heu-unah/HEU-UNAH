<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\DB; 

use App\Ficha;
use App\Empleado;
use App\Paciente;


class Ficha2Controller extends Controller
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
        
        $Fichas = DB::table('fichas as f')->orderBy('f.Ficha_Fecha','DESC')
            ->select('f.idFicha','f.idPaciente','pe.Persona_Nombre','pe.Persona_Apellido','f.Ficha_Fecha','f.Estado_Paciente','f.idEmpleado')
            ->join('pacientes as pa','f.idPaciente', '=' ,'pa.idPaciente')
            ->join('personas as pe', 'pa.idPersona','=', 'pe.idPersona')->take(10)->get();
        
       // $Fichas = Ficha::Join('pacientes', 'fichas.idPaciente', '=', 'pacientes.idPaciente')::Join('personas','pacientes.idPersona', '=', 'personas.idPersona')
         //   ->select(['fichas.idFicha','fichas.idPaciente','personas.Persona_Nombre', 'personas.Persona_Apellido',
           //          'fichas.Ficha_Fecha','Estado_Paciente','idEmpleado'])->take(10);
            // $Fichas = Ficha::all()->take(10);
    	return view('fichas.index')->with('Fichas', $Fichas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        $empleados = Empleado::Join('personas', 'empleados.idPersona', '=', 'personas.idPersona')
            ->select(['empleados.idEmpleado','empleados.idPersona', 'personas.Persona_Nombre', 'personas.Persona_Apellido', 'empleados.Empleado_Cargo'])->get();
        $pacientes = Paciente::Join('personas', 'pacientes.idPersona', '=', 'personas.idPersona')->select(['pacientes.idPersona', 'pacientes.idPaciente', 'personas.Persona_Nombre', 'personas.Persona_Apellido'])->get();

        return view('fichas.formulario',['pacientes'=>$pacientes, 'empleados'=>$empleados]);
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
		
        $data = request()->all();
		//dd($data);
	    Ficha::create($data);
	    return Redirect::to('/fichas');
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
    

    public function buscar(Request $request){
		
         if(request()->input('NombrePaciente') != null){
			
			$nombre = request()->input('NombrePaciente');
			//dd($nombre);
			$Fichas = DB::table('fichas as f')->orderBy('f.Ficha_Fecha','DESC')
            ->select('f.idFicha','f.idPaciente','pe.Persona_Nombre','pe.Persona_Apellido','f.Ficha_Fecha','f.Estado_Paciente','f.idEmpleado')
            ->join('pacientes as pa','f.idPaciente', '=' ,'pa.idPaciente')
            ->join('personas as pe', 'pa.idPersona','=', 'pe.idPersona')
                 ->where('pe.Persona_Nombre','like','%'. $nombre . '%')->get();
			//dd($Fichas);


            $fichaDetalle = $request->idFicha;
            
            foreach($Fichas as $value) {
                $idFicha = $value->idFicha;
            
             
                $Movimientos = DB::table('movimientos as m')
                ->select('m.idMovimiento','m.Movimiento_Descripcion','m.idHabitacion','m.Movimiento_Fecha')
                ->where('m.idFicha','=',$idFicha)
                ->orderBy('m.Movimiento_Fecha', 'DESC')->get();
                return view('fichas.historial',['Fichas' => $Fichas, 'Movimientos' =>$Movimientos]);
            }





			//return view('fichas.historial')->with('Fichas',$Fichas);
		
		 
		 /*else if (request()->input('idFicha' != null){
			 
			 $fichaDetalle = $request->idFicha;
			
			foreach($Fichas as $value) {
				$idFicha = $value->idFicha;
			
			 
			 $Movimientos = DB::table('movimientos as m')
			 ->select('m.idMovimiento','m.Movimiento_Descripcion','m.idHabitacion','m.Movimiento_Fecha')
			 ->where('m.idFicha','=',$idFicha)
			 ->orderBy('m.Movimiento_Fecha', 'DESC')->get();
			
			
			return view('fichas.historial',['Fichas' => $Fichas, 'Movimientos' =>$Movimientos]);
			
		 }*/
    }

}
}