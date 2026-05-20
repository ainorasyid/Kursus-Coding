<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhpController extends Controller
{
    public function index()
    {
        return view('user.learning.php');
    }

    public function pengenalan()
    {
        return view('user.materi.php.pengenalan');
    }

    public function percabangan()
    {
        return view('user.materi.php.percabangan');
    }

    public function looping()
    {
        return view('user.materi.php.looping');
    }

    public function variable()
    {
        return view('user.materi.php.variabel');
    }
}
