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
        $table -> id('id_cita');
        $table -> unsignedBigInteger('id_solicitante');
        $table -> foreign('id_solicitante') -> references ('id') -> on('users');
        $table -> datetime('fecha');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
