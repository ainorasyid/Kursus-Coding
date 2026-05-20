<?php

use App\Http\Controllers\admin\DashboardController as AdminDashboard;
use App\Http\Controllers\admin\PenggunaController;

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('dashboard');
    Route::get('/manajemen-user', [PenggunaController::class, 'index'])->name('management.user');

});