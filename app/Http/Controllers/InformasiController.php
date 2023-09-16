<?php

namespace App\Http\Controllers;

use App\Models\informasi;
use Illuminate\Http\Request;

class InformasiController extends Controller
{
    public function index()
    {
        return view('front.informasi',[
            'title' => 'Informasi Penmad',
            'informasi' => informasi::latest()->get()
        ]);
    }

    public function detail($id)
    {
        $detail = informasi::find($id);
        return view('front.informasi-detail',[
            'title' => 'Detail Informasi',
            'infodetail' => $detail
        ]);
    }
}
