<?php

namespace App\Http\Controllers;

use App\Models\Sarpras;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserSarprasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.sarpras.indexsarpras',[
            'title' => 'SiPenmad | Sarana dan Prasarana',
            'dtsarpras' => Sarpras::orderby('id','asc')->where('madrasah_id', Auth::User()->madrasah_id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.sarpras.tmb_sarpras',[
            'title' => 'SiPenmad | Tambah Data Sarpras'
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
            'sarpras' => 'required',
            'merk' => 'nullable',
            'baik' => 'nullable',
            'rr' => 'nullable',
            'rs' => 'nullable',
            'rb' => 'nullable',
            'jumlah' => 'required'
        ]);

        Sarpras::create($validated);
        return redirect('/dashboard/sarpras')->with('suksestambah', 'Data Berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sarpras  $sarpras
     * @return \Illuminate\Http\Response
     */
    public function show(Sarpras $sarpras)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sarpras  $sarpras
     * @return \Illuminate\Http\Response
     */
    public function edit($sarpras)
    {
        $data = Sarpras::find($sarpras);
        
        if(isset($data['id'])){
            if($data['madrasah_id'] == Auth::User()->madrasah_id){
                return view('dashboard.sarpras.ubah_sarpras',[
                    'title' => 'SiPenmad | Ubah Data sarpras',
                    'dtsarpras' => $data
                ]);
            }
            return redirect('/dashboard/sarpras')->with('datatidakada','Data tidak diketemukan!');
        }
        return redirect('/dashboard/sarpras')->with('datatidakada','Data tidak diketemukan!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sarpras  $sarpras
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sarpras)
    {
        $validated = $request->validate([
            'madrasah_id' => 'required',
            'sarpras' => 'required',
            'merk' => 'nullable',
            'baik' => 'nullable',
            'rr' => 'nullable',
            'rs' => 'nullable',
            'rb' => 'nullable',
            'jumlah' => 'required'
        ]);

        Sarpras::where('id', $sarpras)
            ->update($validated);
        return redirect('/dashboard/sarpras')->with('suksesubah', 'Data Berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sarpras  $sarpras
     * @return \Illuminate\Http\Response
     */
    public function destroy($sarpras)
    {
        $datasarpras = Sarpras::find($sarpras);
        Sarpras::destroy($datasarpras->id);
        return redirect('/dashboard/sarpras')->with('sukseshapus', 'Data Berhasil dihapus!');
    }
}
