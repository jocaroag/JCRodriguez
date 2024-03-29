<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Hojasdevidas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hojasdevidas', function (Blueprint $table) {
            $table->increments('id');
            $table->string ('ocupacion');
            $table->string ('experiencia_laboral');
            $table->integer('cliente_id')->unsigned();

             $table->foreign('cliente_id')->references('id')->on('clientes');

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
        Schema::dropIfExists('hojasdevidas');
    }
}
