<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function show($kursus_id)
    {
        $quiz = Quiz::with('questions')
            ->where('kursus_id', $kursus_id)
            ->first();

        return view('user.quiz.show', compact('quiz'));
    }
}
