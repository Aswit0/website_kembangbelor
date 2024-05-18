<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class wisataController extends Controller
{
    public function wisata(){
        $wisata = Wisata::all(); 
        
        return view('public.wisata', compact('wisata'));
    }

    public function show(string $id): View
    {
        $wisata = Wisata::findOrFail($id);

        return view('layouts.wisata-details', compact('wisata'));
    }
}
