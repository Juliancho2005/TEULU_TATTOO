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
        schema::create('citas', function (Blueprint $table){
            $table -> id();
            $table -> unsignedBigInteger('id_solicitante') -> nullable();
            $table -> datetime('fecha');
            $table -> timestamps();
            // $table -> foreign('id_solicitante') -> references ('id') -> on('users');
        });
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
