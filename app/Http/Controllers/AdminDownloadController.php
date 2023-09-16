<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminDownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->akses_id == 1) {
            return view('dashboard.admindownload.index', [
                'title' => 'SiPenmad | Download',
                'download' => Download::orderby('id', 'desc')->get()
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
            return view('dashboard.admindownload.tmb_download', [
                'title' => 'SiPenmad | Tambah Data Download'
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
            'petugas' => 'required',
            'namafile' => 'file|max:5120|required'
        ]);

        $namafile = $request->file('namafile');
        $validated['namafile'] = $namafile->storeAs('download', $namafile->getClientOriginalName());

        Download::create($validated);
        return redirect('/admin/download')->with('suksestambah', 'Data Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function show(Download $download)
    {
        $namafile = $download->namafile;
        return response()->download(storage_path('app/' . $namafile));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function edit(Download $download)
    {
        if (Auth::user()->akses_id == 1) {
            return view('dashboard.admindownload.ubah_download', [
                'title' => 'SiPenmad | Ubah Data Download',
                'download' => $download
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Download $download)
    {
        $validated = $request->validate([
            'judul' => 'required',
            'petugas' => 'required',
            'namafile' => 'file|max:5120'
        ]);

        $namafile = $request->file('namafile');
        if($namafile){
            if($request->oldfile){
                Storage::delete($request->oldfile);
            }
            $validated['namafile'] = $namafile->storeAs('download', $namafile->getClientOriginalName());
        }

        Download::where('id', $download->id)
            ->update($validated);
        return redirect('/admin/download')->with('suksesubah', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Download  $download
     * @return \Illuminate\Http\Response
     */
    public function destroy(Download $download)
    {
        Download::destroy($download->id);
        if($download->namafile){
            Storage::delete($download->namafile);
        }
        return redirect('/admin/download')->with('sukseshapus', 'Data Berhasil dihapus!');
    }
}
