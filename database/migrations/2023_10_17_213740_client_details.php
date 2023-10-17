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
        Schema::create('client_details',function(Blueprint $table){
            $table->id();
            $table->string('nombre',50);
            $table->string('numero_factura',50);
            $table->timestamp('fecha_emision');
            $table->tinyInteger('estado');
            $table->string('codigo_producto');
            $table->integer('cantidad');
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
        Schema::dropIfExists('client_details');
    }
};
