<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\mentor\DashboardController as MentorDashboard;
use App\Http\Controllers\mentor\manajemenKursus\KursusController;
use App\Http\Controllers\mentor\manajemenKursus\MateriController;
use App\Http\Controllers\mentor\PendaftarController;

Route::prefix('mentor')->name('mentor.')->group(function() {
    Route::get('/dashboard', [MentorDashboard::class, 'index'])->name('dashboard');
    Route::get('/pendaftar', [PendaftarController::class, 'index'])->name('pendaftar');

    // Crud Kursus
    Route::get('/manajemen-kursus/kursus', [KursusController::class, 'index'])->name('manajemen-kursus.kursus');
    Route::get('/manajemen-kursus/kursus/create', [KursusController::class, 'create'])->name('manajemen-kursus.kursus.create');
    Route::post('/manajemen-kursus/kursus/store', [KursusController::class, 'store'])->name('manajemen-kursus.kursus.store');
    Route::get('/manajemen-kursus/kursus/edit/{kursus}', [KursusController::class, 'edit'])->name('manajemen-kursus.kursus.edit');
    Route::put('/manajemen-kursus/kursus/update/{kursus}', [KursusController::class, 'update'])->name('manajemen-kursus.kursus.update');
    Route::delete('/manajemen-kursus/kursus/delete/{kursus}', [KursusController::class, 'destroy'])->name('manajemen-kursus.kursus.delete');

    // Crud Materi
    Route::get('/manajemen-kursus/materi', [MateriController::class, 'index'])->name('manajemen-kursus.materi');
    Route::get('/manajemen-kursus/materi/create', [MateriController::class, 'create'])->name('manajemen-kursus.materi.create');
    Route::post('/manajemen-kursus/materi/store', [MateriController::class, 'store'])->name('manajemen-kursus.materi.store');
    Route::get('/manajemen-kursus/materi/edit/{materi}', [MateriController::class, 'edit'])->name('manajemen-kursus.materi.edit');
    Route::put('/manajemen-kursus/materi/update/{materi}', [MateriController::class, 'update'])->name('manajemen-kursus.materi.update');
    Route::delete('/manajemen-kursus/materi/delete/{materi}', [MateriController::class, 'destroy'])->name('manajemen-kursus.materi.delete');
});