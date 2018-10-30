<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeachingUnit extends Model
{
    protected $guarded = [];

    public function courses() {
        return $this->hasMany(Course::class);
    }

    public function professors() {
        return $this->hasMany(Professor::class);
    }
}
