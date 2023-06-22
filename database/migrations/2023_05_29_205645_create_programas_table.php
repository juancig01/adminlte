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
        Schema::create('programas', function (Blueprint $table) {
            $table->char('codPrograma',10);
            $table->char('nomPrograma',30);
            $table->char('facultad',10); //esta es una llave foranea
            $table->primary('codPrograma');//esta es primaria
            $table->foreign('facultad')->references('codFacultad')->on('facultades'); //on facultades es el nombre de la tabla facultades
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
        Schema::dropIfExists('programas');
    }
};
