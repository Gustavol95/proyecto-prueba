<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ordenes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('supervisor_id')->unsigned();
            $table->integer('alimento_id')->unsigned();
            $table->integer('campo_id')->unsigned();
            $table->dateTime('inicio');
            $table->dateTime('terminada');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign(['campo_id'])
                ->references(['id'])
                ->on('campos');

            $table->foreign(['alimento_id'])
                ->references(['id'])
                ->on('alimentos');

            $table->foreign(['supervisor_id'])
                ->references(['id'])
                ->on('supervisores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('ordenes');
    }
}
