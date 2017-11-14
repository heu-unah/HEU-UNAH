<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    //
    
    protected $table = 'movimientos';
    public $auto_increment = false;
    public $incrementing = false;
    protected $fillable = [
        'idMovimiento','idPaciente','idempleado',
        'idHabitacion', 'Movimiento_Fecha', 'Movimiento_Descripcion'
    ];
    
    public function ficha(){
        return $this->belongsTo('App\Ficha',['idMovimiento','idFicha','idPersona'],['idFicha','idPaciente']);
    }
}
