<?php

namespace App\Http\Controllers\admin\manajemenKursus;

use App\Http\Controllers\Controller;
use App\Models\Kursus;
use Illuminate\Http\Request;

class KursusController extends Controller
{
    public function index()
    {
        $kursus = Kursus::all();
        return view('admin.manajemen-kursus.kursus.index', compact('kursus'));
    }

    public function edit(Kursus $kursus)
    {
        return view('admin.manajemen-kursus.kursus.edit', compact('kursus'));
    }

    public function update(Request $request, Kursus $kursus)
    {
        try {
            $validateData = $request->validate([
                'judul' => 'required',
                'deskripsi' => 'required',
            ]);

            $kursus->update($validateData);

            return redirect()
                ->route('admin.manajemen-kursus.kursus')
                ->with('success', 'Kursus berhasil diupdate');

        } catch (\Exception $e) {

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Kursus gagal diupdate');
        }
    }

    public function destroy(Kursus $kursus)
    {
        $kursus->materi()->delete();
        $kursus->delete();

        return redirect()
            ->route('admin.manajemen-kursus.kursus')
            ->with('success', 'Kursus berhasil dihapus');
    }
}
