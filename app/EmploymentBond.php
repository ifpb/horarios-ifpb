<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmploymentBond extends Model
{
    protected $guarded = [];

    public function professors()
    {
        return $this->hasMany(Professor::class);
    }
}
