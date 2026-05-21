<?php

namespace App\Http\Controllers\mentor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengguna;

class PendaftarController extends Controller
{
    public function index()
    {
        $pengguna = Pengguna::with('user')->get();
        return view('mentor.pendaftar', compact('pengguna'));
    }
}
