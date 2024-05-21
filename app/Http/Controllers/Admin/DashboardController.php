<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use App\Models\User;
use App\Models\Admin;
use App\Models\DetailUser;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::with('detailuser')->get();
        $totalusers = User::all()->count();
        $totalperm = User::where('role', 'premium')->get()->count();
        $totalfree = User::where('role', 'free')->get()->count();
        // dd($usersperm);

        return view('admin.index', compact('users', 'totalusers', 'totalperm', 'totalfree'));
    }

    public function showProfile(string $id) {
        $users = Admin::findOrFail($id)->get();
        return view('admin.setting', compact('users'));
    }

    public function storeProfile() {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $requests)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::with('detailuser')->where('id', $id)->get();
        // dd($users);
        return view('admin.crud.users.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updated(Request $requests, string $id)
    {
        $data = $requests->except('_token');

        $requests->validate([
            'name' => 'required|',
            'email' => 'required|unique:users,email',
        ]);

        $users = User::with('detailuser')->findOrFail($id);
        $users->load('detailuser');

        if($users->detailuser !== null ) {
            $users->detailuser->end_of_subscription = date('Y-m-d', strtotime($data['end_of_subscription']));
            $users->detailuser->status = $data['status'];
            $users->detailuser->save();
        }

        $users->update($data);

        Alert::success('Berhasil', 'Data Berhasil Di Ubah');
        return redirect()->route('admin.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();
        Alert::success('Berhasil', 'Data Berhasil Di Hapus');
        return redirect()->route('admin.dashboard');
    }
}
