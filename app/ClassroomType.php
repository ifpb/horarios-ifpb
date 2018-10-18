<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClassroomType extends Model
{
    public $timestamps = false;

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }
}
