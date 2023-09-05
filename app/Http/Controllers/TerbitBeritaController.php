<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TerbitBeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::with('kategori')->where('status', 'Terbit')->latest();
        if (request('cari')) {
            $berita->where('judul', 'like', '%' . request('cari') . '%')
                ->orWhere('body', 'like', '%' . request('cari') . '%');
        }

        return view('berita', [
            'title' => 'Berita Penmad',
            'berita' => $berita->paginate(7)
        ]);
    }

    public function tampilberita($id)
    {
        return view('beritatampil', [
            'title' => 'Berita Penmad',
            'beritanya' => Berita::find($id)
        ]);
    }
}
