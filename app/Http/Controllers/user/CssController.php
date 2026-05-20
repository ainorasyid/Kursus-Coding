<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CssController extends Controller
{
    public function index()
    {
        return view('user.learning.css');
    }
    public function pengenalan()
    {
        return view('user.materi.css.pengenalan');
    }
    public function selector()
    {
        return view('user.materi.css.selector');
    }
    public function property()
    {
        return view('user.materi.css.property');
    }
    public function layout()
    {
        return view('user.materi.css.layout');
    }
}
