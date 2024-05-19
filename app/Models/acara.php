<?php

namespace App\Models; // Ensure correct namespace declaration

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acara extends Model // Correct class name to match the file name
{
    use HasFactory;

    protected $guarded = [];
}
