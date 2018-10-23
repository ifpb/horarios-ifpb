<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    public function shift()
    {
        return $this->belongsTo(Shift::class);
    }
}
