<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmploymentType extends Model
{
    protected $guarded = [];

    public function professors()
    {
        return $this->hasMany(Professor::class);
    }
}
