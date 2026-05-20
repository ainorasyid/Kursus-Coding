<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JavascriptController extends Controller
{
    public function index()
    {
        return view('user.learning.javascript');
    }

    public function pengenalan()
    {
        return view('user.materi.javascript.pengenalan');
    }

    public function variable()
    {
        return view('user.materi.javascript.variabel');
    }

    public function function()
    {
        return view('user.materi.javascript.function');
    }

    public function dom()
    {
        return view('user.materi.javascript.dom');
    }
}
