<?php

namespace App\Http\Controllers;

use App\Models\Madrasah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Madrasah  $madrasah
     * @return \Illuminate\Http\Response
     */
    public function show(Madrasah $madrasah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Madrasah  $madrasah
     * @return \Illuminate\Http\Response
     */
    public function edit($madrasah)
    {
        $data = Madrasah::find($madrasah);
        
        if(isset($data['id'])){
            if($data['id'] == Auth::User()->madrasah_id){
                return view('dashboard.profil.indexprofil',[
                    'title' => 'SiPenmad | Profil Lembaga',
                    'dtprofil' => $data
                ]);
            }
            return redirect('/dashboard/profil/'. Auth::User()->madrasah_id .'/edit')->with('datatidakada','Data tidak diketemukan!');
        }
        return redirect('/dashboard/profil/'. Auth::User()->madrasah_id .'/edit')->with('datatidakada','Data tidak diketemukan!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Madrasah  $madrasah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $madrasah)
    {
        $validated = $request->validate([
            'nsm' => 'required',
            'npsn' => 'nullable',
            'kodesatker' => 'nullable',
            'jenjang' => 'required',
            'status' => 'required',
            'namamadrasah' => 'required',
            'alamat' => 'required',
            'desa' => 'nullable',
            'kecamatan' => 'required',
            'namakepala' => 'nullable',
            'nipkepala' => 'nullable'
        ]);

        Madrasah::where('id', $madrasah)
            ->update($validated);
        return redirect('/dashboard/profil/'. Auth::User()->madrasah_id .'/edit')->with('suksesubah', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Madrasah  $madrasah
     * @return \Illuminate\Http\Response
     */
    public function destroy(Madrasah $madrasah)
    {
        //
    }
}
