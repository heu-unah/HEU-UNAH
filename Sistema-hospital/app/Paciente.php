<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $table = 'pacientes';
    protected $primaryKey = 'idPaciente';
    /*
    protected $fillable = [
        'nombre', 'tes', 'domicilio',
    ];*/
    protected $fillable = [
     'idPersona','Condicion_Llegada','Ubicacion'
    ];
    
    //protected $hidden = ['idEmpleado' ,'createt_at'];
    public function persona(){
        return $this->belongsTo('App\Persona','idPersona', 'idPaciente');
    }

    public function fichas(){
        return $this->hasMany('App\Ficha','idPaciente');
    }

    public function scopeNombre($query, $nombre)
    {
        if(trim($nombre) != null)
        {
              $query->Join('personas', 'pacientes.idPersona', '=', 'personas.idPersona')->select(['pacientes.idPersona', 'personas.Persona_Nombre', 'personas.Persona_Apellido', 'pacientes.condicion_llegada', 'pacientes.ubicacion'])->where('personas.Persona_Nombre','like','%'. $nombre .'%');

            //$query->where('Persona_Nombre', $nombre);
            //$query->where(\DB::raw("CONCAT(Persona_Nombre, ' ', Persona_Apellido)"), "LIKE", "%$nombre%");
        }
    }
}
