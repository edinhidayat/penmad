<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserDataSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.dtsiswa.indexdtsiswa', [
            'title' => 'SiPenmad | Data Siswa',
            'datasiswa' => Siswa::orderby('tahunajaran_id', 'desc')->where('madrasah_id', Auth::User()->madrasah_id)->with(['madrasah', 'tahunajaran'])->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.dtsiswa.tmb_dtsiswa', [
            'title' => 'SiPenmad | Tambah Data Siswa',
            'tahunajaran' => DB::table('tahunajarans')->orderBy('id', 'Desc')->get()
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
            'tahunajaran_id' => 'required',
            'madrasah_id' => 'required',
            'lakilaki' => 'required',
            'perempuan' => 'required',
            'total' => 'required',
            'kip' => 'nullable',
            'kks' => 'nullable',
            'pkh' => 'nullable'
        ]);

        Siswa::create($validated);
        return redirect('/dashboard/dtsiswa')->with('suksestambah', 'Data Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function edit($siswa)
    {
        $data = Siswa::find($siswa);

        if (isset($data['id'])) {
            if ($data['madrasah_id'] == Auth::User()->madrasah_id) {
                return view('dashboard.dtsiswa.ubah_dtsiswa', [
                    'title' => 'SiPenmad | Ubah Data siswa',
                    'datasiswa' => $data,
                    'tahunajaran' => DB::table('tahunajarans')->orderBy('id', 'Desc')->get()
                ]);
            }
            return redirect('/dashboard/dtsiswa')->with('datatidakada', 'Data tidak diketemukan!');
        }
        return redirect('/dashboard/dtsiswa')->with('datatidakada', 'Data tidak diketemukan!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $siswa)
    {
        $validated = $request->validate([
            'tahunajaran_id' => 'required',
            'madrasah_id' => 'required',
            'lakilaki' => 'required',
            'perempuan' => 'required',
            'total' => 'required',
            'kip' => 'nullable',
            'kks' => 'nullable',
            'pkh' => 'nullable'
        ]);

        Siswa::where('id', $siswa)
            ->update($validated);
        return redirect('/dashboard/dtsiswa')->with('suksesubah', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */
    public function destroy($siswa)
    {
        $dtsiswa = Siswa::find($siswa);
        Siswa::destroy($dtsiswa->id);
        return redirect('/dashboard/dtsiswa')->with('sukseshapus', 'Data Berhasil dihapus!');
    }
}
