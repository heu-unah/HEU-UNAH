<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;

class Persona extends Model
{
    use FormAccessible;

    //se ingresan los datos necesarios 
    protected $table = 'personas';
    protected $primaryKey = 'idPersona';
    public $auto_increment = false;
    public $incrementing = false;
    protected $fillable = [
       'idPersona','Persona_Nombre', 'Persona_Apellido', 'Persona_Genero','Persona_Estatura','Persona_Edad','Persona_Descripcion',
        'Persona_Tes','Tipo_Sangre','Observaciones'
    ];
    
    public function empleado(){
        return $this->hasOne('App\Empleado','idPersona');
    }
    
    
    public function paciente(){
        return $this->hasOne('App\Paciente', 'idPersona');
    }

    public function scopeNombre($query, $nombre)
    {
        if(trim($nombre) != null)
        {
              $query->where('Persona_Nombre', 'like','%'. $nombre .'%');
        }
    }
}
