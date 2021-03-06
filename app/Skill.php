<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = [
        "name",
        "lifePoints",
        "role",
        "attack",
        "defense",
        "img"
    ];
}
