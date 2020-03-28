<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes_servicios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('clientes_id');
            $table->foreign('clientes_id')
                    ->references('id')->on('clientes')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('servicios_id');
            $table->foreign('servicios_id')
                    ->references('id')->on('servicios')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('clientes_pagos_id');
            $table->foreign('clientes_pagos_id')
                    ->references('id')->on('clientes_pagos')
                    ->onDelete('cascade');
            $table->date('fecha');
            $table->string('descripcion');
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
        Schema::dropIfExists('clientes_servicios');
    }
}
