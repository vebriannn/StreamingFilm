<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movies;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admin = Auth::guard('admin')->user();

        $movies = Movies::where('user_id', $admin->id)->get();

        // ubah text supaya tidak panjang
        foreach ($movies as $movie) {
            $movie['about'] = Str::words($movie->about, 10, '......');
        }

        $moviesfree = Movies::where('user_id', $admin->id)->where('type_film', 'free')->count();
        $moviespremium = Movies::where('user_id', $admin->id)->where('type_film', 'premium')->count();
        return view('admin.movies', compact('movies', 'moviesfree', 'moviespremium'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.crud.movies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $requests)
    {
        $data = $requests->except('_token');

        // membuat confirm validasi form
        $requests->validate([
            'type_film' => 'required|string',
            'title' => 'required|string',
            'movie' => 'required|url',
            'casts' => 'required|string',
            'categories' => 'required|string',
            'thumbnail' => 'required|image|mimes:jpeg,jpg,png',
            'ranting' => 'required|string',
            'release_date' => 'required|date',
            'duration' => 'required|string',
            'about' => 'required|string',
        ]);

        $Thumbnail = $requests->thumbnail;

        // Str::random(10) berfungsi untuk random string
        // $smallThumbnail->getClientOriginalName() Mengambil nama file
        $originalThumbnailName = Str::random(10).$Thumbnail->getClientOriginalName();
        // menyimpan img
        $Thumbnail->storeAs('public/movies', $originalThumbnailName);


        $data['thumbnail'] = $originalThumbnailName;

        //  menampilkan data
        // dd($data);

        Movies::create([
            'user_id' => Auth::guard('admin')->user()->id,
            'type_film' => $requests->type_film,
            'title' => $requests->title,
            'movie' => $requests->movie,
            'casts' => $requests->casts,
            'categories' => $requests->categories,
            'thumbnail' => $originalThumbnailName,
            'ranting' => $requests->ranting,
            'release_date' => date('Y-m-d', strtotime($requests->release_date)),
            'duration' => $requests->duration,
            'about' => $requests->about
        ]);

        Alert::success('Berhasil', 'Data Berhasil Di Buat');
        return redirect()->route('admin.movies');
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
        $movies = Movies::where('id', $id)->first();
        return view('admin.crud.movies.edit', compact('movies'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updated(Request $requests, string $id)
    {
        $data = $requests->except('_token');

        // membuat confirm validasi form
        $requests->validate([
            'type_film' => 'required|string',
            'title' => 'required|string',
            'movie' => 'required|url',
            'casts' => 'required|string',
            'categories' => 'required|string',
            'ranting' => 'required|string',
            'release_date' => 'required|date',
            'duration' => 'required|string',
            'about' => 'required|string',
        ]);

        $movies = Movies::find($id);

        if ($requests->thumbnail) {
            // save new img
            $Thumbnail = $requests->thumbnail;
            $originalThumbnailName = Str::random(10).$Thumbnail->getClientOriginalName();
            $Thumbnail->storeAs('public/movies', $originalThumbnailName);
            $data['thumbnail'] = $originalLargeThumbnailName;

            // delete old img
            Storage::disk('public')->delete('movies/'.$movies->thumbnail);
        }

        $movies->update($data);

        // kembali ke halaman utama dan memberi alert
        Alert::success('Berhasil', 'Data Berhasil Di Ubah');
        return redirect()->route('admin.movies');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $localfile = Movies::find($id)->get()->first();

        $thumbnail = 'movies/'.$localfile->thumbnail;

        // hapus images
        Storage::disk('public')->delete($thumbnail);
        // delete data from db
        Movies::find($id)->delete();

        // kembali ke halaman utama dan memberi alert
        Alert::success('Berhasil', 'Data Berhasil Di Hapus');
        return redirect()->route('admin.movies');
    }
}
