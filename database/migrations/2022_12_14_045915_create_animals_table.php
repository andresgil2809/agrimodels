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
        Schema::create('animals', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->string('nombre');
            $table->string('raza');
            $table->integer('condicion');
            $table->integer('altitud');
            $table->integer('peso');
            $table->string('climadeprocedencia');

            $table->unsignedBigInteger('genero');
            $table->foreign('genero')->references('id')->on('genero');

            $table->date('fechadenacimiento');

            $table->date('fechadeprimerparto')->nullable();
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
        Schema::dropIfExists('animals');
    }
};
