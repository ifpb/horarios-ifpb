<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        # Setando a slug na criação do curso
        static::creating(function($course) {
           $slug = str_slug($course->name);
           $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
           $course->slug = $count ? "{$slug}-{$count}" : $slug;
        });
    }

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

    public function teachingClasses()
    {
        return $this->hasManyThrough(TeachingClass::class, Subject::class);
    }
}
