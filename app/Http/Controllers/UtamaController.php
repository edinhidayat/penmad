<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UtamaController extends Controller
{
    public function index(){
        return view('utama', [
            'title' => 'Penmad Majalengka'
        ]);
    }
}
