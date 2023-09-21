<?php

namespace App\Http\Controllers;

use App\Models\Download;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function index()
    {
        return view('front.download',[
            'title' => 'Download Penmad',
            'download' => Download::latest()->paginate(10)
        ]);
    }

    public function download($id)
    {
        $download = Download::find($id);
        $namafile = $download->namafile;
        return response()->download(storage_path('app/' . $namafile));
    }
}
