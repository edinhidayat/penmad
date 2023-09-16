<?php

namespace App\Http\Controllers;

use App\Models\Akreditasi;
use App\Models\Guru;
use App\Models\Madrasah;
use App\Models\Sarpras;
use App\Models\Siswa;
use App\Models\Tahunajaran;

class TampilDetailMadrasahController extends Controller
{
    public function index($madrasah, $id)
    {
        return view('front.madrasahshow', [
            'title' => 'Dashboard | SiPenmad',
            'dtmadrasah' => Madrasah::find($id),
            'akreditasi' => Akreditasi::orderby('tahun', 'desc')->orderby('id', 'desc')->where('madrasah_id', $id)->get(),
            'datasiswa' => Siswa::orderby('tahunajaran_id', 'desc')->where('madrasah_id', $id)->with(['madrasah', 'tahunajaran'])->get(),
            'dataguru' => Guru::orderby('gol', 'desc')->where('madrasah_id', $id)->get(),
            'dtsarpras' => Sarpras::orderby('id', 'asc')->where('madrasah_id', $id)->get(),
            'thnajaran' => Tahunajaran::orderby('id', 'desc')->get(),
            'madrasah' => $madrasah
        ]);
    }

    public function tabelsiswa($id, $tahun = null)
    {
        return view('front.tabelsiswa', [
            'title' => 'Dashboard | SiPenmad',
            'datasiswa' => Siswa::where('tahunajaran_id', $tahun)->where('madrasah_id', $id)->with(['madrasah', 'tahunajaran'])->get()
        ]);
    }
}
