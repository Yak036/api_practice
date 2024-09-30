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
        // ? Con el comando:
        //! php artisan make:model Post -cmf
        // ?  Creas una migracion 'POST' seria el nombre de la tabla
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content');

            $table->timestamps();
            //? foreign: es la id que utilizaras como puente
            //? references: se comparara con el campo id de la tabla q selecciones
            //? on: es la tabla que seleccionas
            $table->foreign('user_id')->references('id')->on('users');
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