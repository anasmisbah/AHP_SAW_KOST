<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
    protected $fillable = ['name','category'];
    public function kosts()
    {
        return $this->belongsToMany(Kost::class)->withPivot('value')->withTimestamps();
    }

    public function priorityvectors()
    {
        return $this->hasMany(PvectorCtriteria::class);
    }
}
