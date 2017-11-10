<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    //
    protected $table = 'habitaciones';
    protected $fillable = [
        'Habitacion_Numero', 'Habitacion_Area', 'Disponible',
    ];
}
