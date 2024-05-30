<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Models\Movies;

class DashboardMemberController extends Controller
{
    public function index() {
        $moviesP = Movies::orderBy('ranting', 'desc')->limit(2)->get();
        $moviesL = Movies::all();
        return view('member.dashboard', compact('moviesP', 'moviesL'));

    }

    public function showFilm(string $id) {
        $movies = Movies::where('id', $id)->first();

        if(Auth::user()->role == $movies->type_film || Auth::user()->role == "standart") {
            return view('member.view', compact('movies'));
        }
        else {
            $capitalizedString = ucwords($movies->type_film);
            Alert::alert()->info('Informasi','Film Yang Anda Pilih Adalah ' . $capitalizedString . ' Silahkan Upgrade Akun Anda Terlebih Dahulu!');
            return redirect()->route('member.dashboard');
        }
    }

    public function searchFilm(Request $requests) {
        $query = $requests->query('query');
        if ($query) {
            // Menggunakan Eloquent model untuk mencari berita berdasarkan query
            $movieSearch = Movies::where('title', 'like', "%$query%")->get();
            dd($movieSearch);
            return view('member.dashboard', compact('movieSearch'));
        }
    }
}
