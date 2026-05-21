<?php

use App\Http\Controllers\mentor\DashboardController as MentorDashboard;
use App\Http\Controllers\mentor\manajemenKursus\KursusController;
use App\Http\Controllers\mentor\manajemenKursus\MateriController;
use App\Http\Controllers\mentor\PendaftarController;

Route::prefix('mentor')->name('mentor.')->group(function() {
    Route::get('/dashboard', [MentorDashboard::class, 'index'])->name('dashboard');
    Route::get('/pendaftar', [PendaftarController::class, 'index'])->name('pendaftar');

    Route::get('/manajemen-kursus/kursus', [KursusController::class, 'index'])->name('manajemen-kursus.kursus');
    Route::get('/manajemen-kursus/materi', [MateriController::class, 'index'])->name('manajemen-kursus.materi');
});