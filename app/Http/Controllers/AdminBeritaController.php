<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->akses_id == 1) {
            return view('dashboard.adminpos.index', [
                'title' => 'SiPenmad | Berita',
                'berita' => Berita::orderby('id', 'desc')->get()
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->akses_id == 1) {
            return view('dashboard.adminpos.tmb_pos', [
                'title' => 'SiPenmad | Tambah Berita',
                'kategori' => Kategori::all()
            ]);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'madrasah_id' => 'required',
            'status' => 'required',
            'judul' => 'required|max:255',
            'kategori_id' => 'required',
            'body' => 'required',
            'penulis' => 'required',
            'gambar' => 'image|file|max:2048'
        ]);
        $validated['singkat'] = Str::limit(strip_tags($request->body), 100);

        if ($request->file('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('public/berita');
        }

        Berita::create($validated);
        return redirect('/admin/pos')->with('suksestambah', 'Data Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show($berita)
    {
        if (Auth::user()->akses_id == 1) {
            $dtberita = Berita::find($berita);
            Berita::where("id", $dtberita->id)->update(["status" => "Terbit"]);

            return redirect('/admin/pos');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($berita)
    {
        if (Auth::user()->akses_id == 1) {
            $dtberita = Berita::find($berita);
            return view('dashboard.adminpos.ubah_pos', [
                'title' => 'SiPenmad | Ubah Berita',
                'kategori' => Kategori::all(),
                'berita' => $dtberita
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $berita)
    {
        $dtberita = Berita::find($berita);
        $rules = [
            'madrasah_id' => 'required',
            'status' => 'required',
            'judul' => 'required|max:255',
            'kategori_id' => 'required',
            'body' => 'required',
            'penulis' => 'required'
        ];

        $validated = $request->validate($rules);

        $validated['singkat'] = Str::limit(strip_tags($request->body), 100);

        if ($request->file('gambar')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validated['gambar'] = $request->file('gambar')->store('public/berita');
        }

        Berita::where('id', $dtberita->id)
            ->update($validated);
        return redirect('/admin/pos')->with('suksesubah', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($berita)
    {
        $dtberita = Berita::find($berita);
        if ($dtberita->gambar) {
            Storage::delete($dtberita->gambar);
        }
        Berita::destroy($dtberita->id);
        return redirect('/admin/pos')->with('sukseshapus', 'Data Berhasil dihapus!');
    }
}
