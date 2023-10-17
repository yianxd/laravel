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
        Schema::create('details_in',function(Blueprint $table){
            $table->string('numero_factura',50);
            $table->foreign('numero_factura')->references('numero_factura')->on('invoices');
            $table->string('codigo_producto',50);
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
        Schema::dropIfExists('details_in');
    }
};
