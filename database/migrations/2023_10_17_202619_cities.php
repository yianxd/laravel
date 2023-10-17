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
        Schema::create('cities',function(Blueprint $table){
            $table->id();
            $table->string('codigo_pais',10);
            $table->string('nombre');
            $table->timestamps();
            $table->foreign('codigo_pais')->references('codigo_pais')->on('countries')->onDelete('cascade')->onUpdate('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
        //
    }
};
