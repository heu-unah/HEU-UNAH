<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->integer('idMovimiento'); //como es una llave compuesta no puede ser autonumerico
            $table->integer('idFicha')->unsigned();
            $table->integer('idPaciente')->unsigned();
            $table->integer('idEmpleado')->unsigned();
            $table->integer('idHabitacion')->unsigned();
            $table->datetime('Movimiento_Fecha');
            $table->string('Movimiento_Descripcion',100);
            $table->timestamps();
            
            $table->primary(['idMovimiento','idFicha','idPaciente']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movimientos');
    }
}
