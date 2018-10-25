<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    public function shift()
    {
        return $this->belongsTo(Shift::class);
    }

    public function reservations()
    {
        return $this->hasMany(ClassroomReservation::class, 'time_id');
    }

    public function getStartsAttribute($value) {
        return \Carbon\Carbon::parse($value)->format('H:i');
    }

    public function getEndsAttribute($value) {
        return \Carbon\Carbon::parse($value)->format('H:i');
    }
}
