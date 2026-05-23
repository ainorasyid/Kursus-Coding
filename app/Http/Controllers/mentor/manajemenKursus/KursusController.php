<?php

namespace App\Http\Controllers\mentor\manajemenKursus;

use App\Http\Controllers\Controller;
use App\Models\Kursus;
use App\Models\Materi;
use Illuminate\Http\Request;

class KursusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kursus = Kursus::latest()->get();
        return view('mentor.manajemen-kursus.kursus.index', compact('kursus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mentor.manajemen-kursus.kursus.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $validateData = $request->validate([
                'judul' => 'required',
                'deskripsi' => 'required',
            ]);

            Kursus::create($validateData);

            return redirect()
                ->route('mentor.manajemen-kursus.kursus')
                ->with('success', 'Kursus berhasil ditambahkan');

        } catch (\Exception $e) {

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Kursus gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kursus $kursus)
    {
        return view(
            'mentor.manajemen-kursus.kursus.edit',
            compact('kursus')
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kursus $kursus)
    {
        try {
            $validateData = $request->validate([
                'judul' => 'required',
                'deskripsi' => 'required',
            ]);

            $kursus->update($validateData);

            return redirect()
                ->route('mentor.manajemen-kursus.kursus')
                ->with('success', 'Kursus berhasil diupdate');

        } catch (\Exception $e) {

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Kursus gagal diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kursus $kursus)
    {
        $kursus->materi()->delete();
        $kursus->delete();

        return redirect()
            ->route('mentor.manajemen-kursus.kursus')
            ->with('success', 'Kursus berhasil dihapus');
    }
}
