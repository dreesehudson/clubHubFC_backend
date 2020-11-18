<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CoachesTeamsPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coaches_teams_pivot', function(Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('ref_coach_id');
            $table->unsignedBigInteger('ref_team_id');
            $table->timestamps();

            $table->foreign('ref_coach_id')
                  ->references('id')
                  ->on('coaches')
                  ->onDelete('cascade');

            $table->foreign('ref_team_id')
                  ->references('id')
                  ->on('teams')
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
        Schema::dropIfExists('coaches_teams_pivot');
    }
}
