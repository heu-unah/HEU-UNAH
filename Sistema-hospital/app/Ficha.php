<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    //
    protected $table = 'fichas';
    protected $fillable = ['idPaciente','idEmpleado','Ficha_Fecha','Estado_Paciente'];
    
    public function paciente(){
        return $this->belongsTo('App\Paciente','foreign_key','other_key');
    }
    
    public function empleado(){
        return $this->belongsTo('App\Empleado','foreign_key','other_key');
    }
    
}
