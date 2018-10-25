<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    public function professors()
    {
        return $this->belongsToMany(Professor::class);
    }

    public function reservations()
    {
        return $this->hasMany(ClassroomReservation::class, 'day_id');
    }
}
