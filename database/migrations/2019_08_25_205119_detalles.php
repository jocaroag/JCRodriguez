<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Detalles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalles', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad');
            $table->double('precio');
            $table->integer('cod_factura')->unsigned();
            $table->integer('cod_servicio')->unsigned();

            $table->foreign('cod_factura')->references('id')->on('facturas');
            $table->foreign('cod_servicio')->references('id')->on('facturas');



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
        Schema::dropIfExists('detalles');
    }
}
