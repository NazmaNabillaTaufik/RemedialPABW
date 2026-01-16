<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\LamaranController;



Route::get('/lamaran/buat/{lowongan_id}', [LamaranController::class, 'create'])->name('lamaran.create');

// Pastikan juga rute store dan index sudah benar namanya:
Route::post('/lamaran/store', [LamaranController::class, 'store'])->name('lamaran.store');
Route::get('/lamaran', [LamaranController::class, 'index'])->name('lamaran.index');
Route::post('/lamaran/{id}', [LamaranController::class, 'store'])->name('lamaran.store');
Route::get('/', function () {
    return redirect()->route('login');
});

/*
|--------------------------------------------------------------------------
| ROUTE SETELAH LOGIN
|--------------------------------------------------------------------------
*/
Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/lowongan', [LowonganController::class, 'index'])
        ->name('lowongan.index');

    Route::get('/lamaran', [LamaranController::class, 'index'])
        ->name('lamaran.index');
});

/*
|--------------------------------------------------------------------------
| AUTH ROUTES (WAJIB ADA)
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';
