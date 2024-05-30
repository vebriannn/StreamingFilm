<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

use App\Models\User;

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
            'credentials' => 'Maaf gagal login, coba untuk memasukan email dan password dengan benar!'
        ])->withInput();
    }

    public function logout(Request $requests) {
        Auth::logout();

        $requests->session()->invalidate();
        $requests->session()->regenerateToken();

        return redirect()->route('member.login');
    }

    public function register() {
        return view('member.auth.register');
    }

    public function regStore(Request $requests) {
        $data = $requests->except('_token', '_method');
        $requests->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required'
        ]);

        $data['password'] = Hash::make($requests->password);

        User::create($data);

        Alert::success('Berhasil', 'Akun Berhasil Di Buat');
        return redirect()->route('member.login');
    }
}
