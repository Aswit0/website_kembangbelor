<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\Acara; // Correct namespace

class HomeController extends Controller
{
    public function acara()
    {
        $data = Event::all(); // Correct usage of Acara model
        $wisata = Wisata::latest()->take(3)->get(); // Correct usage of Acara model
        return view('public/home', compact('data','wisata'));
    }


 
    public function show(string $id): View
    {
        $wisata = Wisata::findOrFail($id);

        return view('layouts.wisata-details', compact('wisata'));
    }
}
