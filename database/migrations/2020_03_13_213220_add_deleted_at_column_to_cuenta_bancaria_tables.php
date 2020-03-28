<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeletedAtColumnToCuentaBancariaTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cuenta_bancarias', function (Blueprint $table) {
            //deleted_at
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cuenta_bancarias', function (Blueprint $table) {
            //deleted_at
            $table->dropColumn('deleted_at');
        });
    }
}
