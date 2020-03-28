<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('e_nombre');;//cambiado de 'nombre' a 'e_nombre' al listar duplicaba con tipo_empleado
            $table->string('apellido');
            $table->string('direccion');
            $table->string('telefono');
            $table->date('fecha_nac');
            $table->string('correo');
            $table->unsignedBigInteger('tipo_empleados_id');
            $table->foreign('tipo_empleados_id')
                    ->references('id')->on('tipo_empleados')
                    ->onDelete('cascade');
            $table->unsignedBigInteger('logins_id');
            $table->foreign('logins_id')
                    ->references('id')->on('logins')
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
        Schema::dropIfExists('empleados');
    }
}
