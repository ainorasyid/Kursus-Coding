<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Soal;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $soal = Soal::with('kursus')->get();
        return view('admin.quiz.index', compact('soal'));
    }
}
