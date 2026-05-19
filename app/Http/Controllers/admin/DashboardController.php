<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Pengguna;
use App\Models\User;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $total = User::count();
        $totalP = Pengguna::count();
        return view('admin.dashboard', compact('total', 'totalP'));
    }

    
}
