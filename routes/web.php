<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Guest Web Routes
|--------------------------------------------------------------------------
|*/
use App\Http\Controllers\Guest\BerandaGuestController;
use App\Http\Controllers\Guest\ProfilTentangGuestController;
use App\Http\Controllers\Guest\ProfilKabinetGuestController;
use App\Http\Controllers\Guest\ProfilDariMasaKeMasaGuestController;

Route::as('guest.')->group(function () {
    // Beranda
    Route::get('/', [BerandaGuestController::class, 'index'])
        ->name('beranda.index');

    // Profil
    Route::prefix('profil')->as('profil.')->group(function () {
        // Tentang
        Route::get('/tentang', [ProfilTentangGuestController::class, 'index'])
            ->name('tentang.index');

        // Kabinet
        Route::get('/kabinet', [ProfilKabinetGuestController::class, 'index'])
            ->name('kabinet.index');

        // Dari Masa ke Masa
        Route::get('/dari-masa-ke-masa', [ProfilDariMasaKeMasaGuestController::class, 'index'])
            ->name('dari-masa-ke-masa.index');
    });
});
