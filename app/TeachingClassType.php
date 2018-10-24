<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeachingClassType extends Model
{
    public function teaching_classes()
    {
        return $this->hasMany(TeachingClass::class);
    }
}
