<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeachingUnit extends Model
{
    protected $guarded = [];

    public function courses() {
        return $this->hasMany(Course::class);
    }
}
