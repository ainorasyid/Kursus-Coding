<?php

namespace App\Http\Controllers\mentor\manajemenKursus;

use App\Http\Controllers\Controller;
use App\Models\Kursus;
use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materi = Materi::with('kursus')
            ->latest()
            ->get();

        return view(
            'mentor.manajemen-kursus.materi.index',
            compact('materi')
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kursus = Kursus::latest()->get();

        return view(
            'mentor.manajemen-kursus.materi.create',
            compact('kursus')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {

            $validateData = $request->validate([
                'kursus_id' => 'required|exists:kursus,id',
                'judul' => 'required|string|max:255',
                'konten' => 'required|string',
                'video' => 'required|string',
            ]);

            Materi::create($validateData);

            return redirect()
                ->route('mentor.manajemen-kursus.materi')
                ->with('success', 'Materi berhasil ditambahkan');

        } catch (\Exception $e) {

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Materi gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Materi $materi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materi $materi)
    {
        $kursus = Kursus::latest()->get();

        return view(
            'mentor.manajemen-kursus.materi.edit',
            compact('materi', 'kursus')
        );
    }

    /**
     * Update the specified resource in storage.
     */
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
                ->route('mentor.manajemen-kursus.materi')
                ->with('success', 'Materi berhasil diupdate');

        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Materi gagal diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materi $materi)
    {
        try {
            $materi->delete();

            return redirect()
                ->route('mentor.manajemen-kursus.materi')
                ->with('success', 'Materi berhasil dihapus');

        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('error', 'Materi gagal dihapus');
        }
    }
}