<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    protected $primary_key = 'idEmpleado';
    protected $table = 'empleados';
    protected $fillable = [
        'Empleado_Cargo', 
    ];
    
    public function persona(){
        return $this->belongsTo('App\Persona','idPersona', 'idEmpleado');
    }
    
    public function fichas(){
        return $this->hasMany('App\Ficha','foreign_key','local_key');
    }
}
