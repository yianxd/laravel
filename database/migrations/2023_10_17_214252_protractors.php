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
        //
        Schema::create('protrators',function(Blueprint $table){
            $table->id();
            $table->string('nombre',50);
            $table->string('direccion',50);
            $table->foreignId('id_ciudad');
            $table->foreign('id_ciudad')->references('id')->on('cities');
            $table->string('telefono',20);
            $table->string('correo',50);
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
        Schema::dropIfExists('protrators');
    }
};
