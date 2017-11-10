<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('idEmpleado');
           $table->string('idPersona',20)->unique();
            $table->string('condicion_llegada',100);
            $table->string('ubicacion',50);
            $table->timestamps();
            /*
            $table->foreign('idPersona')
                ->references('id')->on('personas');
*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
