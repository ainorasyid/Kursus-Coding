<?php

namespace App\Http\Controllers\user\pembelajaran;

use App\Http\Controllers\Controller;
use App\Models\Kursus;
use App\Models\Materi;
use Illuminate\Http\Request;

class PembelajaranController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $kursus = Kursus::all();
        return view('user.pembelajaran.index', compact('user', 'kursus'));
    }

    public function show($kursusJudul, $materiJudul = null)
    {
        $kursus = Kursus::where('judul', $kursusJudul)
            ->firstOrFail();

        $allMateri = Materi::where('kursus_id', $kursus->id)
            ->orderBy('id')
            ->get();

        // materi pertama
        if (!$materiJudul) {
            $materi = $allMateri->first();
        } else {
            $materi = Materi::where('judul', $materiJudul)
                ->where('kursus_id', $kursus->id)
                ->firstOrFail();
        }

        $currentIndex = $allMateri->search(
            fn($item) => $item->id == $materi->id
        );

        $next = $allMateri->get($currentIndex + 1);
        $prev = $allMateri->get($currentIndex - 1);

        return view('user.pembelajaran.materi', compact(
            'kursus',
            'materi',
            'next',
            'prev'
        ));
    }
}
