<?php

namespace App\Http\Controllers;

use App\Models\fasilitas;
use Illuminate\Http\Request;

class galeriController extends Controller
{
    public function galeri(){
        $fasilitas = fasilitas::all(); 
        
        return view('public.360', compact('fasilitas'));
    }
}
