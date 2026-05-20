<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
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

// ==================== MATERI CSS ====================
Route::get('/user/materi/css/pengenalan', function () {
    return view('user.materi.css.pengenalan');
});

Route::get('/user/materi/css/selector', function () {
    return view('user.materi.css.selector');
});

Route::get('/user/materi/css/property', function () {
    return view('user.materi.css.property');
});

Route::get('/user/materi/css/layout', function () {
    return view('user.materi.css.layout');
});

// ==================== MATERI JAVASCRIPT ====================

Route::get('/user/materi/javascript/pengenalan', function () {
    return view('user.materi.javascript.pengenalan');
});

Route::get('/user/materi/javascript/dom', function () {
    return view('user.materi.javascript.dom');
});

Route::get('/user/materi/javascript/variabel', function () {
    return view('user.materi.javascript.variabel');
});

Route::get('/user/materi/javascript/function', function () {
    return view('user.materi.javascript.function');
});


// ==================== MATERI PHP ====================

Route::get('/user/materi/php/pengenalan', function () {
    return view('user.materi.php.pengenalan');
});

Route::get('/user/materi/php/percabangan', function () {
    return view('user.materi.php.percabangan');
});

Route::get('/user/materi/php/variabel', function () {
    return view('user.materi.php.variabel');
});

Route::get('/user/materi/php/looping', function () {
    return view('user.materi.php.looping');
});


// ==================== MATERI C++ ====================

Route::get('/user/materi/cpp/pengenalan', function () {
    return view('user.materi.cpp.pengenalan');
});

Route::get('/user/materi/cpp/percabangan', function () {
    return view('user.materi.cpp.percabangan');
});

Route::get('/user/materi/cpp/variabel', function () {
    return view('user.materi.cpp.variabel');
});

Route::get('/user/materi/cpp/looping', function () {
    return view('user.materi.cpp.looping');
});

// ==================== QUIZ HTML  ====================

Route::get('/quiz/html/1', function () {
    return view('user.quiz.html.quiz1');
});
Route::get('/quiz/html/2', function () {
    return view('user.quiz.html.quiz2');
});
Route::get('/quiz/html/3', function () {
    return view('user.quiz.html.quiz3');
});
Route::get('/quiz/html/4', function () {
    return view('user.quiz.html.quiz4');
});


// ==================== USER ROLE ====================

require __DIR__ . '/role/user.php';
Route::get('/mentor/dashboard', [MentorDashboard::class, 'index'])->name('mentor.dashboard');

require __DIR__ . '/role/admin.php';
require __DIR__ . '/role/user.php';
