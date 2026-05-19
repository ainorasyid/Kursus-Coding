<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\mentor\DashboardController as MentorDashboard;


Route::get('/', function () {
    return view('index');
})->name('landing');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');


// ==================== LOGIN ====================

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.auth');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


Route::get('/mentor/dashboard', [MentorDashboard::class, 'index'])->name('mentor.dashboard');


// ==================== MATERI HTML ====================

Route::get('/user/materi/html/pengenalan', function () {
    return view('user.materi.html.pengenalan');
});

Route::get('/user/materi/html/struktur-html', function () {
    return view('user.materi.html.struktur-html');
});

Route::get('/user/materi/html/heading-paragraph', function () {
    return view('user.materi.html.heading-paragraph');
});

Route::get('/user/materi/html/link-image', function () {
    return view('user.materi.html.link-image');
});


// ==================== QUIZ HTML ====================

Route::get('/quiz/html/1', function () {
    return view('user.quiz.html.quiz1');
});
Route::get('/user/css', function () {
    return view('user.learning.css');
});

// ==================== USER ROLE ====================

require __DIR__ . '/role/user.php';
Route::get('/mentor/dashboard', [MentorDashboard::class, 'index'])->name('mentor.dashboard');

require __DIR__ . '/role/admin.php';
require __DIR__ . '/role/user.php';
