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
        Schema::create('sellers',function(Blueprint $table){
            $table->id();
            $table->string('id_vendedor')->unique();
            $table->string('nombre',50);
            $table->string('apellidos',50);
            $table->decimal('salario_basico',$precision=20,$scale=2);
            //$table->foreign('id_vendedor')->references('stock')->on('products');
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
