<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = ['classroom_type_id', 'block_id', 'name', 'initials', 'capacity'];

    public function block()
    {
        return $this->belongsTo(Block::class);
    }

    public function type()
    {
        return $this->belongsTo(ClassroomType::class, 'classroom_type_id');
    }

    public function reservations()
    {
        return $this->hasMany(ClassroomReservation::class, 'classroom_id');
    }
}
