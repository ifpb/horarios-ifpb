<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeachingClass extends Model
{
    protected $guarded = [];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }

    public function type()
    {
        return $this->belongsTo(TeachingClassType::class, 'teaching_class_type_id');
    }
}
