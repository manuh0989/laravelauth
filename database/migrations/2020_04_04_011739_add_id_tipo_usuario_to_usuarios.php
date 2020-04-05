<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdTipoUsuarioToUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('usuarios', function (Blueprint $table) {

            $table->unsignedBigInteger('idTipoUsuario')->after('idUsuario')->default(1);

            $table->foreign('idTipoUsuario')
            ->references('idTipoUsuario')
            ->on('tipos_usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::table('usuarios', function (Blueprint $table) {
            $table->dropColumn('idTipoCliente');
            $table->dropForeign(['idTipoCliente']);
        });
    }
}
