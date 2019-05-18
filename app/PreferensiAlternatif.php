<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreferensiAlternatif extends Model
{
    protected $table = 'preferensialternatif';
    protected $fillable = [
        'user_id','kost_id','preferensi'
    ];

    public function kost()
    {
        return $this->belongsTo(Kost::class);
    }
}
