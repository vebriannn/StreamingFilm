<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

use App\Models\User;
use App\Models\Admin;
use App\Models\DetailUser;

class PricingController extends Controller
{
    public function index() {
        return view('member.pricing');
    }

    public function transaction(string $tipe) {

        if(!Auth::check()) {
            return redirect()->route('member.login');
        }

        $id = Auth::user()->id;
        $users = User::where('id', $id)->first();

        if($tipe == "premium" || $tipe == "standard") {

            $users->role = $tipe;
            DetailUser::create([
                'user_id' => $id,
                'start_of_subscription' => now(),
                'end_of_subscription' => now()->addMonth(1),
                'status' => 'active'
            ]);

            // dd(Auth::user()->role);

            // $users->save();
            // Menampilkan data user untuk debugging
            $users->save();
            Alert::success('Berhasil', 'Berhasil Membeli Paket '.$tipe);
            return redirect()->route('pricing');
        }
    }
}
