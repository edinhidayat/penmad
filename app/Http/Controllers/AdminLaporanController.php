<?php

namespace App\Http\Controllers;

use App\Models\Jenislaporan;
use App\Models\Laporan;
use App\Models\Tahunajaran;
use ZipArchive;
use Illuminate\Support\Facades\Auth;

class AdminLaporanController extends Controller
{
    public function index()
    {
        if (Auth::user()->akses_id == 1) {
            return view('dashboard.adminlap.index', [
                'title' => 'SiPenmad | Daftar Laporan',
                'jenislaporan' => Jenislaporan::orderby('id', 'desc')->get(),
                'tahunajaran' => Tahunajaran::orderby('id', 'desc')->get(),
                'jenjang' => ['MA', 'MTs', 'MI', 'RA'],
                'status' => ['Negeri', 'Swasta']
            ]);
        }
    }

    public function tampilkan($thn, $jns, $jenjang, $status)
    {
        $laporan = Laporan::where('jenislaporan_id', $jns)->where('tahunajaran_id', $thn)->whereHas('madrasah', function ($query) use ($jenjang, $status) {
            $query->where('jenjang', $jenjang)->where('status', $status); // Ganti 'keyword' dengan kata kunci pencarian
        });
        if (Auth::user()->akses_id == 1) {
            return view('dashboard.adminlap.tampil', [
                'laporan' => $laporan->get()
            ]);
        }
    }

    public function download($id)
    {
        if (Auth::user()->akses_id == 1) {
            $dtlaporan = Laporan::find($id);
            $namafile = $dtlaporan->namafile;
            return response()->download(storage_path('app/' . $namafile));
        }
    }

    public function downloadsemua()
    {
        $ids = request('ids');
        if ($ids != null) {
            $zip = new ZipArchive;
            $filename = "laporan-files.zip";

            // $idArray = explode(',', $ids);
            // $dwnlaporan = Laporan::whereIn('id', $idArray)->get();
            if ($zip->open($filename, ZipArchive::CREATE)) {
                $idArray = explode(',', $ids);
                $dwnlaporan = Laporan::whereIn('id', $idArray)->get();

                foreach ($dwnlaporan as $laporan) {
                    $namafile = $laporan->namafile;
                    $filePath = storage_path('app/' . $namafile);

                    if (file_exists($filePath)) {
                        $zip->addFile($filePath, $namafile);
                    }
                }
                $zip->close();
            }
            return response()->download($filename)->deleteFileAfterSend($filename);
        }
        return redirect('/admin/laporan')->with('datatidakada', 'Data tidak diketemukan!');
    }
}
