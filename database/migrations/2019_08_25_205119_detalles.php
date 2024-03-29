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
            $table->integer('factura_id')->unsigned();
            $table->integer('servicio_id')->unsigned();

            $table->foreign('factura_id')->references('id')->on('facturas');
            $table->foreign('servicio_id')->references('id')->on('servicios');



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
