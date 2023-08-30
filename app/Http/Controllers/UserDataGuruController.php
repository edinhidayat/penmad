<?php

namespace App\Http\Controllers;

use App\Models\Gol;
use App\Models\Guru;
use App\Models\Jeniskelamin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDataGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.dtguru.indexdtguru', [
            'title' => 'SiPenmad | Data Guru',
            'dataguru' => Guru::orderby('gol', 'desc')->where('madrasah_id', Auth::User()->madrasah_id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.dtguru.tmb_dtguru', [
            'title' => 'SiPenmad | Tambah Data Guru',
            'jeniskelamin' => Jeniskelamin::all(),
            'gol' => Gol::all()
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
            'namaguru' => 'required',
            'gelardepan' => 'nullable',
            'gelarbelakang' => 'nullable',
            'nip' => 'required',
            'jeniskelamin' => 'required',
            'tempatlahir' => 'nullable',
            'tanggallahir' => 'nullable',
            'gol' => 'required',
            'pangkat' => 'required',
            'mapel' => 'required',
            'lulusan' => 'required',
            'jurusan' => 'required',
            'tahunlulus' => 'required'
        ]);

        Guru::create($validated);
        return redirect('/dashboard/dtguru')->with('suksestambah', 'Data Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function show(Guru $guru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function edit($guru)
    {
        $data = Guru::find($guru);

        if (isset($data['id'])) {
            if ($data['madrasah_id'] == Auth::User()->madrasah_id) {
                return view('dashboard.dtguru.ubah_dtguru', [
                    'title' => 'SiPenmad | Ubah Data Guru',
                    'dataguru' => $data,
                    'jeniskelamin' => Jeniskelamin::all(),
                    'gol' => Gol::all()
                ]);
            }
            return redirect('/dashboard/dtguru')->with('datatidakada', 'Data tidak diketemukan!');
        }
        return redirect('/dashboard/dtguru')->with('datatidakada', 'Data tidak diketemukan!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $guru)
    {
        $validated = $request->validate([
            'madrasah_id' => 'required',
            'namaguru' => 'required',
            'gelardepan' => 'nullable',
            'gelarbelakang' => 'nullable',
            'nip' => 'required',
            'jeniskelamin' => 'required',
            'tempatlahir' => 'nullable',
            'tanggallahir' => 'nullable',
            'gol' => 'required',
            'pangkat' => 'required',
            'mapel' => 'required',
            'lulusan' => 'required',
            'jurusan' => 'required',
            'tahunlulus' => 'required'
        ]);

        Guru::where('id', $guru)
            ->update($validated);
        return redirect('/dashboard/dtguru')->with('suksesubah', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guru  $guru
     * @return \Illuminate\Http\Response
     */
    public function destroy($guru)
    {
        $dtguru = Guru::find($guru);
        Guru::destroy($dtguru->id);
        return redirect('/dashboard/dtguru')->with('sukseshapus', 'Data Berhasil dihapus!');
    }
}
