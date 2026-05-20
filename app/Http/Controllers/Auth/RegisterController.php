<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'firstName' => ['required', 'max:255'],
            'lastName' => ['required', 'max:255'],
            'email' => ['required', 'email:dns', 'unique:users'],
            'password' => ['required', 'min:8'],
            'confirmPass' => ['required', 'same:password']
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        $fullName = $validateData['firstName'] . ' ' . $validateData['lastName'];

        $user = User::create([
            'email' => $validateData['email'],
            'password' => $validateData['password'],
            'peran_id' => 3
        ]);

        Pengguna::create([
            'users_id' => $user->id,
            'firstname' => $validateData['firstName'],
            'lastname' => $validateData['lastName'],
            'fullname' => $fullName
        ]);

        return redirect()
            ->to('/login')
            ->with('success', 'Berhasil membuat akun, silakan login');
    }
}
