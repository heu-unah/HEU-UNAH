<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;

//use promoapp\Http\Requests;
use promoapp\Local;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use promoapp\Http\Requests\LocalFormRequest;
use DB;
use View;


class Persona3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
        //
        $Personas = Persona::all()->take(10);
        //dd($Personas);
    	return view('personas.index')->with('Personas', $Personas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('personas.formulario');

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
	    Persona::create($data);
	    return Redirect::to('/personas');

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
         $persona = Persona::findOrFail($id);
        //return view('personas.editar', compact($persona));
       // return view('personas.editar', compact($persona));
          return View::make('personas.editar')->with('persona',$persona);
       // dd($persona);
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
        //dd($persona);
        
        $persona = Persona::findOrFail($id);
        $persona->fill(request()->all());
        $persona->save();
        return Redirect::to('/personas');  
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Persona::find($id);
        if ($persona != null){
            
            $persona->delete();

           // Session::flash('message', 'Successfully deleted the nerd!');
            return Redirect::to('/personas');
        
        }else{
             return redirect()->route('personas.index')->with(['message'=> 'Wrong ID!!']);
        }
    }
    
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
    
}
