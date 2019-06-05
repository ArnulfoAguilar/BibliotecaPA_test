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
        Schema::create('ejemplars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('isbn');
            $table->string('nombre');
            $table->string('autor');
            $table->string('descripcion');
            $table->binary('portada');
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
