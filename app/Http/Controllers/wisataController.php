<?php

namespace App\Http\Controllers;

use App\Models\Wisata;
use Illuminate\Http\Request;

class wisataController extends Controller
{
    public function wisata(){
        $wisata = Wisata::all(); 
        
        return view('public/wisata', compact('wisata'));
    }
}
