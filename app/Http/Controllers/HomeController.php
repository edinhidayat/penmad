<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Download;
use App\Models\informasi;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home',[
            'title' => 'Penmad Majalengka',
            'berita' => Berita::latest()->get(),
            'informasi' => informasi::orderby('id','desc')->get(),
            'download' => Download::latest()->get()
        ]);
    }
}
