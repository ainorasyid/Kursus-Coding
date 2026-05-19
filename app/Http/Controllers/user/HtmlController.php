<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HtmlController extends Controller
{
    public function index()
    {
        return view('user.learning.html');
    }

    public function pengenalan()
    {
        return view('user.materi.html.pengenalan');
    }

}
