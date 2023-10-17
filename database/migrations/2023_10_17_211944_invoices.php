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
        Schema::create('invoices',function(Blueprint $table){
            $table->id();
            $table->string('numero_factura',50)->unique();
            $table->string('id_vendedor',50);
            $table->foreign('id_vendedor')->references('id_vendedor')->on('sellers');
            $table->foreignId('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('clients');
            $table->timestamp('fecha_emision');
            $table->tinyInteger('estado');
            $table->enum('forma_pago',['contado','credito']);
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
        //
        Schema::dropIfExists('invoices');
    }
};
