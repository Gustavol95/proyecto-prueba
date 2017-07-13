<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesTrabajadoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordenes_trabajadores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orden_id')->unsigned();
            $table->integer('trabajador_id')->unsigned();
            $table->integer('subdivision_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign(['orden_id'])
                ->references(['id'])
                ->on('ordenes');

            $table->foreign(['trabajador_id'])
                ->references(['id'])
                ->on('trabajadores');

            $table->foreign(['subdivision_id'])
                ->references(['id'])
                ->on('subdivisiones');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordenes_trabajadores');
        //
    }
}
