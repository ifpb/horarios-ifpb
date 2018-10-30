<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeachingClassType extends Model
{
    public function teachingClasses()
    {
        return $this->hasMany(TeachingClass::class);
    }
}
