<?php

use App\Http\Controllers\admin\DashboardController as AdminDashboard;
use App\Http\Controllers\admin\PenggunaController;
use App\Http\Controllers\admin\QuizController;
use App\Http\Controllers\admin\HasilQuizController;
use App\Http\Controllers\admin\manajemenKursus\KursusController;
use App\Http\Controllers\admin\manajemenKursus\MateriController;

Route::prefix('admin')->name('admin.')->group(function() {
    Route::get('/dashboard', [AdminDashboard::class, 'index'])->name('dashboard');

    // Manajemen User
    Route::get('/manajemen-user', [PenggunaController::class, 'index'])->name('management.user');
    Route::get('/manajemen-user/edit/{pengguna}', [PenggunaController::class, 'edit'])->name('management.user.edit');
    Route::put('/manajemen-user/update/{pengguna}', [PenggunaController::class, 'update'])->name('management.user.update');
    Route::delete('/manajemen-user/delete/{pengguna}', [PenggunaController::class, 'destroy'])->name('management.user.delete');

    //Manajemen Kursus
    Route::get('/manajemen-kursus/kursus', [KursusController::class, 'index'])->name('manajemen-kursus.kursus');
    Route::get('/manajemen-kursus/kursus/edit/{kursus}', [KursusController::class, 'edit'])->name('manajemen-kursus.kursus.edit');
    Route::put('/manajemen-kursus/kursus/update/{kursus}', [KursusController::class, 'update'])->name('manajemen-kursus.kursus.update');
    Route::delete('/manajemen-kursus/kursus/delete/{kursus}', [KursusController::class, 'destroy'])->name('manajemen-kursus.kursus.delete');

    //Manajemen Materi
    Route::get('/manajemen-kursus/materi', [MateriController::class, 'index'])->name('manajemen-kursus.materi');
    Route::get('/manajemen-kursus/materi/edit/{materi}', [MateriController::class, 'edit'])->name('manajemen-kursus.materi.edit');
    Route::put('/manajemen-kursus/materi/update/{materi}', [MateriController::class, 'update'])->name('manajemen-kursus.materi.update');
    Route::delete('/manajemen-kursus/materi/delete/{materi}', [MateriController::class, 'destroy'])->name('manajemen-kursus.materi.delete');

    Route::get('/quiz', [QuizController::class, 'index'])->name('quiz');

    Route::get('/hasil', [HasilQuizController::class, 'index'])->name('hasil.quiz');
    Route::get('/user-hasil/{hasil}', [HasilQuizController::class, 'show'])->name('hasil.quiz.user');
});