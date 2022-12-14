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
        Schema::create('Tatuajes', function(Blueprint $table){
            $table -> id();
            $table -> string('tatu_nombre');
            $table -> string('tatu_descripcion');
            $table -> string('tatu_categoria');
            $table -> string('tatu_precio');
            $table -> string('tatu_imagen');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tatuajes');
    }
};
