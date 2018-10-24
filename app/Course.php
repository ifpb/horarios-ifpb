<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

    public function shifts()
    {
        return $this->belongsToMany(Shift::class);
    }

    public function teachingUnit()
    {
        return $this->belongsto(TeachingUnit::class);
    }

    public function educationLevel()
    {
        return $this->belongsto(EducationLevel::class);
    }

    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }
}
