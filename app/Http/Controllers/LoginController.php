<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email'     => ['required', 'email'],
            'password'  => ['required']
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $user =  Auth::user();

            // Seusuai role
            switch ($user->peran_id){
                case 1:
                    return redirect()->route('admin.dashboard');
                case 2:
                    return redirect()->route('mentor.dashboard');
                case 3:
                    return redirect()->route('user.dashboard');
                default:
                    Auth::logout();
                    return redirect('/login')
                        ->with('error', 'Tidak Valid');
            }
        }

        return back()->withErrors([
            'error' => 'Email atau password salah',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout(); // logout user

        $request->session()->invalidate(); // hapus session lama
        $request->session()->regenerateToken(); // generate csrf token baru

        return redirect('/login');
    }
}
