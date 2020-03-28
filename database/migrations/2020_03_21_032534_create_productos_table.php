<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('p_nombre');//cambiado de 'nombre' a 'p_nombre' al listar duplicaba con proveedores
            $table->date('fecha_ing');
            $table->decimal('costo');
            $table->integer('stock');
            $table->unsignedBigInteger('proveedores_id');
            $table->foreign('proveedores_id')
                    ->references('id')->on('proveedores')
                    ->onDelete('cascade');
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
        Schema::dropIfExists('productos');
    }
}
