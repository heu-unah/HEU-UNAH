<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'pacientes';
    protected $primary_key = 'idPaciente';
    /*
    protected $fillable = [
        'nombre', 'tes', 'domicilio',
    ];*/
    protected $fillable = [
        'Condicion_Llegada','Ubicacion'
    ];
    
    //protected $hidden = ['idEmpleado' ,'createt_at'];
    public function persona(){
        return $this->belongsTo('App\Persona','idPersona', 'idPaciente');
    }

    public function fichas(){
        return $this->hasMany('App\Ficha','idPaciente');
    }
}
