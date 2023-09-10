<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view('front.profil',[
            'title' => 'Profil Penmad Majalengka'
        ]);
    }

    public function visi()
    {
        return view('front.menu-profil.visi');
    }

    public function team()
    {
        return view('front.menu-profil.team');
    }

    public function job()
    {
        return view('front.menu-profil.job');
    }
}
