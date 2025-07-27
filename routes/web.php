<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JadwalSholatController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Carbon\Carbon;

Route::get('/', [HomeController::class, 'index']);


Route::get('/jadwal-sholat', [App\Http\Controllers\JadwalSholatController::class, 'get']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware(['auth'])->group(function () {
    Route::resource('galleries', GaleriController::class);
});