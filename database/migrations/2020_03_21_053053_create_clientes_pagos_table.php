<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesPagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes_pagos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nro_boleta');
            $table->date('fecha');
            $table->decimal('monto');
            $table->unsignedBigInteger('clientes_id');
            $table->foreign('clientes_id')
                    ->references('id')->on('clientes')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('pagos_id');
            $table->foreign('pagos_id')
                    ->references('id')->on('pagos')
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
        Schema::dropIfExists('clientes_pagos');
    }
}
