<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->boolean('isAdmin')->default(0);
            $table->timestamp('last_logged_in')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();

                //FK for coach_id?
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() 
    {
        Schema::dropIfExists('users');
    }
}
