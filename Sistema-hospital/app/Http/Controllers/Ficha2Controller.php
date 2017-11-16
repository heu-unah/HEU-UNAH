<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use App\Ficha;
use App\Persona;
use App\Paciente;
use Illuminate\Support\Facades\DB;
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
         return view('fichas.formulario');
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
}
