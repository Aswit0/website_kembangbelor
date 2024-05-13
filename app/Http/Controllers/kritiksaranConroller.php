<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kritiksaran;

class kritiksaranConroller extends Controller
{
    public function kontak(){
        return view('public/kontak');
    }

    public function insertdata(Request $request){
        kritiksaran::create($request->all());
        return redirect()->route('kontak');
    }
}
