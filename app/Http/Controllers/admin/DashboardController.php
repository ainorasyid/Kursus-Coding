<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pengguna;
use App\Models\User;
use App\Models\Kursus;
use App\Models\Materi;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $total = User::count();
        $totalPengguna = Pengguna::count();
        $totalKursus = Kursus::count();
        $totalMateri = Materi::count();
        return view('admin.dashboard', compact('total', 'totalPengguna', 'totalKursus', 'totalMateri'));
    }

    
}
