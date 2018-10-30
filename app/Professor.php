<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $guarded = [];

    public function days()
    {
        return $this->belongsToMany(Day::class);
    }

    public function teachingUnit()
    {
        return $this->belongsTo(TeachingUnit::class);
    }

    public function employmentBond()
    {
        return $this->belongsTo(EmploymentBond::class);
    }

    public function employmentType()
    {
        return $this->belongsTo(EmploymentType::class);
    }

    public function teachingClasses()
    {
        return $this->hasMany(TeachingClass::class);
    }

    public function reservations()
    {
        return $this->hasManyThrough(ClassroomReservation::class, TeachingClass::class);
    }
}
