<?php

namespace App\Http\Controllers;

use App\Models\Danabos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnggaranBosController extends Controller
{
    public function index()
    {
        if(Auth::user()->akses_id == 1){
        return view('dashboard.adminanggaran.index',[
            'title' => 'SiPenmad | Anggaran Bos',
            'danabos' => Danabos::all()
        ]);}
    }
}
