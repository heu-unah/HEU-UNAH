<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    //se ingresan los datos necesarios 
    protected $table = 'personas';
    protected $fillable = [
        'Persona_Nombre', 'Persona_Apellido', 'Persona_Genero','Persona_Estatura','Persona_Edad','Persona_Descripcion',
        'Persona_Tes','Tipo_Sangre','Observacion'
    ];
    
    public function Empleado(){
        return $this->hasOne('App\Empleado','foreign_key','local_key');
    }
    
    
    public function Paciente(){
        return $this->hasOne('App\Paciente','foreign_key','local_key');
    }
}
