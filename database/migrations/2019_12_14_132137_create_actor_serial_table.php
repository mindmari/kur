<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActorSerialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actor_serial', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('serial_id')->unsigned();
            $table->foreign('serial_id')->references('id')->on('serial');
            $table->bigInteger('actor_id')->unsigned();
            $table->foreign('actor_id')->references('id')->on('actor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actor_serial');
    }
}
