<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $table = 'players';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    public function user () {
        return $this->belongsTo('App\Models\User', 'ref_user_id');
    }

    public function team () {
        return $this->belongsTo('App\Models\Team', 'ref_team_id');
    }   
}
