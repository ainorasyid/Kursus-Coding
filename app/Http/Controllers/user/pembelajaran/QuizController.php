<?php

namespace App\Http\Controllers\user\pembelajaran;

use App\Http\Controllers\Controller;
use App\Models\Kursus;
use App\Models\Soal;
use App\Models\Materi;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function show($kursus)
    {
        $kursus = Kursus::findOrFail($kursus);
        $soal = Soal::where('kursus_id', $kursus->id)->get();
        $lastMateri = Materi::where('kursus_id', $kursus->id)->latest('id')->first();

        return view('user.pembelajaran.quiz', compact('kursus', 'soal', 'lastMateri'));
    }
}
