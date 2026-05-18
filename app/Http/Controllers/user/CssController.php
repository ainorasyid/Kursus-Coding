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
}
