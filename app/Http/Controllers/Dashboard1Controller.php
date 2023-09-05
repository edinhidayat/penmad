<?php

namespace App\Http\Controllers;

use App\Models\Akreditasi;
use App\Models\Guru;
use App\Models\Madrasah;
use App\Models\Sarpras;
use App\Models\Siswa;
use App\Models\Tahunajaran;
use Illuminate\Support\Facades\Auth;

class Dashboard1Controller extends Controller
{
    public function index()
    {
        return view('dashboard.dash.index', [
            'title' => 'Dashboard | SiPenmad',
            'dtmadrasah' => Madrasah::find(Auth::User()->madrasah_id),
            'akreditasi' => Akreditasi::orderby('tahun', 'desc')->orderby('id', 'desc')->where('madrasah_id', Auth::User()->madrasah_id)->get(),
            'datasiswa' => Siswa::orderby('tahunajaran_id', 'desc')->where('madrasah_id', Auth::User()->madrasah_id)->with(['madrasah', 'tahunajaran'])->get(),
            'dataguru' => Guru::orderby('gol', 'desc')->where('madrasah_id', Auth::User()->madrasah_id)->get(),
            'dtsarpras' => Sarpras::orderby('id', 'asc')->where('madrasah_id', Auth::User()->madrasah_id)->get(),
            'thnajaran' => Tahunajaran::orderby('id', 'desc')->get()
        ]);
    }

    public function tabelsiswa($tahun)
    {
        return view('dashboard.dash.tabelsiswa', [
            'title' => 'Dashboard | SiPenmad',
            'datasiswa' => Siswa::orderby('tahunajaran_id', 'desc')->where('tahunajaran_id', $tahun)->where('madrasah_id', Auth::User()->madrasah_id)->with(['madrasah', 'tahunajaran'])->get()
        ]);
    }
}
