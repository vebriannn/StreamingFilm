<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use App\Models\Admin;

class SettingController extends Controller
{
    public function index(string $id) {
        $users = Admin::where('id', $id)->get();
        return view('admin.setting', compact('users'));
    }

    public function updated(Request $requests, string $id) {
        $admin = Admin::where('id', $id)->first();
        $data = $requests->except('_token', '_method');

        $requests->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admin,email,'.$id,
        ]);

        if(is_null($requests->password )) {
            $data['password'] = $admin->password;
        }

        $admin->update($data);

        Alert::success('Berhasil', 'Data Berhasil Di Ubah');
        return redirect()->route('admin.setting', $id);
    }
}
