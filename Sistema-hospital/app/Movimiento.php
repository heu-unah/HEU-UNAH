<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    //
    
    protected $table = 'movimientos';
    protected $fillable = [
        'idMovimiento','idPaciente','idempleado',
        'idHabitacion', 'Movimiento_Fecha', 'Movimiento_Descripcion'
    ];
}
