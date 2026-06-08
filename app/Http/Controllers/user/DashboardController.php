<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Pengguna;
use Illuminate\Http\Request;
use App\Models\Kursus;
use App\Models\Materi;
use App\Models\Hasil;
use App\Models\Soal;

class DashboardController extends Controller
{
    public function index()
    {
        $pengguna = auth()->user()->pengguna;

        $totalKursus = Kursus::count();
        $totalMateri = Materi::count();

        $quizSelesai = Hasil::where(
            'pengguna_id',
            $pengguna->id
        )->count();

        $nilaiRataRata = round(
            Hasil::where(
                'pengguna_id',
                $pengguna->id
            )->avg('nilai') ?? 0
        );

        $hasilTerbaru = Hasil::with('kursus')
            ->where('pengguna_id', $pengguna->id)
            ->latest()
            ->take(5)
            ->get();

        $materiTerakhir = Materi::latest()->first();
        return view('user.dashboard', compact(
            'totalKursus',
            'totalMateri',
            'quizSelesai',
            'nilaiRataRata',
            'hasilTerbaru',
            'materiTerakhir'
        ));
    }
}
