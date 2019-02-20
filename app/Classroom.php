<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = ['classroom_type_id', 'block_id', 'name', 'initials', 'capacity'];

    public static function boot()
    {
        parent::boot();

        # Setando a slug na criação do curso
        static::creating(function($classroom) {
            $slug = str_slug($classroom->name);
            $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
            $classroom->slug = $count ? "{$slug}-{$count}" : $slug;
        });
    }

    public function url()
    {
        return url('/salas/' . $this->slug);
    }

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
