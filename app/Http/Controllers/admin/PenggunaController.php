<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorepenggunaRequest;
use App\Http\Requests\UpdatepenggunaRequest;
use App\Models\Pengguna;
use App\Models\User;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengguna = Pengguna::with('user')->get();
        return view('admin.manajemen-user.index', compact('pengguna'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorepenggunaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(pengguna $pengguna)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(pengguna $pengguna)
    {

        return view('admin.manajemen-user.edit', compact('pengguna'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatepenggunaRequest $request, pengguna $pengguna)
    {
        try {
            $pengguna->update([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'fullname' => $request->firstname . ' ' . $request->lastname,
            ]);

            $pengguna->user->update([
                'email' => $request->email,
            ]);

            return redirect()
                ->route('admin.management.user')
                ->with('success', 'Data berhasil diupdate');

        } catch (\Exception $e) {

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Data gagal diupdate');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(pengguna $pengguna)
    {
        $pengguna->delete();
        $pengguna->user()->delete();

        return redirect()
            ->route('admin.management.user')
            ->with('success', 'Data berhasil dihapus');
    }
}
