<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movies;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Storage;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $movies = Movies::all();
        $moviesfree = Movies::where('type_film', 'free')->count();
        $moviespremium = Movies::where('type_film', 'premium')->count();
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
            'trailer' => 'required|url',
            'movie' => 'required|url',
            'casts' => 'required|string',
            'categories' => 'required|string',
            'small_thumbnail' => 'required|image|mimes:jpeg,jpg,png',
            'large_thumbnail' => 'required|image|mimes:jpeg,jpg,png',
            'release_date' => 'required|date',
            'duration' => 'required|string',
            'about' => 'required|string',
        ]);

        $smallThumbnail = $requests->small_thumbnail;
        $largeThumbnail = $requests->large_thumbnail;

        // Str::random(10) berfungsi untuk random string
        // $smallThumbnail->getClientOriginalName() Mengambil nama file
        $originalSmallThumbnailName = Str::random(10).$smallThumbnail->getClientOriginalName();
        $originalLargeThumbnailName = Str::random(10).$largeThumbnail->getClientOriginalName();

        // menyimpan img
        $smallThumbnail->storeAs('public/movies', $originalSmallThumbnailName);
        $largeThumbnail->storeAs('public/movies', $originalLargeThumbnailName);


        $data['small_thumbnail'] = $originalSmallThumbnailName;
        $data['large_thumbnail'] = $originalLargeThumbnailName;

        //  menampilkan data
        // dd($data);

        Movies::create([
            'user_id' => 1,
            'type_film' => $requests->type_film,
            'title' => $requests->title,
            'trailer' => $requests->trailer,
            'movie' => $requests->movie,
            'casts' => $requests->casts,
            'categories' => $requests->categories,
            'small_thumbnail' => $originalSmallThumbnailName,
            'large_thumbnail' => $originalLargeThumbnailName,
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
        $movies = Movies::find($id)->get();
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
            'trailer' => 'required|url',
            'movie' => 'required|url',
            'casts' => 'required|string',
            'categories' => 'required|string',
            'release_date' => 'required|date',
            'duration' => 'required|string',
            'about' => 'required|string',
        ]);

        $movies = Movies::find($id);

        if ($requests->small_thumbnail) {

            // save new images
            $smallThumbnail = $requests->small_thumbnail;
            $originalSmallThumbnailName = Str::random(10).$smallThumbnail->getClientOriginalName();
            $smallThumbnail->storeAs('public/movies', $originalSmallThumbnailName);
            $data['small_thumbnail'] = $originalSmallThumbnailName;

            // delete old img
            Storage::disk('public')->delete('movies/'.$movies->small_thumbnail);
        }

        if ($requests->large_thumbnail) {
            // save new img
            $largeThumbnail = $requests->large_thumbnail;
            $originalLargeThumbnailName = Str::random(10).$largeThumbnail->getClientOriginalName();
            $largeThumbnail->storeAs('public/movies', $originalLargeThumbnailName);
            $data['large_thumbnail'] = $originalLargeThumbnailName;

            // delete old img
            Storage::disk('public')->delete('movies/'.$movies->large_thumbnail);
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
        // lokasi file
        $small = 'movies/'.$localfile->small_thumbnail;
        $large = 'movies/'.$localfile->large_thumbnail;

        // hapus images
        Storage::disk('public')->delete([$small, $large]);
        // delete data from db
        Movies::find($id)->delete();

        // kembali ke halaman utama dan memberi alert
        Alert::success('Berhasil', 'Data Berhasil Di Hapus');
        return redirect()->route('admin.movies');
    }
}
