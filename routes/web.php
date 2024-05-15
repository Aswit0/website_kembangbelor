<?php

use App\Http\Controllers\galeriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\wisataController;
use App\Http\Controllers\kritiksaranConroller;
use App\Http\Controllers\kritiksaranController;

// Route::get('/', function () {
//     return view('welcome');
// });  



Route::get('/',[homeController::class,'acara'])->name('acara');

Route::get('/wisata',[wisataController::class,'wisata'])->name('wisata');

Route::get('/kontak',[kritiksaranConroller::class,'kontak'])->name('kontak');
Route::post('/insertData',[kritiksaranConroller::class,'insertData'])->name('insertData');

Route::get('/galeri',[galeriController::class,'galeri'])->name('galeri');

Route::get('/wisata-details/{id}', [HomeController::class,'show'])->name('show');

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