<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getTourismNameAttribute()
    {
        switch ($this->tourism_id) {
            case 1:
                return 'Bernah de Vallei';
            case 2:
                return 'Klurak Eco Park';
            default:
                return 'Unknown Tourism';
        }
    }

}
