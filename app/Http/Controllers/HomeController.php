<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('front.home',[
            'title'=>'Penmad Majalengka',
            'berita'=>Berita::latest()->get()
        ]);
    }
}
