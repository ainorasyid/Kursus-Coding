<?php

namespace App\Http\Controllers\admin\manajemenKursus;

use App\Http\Controllers\Controller;
use App\Models\Kursus;
use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    public function index()
    {
        $materi = Materi::with('kursus')->get();
        return view('admin.manajemen-kursus.materi.index', compact('materi'));
    }

    public function edit(Materi $materi)
    {
        $kursus = Kursus::latest()->get();

        return view('admin.manajemen-kursus.materi.edit',compact('materi', 'kursus'));
    }

    public function update(Request $request, Materi $materi)
    {
        try {
            $validateData = $request->validate([
                'kursus_id' => 'required|exists:kursus,id',
                'judul' => 'required|string|max:255',
                'konten' => 'required|string',
                'video' => 'nullable|string',
            ]);

            $materi->update($validateData);

            return redirect()
                ->route('admin.manajemen-kursus.materi')
                ->with('success', 'Materi berhasil diupdate');

        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Materi gagal diupdate');
        }
    }

    public function destroy(Materi $materi)
    {
        try {
            $materi->delete();

            return redirect()
                ->route('admin.manajemen-kursus.materi')
                ->with('success', 'Materi berhasil dihapus');

        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Materi gagal dihapus');
        }
    }
}
