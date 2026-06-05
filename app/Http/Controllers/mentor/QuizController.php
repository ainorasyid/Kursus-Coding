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
        return view('mentor.quiz', compact('kursus'));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            
        ]);
    }
}
