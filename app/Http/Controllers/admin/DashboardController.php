<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pengguna;
use App\Models\User;
use App\Models\Kursus;
use App\Models\Materi;
use App\Models\Soal;
use App\Models\Jawaban;
use App\Models\Hasil;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $total = User::count();
        $totalPengguna = Pengguna::count();

        $totalKursus = Kursus::count();
        $totalMateri = Materi::count();
        $totalQuiz = Soal::count();

        $totalJawaban = Jawaban::count();
        $totalHasil = Hasil::count();

        $nilaiRataRata = round(Hasil::avg('nilai') ?? 0, 0);
        $nilaiTertinggi = Hasil::max('nilai') ?? 0;
        $nilaiTerendah = Hasil::min('nilai') ?? 0;

        $persentaseLulus = Hasil::count()
            ? round((Hasil::where('nilai', '>=', 75)->count() / Hasil::count()) * 100)
            : 0;

        $hasilTerbaru = Hasil::with([
            'pengguna',
            'kursus'
        ])
            ->latest()
            ->take(10)
            ->get();
        return view('admin.dashboard', compact(
            'total',
            'totalPengguna',
            'totalKursus',
            'totalMateri',
            'totalQuiz',
            'totalJawaban',
            'totalHasil',
            'nilaiRataRata',
            'nilaiTertinggi',
            'nilaiTerendah',
            'persentaseLulus',
            'hasilTerbaru'
            ));
    }

    
}
