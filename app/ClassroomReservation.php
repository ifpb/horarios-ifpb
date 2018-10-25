<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassroomReservation extends Model
{
    public function classroom()
    {
        return $this->belongsTo(Classroom::class);
    }

    public function teachingClass()
    {
        return $this->belongsTo(TeachingClass::class);
    }

    public function day()
    {
        return $this->belongsTo(Day::class);
    }

    public function time()
    {
        return $this->belongsTo(Time::class);
    }
}
