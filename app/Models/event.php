<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    protected $guarded = [];

    public function getLocationAttribute($value)
    {
        switch ($value) {
            case 1:
                return 'Bernah de Vallei';
            case 2:
                return 'Klurak Eco Park';
            default:
                return 'Unknown Location';
        }
    }

    // public function wisata()
    // {
    //     return $this->belongsTo(event::class, 'location');
    // }
}
