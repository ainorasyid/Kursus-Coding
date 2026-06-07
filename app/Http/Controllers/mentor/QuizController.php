<?php

namespace App\Http\Controllers\mentor;

use App\Http\Controllers\Controller;
use App\Models\Kursus;
use App\Models\Soal;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        $soal = Soal::with('kursus')->get();
        return view('mentor.manajemen-quiz.index', compact('soal'));
    }

    public function create()
    {
        $kursus = Kursus::all();
        return view('mentor.manajemen-quiz.create', compact('kursus'));
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'kursus_id' => ['required'],
            'soal' => ['required'],
            'pilihan_a' => ['required'],
            'pilihan_b' => ['required'],
            'pilihan_c' => ['required'],
            'pilihan_d' => ['required'],
            'jawaban_benar' => ['required'],
        ]);

        Soal::create($validateData);

        return redirect()->route('mentor.quiz.create')
            ->with('success', 'Berhasil menambah soal pada kursus');
    }

    public function edit(Soal $soal)
    {
        $pertanyaan = Soal::latest()->get();
        $kursus = Kursus::all();
        return view('mentor.manajemen-quiz.edit', compact('pertanyaan', 'soal', 'kursus'));
    }

    public function update(Request $request, Soal $soal)
    {
        $validateData = $request->validate([
            'kursus_id' => 'required',
            'soal' => 'required',
            'pilihan_a' => 'required',
            'pilihan_b' => 'required',
            'pilihan_c' => 'required',
            'pilihan_d' => 'required',
            'jawaban_benar' => 'required|in:a,b,c,d',
        ]);

        $soal->update($validateData);

        return redirect()
            ->route('mentor.quiz')
            ->with('success', 'Soal berhasil diperbarui');
    }

    public function destroy(Soal $soal)
    {
        $soal->delete();

        return redirect()
            ->route('mentor.quiz')
            ->with('success', 'Soal berhasil dihapus');
    }
}