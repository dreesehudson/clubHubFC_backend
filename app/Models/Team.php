<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;


    protected $table = 'teams';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;


    public function homeGames () {
        return $this->belongsTo('App\Models\Scheduler', 'home_team_id');
    }

    public function teamPlayers () {
        return $this->hasMany('App\Models\Player', 'team_id');
    }
}