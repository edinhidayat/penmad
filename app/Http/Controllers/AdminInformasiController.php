<?php

namespace App\Http\Controllers;

use App\Models\Informasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminInformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->akses_id == 1) {
            return view('dashboard.admininformasi.index', [
                'title' => 'SiPenmad | Informasi',
                'informasi' => Informasi::orderby('id', 'desc')->get()
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
            return view('dashboard.admininformasi.tmb_info', [
                'title' => 'SiPenmad | Tambah Informasi'
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
            'judul' => 'required',
            'description' => 'required',
            'petugas' => 'required'
        ]);
        // $validated['singkat'] = Str::limit(strip_tags($request->body), 100);

        Informasi::create($validated);
        return redirect('/admin/informasi')->with('suksestambah', 'Data Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function show(Informasi $informasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Informasi $informasi)
    {
        if (Auth::user()->akses_id == 1) {
            return view('dashboard.admininformasi.ubah_info', [
                'title' => 'SiPenmad | Ubah Informasi',
                'informasi' => $informasi
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Informasi $informasi)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'description' => 'required',
            'petugas' => 'required'
        ]);

        Informasi::where('id', $informasi->id)
            ->update($validated);
        return redirect('/admin/informasi')->with('suksesubah', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Informasi  $informasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Informasi $informasi)
    {
        Informasi::destroy($informasi->id);
        return redirect('/admin/informasi')->with('sukseshapus', 'Data Berhasil dihapus!');
    }
}
