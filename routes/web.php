<?php

use App\Http\Controllers\kritiksaranConroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kritiksaranController;

// Route::get('/', function () {
//     return view('welcome');
// });  

Route::get('/', function () {
    return view('public/home');
});

Route::get('/kontak',[kritiksaranConroller::class,'kontak'])->name('kontak');
Route::post('/insertData',[kritiksaranConroller::class,'insertData'])->name('insertData');

Route::get('/360', function () {
    return view('public/360');
});

Route::get('/wisata', function () {
    return view('public/wisata');
});

Route::get('/wisata-detail', function () {
    return view('layouts/wisata-details');
});

Route::get('/about', function () {
    return view('public/aboutus');
});


//Admin

Route::get('/adminWisata', function () {
    return view('admin/wisata');
});




Route::get('/admin360', function () {
    return view('admin/360');
});

Route::get('/adminEvent', function () {
    return view('admin/event');
});

Route::get('/adminNews', function () {
    return view('admin/news');
});

Route::get('/adminRiwayat', function () {
    return view('admin/riwayat');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});