<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    protected $withCount = ['classrooms'];
    protected $guarded = [];

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }
}
