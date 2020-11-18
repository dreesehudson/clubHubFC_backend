<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('color');
                  //next iteration breaks will make multiple leagues to distinguish age and gender
                  //->string('age_group')
                  //->string('gender')
            $table->string('practice_night');
            $table->integer('curr_roster_size');
            $table->integer('max_roster_size');
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
        Schema::dropIfExists('teams');
    }
}
