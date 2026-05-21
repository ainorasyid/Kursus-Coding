<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index()
    {
        $materi = Materi::all();
        return view('user.materi.html', compact('materi'));
    }

    public function show($id)
    {
        $materi = Materi::findOrFail($id);

        $allMateri = Materi::where('kursus_id', $materi->kursus_id)
            ->orderBy('id')
            ->get();

        $currentIndex = $allMateri->search(fn($m) => $m->id == $materi->id);

        $next = $allMateri->get($currentIndex + 1);
        $prev = $allMateri->get($currentIndex - 1);

        return view('user.materi.show', compact(
            'materi',
            'next',
            'prev'
        ));
    }
}
