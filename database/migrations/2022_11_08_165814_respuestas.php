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
        Schema::table('Respuestas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Id_Mensaje');
            $table->unsignedBigInteger('Id_Remitente');
            $table->unsignedBigInteger('Id_Receptor');
            $table->string('Contenido');

            $table->foreign('Id_Remitente')->references('id')->on('users');
            $table->foreign('Id_Receptor')->references('id')->on('users');
            $table->foreign('Id_Remitente')->references('id')->on('users'); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Respuestas');
    }
};
