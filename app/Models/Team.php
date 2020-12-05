<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
   
    // protected $with = ['myPlayers'];

   
    // protected $table = 'teams';
    // protected $primaryKey = 'id';
    // public $incrementing = true;
    // public $timestamps = true;

    public function myPlayers () {
        return $this->hasMany('App\Models\Player');
    }

    public function homeGames(){
        return $this->belongsTo('App\Models\Scheduler', 'home_team_id');
    }
    
    public function awayGames(){
        return $this->belongsTo('App\Models\Scheduler', 'away_team_id');
    }
}