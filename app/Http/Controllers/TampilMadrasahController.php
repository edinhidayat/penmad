<?php

namespace App\Http\Controllers;

use App\Models\Madrasah;
use Illuminate\Http\Request;

class TampilMadrasahController extends Controller
{
    public function tampil($madrasah)
    {
        if ($madrasah == 'ra') {
            $datamdr = Madrasah::where('jenjang', 'ra')->orderby('npsn', 'asc')->get();
        } elseif ($madrasah == 'min') {
            $datamdr = Madrasah::where('jenjang', 'mi')->where('status', 'negeri')->orderby('namamadrasah', 'asc')->get();
        } elseif ($madrasah == 'mis') {
            $datamdr = Madrasah::where('jenjang', 'mi')->where('status', 'swasta')->orderby('nsm', 'asc')->get();
        } elseif ($madrasah == 'mtsn') {
            $datamdr = Madrasah::where('jenjang', 'mts')->where('status', 'negeri')->orderby('kodesatker', 'asc')->get();
        } elseif ($madrasah == 'mtss') {
            $datamdr = Madrasah::where('jenjang', 'mts')->where('status', 'swasta')->orderby('nsm', 'asc')->get();
        } elseif ($madrasah == 'man') {
            $datamdr = Madrasah::where('jenjang', 'ma')->where('status', 'negeri')->orderby('npsn', 'desc')->get();
        } else {
            $datamdr = Madrasah::where('jenjang', 'ma')->where('status', 'swasta')->orderby('nsm', 'asc')->get();
        }

        return view('madrasah', [
            'title' => 'SiPenmad | ' . $madrasah,
            'data' => $datamdr,
            'madrasah' => $madrasah
        ]);
    }
}
