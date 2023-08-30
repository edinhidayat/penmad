<?php

namespace App\Http\Controllers;

use App\Models\Akreditasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAkreditasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.akreditasi.indexakreditasi',[
            'title' => 'SiPenmad | Akreditasi',
            'akreditasi' => Akreditasi::orderby('tahun','desc')->orderby('id','desc')->where('madrasah_id', Auth::User()->madrasah_id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.akreditasi.tmb_akreditasi',[
            'title' => 'SiPenmad | Tambah Nilai Akreditasi'
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
            'nilai' => 'nullable',
            'peringkat' => 'required',
            'tahun' => 'nullable',
            'akhirakreditasi' => 'nullable'
        ]);

        Akreditasi::create($validated);
        return redirect('/dashboard/akreditasi')->with('suksestambah', 'Data Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Akreditasi  $akreditasi
     * @return \Illuminate\Http\Response
     */
    public function show($akreditasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Akreditasi  $akreditasi
     * @return \Illuminate\Http\Response
     */
    public function edit($akreditasi)
    {
        $data = Akreditasi::find($akreditasi);
        
        if(isset($data['id'])){
            if($data['madrasah_id'] == Auth::User()->madrasah_id){
                return view('dashboard.akreditasi.ubah_akreditasi',[
                    'title' => 'SiPenmad | Ubah Nilai Akreditasi',
                    'dtakreditasi' => $data
                ]);
            }
            return redirect('/dashboard/akreditasi')->with('datatidakada','Data tidak diketemukan!');
        }
        return redirect('/dashboard/akreditasi')->with('datatidakada','Data tidak diketemukan!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Akreditasi  $akreditasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $akreditasi)
    {
        $validated = $request->validate([
            'madrasah_id' => 'required',
            'nilai' => 'nullable',
            'peringkat' => 'required',
            'tahun' => 'nullable',
            'akhirakreditasi' => 'nullable'
        ]);

        Akreditasi::where('id', $akreditasi)
            ->update($validated);
        return redirect('/dashboard/akreditasi')->with('suksesubah', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Akreditasi  $akreditasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($akreditasi)
    {
        $dataakreditasi = Akreditasi::find($akreditasi);
        Akreditasi::destroy($dataakreditasi->id);
        return redirect('/dashboard/akreditasi')->with('sukseshapus', 'Data Berhasil dihapus!');
    }
}
