<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->date('date');
            $table->unsignedBigInteger('ref_home_team_id');
            $table->unsignedBigInteger('ref_away_team_id');
            $table->string('time');
            $table->timestamps();

            $table->foreign('ref_home_team_id')
                ->references('id')
                ->on('teams')
                ->onDelete('cascade');

            $table->foreign('ref_away_team_id')
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
        //
    }
}
