<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'pacientes';
    /*
    protected $fillable = [
        'nombre', 'tes', 'domicilio',
    ];*/
    protected $fillable = [
        'idPersona','Condicion_Llegada','Ubicacion'
    ];
    
    //protected $hidden = ['idEmpleado' ,'createt_at'];
    public function persona(){
        return $this->belongsTo('App\Persona','foreign_key');
    }

    public function fichas(){
        return $this->hasMany('App\Ficha','foreign_key','local_key');
    }
}
