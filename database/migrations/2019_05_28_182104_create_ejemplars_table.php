<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEjemplarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ejemplares', function (Blueprint $table) {
            $table->bigIncrements('ID_EJEMPLAR');
            $table->bigInteger('ISBN');
            $table->string('EJEMPLAR');
            $table->string('AUTOR');
            $table->binary('PORTADA');
            $table->string('DESCRIPCION');
            $table->string('PALABRAS_CLAVE');
            $table->integer('NUMERO_PAGINAS');
            $table->integer('NUMERO_COPIAS');
            $table->unsignedInteger('ID_AUTOR');
            $table->foreign('ID_AUTOR')->references('ID_AUTOR')->on('Autores')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('ID_CATEGORIA');
            $table->foreign('ID_CATEGORIA')->references('ID_CATEGORIA')->on('categoria_Libros')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('ejemplars');
    }
}
