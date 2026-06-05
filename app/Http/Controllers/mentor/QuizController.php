<?php

namespace App\Http\Controllers\mentor;

use App\Http\Controllers\Controller;
use App\Models\Kursus;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $kursus = Kursus::all();
        $quiz = Quiz::where('kursus')->get();
        return view('mentor.quiz', compact('kursus', 'quiz'));
    }
}
