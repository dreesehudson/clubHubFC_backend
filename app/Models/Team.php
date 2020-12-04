<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
   
    protected $with = ['players'];

    protected $table = 'teams';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    public function players () {
        return $this->hasMany('App\Models\Player');
    }
}