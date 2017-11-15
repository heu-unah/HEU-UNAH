<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Empleado extends Model
{
    //
    protected $primaryKey = 'idEmpleado';
    protected $table = 'empleados';
    protected $fillable = [
        'Empleado_Cargo', 
    ];
    protected $guarded = ['idPersona'];
    public $auto_increment = true;
    
    public function persona(){
        return $this->belongsTo('App\Persona','idPersona', 'idEmpleado');
    }
    
    public function fichas(){
        return $this->hasMany('App\Ficha','idEmpleado');
    }

    public function scopeNombre($query, $nombre)
    {
        if(trim($nombre) != null)
        {
            $query->Join('personas', 'empleados.idPersona', '=', 'personas.idPersona')->select(['empleados.idEmpleado','empleados.idPersona', 'personas.Persona_Nombre', 'personas.Persona_Apellido', 'empleados.Empleado_cargo'])->where('personas.Persona_Nombre', $nombre);
        }
    }
}
