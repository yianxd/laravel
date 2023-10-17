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
        Schema::create('products',function(Blueprint $table){
            $table->id();
            $table->string('codigo',50);
            $table->foreignId('id_categoria');
            $table->foreignId('id_marca');
            $table->string('descripcion',50);
            $table->enum('unidades_medida', ['otro', 'unidad']);
            $table->tinyInteger('disponible');
            $table->decimal('porcentaje_iva', $precision = 4, $scale = 2);
            $table->decimal('precio_unitario', $precision = 20, $scale = 2);
            $table->smallInteger('stock');
            $table->foreign('id_marca')->references('id')->on('manufactures');
            $table->foreign('id_categoria')->references('id')->on('categories');
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
        Schema::dropIfExists('products');
    }
};
