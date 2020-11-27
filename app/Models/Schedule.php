<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;
    protected $table = 'Schedule';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    public function Team () {
        return $this->Schedule::belongsToMany('Team');
    }

    
}
