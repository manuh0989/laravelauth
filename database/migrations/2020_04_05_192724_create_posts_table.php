<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('idPost');
            $table->string('titulo')->unique();
            $table->binary('contenido');
            $table->boolean('publicado')->default(false);
            $table->boolean('principal')->default(false);
            
            $table->timestamps();
            $table->softDeletes();

            $table->unsignedBigInteger('idUsuario')->references('idUsuario')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
