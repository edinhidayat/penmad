<?php

namespace App\Http\Controllers;

use App\Models\Tahunajaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminTaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->akses_id == 1) {
            return view('dashboard.adminta.index', [
                'title' => 'SiPenmad | Tahun Ajaran',
                'ta' => Tahunajaran::latest()->get()
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
            return view('dashboard.adminta.tmb_data', [
                'title' => 'SiPenmad | Tambah Tahun Ajaran'
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
            'tahunajaran' => 'required|unique:tahunajarans'
        ]);

        Tahunajaran::create($validated);
        return redirect('/admin/ta')->with('suksestambah', 'Data Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tahunajaran  $tahunajaran
     * @return \Illuminate\Http\Response
     */
    public function show($tahunajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tahunajaran  $tahunajaran
     * @return \Illuminate\Http\Response
     */
    public function edit($tahunajaran)
    {
        if (Auth::user()->akses_id == 1) {
            $dtta = Tahunajaran::find($tahunajaran);
            return view('dashboard.adminta.ubah_data', [
                'title' => 'SiPenmad | Ubah Tahun Ajaran',
                'ta' => $dtta
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tahunajaran  $tahunajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $tahunajaran)
    {
        $dtta = Tahunajaran::find($tahunajaran);
        $validated = $request->validate([
            'tahunajaran' => 'required|unique:tahunajarans'
        ]);

        Tahunajaran::where('id', $dtta->id)
            ->update($validated);
        return redirect('/admin/ta')->with('suksesubah', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tahunajaran  $tahunajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy($tahunajaran)
    {
        //
    }
}
