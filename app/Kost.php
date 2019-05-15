<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kost extends Model
{
    public function criterias()
    {
        return $this->belongsToMany(Criteria::class)->withPivot('value')->withTimestamps();
    }
}
