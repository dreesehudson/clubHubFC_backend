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

    public function User () {
        return $this->Player::belongsTo('User');
    }

    public function Team () {
        return $this->Player::belongsTo('Team');
    }

    
}
