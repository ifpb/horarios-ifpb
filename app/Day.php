<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    public function professors()
    {
        return $this->belongsToMany(Professor::class);
    }
}
