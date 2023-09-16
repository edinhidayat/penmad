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
            $nama = "Raudhatul Athfal";
        } elseif ($madrasah == 'min') {
            $datamdr = Madrasah::where('jenjang', 'mi')->where('status', 'negeri')->orderby('namamadrasah', 'asc')->get();
            $nama = "Madrasah Ibtidaiyah Negeri";
        } elseif ($madrasah == 'mis') {
            $datamdr = Madrasah::where('jenjang', 'mi')->where('status', 'swasta')->orderby('nsm', 'asc')->get();
            $nama = "Madrasah Ibtidaiyah Swasta";
        } elseif ($madrasah == 'mtsn') {
            $datamdr = Madrasah::where('jenjang', 'mts')->where('status', 'negeri')->orderby('kodesatker', 'asc')->get();
            $nama = "Madrasah Tsanawiyah Negeri";
        } elseif ($madrasah == 'mtss') {
            $datamdr = Madrasah::where('jenjang', 'mts')->where('status', 'swasta')->orderby('nsm', 'asc')->get();
            $nama = "Madrasah Tsanawiyah Swasta";
        } elseif ($madrasah == 'man') {
            $datamdr = Madrasah::where('jenjang', 'ma')->where('status', 'negeri')->orderby('npsn', 'desc')->get();
            $nama = "Madrasah Aliyah Negeri";
        } else {
            $datamdr = Madrasah::where('jenjang', 'ma')->where('status', 'swasta')->orderby('nsm', 'asc')->get();
            $nama = "Madrasah Aliyah Swasta";
        }

        return view('front.madrasah', [
            'title' => 'SiPenmad | ' . $madrasah,
            'data' => $datamdr,
            'madrasah' => $madrasah,
            'nama' => $nama
        ]);
    }
}
