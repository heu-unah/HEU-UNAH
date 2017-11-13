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
            $table->engine = 'InnoDB';
            $table->increments('idPaciente');
            //$table->string('idPersona',20)->unique();
            $table->string('idPersona',20);
            $table->string('condicion_llegada',100)->nullable();
            $table->string('ubicacion',50)->nullable();
            $table->timestamps();
            $table->foreign('idPersona')->references('idPersona')->on('personas');

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
