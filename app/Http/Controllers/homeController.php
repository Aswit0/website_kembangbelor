<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acara; // Correct namespace
use App\Models\event;
use App\Models\Wisata;

class HomeController extends Controller
{
    public function acara()
    {
        $data = Event::all(); // Correct usage of Acara model
        $wisata = Wisata::latest()->take(3)->get(); // Correct usage of Acara model
        return view('public/home', compact('data','wisata'));
    }
}
