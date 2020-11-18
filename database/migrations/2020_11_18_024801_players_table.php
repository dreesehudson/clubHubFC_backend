<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function(Blueprint $table) {
            $table->id();
            $table->string('name');
                  //next iteration breaks will make multiple leagues to distinguish age and gender
                  //->integer('age')
                  //->string('gender')
            $table->unsignedBigInteger('ref_team_id');
            $table->unsignedBigInteger('ref_user_id');
            $table->timestamps();

            $table->foreign('ref_team_id')
                  ->references('id')
                  ->on('teams')
                  ->onDelete('cascade');

            $table->foreign('ref_user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
