<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\galeriController;
use App\Http\Controllers\wisataController;
use App\Http\Controllers\kritiksaranConroller;

Route::get('/',[homeController::class,'acara'])->name('acara');

Route::get('/wisata',[wisataController::class,'wisata'])->name('wisata');

Route::get('/kontak',[kritiksaranConroller::class,'kontak'])->name('kontak');
Route::post('/insertData',[kritiksaranConroller::class,'insertData'])->name('insertData');

Route::get('/galeri',[galeriController::class,'galeri'])->name('galeri');

Route::get('/wisata-details/{id}', [HomeController::class,'show'])->name('show');

Route::get('/about', function () {
    return view('public/aboutus');
});

Route::get('/mobileapp', function () {
    return view('public/mobileapp');
});
