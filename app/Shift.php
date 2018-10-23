<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    public function times()
    {
        return $this->hasMany(Time::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }
}
