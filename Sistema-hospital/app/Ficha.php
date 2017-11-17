<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Empleado;
use App\Persona;

class Ficha extends Model
{
    //
       protected $primaryKey = 'idFicha';
    /*public $auto_increment = false;
    public $incrementing = false;*/
    protected $table = 'fichas';
    protected $fillable = ['idPaciente','idEmpleado','Ficha_Fecha','Estado_Paciente'];
    
    
    public function paciente(){
       // return $this->belongsTo('App\Paciente',['idFicha','idPersona'],'idPaciente');
        return $this->belongsTo('App\Paciente');
    }
    
    public function empleado(){
        return $this->belongsTo('App\Empleado','idMov');
    }
    
    public function movimientos(){
        return $this->hasMany('App\Movimiento','idFicha');
    }
    
    public function scopeBusqueda($query, $nombre){
        
        if (trim($nombre) != null){
             $query = DB::table('fichas as f')->orderBy('f.Ficha_Fecha','DESC')
                ->select(['f.idFicha','f.idPaciente','pe.Persona_Nombre',
                         'pe.Persona_Apellido','f.Ficha_Fecha','f.Estado_Paciente','f.idEmpleado'])
                ->join('pacientes as pa','f.idPaciente', '=' ,'pa.idPaciente')
                ->join('personas as pe', 'pa.idPersona','=', 'pe.idPersona')
                 ->where('pe.Nombre_Persona','like','%'. $nombre . '%');
        }
    }
   
    
}
