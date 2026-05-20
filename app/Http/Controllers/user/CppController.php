<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CppController extends Controller
{
    public function index()
    {
        return view('user.learning.cpp');
    }

    public function pengenalan()
    {
        return view('user.materi.cpp.Pengenalan');
    }

    public function looping()
    {
        return view('user.materi.cpp.Looping');
    }

    public function percabangan()
    {
        return view('user.materi.cpp.Percabangan');
    }

    public function variable()
    {
        return view('user.materi.cpp.Variabel');
    }
}
