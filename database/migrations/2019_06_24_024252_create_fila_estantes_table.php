<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilaEstantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fila_Estantes', function (Blueprint $table) {
            $table->bigIncrements('ID_FILA');
            $table->unsignedInteger('ID_BIBLIOTECA');
            $table->foreign('ID_BIBLIOTECA')->references('ID_BIBLIOTECA')->on('Bibliotecas')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('ID_ESTANTE');
            $table->foreign('ID_ESTANTE')->references('ID_ESTANTE')->on('Estantes')->onDelete('restrict')->onUpdate('restrict');
            $table->string('NOMBRE','100');
            $table->string('DESCRIPCION','255');
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
        Schema::dropIfExists('fila_estantes');
    }
}
