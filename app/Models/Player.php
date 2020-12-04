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
    protected $fillable = ['first_name', 'last_name', 'user_id', 'team_id'];
    
    protected $with=['myUser', 'myTeams'];

    public function myUser () {
        return $this->belongsTo('App\Models\User');
    }

    public function myTeams () {
        return $this->belongsTo('App\Models\Team');
    }   

}
