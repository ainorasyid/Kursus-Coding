<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\user\pembelajaran\PembelajaranController;
use App\Http\Controllers\user\DashboardController as UserDashboard;

Route::prefix('user')->name('user.')->group(function() {
    Route::get('/dashboard', [UserDashboard::class, 'index'])->name('dashboard');
    Route::get('/pembelajaran', [PembelajaranController::class, 'index'])->name('pembelajaran');
    Route::get('/user/pembelajaran/{kursus}/{materi?}', [PembelajaranController::class, 'show'])->name('pembelajaran.show');
});