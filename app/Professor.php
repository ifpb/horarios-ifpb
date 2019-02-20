<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        # Setando a slug na criação do curso
        static::creating(function($professor) {
            $slug = str_slug($professor->nickname);
            $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
            $professor->slug = $count ? "{$slug}-{$count}" : $slug;
        });
    }

    public function url()
    {
        return url('/professores/' . $this->id);
    }

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
