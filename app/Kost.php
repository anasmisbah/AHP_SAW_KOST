<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kost extends Model
{

    protected $fillable = [
        'name',
            'phone_number',
            'address',
            'type',
            'foto',
    ];

    public function criterias()
    {
        return $this->belongsToMany(Criteria::class)->withPivot('value')->withTimestamps();
    }
}
