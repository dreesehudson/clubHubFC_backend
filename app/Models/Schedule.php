<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $with = ['homeTeam', 'awayTeam'];

    protected $table = 'schedule';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
    protected $fillable = ['date', 'home_team', 'away_team', 'time'];

    public function homeTeam () {
        return $this->belongsTo('App\Models\Team', 'ref_home_team_id');
    }
    public function awayTeam () {
        return $this->belongsTo('App\Models\Team', 'ref_away_team_id');
    }
}
