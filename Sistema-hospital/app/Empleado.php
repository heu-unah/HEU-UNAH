<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    //
    protected $table = 'empleados';
    protected $fillable = [
        'idPersona', 'Empleado_Cargo', 
    ];
    
    public function persona(){
        return $this->belongsTo('App\Persona','foreign_key');
    }
    
    public function fichas(){
        return $this->hasMany('App\Ficha','foreign_key','local_key');
    }
}
