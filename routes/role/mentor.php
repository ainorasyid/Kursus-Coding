<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\mentor\DashboardController as MentorDashboard;
use App\Http\Controllers\mentor\manajemenKursus\KursusController;
use App\Http\Controllers\mentor\manajemenKursus\MateriController;
use App\Http\Controllers\mentor\PendaftarController;
use App\Http\Controllers\mentor\QuizController;
use App\Http\Controllers\mentor\HasilQuizController;

Route::middleware(['auth', 'role:mentor'])->prefix('mentor')->name('mentor.')->group(function() {
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

    //Quiz
    Route::get('/quiz', [QuizController::class, 'index'])->name('quiz');
    Route::get('/quiz/create', [QuizController::class, 'create'])->name('quiz.create');
    Route::post('/quiz/store', [QuizController::class, 'store'])->name('quiz.store');
    Route::get('/quiz/edit/{soal}', [QuizController::class, 'edit'])->name('quiz.edit');
    Route::put('/quiz/update/{soal}', [QuizController::class, 'update'])->name('quiz.update');
    Route::delete('/quiz/delete/{soal}', [QuizController::class, 'destroy'])->name('quiz.destroy');

    Route::get('/hasil', [HasilQuizController::class, 'index'])->name('hasil.quiz');
    Route::get('/user-hasil/{hasil}', [HasilQuizController::class, 'show'])->name('hasil.quiz.user');
});