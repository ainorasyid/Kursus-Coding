<?php

namespace App\Http\Controllers\user\pembelajaran;

use App\Http\Controllers\Controller;
use App\Models\Kursus;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function show($kursusId)
    {
        $kursus = Kursus::findOrFail($kursusId);
        $soal = $kursus->soalQuiz;
        return view('user.pembelajaran.quiz', compact('kursus', 'soal'));
    }
}
