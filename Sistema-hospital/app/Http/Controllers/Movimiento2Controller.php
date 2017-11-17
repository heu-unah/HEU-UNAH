<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movimiento;
use App\Ficha;
use Illuminate\Support\Facades\Redirect;


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
        $Movimientos = Movimiento::all()->take(10);
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
         return view('movimientos.formulario');
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
