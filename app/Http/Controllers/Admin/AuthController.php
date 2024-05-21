<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Controllers\Admin\AuthController;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index() {
        return view('admin.auth.login');
    }

    public function auth(Request $requests) {
        $requests->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $requests->only('email', 'password');

        if(Auth::guard('admin')->attempt($credentials)) {
            $requests->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        return back()->with('credentials', 'Email atau password salah');
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}
