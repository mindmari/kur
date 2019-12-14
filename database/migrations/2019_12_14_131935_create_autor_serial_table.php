<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAutorSerialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autor_serial', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('serial_id')->unsigned();
            $table->foreign('serial_id')->references('id')->on('serials');
            $table->bigInteger('autor_id')->unsigned();
            $table->foreign('autor_id')->references('id')->on('autors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autor_serial');
    }
}
