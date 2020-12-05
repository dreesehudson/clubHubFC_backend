<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scheduler extends Model
{
    use HasFactory;

    protected $with = ['homeTeam', 'awayTeam'];

    protected $table = 'schedules';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    //protected $fillable = ['date', 'home_team', 'away_team', 'time'];


    public function homeTeam () {
        return $this->belongsTo('App\Models\Team', 'home_team_id');
    }
    public function awayTeam () {
        return $this->belongsTo('App\Models\Team', 'away_team_id');
    }
}
