<?php

namespace App\Http\Controllers\mentor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kursus;
use App\Models\Materi;
use App\Models\Soal;
use App\Models\Hasil;
use App\Models\Pengguna;

class DashboardController extends Controller
{
    public function index()
    {
        $totalKursus = Kursus::count();
        $totalMateri = Materi::count();
        $totalQuiz = Soal::count();
        $totalHasil = Hasil::count();
        $totalPeserta = Pengguna::count();

        $rataRataNilai = round(Hasil::avg('nilai') ?? 0, 0);
        $nilaiTertinggi = Hasil::max('nilai') ?? 0;
        $nilaiTerendah = Hasil::min('nilai') ?? 0;

        $hasilTerbaru = Hasil::with(['pengguna', 'kursus'])
            ->latest()
            ->take(5)
            ->get();
        return view('mentor.dashboard', compact(
            'totalKursus',
            'totalMateri',
            'totalQuiz',
            'totalHasil',
            'totalPeserta',
            'rataRataNilai',
            'nilaiTertinggi',
            'nilaiTerendah',
            'hasilTerbaru'
    ));
    }
}
