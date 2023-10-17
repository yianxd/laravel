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
        Schema::create('manufactures',function(Blueprint $table){
            $table->id();
            $table->string('codigo');
            $table->string('nombre');
            $table->foreignId('pais_origen');
            $table->timestamps();
            $table->foreign('pais_origen')->references('id')->on('countries');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()

    {
        Schema::dropIfExists('manufactures');

        //
    }
};
