<?php

namespace App\Http\Controllers\mentor;

use App\Http\Controllers\Controller;
use App\Models\Hasil;
use App\Models\Soal;
use App\Models\Jawaban;
use Illuminate\Http\Request;

class HasilQuizController extends Controller
{
    public function index()
    {
        $hasil = Hasil::with(['pengguna', 'kursus'])->get();
        return view('mentor.hasil', compact('hasil'));
    }

    public function show(Hasil $hasil)
    {
        $soal = Soal::where('kursus_id', $hasil->kursus_id)->get();
        $jawabanUser = Jawaban::where('pengguna_id', $hasil->pengguna_id)
            ->whereIn('soal_id', $soal->pluck('id'))
            ->get()
            ->keyBy('soal_id');

        return view('mentor.user-hasil', compact('hasil', 'soal', 'jawabanUser'));
    }
}
