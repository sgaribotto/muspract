<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercises', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
	    $table->string('name');
  	    $table->char('goal', 255);
            $table->text('description');
            $table->text('difficulties');
            $table->integer('practices_done');
            $table->integer('instrument_id')->unsigned()->nullable();
            $table->integer('status_id')->unsigned()->nullable();
            $table->foreign('instrument_id')->references('id')->on('instruments');
            $table->foreign('status_id')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercises');
    }
}
