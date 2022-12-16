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
        Schema::create('terrenos', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('idusuario');
            $table->foreign('idusuario')->references('id')->on('users');

            $table->unsignedBigInteger('codplanta');
            $table->foreign('codplanta')->references('id')->on('plantas');
            
            $table->string('nombre');
            $table->integer('tamañomt2');
            $table->string('tipodesuelo');
            $table->integer('altitud');
            $table->string('ubicacion');
            $table->integer('humedad');
            $table->integer('temperatura');
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
        Schema::dropIfExists('terrenos');
    }
};


