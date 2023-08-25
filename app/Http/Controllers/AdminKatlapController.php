<?php

namespace App\Http\Controllers;

use App\Models\Jenislaporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminKatlapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->akses_id == 1) {
            return view('dashboard.adminkatlap.index', [
                'title' => 'SiPenmad | Kategori Laporan',
                'katlap' => Jenislaporan::orderby('id', 'desc')->get()
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
            return view('dashboard.adminkatlap.tmb_data', [
                'title' => 'SiPenmad | Tambah Kategori Laporan'
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
            'jenislaporan' => 'required|unique:jenislaporans'
        ]);

        Jenislaporan::create($validated);
        return redirect('/admin/katlap')->with('suksestambah', 'Data Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jenislaporan  $jenislaporan
     * @return \Illuminate\Http\Response
     */
    public function show($jenislaporan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jenislaporan  $jenislaporan
     * @return \Illuminate\Http\Response
     */
    public function edit($jenislaporan)
    {
        if (Auth::user()->akses_id == 1) {
            $dtkatlap = Jenislaporan::find($jenislaporan);
            return view('dashboard.adminkatlap.ubah_data', [
                'title' => 'SiPenmad | Ubah Kategori Laporan',
                'katlap' => $dtkatlap
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jenislaporan  $jenislaporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $jenislaporan)
    {
        $dtkatlap = Jenislaporan::find($jenislaporan);
        $validated = $request->validate([
            'jenislaporan' => 'required|unique:jenislaporans'
        ]);

        Jenislaporan::where('id', $dtkatlap->id)
            ->update($validated);
        return redirect('/admin/katlap')->with('suksesubah', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jenislaporan  $jenislaporan
     * @return \Illuminate\Http\Response
     */
    public function destroy($jenislaporan)
    {
        //
    }
}
