<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    //
  //  protected primary_key(['idFicha','idPaciente']);
    public $auto_increment = false;
    public $incrementing = false;
    protected $table = 'fichas';
    protected $fillable = ['idPaciente','idEmpleado','Ficha_Fecha','Estado_Paciente'];
    
    
    public function paciente(){
        return $this->belongsTo('App\Paciente',['idFicha','idPersona'],'idPaciente');
    }
    
    public function empleado(){
        return $this->belongsTo('App\Empleado',['idFicha','idPersona'],'idEmpleado');
    }
    
    public function movimiento(){
        return $this->hasMany('App\Movimiento',['idFicha','idPaciente']);
    }
    
}
