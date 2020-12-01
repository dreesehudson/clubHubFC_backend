<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $with = ['HomeTeam', 'AwayTeam'];

    protected $table = 'Schedule';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    public function HomeTeam () {
        return $this->belongsToMany('App\Models\Team', 'ref_home_team_id');
    }
    public function AwayTeam () {
        return $this->belongsToMany('App\Models\Team', 'ref_away_team_id');
    }
}
