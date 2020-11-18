<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;
    protected $table = 'Coaches';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    public function User () {
        return $this->Coach::hasOne('Users');
    }

    public function Team () {
        return $this->Coach::belongsTo('Teams');
    }

    
}