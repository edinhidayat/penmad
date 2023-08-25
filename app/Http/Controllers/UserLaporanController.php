<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Jenislaporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserLaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.laporan.indexlap', [
            'title' => 'SiPenmad | Daftar Laporan',
            'dtlaporan' => Laporan::orderby('id', 'asc')->where('madrasah_id', Auth::User()->madrasah_id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.laporan.tmb_lap', [
            'title' => 'SiPenmad | Tambah Laporan',
            'tahunajaran' => DB::table('tahunajarans')->orderBy('id', 'Desc')->get(),
            'jenislaporan' => Jenislaporan::orderby('id', 'desc')->get()
        ]);
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
            'tahunajaran_id' => 'required',
            'jenislaporan_id' => 'required',
            'namalaporan' => 'required',
            'namafile' => 'file|max:2048|required'
        ]);

        $namafile = $request->file('namafile');
        $validated['namafile'] = $namafile->storeAs('lap-penmad', Auth::user()->madrasah->namamadrasah . ' ' . $namafile->getClientOriginalName());

        Laporan::create($validated);
        return redirect('/dashboard/laporan')->with('suksestambah', 'Data Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function show(Laporan $laporan)
    {
        $namafile = $laporan->namafile;
        return response()->download(storage_path('app/' . $namafile));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function edit(Laporan $laporan)
    {
        return view('dashboard.laporan.ubah_lap', [
            'title' => 'SiPenmad | Ubah Laporan',
            'laporan' => $laporan,
            'tahunajaran' => DB::table('tahunajarans')->orderBy('id', 'Desc')->get(),
            'jenislaporan' => Jenislaporan::orderby('id', 'desc')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laporan $laporan)
    {
        $validated = $request->validate([
            'madrasah_id' => 'required',
            'tahunajaran_id' => 'required',
            'jenislaporan_id' => 'required',
            'namalaporan' => 'required',
            'namafile' => 'file|max:2048'
        ]);

        $namafile = $request->file('namafile');
        if($namafile){
            if($request->oldfile){
                Storage::delete($request->oldfile);
            }
            $validated['namafile'] = $namafile->storeAs('lap-penmad', Auth::user()->madrasah->namamadrasah . ' ' . $namafile->getClientOriginalName());
        }

        Laporan::where('id', $laporan->id)
            ->update($validated);
        return redirect('/dashboard/laporan')->with('suksesubah', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laporan  $laporan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laporan $laporan)
    {
        Laporan::destroy($laporan->id);
        if($laporan->namafile){
            Storage::delete($laporan->namafile);
        }
        return redirect('/dashboard/laporan')->with('sukseshapus', 'Data Berhasil dihapus!');
    }
}
