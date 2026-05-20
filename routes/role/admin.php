<?php

use App\Http\Controllers\admin\DashboardController as AdminDashboard;
use App\Http\Controllers\admin\PenggunaController;

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('dashboard');

    // Manajemen User
    Route::get('/manajemen-user', [PenggunaController::class, 'index'])->name('management.user');
    Route::get('/manajemen-user/edit/{pengguna}', [PenggunaController::class, 'edit'])->name('management.user.edit');
    Route::put('/manajemen-user/update/{pengguna}', [PenggunaController::class, 'update'])->name('management.user.update');
    Route::delete('/manajemen-user/delete/{pengguna}', [PenggunaController::class, 'destroy'])->name('management.user.delete');

});