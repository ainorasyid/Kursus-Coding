<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\user\DashboardController as UserDashboard;
use App\Http\Controllers\user\CppController;
use App\Http\Controllers\user\CssController;
use App\Http\Controllers\user\HtmlController;
use App\Http\Controllers\user\JavascriptController;
use App\Http\Controllers\user\PhpController;

Route::prefix('user')->name('user.')->group(function() {
    Route::get('/dashboard', [UserDashboard::class, 'index'])->name('dashboard');
    Route::get('/pembelajaran/html', [HtmlController::class, 'index'])->name('learning.html');
    Route::get('/materi/html/pengenalan', [HtmlController::class, 'pengenalan'])->name('learning');
    Route::get('/pembelajaran/css', [CssController::class, 'index'])->name('learning.css');
    Route::get('/pembelajaran/javascript', [JavascriptController::class, 'index'])->name('learning.javascript');
    Route::get('/pembelajaran/php', [PhpController::class, 'index'])->name('learning.php');
    Route::get('/pembelajaran/cpp', [CppController::class, 'index'])->name('learning.cpp');
});