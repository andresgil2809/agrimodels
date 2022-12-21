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
        Schema::create('healths', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('animal_id');
            $table->foreign('animal_id')->references('id')->on('animals');

            $table->date('fecha');
            $table->string('nombrevacuna');
            $table->string('finalidad');
            $table->string('diasretiro');
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
        Schema::dropIfExists('healths');
    }
};
