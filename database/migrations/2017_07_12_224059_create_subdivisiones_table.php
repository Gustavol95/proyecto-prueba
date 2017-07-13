<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubdivisionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('subdivisiones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('campo_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign(['campo_id'])
                ->references(['id'])
                ->on('campos');

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
    }
}
