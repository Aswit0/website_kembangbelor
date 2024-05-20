<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendor extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function event()
    {
        return $this->belongsTo(event::class, 'id_event');
    }
}
