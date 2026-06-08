<?php

namespace App\Http\Controllers\mentor\manajemenKursus;

use App\Http\Controllers\Controller;
use App\Models\Kursus;
use App\Models\Materi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materi = Materi::with('kursus')->get();
        return view('mentor.manajemen-kursus.materi.index', compact('materi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kursus = Kursus::latest()->get();
        return view('mentor.manajemen-kursus.materi.create',compact('kursus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'kursus_id' => 'required|exists:kursus,id',
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'video' => 'nullable|file|mimes:mp4,mov,avi,mkv|max:51200',
        ]);

        if ($request->hasFile('video')) {
            $validateData['video'] = $request->file('video')->store('video-materi', 'public');
        }

        Materi::create($validateData);

        return redirect()
            ->route('mentor.manajemen-kursus.materi')
            ->with('success', 'Materi berhasil ditambahkan');
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
        return view('mentor.manajemen-kursus.materi.edit',compact('materi', 'kursus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materi $materi)
    {
        $validateData = $request->validate([
            'kursus_id' => 'required|exists:kursus,id',
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'video' => 'nullable|file|mimes:mp4,mov,avi,mkv|max:51200',
        ]);

        if ($request->hasFile('video')) {
            if ($materi->video) {
                Storage::disk('public')->delete($materi->video);
            }
            $validateData['video'] = $request->file('video')->store('video-materi', 'public');
        } else {
            $validateData['video'] = $materi->video; 
        }

        $materi->update($validateData);

        return redirect()
            ->route('mentor.manajemen-kursus.materi')
            ->with('success', 'Materi berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materi $materi)
    {
        if ($materi->video) {
            Storage::disk('public')->delete($materi->video);
        }

        $materi->delete();

        return redirect()
            ->route('mentor.manajemen-kursus.materi')
            ->with('success', 'Materi berhasil dihapus');
    }
}