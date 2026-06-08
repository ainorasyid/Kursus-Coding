<?php

namespace App\Http\Controllers\user\pembelajaran;

use App\Http\Controllers\Controller;
use App\Models\Kursus;
use App\Models\Soal;
use App\Models\Materi;
use App\Models\Jawaban;
use App\Models\Hasil;
use App\Models\Pengguna;
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

    public function submit(Request $request, $kursus)
    {
        $kursus = Kursus::findOrFail($kursus);
        $pengguna = Pengguna::where('users_id', auth()->id())->first();
        $soal = Soal::where('kursus_id', $kursus->id)->get();
        $benar = 0;

        foreach ($soal as $item) {
            $jawabanUser = $request->jawaban[$item->id] ?? null;
            Jawaban::create([
                'pengguna_id' => $pengguna->id,
                'soal_id' => $item->id,
                'jawaban' => $jawabanUser,
            ]);

            if ($jawabanUser == $item->jawaban_benar) {
                $benar++;
            }
        }

        $nilai = round(($benar / $soal->count()) * 100);
        $hasil = Hasil::create([
            'pengguna_id' => $pengguna->id,
            'kursus_id' => $kursus->id,
            'nilai' => $nilai,
        ]);

        return redirect()->route('user.pembelajaran.quiz.hasil', $hasil->id);
    }

    public function hasil(Hasil $hasil)
    {
        $soal = Soal::where('kursus_id', $hasil->kursus_id)->get();
        $jawabanUser = Jawaban::where('pengguna_id', $hasil->pengguna_id)
            ->whereIn('soal_id', $soal->pluck('id'))
            ->get()
            ->keyBy('soal_id');
        $hasil = Hasil::where('pengguna_id', $hasil->pengguna_id)->first();
        $kursus = Kursus::findOrFail($hasil->kursus_id);

        return view('user.pembelajaran.hasil', compact('hasil', 'soal', 'jawabanUser', 'kursus'));
    }
}
