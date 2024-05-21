<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('member.auth.login');
    }

    public function auth(Request $requests) {

        $requests->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $requests->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            $requests->session()->regenerate();
            return redirect()->route('member.dashboard');
        }
        return back()->withErrors([
            'credentials', 'Email atau password salah'
        ])->withInput();
    }
}
