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
        Schema::create('deliveries',function(Blueprint $table){
            $table->id();
            $table->string('numero_factura');
            $table->foreign('numero_factura')->references('numero_factura')->on('invoices');
            $table->integer('id_cliente');
            $table->foreignId('ciudad_envio');
            $table->foreign('ciudad_envio')->references('id')->on('cities');
            $table->foreignId('id_transportadora');
            $table->foreign('id_transportadora')->references('id')->on('protrators');
            $table->string('direccion_entrega',100);
            $table->tinyInteger('envio_unico');
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
        Schema::dropIfExists('deliveries');
    }
};
