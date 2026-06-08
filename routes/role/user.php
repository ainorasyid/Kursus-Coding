<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\user\pembelajaran\PembelajaranController;
use App\Http\Controllers\user\pembelajaran\QuizController;
use App\Http\Controllers\user\DashboardController as UserDashboard;

Route::prefix('user')->name('user.')->group(function () {
    Route::get('/dashboard', [UserDashboard::class, 'index'])->name('dashboard');

    Route::get('/pembelajaran/quiz/{kursus}', [QuizController::class, 'show'])->name('pembelajaran.quiz');
    Route::post('/pembelajaran/quiz/submit/{kursus}', [QuizController::class, 'submit'])->name('pembelajaran.quiz.submit');
    Route::get('/quiz/hasil/{hasil}', [QuizController::class, 'hasil'])->name('pembelajaran.quiz.hasil');

    Route::get('/pembelajaran', [PembelajaranController::class, 'index'])->name('pembelajaran');
    Route::get('/pembelajaran/{kursus}/{materi?}', [PembelajaranController::class, 'show'])->name('pembelajaran.show');

});