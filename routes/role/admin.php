<?php

use App\Http\Controllers\admin\DashboardController as AdminDashboard;

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('dashboard');
});