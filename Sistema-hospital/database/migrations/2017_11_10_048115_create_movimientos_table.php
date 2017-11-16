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
            $table->engine = 'InnoDB';
            $table->integer('idMovimiento'); //como es una llave compuesta no puede ser autonumerico
            $table->integer('idFicha')->unsigned();
            $table->integer('idEmpleado')->unsigned();
            $table->integer('idHabitacion')->unsigned();
            $table->datetime('Movimiento_Fecha');
            $table->string('Movimiento_Descripcion',100);
            $table->timestamps();
            
            $table->primary(['idMovimiento','idFicha']);
            
            $table->foreign('idFicha')->references('idFicha')->on('fichas');
            //$table->foreign('idPaciente')->references('idPaciente')->('fichas');
            
            $table->foreign('idHabitacion')->references('id')->on('habitaciones');
            $table->foreign('idEmpleado')->references('idEmpleado')->on('empleados');
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
