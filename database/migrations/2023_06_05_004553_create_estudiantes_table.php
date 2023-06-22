<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->char('codEstudiante',4);
            $table->char('nomEstudiante',30);
            $table->integer('edadEstudiante');
            $table->date('fechaEstudiante');
            $table->char('sexEstudiante',1);
            $table->char('ciudad',5);
            $table->char('barrio',3);
            $table->char('programa',2);
            $table->primary('codEstudiante');
            $table->foreign('ciudad')->references('codCiudad')->on('ciudades');
            $table->foreign('barrio')->references('codBarrio')->on('barrios');
            $table->foreign('programa')->references('codPrograma')->on('programas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
};
