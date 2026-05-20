<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HtmlController extends Controller
{
    public function index()
    {
        return view('user.learning.html',[
            'isActive' => 'active'
        ]);
    }

    public function pengenalan()
    {
        return view('user.materi.html.pengenalan');
    }

    public function strukturHtml()
    {
        return view('user.materi.html.struktur-html');
    }

    public function headingParagraph()
    {
        return view('user.materi.html.heading-paragraph');
    }

    public function linkImage()
    {
        return view('user.materi.html.link-image');
    }

    

}
