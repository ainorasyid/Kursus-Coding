<?php

namespace App\Http\Controllers\user\pembelajaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Materi;

class MateriController extends Controller
{
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
